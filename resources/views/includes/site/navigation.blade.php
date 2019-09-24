<div class="navigation">
   <nav class="mynav nav-shadow">

       <!-- Collection of nav links and other content for toggling -->
       <div class="mynav" id="navbar">
           <!-- Mobile menu toggle button (hamburger/x icon) -->
           <input id="main-menu-state" type="checkbox" />
           <label class="main-menu-btn" for="main-menu-state">
             <span class="main-menu-btn-icon"></span> Toggle main menu visibility
           </label>

           <ul id="main-menu" class="sm sm-blue">
             <li><a href="/">Home</a></li>

             <li><a href="#">Field Agent</a>
               <ul>
                 <li>
                     <a href="{{ route('agents.request') }}">Looking for Field Agents</a>
                 </li>
                 <li>
                     <a href="{{ route('agents') }}">View Available Agents</a>
                 </li>
                 <li>
                     <a href="{{ route('agents.law-complain') }}">Law A Complain</a>
                 </li>
               </ul>
             </li>
             <li>
                 <a href="#">Mandates</a>
                 <ul>
                     <li>
                         <a href="{{ route('mandates.request') }}">
                             Looking for a Mandate, Sourcing Agent
                         </a>
                     </li>

                     <li>
                         <a href="{{ route('mandates') }}">View All Mandates | Sourcing Agents</a>
                     </li>

                     <li>
                         <a href="{{ route('mandates.complain') }}">Lay a Complain</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="#">Expoters/Sellers</a>
                 <ul>
                     <li>
                         <a href="{{ route('exporters') }}">View All Available Exporters/Sellers</a>
                     </li>

                     <li>
                         <a href="{{ route('exporters.looking') }}">Looking for Expoters/Sellers</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="#">Importers/Buyers</a>
                 <ul>
                     <li>
                         <a href="{{ route('importers') }}">View All Available Importers/Buyers</a>
                     </li>

                     <li>
                         <a href="{{ route('importers.looking') }}">Looking for Importers/Buyers</a>
                     </li>
                 </ul>
             </li>

             <li>
                 <a href="#">Available SCO</a>
                 <ul>
                     <li>
                         <a href="{{ route('site.scos') }}">List all SCOs Available</a>
                     </li>

                     <li>
                         <a href="{{ route('sco.looking') }}">Looking for SCO</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="#">Available LOI</a>
                 <ul>
                     <li>
                         <a href="{{ route('site.lois') }}">List all LOIs Available</a>
                     </li>

                     <li>
                         <a href="{{ route('loi.looking') }}">Looking for LOI</a>
                     </li>
                 </ul>
             </li>

             <li class="">
                 <a href="{{ route('forum') }}">
                     Forum
                 </a>
             </li>

             @auth
                 <li class="pull-right">
                     <a href="#">My Account</a>
                     <ul>
                         <li>
                             <a href="{{ route('user.dashboard') }}">My Account</a>
                         </li>

                         <li>
                             <form action="{{ route('logout') }}" id="logout" method="post">
                                 @csrf
                             </form>
                             <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout').submit()">Logout</a>
                         </li>
                     </ul>
                 </li>
             @else
                <li class="pull-right"><a href="{{ route('login') }}">Login</a></li>
                <li class="pull-right"><a href="{{ route('register') }}">Register</a></li>
             @endauth

           </ul>


       </div>
   </nav>
</div>
