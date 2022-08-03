
<div class="card">
    <div class="card-body">
        <h6 class="card-title">Circular Form</h6>
        <x-input-text label="Title" placeholder="title" name="title" value="{{old('title')}}"  />
        {{-- Attributes start --}}
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                {{-- <div class="card"> --}}
                <div class="card-body p-0">
                    <h6 class="card-title">Description</h6>

                    <textarea class="form-control" name="description"  id="tinymceExample" rows="10">{{old('description')}}</textarea>
                </div>
                {{-- </div> --}}
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="js-example-basic-single form-select" data-width="100%">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                    <input type="date" class="form-control" id="start_date" name="start_date">
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">End From</label>
                    <input type="date" class="form-control" id="end_date" name="end_date">
                </div>
                <x-input-text label="Organization Name" placeholder="name" name="organization_name"  />
                <x-input-text label="Organization Website" placeholder="Website" name="organization_website"  />
                <x-input-text label="Organization Link" placeholder="Apply Link" name="apply_link"  />
                <x-input-text label="Vacancy" placeholder="vacancy" name="vacancy"  />
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                SEO
            </div>
            <div class="card-body">

                <x-input-text label="Meta Title" placeholder="meta_title" name="meta_title"  />
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label"> Meta Description</label>
                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control"></textarea>
                </div>



                {{-- <h6 class="card-title">Tags input</h6> --}}
                <label for="exampleInputUsername1" class="form-label">Tags input</label>
                <p class="mb-2">Type something to add a new tag</p>
                <div>
                    <input name="meta_tag" id="tags" value="" />
                </div>
            </div>
        </div>
    </div>
</div>
