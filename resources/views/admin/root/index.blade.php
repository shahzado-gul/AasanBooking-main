@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <div class="mb-3">
        <h4 class="mb-3 mb-md-0 bg-li">Root</h4>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{Route('admin.root.create')}}" class="btn btn-success btn-sm"><i class="link-icon" data-feather="plus"></i> Add</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Vehicle</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($routes) > 0)
                                @foreach($routes as $root)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$root->fromCity->city_name}}</td>
                                    <td>{{$root->toCity->city_name}}</td>
                                    <td>{{$root->vehicle->title}}</td>
                                    <td>{{$root->rate}}</td>
                                    <td>{{$root->status}}</td>
                                    <td>
                                        <a href="{{route('admin.root.edit',$root->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.root.destroy', $root->id],'style'=>'display:inline']) !!}
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
        </div>
    </div> <!-- row -->

</div>
@endsection
