<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3" href="{{ route('home') }}"> 
      <img class="me-3" src="/img/logo.jpg" alt="" />
      <span class="brand-text font-weight-light">Thimphu Futsal</span>
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
        <li class="nav-item px-2" data-anchor="data-anchor">
          <a class="nav-link fw-medium active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item px-2" data-anchor="data-anchor">
          <a class="nav-link" href="#events">About Us</a>
        </li>
        <li class="nav-item px-2" data-anchor="data-anchor">
          <a class="nav-link" href="#services">Services </a>
        </li>
        <li class="nav-item px-2" data-anchor="data-anchor">
          <a class="nav-link" href="#testimonial">Contact Us</a>
        </li>
        <li class="nav-item px-2" data-anchor="data-anchor">
          <a class="nav-link" href="#country">Gallery </a>
        </li>
      </ul>
      <a class="nav-link" href="{{ route('booking') }}">
        <button class="btn btn-outline-primary order-0" type="submit">BOOK NOW</button>
      </a>
    </div>
  </div>
</nav>