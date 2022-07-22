@extends('backend.layouts.master')

@section('title')
	Booked List - Admin Panel
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
                <h4 class="page-title pull-left">Booked List</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Booked List</span></li>
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
                    <div class="row header-title">
                        <div class="col-6">
                            <h4 class="">All Booked List</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success text-white pull-right btn-sm" href="{{ route('complete.list') }}" style="margin-left: 5px">All Complete Lists</a>
                            <a class="btn btn-warning text-white pull-right btn-sm" href="{{ route('collected.list') }}">All Collected Lists</a>
                        </div>
                    </div>
                    <div class="data-tables">
                        @include('backend.layouts.partials._messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="3px">Sl.</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Email</th>
                                    <th width="10%">Phone</th>
                                    <th width="15%">Appoinment Date</th>
                                    <th width="15%">Address</th>
                                    <th width="15%">Booking Status</th>
                                    <th width="15%">Sample Status</th>
                                    <th width="15%">Action</th>
                                    <th width="1px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookedLists as $booking)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $booking->user->first_name }} {{ $booking->user->last_name }}</td>
                                    <td>{{ $booking->user->email }}</td>
                                    <td>{{ $booking->user->phone }}</td>
                                    <td>{{ $booking->date }}</td>
                                    <td>{{ $booking->user->address }}</td>
                                    <td style="color: green">{{ $booking->booking_status }}</td>
                                    <td style="color: yellow">Pending</td>
                                    <td>
                                        <form action="{{ route('collected.submit', $booking->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-warning btn-sm">Collect</button>
                                        </form>
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
	    datatable active
	    ==================================*/
	    if ($('#dataTable').length) {
	        $('#dataTable').DataTable({
	            responsive: true
	        });
	    }
	    if ($('#dataTable2').length) {
	        $('#dataTable2').DataTable({
	            responsive: true
	        });
	    }
	    if ($('#dataTable3').length) {
	        $('#dataTable3').DataTable({
	            responsive: true
	        });
	    }
    </script>
@endsection
