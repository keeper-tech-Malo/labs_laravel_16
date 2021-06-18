@extends('layouts.back')

@section('content')
<form action="{{route('feature.update', $feature->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row bordou mt-5">
        <div class="col-6 d-flex flex-column align-items-center">
            <div class="feature text-center w-50">
                <div class="icon">
                    <i class="{{$feature->icon->icon}}"></i>
                </div>
                <div class="feature-text">
                    <h2>{{$feature->title}}</h2>
                    <p>{{$feature->description}}</p>
                </div>
            </div>
            <button type="submit" class="mt-5 btn btn-primary">Save</button>
        </div>
        <div class="col-6">
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="title">Titre</label>
                    <input type="text" style="font-size: 20px;" class="text-center form-control @error('title') is-invalid @enderror" name="title" value="{{$feature->title}}">
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
                    {{-- <input type="text" style="font-size: 20px;" class="text-center form-control @error('description') is-invalid @enderror" name="description" value="{{$feature->description}}"> --}}
                    <textarea name="description" style="height: 200px;" value={{$feature->description}} class="@error('description') is-invalid @enderror w-100">{{$feature->description}}</textarea>
                    @error('description')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    {{-- <input type="text" value="{{$feature->icon->icon}}" name="icon"> --}}
                    <select class="form-select form-control @error('icon') is-invalid @enderror" name="icon">
                        <option value={{$feature->icon->id}} selected>{{$feature->icon->icon}}</option>
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
        </div>
    </div>
</form>
@endsection