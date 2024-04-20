<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Register</title>

    <style type="text/css">
        .authlogin-side-wrapper {
            width: 100%;
            height: 100%;
            background-image: url({{asset('upload/login.png')}});
    }

    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('../../../assets/vendors/core/core.css')}}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('../../../assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('../../../assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('../../../assets/css/demo1/style.css')}}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{asset('../../../assets/images/favicon.png')}}" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="authlogin-side-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <form class="forms-sample" method="post" action="{{ route('register') }}">
                                            @csrf
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
                                                <div class="col-lg-6 mt-4">
                                                    <div class="form-group">
                                                        {!! Form::submit('Submit', ['class' => 'btn btn-primary me-2']) !!}
                                                        {!! Form::reset('Cancel', ['class' => 'btn btn-gradient-danger']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{route('login')}}" class="d-block mt-3 text-muted">Already user? Login</a>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{asset('../../../assets/vendors/core/core.js')}}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{asset('../../../assets/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('../../../assets/js/template.js')}}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->

</body>

</html>
