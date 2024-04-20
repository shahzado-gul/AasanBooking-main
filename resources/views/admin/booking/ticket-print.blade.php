<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket Print</title>
    <style>
        .main {
            background-size: 100% 100%;
            width: 1024px;
            height: 400px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            /* border: solid gray 1px; */
            background-image: url({{ asset('images/ticket-print.png') }});
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="main">
        <br>
        <div class="row pt-5">
            <div class="col-6 offset-1">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="ms-">{{ $booking->vehicle->title }}</h3>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-6">
                        <h5>First Name</h5>
                        {{ $booking->customer->first_name }}
                    </div>
                    <div class="col-6">
                        <h5>Last Name</h5>
                        {{ $booking->customer->last_name }}
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-6">
                        <h5>From</h5>
                        {{ $booking->fromCity->city_name }}
                    </div>
                    <div class="col-6">
                        <h5>To</h5>
                        {{ $booking->toCity->city_name }}
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-4">
                        <h5>Date</h5>
                        {{ $booking->booking_date }}
                    </div>
                    <div class="col-4">
                        <h5>Seats</h5>
                        {{ $booking->reservation }}
                    </div>
                    <div class="col-4">
                        <h5>Amount</h5>
                        RS: {{$booking->amount}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 offset-8">
                        <h5>Status</h5>
                        {{status($booking->status)}}
                    </div>
                </div>
            </div>
            <div class="col-5 text-light">
                <div class="ps-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3 class="ms-">{{ $booking->vehicle->title }}</h3>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-6">
                            <h5>First Name</h5>
                            {{ $booking->customer->first_name }}
                        </div>
                        <div class="col-6">
                            <h5>Last Name</h5>
                            {{ $booking->customer->last_name }}
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-6">
                            <h5>From</h5>
                            {{ $booking->fromCity->city_name }}
                        </div>
                        <div class="col-6">
                            <h5>To</h5>
                            {{ $booking->toCity->city_name }}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <h5>Date</h5>
                            {{ $booking->booking_date }}
                        </div>
                        <div class="col-4">
                            <h5>Seats</h5>
                            {{ $booking->reservation }}
                        </div>
                        <div class="col-4">
                            <h5>Amount</h5>
                            RS: {{$booking->amount}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 offset-8">
                            <h5>Status</h5>
                            {{status($booking->status)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print()
    </script>
</body>

</html>
