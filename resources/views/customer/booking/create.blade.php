@extends('customer.layout')
@section('admin')
<div class="page-content">

    <div class="mb-3">
        <h4 class="mb-3 mb-md-0 bg-li">Bookings</h4>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <livewire:create-booking />
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
