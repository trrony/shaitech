@extends('backend.master')

@section('title')
All Brand
@endsection

@section('content')

    <section class="py-3">
        <h3 class=" text-center">All Category</h3>
        <h3 class="text-success text-center py-2">{{session('msg')}}</h3>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Brand Name</th>
                                    <th>status</th>
                                    <th>Action</th>                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)                           
                                <tr class="table-active">
                                    <td>{{$brand->id}}</td>
                                    <td>{{$brand->name}}</td>
                                    <th>{{$brand->status == 1 ? 'Published' : ''}}</th>
                                    <td>
                                        <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-primary btn-sm"> 
                                            <i class="fa fa-edit"></i> Edit </a>
                                        <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> Delete</i></a>
                                        {{-- <a href="{{route('category.delete', ['id' => $category->id])}}" onclick = "alert(confirm('Are You Sure Want to Delete This!'))" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> Delete</i></a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection