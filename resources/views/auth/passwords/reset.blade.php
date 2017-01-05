@extends('layouts.general')

@section('title', 'Reset')

@section('general-body-border')
    <div class="ui segment override wrapper general-parts general-body">
        <div class="ui segment override header">
            <div class="header-title">
                <div class="login-title title">Reset Password</div>
            </div>
        </div>
        <form class="general-body-content" role="form" method="POST" action="{{ url('/password/reset') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
            
            <div class="gen-body">
                <div class="ui form">
                    @if (session('status'))
                        <div class="field override">
                            <div class="ui visible message positive mini">
                              <p>{{ session('status') }}</p>
                            </div>
                        </div>
                    @endif

                    <div class="field override margin">
                        <label class="field-title">Email Address</label>
                        <div class="ui left icon input override{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" placeholder="Email Address" value="{{ $email or old('email') }}" required autofocus>
                            <i class="user icon"></i>   
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <div class="field override">
                            <label class="error-login">{{ $errors->first('email') }}</label>
                        </div>
                    @endif

                    <div class="field override margin">
                        <label class="field-title">Password</label>
                        <div class="ui left icon input override{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password" placeholder="Password" required>
                            <i class="lock icon"></i>   
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <div class="field override">
                            <label class="error-login">{{ $errors->first('password') }}</label>
                        </div>
                    @endif

                    <div class="field override margin">
                        <label class="field-title">Confirm Password</label>
                        <div class="ui left icon input override{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                            <i class="lock icon"></i>   
                        </div>
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <div class="field override">
                            <label class="error-login">{{ $errors->first('password_confirmation') }}</label>
                        </div>
                    @endif
                </div>
            </div>
            <div class="gen-footer">
                <button type="submit" class="ui labeled fluid icon tiny teal button override" style="margin-right: 0;">
                    <i class="refresh icon"></i>
                    Reset Password
                </button>
            </div>
        </form>
    </div>
@endsection