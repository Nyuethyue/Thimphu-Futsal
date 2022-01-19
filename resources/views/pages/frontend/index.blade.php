@extends('layouts.frontend.app')

@section('content')
    <div id="app">
        <home />
    </div>
    <!-- <header>
        <nav class="navbar navbar-expand-lg navigation-wrap">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/futsal_logo.jpg" alt="logo">
                </a>
                <button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toogle navigation">
                    <i class="fas fa-stream navbar-toogler-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#home">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Services</a>
                        </li>
                        <li><a href="{{ route('login') }}">
                        <button class="btn btn-primary">BOOK NOW</button>
                        </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> -->
@endsection