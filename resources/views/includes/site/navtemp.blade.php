<div class="navigation">
   <nav class="navbar  navbar-fixed-top">

       <!-- Collection of nav links and other content for toggling -->
       <div id="navbarCollapse" class="collapse navbar-collapse">
           <!-- Mobile menu toggle button (hamburger/x icon) -->
           <input id="main-menu-state" type="checkbox" />
           <label class="main-menu-btn" for="main-menu-state">
             <span class="main-menu-btn-icon"></span> Toggle main menu visibility
           </label>

           <ul id="main-menu" class="sm sm-blue">
             <li><a href="#">Item 1</a></li>
             <li><a href="#">Item 2</a>
               <ul>
                 <li><a href="#">Item 2-1</a></li>
                 <li><a href="#">Item 2-2</a></li>
                 <li>
                     <a href="#">Item 2-3</a>
                     <ul>
                         <li> <a href="#">New Menus</a> </li>
                         <li> <a href="#">New Menus</a> </li>
                         <li> <a href="#">New Menus</a> </li>

                     </ul>
                 </li>
               </ul>
             </li>
             <li><a href="#">Item 3</a></li>
           </ul>
           <ul class="nav navbar-nav ">
               <li class=""><a href="index.php">Home</a></li>
               <li class="">
                    <a href="importers.php">Importers/Buyers</a>
                </li>
                <li>
                    <a href="exporters.php">Exporters/Sellers</a>
                </li>
                <li>
                    <a href="approved_trades.php">Approved Trades</a>
                </li>
                <li>
                    <a href="forum.php"> Buy/Sell Forum</a>
                </li>
                <li>
                    <a href="price_watch.php">Price Watch</a>
                </li>

                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span class="fa fa-chevron-down pull-right"></span></a>
                      <ul class="dropdown-menu">

                            <li><a href="products.php">Products</a></li>
                            <li class="divider"></li>
                            <li><a href="all_sell_offers.php"> Sell Offers </a></li>
                            <li class="divider"></li>
                            <li><a href="all_buy_offers.php"> Buy  Offers </a></li>
                            <li class="divider"></li>
                            <li><a href="sell_offer.php">Make Sell Offer </a></li>
                            <li class="divider"></li>
                            <li><a href="buy_offer.php">Make Buy Offer</a></li>

                      </ul>
                </li>
                <!-- <li>
                    <a href="#">CONTACT US</a>
                </li> -->

           </ul>

              <ul class="nav navbar-nav navbar-right">

                  @auth
                      <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <img src="/site/images/user.png" class="user-image" alt="User Image">
                          <span class="hidden-xs">
                              admin
                          </span>
                        </a>
                        <ul class="dropdown-menu">
                          <!-- User image -->
                          <li class="user-header skin-blue">
                            <img src="/site/images/user.png" class="img-circle" alt="User Image">

                            <p>
                                Administrator
                                <small>Member since Jun. 2018</small>
                            </p>
                          </li>
                          <!-- Menu Body -->
                          <li class="user-body">
                            <div class="row">
                              <div class="col-xs-4 text-center">
                                <a href="#">Buy Offers</a>
                                <br>
                                0                               </div>
                              <div class="col-xs-4 text-center">
                                <a href="#" class="text-bold">Sell Offers</a>
                                <br>
                                0                               </div>
                              <div class="col-xs-4 text-center">
                                <a href="#" class="text-bold">Orders</a>
                                <br>
                                1                               </div>
                            </div>
                            <!-- /.row -->
                          </li>
                          <!-- Menu Footer-->
                          <li class="user-footer">
                            <div class="pull-left">
                              <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <form class="" action="{{ route('logout') }}" method="post"
                                   id="logout">
                                   @csrf

                                </form>
                              <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                               onclick="event.preventDefault();
                                   document.getElementById('logout').submit()">Sign out</a>
                            </div>
                          </li>
                        </ul>
                      </li>
                  @else
                      <li class=" user user-menu">
                        <a href="{{ route('login') }}" class="" >
                          Login
                        </a>
                  @endauth
               </ul>

       </div>
   </nav>
</div>
