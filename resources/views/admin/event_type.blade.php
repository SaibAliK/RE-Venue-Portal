@extends('layouts.admin')

@section('content')
<div class="container">
<h1>Event Type</h1>
@foreach($event_types as $item)
<p>{{$item->name ?? ''}} -- {{$item->slug ?? ""}}</p>
@endforeach
</div>
@endsection