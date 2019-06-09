@extends('layouts.site')

@section('title')
    Looking for Agent
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">Agents - Looking for Agent</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-1">

        <form class="form-horizontal" action="{{ route('agents.request.store') }}" method="post">
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
                    <label class="container">
                        Inspect Loading and Shipping
                        <input type="radio" name="purpose" value="inspect" required>
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Investiage the existence of a product
                        <input type="radio" name="purpose" value="investigate" required>
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Have a meeting in a company or  on behalf of a company
                        <input type="radio" name="purpose" value="meeting" required>
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="product" class="control-label col-md-4">
                    Report Expected:
                    <span class="required">*</span>
                </label>
                <div class="col-md-8">
                    <label class="container">
                        Photos
                        <input type="radio" name="report" value="photos" required>
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Videos
                        <input type="radio" name="report" value="videos" required>
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Documents
                        <input type="radio" name="report" value="documents" required>
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Legal Status
                        <input type="radio" name="report" value="legal_status" required>
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        All
                        <input type="radio" name="report" value="all" required>
                        <span class="checkmark"></span>
                    </label>
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
                    $costings = [
                        "100", "200", "300", "500"
                    ];
                     ?>
                    @foreach($costings as $costing)
                        <label class="container">
                            {{ $costing }} USD
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
