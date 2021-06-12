@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Veneue List <a href="{{route('admin.venue.add')}}" class="btn btn-info">Add Veneue</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Venue">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            slug
                        </th>
                        <th>
                            location
                        </th>
                        <th>
                            event_types
                        </th>
                        <th>
                            address
                        </th>
                        <th>
                            latitude
                        </th>
                        <th>
                            longitude
                        </th>
                        <th>
                            description
                        </th>
                        <th>
                            features
                        </th>
                        <th>
                            people_minimum
                        </th>
                        <th>
                            people_maximum
                        </th>
                        <th>
                            price_per_hour
                        </th>
                        <th>
                            main_photo
                        </th>
                        <th>
                            gallery
                        </th>
                        <th>
                            is_featured
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($veneues as $key => $venue)
                    <tr data-entry-id="{{ $venue->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $venue->id ?? '' }}
                        </td>
                        <td>
                            {{ $venue->name ?? '' }}
                        </td>
                        <td>
                            {{ $venue->slug ?? '' }}
                        </td>
                        <td>
                            {{ $venue->location->name ?? '' }}
                        </td>
                        <td>
                            @foreach($venue->event_types as $key => $item)
                            <span class="badge badge-info">{{ $item->name ?? ''}}</span>
                            @endforeach
                        </td>
                        <td>
                            {{ $venue->address ?? '' }}
                        </td>
                        <td>
                            {{ $venue->latitude ?? '' }}
                        </td>
                        <td>
                            {{ $venue->longitude ?? '' }}
                        </td>
                        <td>
                            {{ $venue->description ?? '' }}
                        </td>
                        <td>
                            {{ $venue->features ?? '' }}
                        </td>
                        <td>
                            {{ $venue->people_minimum ?? '' }}
                        </td>
                        <td>
                            {{ $venue->people_maximum ?? '' }}
                        </td>
                        <td>
                            {{ $venue->price_per_hour ?? '' }}
                        </td>
                        <td>
                            photo
                        </td>
                        <td>
                            Galary
                        </td>
                        <td>
                            is_featured
                        </td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="">
                                view
                            </a>

                            <a class="btn btn-xs btn-info" href="">
                                Edit
                            </a>
                            <a class="btn btn-xs btn-info" href="">
                                DELETE
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function() {
        /*
        $.ajax({
                headers: {
                    'x-csrf-token': _token
                },
                method: 'POST',
                url: config.url,
                data: {
                    ids: ids,
                    _method: 'DELETE'
                }
            })
            .done(function() {
                location.reload()
            });
        */
    })
</script>
@endsection