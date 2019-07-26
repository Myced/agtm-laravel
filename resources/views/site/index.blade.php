@extends('layouts.site')

@section('title')
    {{ __("Home") }}
@endsection

@section('styles')
<link rel="stylesheet" href="/site/plugins/slick/slick.css">
<!-- <link rel="stylesheet" href="/site/css/mymain.css"> -->
<!-- <link rel="stylesheet" href="/site/css/header.css"> -->
<link rel="stylesheet" href="/site/css/lib/chosen.min.css">

<style media="screen">
   .slick-prev,
   .slick-next {
    font-size: 0;
    position: absolute;
    bottom: 50px;
    color: #6a8799;
    border: 0;
    background: none;
    z-index: 1;
   }

   .slick-prev {
    left: 20px;
   }

   .slick-prev:after {
      content: "\f104";
    font: 40px/1 'FontAwesome';
   }

   .slick-next {
    right: 20px;
    text-align: right;
   }

   .slick-next:after {
       content: "\f105";
     font: 40px/1 'FontAwesome';
   }

   .slick-prev:hover:after,
   .slick-next:hover:after {
    color: #7e7e7e;
   }


.search-form .search-block {
  position: relative;
  display: table;
}
.search-form .search-block .search-inner {
  display: table-cell;
  vertical-align: middle;
  width: 237px;
  max-width: -webkit-calc(100% - 194px);
  max-width: -moz-calc(100% - 194px);
  max-width: calc(100% - 194px);
}

input.search-info:focus
{
    border: 1px solid #ff7519;
}

.search-form .search-block .search-info {
  width: 100%;
  height: 42px;
  line-height: 42px;
  background-color: #ffffff;
  font-size: 18px;
  color: #333;
  padding: 0 10px;
  border-radius: 0px 0 0 0px;
  border-right: none;
  border: solid 2px #e6e6e6;
  border-right: none;
}
.search-form .search-choice{
  display: table-cell;
  vertical-align: middle;
  position: relative;
}
.search-form .search-block .search-button {
  font-size: 20px;
  color: #fff;
  width: 150px;
  height: 42px;
  line-height: 42px;
  text-align: center;
  border-radius: 0 0px 0px 0 ;
  display: inline-block;
  background-color: #ff7519;
}
.search-form .search-block .search-button:hover {
  background-color: #f48942;
}
.search-form .search-block .chosen-select .title {
  font-size: 14px;
  color: #000;
  line-height: 24px;
  background-color: #f0f2f5;
  padding-left: 20px;
  width: 100%;
  display: block;
}
.search-form .search-block .chosen-select {
  width: 100%;
  background-color: transparent;
  padding: 9px 15px;
  border-right: none;
}
.search-form .search-block .chosen-container-single {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  width: 135px !important;
    border-radius: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
}
.search-form .search-block .chosen-container-single .chosen-single {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  padding: 0 30px 0 20px;
  max-width: 100%;
  background: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border-top: solid 1px #e6e6e6;
  border-bottom: solid 1px #e6e6e6;
  background-color: #ffffff;
  border-left: solid 1px #e6e6e6;
  line-height: 42px;
  height: 42px;
  font-size: 13px;
  color: #333;
  border-right: none;
}
.search-form .search-block .chosen-container-single .chosen-single::after {
  content: "\f0dd";
  font-family: "FontAwesome";
  display: inline-block;
  margin-left: 5px;
  font-size: 14px;
  color: #aaa;
  position: absolute;
  z-index: 1;
  right: 20px;
  top: -3px;
}
.search-form .search-block .chosen-container-single .chosen-drop {
  min-width: 236px;
  overflow-y: auto;
  border: solid 1px #ddd;
  text-align: left;
  background-color: #fff;
  max-height: 420px;
}
.search-form .search-block .chosen-container .chosen-results {
  padding: 0;
  margin: 0;
}
.search-form .search-block .chosen-container .chosen-results li.active-result:hover,
.search-form .search-block .chosen-container .chosen-results li.highlighted {
  background-color: #f0f2f5;
  background-image: none;
  color: #666;
}
.search-form .search-block .chosen-container .chosen-results li {
  font-size: 14px;
  color: #666;
  line-height: 24px;
  padding: 0 10px 0 20px;
}
.search-form .search-block .chosen-container-single .chosen-single span {
  margin-right: 2px;
}
.chosen-container-single .chosen-search input[type=text] {
  display: none;
}
.search-form.layout2 .search-block .chosen-container-single .chosen-single {
  border-radius: 0px 0 0 0px;
  border: 2px solid #ff7519;
  border-right: 1px solid #aaa;
  position: relative;
}
.search-form.layout2 .search-block .chosen-container-single .chosen-single::before {
  height: 36px;
  width: 1px;
  background-color: #e6e6e6;
  content: "";
  position: absolute;
  z-index: 1;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
}
.search-form.layout2 .search-block .search-info {
  border-radius: 0px;
  border: 2px solid #ff7519;
  border-left: none;
  width: 460px;
}


.nav-icon
{
    width: 40px;
    height: 40px;
}

