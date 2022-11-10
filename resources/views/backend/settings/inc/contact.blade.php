<div class="input-group  mb-1" >
    <span class="input-group-text"><i data-feather="home"></i></span>
    <input type="text" name="address" value="{{ $settings->address ?? '#' }}" class="form-control "
        data-target="#home" />
</div>

<div class="input-group  mb-1" >
    <span class="input-group-text"><i data-feather="phone"></i></span>
    <input type="text" name="phone" value="{{ $settings->phone ?? '#' }}" class="form-control "
        data-target="#phone" />
</div>

<div class="input-group  mb-1" >
    <span class="input-group-text"><i data-feather="phone"></i></span>
    <input type="text" name="mobile" value="{{ $settings->mobile ?? '#' }}" class="form-control "
        data-target="#mobile" />
</div>
<div class="input-group  mb-1" >
    <span class="input-group-text"><i data-feather="phone"></i></span>
    <input type="text" name="whatsapp" value="{{ $settings->whatsapp ?? '#' }}" class="form-control "
        data-target="#whatsapp" />
</div>


<div class="input-group  mb-1" >
    <span class="input-group-text"><i data-feather="mail"></i></span>
    <input type="text" name="email" value="{{ $settings->email ?? '#' }}" class="form-control "
        data-target="#email" />
</div>
<div class="input-group  mb-1" >
    <span class="input-group-text"><i data-feather="calendar"></i></span>
    <input type="text" name="working_day" value="{{ $settings->working_day ?? '#' }}" class="form-control "
        data-target="#working_day" />
</div>
<div class="input-group  mb-1" >
    <span class="input-group-text"><i data-feather="clock"></i></span>
    <input type="text" name="working_time" value="{{ $settings->working_time ?? '#' }}" class="form-control "
        data-target="#working_time" />
</div>
