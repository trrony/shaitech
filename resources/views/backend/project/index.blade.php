@extends('backend.master')

@section('title')
Project Info Create
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6  mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center py-5">Add Project Form</h1>
                            <form action="{{route('project.create')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Project Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name = "title"  class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Project Description</label>
                                    <div class="col-md-8">
                                        <input type="text" name = "description"  class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Project Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name = "image"  class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-primary" value="Create New Project">
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