@extends('layouts.site')

@section('title')
    {{ __("Home") }}
@endsection

@section('styles')
<link rel="stylesheet" href="/site/plugins/slick/slick.css">

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
@endsection
