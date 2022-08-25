       {{-- filter item start --}}
       <div class="position-fixed mt-5 	 d-md-block d-lg-none" style="z-index: 5;">
        <a class="btn btn-primary" style="border-radius: 0" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="uil uil-filter"></i>
       </a>
       <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
         <div class="offcanvas-header">
           <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
           <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
             <div class="accordion-item mt-4">
                 <h2 class="accordion-header" id="experienceOneTop">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#experience" aria-expanded="true" aria-controls="experience">
                         Work experience
                     </button>
                 </h2>
           <div>
             <div id="experience" class="accordion-collapse collapse show" aria-labelledby="experienceOneTop">
                 <div class="accordion-body">
                     <div class="side-title">
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" />
                             <label class="form-check-label ms-2 text-muted" for="flexCheckChecked1">No experience</label>
                         </div>
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked />
                             <label class="form-check-label ms-2 text-muted" for="flexCheckChecked2">0-3 years</label>
                         </div>
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3" />
                             <label class="form-check-label ms-2 text-muted" for="flexCheckChecked3">3-6 years</label>
                         </div>
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4" />
                             <label class="form-check-label ms-2 text-muted" for="flexCheckChecked4">More than 6 years</label>
                         </div>
                     </div>
                 </div>
             </div>
             </div><!-- end accordion-item -->
             <div class="accordion-item mt-3">
                 <h2 class="accordion-header" id="jobType">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#jobtype" aria-expanded="false" aria-controls="jobtype">
                         Type of employment
                     </button>
                 </h2>
                 <div id="jobtype" class="accordion-collapse collapse show" aria-labelledby="jobType">
                     <div class="accordion-body">
                         <div class="side-title">
                             <div class="form-check mt-2">
                                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                                 <label class="form-check-label ms-2 text-muted" for="flexRadioDefault6">
                                     Freelance
                                 </label>
                             </div>
                             <div class="form-check mt-2">
                                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                 <label class="form-check-label ms-2 text-muted" for="flexRadioDefault2">
                                     Full Time
                                 </label>
                             </div>
                             <div class="form-check mt-2">
                                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                 <label class="form-check-label ms-2 text-muted" for="flexRadioDefault3">
                                     Internship
                                 </label>
                             </div>
                             <div class="form-check mt-2">
                                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                 <label class="form-check-label ms-2 text-muted" for="flexRadioDefault4">
                                     Part Time
                                 </label>
                             </div>
                         </div>
                     </div>
                 </div>
             </div><!-- end accordion-item -->
           </div>
         </div>
       </div>
     </div>
        {{-- filter item end --}}
