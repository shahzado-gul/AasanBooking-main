@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <div class="mb-3">
        <h4 class="mb-3 mb-md-0 bg-li">Root</h4>
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
                    {!! Form::model($root, ['method' => 'PATCH','route' => ['admin.root.update', $root->id]]) !!}
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('from', 'Start Your Journey', ['class' => 'mb-1']) !!}
                                <select name="from" class="form-control" id="fromDropdown">
                                    <option value="">Select a From</option>
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id }}" @if($city->id == $root->from_city) selected @endif>{{ $city->city_name }}</option>
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
                                    <option value="{{ $city->id }}" @if($city->id == $root->to_city) selected @endif>{{ $city->city_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('vehicle', 'Vehicle',['class'=>'mb-1']) !!}
                                <select name="vehicle_id" class="form-control" id="vehicle_id">
                                    <option value="">Select a Vehicle</option>
                                    @foreach($vehicles as $key => $data)
                                    <option value="{{$key}}" @if($key == $root->vehicle_id) selected @endif>{{$data}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('rate', 'Rate',['class'=>'mb-1']) !!}
                                {!! Form::text('rate', $root->rate, ['class' => 'form-control', 'id' => 'rate', 'placeholder' => 'Enter Rate']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('status', 'Status',['class'=>'mb-1']) !!}
                                {!! Form::select('status', ['1' => 'Active', '0' => 'Deactive'], $root->status, ['class' => 'form-control', 'id' => 'status']) !!}
                            </div>
                        </div>
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
</script>
