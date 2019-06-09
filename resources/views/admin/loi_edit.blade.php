@extends('layouts.admin')

@section('title')
    {{ __("Edit LOI") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h2 class="page-header">
                Edit and LOI
            </h2>


            <form class="form-horizontal" action="{{ route('loi.update', ['loi' => $loi->id ]) }}"
                method="post" enctype="multipart/form-data">

                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                                Title
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" name="title" class="form-control"
                                placeholder="LOI Title" required value="{{ $loi->title }}">
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                                Description:
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-12">
                                <textarea name="description" rows="8" class="form-control"
                                placeholder="Enter the LOI Details here" required
                                >{{ $loi->description }}</textarea>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                            </label>
                            <div class="col-md-12">
                                <input type="submit" name="" value="Save LOI" class="btn btn-primary"
                                    required>

                                <a href="{{ route('loi', ['loi' => $loi->id]) }}"
                                    title="Back to LOI" class="btn btn-warning">
                                    <i class="fa fa-arrow-left"></i>
                                    Back to LOI
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                                LOI Image:
                            </label>
                            <div class="col-md-12">
                                <input type="file" name="image" value="" class="form-control" id="img">

                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                        <br>
                                        <img src="{{ $loi->image }}" alt="LOI Image"
                                            title="LOI Image" id="blah" width="200px" height="200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);

          $('#blah').hide();
          $('#blah').fadeIn(650);

        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#img").change(function() {
      readURL(this);
    });
</script>
@endsection
