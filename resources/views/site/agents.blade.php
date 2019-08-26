@extends('layouts.site')

@section('title')
    {{ __("Agents") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">All Availalbel Agents</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                    <img class="img-circle" src="/site/images/user.png" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Cedric Tifuh</h3>
                <h5 class="widget-user-desc">tncedric@gmail.com</h5>
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                    <li>
                        <a href="javascript:void(0)">
                            Country:
                            <strong class="pull-right ">Cameroon</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Spoken Language:
                            <strong class="pull-right ">English</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Level Of Education:
                            <strong class="pull-right ">Bachelors</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Trust Rating:
                            <strong class="pull-right ">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star-o text-warning"></i>
                            </strong>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            # of Jobs Done:
                            <span class="pull-right badge bg-aqua">842</span>
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
            <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                    <img class="img-circle" src="/site/images/user.png" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Oben Simon</h3>
                <h5 class="widget-user-desc">obsimon@gmail.com</h5>
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                    <li>
                        <a href="javascript:void(0)">
                            Country:
                            <strong class="pull-right ">Ghana</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Spoken Language:
                            <strong class="pull-right ">English</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Level Of Education:
                            <strong class="pull-right ">Masters</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Trust Rating:
                            <strong class="pull-right ">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star-o text-warning"></i>
                                <i class="fa fa-star-o text-warning"></i>
                            </strong>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            # of Jobs Done:
                            <span class="pull-right badge bg-aqua">50</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.widget-user -->
    </div>
</div>
@endsection
