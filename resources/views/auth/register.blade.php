@extends('template')
@include('_includes.logoText')
@push('register')
<div class="container">

<h5 class="teal-text center">User Registration</h5>

    <form method="POST" action="{{ route('register') }}">
        @csrf
            <div>
                <input id="name" type="text" name="name" placeholder="Enter Your Name" required autofocus>

                @if ($errors->has('name'))
                    <p class="red-text">
                        <strong>{{ $errors->first('name') }}</strong>
                    </p>
                @endif
            </div>

            <div>
                <input id="email" type="email" name="email"  placeholder="Your Email" required>

                @if ($errors->has('email'))
                    <p class="red-text">
                        <strong>{{ $errors->first('email') }}</strong>
                    </p>
                @endif
            </div>

            <div>
                <input id="password" type="password" name="password" placeholder="password"passwordrequired>

                @if ($errors->has('password'))
                   <p class="red-text">
                        <strong>{{ $errors->first('password') }}</strong>
                    </p>
                @endif
            </div>

            <div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm your password"required>
            </div>


            <div>
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>

    </form>
@endpush
