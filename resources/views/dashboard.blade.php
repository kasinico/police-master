@extends('layouts.web')

@section('content')

<section class="content">
    <header class="content__title">
        <h1>Dashboard</h1>
        <small>Welcome to the Vehicle Crime Tracking System</small>

        <div class="actions">
            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ route('login') }}" class="dropdown-item">To Logout</a>

                    <a href="#" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>
	

    <div class="row quick-stats">
        

<div class="card">
                        <div class="card-body">
                            <h4 class="card-title">With controls</h4>
                            <h6 class="card-subtitle">Adding in the previous and next controls:</h6>

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="demo/img/carousel/c-1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="demo/img/carousel/c-2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="demo/img/carousel/c-3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    </div>
					
					<div class="card">
                        <div class="card-body">
                            <h4 class="card-title">With controls</h4>
                            <h6 class="card-subtitle">Adding in the previous and next controls:</h6>

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="demo/img/carousel/baseline.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="demo/img/carousel/c-2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="demo/img/carousel/c-3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    </div>
		<div class="card">
	       <div class="card-body">
         		   <h4 class="card-title">Database Statistics</h4>
				   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">

At the end of December 2017:

    7.19 million records of reported stolen motor vehicles;
    Over 256 million searches of the database during 2015;
    126 countries share their national stolen vehicle database records with INTERPOL;
    Around 118,000 motor vehicles were identified worldwide during the year through the SMV database.
	</div>
	</div>
	</div>
	</div>
	</div>


        

        
    </div>

    <div data-columns>

        <div class="card widget-calendar">
            <div class="widget-calendar__header">
                <div class="widget-calendar__year"></div>
                <div class="widget-calendar__day"></div>

                <div class="actions actions--inverse">
                    <a href="calendar.html" class="actions__item"><i class="zmdi zmdi-refresh-alt"></i></a>
                    <a href="calendar.html" class="actions__item"><i class="zmdi zmdi-plus"></i></a>
                </div>
            </div>

            <div class="widget-calendar__body"></div>
        </div>

        <div class="card todo">
            <div class="card-body">
                <h4 class="card-title">Police Notice</h4>
                <h6 class="card-subtitle">Venenatis portauam Inceptos ameteiam</h6>
            </div>

            <div class="listview">
                <div class="listview__item">
                    <div class="custom-control custom-control--char todo__item">
                        <input type="checkbox" class="custom-control-input" id="todo-1">
                        <label class="custom-control-label-char" for="todo-1">
                            <i class="bg-amber">G</i>
                            <div class="todo__info">
                                <span>Genocide, crimes against humanity and war crimes are the most serious crimes of concern to the international community.</span>
                                <small>Today at 8.30 AM</small>
                            </div>

                            
                        </label>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Mark as Read</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="custom-control custom-control--char todo__item">
                        <input  type="checkbox" class="custom-control-input" id="todo-2">
                        <label class="custom-control-label-char" for="todo-2">
                            <i class="bg-light-blue">N</i>
                            <div class="todo__info">
                                <span>Terrorism poses a grave threat to national security and the lives of individuals around the world</span>
                                <small>Today at 12.30 PM</small>
                            </div>

                            
                        </label>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Mark as Read</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="custom-control custom-control--char todo__item">
                        <input  type="checkbox" class="custom-control-input" id="todo-4">
                        <label class="custom-control-label-char" for="todo-4">
                            <i class="bg-lime">I</i>
                            <div class="todo__info">
                                <span>Vehicle crime is a highly organized criminal activity affecting all regions 
								of the whole world and with clear links to organized crime and terrorism.</span>
                                <small> at 08.00 AM</small>
                            </div>

                            
                        </label>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Mark as Read</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#todos.html" class="view-more">View More</a>
            </div>
        </div>
    </div>

    <footer class="footer hidden-xs-down">
        <p>© Material Admin Responsive. All rights reserved to Kasirye Nicholas & Basiima Mercy.</p>

        <ul class="nav footer__nav">
            <a class="nav-link" href="#">Homepage</a>

            <a class="nav-link" href="#">Company</a>

            <a class="nav-link" href="#">Support</a>

            <a class="nav-link" href="#">News</a>

            <a class="nav-link" href="#">Contacts</a>
        </ul>
    </footer>
</section>
@endsection
