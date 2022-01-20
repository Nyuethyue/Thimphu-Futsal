@extends('layouts.frontend.app')

@section('content')
<section class="py-0" id="home">
  <div class="bg-holder d-none d-md-block" style="background-image:url(img/gallery/hero.jpg);background-position:right bottom;background-size:contain;margin-top:5.625rem;">
  </div>
        <!--/.bg-holder-->

    <div class="bg-holder d-block d-md-none" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;margin-top:5.625rem;">
    </div>
        <!--/.bg-holder-->

    <div class="container">
          <div class="row align-items-center min-vh-md-75 mt-7">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
              <h1 class="mt-6 mb-sm-4 display-4 fw-light lh-sm fs-4 fs-lg-6 fs-xxl-7">We Help to <span class="text-primary">Build</span><br class="d-block d-lg-none d-xl-block" />Your Dream </h1>
              <p class="mb-5 fs-1 lh-lg">We are always availed to consult on taking your higher education to the next level so you can stay competitive in the global world.</p><a class="btn btn-lg btn-primary hover-top btn-glow" href="#">Apply Online
                <svg class="bi bi-arrow-right-short ms-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                </svg></a>
              <div class="mt-5 mt-xl-6">
                <ul class="list-unstyled list-inline mb-0">
                  <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                      <svg class="bi bi-facebook text-facebook" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                      </svg></a></li>
                  <li class="list-inline-item me-3"><a href="#!">
                      <svg class="bi bi-twitter text-twitter" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                      </svg></a></li>
                  <li class="list-inline-item me-3"><a href="#!">
                      <svg class="bi bi-instagram text-instagram text-youtube" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                      </svg></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
</section>

<!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 py-5">

        <div class="container">
          <div class="row">
            <div class="col-12 mx-auto align-items-center text-center">
              <h6 class="mb-4 text-uppercase fw-light fs-1 mb-6">Featured Universities</h6>
              <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/mac-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/charles-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/newcastle-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/la-trobe-uni.png" alt="universities" /></div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/mac-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/charles-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/newcastle-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/la-trobe-uni.png" alt="universities" /></div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="1000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/mac-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/charles-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/newcastle-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/la-trobe-uni.png" alt="universities" /></div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 justify-content-center">
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/mac-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/charles-uni.png" alt="universities" /></div>
                      <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/gallery/newcastle-uni.png" alt="universities" /></div>
                    </div>
                  </div>
                </div>
                <div class="row mt-5 flex-center">
                  <div class="col-auto position-relative z-index-2">
                    <ol class="carousel-indicators">
                      <li class="active mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                      <li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                      <li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                      <li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="services">

        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center mb-4">
              <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Our Services</h5>
              <p class="mb-5">Executive Trade International is an University Application Centre, guiding Bangladeshi students to Australian, British, Canadian and Irish universities!</p>
            </div>
          </div>
          <div class="row flex-center h-100">
            <div class="col-xl-9">
              <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/career.png" height="60" alt="services" />
                      <div class="card-body">
                        <h6 class="fw-light fs-1 heading-color">Career Counselling</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/admission.png" height="60" alt="services" />
                      <div class="card-body">
                        <h6 class="fw-light fs-1 heading-color">University Admissions</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/visa.png" height="60" alt="services" />
                      <div class="card-body">
                        <h6 class="fw-light fs-1 heading-color">Visa COnsultancy</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/accommodation.png" height="60" alt="services" />
                      <div class="card-body">
                        <h6 class="fw-light fs-1 heading-color">Accommodation</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/departure.png" height="60" alt="services" />
                      <div class="card-body">
                        <h6 class="fw-light fs-1 heading-color">Pre-Departure Briefing</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
@endsection