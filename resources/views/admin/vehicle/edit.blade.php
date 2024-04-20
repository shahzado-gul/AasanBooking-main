@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <div class="mb-3">
        <h4 class="mb-3 mb-md-0 bg-li">Vehicles</h4>
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
                    {!! Form::model($vehicle, ['route' => ['admin.vehicle.update', $vehicle->id], 'method' => 'put']) !!}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('title', 'Title') !!}
                                {!! Form::text('title', $vehicle->title, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Enter Vehicle Title']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('registration_no', 'Registration No') !!}
                                {!! Form::text('registration_no', $vehicle->registration_no, ['class' => 'form-control', 'id' => 'reg_no', 'placeholder' => 'Enter Registration No']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('model', 'Model') !!}
                                {!! Form::text('model', $vehicle->model, ['class' => 'form-control', 'id' => 'model', 'placeholder' => 'Enter Model']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('color', 'Color') !!}
                                {!! Form::text('color', $vehicle->color, ['class' => 'form-control', 'id' => 'color', 'placeholder' => 'Enter Color']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('seats', 'Seats') !!}
                                {!! Form::text('seats', $vehicle->seats, ['class' => 'form-control', 'id' => 'seats', 'placeholder' => 'Enter Seat']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('status', 'Status') !!}
                                {!! Form::select('status', ['1' => 'Active', '0' => 'Deactive'], $vehicle->status, ['class' => 'form-control', 'id' => 'status']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
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