@extends('backend.master')

@section('title')
Edit Product
@endsection

@section('content')
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6  mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center py-3">Edit Product Form</h1>
                            <form action="{{route('product.update', ['id' =>$product->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{-- @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif --}}
                            
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Category Name</label>
                                    <div class="col-md-8">
                                       <select name="category_id" id="" class="form-control">
                                        <option value="">-- select category--</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$product->category->id == $category->id ? 'selected' :''}}>{{$category->name}}</option>
                                        @endforeach
                                       </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Sub Category Name</label>
                                    <div class="col-md-8">
                                       <select name="sub_category_id" id="" class="form-control">
                                        <option value="">-- select sub category--</option>
                                        @foreach($subCategories as $subCategory)
                                        <option value="{{$subCategory->id}}" {{$product->subCategory->id == $subCategory->id ? 'selected' :''}}>{{$subCategory->name}}</option>
                                        @endforeach
                                       </select>
                                    </div>
                                </div> 
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Brand Name</label>
                                    <div class="col-md-8">
                                       <select name="brand_id" id="" class="form-control">
                                        <option value="">-- select brand--</option>
                                        @foreach($brands as $brand)
                                        <option value="{{$brand->id}}" {{$product->brand->id == $category->id ? 'selected' :''}}>{{$brand->name}}</option>
                                        @endforeach
                                       </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name = "name" value = "{{$product->name}}"  class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Stock Amount</label>
                                    <div class="col-md-8">
                                        <input type="number" name = "stock_amount" value="{{$product->stock_amount}}"  class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Price</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="number" name ="regular_price" value="{{$product->regular_price}}" placeholder="Regular Price" class="form-control">
                                            <input type="number" name = "selling_price" value="{{$product->selling_price}}" placeholder="Selling Price" class = "form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" id="" cols="5" rows="4" class="form-control">{{$product->short_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" id="" cols="5" rows="7" class="form-control">{{$product->long_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name = "image"  class="form-control"> <br>
                                        <img src="{{asset($product->image)}}" height="50" width="50" alt="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-primary" value="Update Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection