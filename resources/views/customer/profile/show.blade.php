@extends('customer.layout')
@section('admin')
<div class="page-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="{{asset('images/UserImage/'.$customer->photo)}}" alt="Profile" class="rounded-5 img-thumbnail">
                        </div>
                        <div class="col-sm-6 mt-3">
                            <Strong class="">First Name</Strong>
                            <p>{{$customer->first_name}}</p>
                            <br>
                            <strong>Last Name</strong>
                            <p>{{$customer->last_name}}</p>
                        </div>
                        <div class="col-sm-4">
                            <ul class="list-unstyled personal-detail mt-3">
                                <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> : {{$customer->phone}}</li>
                                <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone 2 </b> : {{($customer->phone2)?'Yes':"not available"}}</li>
                                <li class="mt-3"><i class="dripicons-mail text-info font-20 mr-2"></i> <b> email : </b> {{$customer->email}}</li>
                                <li class="mt-3"> <i class="fa fa-home font-20 mr-2 text-info" aria-hidden="true"></i> <b>adress</b> {{$customer->address}} </li>
                            </ul>
                        </div><!--end col-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Booking<small><small>s</small></small></div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Booking Date</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Vehicle</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($bookings) > 0)
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$booking->booking_date}}</td>
                                <td>{{$booking->fromCity->city_name}}</td>
                                <td>{{$booking->toCity->city_name}}</td>
                                <td>{{$booking->vehicle->title}}</td>
                                <td>{{($booking->status)?'compelte':'cancel'}}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr class="text-center">
                                <td colspan="8">No Record Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
