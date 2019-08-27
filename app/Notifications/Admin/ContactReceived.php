<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Contact;

class ContactReceived extends Notification
{
    use Queueable;

    private $contact;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('お問い合わせ受付完了のお知らせ')
            ->greeting("以下の内容でお問い合わせを受け付けました。")
            ->line("───────────────────────────────")
            ->line("氏名：{$this->contact->name}")
            ->line("メールアドレス：{$this->contact->email}")
            ->line("内容：{$this->contact->message}")
            ->line("───────────────────────────────")
            ->line("このメールはシステムにより、自動返信されています。")
            ->line("このメールアドレスは送信専用です。返信はお控えください。");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
