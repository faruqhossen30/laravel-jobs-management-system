@extends('backend.layout.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Circular</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>

    <form action="{{ route('circular.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Circular Form</h6>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                placeholder="title" name="title">
                        </div>
                        {{-- Attributes start --}}
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                {{-- <div class="card"> --}}
                                <div class="card-body p-0">
                                    <h6 class="card-title">Description</h6>

                                    <textarea class="form-control" name="description" id="tinymceExample" rows="10"></textarea>
                                </div>
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="js-example-basic-single form-select" data-width="100%">
                              <option value="TX">Texas</option>
                              <option value="NY">New York</option>
                              <option value="FL">Florida</option>
                              <option value="KN">Kansas</option>
                              <option value="HW">Hawaii</option>
                            </select>
                          </div>
                          <div class="card">
                            <div class="card-header">
                                Organization Information
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="time" class="form-label">Start From</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date">
                                </div>
                                <div class="mb-3">
                                    <label for="time" class="form-label">End From</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label"> Name</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                        placeholder="organization name" name="organization_name">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label"> Website</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                        placeholder="organization_website" name="organization_website">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label"> Apply Link</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                        placeholder="apply link" name="apply_link">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label"> Vacancy</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                        placeholder="vacancy" name="vacancy">
                                </div>

                            </div>
                          </div>
                          <div class="card mt-2">
                            <div class="card-header">
                                SEO
                            </div>
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label"> Meta Title</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                        placeholder="meta title" name="meta_title">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label"> Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control"></textarea>
                                </div>

                             
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label"> Meta Tag</label>
                                    <div>
                                        <input name="meta_tag" id="meta_tag" value="New York,Texas,Florida,New Mexico" />
                                      </div>
                                </div>





                            </div>
                          </div>






                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- Thumbnail --}}
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Dropify</h6>
                                <p class="text-muted mb-3">Read the <a href="https://github.com/JeremyFagis/dropify"
                                        target="_blank"> Official Dropify Documentation </a>for a full list of instructions
                                    and other options.</p>
                                <input type="file" id="myDropify" />
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Education</div>
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="checkDefault">
                                    <label class="form-check-label" for="checkDefault">
                                        SSC
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="checkDefault">
                                    <label class="form-check-label" for="checkDefault">
                                        SSC
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="checkDefault">
                                    <label class="form-check-label" for="checkDefault">
                                        B.s.c
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="checkDefault">
                                    <label class="form-check-label" for="checkDefault">
                                        BA
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- Skill --}}
                        <div class="card mt-2">
                            <div class="card-body">
                                <h4 class="card-title">Skills</h4>
                                <div class="mb-3">
                                    <select class="js-example-basic-multiple form-select" multiple="multiple"
                                        data-width="100%">
                                        <option value="TX" selected>Ms Word</option>
                                        <option value="WY">Power Point</option>
                                        <option value="NY">New York</option>
                                        <option value="FL">Florida</option>
                                        <option value="KN">Kansas</option>
                                        <option value="HW">Hawaii</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Job Industry --}}
                        <div class="card mt-2">
                            <div class="card-body">
                                <h4 class="card-title">Job Industry</h4>
                                <div class="mb-3">
                                    <select class="js-example-basic-multiple form-select" multiple="multiple"
                                        data-width="100%">
                                        <option value="TX" selected>It Job</option>
                                        <option value="WY">Power Point</option>
                                        <option value="NY">New York</option>
                                        <option value="FL">Florida</option>
                                        <option value="KN">Kansas</option>
                                        <option value="HW">Hawaii</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Job Career Label --}}
                        <div class="card mt-2">
                            <div class="card-body">
                                <h4 class="card-title">Job Career Label</h4>
                                <div class="mb-3">
                                    <select class="js-example-basic-multiple form-select" multiple="multiple"
                                        data-width="100%">
                                        <option value="TX" selected>It Job</option>
                                        <option value="WY">Power Point</option>
                                        <option value="NY">New York</option>
                                        <option value="FL">Florida</option>
                                        <option value="KN">Kansas</option>
                                        <option value="HW">Hawaii</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Salary Preiod --}}
                        <div class="card mt-2">
                            <div class="card-body">
                                <h4 class="card-title">Salary Preiod</h4>
                                <div class="mb-3">
                                    <select class="js-example-basic-multiple form-select" multiple="multiple"
                                        data-width="100%">
                                        <option value="TX" selected>It Job</option>
                                        <option value="WY">Power Point</option>
                                        <option value="NY">New York</option>
                                        <option value="FL">Florida</option>
                                        <option value="KN">Kansas</option>
                                        <option value="HW">Hawaii</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Job Type --}}
                        <div class="card mt-2">
                            <div class="card-body">
                                <h4 class="card-title">Salary Preiod</h4>
                                <div class="mb-3">
                                    <select class="js-example-basic-multiple form-select" multiple="multiple"
                                        data-width="100%">
                                        <option value="TX" selected>It Job</option>
                                        <option value="WY">Power Point</option>
                                        <option value="NY">New York</option>
                                        <option value="FL">Florida</option>
                                        <option value="KN">Kansas</option>
                                        <option value="HW">Hawaii</option>
                                    </select>
                                </div>
                            </div>
                        </div>




                    </div>



                </div>

            </div>
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
    </form>
@endsection
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

@endpush

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplemde/simplemde.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ace-builds/ace.js') }}"></script>
    <script src="{{ asset('assets/plugins/ace-builds/theme-chaos.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/tinymce.js') }}"></script>
    <script src="{{ asset('assets/js/simplemde.js') }}"></script>
    <script src="{{ asset('assets/js/ace.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/js/inputmask.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/tags-input.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/timepicker.js') }}"></script>
@endpush
