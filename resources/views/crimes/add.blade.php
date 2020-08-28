@extends('layouts.web')

@section('content')
  <section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>Recording crime type</h1>

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
                <h4 class="card-title">Fill in the required details to Record a new crime type</h4>
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
                <form method="POST" action="{{ route('crimes.store') }}" enctype="multipart/form-data">
                  @csrf
		<div class="row">
					<div class="col-sm-4">

                <div class="form-group">
                  <label>crime_type</label>
                    <input type="text" name="crime_type" placeholder="crime offence" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>

			<div class="col-sm-4">

                <div class="form-group">
                  <label>Date </label>
                    <input type="date" class="form-control" name="date" placeholder="">
                    <i class="form-group__bar"></i>
                </div>
				</div>

							<div class="col-sm-4">

                <div class="form-group">
                  <label>location</label>
                    <input type="text" name="location" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
				</div>
		</div>

                <div class="form-group">
                  <label>whatHappened</label>
                    <textarea autofocus="text" type="text" rows="5" name="whatHappened" class="form-control"></textarea>
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                  <label>reportedBy </label>
                    <input type="text" name="reportedBy" class="form-control">
                    <i class="form-group__bar"></i>
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
</section>
@endsection
