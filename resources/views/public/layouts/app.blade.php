<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Public title' }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/customer/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/customer/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/customer/css/style.css') }}">
    @yield('head')
</head>

<body>
    <div class="content-wrapper">
        @include('public.layouts.includes.header')
        <!-- /header -->
        <section class="wrapper bg-gray">
            <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
                <div class="row">
                    <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                        <h1 class="display-1 mb-3">Business News</h1>
                        <p class="lead px-lg-5 px-xxl-8">Welcome to our journal. Here you can find the latest company
                            news and business articles.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container-fluid py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12">

                    <aside class="col-lg-3 sidebar  mt-8 mt-lg-6">
                        <div class="widget">
                            <form class="search-form">
                                <div class="form-floating mb-0">
                                    <input id="search-form" type="text" class="form-control" placeholder="Search">
                                    <label for="search-form">Search</label>
                                </div>
                            </form>
                            <!-- /.search-form -->
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">About Us</h4>
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum.
                                Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget
                                metus.</p>
                            <nav class="nav social">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                        <!-- /.widget -->
                    </aside>
                    <!-- /column -->
                    <div class="col-lg-6  ">
                        <div class="blog classic-view">
                            <article class="post">
                                <div class="card">
                                    <figure class="card-img-top overlay overlay-1 hover-scale"><a
                                            href="./blog-post.html"><img
                                                src="{{ asset('assets/customer/img/photos/b1.jpg') }}"
                                                alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Teamwork</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                                    href="./blog-post.html">Amet Dolor Bibendum Parturient Cursus</a>
                                            </h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                                lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare
                                                vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus
                                                magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est
                                                at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce
                                                dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras
                                                mattis consectetur purus.</p>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!--/.card-body -->
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>5 Jul
                                                    2022</span></li>
                                            <li class="post-author"><a href="#"><i
                                                        class="uil uil-user"></i><span>By Sandbox</span></a></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-comment"></i>3<span> Comments</span></a></li>
                                            <li class="post-likes ms-auto"><a href="#"><i
                                                        class="uil uil-heart-alt"></i>3</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </article>
                            <!-- /.post -->
                            <article class="post">
                                <div class="card">
                                    <div class="post-slider card-img-top">
                                        <div class="swiper-container dots-over" data-margin="5" data-nav="true"
                                            data-dots="true">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img
                                                            src="{{ asset('assets/customer/img/photos/b2.jpg') }}"
                                                            alt="" /></div>
                                                    <div class="swiper-slide"><img
                                                            src="{{ asset('assets/customer/img/photos/b3.jpg') }}"
                                                            alt="" /></div>
                                                </div>
                                                <!--/.swiper-wrapper -->
                                            </div>
                                            <!-- /.swiper -->
                                        </div>
                                        <!-- /.swiper-container -->
                                    </div>
                                    <!-- /.post-slider -->
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Ideas</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                                    href="./blog-post.html">Fringilla Ligula Pharetra Amet</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                                lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare
                                                vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus
                                                magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est
                                                at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce
                                                dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras
                                                mattis consectetur purus.</p>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!--/.card-body -->
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25 Jun
                                                    2022</span></li>
                                            <li class="post-author"><a href="#"><i
                                                        class="uil uil-user"></i><span>By Sandbox</span></a></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-comment"></i>5<span> Comments</span></a></li>
                                            <li class="post-likes ms-auto"><a href="#"><i
                                                        class="uil uil-heart-alt"></i>4</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </article>
                            <!-- /.post -->
                            <article class="post">
                                <div class="card">
                                    <div class="card-img-top">
                                        <video poster="{{ asset('assets/customer/img/photos/movie.jpg') }}"
                                            class="player" playsinline controls preload="none">
                                            <source src="{{ asset('assets/customer/media/movie.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Workspace</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                                    href="./blog-post.html">Consectetur Bibendum Sollicitudin
                                                    Vulputate</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                                lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare
                                                vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus
                                                magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est
                                                at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce
                                                dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras
                                                mattis consectetur purus.</p>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!--/.card-body -->
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18 May
                                                    2022</span></li>
                                            <li class="post-author"><a href="#"><i
                                                        class="uil uil-user"></i><span>By Sandbox</span></a></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-comment"></i>8<span> Comments</span></a></li>
                                            <li class="post-likes ms-auto"><a href="#"><i
                                                        class="uil uil-heart-alt"></i>6</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </article>
                            <!-- /.post -->
                            <article class="post">
                                <div class="card">
                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                        <a href="./blog-post.html">
                                            <img src="{{ asset('assets/customer/img/photos/b4.jpg') }}"
                                                alt="" />
                                        </a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">
                                                listen now
                                            </h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Podcast</a>
                                            </div>
                                            <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                                    href="./blog-post.html">Inspiring Audio Content</a></h2>
                                        </div>
                                        <div class="post-content">

                                            <p>Description of the audio content goes here...</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15 Aug
                                                    2023</span></li>
                                            <li class="post-author"><a href="#"><i
                                                        class="uil uil-user"></i><span>By Sandbox</span></a></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-comment"></i>2<span> Comments</span></a></li>
                                            <li class="post-likes ms-auto"><a href="#"><i
                                                        class="uil uil-heart-alt"></i>10</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="post">
                                <div class="card">
                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                        <a href="./blog-post.html"><img
                                                src="{{ asset('assets/customer/img/photos/b5.jpg') }}"
                                                alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Download Document</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Resources</a>
                                            </div>
                                            <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                                    href="./blog-post.html">Comprehensive Guide Available for
                                                    Download</a></h2>
                                        </div>
                                        <div class="post-content">
                                            <p>Get your hands on our latest guide. Click the link below to download.</p>
                                            <a href="{{ asset('assets/customer/docs/guide.pdf') }}"
                                                class="btn btn-primary" download>Download Now</a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10 Sep
                                                    2023</span></li>
                                            <li class="post-author"><a href="#"><i
                                                        class="uil uil-user"></i><span>By Sandbox</span></a></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-comment"></i>5<span> Comments</span></a></li>
                                            <li class="post-likes ms-auto"><a href="#"><i
                                                        class="uil uil-heart-alt"></i>15</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>


                        </div>
                        <!-- /.blog -->
                        <nav class="d-flex" aria-label="pagination">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.pagination -->
                        </nav>
                        <!-- /nav -->
                    </div>
                    <aside class="col-lg-3 sidebar mt-8 mt-lg-6">
                        <div class="widget">
                            <form class="search-form">
                                <div class="form-floating mb-0">
                                    <input id="search-form" type="text" class="form-control"
                                        placeholder="Search">
                                    <label for="search-form">Search</label>
                                </div>
                            </form>
                            <!-- /.search-form -->
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">About Us</h4>
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum.
                                Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget
                                metus.</p>
                            <nav class="nav social">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Popular Posts</h4>
                            <ul class="image-list">
                                <li>
                                    <figure class="rounded"><a href="./blog-post.html"><img
                                                src="./assets/img/photos/a1.jpg" alt="" /></a></figure>
                                    <div class="post-content">
                                        <h6 class="mb-2"> <a class="link-dark" href="./blog-post.html">Magna Mollis
                                                Ultricies</a> </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Mar
                                                    2022</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-comment"></i>3</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                </li>
                                <li>
                                    <figure class="rounded"> <a href="./blog-post.html"><img
                                                src="./assets/img/photos/a2.jpg" alt="" /></a></figure>
                                    <div class="post-content">
                                        <h6 class="mb-2"> <a class="link-dark" href="./blog-post.html">Ornare
                                                Nullam Risus</a> </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16 Feb
                                                    2022</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-comment"></i>6</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                </li>
                                <li>
                                    <figure class="rounded"><a href="./blog-post.html"><img
                                                src="./assets/img/photos/a3.jpg" alt="" /></a></figure>
                                    <div class="post-content">
                                        <h6 class="mb-2"> <a class="link-dark" href="./blog-post.html">Euismod
                                                Nullam Fusce</a> </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8 Jan
                                                    2022</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-comment"></i>5</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                </li>
                            </ul>
                            <!-- /.image-list -->
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Categories</h4>
                            <ul class="unordered-list bullet-primary text-reset">
                                <li><a href="#">Teamwork (21)</a></li>
                                <li><a href="#">Ideas (19)</a></li>
                                <li><a href="#">Workspace (16)</a></li>
                                <li><a href="#">Coding (7)</a></li>
                                <li><a href="#">Meeting (12)</a></li>
                                <li><a href="#">Business Tips (14)</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Tags</h4>
                            <ul class="list-unstyled tag-list">
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Still Life</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Urban</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Nature</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Landscape</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Macro</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Fun</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Workshop</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Photography</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Archive</h4>
                            <ul class="unordered-list bullet-primary text-reset">
                                <li><a href="#">February 2019</a></li>
                                <li><a href="#">January 2019</a></li>
                                <li><a href="#">December 2018</a></li>
                                <li><a href="#">November 2018</a></li>
                                <li><a href="#">October 2018</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                    </aside>

                    <!-- /column .sidebar -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    @include('public.layouts.includes.footer')
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('assets/customer/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/customer/js/theme.js') }}"></script>
    @yield('script')
</body>

</html>
