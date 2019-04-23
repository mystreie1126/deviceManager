@extends('template')
@include('_includes.logoText')

@push('login')
  <div class="container">

        <p class="center">First Time login? Please register <a  href="{{ route('register') }}" class="">here</a></p>

        <form class="row login-form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-field col s12">
              <input id="email" placeholder="login Email" type="email" name="email" required>

            </div>


             @if ($errors->has('email'))
                <p class="red-text col s12">
                    <strong>{{ $errors->first('email') }}</strong>
                </p>
            @endif

            <div class="input-field col s12">
              <input id="pass"  placeholder="Your Password" type="password" name="password" required>
            </div>


            @if ($errors->has('password'))
                <p class="red-text col s12">
                    <strong>{{ $errors->first('password') }}</strong>
                </p>
            @endif

            <div class="col s12 row" style="padding-left:0">
                <p class=" col s4">
                    <input type="checkbox" class="filled-in" id="filled-in-box" name="remember" checked="checked" />
                    <label class="remember-label indigo-text" for="filled-in-box">Remember Me</label>
                </p>
                 <button class="btn teal darken-3 col s4 right" style="transform:translateY(10%)">
                    login
                </button>
            </div>


        </form>
    </div>
@endpush
