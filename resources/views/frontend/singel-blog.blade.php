@extends('frontend.layouts.app')
@section('title', 'Blog Page')

@section('OG')
    <!-- Facebook & Linkedit Open Graph -->
    <meta property="og:url" content="{{ route('blog.index', $blog->id) }}" />
    <meta property="og:type" content="news" />
    <meta property="og:title" content="{{ $blog->title }}" />
    <meta property="og:description" content="{{ strip_tags($blog->content) }}" />
    <meta property="og:image" content="{{ asset('uploads/blog/' . $blog->thumbnail) }}" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@jobcircularbdnet" />
    <meta property="og:title" content="{{ $blog->title }}" />
    <meta property="og:description" content="{{ strip_tags($blog->description) }} " />
    <meta property="og:image" content="{{ asset('uploads/blogs/' . $blog->thumbnail) }}" />
@endsection
@section('main-contant')
    <div class="main-content">
        <div class="page-content">
            <!-- START BLOG-DETAILS -->
            <section class="section mt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 ">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-post">
                                <div class="swiper blogdetailSlider">
                                    <div class="swiper-wrapper">


                                        @if ($blog->thumbnail)
                                            <img src="{{ url('uploads/blog/' . $blog->thumbnail) }}" alt=""
                                                class="img-fluid">
                                        @else
                                            <div class="swiper-slide">
                                                <img src="{{ asset('frontend/') }}/assets/images/blog/img-11.jpg"
                                                    alt="" class="img-fluid rounded-3">
                                            </div>
                                        @endif

                                    </div>
                                </div>

                                <ul class="list-inline mb-0 mt-3 text-muted">
                                    <li class="list-inline-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">

                                                @if ($blog->thumbnail)
                                                    <img src="{{ url('uploads/blog/' . $blog->thumbnail) }}" alt=""
                                                        class="img-fluid avatar-sm rounded-circle">
                                                @else
                                                    <img src="{{ asset('frontend/') }}/assets/images/blog/img-03.jpg"
                                                        alt="" class="img-fluid avatar-sm rounded-circle ">
                                                @endif
                                                {{-- <img src="{{asset('frontend/')}}/assets/images/user/img-03.jpg" alt="" class="avatar-sm rounded-circle"> --}}
                                            </div>
                                            <div class="ms-3">
                                                <a href="blog-author.html" class="primary-link">
                                                    <h6 class="mb-0">By {{ $blog->user->name }}</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="uil uil-calendar-alt"></i>
                                            </div>
                                            <div class="ms-2">
                                                <p class="mb-0">{{ $blog->created_at->format('d M Y') }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="uil uil-comments-alt"></i>
                                            </div>
                                            <div class="ms-2 flex-grow-1">
                                                <p class="mb-0"> 2 Comments</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-4">
                                    {{-- <h5>What makes the best co-working space?</h5>
                                    <p class="text-muted">Objectively pursue diverse catalysts for change for interoperable
                                        meta-services. Distinctively re-engineer revolutionary meta-services and premium
                                        architectures. Intrinsically incubate intuitive opportunities and real-time
                                        potentialities. Appropriately communicate one-to-one technology.</p>
                                    <p class="text-muted mb-4">Home renovations, especially those involving plentiful of
                                        demolition can be a very dusty affair. The same is true as we experience the
                                        emotional sensation of stress from our first instances of social rejection ridicule.
                                        We quickly learn to fear and thus automatically avoid potentially stressful
                                        situations of all kinds, including the most common of all making mistakes.</p>
                                    <figure class="blog-blockquote text-center">
                                        <blockquote class="blockquote">
                                            <p class="fs-17">"A business consulting agency is involved in the planning,
                                                implementation, and education of businesses."</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer fs-15 mb-4">
                                            Creative Agency<cite title="Source Title" class="text-primary fw-semibold">
                                                Alice Mellor</cite>
                                        </figcaption>
                                    </figure>
                                    <p class="text-muted">Whether article spirits new her covered hastily sitting her. Money
                                        witty books nor son add. Chicken age had evening believe but proceed pretend mrs. At
                                        missed advice my it no sister. Miss told ham dull knew see she spot near can. Spirit
                                        her entire her called.</p>
                                    <p class="text-muted">The advantage of its Latin origin and the relative meaninglessness
                                        of Lorum Ipsum is that the text does not attract attention to itself or distract the
                                        viewer's attention from the layout.</p> --}}

                                    <p>{!! $blog->description !!}</p>
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <b>Tags:</b>
                                        </div>


                                        <div class="flex-grow-1 ms-2">
                                            <a href="javascript:void(0)"
                                                class="badge bg-soft-success mt-1 fs-14">{{ $blog->meta_tag }}</a>
                                        </div>
                                    </div>
                                    <ul class="blog-social-menu list-inline mb-0 text-end">
                                        <li class="list-inline-item">
                                            <b>Share post:</b>
                                        </li>

                                        {{-- <div class="share-button">
                                            <samp style="font-size: 25px"><i class="fa-solid fa-share-nodes"></i>
                                                Share!</samp> --}}
                                        <li class="list-inline-item">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.index', $blog->id) }}"
                                                target="_blank" class="social-link bg-soft-primary"><i
                                                    class="uil uil-facebook-f"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://twitter.com/intent/tweet?url={{ route('blog.index', $blog->id) }}"
                                                target="_blank" class="social-link bg-soft-success"><i
                                                    class="mdi mdi-twitter"></i></a>
                                        </li>

                                        <li class="list-inline-item">
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('blog.index', $blog->id) }}"
                                                target="_blank" class="social-link bg-soft-success"> <i
                                                    class="uil uil-linkedin-alt"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="whatsapp://send?text={{ route('blog.index', $blog->id) }}"
                                                target="_blank" class="social-link bg-soft-success"> <i
                                                    class="uil uil-whatsapp"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="//pinterest.com/pin/create/link/?url={{ route('blog.index', $blog->id) }}"
                                                target="_blank" class="social-link bg-soft-success"><i
                                                    class="mdi mdi-pinterest"></i></a>
                                        </li>

                                    </ul>

                                </div>
                                <!-- comment start -->
                                <h5 class="border-bottom pb-3 mt-5">Comments</h5>
                                <div class="mt-5">
                                    <div class="d-sm-flex align-items-top">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle avatar-md img-thumbnail"
                                                src="{{ asset('frontend/') }}/assets/images/user/img-01.jpg"
                                                alt="img" />
                                        </div>
                                        <div class="flex-grow-1 ms-sm-3">
                                            <small class="float-end fs-12 text-muted"><i class="uil uil-clock"></i> 30 min
                                                Ago</small>
                                            <a href="javascript:(0)" class="primary-link">
                                                <h6 class="fs-16 mt-sm-0 mt-3 mb-0">Rebecca Swartz</h6>
                                            </a>
                                            <p class="text-muted fs-14 mb-0">Aug 10, 2021</p>
                                            <div class="my-3 badge bg-light">
                                                <a href="javascript: void(0);" class="text-primary"><i
                                                        class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <p class="text-muted fst-italic mb-0">" There are many variations of passages
                                                of Lorem Ipsum available, but the majority have suffered alteration in some
                                                form, by injected humour "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="d-sm-flex align-items-top">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle avatar-md img-thumbnail"
                                                src="{{ asset('frontend/') }}/assets/images/user/img-02.jpg"
                                                alt="img" />
                                        </div>
                                        <div class="flex-grow-1 ms-sm-3">
                                            <small class="float-end fs-12 text-muted"><i class="uil uil-clock"></i> 2 hrs
                                                Ago</small>
                                            <a href="javascript:(0)" class="primary-link">
                                                <h6 class="fs-16 mt-sm-0 mt-3 mb-0">Adam Gibson</h6>
                                            </a>
                                            <p class="text-muted fs-14 mb-0">Aug 10, 2021</p>
                                            <div class="my-3 badge bg-light">
                                                <a href="javascript: void(0);" class="text-primary"><i
                                                        class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <p class="text-muted fst-italic mb-0">" The most important aspect of beauty
                                                was, therefore, an inherent part of an object, rather than something applied
                                                superficially, and was based on universal, recognisable truths. "</p>

                                            <div class="d-sm-flex align-items-top mt-5">
                                                <div class="flex-shrink-0">
                                                    <img class="rounded-circle avatar-md img-thumbnail"
                                                        src="{{ asset('frontend/') }}/assets/images/user/img-04.jpg"
                                                        alt="img" />
                                                </div>
                                                <div class="flex-grow-1 ms-sm-3">
                                                    <small class="float-end fs-12 text-muted"><i
                                                            class="uil uil-clock"></i> 2 hrs Ago</small>
                                                    <a href="javascript:(0)" class="primary-link">
                                                        <h6 class="fs-16 mt-sm-0 mt-3 mb-0">Kiera Finch</h6>
                                                    </a>
                                                    <p class="text-muted fs-14 mb-0">Aug 10, 2021</p>
                                                    <div class="my-3 badge bg-light">
                                                        <a href="javascript: void(0);" class="text-primary"><i
                                                                class="mdi mdi-reply"></i> Reply</a>
                                                    </div>
                                                    <p class="text-muted fst-italic mb-0">" This response is important for
                                                        our ability to learn from mistakes, but it alsogives rise to
                                                        self-criticism, because it is part of the threat-protection system.
                                                        "</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end comment -->

                                <form action="#" class="contact-form mt-5">
                                    <h5 class="border-bottom pb-3">Leave a Message</h5>
                                    <div class="row mt-4">
                                        <div class="col-lg-6">
                                            <div class="position-relative mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input name="name" id="name" type="text" class="form-control"
                                                    placeholder="Enter your name*" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="position-relative mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input name="email" id="email" type="email" class="form-control"
                                                    placeholder="Enter your email*" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="position-relative mb-3">
                                                <label for="subject" class="form-label">Subject</label>
                                                <input name="subject" id="subject" type="text" class="form-control"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="position-relative mb-3">
                                                <label for="comments" class="form-label">Meassage</label>
                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <button name="submit" type="submit" id="submit"
                                                class="btn btn-primary btn-hover">Send
                                                Meassage <i class="uil uil-message ms-1"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <!--end form-->
                                <div class="mt-5">
                                    <h5 class="border-bottom pb-3"> Related Blog Posts</h5>
                                    <div class="swiper blogSlider pb-5 mt-4">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card blog-modern-box overflow-hidden border-0">
                                                    <img src="{{ asset('frontend/') }}/assets/images/blog/img-04.jpg"
                                                        alt="" class="img-fluid">
                                                    <div class="bg-overlay"></div>
                                                    <div class="card-img-overlay">
                                                        <a href="blog-details.html" class="text-white">
                                                            <h5 class="card-title">Manage white space in responsive layouts
                                                                ?</h5>
                                                        </a>
                                                        <p class="card-text text-white-50"> <a href="blog-author.html"
                                                                class="text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end blogSlider-->
                                            <div class="swiper-slide">
                                                <div class="card blog-modern-box overflow-hidden border-0">
                                                    <img src="{{ asset('frontend/') }}/assets/images/blog/img-05.jpg"
                                                        alt="" class="img-fluid">
                                                    <div class="bg-overlay"></div>
                                                    <div class="card-img-overlay">
                                                        <a href="blog-details.html" class="text-white">
                                                            <h5 class="card-title">A day in the of a professional fashion
                                                                designer</h5>
                                                        </a>
                                                        <p class="card-text text-white-50"> <a href="blog-author.html"
                                                                class="text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end blogSlider-->
                                            <div class="swiper-slide">
                                                <div class="card blog-modern-box overflow-hidden border-0">
                                                    <img src="{{ asset('frontend/') }}/assets/images/blog/img-06.jpg"
                                                        alt="" class="img-fluid">
                                                    <div class="bg-overlay"></div>
                                                    <div class="card-img-overlay">
                                                        <a href="blog-details.html" class="text-white">
                                                            <h5 class="card-title">Design your apps in your own way</h5>
                                                        </a>
                                                        <p class="card-text text-white-50"> <a href="blog-author.html"
                                                                class="text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--swiper-slide-->
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <!--end blogSlider-->
                                </div>
                                <!--end related post-->
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4 col-md-5">
                            <div class="sidebar ms-lg-4 ps-lg-4 mt-5 mt-lg-0">
                                <!-- Search widget-->
                                <aside class="widget widget_search">
                                    <form class="position-relative">
                                        <input class="form-control" type="text" placeholder="Search...">
                                        <button
                                            class="bg-transparent border-0 position-absolute top-50 end-0 translate-middle-y fs-22 me-2"
                                            type="submit"><span class="mdi mdi-magnify text-muted"></span></button>
                                    </form>
                                </aside>
                                <div class="mt-4 pt-2">
                                    <div class="sd-title">
                                        <h6 class="fs-16 mb-3">Category</h6>
                                    </div>
                                    <ul class="list-unstyled mb-0 mt-3">
                                        @foreach ($categories as $category)
                                            <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                                        class="uil uil-angle-right-b"></i>{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!--end Categories-->

                                <div class="mt-4 pt-2">
                                    <div class="sd-title">
                                        <h6 class="fs-16 mb-3">Polular Post</h6>
                                    </div>
                                    <ul class="widget-popular-post list-unstyled my-4">

                                        @foreach ($mostreadblog as $blog)
                                            <li class="d-flex mb-3 align-items-center pb-3 border-bottom">

                                                 @if ($blog->thumbnail)
                                                    <img src="{{ url('uploads/blog/' . $blog->thumbnail) }}" alt=""
                                                        class="widget-popular-post-img rounded">
                                                @else
                                                    <img src="{{ asset('frontend/') }}/assets/images/blog/img-03.jpg"
                                                        alt="" class="widget-popular-post-img rounded">
                                                @endif

                                                <div class="flex-grow-1 text-truncate ms-3">
                                                    <a href="#" class="text-dark">{{ $blog->title }}</a>
                                                    <span
                                                        class="d-block text-muted fs-14">{{ $blog->created_at->format('d M Y') }}</span>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <!--end Polular Post-->

                                <div class="mt-4 pt-2">
                                    <div class="sd-title">
                                        <h6 class="fs-16 mb-3">Text Widget</h6>
                                    </div>
                                    <p class="mb-0 text-muted mt-3">
                                        Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.
                                        Craft
                                        beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave
                                        deep v
                                        laborum. Aliquip veniam
                                        delectus, Marfa eiusmod Pinterest in do umami readymade swag.
                                    </p>
                                </div>

                                <div class="mt-4 pt-2">
                                    <div class="sd-title">
                                        <h6 class="fs-16 mb-3">Archives</h6>
                                    </div>
                                    <ul class="list-unstyled mb-0 mt-3">
                                        <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                                    class="uil uil-angle-right-b"></i> March 2021</a> (40)</li>
                                        <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                                    class="uil uil-angle-right-b"></i> April 2021</a> (08)</li>
                                        <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                                    class="uil uil-angle-right-b"></i> Nov 2020</a> (32)</li>
                                        <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                                    class="uil uil-angle-right-b"></i> May 2020</a> (11)</li>
                                        <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i
                                                    class="uil uil-angle-right-b"></i> Jun 2019</a> (21)</li>
                                    </ul>
                                </div>

                                <div class="mt-4 pt-2">
                                    <div class="sd-title">
                                        <h6 class="fs-16 mb-3">Latest Tags</h6>
                                    </div>
                                    <div class="tagcloud mt-3">
                                        <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Fashion</a>
                                        <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Jobs</a>
                                        <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Business</a>
                                        <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Corporate</a>
                                        <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">E-commerce</a>
                                        <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Agency</a>
                                        <a class="badge tag-cloud fs-12 mt-2" href="javascript:void(0)">Responsive</a>
                                    </div>
                                </div>
                                <!--end Latest Tags-->

                                <div class="mt-4 pt-2">
                                    <div class="sd-title">
                                        <h6 class="fs-16 mb-3">Follow & Connect</h6>
                                    </div>
                                    <ul class="widget-social-menu list-inline mb-0 mt-3">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)"><i class="uil uil-facebook-f"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)"><i class="uil uil-whatsapp"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)"><i class="uil uil-twitter-alt"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)"><i class="uil uil-dribbble"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)"><i class="uil uil-envelope"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--end sidebar-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!-- START BLOG-DETAILS -->

        </div>
        <!-- End Page-content -->

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
                                    <input type="text" class="form-control" id="subscribe"
                                        placeholder="Enter your email">
                                    <button class="btn btn-primary" type="button" id="subscribebtn">Subscribe</button>
                                </div>
                            </form>
                            <!--end form-->
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <div class="email-img d-none d-lg-block">
                <img src="{{ asset('frontend/') }}/assets/images/subscribe.png" alt="" class="img-fluid">
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
                                <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-linkedin-alt"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-google"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-2 col-6">
                        <div class="footer-item mt-4 mt-lg-0">
                            <p class="fs-16 text-white mb-4">Company</p>
                            <ul class="list-unstyled footer-list mb-0">
                                <li><a href="{{route('about')}}"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                                <li><a href="{{route('contact')}}"><i class="mdi mdi-chevron-right"></i> Contact Us</a></li>
                                <li><a href="{{route('service')}}"><i class="mdi mdi-chevron-right"></i> Services</a></li>
                                <li><a href="{{route('blog.index')}}"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right"></i> Team</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-2 col-6">
                        <div class="footer-item mt-4 mt-lg-0">
                            <p class="fs-16 text-white mb-4">For Jobs</p>
                            <ul class="list-unstyled footer-list mb-0">
                                <li><a href="job-categories.html"><i class="mdi mdi-chevron-right"></i> Browser
                                        Categories</a></li>
                                <li><a href="job-list.html"><i class="mdi mdi-chevron-right"></i> Browser Jobs</a></li>
                                <li><a href="job-details.html"><i class="mdi mdi-chevron-right"></i> Job Details</a></li>
                                <li><a href="bookmark-jobs.html"><i class="mdi mdi-chevron-right"></i> Bookmark Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-2 col-6">
                        <div class="footer-item mt-4 mt-lg-0">
                            <p class="text-white fs-16 mb-4">For Candidates</p>
                            <ul class="list-unstyled footer-list mb-0">
                                <li><a href="candidate-list.html"><i class="mdi mdi-chevron-right"></i> Candidate List</a>
                                </li>
                                <li><a href="candidate-grid.html"><i class="mdi mdi-chevron-right"></i> Candidate Grid</a>
                                </li>
                                <li><a href="candidate-details.html"><i class="mdi mdi-chevron-right"></i> Candidate
                                        Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-2 col-6">
                        <div class="footer-item mt-4 mt-lg-0">
                            <p class="fs-16 text-white mb-4">Support</p>
                            <ul class="list-unstyled footer-list mb-0">
                                <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Help Center</a></li>
                                <li><a href="faqs.html"><i class="mdi mdi-chevron-right"></i> FAQ'S</a></li>
                                <li><a href="privacy-policy.html"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END FOOTER -->

        <!-- START FOOTER-ALT -->
        <div class="footer-alt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-white-50 text-center mb-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; Jobcy - Job Listing Page
                            Template by <a href="https://themeforest.net/search/themesdesign" target="_blank"
                                class="text-reset text-decoration-underline">Themesdesign</a>
                        </p>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!-- END FOOTER -->

        <!-- Style switcher -->
        <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
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
            <div class="bottom d-none d-md-block">
                <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
            </div>
        </div>
        <!-- end switcher-->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->
    </div>
    <!-- end main content-->
@endsection
