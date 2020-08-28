@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">welcome to VCIT SYSTEM</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! VEHICLE INFORMATION TRACKING SYSTEM
                    <div>click to your
                      <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
