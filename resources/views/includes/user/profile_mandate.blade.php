<div class="card-body" id="collapse02">
   <form class="" action="{{ route('user.profile.agent.update') }}" method="post">
       @csrf

       <?php
       //grab the user agent info
       $mandate = auth()->user()->mandate_info;
        ?>

       <div class="row">
          <div class="col-xl-6">
             <div class="form-group">
                <label>Country <span class="required">*</span> </label>
                <select class="form-control" name="agent_country">
                    <option value="" disabled>Select Your Country</option>
                    @foreach(App\Models\Country::all() as $country)
                        <option value="{{ $country->id }}"
                            @if($mandate == null)
                                @if($country->id == $user->data->country_id)
                                    {{ __("selected") }}
                                @endif
                            @else
                                @if($country->id == $mandate->country_id)
                                    {{ __("selected") }}
                                @endif
                            @endif
                            >
                            {{ $country->name }}
                        </option>
                    @endforeach
                </select>
             </div>
             <div class="form-group">
                <label>Purpose <span class="required">*</span> </label>
                <select class="form-control" name="purpose">
                    @foreach(\App\Models\AgentPurpose::all() as $purpose)
                        <option value="{{ $purpose->id }}"
                            @if($mandate != null)
                                @if($purpose->id == $mandate->agent_purpose_id)
                                    {{ __("selected") }}
                                @endif
                            @endif>
                            {{ $purpose->title }}
                        </option>
                    @endforeach
                </select>
             </div>
          </div>
          <div class="col-xl-6">
             <div class="form-group">
                <label>Reports Expected <span class="required">*</span> </label>
                <select class="form-control" name="expected_report">
                    @foreach(\App\Models\ExpectedReport::all() as $report)
                        <option value="{{ $report->id }}"
                            @if($mandate != null)
                                @if($report->id == $mandate->expected_report_id)
                                    {{ __("selected") }}
                                @endif
                            @endif >
                            {{ $report->name }}
                        </option>
                    @endforeach
                </select>
             </div>
             <div class="form-group">
                <label>Your Language <span class="required">*</span> </label>
                <select class="form-control" name="language">
                    @foreach(\App\Models\Language::all() as $language)
                        <option value="{{ $language->id }}"
                            @if($mandate != null)
                                @if($language->id == $mandate->language_id)
                                    {{ __("selected") }}
                                @endif
                            @endif >
                            {{ $language->name }}
                        </option>
                    @endforeach
                </select>
             </div>
          </div>
       </div>

       <div class="row">
          <div class="col-xl-6">
             <div class="form-group">
                <label>Level of Education <span class="required">*</span> </label>

                <select class="form-control" name="education_level">
                    @foreach(App\Models\EducationLevel::all() as $level)
                        <option value="{{ $level->id }}"
                            @if($mandate != null)
                                @if($level->id == $mandate->education_level_id)
                                    {{ __("selected") }}
                                @endif
                            @endif >
                            {{ $level->title }}
                        </option>
                    @endforeach
                </select>
             </div>

          </div>
          <div class="col-xl-6">
             <div class="form-group">
                <label>Target Costing <span class="required">*</span> </label>
                <select class="form-control" name="costing">
                    @foreach(App\Models\Costing::all() as $cost)
                        <option value="{{ $cost->id }}"
                            @if($mandate != null)
                                @if($cost->id == $mandate->costing_id)
                                    {{ __("selected") }}
                                @endif
                            @endif >
                            {{ $cost->title }}
                        </option>
                    @endforeach
                </select>
             </div>

          </div>
       </div>

       <div class="row">
          <div class="col-xl-6">
             <div class="form-group">
                <label>Products you deal in <span class="required">*</span> </label>

                <input type="text" name="products" class="form-control" data-role="tagsinput"
                    @if($mandate != null) value="{{ $mandate->products }}"  @endif
                  required>
             </div>

          </div>
      </div>

       <div class="pt-2 clearfix">
          <p class="float-right text-sm"><i>Fields marked with <span class="required">*</span> are required</i></p>
          <div class="float-left">
             <button class="btn btn-primary" type="submit"> <strong>Update Agent Info</strong> </button>
          </div>
       </div>

   </form>
</div>
