@extends('backend.layout.master')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">User Profile</a></li>

    </ol>
</nav>

<div class="row d-flex justify-content-center">

    <div class="col-md-6 grid-margin stretch-card ">
        <div class="card">
            <div class="card-body">


                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Profile Image</h6>
                            <p class="text-muted mb-3">Drag and Drop your image. </p>
                            <input type="file" id="myDropify" name="image" @if(Auth::user()->image) data-default-file="{{asset('storage/profile-picture/'.Auth::user()->image)}}" @endif>
                        </div>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="name" value="  {{Auth::user()->name}}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="email" value="  {{Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Address</label>
                      <input type="text" class="form-control" name="address" id="address" aria-describedby="emailHelp" placeholder="address" value="  {{Auth::user()->address}}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Phone</label>
                      <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" placeholder="phone" value="  {{Auth::user()->phone}}">
                    </div>

                    {{-- <button type="submit" class="btn btn-primary">
                        <a href="{{route('user.edit',Auth::user()->id)}}" class="text-body ms-0">
                            <i class="me-2 icon-md" data-feather="edit"></i>
                            <span>Edit Profile</span>
                        </a>
                    </button> --}}


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
<!-- Plugin js import here -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
{{-- custom script  --}}
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
<!-- Custom js here -->

@if (Session::has('update'))
<script>
    const Toast = Swal.mixin({
        toast: true
        , position: 'top-end'
        , showConfirmButton: false
        , timer: 3000
        , timerProgressBar: true
        , didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success'
        , title: 'Profile has been updated !'
    })

</script>
@endif

@endpush
