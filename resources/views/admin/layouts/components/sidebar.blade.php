<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Logo Light -->
    <a href="{{ route('dashboard') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ logo() }}" alt="{{ title() }}" height="80" width="80%">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('admin-master/assets/images/logo-sm.png') }}" alt="small logo" height="22">
        </span>
    </a>

    <!-- Logo Dark -->
    <a href="{{ route('dashboard') }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('admin-master/assets/images/logo-dark.png') }}" alt="dark logo" height="22">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('admin-master/assets/images/logo-dark-sm.png') }}" alt="small logo" height="22">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right"
        title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </button>

    <!-- Sidebar -left -->
    <div class="h-100 mt-3" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{ asset('admin-master/assets/images/users/avatar-1.jpg') }}" alt="user-image" height="42"
                    class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">Dominic Keller</span>
            </a>
        </div>
        <!--- Sidemenu -->
        <ul class="side-nav">
            <li class="side-nav-item px-2">
                <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
            </li>
            <li class="side-nav-title side-nav-item">System Default</li>
            <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            @if (auth()->user()->can('view-any', \App\Models\User::class))
                <li class="side-nav-item">
                    <a href="{{ route('users.index') }}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Users </span>
                    </a>
                </li>
            @endif
            @if (auth()->user()->can('view-any', \SujanSht\AdminMaster\Models\Admin\Role::class))
                <li class="side-nav-item">
                    <a href="{{ route('roles.index') }}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Roles </span>
                    </a>
                </li>
            @endif
            @if (auth()->user()->can('view-any', \SujanSht\AdminMaster\Models\Admin\Permission::class))
                <li class="side-nav-item">
                    <a href="{{ route('permissions.index') }}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Permissions </span>
                    </a>
                </li>
            @endif
            @if (auth()->user()->can('view-any', \SujanSht\AdminMaster\Models\Admin\Setting::class))
                <li class="side-nav-item">
                    <a href="{{ route('settings.index') }}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Settings </span>
                    </a>
                </li>
            @endif
            @if (auth()->user()->can('view-any', \SujanSht\AdminMaster\Models\Admin\Menu::class))
                <li class="side-nav-item">
                    <a href="{{ route('menus.index') }}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Menus </span>
                    </a>
                </li>
            @endif
            <li class="side-nav-title side-nav-item">Other Modules</li>
            @if (!is_null(adminMenus()))
                @foreach (adminMenus() as $menu)
                    @if (auth()->user()->can('view-any', 'App\Models\Admin\\' . $menu->name))
                        <li class="side-nav-item">
                            <a href="{{ route($menu->route . '.index') }}" class="side-nav-link">
                                <i class="{{ $menu->icon }}"></i>
                                <span> {{ $menu->name }} </span>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
            {{-- @includeFirst(['admin.layouts.components.sidebar','admin-master::admin.layouts.components.sidebar']) --}}

            @if (View::exists('admin.layouts.components.sidebar'))
                @include('admin.layouts.components.sidebar')
            @endif



        </ul>
        <!--- End Sidemenu -->



        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->
