@extends('layouts.web')

@section('content')
<section class="content">
    <div class="content__inner content__inner--sm">
        <header class="content__title">
            <h1>Malinda Hollaway</h1>
            <small>Web/UI Developer, Edinburgh, Scotland</small>

            <div class="actions">

            @foreach ($crime_types as $st)
            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="crime_types/{{ $st->id }}/edit" class="dropdown-item">Edit</a>
                </div>
            </div>
        </div>
        </header>

        <div class="card profile">
          <div class="profile__img">
              <img src="{{ asset('uploads/'.$st->image) }}" alt=""><img src="/img/3.JPG">

              <a href="{{ URL('crime_types/'.$st->id.'/edit') }}" class="zmdi zmdi-camera profile__img__edit"></a>
          </div>




            <div class="profile__info">
			                <p>REFRENCE NUMBER: {{$st->id}}</p>

                <p>NAME: {{$st->name}}</p>

                <ul class="icon-list">
                    <li><i class="zmdi zmdi-email"></i>{{$st->occupation}}</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-body__title mb-4">Information About lost/found vehichle</h4>

                <p>NAME: {{$st->name}}</p>

                <p>Vestibulum tincidunt imperdiet egestas. In in nunc vitae elit tincidunt tristique id eu justo. Quisque gravida maximus orci, vulputate pharetra mauris commodo at. Mauris eget fermentum ipsum, quis faucibus neque. Fusce eleifend sapien sit amet convallis rhoncus. Proin commodo lacinia lectus, et tempus turpis.</p>

                <br>

                <h4 class="card-body__title mb-4">more Information</h4>

                <ul class="icon-list">
                  <li><i class="zmdi zmdi-"></i>NAME:  <b>{{$st->name}}</b></li>
                  <li><i class="zmdi zmdi-"></i>CRIME TYPE COMMITTED:  <b> {{$st->crimeType}}</b></li>
                  <li><i class="zmdi zmdi-"></i>MOTOR IMAGE  <b>{{$st->image}}</b></li>
                  <li><i class="zmdi zmdi-"></i>LICENSE PLATE:   <b>{{$st->license}}</b></li>
                  <li><i class="zmdi zmdi-"></i>LOST/ FOUND:   <b>{{$st->gender}}</b></li>
                  <li><i class="zmdi zmdi-"></i>TRANSIMISSION CO.  <b> {{$st->transimission}}</b></li>
                  <li><i class="zmdi zmdi-"></i>FUEL TYPE:   <b>{{$st->fuel}}</b></li>
                </ul>
                @endforeach
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
