@extends('backend.layout.master')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">updata</li>
    </ol>
</nav>
<div class="row">
    <div class="col-5 col-md-3 pe-0">
        <div class="nav nav-tabs nav-tabs-vertical" id="v-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active " id="v-home-tab" data-bs-toggle="tab" href="#v-home" role="tab"
                aria-controls="v-home" aria-selected="true"><span class="input-group"><i data-feather="facebook" class="me-2"></i>Social Media</span></a>
            <a class="nav-link " id="v-profile-tab" data-bs-toggle="tab" href="#v-profile" role="tab"
                aria-controls="v-map" aria-selected="false"><span class="input-group"><i data-feather="home" class="me-2"></i>Contact</a>
            {{-- <a class="nav-link " id="v-map-tab" data-bs-toggle="tab" href="#v-map" role="tab"
                aria-controls="v-profile" aria-selected="false"><span class="input-group"><i data-feather="map" class="me-2"></i>Map</a> --}}
            <a class="nav-link " id="v-logo-tab" data-bs-toggle="tab" href="#v-logo" role="tab"
                aria-controls="v-logo" aria-selected="false"><span class="input-group"><i data-feather="aperture" class="me-2"></i>logo</a>
            {{-- <a class="nav-link" id="v-messages-tab" data-bs-toggle="tab" href="#v-messages" role="tab"
                aria-controls="v-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-settings-tab" data-bs-toggle="tab" href="#v-settings" role="tab"
                aria-controls="v-settings" aria-selected="false">Settings</a> --}}
        </div>
    </div>
    <div class="col-7 col-md-9 ps-0">
        <form action="{{route('settings.store')}}" method="POST">
            @csrf
            <div class="tab-content tab-content-vertical border p-3" id="v-tabContent">
                <div class="tab-pane fade show active" id="v-home" role="tabpanel" aria-labelledby="v-home-tab">

                    <div class="row">
                        <div class="col-md-9 grid-margin stretch-card">

                            <div class="card">
                                <div class="card-header">
                                    <span> <i data-feather="facebook" class="me-2 "></i>
                                        Social Media
                                    </span>
                                </div>
                                <div class="card-body">

                                    @include('backend.settings.inc.social-media')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-profile" role="tabpanel" aria-labelledby="v-profile-tab">
                    <div class="row">
                        <div class="col-md-9 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-header">
                                    <span> <i data-feather="home" class="me-2 "></i>
                                        Contact
                                    </span>
                                </div>
                                <div class="card-body">

                                    @include('backend.settings.inc.contact')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-logo" role="tabpanel" aria-labelledby="v-logo-tab">
                    <div class="row">
                        <div class="col-md-9 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-header">
                                    <span> <i data-feather="aperture" class="me-2 "></i>
                                        Logo
                                    </span>
                                </div>
                                <div class="card-body">

                                    @include('backend.settings.inc.logo')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="tab-pane fade" id="v-map" role="tabpanel" aria-labelledby="v-map-tab">
                    <div class="row">
                        <div class="col-md-9 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-header">
                                    <span> <i data-feather="map" class="me-2 "></i>
                                        Map
                                    </span>
                                </div>
                                <div class="card-body">

                                    @include('admin.settings.inc.map')

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="tab-pane fade" id="v-messages" role="tabpanel" aria-labelledby="v-messages-tab">
                    <h6 class="mb-1">Messages</h6>
                    <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit.
                        Magna
                        duis labore cillum sint adipisicing
                        exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo
                        esse
                        dolore fugiat sint velit ullamco magna
                        consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
                </div>
                <div class="tab-pane fade" id="v-settings" role="tabpanel" aria-labelledby="v-settings-tab">
                    <h6 class="mb-1">Settings</h6>
                    <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit.
                        Magna
                        duis labore cillum sint adipisicing
                        exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo
                        esse
                        dolore fugiat sint velit ullamco magna
                        consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
                </div> --}}
                <div class="text-start">
                    <button type="submit" onclick="return confirm('Are you sure update informarion ?')"
                        class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>
                        Update
                    </button>
                </div>
            </div>
        </form>
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
{{-- <link href="{{ asset('assets/plugins/@mdi/css/materialdesignicons.min.css') }}" rel="stylesheet" /> --}}
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
