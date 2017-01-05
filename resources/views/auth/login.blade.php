@extends('layouts.general')

@section('title', 'Login')

@section('general-body-border')
    <div class="ui segment override wrapper general-parts general-body">
        <div class="ui segment override header">
            <div class="header-title">
                <div class="login-title title">Account Login</div>
            </div>
            <div class="header-actions">
                <i class="translate icon"></i>
            </div>
        </div>
        <form class="general-body-content" id="loginForm" method="POST" action="{{ url('login') }}">
            {{ csrf_field() }}
            
            <div class="gen-body ui segment override loaders">
                <div class="ui form">
                    @if (session('status'))
                    <div class="field override">
                        <div class="ui visible message positive mini">
                          <p>{{ session('status') }}</p>
                        </div>
                    </div>
                    @endif

                    <div class="field override margin">
                        <label class="field-title">Username</label>
                        <div class="ui left icon input override">
                            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required autofocus>
                            <i class="user icon"></i>   
                        </div>
                    </div>  
                    <div class="field override">
                        <label class="field-title">Password</label>
                        <div class="ui left icon input override">
                            <input type="password" name="password" placeholder="Password" required>
                            <i class="lock icon"></i>
                        </div>
                    </div>

                    @if ($errors->has('username'))
                    <div class="field override">
                        <label class="error-login">{{ $errors->first('username') }}</label>
                    </div>
                    @endif
                </div>
            </div>
            <div class="gen-footer">
                <div class="ui checkbox override">
                    <input type="checkbox">
                    <label>Remember Me</label>
                </div>
                <button type="submit" class="ui labeled icon tiny teal button override">
                    <i class="unlock icon"></i>
                    Login
                </button>
            </div>
        </form>
    </div>
@endsection

@section('general-forgot-pass')
    <div class="general-parts forgot-pass">
        Forgot password? <a href="{{ url('/password/reset') }}">Click here</a>
    </div>
@endsection