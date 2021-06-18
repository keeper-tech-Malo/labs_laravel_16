@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="bordou shadow">
        @can('removeTag')
        <a href="{{route('tag.create')}}" class="btn btn-info mb-4">Add</a>
        @endcan
        <div class="row d-flex flex-column">
            <div class="col-3">
                <ul class="list-group">
                        @foreach($tags as $tag)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <h2>{{$tag->tag}}</h2>
                                @can('removeTag')
                                    <form action="{{route('tag.destroy', $tag->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>              
                                @endcan
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection