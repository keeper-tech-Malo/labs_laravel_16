<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>
                @php
                    $title1 = str_replace('(', '<span>', $title->titleHome3);
                    $title2 = str_replace(')', '</span>', $title1);
                    echo $title2;      
                @endphp
            </h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($service9 as $service)  
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{$service->icon->icon}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$service->title}}</h2>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{route('services')}}" class="site-btn">Browse</a>
        </div>
    </div>
</div>