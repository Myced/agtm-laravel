@extends('layouts.site')

@section('title')
    {{ __("Exporters") }}
@endsection

@section('styles')
<style media="screen">
    .widget-user-2 .widget-user-header
    {
        padding: 0px;
        border-top-right-radius: 0px;
        border-top-left-radius: 0px;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">Exporters</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header">
                <img src="/images/Alibaba_group_logo.png" alt="">
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">

                    <li>
                        <a href="javascript:void(0)" class="text-center">
                            <strong class="" style="font-size: 20px;">
                                ALIBABA Group
                            </strong>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)">
                            Source Country:
                            <strong class="pull-right ">Cameroon</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <strong class="">Products</strong>
                        </a>
                    </li>
                    <li style="padding: 10px 5px;">
                        <span class="badge bg-blue">Scrap Iron</span>
                        <span class="badge bg-blue">Electronics</span>
                        <span class="badge bg-blue">Copper</span>
                        <span class="badge bg-blue">Maize</span>
                    </li>
                    <li>
                        <a href="#">

                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.widget-user -->
    </div>

    <div class="col-md-3">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header">
                <img src="/images/fedex.jpg" alt="" width="100%" height="200px">
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">

                    <li>
                        <a href="javascript:void(0)" class="text-center">
                            <strong class="" style="font-size: 20px;">
                                FedEx
                            </strong>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)">
                            Source Country:
                            <strong class="pull-right ">United States</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <strong class="">Products</strong>
                        </a>
                    </li>
                    <li style="padding: 10px 5px;">
                        <span class="badge bg-blue">Parcel Delivery</span>
                        <span class="badge bg-blue">Clothings</span>
                    </li>
                    <li>
                        <a href="#">

                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.widget-user -->
    </div>
</div>
@endsection
