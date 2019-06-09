@extends('layouts.admin')

@section('title')
    {{ __("Edit SCO") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h2 class="page-header">
                Edit and SCO
            </h2>


            <form class="form-horizontal" action="{{ route('sco.update', ['sco' => $sco->id ]) }}"
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
                                placeholder="SCO Title" required value="{{ $sco->title }}">
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
                                placeholder="Enter the SCO Details here" required
                                >{{ $sco->description }}</textarea>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                            </label>
                            <div class="col-md-12">
                                <input type="submit" name="" value="Save SCO" class="btn btn-primary"
                                    required>

                                <a href="{{ route('sco', ['sco' => $sco->id]) }}"
                                    title="Back to SCO" class="btn btn-warning">
                                    <i class="fa fa-arrow-left"></i>
                                    Back to SCO
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                                SCO Image:
                            </label>
                            <div class="col-md-12">
                                <input type="file" name="image" value="" class="form-control" id="img">

                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                        <br>
                                        <img src="{{ $sco->image }}" alt="SCO Image"
                                            title="SCO Image" id="blah" width="200px" height="200px;">
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
