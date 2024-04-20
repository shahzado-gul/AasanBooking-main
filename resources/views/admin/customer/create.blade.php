@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <div class="mb-3">
        <h4 class="mb-3 mb-md-0 bg-li">Customer</h4>
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
                    {!! Form::open(['route' => 'admin.customer.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('firstName', 'First Name') !!}
                                <span class="text-danger">*</span>
                                {!! Form::text('firstName', null, ['class' => 'form-control', 'id' => 'first-name', 'placeholder' => 'Enter First Name']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('lname', 'Last Name') !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control', 'id' => 'lname', 'placeholder' => 'Enter Last Name']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('phone1', 'Phone 1') !!}
                                <span class="text-danger">*</span>
                                {!! Form::text('phone1', null, ['class' => 'form-control', 'id' => 'phone1', 'placeholder' => 'Enter Phone']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('phone2', 'Phone 2') !!}
                                {!! Form::text('phon-2', null, ['class' => 'form-control', 'id' => 'phone2', 'placeholder' => 'Enter Phone 2']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('email', 'Email') !!}
                                <span class="text-danger">*</span>
                                {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter Email']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('password', 'Password') !!}
                                <span class="text-danger">*</span>
                                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Enter Password']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('profile_picture', 'Profile Picture') !!}
                                {!! Form::file('profile_picture', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('address', 'Address') !!}
                                {!! Form::text('address', null, ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Enter Address']) !!}
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('status', 'Status',['class'=>'mb-1']) !!}
                                {!! Form::select('status', ['1' => 'Active', '0' => 'Deactive'], null, ['class' => 'form-control', 'id' => 'status']) !!}
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
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var fromDropdown = document.getElementById("fromDropdown");
        var toDropdown = document.getElementById("toDropdown");

        fromDropdown.addEventListener("change", function() {
            var selectedValue = this.value;

            // Find the selected option in "To" dropdown and remove it
            for (var i = 0; i < toDropdown.options.length; i++) {
                if (toDropdown.options[i].value === selectedValue) {
                    toDropdown.remove(i);
                    break;
                }
            }
        });
    });
</script>