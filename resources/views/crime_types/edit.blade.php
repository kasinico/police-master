@extends('layouts.web')

@section('content')
  <section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>Update staff details</h1>

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

        @foreach ($crime_types as $st)
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update details for {{$st->name}}</h4>
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

                <form method="POST" action="{{ route('crime_types.update', $st->id) }}" enctype="multipart/form-data">
                  {{ method_field('PATCH')}}
                  @csrf
                  <div class="form-group">
                    <label>Name</label>
                      <input type="text" name="name" placeholder="full name" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>crime type</label>
                    <input type="text" name="crimeType" placeholder="please indicate crime type" class="form-control">
                    <i class="form-group__bar"></i>
                </div>


                  <div class="form-group">
                    <label>motor vehichle picture</label>
                      <input type="file" class="form-control" name="image" placeholder="picture">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>occupation</label>
                      <input type="text" name="occupation" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>Telphone Contact</label>
                      <input type="text" name="contact" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>Residential Address/ crime scene</label>
                      <input type="text" name="address" class="form-control">
                      <i class="form-group__bar"></i>
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
                    <label>License plate</label>
                      <input type="text" name="license" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>Motor vehicle manufacture</label>
                      <input type="text" name="make" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>Year of Mode</label>
                      <input type="text" name="model" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>Insurance</label>
                      <input type="text" name="insurance" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>Engine Code</label>
                      <input type="text" name="engine" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>Chasis</label>
                      <input type="text" name="chasis" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>Engine Size</label>
                      <input type="text" name="engine_size" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>

                  <div class="form-group">
                    <label>transimission</label>
                      <input type="text" name="transimission" class="form-control">
                      <i class="form-group__bar"></i>
                  </div>


                  <!--fuel-->
                  <div class="form-group">
            <label>FUEL CONSUMPTION</label>
              <input type="text" name="fuel" class="form-control">
                <i class="form-group__bar"></i>
          </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <i class="form-group__bar"></i>
                </div>
                @endforeach
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
