<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href={{asset('css/back.css')}}>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="  border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-light">
                <img src="{{asset('img/'.$logo->link)}}" height="34px" alt="">
            </div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action " href="{{route('dashboard')}}"><i class="fas fa-home"></i>  Home</a>
                @admin
                <a class="list-group-item list-group-item-action " href="{{route('image.index')}}"><i class="fas fa-dharmachakra"></i>  Carousel</a>
                <a class="list-group-item list-group-item-action " href="{{route('title.edit', $title->id)}}"><i class="fas fa-heading"></i>  Title</a>
                <a class="list-group-item list-group-item-action " href="{{route('video.edit', $video->id)}}"><i class="fab fa-youtube"></i>  Video</a>
                <a class="list-group-item list-group-item-action " href="{{route('discover.edit', $discover->id)}}"><i class="fas fa-home"></i>  Discover</a>
                <a class="list-group-item list-group-item-action " href="{{route('service.index')}}"><i class="fas fa-concierge-bell"></i>  Services</a>
                <a class="list-group-item list-group-item-action " href="{{route('feature.index')}}"><i class="fas fa-mobile"></i> Feature</a>
                <a class="list-group-item list-group-item-action " href="{{route('contact.edit', $contact->id)}}"><i class="fas fa-address-book"></i>  Contact</a>
                <a class="list-group-item list-group-item-action " href="{{route('map.edit', $map->id)}}"><i class="fas fa-map-pin"></i> Map</a>
                <a class="list-group-item list-group-item-action " href="{{route('footer.edit', $footer->id)}}"><i class="fas fa-shoe-prints"></i> Footer</a>
                @endadmin
                @webmaster
                <a class="list-group-item list-group-item-action " href="{{route('verify.index')}}"><i class="fas fa-check-square"></i>  Validate</a>
                <a class="list-group-item list-group-item-action " href="{{route('bin.index')}}"><i class="fas fa-dumpster"></i>  Bin</a>
                <a class="list-group-item list-group-item-action " href="{{route('user.index')}}"><i class="fas fa-user-friends"></i>  Users</a>
                @endwebmaster
                @editor
                <a class="list-group-item list-group-item-action " href="{{route('post.index')}}"><i class="fas fa-feather-alt"></i> Blog</a>
                <a class="list-group-item list-group-item-action " href="{{route('category.index')}}"><i class="fas fa-table"></i>  Categories</a>
                <a class="list-group-item list-group-item-action " href="{{route('tag.index')}}"><i class="fas fa-tags"></i>  Tags</a>
                @endeditor
                <form action="{{route('logout')}}" method="post">
                    @csrf 
                    <button type="submit" class="list-group-item list-group-item-action "><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
                <a class="list-group-item list-group-item-action " href="{{route('home')}}"><i class="fas fa-angle-double-left"></i>  Back</a>
            </div>
        </div>
        <!-- Page Content-->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/92e0a4649f.js" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="{{asset('js/map.js')}}"></script> 
</body>
</html>