@extends('layouts.web')

@section('content')
  <section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>Add Vehicle crime type</h1>

            <div class="actions">
            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Refresh</a>
                    <a href="#" class="dropdown-item">Manage Widgets</a>
                    <a href="#" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
        </header>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Fill in the required details to add a new Vehicle crime type</h4>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                      <strong>{!! Session::get('success') !!}</strong>
                    </div>
                @endif

                @if(Session::has('error'))
                    <div class="alert alert-danger">
                      <strong>{!! Session::get('error') !!}</strong>
                    </div>
                @endif

                      @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span><br>
                    @endforeach
                </div>
              @endif
                <form method="POST" action="{{ route('crime_types.store') }}" enctype="multipart/form-data">
                  @csrf
                <div class="form-group">
                  <label>Name</label>
                    <input type="text" name="name" placeholder="name" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
	    <div class="row">
		    <div class="col-sm-4">

                <div class="form-group">
                  <label>crime type</label>
                  <input type="text" name="crimeType" placeholder="crime type" class="form-control">
                  <i class="form-group__bar"></i>
              </div>
			  </div>

            <div class="col-sm-4">
                <div class="form-group">
                  <label>motor vehichle picture</label>
                    <input type="file" class="form-control" name="image" placeholder="User profile picture">
                    <i class="form-group__bar"></i>
                </div>
				</div>
				
				<div class="col-sm-4">
                <div class="form-group">
                  <label>occupation</label>
                    <input type="text" name="occupation" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>
				
			<div class="col-sm-4">
                <div class="form-group">
                  <label>Telphone Contact</label>
                    <input type="text" name="contact" placeholder="070XXXXXXXX" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>
		

                <div class="form-group">
                  <label>Residential Address/ crime scene</label>
                    <input type="text" name="address" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
		</div>
		

                <div class="form-group">
                  <label>Lost/ missing or Found vehicle</label>
                  <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="gender" value="L" class="custom-control-input">
                       <label class="custom-control-label" for="gender">Lost/missing</label>
                  </div>

                  <div class="clearfix mb-2"></div>

                  <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="gender" value="F" class="custom-control-input">
                        <label class="custom-control-label" for="gender">Found</label>
                  </div>
                  <i class="form-group__bar"></i>
              </div>
			 
<div class="form-group">
                  <label>Gender</label>
                    <input type="text" name="gender" placeholder="M / F" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
	    <div class="row">
      
			<div class="col-sm-4">

                <div class="form-group">
                  <label>License plate</label>
                    <input type="text" name="license" placeholder="must enter a valid license" class="form-control">
                    @if ($errors->has('license'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('license') }}</strong>
                                    </span>
                                @endif

					<i class="form-group__bar"></i>
                </div>
				</div>
				<div class="col-sm-4">
                <div class="form-group">
                  <label>Motor vehicle manufacture</label>
                    <input type="text" name="make" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>
				
				<div class="col-sm-4">
                <div class="form-group">
                  <label>Year of Mode</label>
                    <input type="text" name="model" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>
		</div>
		
		<div class="row">
		
			<div class="col-sm-4">
                <div class="form-group">
                  <label>Insurance</label>
                    <input type="text" name="insurance" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>
			<div class="col-sm-4">

                <div class="form-group">
                  <label>Engine Code</label>
                    <input type="text" name="engine" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>
			<div class="col-sm-4">

                <div class="form-group">
                  <label>Chasis</label>
                    <input type="text" name="chasis" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>
		</div>

		<div class="row">
					<div class="col-sm-4">

                <div class="form-group">
                  <label>Engine Size</label>
                    <input type="text" name="engine_size" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>
				
			<div class="col-sm-4">

                <div class="form-group">
                  <label>transimission</label>
                    <input type="text" name="transimission" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>


                <!--fuel-->
							<div class="col-sm-4">

                <div class="form-group">
          <label>FUEL CONSUMPTION</label>
            <input type="text" name="fuel" class="form-control">
              <i class="form-group__bar"></i>
        </div>
		</div>

                <input type="hidden" name="deleted" value="N" class="form-control">

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <i class="form-group__bar"></i>
                </div>

              </form>

            </div>

        </div>

    </div>

    <footer class="footer hidden-xs-down">
        <p>© Material Admin Responsive. All rights reserved.</p>

        <ul class="nav footer__nav">
            <a class="nav-link" href="#">Homepage</a>

            <a class="nav-link" href="#">Company</a>

            <a class="nav-link" href="#">Support</a>

            <a class="nav-link" href="#">News</a>

            <a class="nav-link" href="#">Contacts</a>
        </ul>
    </footer>
	<script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
		 <!-- Vendors: Data tables -->
        <script src="vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
        
</section>
@endsection
