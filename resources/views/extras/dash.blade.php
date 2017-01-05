<!DOCTYPE html>
<html lang="en">
    <head>
        @include('extras.metatags')

        <title>Dashboard - @include('extras.domain')</title>

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

        <div class="dashboard-container" id="dashboard">
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
                        <img class="ui mini image override" src="{{ asset('images/profile_images/default.png') }}">
                    </div>
                    <div class="user-text">
                        <strong>Jess Noel Augusto</strong>
                        <div>
                            <span class="disabled">Administrator</span>
                            <span class="disabled">
                                <i class="circle icon"></i>
                            </span>
                            <span>Logout</span>
                        </div>
                    </div>
                </div>
                <div class="navigation-wrapper">
                    <ul class="navigation">
                        <li class="nav-header">
                            Navigation
                        </li>
                        <li>
                            <a href="#" class="main-menu" v-link="{ path: '/dashboard', activeClass: 'active' }" @click="setBreadcrumb('Dashboard','dashboard', $event)">
                                <div>
                                    <i class="dashboard icon"></i>
                                    Dashboard
                                </div>  
                            </a>
                        </li>
                        <li>
                            <a href="#" class="main-menu" v-link="{ path: '/admin', activeClass: 'active' }" @click="setBreadcrumb('Administrator','users', $event)">
                                <div>
                                    <i class="users icon"></i>
                                    Administrator
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="main-menu" @click="showSubNavigation">
                                <div>
                                    <i class="star icon"></i>
                                    Academics
                                </div>
                                <i class="chevron down icon dropmenu"></i>
                            </a>
                            <ul class="sub-navigation">
                                <li>
                                    <a href="#" class="sub-active" v-link="{ path: '/acad' }" @click="setBreadcrumb('Academics - View Teachers','star', $event)">
                                        <i class="selected radio icon sub-icon"></i>
                                        <div class="sub-text"><i class="book icon"></i>View Teachers</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="selected radio icon sub-icon"></i>
                                        <div class="sub-text">Megaworld Book</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li v-show="toggleLeft">
                            <a href="#" class="main-menu" v-link="{ path: '/agent', activeClass: 'active' }" @click="setBreadcrumb('Agent','spy')">
                                <div>
                                    <i class="spy icon"></i>
                                    Agent
                                </div>
                            </a>
                        </li>
                        <li v-show="toggleLeft">
                            <a href="#" class="main-menu" v-link="{ path: '/student', activeClass: 'active' }" @click="setBreadcrumb('Students','student')">
                                <div>
                                    <i class="student icon"></i>
                                    Students
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="main-menu" v-link="{ path: '/classes', activeClass: 'active' }" @click="setBreadcrumb('Classes','calendar')">
                                <div>
                                    <i class="calendar icon"></i>
                                    Classes
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="main-menu" @click="showSubNavigation">
                                <div>
                                    <i class="home icon"></i>
                                    Contacts
                                </div>
                                <i class="chevron down icon dropmenu"></i>
                            </a>
                            <ul class="sub-navigation">
                                <li>
                                    <a href="#" class="sub-active">
                                        <i class="selected radio icon sub-icon"></i>
                                        <div class="sub-text">Megawide 1027</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="selected radio icon sub-icon"></i>
                                        <div class="sub-text">Megaworld Book</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
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
                        <application-clock></application-clock>
                    </div>
                    <div class="right">
                        <div class="ui icon top right dropdown override user-dropdown">
                            <img src="{{ asset('images/profile_images/i can do all things through Christ.jpg') }}" class="ui avatar image override">
                            <strong>Jess Noel</strong>
                            <i class="chevron down icon"></i>
                            <div class="menu override">
                                <a class="item">
                                    <div class="icon-text">
                                        <i class="setting icon"></i>
                                        <span>Account Settings</span>
                                    </div>
                                </a>
                                <div class="divider"></div>
                                <div class="item">
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
                                <a class="section" v-link="{ path: '/dashboard', activeClass: 'active' }" @click="setBreadcrumb('Dashboard','dashboard')">Home</a>
                                <a class="section">/</a>
                                <a class="section">@{{ breadcrumbs.name }}</a>
                            </div>
                        </div>
                        <div class="bread-crumb-right">
                            <i class="compass loading icon divider nav-icon-selected"></i>
                        </div>
                    </div>

                    <!-- Router View -->
                    <router-view :breadcrumbs.sync="breadcrumbs" keep-alive></router-view>
                </section>
            </div>
        </div>

        <!-- Include Vue components -->
        <flash-modal></flash-modal>

        <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
        <script src="{{ asset('js/plugins/semantic.min.js') }}"></script>
        <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
        <script src="{{ asset('js/plugins/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('js/plugins/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('js/plugins/webcam.min.js') }}"></script>
        <script src="{{ asset('js/plugins/custom-scroll.min.js') }}"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>
    </body>
</html>
