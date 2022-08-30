@extends('userend.layout.master')

@push('plugin-styles')
    <!-- Plugin css import here -->
@endpush

@section('content')
    <!-- Page content here -->
    <div class="card">

        <div class="card-body">
            <div class="example">
                <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="education-line-tab" data-bs-toggle="tab"
                            data-bs-target="#line-education" role="tab" aria-controls="line-education"
                            aria-selected="true">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="skill-line-tab" data-bs-toggle="tab" data-bs-target="#line-skill"
                            role="tab" aria-controls="line-skill" aria-selected="false">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="category-line-tab" data-bs-toggle="tab" data-bs-target="#line-category"
                            role="tab" aria-controls="line-category" aria-selected="false">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="jobindustry-line-tab" data-bs-toggle="tab"
                            data-bs-target="#line-jobindustry" role="tab" aria-controls="line-jobindustry"
                            aria-selected="false">Jobindustry</a>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="lineTabContent">
                    <div class="tab-pane fade show active" id="line-education" role="tabpanel"
                        aria-labelledby="education-line-tab">
                        <div class="row">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title"> শিক্ষাগত যোগ্যতা অনুসারে নোটিফিকিশন পেতে আপনার পছন্দের
                                                অপশন গুলো সিলেক্ট করে সেভ করে নিন।</div>
                                            @foreach ($educatios as $education)
                                                <div class="form-check mb-2">
                                                    <input name="education[]" value="{{ $education->id }}" type="checkbox"
                                                        class="form-check-input" id="education{{ $education->id }}">
                                                    <label class="form-check-label" for="education{{ $education->id }}">
                                                        {{ $education->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4">
                                    <button type="submit" class="btn btn-primary me-2">Save</button>
                                    <button class="btn btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="line-skill" role="tabpanel" aria-labelledby="skill-line-tab">
                        <div class="row">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title"> স্কিল অনুসারে নোটিফিকিশন পেতে আপনার পছন্দের অপশন গুলো
                                                সিলেক্ট করে সেভ করে নিন।</div>
                                            @foreach ($skills as $skill)
                                                <div class="form-check mb-2">
                                                    <input name="skill[]" value="{{ $skill->id }}" type="checkbox"
                                                        class="form-check-input" id="skill{{ $skill->id }}">
                                                    <label class="form-check-label" for="skill{{ $skill->id }}">
                                                        {{ $skill->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>


                                <div class="py-4">
                                    <button type="submit" class="btn btn-primary me-2">Save</button>
                                    <button class="btn btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="line-category" role="tabpanel" aria-labelledby="category-line-tab">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title"> ক্যাটেগরি অনুসারে নোটিফিকিশন পেতে আপনার পছন্দের অপশন
                                                গুলো সিলেক্ট করে সেভ করে নিন।</div>
                                            @foreach ($categories as $category)
                                                <div class="form-check mb-2">
                                                    <input name="category[]" value="{{ $category->id }}" type="checkbox"
                                                        class="form-check-input" id="category{{ $category->id }}">
                                                    <label class="form-check-label" for="category{{ $category->id }}">
                                                        {{ $category->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="line-jobindustry" role="tabpanel" aria-labelledby="jobindustry-line-tab">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">ইন্ডাস্টি অনুসারে নোটিফিকিশন পেতে আপনার পছন্দের অপশন
                                                গুলো সিলেক্ট করে সেভ করে নিন।</div>
                                            @foreach ($jobindustries as $jobindustry)
                                                <div class="form-check mb-2">
                                                    <input name="jobindustry[]" value="{{ $jobindustry->id }}" type="checkbox"
                                                        class="form-check-input" id="jobindustry{{ $jobindustry->id }}">
                                                    <label class="form-check-label" for="jobindustry{{ $jobindustry->id }}">
                                                        {{ $jobindustry->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        @endsection

        @push('plugin-scripts')
            <!-- Plugin js import here -->
        @endpush

        @push('custom-scripts')
            <!-- Custom js here -->
        @endpush