.m-icon
{
    padding: 4px;
    width: 43px;
    float: left;
}

.group-user
{
    float: left;
    width: 200px;
}

.group-protection
{
    float: left;
    width: 150px;
}

.group-favourite
{
    float: left;
    width: 150px;
}

.img-circle
{
    border-radius: 50%;
}

.post-content
{
    font-size: 14px;
}

.post-img
{
    width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
}

.btn-xs
{
    padding: 5px;

}

.f-12
{
    font-size: 12px;
}

.f-14
{
    font-size: 14px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.m-t-5
{
    margin-top: 5px;
}

.cat-title
{
    border: 1px solid #e00909;
    padding: 10px;
    color: #fff;
    background-color: #e00909;
    font-weight: 700;
}

.cat-body
{
    border: 1px solid #e00909;
}

.cat-list
{
    list-style-type: none;
    padding-left: 0px;
}

.cat-list li
{

}

.cat-list li a
{
    display: block;
    padding: 5px;
    padding-left: 15px;
    font-size: 14px;
    color: #444;
    border-bottom: 1px solid #f4f4f4;
    transition: all 1s;
}

.cat-list li a:hover
{
    background: #efefef;
    font-weight: bold;
    font-size: 15px;

}

.cat-list li a:hover .cat-icon
{
    padding-right: 10px;
}

.cat-icon
{
    float: right;
    padding-right: 20px;
    transition: all 1s;
}

.sub-menu
{
    padding: 10px;
}

.block
{
    display: block;
}

.block-title
{
    padding: 10px;
    color: #444;
    text-transform: uppercase;
    font-weight: 700;
}

.block-image
{
    width: 25px;
    height: 25px;
}

ul.block-list
{
    list-style-type: none;
    padding-left: 0px;
}

ul.block-list li:first-child
{
    border-top: 1px solid #e4e4e4;
}

ul.block-list li
{
    border-bottom: 1px solid #e4e4e4;
    padding: 6px;
    font-size: 17px;
}

.flag
{
    width: 30px;
    padding-right: 5px;
}

.sub-menu {
    display: none;
    position: absolute;
    z-index: 1100;
    left: 95.5%;
    top: -10px;
    margin-right: -10px;
    opacity: 1;
    min-width: 220px;
    padding: 20px 0 30px;
    -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.2);
    -webkit-transition: opacity .5s,-webkit-transform .5s;
    transition: opacity .3s,transform .3s;
    -webkit-transform: translate(0, 30px);
    -moz-transform: translate(0, 30px);
    -o-transform: translate(0, 30px);
    -ms-transform: translate(0, 30px);
    transform: translate(0, 30px);
    text-align: left;
}
</style>
@endsection

@section('content')
<div class="bg-white p-20">

    <div class="row">
        <div class="col-md-7">
            <div class="search-form layout2 box-has-content">
                <div class="search-block">
                    <div class="search-choice parent-content">
                        <select data-placeholder="All Categories" class="chosen-select">
                            <option value="1">All categories</option>
                            <option value="2">-Electronics</option>
                            <option value="3">Acessories</option>
                            <option value="4">Table & Accessories</option>
                            <option value="5">Headphone</option>
                            <option value="6">Batteries & Chargens</option>
                            <option value="7">Headphone & Headsets</option>
                            <option value="8">Mp3 Player & Acessories</option>
                        </select>
                    </div>
                    <div class="search-inner">
                        <input type="text" class="search-info"
                            placeholder="What are you looking for...">
                    </div>
                    <a href="#" class="search-button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        Search
                    </a>
                </div>
            </div>
        </div>

        <!-- //column for other menu items  -->
        <div class="col-md-5">
            <div class="group group-user">
                <div class="m-icon">
                    <img src="/site/images/user.svg" alt="User" class="nav-icon">
                </div>
                <div class="menu-content">
                    <a href="#" class="f-12">Sign In</a>
                    |
                    <a href="#" class="f-12">Join Free</a>

                    <br>
                    <a href="#">My AGTM</a>
                </div>
            </div>

            <div class="group group-protection">
                <div class="m-icon">
                    <img src="/site/images/protection.svg" alt="User" class="nav-icon">
                </div>
                <div class="menu-content">
                    <a href="#">
                        Order
                        <br>
                        Protection
                    </a>
                </div>
            </div>

            <div class="group group-favourite">
                <div class="m-icon">
                    <img src="/site/images/heart.svg" alt="User" class="nav-icon">
                </div>
                <div class="menu-content">
                    <a href="#">
                        <br>
                        Favourites
                    </a>
                </div>
            </div>
        </div>
        <!-- end of column -->
    </div>

    <div class="row" style="margin-top: 30px;">
        <div class="col-md-3">
            <div class="cat-title">
                <span class="cat-text">
                    <i class="fa fa-navicon"></i>
                    CATEGORIES
                </span>
            </div>

            <div class="cat-body">
                <ul class="cat-list">
                    <li>
                        <a href="#">
                            Cooking Oil
                            <span class="cat-icon">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Agriculture
                            <span class="cat-icon">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>

                        <div class="sub-menu">
                            <h3>Title</h3>

                            <ul class="sub-menu-list">
                                <li>
                                    <a href="#">Item </a>
                                </li>
                                <li>
                                    <a href="#">Item 2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            Electronics
                            <span class="cat-icon">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Dairy
                            <span class="cat-icon">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Spices
                            <span class="cat-icon">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Computer
                            <span class="cat-icon">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4">
                    <div class="block-title">
                        Buying Request
                    </div>

                    <div class="block-content" >
                        <ul class="block-list">
                            <?php $counts = [1,2,2,3,3]; ?>
                            <?php foreach ($counts as $count): ?>
                                <li>
                                    <a href="#" class="block">
                                        <span class="flag">
                                            <img src="/site/images/countries/cm.svg" alt="Flag"
                                                class="block-image">
                                        </span>

                                        Crapp Iron - Cameroon
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="block-title">
                        Selling Request
                    </div>

                    <div class="block-content" >
                        <ul class="block-list">
                            <?php $counts = [1,2,2,3,3]; ?>
                            <?php foreach ($counts as $count): ?>
                                <li>
                                    <a href="#" class="block">
                                        <span class="flag">
                                            <img src="/site/images/countries/gb.svg" alt="Flag"
                                                class="block-image">
                                        </span>

                                        Kareoke MACHINE - uk
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="block-title">
                        Available LOIs
                    </div>

                    <div class="block-content" >
                        <ul class="block-list">
                            <?php $counts = [1,2,2,3,3]; ?>
                            <?php foreach ($counts as $count): ?>
                                <li>
                                    <a href="#" class="block">
                                        <span class="flag">
                                            <img src="/site/images/countries/us.svg" alt="Flag"
                                                class="block-image">
                                        </span>

                                        LOI for Chicken
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

            </div>


        </div>
    </div>


    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-widget" style="border: 1px solid blue">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="/site/images/gates.jpeg" alt="User Image">
                <span class="username"><a href="#">Jonathan Burke</a></span>
                <span class="description">AGTM Agent- Ukraine</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">

                <button type="button" class="btn btn-box-tool" data-widget="remove">
                    <i class="fa fa-ellipsis-h fa-2x text-black"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body post-content">
              <!-- post text -->

                <strong>Far far away,</strong> behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at

                <br><br>
                the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies
                it with the necessary regelialia. It is a paradisematic
                country, in which roasted parts of sentences fly into
                your mouth.

                <div class="post-image">
                    <img src="/site/images/gates_an_friend.jpeg" alt="Post Image"
                        class="post-img">
                </div>

              <!-- /.attachment-block -->

              <!-- Social sharing buttons -->
              <button type="button" class="btn btn-default btn-xs f-12">
                  <i class="fa fa-share"></i> Share</button>
              <button type="button" class="btn btn-default btn-xs f-12">
                  <i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted f-12">45 likes - 2 comments</span>
            </div>
            <!-- /.box-body -->
                <div class="box-footer box-comments f-14">
                    <div class="box-comment">
                    <!-- User image -->
                        <img class="img-circle img-sm"
                            src="/site/images/gates.jpeg" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                                Maria Gonzales
                                <span class="text-muted pull-right">8:03 PM Today</span>
                            </span>

                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                    <!-- /.comment-text -->
                    </div>
              <!-- /.box-comment -->
                    <div class="box-comment f-14">
                    <!-- User image -->
                        <img class="img-circle img-sm"
                            src="/site/images/gates.jpeg" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                                Nora Havisham
                                <span class="text-muted pull-right">8:03 PM Today</span>
                            </span>

                            The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using
                            'Content here, content here', making it look like readable English.
                        </div>
                    <!-- /.comment-text -->
                    </div>
              <!-- /.box-comment -->
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
                <form action="#" method="post" onsubmit="return false">
                    <img class="img-responsive img-circle img-sm"
                        src="/site/images/gates.jpeg" alt="Alt Text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                        <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                    </div>
                </form>
            </div>
            <!-- /.box-footer -->
          </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <?php
                for ($i=0; $i < 4 ; $i++) {
                    ?>
                    <div class="col-md-6 m-t-5">
                        <div class="card">
                            <img src="/site/images/metal.jpg" alt="Denim Jeans" style="width:100%">

                            <h2>Scrap Iron</h2>
                            <p class="price">$19.99</p>
                            <p>
                                Short Description of scrap iron
                            </p>
                            <p><button>Details</button></p>
                        </div>

                    </div>
                    <?php
                }
                    ?>
            </div>
        </div>
    </div>

    <!-- row to cotain the categories, confirm loi and co -->

</div>
@endsection

@section('scripts')
<script type="text/javascript" src="/site/plugins/slick/slick.min.js"></script>
<script type="text/javascript" src="/site/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="/site/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="/site/js/jquery.easy-ticker.min.js"></script>
<script type="text/javascript" src="/site/js/lib/chosen.min.js"></script>

<script type="text/javascript">
    //initialise chosen js here
    $(document).ready(function(){
        $(".chosen-select").chosen({disable_search_threshold: 10});
    })
</script>
@endsection
