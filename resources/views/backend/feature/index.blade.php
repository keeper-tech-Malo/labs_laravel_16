@extends('layouts.back')
@section('content')
    @include('layouts.flash')
    <div class="row bordou">
        <div class="col-6 d-flex flex-column text-center">
            
            @foreach ($featLeft as $feat)
            <div class="icon-box light left m-1 feat">
                <div class="service-text">
                    <h2>{{$feat->title}}</h2>
                    <p>{{$feat->description}}</p>
                </div>
                <div class="icon">
                    <i class="{{$feat->icon->icon}}"></i>
                </div>
                <a href="{{route('feature.edit', $feat->id)}}" class="btn btn-success w-100">Edit</a>
            </div>
            @endforeach
        </div>
        <div class="col-6 d-flex flex-column text-center">
            
            @foreach ($featRight as $feat)
            <div class="icon-box light left m-1 feat">
                <div class="service-text">
                    <h2>{{$feat->title}}</h2>
                    <p>{{$feat->description}}</p>
                </div>
                <div class="icon">
                    <i class="{{$feat->icon->icon}}"></i>
                </div>
                <a href="{{route('feature.edit', $feat->id)}}" class="btn btn-success w-100">Edit</a>
            </div>
            @endforeach
        </div>
    </div>
@endsection