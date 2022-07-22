@extends('frontend.layouts.master')

@section('header-top')
    @include('frontend.layouts.partials._header-top')
@endsection

@section('content')
<section class="default-form-area pt-5  pb-5 bg-color" style="height: 700px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 mb-5">
                <div class="sec-secondary-title text-center">
                    <h4><span style="color: gray">Appoinment Lists of</span> {{Auth::user()->first_name}} &nbsp;{{Auth::user()->last_name}}</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 offset-md-2">
                <div class="data-tables">
                @include('backend.layouts.partials._messages')
                <table id="dataTable" class="text-center">
                    <thead class="bg-light text-capitalize">
                        <tr>
                            <th width="5%">Sl.</th>
                            <th width="25%">Booking Date</th>
                            <th width="25%">Booking Status</th>
                            <th width="25%">Repot Date</th>
                            <th width="20%">Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$booking->date}}</td>
                            <td style="color:green">{{$booking->booking_status}}</td>
                            <td></td>
                            <td>
                               @if($booking->report_status)
                                    {{$booking->report_status}}
                               @else
                                    {{__('Pending')}}
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
</section>
@endsection

