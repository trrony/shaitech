@extends('backend.master')

@section('title')
Edit Project Info
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6  mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center py-5">Edit Project Form</h1>
                            <form action="{{route('project.update', ['id'=> $project->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Project Description</label>
                                    <div class="col-md-8">
                                        <input type="text" name = "description" value="{{$project->description}}"  class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Project Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name = "image"  class="form-control"> <br>
                                        <img src="{{asset($project->image)}}" height="50" width="50" alt="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-primary" value="Update Project">
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