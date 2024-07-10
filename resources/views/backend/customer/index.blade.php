@extends('backend.master')

@section('title')

@endsection
@section('content')
<section class="py-3">
    <h3 class=" text-center">Customer Message</h3>
    <h3 class="text-success text-center py-2">{{session('msg')}}</h3>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>                   
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)                           
                            <tr class="table-active">
                                <td>{{$customer->id}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>Mobile</td>
                                <td>{{$customer->subject}}</td>
                                <td>{{$customer->message}}</td>
                                {{-- <th>{{$category->status == 1 ? 'Published' : ''}}</th> --}}
                                <td>
                                    <a href="{{route('customer.delete', ['id'=>$customer->id])}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> Delete</i></a>
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