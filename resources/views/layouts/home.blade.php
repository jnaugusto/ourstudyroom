<!DOCTYPE html>
<html lang="en">
    <head>
        @include('extras.metatags')

        <title>@yield('title') - {{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom-scroll.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/flag.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="dashboard-container" id="dashcontainer">
            <div class="dashboard-left" :class="{ 'toggleleft': toggleLeft }">
                <div class="company-name">
                    <i class="edit icon company-logo"></i>
                    <div class="name">
                        <strong>Ourstudyroom</strong>
                        <small>Study anywhere, everywhere.</small>
                    </div>
                </div>
                <div class="user-info">
                    <div class="user-profile-image">
                        <img class="ui mini image override" src="{{ asset('images/profile_images/'.$userInfo->photo) }}">
                    </div>
                    <div class="user-text">
                        <strong>{{ $userInfo->firstname }} {{ $userInfo->lastname }}</strong>
                        <div>
                            <span class="disabled">{{ ucfirst($accountInfo->roles->role_name) }}</span>
                            <span class="disabled">
                                <i class="circle icon"></i>
                            </span>
                            <span onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</span>
                        </div>
                    </div>
                </div>
                <div class="navigation-wrapper">
                    @yield('dashboard-navigation')
                </div>
            </div>
            <div class="dashboard-right" :class="{ 'toggleleft': toggleLeft }">
                <div class="body-header">
                    <div class="left">
                        <div class="left-sidebar-toggle" @click="toggleLeft = !toggleLeft">
                            <i class="content icon"></i>
                        </div>
                    </div>
                    <div class="center">
                        <clock></clock>
                    </div>
                    <div class="right">
                        <div class="ui icon top right dropdown override user-dropdown">
                            <img src="{{ asset('images/profile_images/'.$userInfo->photo) }}" class="ui avatar image override">
                            <strong>{{ $userInfo->firstname }}</strong>
                            <i class="chevron down icon"></i>
                            <div class="menu override">
                                <a class="item">
                                    <div class="icon-text">
                                        <i class="setting icon"></i>
                                        <span>Account Settings</span>
                                    </div>
                                </a>
                                <div class="divider"></div>
                                <div class="item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <div class="icon-text">
                                        <i class="power icon"></i>
                                        <span>Logout</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="body-right">
                    <div class="bread-crumb-wrapper">
                        <div class="bread-crumb-left">
                            <span>Navigation</span>
                            <div class="ui small breadcrumb bread-crumb">
                                <a class="section" @click="setBreadcrumb('Dashboard','dashboard')">Home</a>
                                <a class="section">/</a>
                                <a class="section">@{{ breadcrumbs.name }}</a>
                            </div>
                        </div>
                        <div class="bread-crumb-right">
                            <i class="compass loading icon divider nav-icon-selected"></i>
                        </div>
                    </div>

                    <!-- Router View -->
                    <router-view keep-alive></router-view>
                </section>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

        <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
        <script src="{{ asset('js/plugins/semantic.min.js') }}"></script>
        <script src="{{ asset('js/plugins/jstz.min.js') }}"></script>
        <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
        <script src="{{ asset('js/plugins/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('js/plugins/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('js/plugins/webcam.min.js') }}"></script>
        <script src="{{ asset('js/plugins/custom-scroll.min.js') }}"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>
    </body>
</html>
