<div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form wire:submit.prevent="submit">
        <!-- {!! Form::open(['route' => 'admin.booking.store', 'method' => 'post']) !!} -->
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::label('bdate', 'Booking Date',['class'=>'mb-1']) !!}
                    <!-- <input wire:model='booking_date' value="{{now()->format('Y-m-d')}}" type="date" class="form-control"> -->
                    {!! Form::date('booking_date', null, ["wire:model='booking_date'",'class' => 'form-control', 'id' => 'bdate']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                {!! Form::label('customer', 'Customer',['class'=>'mb-1']) !!}
                <select wire:model='customer' name="customer" class="form-control" id="customer">
                    <option value="">Select Customer</option>
                    @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ auth()->check() && auth()->user()->id == $customer->id ? 'selected' : '' }}>
            {{ $customer->first_name . " " . $customer->last_name }}
            </option>
            @endforeach
            </select>
        </div>

</div>
<div class="row mt-3">
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('from', 'Start Your Journey', ['class' => 'mb-1']) !!}
            <select wire:model='from' name="from" class="form-control" id="fromDropdown">
                <option value="0">Select a From</option>
                @foreach($from_cities as $city)
                <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('to', 'Your Destination', ['class' => 'mb-1']) !!}
            <select wire:model='to' name="to" class="form-control" id="toDropdown">
                <option value="0">Select a Destination</option>
                @foreach($to_cities as $city)
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
            <select wire:model="vehicle" class="form-control" id="vehicle_id" onchange="updateSeats()">
                <option value="">Select a Vehicle</option>
                @foreach($vehicles as $vehicle)
                <option value="{{$vehicle->id}}" data-seats="{{$vehicle->availabel_seat}}">{{$vehicle->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('availabel_seat', 'Seats',['class'=>'mb-1']) !!}
            {!! Form::text('availabel_seat', null, ["wire:model='availabel_seat'", 'class' => 'form-control', 'id' => 'availabel_seat', 'placeholder' => 'seats', 'readonly']) !!}
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('booking', 'Reservation',['class'=>'mb-1']) !!}
            {!! Form::text('reservation', null, ["wire:model='reservation'", 'class' => 'form-control', 'id' => 'booking', 'placeholder' => 'MySeat']) !!}
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('rate', 'Rate',['class'=>'mb-1']) !!}
            {!! Form::text('rate', null, ["wire:model='rate'", 'class' => 'form-control', 'id' => 'rate', 'placeholder' => 'Rate']) !!}
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('total', 'Total',['class'=>'mb-1']) !!}
            {!! Form::text('total', null, ["wire:model='total'", 'class' => 'form-control', 'id' => 'rate', 'placeholder' => 'Rate']) !!}
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-6 mt-4">
        <div class="form-group">
            <input type="hidden" name="customer_id" value="{{Auth::user()->id}}">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary me-2']) !!}
            {!! Form::reset('Cancel', ['class' => 'btn btn-gradient-danger']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}
</div>
