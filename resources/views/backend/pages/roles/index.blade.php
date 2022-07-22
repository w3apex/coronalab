@extends('backend.layouts.master')

@section('title')
    Roles - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection

@section('admin-content')
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Roles</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Roles</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="pull-right"></div>
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
	<div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"></h4>
                    <div class="row header-title">
                        <div class="col-6">
                            <h4 class="">Role List</h4>
                        </div>
                        <div class="col-6">
                            @if(Auth::guard('admin')->user()->can('roles.create'))
                            <a class="btn btn-success text-white pull-right" href="{{ route('roles.create')}}">Add New Role</a>
                            @endif
                        </div>
                    </div>
                    <div class="data-tables">
                        @include('backend.layouts.partials._messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="2%">Sl.</th>
                                    <th width="10%">Name</th>
                                    <th width="68%">Permission</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>                
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @foreach($role->permissions as $perm)
                                            <span class="badge badge-info mr-1">
                                                {{$perm->name}}
                                            </span>
                                        @endforeach
                                    </td>
                                    <td>
                                        @if(Auth::guard('admin')->user()->can('roles.edit'))
                                        <a class="btn btn-success text-white" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                        @endif
                                        @if(Auth::guard('admin')->user()->can('roles.delete'))
                                        <form action="{{ route('roles.delete', $role->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
    </div>
</div>
@endsection

@section('scripts')
	<!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript">
    	/*================================
	           Datatable Active
	    ==================================*/
	    if ($('#dataTable').length) {
	        $('#dataTable').DataTable({
	            responsive: true
	        });
	    }
    </script>
@endsection
