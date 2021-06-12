@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>Location
        <div>
            <form action="{{route('admin.save_location')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name of location">
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Enter Slug">
                </div>
                <div class="form-group">
                    <label for="">Photo</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <input type="submit" class="btn btn-success">
            </form>
        </div>
</div>
@endsection