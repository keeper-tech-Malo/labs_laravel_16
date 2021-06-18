<header class="header-section">
    <div class="logo">
        <img src="img/{{$logo->link}}" alt="" height="34px"><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li><a href={{route('home')}}>Home</a></li>
            <li><a href={{route('services')}}>Services</a></li>
            <li class="active"><a href={{route('blog')}}>Blog</a></li>
            <li><a href={{route('contact')}}>Contact</a></li>
        </ul>
    </nav>
</header>