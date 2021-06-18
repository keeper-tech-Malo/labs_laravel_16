@extends('layouts.labs')

@section('content')
    @include('partials.blog.header')
    @include('partials.blog.pageheader')
    <div class="page-section spad">
        <div class="container">
            <div class="row" id="fragment">
                <div class="col-md-8 col-sm-7 blog-posts">
                    @if (count($searchPosts) <= 0)
                        <h1>Aucun résultat trouvé</h1>
                    @else
                        @foreach ($searchPosts as $post)
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <img src="../img/blog/{{$post->img}}" alt="">
                                    <div class="post-date">
                                        <h2>{{$post->dateDay}}</h2>
                                        <h3>{{$post->dateMonth}} {{$post->dateYear}}</h3>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h2 class="post-title">{{$post->title}}</h2>
                                    <div class="post-meta">
                                        <a href="">{{$post->user->firstname}} {{$post->user->name}}</a>
                                        <a href="">{{$post->category->category}}</a>
                                        @if ($post->comment->where('post_id', "=", $post->id)->count() <= 1)
                                            <a href="">{{$post->comment->count()}} Comment</a>
                                        @elseif ($post->comment->where('post_id', "=", $post->id)->count() > 1)
                                            <a href="">{{$post->comment->count()}} Comments</a>
                                        @endif
                                    </div>
                                    <p>{{$post->text}}</p>
                                    <a href="{{route('blogpost', $post->id)}}" class="read-more">Read More</a>
                                </div>
                            </div>
                        @endforeach  
                        {{-- <p>{{$searchPosts->links()}}</p> --}}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection