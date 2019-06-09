@extends('layouts.admin')

@section('title')
    {{ __("Edit Spot Item Prices") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h1 class="page-header">
                Edit Prices
            </h1>

            <br>
            <br>
            <form class="" action="{{ route('spot.items.prices.update') }}" method="post">

                @csrf

                @foreach($items as $item)
                <div class="row">
                    <div class="col-md-3">
                        <input type="hidden" name="id[]" value="{{ $item->id }}">
                        <input type="text" name="item[]" value="{{ $item->name }}" placeholder="Item" class="form-control" disabled>
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="quantity[]" value="{{ $item->quantity }}" placeholder="Quantity" class="form-control" disabled>
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="unit[]" value="{{ $item->unit }}" placeholder="Unit" class="form-control" disabled>
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="prices[]" value="{{ $item->price }}" placeholder="Price" class="form-control">
                    </div>
                </div>
                <br>
                @endforeach


                 <div class="row">
                     <div class="col-md-12">
                         <input type="submit" name="save" value="Update Prices" class="btn btn-primary">
                     </div>
                 </div>
            </form>

        </div>
    </div>
</div>
@endsection
