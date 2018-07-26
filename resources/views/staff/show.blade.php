@extends('layouts.web')

@section('content')
<section class="content">
    <div class="content__inner content__inner--sm">
        <header class="content__title">
            <h1>Malinda Hollaway</h1>
            <small>Web/UI Developer, Edinburgh, Scotland</small>

            <div class="actions">

            @foreach ($staff as $st)
            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="staff/{{ $st->id }}/edit" class="dropdown-item">Edit</a>
                </div>
            </div>
        </div>
        </header>

        <div class="card profile">
            <div class="profile__img">
                <img src="{{ asset('uploads/'.$st->image) }}" alt="">

                <a href="{{ URL('staff/'.$st->id.'/edit') }}" class="zmdi zmdi-camera profile__img__edit"></a>
            </div>

            <div class="profile__info">
						                <p>STAFF NUMBER: {{$st->id}}</p>

                <p>NAME: {{$st->name}}</p>
                <p>{{$st->image}}</p>

                <ul class="icon-list">
                    <li><i class="zmdi zmdi-email"></i>{{$st->email}}</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-body__title mb-4">Information About {{$st->name}}</h4>

                <p>NAME: {{$st->name}}</p>
                <p>ROLE: {{$st->role}}</p>
                <p>GENDER: {{$st->gender}}</p>


                <p>Vestibulum tincidunt imperdiet egestas. In in nunc vitae elit tincidunt tristique id eu justo. Quisque gravida maximus orci, vulputate pharetra mauris commodo at. Mauris eget fermentum ipsum, quis faucibus neque. Fusce eleifend sapien sit amet convallis rhoncus. Proin commodo lacinia lectus, et tempus turpis.</p>

                <br>

                <h4 class="card-body__title mb-4">Contact Information</h4>

                <ul class="icon-list">
                  <li><i class="zmdi zmdi-photo"></i>NAME: {{$st->name}}</li>
                  <li><i class="zmdi zmdi-email"></i>{{$st->email}}</li>
                  <li><i class="zmdi zmdi-facebook"></i>@: {{$st->name}}</li>
                  <li><i class="zmdi zmdi-twitter"></i>@: {{$st->name}}</li>
                  <li><i class="zmdi zmdi-pin"></i>{{$st->location}}</li>
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
