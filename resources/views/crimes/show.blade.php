@extends('layouts.web')

@section('content')
<section class="content">
    <div class="content__inner content__inner--sm">
        <header class="content__title">
            <h1>Malinda Hollaway</h1>
            <small>Web/UI Developer, Edinburgh, Scotland</small>

            <div class="actions">

            @foreach ($crimes as $st)
            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="crimes/{{ $st->id }}/edit" class="dropdown-item">Edit</a>
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
                <p>NAME: {{$st->reportedBy}}</p>
                <p>{{$st->date}}</p>

                <ul class="icon-list">
                    <li><i class="zmdi zmdi-email"></i>{{$st->email}}</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-body__title mb-4">Information About {{$st->reportedBy}}</h4>

                <p>NAME: {{$st->reportedBy}}</p>
                <p>ROLE: {{$st->date}}</p>
                <p>GENDER: {{$st->location}}</p>


                <p>WHATHAPPENED:    {{$st->whatHappened}}.</p>

                <br>

                <h4 class="card-body__title mb-4">Contact Information</h4>

                <ul class="icon-list">
                  <li><i class="zmdi zmdi-photo"></i>NAME: {{$st->}}</li>
                  <li><i class="zmdi zmdi-email"></i>{{$st->}}</li>
                  <li><i class="zmdi zmdi-facebook"></i>@: {{$st->}}</li>
                  <li><i class="zmdi zmdi-twitter"></i>@: {{$st->}}</li>
                  <li><i class="zmdi zmdi-pin"></i>{{$st->}}</li>
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
