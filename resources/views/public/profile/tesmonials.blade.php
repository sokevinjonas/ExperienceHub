@extends('public.profile.profile-layout')

@section('profile-content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Gestion des temoignage</h5>
            </div>
            <div class="card-body">
                <div class="mb-3 clearfix">
                    <button type="button" class="btn btn-primary float-end">Partager mon experience</button>
                </div>
                <div class="blog classic-view">
                    <article class="post">
                        <div class="card">
                            <figure class="card-img-top overlay overlay-1 hover-scale"><a href="./blog-post.html"><img
                                        src="{{ asset('assets/customer/img/photos/b1.jpg') }}" alt="" /></a>
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
                                    <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="./blog-post.html">Amet
                                            Dolor Bibendum Parturient Cursus</a>
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
                                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By
                                                Sandbox</span></a></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span>
                                                Comments</span></a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a>
                                    </li>
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
                                <div class="swiper-container dots-over" data-margin="5" data-nav="true" data-dots="true">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img
                                                    src="{{ asset('assets/customer/img/photos/b2.jpg') }}" alt="" />
                                            </div>
                                            <div class="swiper-slide"><img
                                                    src="{{ asset('assets/customer/img/photos/b3.jpg') }}" alt="" />
                                            </div>
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
                                    <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="./blog-post.html">Fringilla
                                            Ligula Pharetra Amet</a></h2>
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
                                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By
                                                Sandbox</span></a></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>5<span>
                                                Comments</span></a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>4</a>
                                    </li>
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
                                <video poster="{{ asset('assets/customer/img/photos/movie.jpg') }}" class="player"
                                    playsinline controls preload="none">
                                    <source src="{{ asset('assets/customer/media/movie.mp4') }}" type="video/mp4">
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
                                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By
                                                Sandbox</span></a></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>8<span>
                                                Comments</span></a></li>
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
                                    <img src="{{ asset('assets/customer/img/photos/b4.jpg') }}" alt="" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">
                                        listen now

                                    </h5>
                                </figcaption>
                            </figure>
                            <audio controls style="width: 100%">
                                <source src="{{ asset('assets/customer/media/audio.mp3') }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
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
                                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By
                                                Sandbox</span></a></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2<span>
                                                Comments</span></a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i
                                                class="uil uil-heart-alt"></i>10</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="post">
                        <div class="card">
                            <figure class="card-img-top overlay overlay-1 hover-scale">
                                <a href="./blog-post.html"><img src="{{ asset('assets/customer/img/photos/b5.jpg') }}"
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
                                    <a href="{{ asset('assets/customer/docs/guide.pdf') }}" class="btn btn-primary"
                                        download>Download Now</a>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10 Sep
                                            2023</span></li>
                                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By
                                                Sandbox</span></a></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>5<span>
                                                Comments</span></a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i
                                                class="uil uil-heart-alt"></i>15</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
