@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="bordou">
        <h1 class="text-center mb-5">Bienvenue au Dashboard</h1>
        <div class="row">
            <div class="col-6 d-flex align-items-center justify-content-center">
                <img src="/img/avatar/{{Auth::user()->img}}" class="profilimage" alt="">
            </div>
            <div class="col-6">
                <form action="{{route('user.update', Auth::user())}}" class="d-flex flex-column" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row d-flex justify-content-center">
                        <div class="form-group col-8">
                            <label for="description">Description</label>
                            <textarea type="text" style="font-size: 20px;" class="form-control @error('description') is-invalid @enderror" name="description">{{Auth::user()->description}}</textarea>
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
                            <input type="text" style="font-size: 20px;" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}">
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
                            <input type="text" style="font-size: 20px;" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{Auth::user()->firstname}}">
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
                            <input type="number" style="font-size: 20px;" class="form-control @error('age') is-invalid @enderror" name="age" value="{{Auth::user()->age}}">
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
                            <input type="email" style="font-size: 20px;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}">
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
                            <input type="file" style="font-size: 20px;" class="form-control @error('img') is-invalid @enderror" name="img" value="{{Auth::user()->img}}">
                            @error('img')
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
                                <option value={{Auth::user()->job->id}} selected>{{Auth::user()->job->job}}</option>
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
                        <button type="submit" class="btn btn-info">Sauvegarder les changements</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection