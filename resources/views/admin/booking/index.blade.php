@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <div class="mb-3">
        <h4 class="mb-3 mb-md-0 bg-li">Bookings</h4>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{Route('admin.booking.create')}}" class="btn btn-success btn-sm"><i class="link-icon" data-feather="plus"></i> Add</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Booking Date</th>
                                <th>Customer</th>
                                <th>Vehicle</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Payment</th>
                                <th>Available Seat</th>
                                <th>Reservation</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($bookings) > 0)
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$booking->booking_date}}</td>
                                <td>{{$booking->customer->first_name." ".$booking->customer->last_name}}</td>
                                <td>{{$booking->vehicle->title}}</td>
                                <td>{{$booking->fromCity->city_name}}</td>
                                <td>{{$booking->toCity->city_name}}</td>
                                <td>{{$booking->preferred_payment}}</td>
                                <td>{{$booking->availabel_seat}}</td>
                                <td>{{$booking->reservation}}</td>
                                <td>{{status($booking->status)}}</td>
                                <td>
                                    <a href="{{route('admin.booking.show',$booking->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-print" aria-hidden="true">Print</i></a>
                                    <a href="{{route('admin.booking.edit',$booking->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['admin.booking.destroy', $booking->id],'style'=>'display:inline']) !!}
                                    {!! Form::button('<i class="fa fa-trash btn-sm" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger'] ) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr class="text-center">
                                <td colspan="11">No Record Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- row -->

</div>
@endsection
