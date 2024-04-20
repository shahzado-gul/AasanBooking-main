    <div style="display: flex;">
        <style>
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td,
            #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #customers tr:hover {
                background-color: #ddd;
            }

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: orangered;
                color: white;
            }
        </style>
        <div style="padding: 10px; width: 50%;">
            <div id="app" style="height: auto!important;font-family: 'Times New Roman', Times, serif; font-size: large;">
                <!-- Include the Search Form -->
                <form wire:submit.prevent="submit">
                    @csrf
                    <label for="source">From:</label>
                    <select wire:model.live='from' style="font-size:15px" name="from" class="form-input" id="fromDropdown">
                        <option value="0">Select a From</option>
                        @foreach ($from_cities as $city)
                        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" name="source" style="font-size:15px" class="form-input" id="source" required> --}}
                    <label for="destination">To:</label>
                    <select wire:model='to' name="to" style="font-size:15px" class="form-input" id="toDropdown">
                        <option value="0">Select a Destination</option>
                        @foreach ($to_cities as $city)
                        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" name="destination" class="form-input" id="destination" required> --}}
                    <label for="date">Date:</label>
                    <input wire:model="date" style="font-size:15px" type="date" name="date" class="form-input" id="date" required>
                    <button type="submit" class="hero-button hero-about-button">Search</button>
                </form>
            </div>
        </div>
        @if(count($vehicles) >0)
        <div style="padding: 10px; width: 50%; margin-top:25px;">
            <table id="customers" border="1" style="width: 100%; margin-bottom: 15px;">
                <thead>
                    <tr>
                        <th>Vehicle</th>
                        <th>Root</th>
                        <th>Date</th>
                        <th>Rate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehicles as $vehicle)
                    <tr>
                        <td>{{$vehicle->vehicle->title}}</td>
                        <td>{{$vehicle->fromCity->city_name}} - {{$vehicle->toCity->city_name}}</td>
                        <td>{{$date}}</td>
                        <td>{{$vehicle->rate}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('user.booking.create')}}" class="hero-button hero-about-button">Order Now</a>
        </div>
        @endif
    </div>
