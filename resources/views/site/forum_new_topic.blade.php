@extends('layouts.forum')

@section('title')
    {{ __("New Topic") }}
@endsection

@section('content')

<?php $user = auth()->user(); ?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
                <a href="#">Borderlands 2</a>
                <span class="diviver">&gt;
                </span>
                <a href="#">General Discussion</a> <span class="diviver">&gt;</span>
                <a href="#">New Topic</a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row" style="margin-top: 15px;">
            <div class="col-lg-8 col-md-8">

                <!-- POST -->
                <div class="post">
                    <form action="{{ route('forum.topic.store') }}" class="form newtopic" method="post">
                        @csrf
                        <div class="topwrap">
                            <div class="userinfo pull-left">
                                <div class="avatar">
                                    <img src="{{ $user->avatar }}" alt="" />
                                    <div class="status red">&nbsp;</div>
                                </div>

                                <div class="icons">
                                    <!-- <img src="/forum_files/images/icon3.jpg" alt="" />
                                    <img src="/forum_files/images/icon4.jpg" alt="" />
                                    <img src="/forum_files/images/icon5.jpg" alt="" />
                                    <img src="/forum_files/images/icon6.jpg" alt="" /> -->
                                </div>
                            </div>
                            <div class="posttext pull-left">

                                <div>
                                    <input type="text" placeholder="Enter Topic Title"
                                        class="form-control" name="title" />
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <select name="category" id="category"  class="form-control" required>
                                            <option value="" selected disabled>Select Category</option>
                                            @foreach($threadCategories as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div>
                                    <textarea id="desc" name="description"
                                        placeholder="Description"  class="form-control" ></textarea>
                                </div>



                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="postinfobot">

                            <div class="notechbox pull-left">
                                <input type="checkbox" name="note" id="note" class="form-control" />
                            </div>

                            <div class="pull-left">
                                <label for="note"> Email me when some one post a reply</label>
                            </div>

                            <div class="pull-right postreply">
                                <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                <div class="pull-left"><button type="submit" class="btn btn-primary">Post</button></div>
                                <div class="clearfix"></div>
                            </div>


                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div><!-- POST -->



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



    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12">
                <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
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
    </div>


</section>
@endsection
