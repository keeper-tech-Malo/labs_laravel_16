<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>
                        @php
                            $title1 = str_replace('(', '<span>', $title->titleHome2);
                            $title2 = str_replace(')', '</span>', $title1);
                            echo $title2;      
                        @endphp
                    </h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonials->reverse() as $testimonial)
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>{{$testimonial->quote}}</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/{{$testimonial->image}}" alt="">
                            </div>
                            <div class="client-name">
                                <h2>{{$testimonial->firstname}} {{$testimonial->lastname}}</h2>
                                <p>{{$testimonial->job}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
