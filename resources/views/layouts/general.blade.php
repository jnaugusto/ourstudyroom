<!DOCTYPE html>
<html lang="en">
    <head>
        @include('extras.metatags')

        <title>@yield('title') - {{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet" type="text/css">
        
    </head>
    <body>

        <div class="general-container" id="login">
            <div class="general-wrap">
                <div class="general-parts app-logo">
                    <i class="edit icon massive"></i>
                    <div class="company-logo-slogan">
                        <strong>OURSTUDYROOM</strong>
                        <small>Study anywhere, everywhere.</small>
                    </div>
                </div>
                <div class="general-body-border">
                    @yield('general-body-border')
                </div>
                @yield('general-forgot-pass')
            </div>
        </div>

        <div class="bg-image">
            <div class="bg-image-overlay"></div>
        </div>

        <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
        <script src="{{ asset('js/plugins/jstz.min.js') }}"></script>
        <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
        <script src="{{ asset('js/plugins/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('js/login.js') }}"></script>
    </body>
</html>
