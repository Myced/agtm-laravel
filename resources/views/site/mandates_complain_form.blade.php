@extends('layouts.site')

@section('title')
    Law A Complain
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">Lay A Mandate Complain</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <form class="" action="{{ route('mandates.complain.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-info">
                        Please fill the form below and submit your complain.
                    </div>
                </div>

                <br><br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="text" name="name" placeholder="Full Name"
                            class="form-control" required
                            value="@auth {{ auth()->user()->full_name }} @endauth">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="text" name="tel" placeholder="Telephone"
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
                        <input type="text" name="title" placeholder="Enter a title for Your complain"
                            class="form-control" required
                            value="">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <textarea name="description" rows="8" class="form-control"
                            placeholder="Write your full complain here." required
                        ></textarea>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <button type="submit" name="contact" class="btn btn-primary ">
                        
                            <strong>Lay Complain</strong>
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
