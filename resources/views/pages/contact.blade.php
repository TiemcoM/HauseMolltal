@section('title')
    Contact
@endsection

@extends('layouts.app')

@section('content')
<br/>

@if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <!-- captcha message -->
        @if(Session::has('captcha'))
            <div class="alert alert-danger">
                {{Session::get('captcha')}}
            </div>
        @endif
<div class="container-fluid">

<div class="row">
    <div class="col-md-7 p-0">
        <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
        <script>
                grecaptcha.ready(function() {
                    grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
                        if (token) {
                        document.getElementById('recaptcha').value = token;
                        }
                    });
                });
        </script>

        <form action="" method="post" action="{{ route('contact.store') }}">

            @csrf

            <input type="hidden" name="recaptcha" id="recaptcha">

            <div class="form-group">
                <label>Naam</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

                <!-- Error -->
                @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

                @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Telefoon nummer</label>
                <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

                @if ($errors->has('phone'))
                <div class="error">
                    {{ $errors->first('phone') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Onderwerp</label>
                <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                    id="subject">

                @if ($errors->has('subject'))
                <div class="error">
                    {{ $errors->first('subject') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Inhoud</label>
                <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                    rows="4"></textarea>

                @if ($errors->has('message'))
                <div class="error">
                    {{ $errors->first('message') }}
                </div>
                @endif
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
        <br />
        <!-- Success message -->

        <br />
    </div>

    <div class="col-md-4 ml-auto p-0">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Contact gegevens</h5>
            @foreach ($gegevens as $gegeven)
            <table class="table">
                <tbody>
                    <tr>
                        <td scope="row" style="border: none; text-align: center;"><i class="fas fa-phone"></i></td>
                        <td style="border: none;">{{$gegeven->phone_number}}</td>
                    </tr>
                    <tr>
                        <td scope="row" style="border: none; text-align: center;"><i class="far fa-envelope"></i></i></td>
                        <td style="border: none;">{{$gegeven->email}}</td>
                    </tr>
                    <tr>
                        <td scope="row" style="border: none; text-align: center;"><i class="fas fa-map-pin"></i></td>
                        <td style="border: none;">{{$gegeven->street}}<br /> {{$gegeven->adress}} <br /> {{$gegeven->city}}</td>
                    </tr>
                </tbody>
            </table>
            @endforeach
        </div>
        </div>
    </div>
</div>
</div>
@endsection
