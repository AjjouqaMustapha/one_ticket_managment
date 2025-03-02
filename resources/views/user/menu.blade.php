<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->routeIs('user.dashboard') ? 'active open' : '' }}">
        <a href="{{ route('user.dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>
    <li class="menu-item {{ request()->routeIs('employer.ticket') ? 'active open' : '' }}">
        <a href="{{ route('employer.ticket') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bxs-discount"></i>
            <div data-i18n="Analytics">My Tickes</div>
        </a>
    </li>
    @php
        $i = 1; 
    @endphp

    @foreach ($polices as $police)
        <li class="menu-item {{ request()->routeIs('user.police') && decrypt(request()->route('id')) == $police->id ? 'active open' : '' }}">
            <a href="{{ route('user.police',encrypt($police->id)) }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-album"></i>
                <div data-i18n="Analytics">Police {{ $i }}</div>
            </a>
        </li>
        @php
            $i++; 
        @endphp
    @endforeach


    <li class="menu-item =">
        <a href="{{ route('employer.dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="Analytics">Profile</div>
        </a>
    </li>
</ul>