<nav class="sidebar" data-sidebar-anyclick-close="">
  <!-- START sidebar nav-->
  <ul class="sidebar-nav">
    <!-- START user info-->
    <li class="has-user-block">
      <div class="collapsee show" id="user-block">
        <div class="item user-block">
          <!-- User picture-->
          <div class="user-block-picture">
            <div class="user-block-status">
              <img class="img-thumbnail rounded-circle"
              src="{{ \App\User::DEFAULT_AVATAR }}"
              alt="Avatar" width="60" height="60">
              <div class="circle bg-success circle-lg"></div>
            </div>
          </div>
          <!-- Name and Job-->
          <div class="user-block-info">
            <span class="user-block-name">John Obia</span>
            <span class="user-block-role">johnoba@gmail.com</span>
          </div>
        </div>
      </div>
    </li>
    <!-- END user info-->
    <!-- Iterates over all sidebar items-->
    <li class="nav-heading ">
      <span data-localize="sidebar.heading.HEADER">Main WEBSITE</span>
    </li>

    <li class="">
      <a href="{{ route('home') }}" title="To Website">
        <em class="fa fa-home"></em>
        <span >To Home</span>
      </a>
    </li>

    <li class="">
      <a href="{{ route('products') }}" title="To Website">
        <em class="fa fa-cubes"></em>
        <span >To Products</span>
      </a>
    </li>

    <li class="nav-heading ">
      <span >DASHBOARD</span>
    </li>

    <li class="{{ Request::is('user') ? 'active' : '' }}">
      <a href="{{ route('user.dashboard') }}" title="Dashboard">
        <em class="icon-speedometer"></em>
        <span >Dashboard</span>
      </a>
    </li>

    <li class="nav-heading ">
      <span data-localize="sidebar.heading.HEADER">NAVIGATION</span>
    </li>



    <li class="#">
      <a href="" title="My Orders">
        <em class=" icon-present"></em>
        <span>My Orders</span>
      </a>
    </li>

    <li class="#">
      <a href="#" title="My Commissions">
        <em class=" icon-wallet"></em>
        <span>Commissions</span>
      </a>
    </li>



    <li class=" ">
        <form class="" action="{{ route('logout') }}"
            method="post" style="display: none;"
            id="logout">
            @csrf

        </form>
      <a href="{{ route('logout') }}"  title="Logout"
      onclick="event.preventDefault();
                    document.getElementById('logout').submit();" >
        <em class="icon-power"></em>

        <span >Logout</span>
      </a>

    </li>

  </ul>
  <!-- END sidebar nav-->
</nav>
