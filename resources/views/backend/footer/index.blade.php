@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <form action="{{route('footer.update', $footer->id)}}" class="bordou d-flex flex-column" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center">Footer</h1>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <input type="text" style="font-size: 20px;" class="text-center form-control @error('year') is-invalid @enderror" name="year" value="{{$footer->year}}">
                @error('year')
                    <span class="invalid-feedback">
                        <strong>Field required</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <input type="text" style="font-size: 20px;" class="text-center form-control @error('rights') is-invalid @enderror" name="rights" value="{{$footer->rights}}">
                @error('rights')
                    <span class="invalid-feedback">
                        <strong>Field required</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <input type="text" style="font-size: 20px;" class="text-center form-control @error('by') is-invalid @enderror" name="by" value="{{$footer->by}}">
                @error('by')
                    <span class="invalid-feedback">
                        <strong>Field required</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <input type="text" style="font-size: 20px;" class="text-center form-control @error('author') is-invalid @enderror" name="author" value="{{$footer->author}}">
                @error('author')
                    <span class="invalid-feedback">
                        <strong>Field required</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Sauvegarder les changements</button>
        </div>
    </form>
@endsection