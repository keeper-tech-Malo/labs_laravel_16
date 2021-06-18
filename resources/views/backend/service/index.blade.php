@extends('layouts.back')
@section('content')
    @include('layouts.flash')
    <div class="bordou">
        <div>
            <a href="{{route('service.create')}}" class="btn btn-info">Add</a>
        </div>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-4 col-sm-3 text-center my-3 py-3 feat">
                    <div class="service">
                        <div class="icon">
                            <i class="{{$service->icon->icon}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$service->title}}</h2>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('service.edit', $service->id)}}" class="btn btn-success mx-2">Edit</a>
                        <form action="{{route('service.destroy', $service->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tresh btn btn-danger mx-2"><i class="fas fa-trash"></i></button>
                        </form> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection