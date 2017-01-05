@extends('layouts.general')

@section('title', 'Reset')

@section('general-body-border')
    <div class="ui segment override wrapper general-parts general-body">
        <div class="ui segment override header">
            <div class="header-title">
                <div class="login-title title">Reset Password</div>
            </div>
        </div>
        <form class="general-body-content" id="emailForm" v-on:submit.prevent="emailFormSubmit">
            {{ csrf_field() }}
            
            <div class="gen-body ui segment override loaders">
                <div class="ui active inverted dimmer custom-loading" v-show="formLoad">
                    <img src="{{ asset('images/loading.svg') }}">
                </div>
                <div class="ui form">
                    <div class="field override" v-if="msgSuccess">
                        <div class="ui visible message positive mini">
                          <p>@{{ msgSuccess }}</p>
                        </div>
                    </div>
                    <div class="field override margin">
                        <label class="field-title">Email Address</label>
                        <div class="ui left icon input override">
                            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                            <i class="user icon"></i>   
                        </div>
                    </div>
                    <div class="field override"><label class="error-login">@{{ msgError }}</label></div>
                </div>
            </div>
            <div class="gen-footer">
                <button type="submit" class="ui labeled fluid icon tiny teal button override" style="margin-right: 0;">
                    <i class="mail icon"></i>
                    Send Password Reset Link
                </button>
            </div>
        </form>
    </div>
@endsection

@section('general-forgot-pass')
    <div class="general-parts forgot-pass">
        Do you want to login?<a href="{{ url('/login') }}">Click here</a>
    </div>
@endsection