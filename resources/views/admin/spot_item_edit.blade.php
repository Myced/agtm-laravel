@extends('layouts.admin')

@section('title')
    {{ __("Edit Spot Item") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h1 class="page-header">
                Edit Spot Item
            </h1>


            <br>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" action="{{ route('spot.item.update', ['id' => $item->id]) }}" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                                Product Name:
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control"
                                    placeholder="Product Name" required
                                    value="{{ $item->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                                Quantity:
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" name="quantity" class="form-control"
                                    placeholder="Quantity E.G 1" required
                                    value="{{ $item->quantity }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                                Unit:
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" name="unit" class="form-control"
                                    placeholder="Unit E.g Tonnes" required
                                    value="{{ $item->unit }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                                Price:
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" name="price" class="form-control"
                                    placeholder="Price" required
                                    value="{{ $item->price }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                            </label>
                            <div class="col-md-12">
                                <input type="submit" name="save" class="btn btn-primary" value="Save Item" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
