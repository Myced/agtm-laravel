@extends('layouts.admin')

@section('title')
    {{ __("Edit Product") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h1 class="page-title">
                Edit A Product
            </h1>


            <br>
            <form class="form-horizontal" action="{{ route('product.update', ['product' => $product->id]) }}"
                method="post" enctype="multipart/form-data">

                @csrf

                <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="product" class="control-label col-md-5">
                                    Product Name:
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Product Name" value="{{ $product->name }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product" class="control-label col-md-5">Quantity:</label>
                                <div class="col-md-12">
                                    <input type="text" name="quantity" class="form-control"
                                        placeholder="Quantity" required value="{{ $product->quantity }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product" class="control-label col-md-5"> Unit:</label>
                                <div class="col-md-12">
                                    <input type="text" name="unit" class="form-control"
                                        placeholder="Unit e.g. Barrels" value="{{ $product->unit }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product" class="control-label col-md-5">
                                    Price:
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" name="price" class="form-control"
                                        placeholder="Price" required value="{{ $product->price }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product" class="control-label col-md-5">Category:</label>
                                <div class="col-md-12">
                                    <select class="form-control select2" name="category">
                                        @foreach(\App\Models\Category::all() as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product" class="control-label col-md-5">Product Description:</label>
                                <div class="col-md-12">
                                    <textarea name="description" rows="8" cols="80"
                                    class="form-control"
                                    >{{ $product->description }}</textarea>
                                </div>
                            </div>


                        </div>
                        <!-- //end the first column -->

                        <!-- nex column -->
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="product" class="control-label col-md-5">Product Image:</label>
                                <div class="col-md-12">
                                    <input type="file" name="photo" value="" class="form-control" id="image">

                                    <br>
                                    <img src="{{ $product->photo }}" alt=" Product Image" width="200px" height="200px" id="img">
                                </div>
                            </div>
                        </div>
                        <!-- //end of second column  -->
                </div>
                <!-- end of row -->

                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <input type="submit" name="submit" value="Save Product" class="btn btn-success">
                            <!-- <a href="" class="btn btn-info" title="Clear form inputs">Clear</a> -->
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
    $(document).ready(function(){
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
    });
</script>
@endsection
