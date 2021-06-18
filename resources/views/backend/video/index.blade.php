@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="bordou">
        <div class="d-flex flex-column">
            <form action="{{route('video.update', $video->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col">
                        <label for="link">Modifier vidéo:</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{$video->link}}">
                        @error('link')
                            <span class="invalid-feedback">
                                <strong>Field required</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Confirm</button>
                <a href="{{route('dashboard')}}" class="btn btn-primary">Back</a>
            </form>
        </div>
    </div>
@endsection