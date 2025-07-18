<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" /> <span
                    class="logo-name">AGR Tech</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            </li>
            <li><a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i><span>Users Management</span></a></li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-hand-holding-usd"></i><span>Services Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.services.index') }}">Services List</a></li>
                    <li><a class="nav-link" href="{{ route('admin.services.create') }}">Create Service</a></li>
                    <li><a class="nav-link" href="{{ route('admin.categories.index') }}">Service Categories</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fas fa-laptop-code"></i><span>Courses Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.courses.index') }}">Courses List</a></li>
                    <li><a class="nav-link" href="{{ route('admin.courses.create') }}">Create Course</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-calendar-alt"></i><span>Slots Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.slots.index') }}">Slots List</a></li>
                    <li><a class="nav-link" href="{{ route('admin.slots.create') }}">Create Slot</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{ route('admin.bookings.index') }}"><i class="fas fa-calendar-check"></i><span>Bookings List</span></a></li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-award"></i><span>Memberships</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.memberships.index') }}">Membership List</a></li>
                    <li><a class="nav-link" href="{{ route('admin.memberships.create') }}">Create Membership</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-coins"></i><span>Credit Packages</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.credits.index') }}">All Packages</a></li>
                    <li><a class="nav-link" href="{{ route('admin.credits.create') }}">Create Package</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
