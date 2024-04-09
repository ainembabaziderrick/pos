@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-12">
    @include('message')
        <div class="row">
         <div class="col-md-9">
         <div class="card">
                <div class="card-header"> <h4 style="float: left;">Add User</h4> <a href=" {{ url('admin/users/add')}}" style="float: right" class = "btn btn-dark"><i class="fa fa-plus">Add New Users</i></a>
                    <div class="card-body">
                        <table class="table table-bordered table-left">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <!-- <th>Phone</th> -->
                                <th>Role</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                               
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->email}}</td>
                                    <!-- <td>{{ $user->phone}}</td> -->
                                    <td>@if($user->is_admin == 2) Admin
                                        @else Cashier
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/users/edit/'.$user->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{url('admin/users/delete/'.$user->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
         </div>
         <div class="col-md-3">
                <div class="card">
                <div class="card-header"> <h4>Search User</h4>
                    <div class="card-body">
                       
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection