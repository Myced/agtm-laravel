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
</style>
@endsection

@section('content')
<div class="bg-white p-20">
    <div class="row">
        <div class="col-xs-12 col-md-3">
            <form class="" action="search.php" method="get">
                 <div class="input-group ">
                     <input type="text" class="form-control input-orange" name="search" placeholder="Search">
                       <span class="input-group-btn">
                         <button type="submit" class="btn btn-orange btn-flat">
                             <i class="fa fa-search"></i>
                             Search!
                         </button>
                       </span>
                 </div>
<!--                         <div class="input-group">
                    <input type="text" name="search" value="" placeholder="What are you looking for?"
                           class="form-control">

                    <div class="input-group-append">
                        <button type="button" name="button" class="">
                            <i class="fa fa-search"></i>
                            Search
                        </button>
                    </div>
                </div>-->
            </form>

        </div>

        <div class="col-xs-12 col-md-9">
                                        <marquee>
                Live Spot Prices.  Payment Terms ( Arrivals: 1 MT,  Price: LC, SBLC, DLC, BG, CAD, Cash at Sight, Against SGS, at Bonded warehouse )  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;Price Note ( Arrivals: 1 MT,  Price: please note that very cheap prices do not exist at all, beware of fraud by very cheap prices )  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;Documents ( Arrivals: 1 MT,  Price: LOI, ICPO, SCO, POP, POF, BCL, NCNDA, SPA, SWIFT )  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;                            </marquee>
        </div>
    </div>


    <div class="row bg-gray">
        <div class="col-md-12">
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
    </div>

    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="sc-hd-row sc-hd-main" data-spm-anchor-id="a2700.8293689.scGlobalHomeHeader.i3.2ce265aa2Dx0XB">
    <div class="sc-hd-cell sc-hd-hide-s sc-hd-m-logo">
      <a href="//www.alibaba.com/" class="J-sc-hd-i-logo sc-hd-i-logo" data-val="
        Alibaba.com
      ">
        Alibaba.com
      </a>
    </div>
    <div class="sc-hd-category sc-hd-hide sc-hd-show-s">
        <div class="J-sc-hd-scc-category-unit sc-hd-scc-category-unit" data-role="scc-category-unit" data-widget-cid="widget-19"><div class="header-category-wrapper trigger-active">


	<h3 class="header-category-trigger">
		<i class="sc-hd-prefix2-icon sc-hd-prefix2-icon-category sc-hd-prefix2-icon-s"></i>
		<span>Categories</span>
		<i class="sc-hd-prefix2-icon sc-hd-prefix2-icon-arrow-down sc-hd-prefix2-icon-xs"></i>
	</h3>

</div>
</div>
    </div>
    <div class="sc-hd-cell sc-hd-searchbar-wrap" style="display: block; width: calc(100% - 293px);">
      <div class="J-sc-hd-searchbar ui-searchbar ui2-searchbar ui-searchbar-size-middle ui-searchbar-primary ui-searchbar-mod-type ui-searchbar-img-search">
        <div class="ui-searchbar-body">
          <form method="get" action="//www.alibaba.com/trade/search"><i class="ui-searchbar-button-icon"></i>
              <!-- <i class="ui-searchbar-imgsearch-icon">
                  <div class="ui-searchbar-img-search-icon-tips">
                      Search by image
                  </div>
                  <span class="ui-searchbar-img-search-new-icon">NEW</span>
              </i> -->
            <input type="hidden" name="fsb" value="y">
            <input class="ui-searchbar-field-type" type="hidden" name="IndexArea" value="product_en">
            <input class="ui-searchbar-field-category" type="hidden" name="CatId" value="">
            <div class="ui-searchbar-type">
                <div data-widget-cid="widget-15">
                    <div class="ui-searchbar-type-value" >
                        <span class="ui-searchbar-type-display">
                            Products
                        </span>
                        <span class="ui-searchbar-hollow-arrow" >
                            <em data-spm-anchor-id="a2700.8293689.scGlobalHomeHeader.i0.2ce265aa2Dx0XB"></em>
                            <b></b>
                        </span>
                    </div>
                    <ul class="ui-searchbar-type-options"
                    style="min-width: 103px; z-index: 99; position: absolute; left: -3px; top: 37px; right: auto; display: none;"
                    data-widget-cid="widget-16">
                        <li class="ui-searchbar-type-option">
                            <a href="javascript:void(0)" data-value="products" rel="nofollow">
                                Products
                            </a>
                        </li>
                        <li class="ui-searchbar-type-option">
                            <a href="javascript:void(0)" data-value="suppliers" rel="nofollow">
                                Suppliers
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ui-searchbar-main" style="margin-left: 104px;">
              <input type="text" class="ui-searchbar-keyword" name="SearchText" autocomplete="off"
              x-webkit-speech="x-webkit-speech"
              x-webkit-grammar="builtin:translate"
              lang="en" placeholder="What are you looking for...">

                <div class="ui-searchbar-keyword-panel ui-searchbar-keyword-hide ui-searchbar-dynamic"
                data-widget-cid="widget-12" aria-hidden="true" style="display: none; z-index: 99; height: auto;">

                </div>

            </div>

            <input type="submit" class="ui-searchbar-submit" value="Search">

          </form>
        </div>

    </div>
    </div>
    <div class="sc-hd-cell sc-hd-m-notify sc-hd-float-r sc-hd-text-right">
      <div class="J-hd-m-notify-tab sc-hd-hide-s sc-hd-ms-tab sc-hd-ms-ma J-sc-hd-ms-ma" data-tab="ma">
          <div class="J-hd-m-notify-tab-trigger  sc-hd-ms-trigger sc-hd-ms-unsign" data-tab="ma">
                <div class="sc-hd-ms-icon sc-hd-i-unsignavatar"></div>
                <div class="sc-hd-ms-title-top">
                    <div class="sc-hd-ms-login">
                        <a rel="nofollow" href="//passport.alibaba.com/icbu_login.htm?tracelog=hd_signin" data-val="ma_signin" title="Sign In">Sign In</a>
                    </div>
                    <div class="sc-hd-ms-login">
                        <a href="//usmy.alibaba.com/user/join/join_step1.htm?tracelog=hd_joinfree" data-val="ma_joinfree" title="Join Free">Join Free</a>
                    </div>
                </div>
            </div>

        </div>


      <div class="J-hd-m-notify-tab sc-hd-hide-s sc-hd-ms-tab sc-hd-ms-order J-sc-hd-ms-order" data-tab="order">
          <div class="J-hd-m-notify-tab-trigger sc-hd-ms-trigger sc-hd-ms-last" data-tab="order">

            <div class="sc-hd-icon-container">
                <a class="sc-hd-ms-icon sc-hd-i-favorite-new"
                 href="//us-favorite.alibaba.com/favorite2/favorite_home.htm#/favList?listType=product"
                 data-val="favicon" target="_blank" title="Favorites"></a>
                </div>
            <div class="sc-hd-text-container">
                <a title="Orders" href="//biz.alibaba.com/order/list.htm?tracelog=hd_order" target="_blank">
                    Orders
                </a>
            </div>
        </div>




        </div>

      <div class="J-hd-m-notify-tab sc-hd-ms-tab sc-hd-ms-cart J-sc-hd-ms-cart"
        data-tab="cart" data-widget-cid="widget-9">
    <div>
          <div class="icbu-simple-shopping-cart  s-empty">
    <a class="sc-hd-ms-icon sc-hd-i-favorite-new"
    href="//carp.alibaba.com/purchaseList?tracelog=miniCart" target="_blank" data-val="Cart0">
    <div class="J-hd-m-notify-tab-trigger sc-hd-ms-trigger sc-hd-ms-last" data-tab="cart">
        <div class="sc-hd-icon-container">
            <a class="sc-hd-ms-icon sc-hd-i-cart-new" data-val="carticon"
            href="//carp.alibaba.com/purchaseList?tracelog=miniCart"
            target="_blank"></a></div>
            <div class="sc-hd-text-container">
                <a title="Cart" href="//carp.alibaba.com/purchaseList?tracelog=miniCart"
                target="_blank" data-val="Cart" data-type="text">Cart</a>
            </div>
        </div>
        <span class="J-sc-hd-num sc-hd-sc-num" data-type="count">0</span>
    </a>
    <div class="icbu-simple-shopping-cart-panel">



        <div class="icbu-simple-shopping-cart-panel-con hide empty">

        </div>



    </div>
</div>
</div></div>
    </div>
</div>
        </div>
    </div>

    <br>


    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-widget" style="border: 1px solid blue">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
              <p>Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at</p>

              <p>the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies
                it with the necessary regelialia. It is a paradisematic
                country, in which roasted parts of sentences fly into
                your mouth.</p>

              <!-- Attachment -->
              <div class="attachment-block clearfix">
                <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">

                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                  <div class="attachment-text">
                    Description about the attachment can be placed here.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                  </div>
                  <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
              </div>
              <!-- /.attachment-block -->

              <!-- Social sharing buttons -->
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted">45 likes - 2 comments</span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Nora Havisham
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
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
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>
        </div>
    </div>

    <!-- row to cotain the categories, confirm loi and co -->
    <br>
    <div class="row">

        <!-- column to show the categoeries. th -->
        <div class="col-md-2">

            <h3 class="categories">Categories</h3>

            <div class="slim">
                <ul class="categories">
                                                        <li>
                       <a href="products.php?category=1">
                           Cooking Oil                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=2">
                           Pulses                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=5">
                           Dairy                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=8">
                           Spices                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=11">
                           Scrap grades                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=12">
                           Gold / Diamond                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=13">
                           Timber                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=16">
                           Petroleum Products                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=17">
                           Al, Pb, Sn, Cu ingot                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=18">
                           Health products                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=19">
                           Beauty products                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=20">
                           Fashion                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=21">
                           Electronics                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=23">
                           Chicken, Beef, Pork                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=24">
                           Grains                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=25">
                           Barley, Wheat                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=26">
                           Alcoholic, non-alcoh                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=27">
                           Household Chemicals                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=28">
                           Industrial Chemicals                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=29">
                           Sugar, Salt                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=30">
                           Other Agricultural f                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=31">
                           Machinery                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=32">
                           Services                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=33">
                           Other products                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=34">
                           Toys                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=35">
                           Baby Stuffs                                       </a>
                    </li>
                                                           <li>
                       <a href="products.php?category=36">
                           Newsprint                                       </a>
                    </li>
                                                       </ul>
            </div>


        </div>
        <!-- end of col-md-2 to show the categories -->

        <!-- columnt to show the soc for sa-->
        <div class="col-md-3">

            <!-- a row for the latest confirm loi -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="loi-heading">
                        Latest
                        <a href="approved_trades.php">
                            Confirmed LOI
                        </a>
                         for Purchase
                    </h3>

                    <div class="table-responsive">

                        <table class="table table-home vticker">
                                                                            <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="loi_details.php?offer=43">
                                            Urea LOI                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="loi_details.php?offer=42">
                                            Timber LOI                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="loi_details.php?offer=41">
                                            Sesame Seeds LOI                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="loi_details.php?offer=40">
                                            Peanuts LOI                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="loi_details.php?offer=39">
                                            Methanol LOI                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="loi_details.php?offer=38">
                                            Glycerine LOI                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="loi_details.php?offer=37">
                                            Copper Bars LOI                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="loi_details.php?offer=36">
                                            Cocoa Bean LOI                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="loi_details.php?offer=35">
                                            Bitumen 60/70 LOI                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                        </table>
                    </div>
                </div>
            </div>
            <!-- end of the first row -->

            <!-- a row for the latest sco for sales. -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="loi-heading">
                        Latest

                        <a href="approved_trades.php?sco=true">
                            Confirmed SCO
                        </a>

                        for sale
                    </h3>

                    <div class="table-responsive">
                        <table class="table table-home vticker">

                                                                            <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=47">
                                            Used Rails SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=46">
                                            Used Cooking Oil SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=45">
                                            Urea SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=44">
                                            Timber wood SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=43">
                                            Sugar ICUMSA 45 SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=42">
                                            Sesame seeds SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=41">
                                            Refined Sunflower Oil SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=40">
                                            Onions SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=39">
                                            HMS 1&amp; 2 Scrap                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=38">
                                            Galix SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=36">
                                            Frozen Chicken                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=35">
                                            Copper wire Scrap                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=34">
                                            Copper Cathode SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=33">
                                            Chick Peas SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=32">
                                            Copper Bars SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=31">
                                            Cashew Nut SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=30">
                                            Bitumen SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=29">
                                            Aluminium Scrap SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-caret-right"></i>
                                    </td>

                                    <td>
                                        <a href="sco_details.php?offer=28">
                                            Almond Nuts SCO                                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>


                        </table>
                    </div>
                </div>
            </div>
            <!-- end of the row SCO for sale -->

        </div>
        <!-- end of col-md-4 for the loi purchases and sco sales -->

        <!-- next column buy and sell offers. -->
        <div class="col-md-3">
            <!-- a row for the latest confirm loi -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="loi-heading">
                        Latest <a href="all_buy_offers.php">Buy Offers</a>
                    </h3>

                    <div class="table-responsive">
                        <table class="table table-home vticker">
                                                                            <tr>
                                    <td>
                                        <i class="fa fa-flag-checkered"></i>
                                    </td>

                                    <td>
                                        <a href="buy_offer_details.php?offer=6">
                                            Frozen Chicken beef                                                             Needed
                                        </a>
                                    </td>

                                    <td>
                                        Sep. 17                                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-flag-checkered"></i>
                                    </td>

                                    <td>
                                        <a href="buy_offer_details.php?offer=7">
                                            Yellow Corn                                                             Needed
                                        </a>
                                    </td>

                                    <td>
                                        Sep. 18                                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-flag-checkered"></i>
                                    </td>

                                    <td>
                                        <a href="buy_offer_details.php?offer=8">
                                            Copper wire milberry Scrap                                                             Needed
                                        </a>
                                    </td>

                                    <td>
                                        Sep. 18                                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-flag-checkered"></i>
                                    </td>

                                    <td>
                                        <a href="buy_offer_details.php?offer=9">
                                            Copper Cathode                                                             Needed
                                        </a>
                                    </td>

                                    <td>
                                        Sep. 18                                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-flag-checkered"></i>
                                    </td>

                                    <td>
                                        <a href="buy_offer_details.php?offer=10">
                                            Used Rails                                                             Needed
                                        </a>
                                    </td>

                                    <td>
                                        Sep. 18                                                    </td>
                                </tr>



                        </table>
                    </div>
                </div>
            </div>
            <!-- end of the first row -->

            <!-- a row for the latest sco for sales. -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="loi-heading">
                        Latest
                        <a href="all_sell_offers.php">Sell Offers</a>
                    </h3>

                    <div class="table-responsive">
                        <table class="table table-home vticker">
                                                                            <tr>
                                    <td>
                                        <i class="fa fa-flag-checkered"></i>
                                    </td>

                                    <td>
                                        <a href="sell_offer_details.php?offer=9">
                                            Aluminium Ingots                                                            For Sale
                                        </a>
                                    </td>

                                    <td>
                                        Sep. 18                                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-flag-checkered"></i>
                                    </td>

                                    <td>
                                        <a href="sell_offer_details.php?offer=11">
                                            HMS 1$2 Scraps                                                            For Sale
                                        </a>
                                    </td>

                                    <td>
                                        Sep. 18                                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-flag-checkered"></i>
                                    </td>

                                    <td>
                                        <a href="sell_offer_details.php?offer=12">
                                            PINE SAWN TIMBER                                                            For Sale
                                        </a>
                                    </td>

                                    <td>
                                        Sep. 30                                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-flag-checkered"></i>
                                    </td>

                                    <td>
                                        <a href="sell_offer_details.php?offer=13">
                                            2 Edge pine logs - Ukraine origin                                                            For Sale
                                        </a>
                                    </td>

                                    <td>
                                        Sep. 30                                                    </td>
                                </tr>
                                                                                <tr>
                                    <td>
                                        <i class="fa fa-flag-checkered"></i>
                                    </td>

                                    <td>
                                        <a href="sell_offer_details.php?offer=14">
                                            copper cathodes CATH-1                                                            For Sale
                                        </a>
                                    </td>

                                    <td>
                                        Oct. 03                                                    </td>
                                </tr>
                                                                        </table>
                    </div>
                </div>
            </div>
            <!-- end of the row SCO for sale -->

            <br><br>
            <div class="row">
                <div class="col-md-12">

                     <a href="http://maersk.com" target="_blank">
                         <img src="admin/uploads/ads/20180918054050_logic.jpg" alt="Advert Image"
                         class="ad1" width="100%" height="300px">
                     </a>
                </div>
            </div>
        </div>

        <!-- //next column for forum post  -->
        <div class="col-md-4">
            <div class="row">
                <h3 class="page-header">Forum Updates</h3>

                <div class="col-md-12 vtick">

                    <div class="">
                                                                <a href="thread.php?id=5">
                            <div class="callout text-black">
                                <h5> <strong>HOW TO USE AGTM</strong> </h5>
                                <p>
                                    THIS IS TO HELP YOU NAVIGATE THE SITE PROPERLY AND UNDERSTAN ...
                                </p>
                            </div>
                        </a>
                                                                    <a href="thread.php?id=9">
                            <div class="callout text-black">
                                <h5> <strong>LOI, SCO, NCNDA, CONTRACTS, AGENT CONTRACTS</strong> </h5>
                                <p>
                                    LOI, SCO, NCNDA, CONTRACTS, AGENT CONTRACTS<br />
<br />
-	Please make ...
                                </p>
                            </div>
                        </a>
                                                                    <a href="thread.php?id=6">
                            <div class="callout text-black">
                                <h5> <strong>PAYMENT METHODS AND PROCEDURES</strong> </h5>
                                <p>
                                    PAYMENT METHODS AND PROCEDURES<br />
<br />
-	All payment is by  L/C , ...
                                </p>
                            </div>
                        </a>
                                                                    <a href="thread.php?id=11">
                            <div class="callout text-black">
                                <h5> <strong>SCO, BCL, Warehouse, factory visit, POP, POF, Bank letter, Embassy Recognition, Legal Status,... etc</strong> </h5>
                                <p>
                                    SCO, BCL, Warehouse, factory visit, POP, POF, Bank letter, E ...
                                </p>
                            </div>
                        </a>
                                                                    <a href="thread.php?id=12">
                            <div class="callout text-black">
                                <h5> <strong>ALWAYS MAKE SURE YOU KNOW YOUR CLIENTS</strong> </h5>
                                <p>
                                    ALWAYS MAKE SURE YOU KNOW YOUR CLIENTS<br />
<br />
For Buyers, Selle ...
                                </p>
                            </div>
                        </a>
                                                                    <a href="thread.php?id=10">
                            <div class="callout text-black">
                                <h5> <strong>Logistics, freight forwarding, packing, loading, SGS, BV, inspection, Quality Standards, Customs, HS CODES, Tariffs, &hellip;etc</strong> </h5>
                                <p>
                                    SHIPPER / FREIGHT FORWARDERS<br />
<br />
Logistics, freight forwardin ...
                                </p>
                            </div>
                        </a>
                                                                    <a href="thread.php?id=7">
                            <div class="callout text-black">
                                <h5> <strong>ALWAYS MAKE SURE YOU KNOW YOUR CLIENTS</strong> </h5>
                                <p>
                                    ALWAYS MAKE SURE YOU KNOW YOUR CLIENTS<br />
<br />
For Buyers, Selle ...
                                </p>
                            </div>
                        </a>
                                                                    <a href="thread.php?id=13">
                            <div class="callout text-black">
                                <h5> <strong>Barai international catalog</strong> </h5>
                                <p>
                                    Dear Sir/Mam,<br />
Good Morning or Good afternoon.<br />
G ...
                                </p>
                            </div>
                        </a>
                                                                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end of row for categories, confirm loi purchases and co  -->

    <!-- row to cotain the market place, forum infor and products -->
    <div class="row">

        <!-- column to contain the market place, and requesting for quotation -->
        <div class="col-md-3">

            <!-- row for madis live -->

            <!-- end of manis live -->

            <!-- quotation -->
            <div class="row">
                <div class="col-md-12">
                    <button class="btn">
                        Request for Quotation
                    </button>
                </div>
            </div>
            <!-- end quotation -->

            <!-- quotation -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">
                        One Request,
                        <br>
                        Multiple Quotes
                    </h2>
                </div>
            </div>
            <!-- end quotation -->

            <!-- quotation request -->
            <div class="row">
                <div class="col-md-12">
                    <form method="post" class="form-horizontal">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="quotation" placeholder="Quotation "
                                   class="form-control">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="quantity" placeholder="Quantity"
                                   class="form-control">
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="unit" value="" class="form-control" placeholder="Unit">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="quote_type" value="" class="form-control" placeholder="Type. E.G, Price, or Description">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    <input type="submit" name="quotation_request" value="Request Quotation" class="btn btn-orange">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end quotation request -->

            <!-- //ad space -->
            <br><br>
            <div class="row">
                <div class="col-md-12">

                     <a href="http://orisperfect.com" target="_blank">
                         <img src="admin/uploads/ads/20180918053957_Copy of Upcoming Events Calendar - Made with PosterMyWall (1).jpg" alt="Advert Image"
                         class="ad1" width="100%" height="300px">
                     </a>
                </div>
            </div>

        </div>
        <!-- end of col-md-3 for quotation and market place -->

        <!-- column for the latest forum posts and some products. -->
        <div class="col-md-6">

            <!-- //get the first row for the forum news -->
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>

            <!-- //get the new row for the products -->
            <div class="row">

                <!-- //title -->
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-header">Products </h3>
                    </div>
                </div>

                <!-- //peform slick for the first five items  -->
                <div class="row ">
                    <div class="slider first">
                                                                    <div class="col-md-5 p-10">
                                <a href="product_details.php?id=3">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180918020902_Methanol 1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Methanol</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 750 - 1000/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=6">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180918020922_buffalo meat 1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Frozen Buffalo Meat</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 3500 - 4100/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=9">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180914080932_sunflower oil 2.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Refined Sunflower Oil</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 760/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=25">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180911100944_Cashew nuts 1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Raw Cashew Nuts</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 3000usd/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=5">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180918020907_copper-scrap.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Copper wire Scrap Millberrry</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 5175/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=30">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180918030931_Cocoa beans.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Cocoa Beans</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 1200 - 2000 /MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=32">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180930060924_Pine 1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">PINE SAWN TIMBER</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 166 euros / m3 </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                </div>
                </div>

                <!-- next row for the next six items  -->
                <div class="row">
                    <div class="slider first">
                                                                    <div class="col-md-5 p-10">
                                <a href="product_details.php?id=4">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180918020933_maize 1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Maize/Yellow Corn</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 170/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=7">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180918020959_aluminium scrap 1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Aluminium Scrap</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 1100 - 1250/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=10">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180914070904_Chicken whole 2.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Frozen Chicken</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 1000 - 1600/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=29">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180911100923_pork feet 1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Frozen Pork Feet</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 750 - 950 /MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=23">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180911100954_Aluminium Ingots 1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Aluminium Ingots</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 1800/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=31">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180918030954_HMS 1 and 2 scrap.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">HMS 1 $ 2 Scrap</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 265/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                        <div class="col-md-5 p-10">
                                <a href="product_details.php?id=16">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180911120900_chicken wings.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9">
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Frozen Chicken wings</span>

                                                <br><br>

                                                <span class="bolder text-black">
                                                    US $<span class="price"> 950 - 1100 /MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                </div>
                </div>

                <!-- next row for the next six items  -->
                <div class="row">
                    <div class="slider first">
                                                                    <div class="col-md-5 p-10">

                                <a href="product_details.php?id=8">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180914080914_almond nuts 1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9 text-black" >
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Almond nuts</span>

                                                <br><br>

                                                <span class="bolder">
                                                    US $<span class="price"> 3500 - 4500/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                                                                        <div class="col-md-5 p-10">

                                <a href="product_details.php?id=27">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180911100943_Chickpeas.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9 text-black" >
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Chickpeas</span>

                                                <br><br>

                                                <span class="bolder">
                                                    US $<span class="price"> 850 - 1400/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                                                                        <div class="col-md-5 p-10">

                                <a href="product_details.php?id=20">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180911110951_glycerine1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9 text-black" >
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Refined Glycerine</span>

                                                <br><br>

                                                <span class="bolder">
                                                    US $<span class="price"> 700 - 999/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                                                                        <div class="col-md-5 p-10">

                                <a href="product_details.php?id=26">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180911100944_Skimmed Milk Powder.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9 text-black" >
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Full cream Milk Powder</span>

                                                <br><br>

                                                <span class="bolder">
                                                    US $<span class="price"> 2700/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                                                                        <div class="col-md-5 p-10">

                                <a href="product_details.php?id=12">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180911120918_used cooking oil 1.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9 text-black" >
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Used Cooking Oil</span>

                                                <br><br>

                                                <span class="bolder">
                                                    US $<span class="price"> 450 - 580/MT </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                                                                        <div class="col-md-5 p-10">

                                <a href="product_details.php?id=33">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20180930060950_IMG-20180927-WA0002.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9 text-black" >
                                            <div class="middle text-center p-20">
                                                <span class="product-name">2 edge pine logs</span>

                                                <br><br>

                                                <span class="bolder">
                                                    US $<span class="price"> 185 usd / m3 </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                                                                        <div class="col-md-5 p-10">

                                <a href="product_details.php?id=22">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <img
                                            src="admin/uploads/products/20181003031018_copper cathode.jpg"
                                            alt="Product Image" class="product-image">
                                        </div>

                                        <div class="col-xs-12 col-md-9 text-black" >
                                            <div class="middle text-center p-20">
                                                <span class="product-name">Copper cathode</span>

                                                <br><br>

                                                <span class="bolder">
                                                    US $<span class="price"> LME 10 - 15% </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                                                                </div>
                </div>


            </div>
        </div>
        <!-- end of column for forum posts and products -->

        <!-- advertisement space -->
        <div class="col-md-3">
            <br>
            <div class="row">
                <div class="col-md-12">

                     <a href="http://axa.com" target="_blank">
                         <img src="admin/uploads/ads/20180917013013_insurance.jpg" alt="Advert Image"
                         class="ad2"  width="100%" height="300px">
                     </a>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-12">

                     <a href="http://ashfordfinance.com" target="_blank">
                         <img src="admin/uploads/ads/20180917013058_finance.JPG" alt="Advert Image"
                          class="ad3"  width="100%" height="300px">
                     </a>
                </div>
            </div>
        </div>
        <!-- end of advertisement space. -->
    </div>
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
