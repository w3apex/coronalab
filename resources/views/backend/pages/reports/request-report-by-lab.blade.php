@extends('backend.layouts.master')

@section('title')
    Request Lists - Admin Panel
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
                <h4 class="page-title pull-left">Request List</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Request List</span></li>
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
                            <h4 class="">All Request List</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success text-white pull-right btn-sm" href="" style="margin-left: 5px">All Complete Lists</a>
                            <a class="btn btn-warning text-white pull-right btn-sm" href="">All Collected Lists</a>
                        </div>
                    </div>
                    <div class="data-tables">
                        @include('backend.layouts.partials._messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="5%">Sl.</th>
                                    <th width="22%" >Patient Name</th>
                                    <th width="22%">Appoinment Date</th>
                                    <th width="22%">Report Date</th>
                                    <th width="10%">Appoinment Status</th>
                                    <th width="20%">Report Status</th>
                                    <th width="20%">Action</th>
                                    <th width="1px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($requestLists as $requestList)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td class="text-left">{{ $requestList->user->first_name." " }}{{ $requestList->user->last_name }}</td>
                                    <td>{{ $requestList->date }}</td>
                                    <td>{{ $requestList->updated_at }}</td>
                                    <td>{{ $requestList->booking_status }}</td>
                                    <td>
                                        @if ($requestList->report_status == "positive")
                                            <span style="color:green">Positive</span>
                                        @elseif ($requestList->report_status == 'negative')
                                            <span style="color:red">Negative</span>
                                        @else
                                            <span style="color:yelllow">Pending</span>
                                        @endif
                                        {{-- {{ $requestList->report_status }} --}}
                                    </td>
                                    <td>
                                        <form action="{{ route('confirm.submit', $requestList->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-warning">Confirm Report</button>
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
