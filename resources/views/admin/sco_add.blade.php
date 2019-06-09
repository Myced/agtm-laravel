@extends('layouts.admin')

@section('title')
    {{ __("Add LOI") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h2 class="page-header">
                Add New SCO
            </h2>


            <form class="form-horizontal" action="{{ route('sco.store') }}"
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
                                <input type="text" name="title" class="form-control" placeholder="SCO Title" required>
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
                                ></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                            </label>
                            <div class="col-md-12">
                                <input type="submit" name="" value="Save SCO" class="btn btn-primary"
                                    required>
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
                                        <img src="{{ \App\Models\Loi::DEFAULT_IMAGE }}" alt="SCO Image"
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
