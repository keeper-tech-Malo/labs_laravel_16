@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="bordou">
        <form class="row" action="{{route('discover.update', $discover->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-6 d-flex flex-column">
                <h4 class="text-center">Premier paragraphe</h4>
                <textarea name="para1" cols="30" rows="10">{{$discover->para1}}</textarea>
            </div>
            <div class="col-6 d-flex flex-column">
                <h4 class="text-center">Deuxième paragraphe</h4>
                <textarea name="para2" cols="30" rows="10">{{$discover->para2}}</textarea>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-success">Confirm</button>
            </div>
        </form>
    </div>
@endsection