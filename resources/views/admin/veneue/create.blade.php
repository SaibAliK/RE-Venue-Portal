@extends('layouts.admin')
@section('content')

<div class="card container">
    <div class="card-header">
        Create Veneues
    </div>

    <div class="card-body">
        <form action="{{route('admin.veneue_store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">name*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($venue) ? $venue->name : '') }}" required>
                @if($errors->has('name'))
                <em class="invalid-feedback">
                    {{ $errors->first('name') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="slug">slug*</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', isset($venue) ? $venue->slug : '') }}" required>
                @if($errors->has('slug'))
                <em class="invalid-feedback">
                    {{ $errors->first('slug') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('location_id') ? 'has-error' : '' }}">
                <label for="location">location*</label>
                <select name="location_id" id="location" class="form-control select2" required>
                    <option value="" selected disabled>Choose Location</option>
                    @foreach($locations as $id => $location)
                    <option value="{{ $id }}">location ? $venue->location->id : old('location_id')) == $id ? 'selected' : '' }}>{{ $location }}</option>
                    @endforeach
                </select>
                @if($errors->has('location_id'))
                <em class="invalid-feedback">
                    {{ $errors->first('location_id') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('event_types') ? 'has-error' : '' }}">
                <label for="event_types">event_types</label>

                <select name="event_types[]" id="event_types" class="form-control select2" multiple="multiple">
                    <option value="" selected disabled>Choose Event Types</option>
                    @foreach($events as $id => $event_types)
                    <option value="{{ $id }}" {{ (in_array($id, old('event_types', [])) || isset($venue) && $venue->event_types->contains($id)) ? 'selected' : '' }}>{{ $event_types }}</option>
                    @endforeach
                </select>
                @if($errors->has('event_types'))
                <em class="invalid-feedback">
                    {{ $errors->first('event_types') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">address*</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($venue) ? $venue->address : '') }}" required>
                @if($errors->has('address'))
                <em class="invalid-feedback">
                    {{ $errors->first('address') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
                <label for="latitude">latitude</label>
                <input type="number" id="latitude" name="latitude" class="form-control" value="{{ old('latitude', isset($venue) ? $venue->latitude : '') }}" step="0.00000001">
                @if($errors->has('latitude'))
                <em class="invalid-feedback">
                    {{ $errors->first('latitude') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
                <label for="longitude">longitude</label>
                <input type="number" id="longitude" name="longitude" class="form-control" value="{{ old('longitude', isset($venue) ? $venue->longitude : '') }}" step="0.00000001">
                @if($errors->has('longitude'))
                <em class="invalid-feedback">
                    {{ $errors->first('longitude') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">description</label>
                <textarea id="description" name="description" class="form-control ">{{ old('description', isset($venue) ? $venue->description : '') }}</textarea>
                @if($errors->has('description'))
                <em class="invalid-feedback">
                    {{ $errors->first('description') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('features') ? 'has-error' : '' }}">
                <label for="features">features</label>
                <textarea id="features" name="features" class="form-control ">{{ old('features', isset($venue) ? $venue->features : '') }}</textarea>
                @if($errors->has('features'))
                <em class="invalid-feedback">
                    {{ $errors->first('features') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('people_minimum') ? 'has-error' : '' }}">
                <label for="people_minimum">people_minimum</label>
                <input type="number" id="people_minimum" name="people_minimum" class="form-control" value="{{ old('people_minimum', isset($venue) ? $venue->people_minimum : '') }}" step="1">
                @if($errors->has('people_minimum'))
                <em class="invalid-feedback">
                    {{ $errors->first('people_minimum') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('people_maximum') ? 'has-error' : '' }}">
                <label for="people_maximum">people_maximum</label>
                <input type="number" id="people_maximum" name="people_maximum" class="form-control" value="{{ old('people_maximum', isset($venue) ? $venue->people_maximum : '') }}" step="1">
                @if($errors->has('people_maximum'))
                <em class="invalid-feedback">
                    {{ $errors->first('people_maximum') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('price_per_hour') ? 'has-error' : '' }}">
                <label for="price_per_hour">price_per_hour</label>
                <input type="number" id="price_per_hour" name="price_per_hour" class="form-control" value="{{ old('price_per_hour', isset($venue) ? $venue->price_per_hour : '') }}" step="0.01">
                @if($errors->has('price_per_hour'))
                <em class="invalid-feedback">
                    {{ $errors->first('price_per_hour') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('main_photo') ? 'has-error' : '' }}">
                <label for="main_photo">main_photo</label>
                <div class="needsclick dropzone" id="main_photo-dropzone">

                </div>
                @if($errors->has('main_photo'))
                <em class="invalid-feedback">
                    {{ $errors->first('main_photo') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('gallery') ? 'has-error' : '' }}">
                <label for="gallery">gallery</label>
                <div class="needsclick dropzone" id="gallery-dropzone">

                </div>
                @if($errors->has('gallery'))
                <em class="invalid-feedback">
                    {{ $errors->first('gallery') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('is_featured') ? 'has-error' : '' }}">
                <label for="is_featured">is_featured</label>
                <input name="is_featured" type="hidden" value="0">
                <input value="1" type="checkbox" id="is_featured" name="is_featured" {{ old('is_featured', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('is_featured'))
                <em class="invalid-feedback">
                    {{ $errors->first('is_featured') }}
                </em>
                @endif
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
@stop