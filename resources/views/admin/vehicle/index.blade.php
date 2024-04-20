@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <div class="mb-3">
        <h4 class="mb-3 mb-md-0 bg-li">Vehicles</h4>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{Route('admin.vehicle.create')}}" class="btn btn-success btn-sm"><i class="link-icon" data-feather="plus"></i> Add</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Vehicle Title</th>
                                <th>Registration No</th>
                                <th>Model No</th>
                                <th>Color</th>
                                <th>Seats</th>
                                <th>Availabel Seats</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($vehicles) > 0)
                            @foreach($vehicles as $vehicle)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$vehicle->title}}</td>
                                <td>{{$vehicle->registration_no}}</td>
                                <td>{{$vehicle->model}}</td>
                                <td>{{$vehicle->color}}</td>
                                <td>{{$vehicle->seats}}</td>
                                <td>{{$vehicle->availabel_seat}}</td>
                                <td>{{$vehicle->status}}</td>
                                <td>
                                    <a href="{{route('admin.vehicle.edit',$vehicle->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['admin.vehicle.destroy', $vehicle->id],'style'=>'display:inline']) !!}
                                    {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger'] ) !!}
                                    {!! Form::close() !!}
                                </td>
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
    </div> <!-- row -->

</div>
@endsection