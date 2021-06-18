@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="bordou">
        <form action="{{route('user.update', Auth::user()->id)}}" class="d-flex flex-column" method="POST">
            @csrf
            @method('PUT')
            <h1 class="text-center">Modification du profile</h1>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="description">Description</label>
                    <textarea type="text" style="font-size: 20px;" class="text-center form-control @error('description') is-invalid @enderror" name="description">{{$user->description}}</textarea>
                    @error('description')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="Name">Name</label>
                    <input type="text" style="font-size: 20px;" class="text-center form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}">
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="firstname">First Name</label>
                    <input type="text" style="font-size: 20px;" class="text-center form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{$user->firstname}}">
                    @error('firstname')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="age">Age</label>
                    <input type="number" style="font-size: 20px;" class="text-center form-control @error('age') is-invalid @enderror" name="age" value="{{$user->age}}">
                    @error('age')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="email">Email</label>
                    <input type="email" style="font-size: 20px;" class="text-center form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}">
                    @error('age')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="img">Image</label>
                    <input type="file" style="font-size: 20px;" class="text-center form-control @error('img') is-invalid @enderror" name="img" value="{{$user->img}}">
                    @error('age')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="job">Job</label>
                    <select class="form-select form-control @error('job') is-invalid @enderror" name="job">
                        <option value={{$user->job->id}} selected>{{$user->job->job}}</option>
                        @foreach ($jobs as $job)
                            <option value="{{$job->id}}">
                                {{$job->job}}
                            </option>    
                        @endforeach
                    </select>
                    @error('job')
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
    </div>
@endsection