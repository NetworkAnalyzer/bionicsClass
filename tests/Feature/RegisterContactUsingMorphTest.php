<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Admin;
use App\User;

class RegisterContactUsingMorphTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function should_AdminとUserでそれぞれContactを保存する()
    {
        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => 'admin',
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => 'user',
        ]);

        $adminContact = [
            'name' => $admin->name,
            'email' => $admin->email,
            'message' => $admin->password,
        ];
        $admin->contacts()->create($adminContact);

        $userContact = [
            'name' => $user->name,
            'email' => $user->email,
            'message' => $user->password,
        ];
        $user->contacts()->create($userContact);

        $this->assertEquals($admin->contacts->first()->message, $adminContact['message']);
        $this->assertEquals($user->contacts->first()->message, $userContact['message']);
    }
}
