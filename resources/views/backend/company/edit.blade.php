@extends('backend.layout.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Company</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-8 offset-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <img src="{{ asset('storage/companylogo/' . $company->logo) }}" alt=""> --}}
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Company Logo</h6>
                                        <p class="text-muted mb-3">Drag and Drop your logo.</p>
                                        <input type="file" id="myDropify" name="logo" @if($company->logo) data-default-file="{{ asset('storage/companylogo/' . $company->logo) }}" @endif>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label fw-bold">Company Name</label>
                                    <input type="text" name="name" value="{{ $company->name }}" class="form-control"
                                        id="forName" autocomplete="off" placeholder=" Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label fw-bold">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        autocomplete="off" value="{{ $company->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                  <label for="forName" class="form-label">Address</label>
                                  <input type="text" name="address" class="form-control" id="address"
                                      autocomplete="off" value="{{ $company->address }}">
                              </div>
                          </div>


                            <div class="row">
                              <div class="col-md-12 grid-margin stretch-card">
                                  <div class="card-body p-0">
                                      <h6 class="card-title">Description</h6>

                                      <textarea class="form-control" name="description" id="tinymceExample" rows="10">{{ $company->description }}</textarea>

                                  </div>
                              </div>
                          </div>


                        </div>

                        <h3 class="my-4">Acount Information</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" id="facebook"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Twitter</label>
                                    <input type="text" name="twitter" class="form-control" id="twitter"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Youtube</label>
                                    <input type="text" name="youtube" class="form-control" id="youtube"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Instagram</label>
                                    <input type="text" name="instagram" class="form-control" id="instagram"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Linkedin</label>
                                    <input type="text" name="linkedin" class="form-control" id="linkedin"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Ceo Name</label>
                                    <input type="text" name="ceo_name" class="form-control" id="ceo_name"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Mobile</label>
                                    <input type="text" name="mobile" class="form-control" id="mobile"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Ownership Type</label>
                                    <input type="text" name="ownership_type" class="form-control" id="ownership_type"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Division Id</label>
                                    <input type="text" name="division_id" class="form-control" id="division_id"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">District Id</label>
                                    <input type="text" name="district_id" class="form-control" id="district_id"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Industry</label>
                                    <input type="text" name="industry" class="form-control" id="industry"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Total Office</label>
                                    <input type="text" name="total_office" class="form-control" id="total_office"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Employ Range</label>
                                    <input type="text" name="employ_range" class="form-control" id="employ_range"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="forName" class="form-label">Establish</label>
                                    <input type="text" name="establish" class="form-control" id="establish"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label"> google Map</label>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58690.19310620291!2d89.15852978260754!3d23.165196891718463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff108d87ea6d65%3A0x627d034ef93261cf!2sJashore!5e0!3m2!1sen!2sbd!4v1661157879005!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>






                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />
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
