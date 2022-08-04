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
        <form action="{{route('company.update', $company->id)}}" method="POST" enctype="multipart/form-data" class="forms-sample">
            @csrf
            @method('put')
         <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Image2</h6>
                        <p class="text-muted mb-3">Drag and Drop your logo. </p>
                        <input type="file" id="myDropify" name="logo">
                    </div>
                </div>
            </div>
         </div>

        <h3 class="my-4">Acount Information</h3>
          <div class="row">
            <div class="col-md-4">
                 <div class="mb-3">
                <label for="forName" class="form-label">Company Name</label>
                <input type="text" name="name" value="{{$company->name}}" class="form-control" id="forName" autocomplete="off" placeholder=" Name">
              </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">Email</label>
                    <input type="email" name="email"  class="form-control" id="email" autocomplete="off" value="{{$company->email}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="forName" class="form-label">Facebook</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="forName" class="form-label">Twitter</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">Youtube</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">instagram</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">linkedin</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">ceo_name</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">mobile</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">ownership_type</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">division_id</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">district_id</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">industry</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">total_office</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">employ_range</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="forName" class="form-label">establish</label>
                    <input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{$company->address}}">
                  </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label"> google Map</label>
                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8310.686427880151!2d-74.00585671025667!3d40.7098868133123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1536851502771"  frameborder="0" style="border:0" allowfullscreen></iframe>
                    </textarea>
                </div>
            </div>
          </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                {{-- <div class="card"> --}}
                <div class="card-body p-0">
                    <h6 class="card-title">Description</h6>

                    <textarea class="form-control" name="description" id="tinymceExample" rows="10">{{$company->description}}</textarea>

                </div>
                {{-- </div> --}}
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

