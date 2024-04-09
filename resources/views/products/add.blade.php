@extends('admin.layouts.app')

 @section('content')
 <div class="pagetitle">
    <h1>Add Products</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>

                    <form action=" {{ url('admin/products/add')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Product Name <span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="product_name" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Price<span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                            <input type="text" name="price" class="form-control" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Quantity <span style="color: red;"></span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="quantity" class="form-control" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Description <span style="color: red;"> </span>
                            </label>
                            <div class="col-sm-10">
                               <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Brand <span style="color: red;"> </span>
                            </label>
                            <div class="col-sm-10">
                            <input type="text" name="brand" class="form-control" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Alert Stock<span style="color: red;"> </span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="alert_stock" class="form-control">
                            </div>
                        </div>

                       

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label"> 
                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-dark">Save Product</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>






 @endsection