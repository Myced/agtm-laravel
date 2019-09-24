@extends('layouts.site')

@section('title')
    Looking for Importer
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">Looking for An Importer</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <form class="" action="{{ route('expoters.looking.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-info">
                        <strong>
                            Submit Your Importing Request here
                        </strong>
                    </div>
                </div>

                <br><br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <select class="form-control" name="country" required>
                            <option value="" > -- Select Country -- </option>
                            @foreach(App\Models\Country::all() as $country)
                                <option value="{{ $country->id }}">
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="text" name="product" placeholder="Enter the required product "
                            class="form-control" required
                            value="">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <select class="form-control" name="documents" required>
                            <option value=""> -- Documents Offered -- </option>
                            <option value="">Company Req</option>
                            <option value="">Company Profile</option>
                            <option value="">SGC, PV, etc</option>
                            <option value="">Past BL</option>
                        </select>
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
                            <strong>Send Request</strong>
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
