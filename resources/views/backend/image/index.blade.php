@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="m-4 bordou shadow">
        <h1 class="text-center mb-3">Galèrie d'images</h1>
        <div class="row">
            @foreach ($images as $image)
                <div class="col-3 d-flex flex-column align-items-center">
                    <img src="/img/{{$image->link}}" height="200" class="galerie shadow">
                    <span>{{$image->link}}</span>
                    <div class="d-flex">
                        @if ($image->first == 1)
                            <div class="btn btn-secondary mx-2">Première image</div>
                        @else                    
                            <form action="{{route('firstImage', $image->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="tresh btn btn-dark mx-2">First</button>
                            </form>
                        @endif
                        <form action="{{route('image.destroy', $image->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tresh btn btn-danger mx-2"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-3">
                <label for="link">Votre Image:</label>
                <input type="file" class="form-control-file @error('link') is-invalid @enderror" name="link">
                @error('link')
                <span class="invalid-feedback">
                    <strong>Field required</strong>
                </span>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        
    </div>
@endsection