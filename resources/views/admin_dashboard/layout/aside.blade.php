<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header justify-content-between">

        <div>
            <img src="{{ asset('admin_dashboard/assets/images/logo-w.png')}}" width="90"  />
        </div>
        <div class="toggle-icon "> <i class="bi bi-list"></i>
        </div>

    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard')  }}">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">الرئيسية</div>
            </a>
        </li>

        @foreach($menuData as $menu)
        <li>
            <a href="{{ route($menu->route_name.'.index')  }}">
                <div class="parent-icon"><i class="{{$menu->icon}}"></i>
                </div>
                <div class="menu-title">{{$menu->name}}</div>
            </a>
        </li>
        @endforeach




    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
