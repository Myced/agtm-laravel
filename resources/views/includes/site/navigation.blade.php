<div class="navigation">
   <nav class="">

       <!-- Collection of nav links and other content for toggling -->
       <div class="" id="navbar">
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
                     <a href="{{ route('agents.request') }}">Looking for a Field Agent</a>
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
                         <a href="{{ route('mandates.request') }}">Looking for a Mandate, Sourcing agent</a>
                     </li>

                     <li>
                         <a href="#">View All Agent | Sourcing Agents</a>
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
                         <a href="#">View All Available Exporters/Sellers</a>
                     </li>

                     <li>
                         <a href="#">Looking for Expoters/Sellers</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="#">Importers/Buyers</a>
                 <ul>
                     <li>
                         <a href="#">View All Available Importers/Buyers</a>
                     </li>

                     <li>
                         <a href="#">Looking for Importers/Buyers</a>
                     </li>
                 </ul>
             </li>

             <li>
                 <a href="#">Available SCO</a>
                 <ul>
                     <li>
                         <a href="#">List all SCOs Available</a>
                     </li>

                     <li>
                         <a href="#">Looking for SCO</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="#">Available LOI</a>
                 <ul>
                     <li>
                         <a href="#">List all LOIs Available</a>
                     </li>

                     <li>
                         <a href="#">Looking for LOI</a>
                     </li>
                 </ul>
             </li>

             @auth
                 <li class="pull-right">
                     <a href="#">My Account</a>
                     <ul>
                         <li>
                             <a href="#">My Account</a>
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
