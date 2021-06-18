@extends('layouts.back')

@section('content')
    <div class="bordou">
        <form action="{{route('post.store')}}" class="d-flex flex-column" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center">Créer un post</h1>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="titre">Titre</label>
                    <input type="text" style="font-size: 20px;" class="form-control @error('title') is-invalid @enderror" name="title">
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
                    <textarea type="text" style="font-size: 20px;" class="form-control @error('text') is-invalid @enderror" name="text"></textarea>
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
                    <select class="form-select form-control @error('category') is-invalid @enderror" name="category">
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
                        <span><input type="checkbox" name="tagList[]" value={{$tag->id}}>{{$tag->tag}}</span>
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
                        <input type="file" class="form-control-file" name="img">
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