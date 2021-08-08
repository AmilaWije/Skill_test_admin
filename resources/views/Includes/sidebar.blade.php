<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">
        <li>
            <a href="{{route('dashboard')}}"><i class="ti-bar-chart"></i><span>Dashboard</span><span class="menu-arrow"><i></i></span></a>
        </li>

        <li>
            <a href="javascript: void(0);"><i class="ti-server"></i><span>Management</span><span class="menu-arrow"><i
                        class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ route('teritories.index') }}"><i class="ti-control-record"></i>Territory <span
                            class="menu-arrow left-has-menu"></span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('zones.index') }}"><i
                            class="ti-control-record"></i>Zone</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('regions.index') }}"><i
                            class="ti-control-record"></i>Region</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);"><i class="ti-server"></i><span>Main</span><span class="menu-arrow"><i
                        class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}"><i
                            class="ti-control-record"></i>User</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('items.index')}}"><i class="ti-control-record"></i>SKU</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- end left-sidenav -->
