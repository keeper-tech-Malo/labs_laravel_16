<div class="page-section spad">
    <div class="container">
        <div class="row" id="paginate">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                @foreach ($posts->reverse() as $post)
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="/img/blog/{{$post->img}}" alt="">
                            <div class="post-date">
                                <h2>{{$post->dateDay}}</h2>
                                <h3>{{$post->dateMonth}} {{$post->dateYear}}</h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{$post->title}}</h2>
                            <div class="post-meta">
                                <a href="">{{$post->category->category}}</a>
                                @foreach($post->tag as $tag)
                                    <a href="">{{$tag->tag}}</a>
                                @endforeach
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
                {{-- <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">Just a simple blog post</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.</p>
                        <a href="blog-post.html" class="read-more">Read More</a>
                    </div>
                </div>
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/blog/blog-3.jpg" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">Just a simple blog post</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.</p>
                        <a href="blog-post.html" class="read-more">Read More</a>
                    </div>
                </div> --}}
                <!-- Pagination -->
                {{-- <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
                </div> --}}
                {{$posts->links('vendor.pagination.default')}}
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form class="search-form" action={{route('search')}} method="GET">
                        <input type="text" name="search" placeholder="Search">
                        <button class="search-btn" type="submit"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach($categories as $category)
                            <li><a href="#">{{$category->category}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach($tags as $tag)
                            <li><a href="">{{$tag->tag}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
