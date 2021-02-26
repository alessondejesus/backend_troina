<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title', 'Admin') &mdash; {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('stylesheet')
    @livewireStyles
</head>
<body>
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto" action="">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block">Hi, John Doe</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Welcome, John Doe</div>
                        <a href="#" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="">{{ config('app.name') }}</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="{{ request()->is('/admin') ? 'active' : '' }}"><a class="nav-link"
                                                                                 href="{{ route('admin.dashboard') }}"><i
                                class="fas fa-columns"></i> <span>Dashboard</span></a></li>
                    <li class="menu-header">Users</li>
                    <li><a class="nav-link" href="{{route('admin.users.index')}}"><i class="fas fa-users"></i> <span>Users</span></a>
                    </li>
                </ul>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            {{ $slot }}
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; {{date('Y')}}
                <div class="bullet"></div>
                Design By Álesson de Jesus
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer>
    </div>
</div>
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
@stack('javascript')
@livewireScripts
</body>
</html>
