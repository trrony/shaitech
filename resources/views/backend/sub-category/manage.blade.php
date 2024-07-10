@extends('backend.master')

@section('title')
All Sub Category
@endsection

@section('content')

    <section class="py-3">
        <h3 class="text-center">All Sub Category</h3>
        <h3 class="text-success text-center py-2">{{session('msg')}}</h3>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Sub Category Name</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subCategories as $subCategory)                           
                                <tr class="table-active">
                                    <td>{{$subCategory->id}}</td>
                                    <td>{{$subCategory->name}}</td>
                                    <td>{{$subCategory->category->name}}</td>
                                    <th>{{$subCategory->status == 1 ? 'Published' : ''}}</th>
                                    <td>
                                        <a href="{{route('sub-category.edit', ['id' => $subCategory->id])}}" class="btn btn-primary btn-sm"> 
                                            <i class="fa fa-edit"></i> Edit </a>
                                        <a href="{{route('sub-category.delete', ['id' => $subCategory->id])}}"  class="btn btn-danger btn-sm"> <i class="fa fa-trash"> Delete</i></a>
                                        {{-- <a href="{{route('sub-category.delete', ['id' => $subCategory->id])}}" onclick = "alert(confirm('Are You Sure Want to Delete This!'))" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> Delete</i></a> --}}
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