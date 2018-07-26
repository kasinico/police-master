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

        @foreach ($staff as $st)
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

                <form method="POST" action="{{ route('staff.update', $st->id) }}" enctype="multipart/form-data">
                  {{ method_field('PATCH')}}
                  @csrf
                <div class="form-group">
                  <label>Username</label>
                    <input type="text" name="name" value="{{$st->name}}" class="form-control">
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                  <label>Email</label>
                    <input type="email" name="email" class="form-control">
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                  <label>Gender</label>
                  <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="gender" value="M" class="custom-control-input">
                       <label class="custom-control-label" for="gender">Male</label>
                  </div>

                  <div class="clearfix mb-2"></div>

                  <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="gender" value="F" class="custom-control-input">
                        <label class="custom-control-label" for="gender">Female</label>
                  </div>
                  <i class="form-group__bar"></i>
              </div>

                <div class="form-group">
                  <label>Password</label>
                    <input id="password" type="password" name="password" class="form-control">
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                  <label>Password Confirmation</label>
                    <input id="password-confirm" type="password" name="password_confirmation" class="form-control">
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                    <label>Police Post</label>

                    <select class="select2" name="location">
                        <option></option>
                        <option value="Makindye">Police Post 1</option>
                        <option>Scion</option>
                        <option>Daihatsu</option>
                        <option>Hino</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="select">
                      <label>Role</label>
                        <select class="form-control" name="role">
                            <option></option>
                            <option value="2">Police Administrator</option>
                            <option value="3">Police Supervisor</option>
                            <option value="4">Police Staff</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                  <label>User profile picture</label>
                    <input type="file" class="form-control" name="image" placeholder="User profile picture">
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
