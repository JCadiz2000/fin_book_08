<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
   <!-- Topbar Navbar -->
   <ul class="navbar-nav ml-auto">
      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
         <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-search fa-fw"></i>
         </a>
         <!-- Dropdown - Messages -->
         <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
               <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                     <button class="btn btn-primary" type="button">
                     <i class="fas fa-search fa-sm"></i>
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </li>
      <!-- Nav Item - Alerts -->
      <li class="nav-item dropdown no-arrow mx-1">
         <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">2+</span>
         </a>
         <!-- Dropdown - Alerts -->
         <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
               Owners of This Project
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
               <div class="dropdown-list-image mr-3">
                  <img class="rounded-circle" src="{{ URL::asset('assets/img/jayson.jpg') }}" alt="">
               </div>
               <div>
                  <div class="small text-gray-500">BSCS</div>
                  <span class="font-weight-bold">Jayson Cadiz</span>
               </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
               <div class="dropdown-list-image mr-3">
                  <img class="rounded-circle" src="{{ URL::asset('assets/img/brant.jpg') }}" alt="">
               </div>
               <div>
                  <div class="small text-gray-500">BSIT</div>
                  <span class="font-weight-bold">Brant Uy</span>
               </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
         </div>
      </li>
      <div class="topbar-divider d-none d-sm-block"></div>
      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->firstname}} {{Auth::user()->lastname}} </span>                           
         </a>
         <!-- Dropdown - User Information -->
         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">                            
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>
         </div>
      </li>
   </ul>
</nav>