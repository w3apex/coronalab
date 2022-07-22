@extends('backend.layouts.master')

@section('title')
    Complete List - Admin Panel
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
                <h4 class="page-title pull-left">Complete List</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Complete List</span></li>
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
                            <h4 class="">All Complete List</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success text-white pull-right btn-sm" href="{{ route('booked.list') }}" style="margin-left: 5px">All Booked Lists</a>
                            <a class="btn btn-warning text-white pull-right btn-sm" href="{{ route('collected.list') }}">All Collected Lists</a>
                        </div>
                    </div>
                    <div class="data-tables">
                        @include('backend.layouts.partials._messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="2%">Sl.</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Email</th>
                                    <th width="10%">Phone</th>
                                    <th width="10%">Appoinment Date</th>
                                    <th width="10%">Address</th>
                                    <th width="10%">Result</th>
                                    <th width="10%">Status</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($completeLists as $complete)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $complete->user->first_name }} {{ $complete->user->last_name }}</td>
                                    <td>{{ $complete->user->email }}</td>
                                    <td>{{ $complete->user->phone }}</td>
                                    <td>{{ $complete->date }}</td>
                                    <td>{{ $complete->user->address }}</td>
                                    <td>
                                        {{-- {{ $complete->report_status }} --}}
                                        @if ($complete->report_status == "positive")
                                            <span style="color:green">Positive</span>
                                        @elseif ($complete->report_status == 'negative')
                                            <span style="color:red">Negative</span>
                                        @else
                                            <span style="color:yelllow">Pending</span>
                                        @endif
                                    </td>
                                    <td style="color: green">{{ $complete->booking_status }}</td>
                                    <td>
                                        <a class="btn btn-success text-white btn-sm" href="{{ route('view.report.doctor', $complete->id) }}">View</a>
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
