<ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('employer.dashboard') ? 'active open' : '' }}">
            <a href="{{ route('employer.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('employer.ticket') ? 'active open' : '' }}">
            <a href="{{ route('employer.ticket') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-discount"></i>
                <div data-i18n="Analytics">My Tickets</div>
            </a>
        </li>

        <li class="menu-item =">
            <a href="{{ route('employer.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Profile</div>
            </a>
        </li>
</ul>