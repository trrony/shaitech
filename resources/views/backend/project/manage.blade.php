@extends('backend.master')

@section('title')
All Projects
@endsection

@section('content')

    <section class="py-3">
        <h3 class=" text-center">All Projects</h3>
        <h3 class="text-success text-center py-2">{{session('msg')}}</h3>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Project Description</th>
                                    <th>Project Image</th>
                                    <th>Action</th>                   
                                </tr>
                            </thead>
                           <tbody>
                                @foreach ($projects as $project)                           
                                <tr class="table-active">
                                    <td>{{$project->id}}</td>
                                    <td>{{$project->description}}</td> 
                                    <td> <img src="{{asset($project->image)}}" height="50" width="50" alt=""> </td> 
                                    <td>
                                        <a href="{{route('project.edit', ['id' => $project->id])}}" class="btn btn-primary btn-sm"> 
                                            <i class="fa fa-edit"></i> Edit </a>
                                        <a href="{{route('project.delete', ['id' => $project->id])}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> Delete</i></a>
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