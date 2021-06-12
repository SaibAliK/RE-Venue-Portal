@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>Post
        <div>
            <form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Name of Title">
                </div>
                <input type="submit" class="btn btn-success">
            </form>
        </div>
</div>
@endsection