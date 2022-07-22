@extends('backend.layouts.master')

@section('title')
    Collected List - Admin Panel
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
                <h4 class="page-title pull-left">Collected List</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Collected List</span></li>
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
                            <h4 class="">All Collected List</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success text-white pull-right btn-sm" href="{{ route('complete.list') }}" style="margin-left: 5px">All Complete Lists</a>
                            <a class="btn btn-warning text-white pull-right btn-sm" href="{{ route('booked.list') }}">All Booked Lists</a>
                        </div>
                    </div>
                    <div class="data-tables">
                        @include('backend.layouts.partials._messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="2%">Sl.</th>
                                    <th width="15%">Name</th>
                                    <th width="10%">Email</th>
                                    <th width="10%">Phone</th>
                                    <th width="10%">Appoinment Date</th>
                                    <th width="20%">Address</th>
                                    <th width="10%">Sample Status</th>
                                    <th width="10%">Report Status</th>
                                    <th width="15%">Action</th>
                                    <th width="1px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($collectedLists as $collected)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $collected->user->first_name }} {{ $collected->user->last_name }}</td>
                                    <td>{{ $collected->user->email }}</td>
                                    <td>{{ $collected->user->phone }}</td>
                                    <td>{{ $collected->date }}</td>
                                    <td>{{ $collected->user->address }}</td>
                                    <td style="color:green">{{ $collected->booking_status }}</td>
                                    {{-- <td>{{ $collected->report_status }}</td> --}}
                                    <td>
                                        @if ($collected->report_status == "positive")
                                            <span style="color:green">Positive</span>
                                        @elseif ($collected->report_status == 'negative')
                                            <span style="color:red">Negative</span>
                                        @else
                                        <span style="color:yelllow">Pending</span>
                                        @endif
                                    </td>
                                    <td style="display:flex">
                                        <a class="btn btn-success btn-sm text-white d-inline" href="{{ route('view.report', $collected->id) }}">View</a>
                                        <form action="{{ route('complete.submit', $collected->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-info btn-sm" style="margin-left: 5px">Submit Result</button>
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
