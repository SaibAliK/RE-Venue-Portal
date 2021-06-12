@extends('layouts.admin')
@section('content')

<div class="container">
    @can('create',app\Models\User::class)
    <h1>Location
        <a href="{{route('admin.location_add')}}" class="btn btn-success">Create</a>
    </h1>
    @endcan

    @foreach($locations as $item)
    <a href="{{route('admin.location_edit',$item->id.'-'.$item->path())}}">{{$item->location_name ?? ''}}</a>
    <p>{{$item->slug ?? ""}}</p>
    <img src="{{asset($item->image) ?? ''}}" alt="image" style="width: 100px;height:auto">
    @endforeach
</div>

<div>
    @foreach($Country as $item)
    <p>{{$item->name ?? ''}} -- {{$item->slug ?? ''}}</p>
    @endforeach
</div>

@endsection