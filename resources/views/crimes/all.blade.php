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
        <h1>VIEW ALL KIND OF CRIMES REPORTED TO THE POLICE STATION</h1>

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
            <h4 class="card-title">All  CRIMES REPORTED</h4>

            <div class="table-responsive">
              <table id="data-table" class="table table-bordered">
                              <thead class="thead-default">
                                  <tr>
									  <th>id</th>
                                      <th>Crime_type</th>
                                      <th>Date</th>
                                      <th>Location</th>
                                      <th>whatHappened</th>
                                      <th>reportedBy</th>
                                      <th>created_at</th>




                                      <th>Options</th>
                                  </tr>
                              </thead>

                              @if ($crimes!= NULL)
                              @foreach ($crimes as $st)
                              <tbody>
                                  <tr>
			                         <td>{{$st->id}}</td>
                                     <td>{{$st->crime_type}}</td>
                                      <td>{{$st->date}}</td>
                                      <td>{{$st->location}}</td>
                                      <td>{{$st->whatHappened}}</td>
                                      <td>{{$st->reportedBy}}</td>
                                      <td>{{$st->created_at}}</td>




                                      <td>
                                        <button class="btn btn-secondary btn-sm" data-toggle="dropdown">Options</button>
                                        <div class="dropdown-menu">
                                            <a href="crime/{{ $st->id }}/show" class="dropdown-item">Show</a>
                                            <a href="crimes/{{ $st->id }}/edit" class="dropdown-item">Edit</a>
                                            <a href="crimes/{{ $st->id }}/delete" class="dropdown-item">Delete</a>
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
