@extends('layouts.site')

@section('title')
    {{ __("Contact Us") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2 class="page-header">Contact Us</h2>

        <form class="" action="" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-info">
                        Please Leave your message here
                    </div>
                </div>

                <br><br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="text" name="name" value="" placeholder="Full Name" class="form-control" required>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="text" name="tel" value="" placeholder="Telephone" class="form-control">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="email" name="email" value="" placeholder="Your Email Address" class="form-control" required="">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <textarea name="message" rows="8" class="form-control"
                            placeholder="Enter your message here" required
                        ></textarea>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <button type="submit" name="contact" class="btn btn-primary btn-block">
                            <i class="fa fa-send"></i>
                            Send Message
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
