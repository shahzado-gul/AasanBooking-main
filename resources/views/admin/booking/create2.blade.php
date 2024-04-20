@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <div class="mb-3">
        <h4 class="mb-3 mb-md-0 bg-li">Bookings</h4>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {!! Form::open(['route' => 'admin.booking.store', 'method' => 'post']) !!}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('bdate', 'Booking Date',['class'=>'mb-1']) !!}
                                {!! Form::date('booking_date', now()->format('Y-m-d'), ['class' => 'form-control', 'id' => 'bdate']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            {!! Form::label('customer', 'Customer',['class'=>'mb-1']) !!}
                            <select name="customer" class="form-control" id="customer">
                                <option value="">Select Customer</option>
                                @foreach($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->first_name." ".$customer->last_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('from', 'Start Your Journey', ['class' => 'mb-1']) !!}
                                <select name="from" class="form-control" id="fromDropdown">
                                    <option value="">Select a From</option>
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('to', 'Your Destination', ['class' => 'mb-1']) !!}
                                <select name="to" class="form-control" id="toDropdown">
                                    <option value="">Select a Destination</option>
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('vehicle', 'Vehicle',['class'=>'mb-1']) !!}
                                <select name="vehicle" class="form-control" id="vehicle_id" onchange="updateSeats()">
                                    <option value="">Select a Vehicle</option>
                                    @foreach($vehicles as $vehicle)
                                    <option value="{{$vehicle->id}}" data-seats="{{$vehicle->availabel_seat}}">{{$vehicle->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                {!! Form::label('availabel_seat', 'Seats',['class'=>'mb-1']) !!}
                                {!! Form::text('availabel_seat', null, ['class' => 'form-control', 'id' => 'availabel_seat', 'placeholder' => 'seats', 'readonly']) !!}
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                {!! Form::label('booking', 'Reservation',['class'=>'mb-1']) !!}
                                {!! Form::text('reservation', null, ['class' => 'form-control', 'id' => 'booking', 'placeholder' => 'MySeat']) !!}
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                {!! Form::label('rate', 'Rate',['class'=>'mb-1']) !!}
                                {!! Form::text('rate', null, ['class' => 'form-control', 'id' => 'rate', 'placeholder' => 'Rate']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                {!! Form::submit('Submit', ['class' => 'btn btn-primary me-2']) !!}
                                {!! Form::reset('Cancel', ['class' => 'btn btn-gradient-danger']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div> <!-- row -->

</div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var fromDropdown = document.getElementById("fromDropdown");
        var toDropdown = document.getElementById("toDropdown");

        fromDropdown.addEventListener("change", function() {
            var selectedValue = this.value;

            // Enable all options in the "To" dropdown
            for (var i = 0; i < toDropdown.options.length; i++) {
                toDropdown.options[i].disabled = false;
            }

            // If a value is selected in "From," disable the corresponding option in "To"
            for (var i = 0; i < toDropdown.options.length; i++) {
                if (toDropdown.options[i].value === selectedValue) {
                    toDropdown.options[i].disabled = true;
                    break;
                }
            }
        });
    });

    function updateSeats() {
        var vehicleDropdown = document.getElementById('vehicle_id');
        var selectedOption = vehicleDropdown.options[vehicleDropdown.selectedIndex];
        var seatsInput = document.getElementById('availabel_seat');

        // Update the seats input field
        seatsInput.value = selectedOption.getAttribute('data-seats');
    }
</script>