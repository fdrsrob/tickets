<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="#">
            <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
            </div>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item me-2 me-xl-0">
                <a class="nav-link" href="#" target="_blank">
                    <i class="ti ti-md ti-external-link"></i>
                </a>
            </li>
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="" data-bs-toggle="dropdown">
                    {{-- @if(Auth::user()->image!=null)
                        <div class="avatar avatar-online">
                            <img src="{{asset('uploads/users/'.Auth::user()->image)}}" alt class="h-auto rounded-circle" />
                        </div>
                    @else
                        <div class="avatar avatar-online">
                            <span class="avatar-initial rounded-circle bg-label-primary">{{Auth::user()->name[0]}}</span>
                        </div>
                    @endif --}}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    {{-- @if(Auth::user()->image!=null)
                                        <div class="avatar avatar-online">
                                            <img src="{{asset('uploads/users/'.Auth::user()->image)}}" alt class="h-auto rounded-circle" />
                                        </div>
                                    @else
                                        <div class="avatar avatar-online">
                                            <span class="avatar-initial rounded-circle bg-label-primary">{{Auth::user()->name[0]}}</span>

                                        </div>
                                    @endif --}}
                                </div>
                                <div class="flex-grow-1">
                                    {{-- <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                    @foreach(Auth::user()->roles as $role)
                                        <small class="text-muted">{{ $role->name }}</small>
                                    @endforeach --}}
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="ti ti-user-check me-2 ti-sm"></i>
                            <span class="align-middle">{{__('Profile')}}</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="ti ti-logout me-2 ti-sm"></i>
                            <span class="align-middle">{{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="#" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
<!-- / Navbar -->
