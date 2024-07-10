@extends('backend.master')

@section('title')
Edit Category
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6  mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center py-5">Edit Category Form</h1>
                            <form action="{{route('sub-category.update', ['id' => $subCategory->id])}}" method="post">
                                @csrf
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name = "name" value = "{{$subCategory->name}}"  class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Category Name</label>
                                    <div class="col-md-8">
                                       <select name="category_id" id="" class="form-control">
                                        <option value="">-- select category--</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$subCategory->category->id == $category->id? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                       </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-primary" value="Update Sub Category">
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