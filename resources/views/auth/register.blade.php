@extends('layouts.site')

@section('title')
    {{ __("User Sign Up") }}
@endsection

@section('styles')
<link rel="stylesheet" href="/site/css/lib/select2.css">
<link rel="stylesheet" href="/site/css/flat/blue.css">
<style media="screen">
    .select2-container--default .select2-selection--single
    {
        border-radius: 0px;
        border: 1px solid #d2d6de;
    }

    .custom-control-label
    {
        cursor: pointer;
    }

    .col-form-label
    {
        text-align: right;
        font-weight: bold;
    }
    .my-label {
        cursor: pointer;
    }
</style>
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-md-12">
        <div class="bg-white p-20">
            <h2 class="page-header">
                <i class="gi gi-user_add text-primary"></i>
                User Registration
            </h2>

            <p>
                Fill out your information below to register with us. Note that you will be required to verify your account
                before you can log in.
                <br>
                <br>
                <strong>
                    All field marked with <span class="required">*</span> are required.
                </strong>
            </p>

            <br>
            <form class="form-horizontal" action="{{ route('register') }}" method="post"
                id="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Prefix:
                            </label>

                            <div class="col-sm-8">
                                <select class="form-control" name="prefix">
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Eng">Eng</option>
                                    <option value="Miss">Miss</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Name: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="text" name="name" value="" class="form-control"
                                    placeholder="Enter Your name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Country: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <select class="form-control select2" name="country">
                                    @foreach(\App\Models\Country::all() as $country)
                                        <option value="{{ $country->id }}">
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Company Name: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="text" name="company_name" value="" class="form-control"
                                    placeholder="Compay Name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Year Created: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="text" name="year_created" value="" class="form-control"
                                    placeholder="Year Created dd/mm/YYYY" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Position: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="text" name="position" value="" class="form-control"
                                    placeholder="Position" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Company Address: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="text" name="company_address" value="" class="form-control"
                                    placeholder="Address" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Telephone Numbers: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="text" name="tel_numbers"  class="form-control"
                                    placeholder="####-### / ###-###" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Fax: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="text" name="fax" value="" class="form-control"
                                    placeholder="Fax" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Email: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="email" name="email" class="form-control"
                                    placeholder="email@domain.com" required id="email">
                            </div>
                        </div>

                    </div>

                    <!-- //start next column for information -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Account Type: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                @foreach(\App\Models\AccountType::all() as $type)

                                <div class="form-group">
                                    <input type="checkbox" name="account_type[]"
                                        class="flat-blue " value="{{ $type->id }}"
                                        id="type_{{ $type->id }}">
                                    <label for="type_{{ $type->id }}" class="control-label my-label">
                                        {{ $type->name }}
                                    </label>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Profile:
                            </label>

                            <div class="col-sm-8">
                                <input type="file" name="profile" class="form-control"
                                    placeholder="" id="image">

                                <br>
                                <img src="" alt="" id="img" width="100" height="100">
                            </div>
                        </div>

                    </div>
                    <!-- end of column  -->

                </div>
                <!-- end of row -->


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="page-header">Account Information</h3>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Email: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="email2"
                                    placeholder="email@domain.com" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Password: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="password" name="password" class="form-control"
                                    placeholder="password" required id="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                                Repeat Password: <span class="required">*</span>
                            </label>

                            <div class="col-sm-8">
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Confirm Password" required id="rpassword">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" name="button"
                            class="btn btn-primary">
                            <strong>Register</strong>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="/site/js/icheck.min.js"></script>
<script src="/site/js/lib/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.select2').select2();

        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass   : 'iradio_flat-blue'
        })

        function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#img').attr('src', e.target.result);

          $('#img').hide();
          $('#img').fadeIn(650);

        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#image").change(function() {
      readURL(this);
    });

    //event to set account email address
    $("#email").focusout(function(){
        var email = $(this).val();

        $("#email2").val(email);
    })

    //validate form submission here.
    $("#form").submit(function(event){
        var password = $("#password").val();
        var rpassword = $("#rpassword").val();

        if(password !== rpassword)
        {
            toastr.error("Your passwords do not match", "Error");
            event.preventDefault();
        }

        return true;
    })

    })
</script>
@endsection
