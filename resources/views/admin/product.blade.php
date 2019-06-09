@extends('layouts.admin')

@section('title')
    {{ $product->name }}
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="{{ route('products') }}"
            title="Back to All products"
            class="btn btn-info">
            <i class="fa fa-arrow-left"></i>
            Back to Products
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h2 class="page-header">
                Product Details
            </h2>


            <br><br>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <img src="{{ $product->photo }}" alt="Product Image"
                        width="100%" height="100%">

                    <br><br>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>{{ $product->name }}</h4>
                        </div>
                    </div>


                </div>

                <div class="col-md-6 col-xs-12">
                    <dl class="row">

                        <dt class="col-sm-3">
                            Product Code:
                        </dt>
                        <dd class="col-sm-9">
                            {{ $product->code }}
                        </dd>

                        <dt class="col-sm-3">
                            Product Name:
                        </dt>
                        <dd class="col-sm-9">
                            {{ $product->name }}
                        </dd>

                        <dt class="col-sm-3">
                            Quantity:
                        </dt>
                        <dd class="col-sm-9">
                            {{ $product->quantity }}
                        </dd>

                        <dt class="col-sm-3">
                            Unit:
                        </dt>
                        <dd class="col-sm-9">
                            {{ $product->unit }}
                        </dd>

                        <dt class="col-sm-3">
                            Price:
                        </dt>
                        <dd class="col-sm-9">
                            {{ $product->price }}
                        </dd>

                        <dt class="col-sm-3">
                            Category:
                        </dt>
                        <dd class="col-sm-9">
                            {{ $product->category->name }}
                        </dd>


                    </dl>
                </div>
            </div>

            <br><br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <h3>Product Description</h3>

                    <br>

                    {!! nl2br($product->description) !!}
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
