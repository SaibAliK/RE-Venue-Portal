@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 card mr-1">
            <h1>All Post <a href="{{route('admin.post.add')}}" class="btn btn-info">Add</a></h1>
            @foreach($post as $item)
            <a href="">
                <h2>Post {{$loop->iteration}}: {{$item->title ?? ''}} </h2>
            </a>
            <hr>
            <form action="{{route('admin.comment.store',$item->id)}}?type=post" method="post">
            @csrf
                <div class="form-group">
                    <textarea id="" cols="50" rows="3" name="body"></textarea>
                    <input type="submit">
                </div>
            </form>
            <p>Comment:
            @foreach($item->comments as $items)
            <span class="badge badge-info">{{$items->body ?? ''}}</span>
            <br>
            @endforeach
            </p>
            @endforeach
        </div>

        <div class="col-12 col-sm-12 col-md-5 col-lg-5 card mr-1">
            <h1>All Vidoes <a href="{{route('admin.video.add')}}" class="btn btn-info">Add</a></h1>
            @foreach($vidoes as $item)
            <a href="">
                <h2>Post {{$loop->iteration}}: {{$item->title ?? ''}} </h2>
            </a>
            <hr>
            <form action="{{route('admin.comment.store',$item->id)}}?type=video" method="post">
            @csrf
                <div class="form-group">
                    <textarea id="" cols="50" rows="3" name="body"></textarea>
                    <input type="submit">
                </div>
            </form>
            <p>Comment:
            @foreach($item->comments as $items)
            <span class="badge badge-info">{{$items->body ?? ''}}</span>
            <br>
            @endforeach
            </p>
            @endforeach
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 card">
            <h1>All Comment <a href="" class="btn btn-info">Add</a></h1>
            @foreach($comment as $item)
            <a href="">{{$item->body ?? ''}}</a>
            @endforeach
        </div>
    </div>
</div>

@endsection