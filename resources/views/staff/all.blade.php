@extends('layouts.web')

@section('content')
<div class="page-loader">
    <div class="page-loader__spinner">
        <svg viewBox="25 25 50 50">
            <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<section class="content">
    <header class="content__title">
        <h1>STAFF TABLE</h1>

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
            <h4 class="card-title">All Police staff</h4>

            <div class="table-responsive">
              <table id="data-table" class="table table-bordered">
                              <thead class="thead-default">
                                  <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Location</th>
                                      <th>Role</th>
                                      <th>gender</th>
                                      <th>image</th>
                                      <th>created_at</th>




                                      <th>Options</th>
                                  </tr>
                              </thead>
                              
                              @if ($staff!= NULL)
                              @foreach ($staff as $st)
                              <tbody>
                                  <tr>
                                      <td>{{$st->name}}</td>
                                      <td>{{$st->email}}</td>
                                      <td>{{$st->location}}</td>
                                      <td>{{$st->role}}</td>
                                      <td>{{$st->gender}}</td>
                                      <td>{{$st->image}}</td>
                                      <td>{{$st->created_at}}</td>




                                      <td>
                                        <button class="btn btn-secondary btn-sm" data-toggle="dropdown">Options</button>
                                        <div class="dropdown-menu">
                                            <a href="staff/{{ $st->id }}/show" class="dropdown-item">Show</a>
                                            <a href="staff/{{ $st->id }}/edit" class="dropdown-item">Edit</a>
                                            <a href="mailto:kasiryenicholas@gmail.com" class="dropdown-item">Email</a>
                                        </div>
                                      </td>
                                  </tr>
                              </tbody>
                              @endforeach
                              @endif
                          </table>
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
