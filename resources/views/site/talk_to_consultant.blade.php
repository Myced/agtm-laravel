@extends('layouts.site')

@section('title')
    {{ __("Talk to Consultant") }}
@endsection

@section('content')
<div class="bg-white p-20 m-t-10">

    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">Talk To Consultant</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p>
                Submit your Contract + Invoice + POP + POF +
                Reg documents + tax +( BL, SGS , utility bill..if available )
                for confirmation by a trade consutant for free before
                continuing your purchase for your own security and safety.
            </p>
        </div>
    </div>

    <form class="form-horizontal" action="{{ route('consultant.talk.save') }}" method="post">
        @csrf

        <br>
        <div class="row">
            <div class="col-md-6">

                <h3>Your Information</h3>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        Your Name:
                    </label>

                    <div class="col-sm-8">
                        <input type="text" name="name" value="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        Your Email:
                    </label>

                    <div class="col-sm-8">
                        <input type="text" name="email" value="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        Your Address:
                    </label>

                    <div class="col-sm-8">
                        <input type="text" name="address" value="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        Any Other Message:
                    </label>

                    <div class="col-sm-8">
                        <textarea name="message" rows="8" class="form-control" required></textarea>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <h3>Attach Documents</h3>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        Contract of Ongoing Trade:
                    </label>

                    <div class="col-sm-8">
                        <input type="file" name="address" value="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        Profoma Invoice of Ongoing Trade:
                    </label>

                    <div class="col-sm-8">
                        <input type="file" name="address" value="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        POP of Seller:
                    </label>

                    <div class="col-sm-8">
                        <input type="file" name="address" value="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        POF of Buyer:
                    </label>

                    <div class="col-sm-8">
                        <input type="file" name="address" value="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        Registration Document of Both Parties:
                    </label>

                    <div class="col-sm-8">
                        <input type="file" name="address" value="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        Tax of Seller:
                    </label>

                    <div class="col-sm-8">
                        <input type="file" name="address" value="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">
                        BL, SGS , utility bill or any if available of seller:
                    </label>

                    <div class="col-sm-8">
                        <input type="file" name="address" value="" class="form-control" required>
                    </div>
                </div>

            </div>
        </div>

        <!-- //next row/ -->
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-flat" name="button">
                        <strong>Submit Request</strong>
                    </button>
                </div>
            </div>
        </div>

    </form>

</div>
@endsection
