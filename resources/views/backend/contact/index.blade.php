@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="bordou">
        <form action="{{route('contact.update', $contact->id)}}" class="d-flex flex-column" method="POST">
            @csrf
            @method('PUT')
            <h1 class="text-center">Contact</h1>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="description">Description</label>
                    <textarea type="text" style="font-size: 20px;" class="text-center form-control @error('description') is-invalid @enderror" name="description" value="{{$contact->description}}">{{$contact->description}}</textarea>
                    @error('description')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="Building">Building</label>
                    <input type="text" style="font-size: 20px;" class="text-center form-control @error('building') is-invalid @enderror" name="building" value="{{$contact->building}}">
                    @error('building')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="Street">Street</label>
                    <input type="text" style="font-size: 20px;" class="text-center form-control @error('street') is-invalid @enderror" name="street" value="{{$contact->street}}">
                    @error('street')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="Postcode">Postcode</label>
                    <input type="text" style="font-size: 20px;" class="text-center form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{$contact->postcode}}">
                    @error('postcode')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="City">City</label>
                    <input type="text" style="font-size: 20px;" class="text-center form-control @error('city') is-invalid @enderror" name="city" value="{{$contact->city}}">
                    @error('city')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="Number">Number</label>
                    <input type="text" style="font-size: 20px;" class="text-center form-control @error('number') is-invalid @enderror" name="number" value="{{$contact->number}}">
                    @error('number')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-8">
                    <label for="Email">Email</label>
                    <input type="text" style="font-size: 20px;" class="text-center form-control @error('email') is-invalid @enderror" name="email" value="{{$contact->email}}">
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>Field required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center my-5">
                <button type="submit" class="btn btn-success">Sauvegarder les changements</button>
            </div>
            </div>
        </form>
    </div>
@endsection