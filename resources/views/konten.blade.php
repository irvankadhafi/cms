<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Title -->
    <title>Mag - Video &amp; Magazine HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/style.css">

</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->


    @include('layouts.navbar')

<!-- ##### Header Area End ##### -->
@foreach($data as $isi_post)
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(/img/bg-img/49.jpg)">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>{{ $isi_post->judul }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ $isi_post->category->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $isi_post->judul }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Post Details Area Start ##### -->

<section class="post-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-xl-8">
                <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                    <div class="blog-thumb mb-30">
                        <img src="/{{$isi_post->gambar}}" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            <a href="#">{{ $isi_post->created_at->diffForHumans() }}</a>
                            <a href="archive.html">{{ $isi_post->category->name }}</a>
                        </div>
                        <h4 class="post-title">{{ $isi_post->judul }}</h4>
{{--                        <!-- Post Meta -->--}}
{{--                        <div class="post-meta-2">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                        </div>--}}
                            <hr>
                            <p class="lead">{!! ($isi_post->body) !!}</p>
                            <hr>

                        <!-- Post Author -->
                        <div class="post-author d-flex align-items-center">
                            <div class="post-author-thumb">
                                <img src="/assets/img/avatar/avatar-1.png" alt="">
                            </div>
                            <div class="post-author-desc pl-4">
                                <a href="#" class="author-name">{{ $isi_post->users->name }}</a>
                                <p>Duis tincidunt turpis sodales, tincidunt nisi et, auctor nisi. Curabitur vulputate sapien eu metus ultricies fermentum nec vel augue. Maecenas eget lacinia est.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Post Area -->
                <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Related Post</h5>
                    </div>

                    <div class="row">
                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="/img/bg-img/29.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="/img/bg-img/30.jpg" alt="">
                                    <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                                    <span class="video-duration">09:27</span>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Will The Democrats Be Able To Reverse</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="/img/bg-img/28.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach


            </div>

            <!-- Sidebar Widget -->
            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">


                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Categories</h5>
                        </div>
{{--                            <ul class="catagory-widgets">--}}
{{--                                @foreach($category_widget as $hasil)--}}
{{--                                    <li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>--}}
{{--                                @endforeach--}}
{{--                            --}}
{{--                        </div>--}}
                        <!-- Catagory Widget -->
                        <ul class="catagory-widgets">
                            @foreach($category_widget as $hasil)
                            <li><a href="{{ route('blog.category', $hasil->slug) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $hasil->name }}</span> <span>{{ $hasil->posts->count() }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Newsletter</h5>
                        </div>

                        <div class="newsletter-form">
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                            <form action="#" method="get">
                                <input type="search" name="widget-search" placeholder="Enter your email">
                                <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->

@include('layouts.footer')

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="/js/active.js"></script>
</body>

</html>
