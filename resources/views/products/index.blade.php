@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="col-lg-12">
    @include('message')
        <div class="row">
         <div class="col-md-9">
         <div class="card">
                <div class="card-header"> <h4 style="float: left;">Add Products</h4> <a href=" {{ url('admin/products/add')}}" style="float: right" class = "btn btn-primary"><i class="fa fa-plus">Add New Products</i></a> 
                    <div class="card-body">
                        <table class="table table-bordered table-left">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Brand</th>
                                <th>Alert Stock</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                               
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $product->product_name}}</td>
                                    <td>{{ number_format($product->price,2)}}</td>
                                    <td>{{ $product->description}}</td>
                                    <td>{{ $product->quantity}}</td>
                                    <td>{{ $product->brand}}</td>
                                    <td>
                                        @if($product->alert_stock <= $product->quantity)  <span class = ""> Low Stock > {{ $product->alert_stock}}</span>
                                        @else  <span class = ""> {{ $product->alert_stock}}</span>
                                       
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/products/edit/'.$product->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{url('admin/products/delete/'.$product->id)}}" class="btn btn-sm btn-danger">Delete</a>
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