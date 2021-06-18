@extends('layouts.back')
@section('content')
    <div class="bordou">
        <h1>Liste Newsletter</h1>
        <ul class="list-group">
            @foreach ($newsletters as $news)   
                <li class="list-group-item">{{$news->email}}</li>
            @endforeach
        </ul>
    </div>
@endsection