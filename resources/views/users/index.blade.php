@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-12">
        <div class="row">
         <div class="col-md-9">
         <div class="card">
                <div class="card-header"> <h4 style="float: left;">Add User</h4> <a href="" style="float: right"><i class="fa fa-plus">Add New Users</i></a>
                    <div class="card-body">
                        <table class="table table-bordered table-left">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
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