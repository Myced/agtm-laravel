@extends('layouts.site')

@section('title')
    Looking for SCO
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">Looking for An SCO</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <form class="" action="{{ route('sco.looking.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-info">
                        <strong>
                            Fill in the product details here. We will contact you afterwards.
                        </strong>
                    </div>
                </div>

                <br><br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="text" name="product_name" placeholder="Product Name"
                            class="form-control" required
                            value="">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="text" name="quantity" placeholder="Enter the required quantity"
                            class="form-control" required
                            value="">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="text" name="unit" placeholder="Enter the unit of the product"
                            class="form-control" required
                            value="">
                    </div>
                </div>

                <hr>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="text" name="quantity" placeholder="Telephone"
                            class="form-control"
                            value="@auth {{ auth()->user()->tel }} @endauth">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="email" name="email" placeholder="Your Email Address"
                            class="form-control" required
                            value="@auth {{ auth()->user()->email }} @endauth">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <textarea name="description" rows="8" class="form-control"
                            placeholder="Write any extra comments here." required
                        ></textarea>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <button type="submit" name="contact" class="btn btn-primary ">

                            <strong>Send SCO Request</strong>
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
