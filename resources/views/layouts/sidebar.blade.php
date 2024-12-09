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
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons icon-inicio"></i>
                <div class="mx-2">{{__('Home')}}</div>
            </a>
        </li>
        <li class="menu-item {{Route::is('tickets.*')?'active':''}}">
            <a href="{{route('tickets.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-ticket"></i>
                <div class="mx-2">{{__('Tickets')}}</div>
            </a>
        </li>
    </ul>
</aside>
