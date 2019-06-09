@extends('layouts.admin')

@section('title')
    {{ __("Edit Subscription Email Address") }}
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h1 class="page-header">
                Email Email
            </h1>

            <br>
            <br>

            <form class="form-horizontal" action="{{ route('subscription.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                                Email:
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-12">
                                <input type="email" name="email" class="form-control"
                                    placeholder="Email" value="{{ $email->email }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product" class="control-label col-md-5">
                            </label>
                            <div class="col-md-12">
                                <input type="submit" name="save" value="Update Email" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
