@extends('layouts.back')
@section('content')
    <div class="bordou">
        <div class="row">
            <div class="col-6">
                <div class="mappeu" id="map-area" data-field-id="{{$map->link}}"></div>
            </div>
            <div class="col-6">
                <form action="{{route('map.update', $map->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-row d-flex flex-column">
                        <div class="form-group">
                            <label for="link">Coordonnées</label>
                            <input type="text" style="font-size: 20px; width: 100%;" class="text-center form-control @error('link') is-invalid @enderror" name="link" value="{{$map->link}}">
                            @error('link')
                                <span class="invalid-feedback">
                                    <strong>Field required</strong>
                                </span>
                            @enderror
                            </div>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection