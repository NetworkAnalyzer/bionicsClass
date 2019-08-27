@extends('layouts.app')

@section('content')

<div id="fh5co-contact">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Contact us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-push-1 animate-box">
                <h3>Our Address</h3>
                <ul class="contact-info">
                    <li><i class="icon-location"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                    <li><i class="icon-old-phone"></i>+ 1235 2355 98</li>
                    <li><i class="icon-mail22"></i><a href="#">info@yoursite.com</a></li>
                    <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
                </ul>
            </div>
            <div class="col-md-7 col-md-push-1 animate-box">
                {{ Form::open(['route' => 'contact.submit', 'method' => 'post']) }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::textarea('message', '', ['class' => 'form-control', 'cols' => '30', 'placeholder' => 'Message']) }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::submit('Send Message', ['class' => 'btn btn-primary'])}}
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection