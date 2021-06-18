{{-- SUCCESS --}}
@if ($message = Session::get('success'))
    <div class="alert alert-success mt-3 alert-block">
        <strong>{{$message}}</strong>
    </div>
@endif

{{-- WARNING --}}
@if ($message = Session::get('warning'))
    <div class="alert alert-warning mt-3 alert-block">
        <strong>{{$message}}</strong>
    </div>
@endif

{{-- ERROR --}}

@if ($errors->any())
    <div class="alert mt-3 alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif