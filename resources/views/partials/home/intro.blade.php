<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="img/{{$logo->link}}" alt="">
            <p>Get your freebie template now!</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @forelse ($activeImage as $active)
            <div class="item  hero-item" data-bg="img/{{$active->link}}"></div>
        @empty
            
        @endforelse
        @foreach ($images as $image)
            <div class="item  hero-item" data-bg="img/{{$image->link}}"></div>
        @endforeach
    </div>
</div>