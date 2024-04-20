@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <div class="mb-3">
        <h4 class="mb-3 mb-md-0 bg-li">Customer</h4>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{Route('admin.customer.create')}}" class="btn btn-success btn-sm"><i class="link-icon" data-feather="plus"></i> Add</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profile</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($customers) > 0)
                                @foreach($customers as $customer)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td><img src="{{asset('images/UserImage/'.$customer->photo)}}" alt="Profile"></td>
                                    <td>{{$customer->first_name}}</td>
                                    <td>{{$customer->last_name}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->contact}}</td>
                                    <td>{{$customer->status}}</td>
                                    <td>
                                        <a href="{{route('admin.customer.show',$customer->id)}}" class="btn btn-success">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{route('admin.customer.edit',$customer->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.customer.destroy', $customer->id],'style'=>'display:inline']) !!}
                                        {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger'] ) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr class="text-center">
                                    <td colspan="11">No Record Found</td>
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