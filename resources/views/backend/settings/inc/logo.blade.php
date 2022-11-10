<div class="input-group date  mb-2">
    <span class="input-group-text"><i data-feather="logo"></i></span>
    <input name="logo" type="file" class="form-control" placeholder="Site logo"
        value="{{ $settings->logo ?? '' }}">
</div>
@isset($site->logo)
    <img class="img-thumbnail" style="width: 150px; height:100px; padding:5px"
        src="{{ asset('/storage/logo/' . $site->logo) }}" alt="sdfsdf">
@endisset
