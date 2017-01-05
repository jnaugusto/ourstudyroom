@extends('layouts.home')

@section('title', 'Dashboard')

@section('dashboard-navigation')
	<ul class="navigation">
        <li class="nav-header">
            Navigation
        </li>
        <li>
            <a class="main-menu">
                <div>
                    <i class="dashboard icon"></i>
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <router-link :to="{ name: 'administrator' }" class="main-menu">
                <div>
                    <i class="users icon"></i>
                    Administrator
                </div>
            </router-link>
        </li>
        <li>
            <a class="main-menu">
                <div>
                    <i class="star icon"></i>
                    Academic
                </div>
            </a>
        </li>
        <li>
            <a class="main-menu">
                <div>
                    <i class="student icon"></i>
                    Student
                </div>
            </a>
        </li>
        <li>
            <a class="main-menu">
                <div>
                    <i class="spy icon"></i>
                    Agent
                </div>
            </a>
        </li>
    </ul>
@endsection