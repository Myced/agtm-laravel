@extends('layouts.forum')

@section('title')
    {{ __("Forum") }}
@endsection

@section('content')
<?php $user = auth()->user(); ?>
<section class="content">



    <div class="container">
        <div class="row" style="margin-top: 15px;">
            <div class="col-lg-8 col-md-8">

                <!-- loop through the posts and make show them  -->
                @foreach($threads as $thread)
                    <!-- POST -->
                    <div class="post">
                        <div class="wrap-ut pull-left">
                            <div class="userinfo pull-left">
                                <div class="avatar">
                                    <img src="{{ $thread->user->avatar }}" alt="" />
                                    <div class="status green">&nbsp;</div>
                                </div>

                                <!-- <div class="icons">
                                    <img src="/forum_files/images/icon1.jpg" alt="" />
                                    <img src="/forum_files/images/icon4.jpg" alt="" />
                                </div> -->
                            </div>
                            <div class="posttext pull-left">
                                <h2>
                                    <a href="{{ route('forum.topic', ['slug' => $thread->slug ]) }}">
                                        {{ $thread->title }}
                                    </a>
                                </h2>
                                <p>
                                    {{ \Str::limit($thread->description, 200) }}
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="postinfo pull-left">
                            <div class="comments">
                                <div class="commentbg">
                                    {{ $thread->replies->count() }}
                                    <div class="mark"></div>
                                </div>

                            </div>
                            <div class="views">
                                <i class="fa fa-eye"></i>
                                {{ $thread->views }}
                            </div>
                            <div class="time">
                                <i class="fa fa-clock-o"></i>
                                 {{ $thread->created_at->diffForHumans()  }}
                             </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- POST -->
                @endforeach
                <!-- end of post loop -->





            </div>
            <div class="col-lg-4 col-md-4">

                <!-- -->
                <div class="sidebarblock">
                    <h3>Categories</h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <ul class="cats">
                            @foreach($threadCategories as $category)
                            <li>
                                <a href="{{ route('forum', ['category', $category->slug]) }}">
                                    {{ $category->title }}
                                    <span class="badge pull-right">
                                        {{ $category->posts->count() }}
                                    </span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- -->
                @auth
                <div class="sidebarblock">
                    <h3>My Threads</h3>

                    @foreach($user->threads as $thread)
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">
                            {{ $thread->title }}
                        </a>
                    </div>
                    @endforeach

                </div>
                @endauth


            </div>
        </div>
    </div>



    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12">
                <div class="pull-left">
                    <a href="#" class="prevnext">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </div>
                <div class="pull-left">
                    <ul class="paginationforum">
                        <li class="hidden-xs"><a href="#">1</a></li>
                        <li class="hidden-xs"><a href="#">2</a></li>
                        <li class="hidden-xs"><a href="#">3</a></li>
                        <li class="hidden-xs"><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#" class="active">7</a></li>
                        <li><a href="#">8</a></li>
                        <li class="hidden-xs"><a href="#">9</a></li>
                        <li class="hidden-xs"><a href="#">10</a></li>
                        <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                        <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                        <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                        <li><a href="#">1586</a></li>
                    </ul>
                </div>
                <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div> -->


</section>
@endsection
