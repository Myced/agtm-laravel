@extends('layouts.site')

@section('title')
    Looking for Mandates
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">Looking for a mandate</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-1">

        <form class="form-horizontal" action="{{ route('mandates.request.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="product" class="control-label col-md-4">
                    Country of Agent Needed:
                    <span class="required">*</span>
                </label>
                <div class="col-md-8">
                    <select class="form-control select2" name="country">
                        @foreach(\App\Models\Country::all() as $country)
                            <option value="{{ $country->id }}">
                                {{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="product" class="control-label col-md-4">
                    Purpose:
                    <span class="required">*</span>
                </label>
                <div class="col-md-8">

                    @foreach(\App\Models\MandateRequest::PURPOSES as $key => $value)
                    <label class="container">
                        {{ $value }}
                        <input type="radio" name="purpose" value="{{ $key }}" required>
                        <span class="checkmark"></span>
                    </label>
                    @endforeach

                </div>
            </div>

            <div class="form-group">
                <label for="product" class="control-label col-md-4">
                    Report Expected:
                    <span class="required">*</span>
                </label>
                <div class="col-md-8">

                    @foreach(\App\Models\MandateRequest::REPORTS as $key => $value)
                    <label class="container">
                        {{ $value }}
                        <input type="radio" name="report" value="{{ $key }}" required>
                        <span class="checkmark"></span>
                    </label>
                    @endforeach


                </div>
            </div>

            <div class="form-group">
                <label for="product" class="control-label col-md-4">
                    Target Costing:
                    <span class="required">*</span>
                </label>
                <div class="col-md-8">
                    <?php
                    //arrange an array of target costing.
                    $costings = \App\Models\MandateRequest::CONSTING;
                     ?>
                    @foreach($costings as $costing)
                        <label class="container">
                            {{ $costing }}
                            <input type="radio" name="costing" value="{{ $costing }}" required>
                            <span class="checkmark"></span>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="form-group">
                <label for="product" class="control-label col-md-4">
                    Extra Message:
                </label>
                <div class="col-md-8">
                    <textarea name="message" rows="8"
                        class="form-control"
                        placeholder="Enter any other message you want to leave"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="product" class="control-label col-md-4">

                </label>
                <div class="col-md-8">
                    <button type="submit" name="button"
                        class="btn btn-primary">
                        <strong>Send Request</strong>
                    </button>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection
