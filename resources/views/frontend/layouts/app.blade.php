<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        {{-- <title>Home | Jobcy - Job Listing Template | Themesdesign</title> --}}
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}">

        <!-- Choise Css -->
        <link rel="stylesheet" href="{{asset('frontend/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- Swiper Css -->
        <link rel="stylesheet" href="{{asset('frontend/assets/libs/swiper/swiper-bundle.min.css')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('frontend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('frontend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <!--Custom Css-->

    </head>

    <body>

                {{-- nav bar start --}}
                {{-- @include('frontend.inc.topbar') --}}
                @include('frontend.inc.navbar')
                {{-- nav bar end --}}

                {{-- singup model start --}}
                @include('frontend.inc.singup')
                {{-- singup model end --}}

                @yield('main-contant')






                <!-- START SUBSCRIBE -->
                <section class="bg-subscribe">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <div class="text-center text-lg-start">
                                    <h4 class="text-white">Get New Jobs Notification!</h4>
                                    <p class="text-white-50 mb-0">Subscribe & get all related jobs notification.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4 mt-lg-0">
                                    <form class="subscribe-form" action="#">
                                        <div class="input-group justify-content-center justify-content-lg-end">
                                            <input type="text" class="form-control" id="subscribe" placeholder="Enter your email">
                                            <button class="btn btn-primary" type="button" id="subscribebtn">Subscribe</button>
                                        </div>
                                    </form><!--end form-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                    <div class="email-img d-none d-lg-block">
                        <img src="{{asset('frontend/assets/images/subscribe.png')}}" alt="" class="img-fluid">
                    </div>
                </section>
                <!-- END SUBSCRIBE -->

                <!-- START FOOTER -->
                <section class="bg-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="footer-item mt-4 mt-lg-0 me-lg-5">
                                    <h4 class="text-white mb-4">Jobcy</h4>
                                    <p class="text-white-50">It is a long established fact that a reader will be of a page reader
                                        will be of at its layout.</p>
                                    <p class="text-white mt-3">Follow Us on:</p>
                                    <ul class="footer-social-menu list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-google"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">Company</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="about.html"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                                        <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Contact Us</a></li>
                                        <li><a href="services.html"><i class="mdi mdi-chevron-right"></i> Services</a></li>
                                        <li><a href="blog.html"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                                        <li><a href="team.html"><i class="mdi mdi-chevron-right"></i> Team</a></li>
                                        <li><a href="pricing.html"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                                        <li><a href="{{url('admin')}}"><i class="mdi mdi-chevron-right"></i>Admin</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">For Jobs</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="job-categories.html"><i class="mdi mdi-chevron-right"></i> Browser Categories</a></li>
                                        <li><a href="job-list.html"><i class="mdi mdi-chevron-right"></i> Browser Jobs</a></li>
                                        <li><a href="job-details.html"><i class="mdi mdi-chevron-right"></i> Job Details</a></li>
                                        <li><a href="bookmark-jobs.html"><i class="mdi mdi-chevron-right"></i> Bookmark Jobs</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="text-white fs-16 mb-4">For Candidates</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="candidate-list.html"><i class="mdi mdi-chevron-right"></i> Candidate List</a></li>
                                        <li><a href="candidate-grid.html"><i class="mdi mdi-chevron-right"></i> Candidate Grid</a></li>
                                        <li><a href="candidate-details.html"><i class="mdi mdi-chevron-right"></i> Candidate Details</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">Support</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Help Center</a></li>
                                        <li><a href="faqs.html"><i class="mdi mdi-chevron-right"></i> FAQ'S</a></li>
                                        <li><a href="privacy-policy.html"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </section>
                <!-- END FOOTER -->

                <!-- START FOOTER-ALT -->
                <div class="footer-alt">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-white-50 text-center mb-0">
                                    <script>document.write(new Date().getFullYear())</script> &copy; Jobcy - Job Listing Page
                                    Template by <a href="https://themeforest.net/search/themesdesign" target="_blank"
                                        class="text-reset text-decoration-underline">Themesdesign</a>
                                </p>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
                <!-- END FOOTER -->

                <!-- Style switcher -->
                {{-- <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
                    <div>
                        <h6>Select your color</h6>
                        <ul class="pattern list-unstyled mb-0">
                            <li>
                                <a class="color-list color1" href="javascript: void(0);" onclick="setColorGreen()"></a>
                            </li>
                            <li>
                                <a class="color-list color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                            </li>
                            <li>
                                <a class="color-list color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <h6>Light/dark Layout</h6>
                            <div class="text-center mt-3">
                                <!-- light-dark mode -->
                                <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                                    <i class="uil uil-brightness mode-dark mx-auto"></i>
                                    <i class="uil uil-moon mode-light"></i>
                                </a>
                                <!-- END light-dark Mode -->
                            </div>
                        </div>
                    </div>
                    <div class="bottom d-none d-md-block" >
                        <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
                    </div>
                </div> --}}
                <!-- end switcher-->

                <!--start back-to-top-->
                <button onclick="topFunction()" id="back-to-top">
                    <i class="mdi mdi-arrow-up"></i>
                </button>
                <!--end back-to-top-->
            </div>
            <!-- end main content-->

        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('frontend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


        <!-- Choice Js -->
        <script src="{{asset('frontend/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Swiper Js -->
        <script src="{{asset('frontend/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Index Js -->
        <script src="{{asset('frontend/assets/js/pages/job-list.init.js')}}"></script>

        <!-- Switcher Js -->
        <script src="{{asset('frontend/assets/js/pages/switcher.init.js')}}"></script>

        <script src="{{asset('frontend/assets/js/pages/index.init.js')}}"></script>

        <!-- App Js -->
        <script src="{{asset('frontend/assets/js/app.js')}}"></script>

    </body>
</html>
