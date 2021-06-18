@extends('layouts.back')
@section('content')
    @include('layouts.flash')
    <div class="bordou shadow">
        <a href="{{route('newsletter.index')}}" class="btn btn-primary">Newsletter Members</a>
        @foreach ($users as $user)   
        <form action="{{route('changeRole', $user->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row m-4 shadow userrow">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <img src="/img/avatar/{{$user->img}}" alt="" class="minimaj">
                </div>
                <div class="col-1">
                    <p>{{$user->firstname}}</p>
                    <p>{{$user->name}}</p>
                </div>
                <div class="col-1 d-flex align-items-center">
                    <p>{{$user->age}}</p>
                </div>
                @if ($user->description == null)
                    <div class="col-3 d-flex align-items-center">
                        <p>Pas de description.</p>
                @else
                    <div class="col-3">
                        <p>{{$user->description}}</p>
                @endif
                </div>
                <div class="col-2 d-flex align-items-center">
                    <p>{{$user->email}}</p>
                </div>
                <div class="col-1 d-flex align-items-center">
                    @if ($user->validate == 0)
                        <p>Pas validé</p>
                    @else
                        <p>Validé</p>
                    @endif
                </div>                
                <div class="col-1 d-flex align-items-center justify-content-center ">
                    <select name="job">
                        <option value={{$user->job->id}} selected>{{$user->job->job}}</option>
                        @foreach ($jobs as $job)
                            @if ($job->id != $user->job->id)
                                <option value="{{$job->id}}">
                                    {{$job->job}}
                                </option>
                            @endif    
                        @endforeach
                    </select>
                </div>
                <div class="col-1 d-flex align-items-center justify-content-center pr-1">
                    <select name="role">
                        <option value={{$user->role->id}} selected>{{$user->role->role}}</option>
                        @foreach ($roles as $role)
                            @if ($role->id != $user->role->id)
                                <option value="{{$role->id}}">
                                    {{$role->role}}
                                </option>    
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-1 d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
@endsection