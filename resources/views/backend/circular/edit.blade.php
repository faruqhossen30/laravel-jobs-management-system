@extends('backend.layout.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Circular</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('circular.update', $circular->id) }}" method="POST"
                        enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-8 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Circular Form</h6>
                                        <x-input-text label="Title" placeholder="title" name="title"
                                            value="{{ $circular->title }}" />
                                        {{-- Attributes start --}}
                                        <div class="row">
                                            <div class="col-md-12 grid-margin stretch-card">
                                                {{-- <div class="card"> --}}
                                                <div class="card-body p-0">
                                                    <h6 class="card-title">Description</h6>

                                                    <textarea class="form-control" name="description" id="tinymceExample" rows="10">
                                            {{ $circular->description }}
                                        </textarea>
                                                </div>
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Category</label>
                                            <select name="category_id" class="js-example-basic-single form-select"
                                                data-width="100%">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if ($category->id == $circular->category_id) selected @endif>
                                                        {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                Organization Information
                                            </div>


                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="time" class="form-label">Start From</label>
                                                    <input type="date" class="form-control" id="start_date"
                                                        name="start_date"
                                                        value="@if ($circular->start_date) {{ $circular->start_date->format('Y-m-d') }} @endif
                                                   ">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="time" class="form-label">End From</label>
                                                    <input type="date" class="form-control" id="end_date"
                                                        name="end_date">
                                                </div>
                                                <x-input-text label="Organization Name" placeholder="name"
                                                    name="organization_name" value="{{ $circular->organization_name }}" />
                                                <x-input-text label="Organization Website" placeholder="Website"
                                                    name="organization_website"
                                                    value="{{ $circular->organization_website }}" />
                                                <x-input-text label="Organization Link" placeholder="Apply Link"
                                                    name="apply_link" value="{{ $circular->apply_link }}" />
                                                <x-input-text label="Vacancy" placeholder="vacancy" name="vacancy"
                                                    value="{{ $circular->vacancy }}" />
                                            </div>
                                        </div>
                                        <div class="card mt-2">
                                            <div class="card-header">
                                                SEO
                                            </div>
                                            <div class="card-body">

                                                <x-input-text label="Meta Title" placeholder="meta_title" name="meta_title"
                                                    value="{{ $circular->meta_title }}" />
                                                <div class="mb-3">
                                                    <label for="exampleInputUsername1" class="form-label"> Meta
                                                        Description</label>
                                                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control">
                                         {{ $circular->meta_description }}
                                        </textarea>
                                                </div>



                                                {{-- <h6 class="card-title">Tags input</h6> --}}
                                                <label for="exampleInputUsername1" class="form-label">Tags input</label>
                                                <p class="mb-2">Type something to add a new tag</p>
                                                <div>
                                                    <input name="meta_tag" id="tags"
                                                        value="{{ $circular->meta_tag }}" />
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
                                                <h6 class="card-title">Image</h6>
                                                <p class="text-muted mb-3">Drag and Drop your image. </p>
                                                <input type="file" id="myDropify" name="thumbnail">
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-title">Education</div>
                                                @foreach ($educatios as $education)
                                                    <div class="form-check mb-2">
                                                        <input name="education[]" value="{{ $education->id }}"
                                                            type="checkbox"
                                                            @if(empty(!json_decode($circular->education)) && in_array($education->id, json_decode($circular->education))) checked @endif
                                                            class="form-check-input" id="education{{ $education->id }}">
                                                        <label class="form-check-label"
                                                            for="education{{ $education->id }}">
                                                            {{ $education->name }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        {{-- Skill --}}
                                        <div class="card mt-2">
                                            <div class="card-body">
                                                <h4 class="card-title">Skills</h4>
                                                <div class="mb-3">
                                                    <select name="skill[]" class="js-example-basic-multiple form-select"
                                                        multiple="multiple" data-width="100%">

                                                        @foreach ($skills as $skill)
                                                            <option value="{{ $skill->id }}"
                                                                @if (empty(!json_decode($circular->skill)) && in_array($skill->id, json_decode($circular->skill))) selected @endif>
                                                                {{ $skill->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Job Industry --}}
                                        <div class="card mt-2">
                                            <div class="card-body">
                                                <h4 class="card-title">Job Industry</h4>
                                                <div class="mb-3">
                                                    <select name="job_industry[]"
                                                        class="js-example-basic-multiple form-select" multiple="multiple"
                                                        data-width="100%">

                                                        @foreach ($jobindustries as $jobindustry)
                                                            <option value="{{ $jobindustry->id }}"
                                                                @if (empty(!json_decode($circular->job_industry)) &&
                                                                    in_array($jobindustry->id, json_decode($circular->job_industry))) selected @endif>
                                                                {{ $jobindustry->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Job Career Label --}}
                                        <div class="card mt-2">
                                            <div class="card-body">
                                                <h4 class="card-title">Career Label</h4>
                                                <div class="mb-3">
                                                    <select name="career_label[]"
                                                        class="js-example-basic-multiple form-select" multiple="multiple"
                                                        data-width="100%">
                                                        @foreach ($careerlabels as $careerlabel)
                                                            <option value="{{ $careerlabel->id }}"
                                                                @if (empty(!json_decode($circular->career_label)) &&
                                                                    in_array($careerlabel->id, json_decode($circular->career_label))) selected @endif>
                                                                {{ $careerlabel->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Salary Preiod --}}
                                        <div class="card mt-2">
                                            <div class="card-body">
                                                <h4 class="card-title">Salary Preiod</h4>
                                                <div class="mb-3">
                                                    <select name="salary_period[]"
                                                        class="js-example-basic-multiple form-select" multiple="multiple"
                                                        data-width="100%">
                                                        @foreach ($salarypreiods as $salarypreiod)
                                                            <option value="{{ $salarypreiod->id }}"
                                                                @if (empty(!json_decode($circular->salary_period)) &&
                                                                    in_array($salarypreiod->id, json_decode($circular->salary_period))) selected @endif>
                                                                {{ $salarypreiod->name }}</option>
                                                        @endforeach



                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Job Type --}}
                                        <div class="card mt-2">
                                            <div class="card-body">
                                                <h4 class="card-title">Job Type</h4>
                                                <div class="mb-3">
                                                    <select name="job_type[]"
                                                        class="js-example-basic-multiple form-select" multiple="multiple"
                                                        data-width="100%">
                                                        @foreach ($jobtypes as $jobtype)
                                                            <option value="{{ $jobtype->id }}"
                                                                @if (empty(!json_decode($circular->job_type)) && in_array($jobtype->id, json_decode($circular->job_type))) selected @endif>
                                                                {{ $jobtype->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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