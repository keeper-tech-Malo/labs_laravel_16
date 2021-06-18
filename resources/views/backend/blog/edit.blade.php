@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="bordou">
        <form action="{{route('post.update', $post->id)}}" class="d-flex flex-column" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h1 class="text-center">Créer un post</h1>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="titre">Titre</label>
                    <input type="text" style="font-size: 20px;" class="form-control @error('title') is-invalid @enderror" name="title" value={{$post->title}}>
                    @error('title')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="text">Text</label>
                    <textarea type="text" style="font-size: 20px;" class="form-control @error('text') is-invalid @enderror" name="text" value={{$post->text}}>{{$post->text}}</textarea>
                    @error('text')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="category">Category</label>
                    <select class="form-select form-control @error('category') is-invalid @enderror" name="category" value={{$post->category->category}}>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->category}}
                            </option>    
                        @endforeach
                    </select>
                    @error('category')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    @foreach ($tags as $tag)
                        <span>
                            <input type="checkbox" name="tagList[]" value={{$tag->id}}
                            @foreach($tagposts as $tagpost)
                                @if ($tagpost->tag_id == $tag->id)
                                    checked
                                @endif
                            @endforeach
                            >
                            {{$tag->tag}}
                        </span>
                    @endforeach
                    @error('category')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <div class="form-group">
                        <label for="img">Votre Image:</label>
                        <input type="file" class="form-control-file" name="img" value={{$post->img}}>
                    </div>
                    @error('img')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Sauvegarder les changements</button>
            </div>
        </form>
    </div>
@endsection