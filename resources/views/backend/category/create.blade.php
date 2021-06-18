@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="bordou shadow">
        <form action="{{route('category.store')}}" method="POST">
            @csrf 
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <h1 class="text-center my-3">Entrez votre category</h1>
                    <input type="text" style="font-size: 20px;" class="form-control @error('category') is-invalid @enderror" name="category">
                    @error('category')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                    <button type="submit" style="display: block;" class="my-4 mx-auto btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection