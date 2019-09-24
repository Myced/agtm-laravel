<div class="left side-menu">

    <div class="slimscroll-menu" id="remove-scroll">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <span>
                    <img src="/adminn/assets/images/logo.png" alt="" height="42">
                </span>
                <i>
                    <img src="/adminn/assets/images/logo_sm.png" alt="" height="48">
                </i>
            </a>
        </div>

        <!-- User box -->
        <div class="user-box">

        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <!--<li class="menu-title">Navigation</li>-->

                                            <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fi-air-play"></i> <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fi-layers"></i>
                        <span> Categories </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('category.add') }}">Add New Category</a></li>
                        <li><a href="{{ route('categories') }}">Category List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="icon-bubbles"></i>
                        <span> Chat Rooms </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('chat.room.add') }}">Add New Chat Room</a></li>
                        <li><a href="{{ route('chat.rooms') }}">Chat Rooms</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fi-mail"></i>
                        <span> LOI </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('loi.add') }}">Add New LOI</a></li>
                        <li><a href="{{ route('lois.pending') }}">Pending LOI</a></li>
                        <li><a href="{{ route('lois.available') }}">Available LOI</a></li>
                        <li><a href="{{ route('lois') }}">All LOI</a></li>
                    </ul>
                </li>
                                                <li>
                    <a href="javascript: void(0);"><i class="fi-mail"></i><span> SCO </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('sco.add') }}">Add New SCO</a></li>
                        <li><a href="{{ route('scos.pending') }}">Pending SCO</a></li>
                        <li><a href="{{ route('scos.available') }}">Avaialble SCO</a></li>
                        <li><a href="{{ route('scos') }}">All SCO</a></li>
                    </ul>
                </li>
                                                <li>
                    <a href="javascript: void(0);"><i class="fa fa-dollar"></i> <span> Spot Prices </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('spot.item.add') }}">Add New Item</a></li>
                        <li><a href="{{ route('spot.items') }}">Manage Spot Items</a></li>
                        <li><a href="{{ route('spot.items.prices') }}">Edit Spot Item Prices</a></li>
                    </ul>
                </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fi-mail"></i><span> Importers </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="pending_imports.php">Pending Offers</a></li>
                            <li><a href="accepted_imports.php">Accepted Offers</a></li>
                            <li><a href="all_imports.php">All Offers</a></li>
                        </ul>
                    </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fi-book"></i><span> Exporters </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="pending_exports.php">Pending Exports </a></li>
                            <li><a href="accepted_exports.php">Accepted Exports </a></li>
                            <li><a href="all_exports.php">All Offers</a></li>
                        </ul>
                    </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fi-book"></i><span> Sell Offers </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="pending_sell_offers.php">Pending Sell Offers </a></li>
                            <li><a href="accepted_sell_offers.php">Accepted Sell Offers </a></li>
                            <li><a href="all_sell_offers.php">All Offers</a></li>
                        </ul>
                    </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fi-book"></i><span> Buy Offers </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="pending_buy_offers.php">Pending Buy Offers </a></li>
                            <li><a href="accepted_buy_offers.php">Accepted Buy Offers </a></li>
                            <li><a href="all_buy_offers.php">All Offers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="fa fa-shield"></i><span> Products </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('product.add') }}"> Add New Product </a></li>
                            <li><a href="{{ route('products') }}"> Product List </a></li>
                        </ul>
                    </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fa fa-envelope"></i><span> NewLetter </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('subscription.add') }}"> Add Newsletter Email </a></li>
                            <li><a href="{{ route('subscriptions') }}"> Manage Mailing List </a></li>
                        </ul>
                    </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fa fa-comments"></i><span> Manage Forum </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="all_topics.php"> All Forum Topics </a></li>
                            <li><a href="flagged_topics.php"> Flagged Forum Topics </a></li>
                            <li><a href="all_replies.php"> All Replies </a></li>
                            <li><a href="flagged_replies.php"> Flagged Forum Replies </a></li>
                        </ul>
                    </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fa fa-ticket"></i><span> Product Orders </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="pending_product_orders.php"> Pending Product Orders </a></li>
                            <!-- <li><a href="confirmed_product_orders.php"> Cofirmed Product Orders </a></li> -->
                            <!-- <li><a href="product_order_list.php"> All Product Orders </a></li> -->
                        </ul>
                    </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fa fa-adn"></i><span> Advertisement </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="advert1.php"> Ad Space 1 </a></li>
                            <li><a href="advert2.php"> Ad Space 2 </a></li>
                            <li><a href="advert3.php"> Ad Space 3 </a></li>
                            <li><a href="advert4.php"> Ad Space 4 </a></li>
                        </ul>
                    </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fa fa-indent"></i><span> Product Rows </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="add_to_row.php"> Add to Row </a></li>
                            <li><a href="row1.php"> Row 1 products </a></li>
                            <li><a href="row2.php"> Row 2 products </a></li>
                            <li><a href="row3.php"> Row 3 products </a></li>
                        </ul>
                    </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fa fa-users"></i><span> Manange Users </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="add_user.php">Add User </a></li>
                            <li><a href="user_list.php"> Manage Users </a></li>
                            <li><a href="admin_users.php"> Admin  Users </a></li>
                        </ul>
                    </li>
                                                    <li>
                        <a href="javascript: void(0);"><i class="fa fa-envelope"></i><span> Quotation </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="quotation_list.php"> All Quotations </a></li>
                        </ul>
                    </li>



            </ul>

        </div>
        <!-- Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
