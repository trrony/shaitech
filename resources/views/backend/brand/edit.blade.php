@extends('backend.master')

@section('title')
Edit Brand
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6  mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center py-5">Edit Brand Form</h1>
                            <form action="{{route('brand.update', ['id' => $brand->id])}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name = "name" value = "{{$brand->name}}"  class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-primary" value="Update Brand">
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