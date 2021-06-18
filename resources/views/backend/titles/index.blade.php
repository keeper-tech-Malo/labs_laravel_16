@extends('layouts.back')
@section('content')
    @include('layouts.flash')
    <form action="{{route('title.update', $title->id)}}" class="bordou d-flex flex-column" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center">Titres Home</h1>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <input type="text" style="font-size: 20px;" class="text-center form-control @error('titleHome1') is-invalid @enderror" name="titleHome1" value="{{$title->titleHome1}}">
                @error('titleHome1')
                    <span class="invalid-feedback">
                        <strong>Field required</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <input type="text" style="font-size: 20px;" class="text-center form-control @error('titleHome2') is-invalid @enderror" name="titleHome2" value="{{$title->titleHome2}}">
                @error('titleHome2')
                    <span class="invalid-feedback">
                        <strong>Field required</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <input type="text" style="font-size: 20px;" class="text-center form-control @error('titleHome3') is-invalid @enderror" name="titleHome3" value="{{$title->titleHome3}}">
                @error('titleHome3')
                    <span class="invalid-feedback">
                        <strong>Field required</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <input type="text" style="font-size: 20px;" class="text-center form-control @error('titleHome4') is-invalid @enderror" name="titleHome4" value="{{$title->titleHome4}}">
                @error('titleHome4')
                    <span class="invalid-feedback">
                        <strong>Field required</strong>
                    </span>
                @enderror
            </div>
        </div>
        <h1 class="text-center">Titres Service</h1>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <input type="text" style="font-size: 20px;" class="text-center form-control @error('titleService1') is-invalid @enderror" name="titleService1" value="{{$title->titleService1}}">
                @error('titleService1')
                    <span class="invalid-feedback">
                        <strong>Field required</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <input type="text" style="font-size: 20px;" class="text-center form-control @error('titleService2') is-invalid @enderror" name="titleService2" value="{{$title->titleService2}}">
                @error('titleService2')
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