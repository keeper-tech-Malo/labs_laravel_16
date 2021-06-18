@extends('layouts.back')

@section('content')
    <form action="{{route('service.store')}}" class="" method="post">
        @csrf
        <div class="container bordou mt-5">
            <h1 class="text-center my-5">Création Service</h1>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="title">Titre</label>
                    <input type="text" style="font-size: 20px;" class="form-control @error('title') is-invalid @enderror" name="title">
                    @error('title')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="description">Description</label>
                    {{-- <input type="text" style="font-size: 20px;" class="text-center form-control @error('description') is-invalid @enderror" name="description" value="{{$service->description}}"> --}}
                    <textarea name="description" style="height: 200px;" class="@error('description') is-invalid @enderror w-100"></textarea>
                    @error('description')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    {{-- <input type="text" value="{{$service->icon->icon}}" name="icon"> --}}
                    <select class="form-select form-control @error('icon') is-invalid @enderror" name="icon">
                        @foreach ($icons as $icon)
                            <option value="{{$icon->id}}">
                                {{$icon->icon}}
                            </option>    
                        @endforeach
                    </select>
                    @error('icon')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <button type="submit" style="display: block; margin: auto;" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection