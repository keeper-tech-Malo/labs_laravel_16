<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>                    
                @php
                    $title1 = str_replace('(', '<span>', $title->titleService2);
                    $title2 = str_replace(')', '</span>', $title1);
                    echo $title2;      
                @endphp
            </h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($featLeft as $feat)
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{$feat->title}}</h2>
                        <p>{{$feat->description}}</p>
                    </div>
                    <div class="icon">
                        <i class="{{$feat->icon->icon}}"></i>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($featRight as $feat)        
                <div class="icon-box light">
                    <div class="icon">
                        <i class="{{$feat->icon->icon}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$feat->title}}</h2>
                        <p>{{$feat->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>