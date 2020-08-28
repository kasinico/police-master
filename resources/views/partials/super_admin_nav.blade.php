<aside class="sidebar">
    <div class="scrollbar-inner">
        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                <div>
                    <div class="user__name">Malinda Hollaway</div>
                    <div class="user__email">malinda-h@gmail.com</div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"></a>
                <a class="dropdown-item" href="{{ route('login') }}">Logout</a>
            </div>
        </div>

        <ul class="navigation">
            <li class="navigation__active"><a href="{{ url('/dashboard') }}"><i class="zmdi zmdi-home"></i> Home</a></li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-view-week"></i> Crime Types</a>

                <ul>
                    <li><a href="{{ route('crime_types.add') }}">Add Crime Types</a></li>
                    <li><a href="{{ route('crime_types.all') }}">View Crimes Types</a></li>
                </ul>
            </li>



            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-widgets"></i> Crimes & Records</a>

                <ul>
                    <li><a href="{{ route('crimes.add') }}">Report Crimes</a></li>
                    <li><a href="{{ route('crimes.all') }}">View Crimes Records</a></li>

                    <li><a href="{{ route('vehicles.add') }}">Vehicles Involved</a></li>
                </ul>
            </li>



            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-collection-text"></i> Staff</a>

                <ul>
                    <li><a href="{{ url('staff/add') }}">Add Staff</a></li>
                    <li><a href="{{ url('/staff') }}">View staff</a></li>
                    <li><a href="form-validation.html"></a></li>
                </ul>
            </li>

            

            <li class=" container">
            </li>
			<li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-swap-alt"></i>Advice for car owners</a>

                <ul>
                    <li><a href="{{ url('Advice') }}">Advice  </a></li>
                </ul>
            </li>
			

            <li class="navigation__sub">
			  <a href="#"><i class="zmdi zmdi-group-work"></i>  EMERGENCY</a>
			  <ul>
               <li> <a href="mailto:basiimamercy@gmail.com"><i class="zmdi zmdi"></i> INQURIES</a></li>
			    <li><a href="mailto:kasiryenicholas@gmail.com"><i class="zmdi zmdi"></i>HELP-LINE</a></li>
				</ul>

            </li>

        </ul>
        
    </div>
</aside>
