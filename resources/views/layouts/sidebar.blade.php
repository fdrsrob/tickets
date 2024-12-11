<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo" style="height: 115px;">
        <a href="#" class="app-brand-link text-center">
            {{-- @if($logo!=null)
                <img src="{{asset('uploads/settings/'.$logo)}}" alt="" class="img-fluid" style="height: 80px">
            @else
                <span class="app-brand-text demo menu-text fw-bold">{{$app_name}}</span>
            @endif --}}
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>
    <ul class="menu-inner py-1">
        <li class="menu-item {{Route::is('home.*')?'active':''}}">
            <a href="{{route('home.index')}}" class="menu-link">
                <i class="menu-icon ti ti-dashboard"></i>
                <div class="mx-2">{{__('Dashboard')}}</div>
            </a>
        </li>
        {{-- <li class="menu-item {{Route::is('tickets.*')?'active':''}}">
            <a href="{{route('tickets.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-ticket"></i>
                <div class="mx-2">{{__('Tickets')}}</div>
            </a>
        </li> --}}
        <li class="menu-item {{Route::is('profile-users.*')?'active':''}}">
            <a href="{{route('profile-users.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div class="mx-2">{{__('Users')}}</div>
            </a>
        </li>
        <li class="menu-item {{Route::is('properties.*')?'active':''}}">
            <a href="{{route('properties.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-home"></i>
                <div class="mx-2">{{__('Properties')}}</div>
            </a>
        </li>
        <li class="menu-item {{Route::is('countries.*')?'open':''}} {{Route::is('states.*')?'open':''}} {{Route::is('cities.*')?'open':''}}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div class="mx-2">{{__('Settings')}}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{Route::is('countries.index')?'active':''}}">
                    <a href="{{route('countries.index')}}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-world"></i>
                        <div>{{__('Countries')}}</div>
                    </a>
                </li>
                <li class="menu-item {{Route::is('states.index')?'active':''}}">
                    <a href="{{route('states.index')}}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-abacus""></i>
                        <div>{{__('States')}}</div>
                    </a>
                </li>
                <li class="menu-item {{Route::is('cities.index')?'active':''}}">
                    <a href="{{route('cities.index')}}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-location-pin"></i>
                        <div>{{__('Cities')}}</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
