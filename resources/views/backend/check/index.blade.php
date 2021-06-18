@extends('layouts.back')
@section('content')
    @include('layouts.flash')
    <div class="bordou">
        <div class="d-flex flex-column align-items-center">
            <h1 class="text-center">Articles</h1>
            @forelse ($posts as $post)    
                <div class="grid shadow mx-1">
                    <li class="list-group-item shadow"><span>ID: </span>{{$post->id}}</li>
                    <li class="list-group-item shadow"><span>Title: </span>{{$post->title}}</li>
                    <li class="list-group-item shadow"><span>Text: </span>{{Str::limit($post->text, 50, '...')}}</li>
                    <li class="list-group-item shadow"><span>Date: </span>{{$post->dateDay}} {{$post->dateMonth}} {{$post->dateYear}}</li>
                    <li class="list-group-item shadow"><span>Image: </span>{{$post->img}}</li>
                    <li class="list-group-item shadow"><span>Category: </span>{{$post->category->category}}</li>
                    <li class="list-group-item shadow"><span>Validate: </span>{{$post->validate}}</li>
                    <li class="list-group-item shadow d-flex">
                        <form action="{{route('valid', $post->id)}}" method="POST" class="mx-2">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="tresh btn btn-info">Validate</button>
                        </form> 
                    </li>
                </div>
            @empty
                <h1>Il n'y a pas d'article ici.</h1>
            @endforelse
        </div> 
        <div class="">
            <h1 class="text-center">Users</h1>
            @forelse ($users as $user)   
            <div class="row m-4 shadow userrow">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <img src="/img/avatar/{{$user->img}}" alt="" class="minimaj">
                </div>
                <div class="col-2">
                    <p>{{$user->firstname}}</p>
                    <p>{{$user->name}}</p>
                </div>
                <div class="col-2 d-flex align-items-center">
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
                <div class="col-2 d-flex align-items-center">
                    <form action="{{route('verifyUser', $user->id)}}" method="POST" class="mx-2">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="tresh btn btn-info">Validate</button>
                    </form> 
                </div>                
            </div>
        @empty
            <h1 class="text-center">Tous les users validés</h1>
        @endforelse
        </div>  
    </div>
@endsection