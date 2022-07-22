@php
    $usr = Auth::guard('admin')->user();
@endphp

 <div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}">
                <h2 class="text-white">Admin</h2> 
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    {{-- @if ($usr->can('admin.dashboard')) --}}
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : ''}}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    {{-- @endif --}}

                    {{-- @if ($usr->can('admins.index') || $usr->can('admins.create') ||  $usr->can('admins.edit') ||  $usr->can('admins.delete')) --}}
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Admins
                            </span></a>
                        <ul class="collapse {{ Route::is('admins.index') || Route::is('admins.create') || Route::is('admins.edit') ? 'in' : ''}}">
                            
                            {{-- @if ($usr->can('admins.create')) --}}
                            <li class="{{ Route::is('admins.create') ? 'active' : ''}}"><a href="{{ route('admins.create') }}">Create New Admin</a></li>
                            {{-- @endif --}}

                            {{-- @if ($usr->can('admins.index')) --}}
                            <li class="{{ Route::is('admins.index') ? 'active' : ''}}"><a href="{{ route('admins.index') }}">All Admins</a></li>
                            {{-- @endif --}}
                        </ul>
                    </li>
                    {{-- @endif --}}

                    {{-- @if ($usr->can('roles.index') || $usr->can('roles.create') ||  $usr->can('roles.edit') ||  $usr->can('roles.delete')) --}}
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Roles & Permission
                            </span></a>
                        <ul class="collapse {{ Route::is('roles.index') || Route::is('roles.create') || Route::is('roles.edit') ? 'in' : ''}}">
                            {{-- @if ($usr->can('roles.create')) --}}
                            <li class="{{ Route::is('roles.create') ? 'active' : ''}}"><a href="{{ route('roles.create') }}">Create New Role</a></li>
                            {{-- @endif --}}

                            {{-- @if ($usr->can('roles.index')) --}}
                            <li class="{{ Route::is('roles.index') ? 'active' : ''}}"><a href="{{ route('roles.index') }}">All Roles</a></li>
                            {{-- @endif --}}
                        </ul>
                    </li>
                    {{-- @endif --}}

                    {{-- @if ($usr->can('divisions.index') || $usr->can('divisions.create') || $usr->can('divisions.edit') ||  $usr->can('divisions.delete')) --}}
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Division
                            </span></a>
                        <ul class="collapse {{ Route::is('divisions.index') || Route::is('divisions.create') || Route::is('divisions.edit') ? 'in' : ''}}">
                            {{-- @if ($usr->can('divisions.create')) --}}
                            <li class="{{ Route::is('divisions.create') ? 'active' : ''}}"><a href="{{ route('divisions.create') }}">Create Division</a></li>
                            {{-- @endif --}}

                            {{-- @if ($usr->can('divisions.index')) --}}
                            <li class="{{ Route::is('divisions.index') ? 'active' : ''}}"><a href="{{ route('divisions.index') }}">All Division</a></li>
                            {{-- @endif --}}
                        </ul>
                    </li>
                    {{-- @endif --}}

                    {{-- @if ($usr->can('districts.index') || $usr->can('districts.create') || $usr->can('districts.edit') ||  $usr->can('districts.delete')) --}}
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>District
                            </span></a>
                        <ul class="collapse {{ Route::is('districts.index') || Route::is('districts.create') || Route::is('districts.edit') ? 'in' : ''}}">
                            {{-- @if ($usr->can('districts.create')) --}}
                            <li class="{{ Route::is('districts.create') ? 'active' : ''}}"><a href="{{ route('districts.create') }}">Create District</a></li>
                            {{-- @endif --}}
                            {{-- @if ($usr->can('districts.index')) --}}
                            <li class="{{ Route::is('districts.index') ? 'active' : ''}}"><a href="{{ route('districts.index') }}">All District</a></li>
                            {{-- @endif --}}
                        </ul>
                    </li>
                    {{-- @endif --}}

                    {{-- @if ($usr->can('sliders.index') || $usr->can('sliders.create') || $usr->can('sliders.edit') ||  $usr->can('sliders.delete')) --}}
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Slider
                            </span></a>
                        <ul class="collapse {{ Route::is('sliders.index') || Route::is('sliders.create') || Route::is('sliders.edit') ? 'in' : ''}}">
                            {{-- @if ($usr->can('sliders.create')) --}}
                            <li class="{{ Route::is('sliders.create') ? 'active' : ''}}"><a href="{{ route('sliders.create') }}">Create Slider</a></li>
                            {{-- @endif --}}

                            {{-- @if ($usr->can('sliders.index')) --}}
                            <li class="{{ Route::is('sliders.index') ? 'active' : ''}}"><a href="{{ route('sliders.index') }}">All Slider</a></li>
                            {{-- @endif --}}
                        </ul>
                    </li>
                    {{-- @endif --}}

                    {{-- @if ($usr->can('services.index') || $usr->can('services.create') || $usr->can('services.edit') ||  $usr->can('services.delete')) --}}
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Service
                            </span></a>
                        <ul class="collapse {{ Route::is('services.index') || Route::is('services.create') || Route::is('services.edit') ? 'in' : ''}}">
                            {{-- @if ($usr->can('services.create')) --}}
                            <li class="{{ Route::is('services.create') ? 'active' : ''}}"><a href="{{ route('services.create') }}">Create service</a></li>
                            {{-- @endif --}}
                            {{-- @if ($usr->can('services.index')) --}}
                            <li class="{{ Route::is('services.index') ? 'active' : ''}}"><a href="{{ route('services.index') }}">All Service</a></li>
                            {{-- @endif --}}
                        </ul>
                    </li>
                    {{-- @endif --}}

                    {{-- @if ($usr->can('patients.index') || $usr->can('patients.create') || $usr->can('patients.edit') ||  $usr->can('patients.delete')) --}}
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Patient
                            </span></a>
                        <ul class="collapse {{ Route::is('patients.index') || Route::is('patients.create') || Route::is('patients.edit') ? 'in' : ''}}">
                            {{-- @if ($usr->can('patients.create')) --}}
                            <li class="{{ Route::is('patients.create') ? 'active' : ''}}"><a href="{{ route('patients.create')}}">Create New Patient</a></li>
                            {{-- @endif --}}
                            {{-- @if ($usr->can('patients.create')) --}}
                            <li class="{{ Route::is('patients.index') ? 'active' : ''}}"><a href="{{ route('patients.index')}}">All Patients</a></li>
                            {{-- @endif --}}
                        </ul>
                    </li>
                    {{-- @endif --}}
                    
                    {{-- @if ($usr->can('booked.list') || $usr->can('collected.list') || $usr->can('view.report') || $usr->can('complete.list') || $usr->can('view.report.doctor')) --}}
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Booking Status 
                            </span></a>
                        <ul class="collapse {{ Route::is('booked.list') || Route::is('collected.list') || Route::is('complete.list') || Route::is('view.report') || Route::is('view.report.doctor') ? 'in' : ''}}">
                            
                            {{-- @if ($usr->can('booked.list')) --}}
                            <li class="{{ Route::is('booked.list') ? 'active' : ''}}"><a href="{{ route('booked.list') }}">Booked List</a></li>
                            {{-- @endif --}}

                            {{-- @if ($usr->can('collected.list')) --}}
                            <li class="{{ Route::is('collected.list') ? 'active' : ''}}"><a href="{{ route('collected.list') }}">Colleced List</a></li>
                            {{-- @endif --}}

                            {{-- @if ($usr->can('complete.list')) --}}
                            <li class="{{ Route::is('complete.list') ? 'active' : ''}}"><a href="{{ route('complete.list') }}">Complete List</a></li>
                            {{-- @endif --}}
                        </ul>
                    </li>
                    {{-- @endif --}}

                    {{-- @if ($usr->can('request.list')) --}}
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Completed  Test Report
                            </span></a>
                        <ul class="collapse {{ Route::is('request.list') ? 'in' : ''}}">
                            <li class="{{ Route::is('request.list') ? 'active' : ''}}"><a href="{{ route('request.list') }}">Request List</a></li>
                        </ul>
                    </li>
                    {{-- @endif --}}

                    {{-- <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Test Report
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('reports.create')}}">All Reports</a></li>
                        </ul>
                    </li> --}}

                    {{-- @if ($usr->can('transactions.index') || $usr->can('transactions.create') || $usr->can('transactions.edit'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Transaction
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('transactions.create')}}">Create New Transaction</a></li>
                            <li><a href="{{ route('transactions.index')}}">All Transactions</a></li>
                        </ul>
                    </li>
                    @endif --}}
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->