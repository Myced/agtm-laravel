@extends('layouts.site')

@section('title')
    {{ __("Our SCOs") }}
@endsection

@section('styles')
    <style media="screen">
        .timeline:before
        {
            background-color: #fff !important;
        }
    </style>
@endsection

@section('content')

<div class="bg-white p-20 m-t-10">
    <h3 class="page-header">Our SCOs</h3>

    <br>
    <div class="row">
        <ul class="timeline" >
            <li class="">

                @for($i = 1; $i < 10; $i++)
                <div class="timeline-item" style="border: 1px solid #aaa;">
                      <span class="time"><i class="fa fa-clock-o"></i> Monday, 19/Nov/2018 </span>

                      <h3 class="timeline-header"><a href="#">
                          Bitumen 60/70 SCO                                             </a>
                      </h3>

                      <div class="timeline-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/uploads/loi/20181119011131_LOI BITUMEN  AA_00 (1).jpg" alt="LOI Image" width="200px" height="200px">
                                </div>

                                <div class="col-md-6">
                                    Bitumen 60/70                                                    </div>
                            </div>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-info btn-flat" href="#">Read more</a>
                      </div>
                    </div>
                    <br>
                @endfor

            </li>

        </ul>
    </div>
</div>

@endsection
