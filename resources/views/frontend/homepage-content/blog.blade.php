     <!-- START BLOG -->
     <section class="section bg-light">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-6">
                     <div class="section-title text-center mb-5">
                         <h3 class="title mb-3">Quick Career Tips</h3>
                         <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the
                             right freelancers.</p>
                     </div>
                 </div>
                 <!--end col-->
             </div>
             <!--end row-->
             <div class="row">

                 @foreach ($blogs as $blog)
                     <div class="col-lg-4 col-md-6">
                         <div class="blog-box card p-2 mt-3">
                             <div class="blog-img position-relative overflow-hidden">
                                 @if ($blog->thumbnail)
                                     <img src="{{ url('uploads/blog/' . $blog->thumbnail) }}" alt=""
                                         class="img-fluid">
                                 @else
                                     <img src="{{ asset('frontend/') }}/assets/images/blog/img-04.jpg" alt=""
                                         class="img-fluid">
                                 @endif
                                 <div class="bg-overlay"></div>
                                 <div class="author">
                                     <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a
                                             href="javascript:void(0)" class="text-light user">{{$blog->user->name}}</a></p>
                                     <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> {{$blog->created_at->format('d M Y')}}</p>
                                 </div>
                                 <div class="likes">
                                     <ul class="list-unstyled mb-0">
                                         <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                                     class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                         <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                                     class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="card-body">
                                 <a href="{{route('singleblog',$blog->id)}}" class="primary-link">
                                     <h5 class="fs-17">{{$blog->title}}</h5>
                                 </a>
                                 <p class="text-muted">{!!Str::limit($blog->description, 100,)!!}</p>
                                 <a href="{{route('singleblog',$blog->id)}}" class="form-text text-primary">Read more <i
                                         class="mdi mdi-chevron-right align-middle"></i></a>
                             </div>
                         </div>
                         <!--end blog-box-->
                     </div>
                     <!--end col-->
                 @endforeach


             </div>
             <!--end row-->
         </div>
         <!--end container-->
     </section>
     <!-- END BLOG -->
