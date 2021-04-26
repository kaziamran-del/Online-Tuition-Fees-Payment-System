<div class="nav-side-menu">
    <div class="brand" style="font-size: 20px;">Admin Panel</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="{{url('home')}}" class=" @yield('dashboard')">
                    <i class="fas fa-chart-line"></i> Dashboard
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class=" @yield('department')">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Department</a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="{{route('admin.department.cse')}}" class=" @yield('department')">CSE</a></li>
                    <li><a href="#">BBA</a></li>
                    <li><a href="#">EEE</a></li>
                    <li><a href="#">English</a></li>
                </ul> 

                <li>
                  <a href="{{url('/')}}" target="_blank">
                  <i class="fas fa-eye"></i> Visit Site
                  </a>
                </li>


                <li>
                  <a href="{{route('admin.pages.index')}}" class=" @yield('student')">
                  <i class="fa fa-user fa-lg"></i> Student Data Table
                  </a>
                </li>

                <li>
                  <a href="{{route('admin.payment.index')}}" class=" @yield('payment')">
                    <i class="fa fa-users fa-lg"></i> Payment
                  </a>
                </li>

                <li>
                  <a href="{{route('admin.paymentRecord.index')}}" class=" @yield('record')">
                   <i class="fas fa-shopping-bag"></i> Payment Record
                  </a>
                </li>

                <li>
                  <a href="{{route('admin.registration.index')}}" class=" @yield('regfee')">
                  <i class="fab fa-discourse"></i> Registration Fee
                  </a>
                </li>

                <li>
                  <a href="{{route('admin.shortCourse.index')}}" class=" @yield('shortCourse')">
                  <i class="fas fa-random"></i></i> Short Course Info
                  </a>
                </li>

                <li>
                  <a href="{{route('admin.lateFine.index')}}" class=" @yield('lateFine')">
                  <i class="far fa-clock"></i> Late Fine
                  </a>
                </li>
            </ul>
     </div>
</div>  

