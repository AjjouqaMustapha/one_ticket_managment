@extends('dashboard_layout.layout')


@section('menu')
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('employer.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>


        <li class="menu-item {{ request()->routeIs('issue.index') ? 'active' : '' }}">
            <a href="{{ route('issue.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-discount"></i>
                <div data-i18n="Analytics">Tickets</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('polices.index') ? 'active' : '' }}">
            <a href="{{ route('polices.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-album"></i>
                <div data-i18n="Analytics">Polices</div>
            </a>
        </li>


        <li class="menu-item  {{ request()->routeIs('users*') || request()->routeIs('admins*') || request()->routeIs('employers*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base bx bxs-user-account"></i>
                <div data-i18n="Layouts">Users</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('users.users') ? 'active' : '' }}">
                    <a href="{{route('users.users')}}" class="menu-link ">
                        <div data-i18n="Without menu">List Users</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('users.employers') ? 'active' : '' }}">
                    <a href="{{route('users.employers')}}" class="menu-link">
                        <div data-i18n="Without navbar">List Employers</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('users.admins') ? 'active' : '' }}">
                    <a href="{{route('users.admins')}}" class="menu-link">
                        <div data-i18n="Without menu">List Admins</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item =">
            <a href="{{ route('employer.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Profile</div>
            </a>
        </li>
    </ul>
@endsection