<div class="accordion" id="accordionExample">
    <h2 class="accordion-header" id="experienceOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#experience" aria-expanded="true" aria-controls="experience">
            Career Label
        </button>
    </h2>
    <div id="experience" class="accordion-collapse collapse show" aria-labelledby="experienceOne">
        <div class="accordion-body">
            <div class="side-title">
                @foreach ($careerlabels as $careerlabel)
                    <div class="form-check mt-2">
                        <input class="form-check-input" name="careerlabel[]" type="checkbox" value="{{$careerlabel->id}}" id="flexCheckChecked1{{$careerlabel->id}}" 
                        @if($querycarierlabes && in_array($careerlabel->id, $querycarierlabes)) checked @endif
                        onchange="this.form.submit()"/>

                        <label class="form-check-label ms-2 text-muted" for="flexCheckChecked1{{$careerlabel->id}}">{{$careerlabel->name}}</label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div><!-- end accordion-item -->

<div class="accordion-item mt-3">
    <h2 class="accordion-header" id="jobType">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#jobtype" aria-expanded="false" aria-controls="jobtype">
            Job Type
        </button>
    </h2>
    <div id="jobtype" class="accordion-collapse collapse show" aria-labelledby="jobType">
        <div class="accordion-body">
            <div class="side-title">
                @foreach ($jobtypes as $jobtype)
                <div class="form-check mt-2">
                    <input class="form-check-input" name="queryjobtypes[]" type="checkbox" value="{{$jobtype->id}}" id="flexCheckChecked1{{$jobtype->id}}" @if($queryjobtypes && in_array($jobtype->id, $queryjobtypes)) checked @endif
                    onchange="this.form.submit()"/>
                    <label class="form-check-label ms-2 text-muted" for="flexCheckChecked1{{$jobtype->id}}">{{$jobtype->name}}</label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="accordion-item mt-3">
    <h2 class="accordion-header" id="education">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#education" aria-expanded="false" aria-controls="education">
            Education Type
        </button>
    </h2>
    <div id="education" class="accordion-collapse collapse show" aria-labelledby="education">
        <div class="accordion-body">
            <div class="side-title">
                @foreach ($educations as $education)
                <div class="form-check mt-2">
                    <input class="form-check-input" name="educatonquery[]" type="checkbox" value="{{$education->id}}" id="flexCheckChecked1{{$education->id}}" @if($educatonquery && in_array($education->id, $educatonquery)) checked @endif
                    onchange="this.form.submit()"/>
                    <label class="form-check-label ms-2 text-muted" for="flexCheckChecked1{{$education->id}}">{{$education->name}}</label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="accordion-item mt-3">
    <h2 class="accordion-header" id="jobindustry">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#jobindustry" aria-expanded="false" aria-controls="jobindustry">
            Job Industry
        </button>
    </h2>
    <div id="jobindustry" class="accordion-collapse collapse show" aria-labelledby="jobindustry">
        <div class="accordion-body">
            <div class="side-title">
                @foreach ($jobindustries as $jobindustry)
                <div class="form-check mt-2">
                    <input class="form-check-input" name="jobindustryquery[]" type="checkbox" value="{{$jobindustry->id}}" id="flexCheckChecked1{{$jobindustry->id}}"
                     @if($jobindustryquery && in_array($jobindustry->id, $jobindustryquery)) checked @endif
                    onchange="this.form.submit()"/>
                    <label class="form-check-label ms-2 text-muted" for="flexCheckChecked1{{$jobindustry->id}}">{{$jobindustry->name}}</label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
