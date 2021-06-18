<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            @foreach($posts as $post)
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="img/blog/{{$post->img}}" alt="">
                        </div>
                        <div class="card-text">
                            <h2>{{$post->title}}</h2>
                            <p>{{$post->text}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>