@extends('backend.layout.master')
@section('content')

<div class="row">
    <div class="col-5 col-md-3 pe-0">
      <div class="nav nav-tabs nav-tabs-vertical" id="v-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-header-tab" data-bs-toggle="tab" href="#v-header" role="tab" aria-controls="v-header" aria-selected="true">Header</a>
        <a class="nav-link" id="v-footer-tab" data-bs-toggle="tab" href="#v-footer" role="tab" aria-controls="v-footer" aria-selected="false">Footer</a>
        <a class="nav-link" id="v-social-tab" data-bs-toggle="tab" href="#v-social" role="tab" aria-controls="v-social" aria-selected="false">Social Media</a>
        <a class="nav-link" id="v-contact-tab" data-bs-toggle="tab" href="#v-contact" role="tab" aria-controls="v-contact" aria-selected="false">Contact</a>
        <a class="nav-link" id="v-payment-tab" data-bs-toggle="tab" href="#v-payment" role="tab" aria-controls="v-payment" aria-selected="false">Pyment</a>
        <a class="nav-link" id="v-settings-tab" data-bs-toggle="tab" href="#v-settings" role="tab" aria-controls="v-settings" aria-selected="false">Settings</a>
      </div>
    </div>
    <div class="col-7 col-md-9 ps-0">
      <div class="tab-content tab-content-vertical border p-3" id="v-tabContent">
        <div class="tab-pane fade show active" id="v-header" role="tabpanel" aria-labelledby="v-header-tab">
          <h6 class="mb-1">Home</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
          <br>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="v-footer" role="tabpanel" aria-labelledby="v-footer-tab">
          <h6 class="mb-1">Footer</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="v-contact" role="tabpanel" aria-labelledby="v-contact-tab">
          <h6 class="mb-1">Contact</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="v-social" role="tabpanel" aria-labelledby="v-social-tab">
          <h6 class="mb-1">Socail Media</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="v-payment" role="tabpanel" aria-labelledby="v-payment-tab">
          <h6 class="mb-1">Payment</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
        <div class="tab-pane fade" id="v-settings" role="tabpanel" aria-labelledby="v-settings-tab">
          <h6 class="mb-1">Settings</h6>
          <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing
          exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
          consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('plugin-styles')
  <!-- Plugin css import here -->
@endpush

@section('content')
  <!-- Page content here -->
@endsection

@push('plugin-scripts')
  <!-- Plugin js import here -->
@endpush

@push('custom-scripts')
  <!-- Custom js here -->
@endpush
