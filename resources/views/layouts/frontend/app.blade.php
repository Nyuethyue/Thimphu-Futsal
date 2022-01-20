
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Thimphu Futsal</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="icon" href="{{ url('img/futsal_logo.jpg') }}">
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff"> -->

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.min.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <!-- ===============================================-->
      <!--    Navbar start  -->
        @include('layouts.frontend.inc.navbar')
      <!--    Navbar  End  -->
      <!-- ===============================================-->

      @yield('content')


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <div id="services">
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
                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
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
                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
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
                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
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
                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
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
                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
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
      </div><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <div class="bg-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center my-5">
              <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-4">News</h5>
              <p class="mb-3">Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
            </div>
          </div>
          <div class="row flex-center h-100">
            <div class="col-xl-9">
              <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow card-span"><img class="card-img-top" src="assets/img/gallery/news-1.png" alt="news" />
                    <div class="card-body"><svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                      </svg><span class="fs--1">17 April 2021</span>
                      <h5 class="fs-lg-1 my-3">Come On In. The Water’s Fine (Mostly).</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow card-span"><img class="card-img-top" src="assets/img/gallery/news-2.png" alt="news" />
                    <div class="card-body"><svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                      </svg><span class="fs--1">17 April 2021</span>
                      <h5 class="fs-lg-1 my-3">Trump Lays Plans to Reverse Obama’s Climate Change</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow card-span"><img class="card-img-top" src="assets/img/gallery/news-3.png" alt="news" />
                    <div class="card-body"><svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                      </svg><span class="fs--1">17 April 2021</span>
                      <h5 class="fs-lg-1 my-3">How a Little Bit of Hydra Regrows a Whole Animal</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center my-3"><button class="btn btn-lg btn-primary fw-light" type="submit">Join Here<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                </svg></button></div>
          </div>
        </div><!-- end of .container-->
      </div><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <div id="events">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center mb-4">
              <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Upcoming University Events</h5>
              <p class="mb-3">Executive Trade International is an University Application Centre, guiding Bangladeshi students to Australian, British, Canadian and Irish universities!</p>
            </div>
          </div>
          <div class="row flex-center h-100">
            <div class="col-xl-9">
              <div class="carousel slide" id="carouselEvents" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                          <div class="text-center text-md-start card-hover">
                            <div class="card-body">
                              <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1"><span class="fw-medium fs-1 mb-2">23</span><br>Dec</span>
                                <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">Macquarie University, Sydney, Australia</h6>
                              </div>
                              <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                              <div class="d-flex flex-between-center">
                                <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg></a></div>
                                <div class="d-flex align-items-center"><svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                                  </svg>
                                  <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                          <div class="text-center text-md-start card-hover">
                            <div class="card-body">
                              <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1"><span class="fw-medium fs-1 mb-2">17</span><br>Mar</span>
                                <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">University Admissions</h6>
                              </div>
                              <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                              <div class="d-flex flex-between-center">
                                <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg></a></div>
                                <div class="d-flex align-items-center"><svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                                  </svg>
                                  <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                          <div class="text-center text-md-start card-hover">
                            <div class="card-body">
                              <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1"><span class="fw-medium fs-1 mb-2">26</span><br>Mar</span>
                                <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">Visa COnsultancy</h6>
                              </div>
                              <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                              <div class="d-flex flex-between-center">
                                <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg></a></div>
                                <div class="d-flex align-items-center"><svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                                  </svg>
                                  <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 4:00 PM</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                          <div class="text-center text-md-start card-hover">
                            <div class="card-body">
                              <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1"><span class="fw-medium fs-1 mb-2">15</span><br>Apr</span>
                                <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">Accommodation</h6>
                              </div>
                              <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                              <div class="d-flex flex-between-center">
                                <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg></a></div>
                                <div class="d-flex align-items-center"><svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                                  </svg>
                                  <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 5:00 PM</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                          <div class="text-center text-md-start card-hover">
                            <div class="card-body">
                              <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1"><span class="fw-medium fs-1 mb-2">23</span><br>Dec</span>
                                <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">Pre-Departure Briefing</h6>
                              </div>
                              <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                              <div class="d-flex flex-between-center">
                                <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg></a></div>
                                <div class="d-flex align-items-center"><svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                                  </svg>
                                  <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 3:00 PM</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                          <div class="text-center text-md-start card-hover">
                            <div class="card-body">
                              <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1"><span class="fw-medium fs-1 mb-2">23</span><br>Dec</span>
                                <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">Macquarie University, Sydney, Australia</h6>
                              </div>
                              <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                              <div class="d-flex flex-between-center">
                                <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg></a></div>
                                <div class="d-flex align-items-center"><svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                                  </svg>
                                  <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                          <div class="text-center text-md-start card-hover">
                            <div class="card-body">
                              <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1"><span class="fw-medium fs-1 mb-2">17</span><br>Mar</span>
                                <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">University Admissions</h6>
                              </div>
                              <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                              <div class="d-flex flex-between-center">
                                <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg></a></div>
                                <div class="d-flex align-items-center"><svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                                  </svg>
                                  <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                          <div class="text-center text-md-start card-hover">
                            <div class="card-body">
                              <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1"><span class="fw-medium fs-1 mb-2">23</span><br>Dec</span>
                                <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">Macquarie University, Sydney, Australia</h6>
                              </div>
                              <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                              <div class="d-flex flex-between-center">
                                <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button">Learn more<svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg></a></div>
                                <div class="d-flex align-items-center"><svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                                  </svg>
                                  <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3 flex-center">
                  <div class="col-auto position-relative z-index-2">
                    <ol class="carousel-indicators">
                      <li class="active mx-2" data-bs-target="#carouselEvents" data-bs-slide-to="0"></li>
                      <li class="mx-2" data-bs-target="#carouselEvents" data-bs-slide-to="1"></li>
                      <li class="mx-2" data-bs-target="#carouselEvents" data-bs-slide-to="2"></li>
                      <li class="mx-2" data-bs-target="#carouselEvents" data-bs-slide-to="3"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </div><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <div class="bg-100" id="country">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center my-5">
              <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Countries We Covered</h5>
              <p class="mb-3">Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
            </div>
          </div>
          <div class="row flex-center h-100">
            <div class="col-xl-9">
              <div class="carousel slide" id="carouselCountries" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-1.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Australia</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-2.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Canada</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-3.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Uk</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-1.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Australia</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-2.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Canada</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-3.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Uk</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-1.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Australia</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-2.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Canada</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-3.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Uk</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-1.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Australia</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-2.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Canada</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow card-span bg-100"><img class="card-img-top" src="assets/img/gallery/country-3.png" alt="news" />
                          <div class="card-body">
                            <h5 class="fs-lg-1 my-3 fw-light">Study in Uk</h5>
                            <p class="mb-0 fw-light lh-base">Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3 mb-7 flex-center">
                  <div class="col-auto position-relative z-index-2">
                    <ol class="carousel-indicators">
                      <li class="active mx-2" data-bs-target="#carouselCountries" data-bs-slide-to="0"></li>
                      <li class="mx-2" data-bs-target="#carouselCountries" data-bs-slide-to="1"></li>
                      <li class="mx-2" data-bs-target="#carouselCountries" data-bs-slide-to="2"></li>
                      <li class="mx-2" data-bs-target="#carouselCountries" data-bs-slide-to="3"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </div><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <div id="testimonial">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center my-5">
              <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-4">Testimonial</h5>
              <p class="mb-5">Torquem detraxit hosti et quidem faciunt, ut et negent satis esse appetendum, alterum. Si sine causa? quae fuerit causa, mox videro; interea hoc epicurus in liberos.</p>
            </div>
          </div>
          <div class="row flex-center h-100">
            <div class="col-xl-9">
              <div class="carousel slide" id="carouselTestimonials" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow card-span p-3">
                          <div class="card-body">
                            <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-1.png" alt="testimonials" />
                              <div class="flex-1 ms-4">
                                <h6 class="fw-light fs-lg-1 mb-1">Harrison Phillips</h6>
                                <p class="fw-normal mb-0 text-800">reporter</p>
                              </div>
                            </div>
                            <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow card-span p-3">
                          <div class="card-body">
                            <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-2.png" alt="testimonials" />
                              <div class="flex-1 ms-4">
                                <h6 class="fw-light fs-lg-1 mb-1">Ainara Vergara</h6>
                                <p class="fw-normal mb-0 text-800">Landscape</p>
                              </div>
                            </div>
                            <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow card-span p-3">
                          <div class="card-body">
                            <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-3.png" alt="testimonials" />
                              <div class="flex-1 ms-4">
                                <h6 class="fw-light fs-lg-1 mb-1">Niek Bove</h6>
                                <p class="fw-normal mb-0 text-800">Senior Developer</p>
                              </div>
                            </div>
                            <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow card-span p-3">
                          <div class="card-body">
                            <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-1.png" alt="testimonials" />
                              <div class="flex-1 ms-4">
                                <h6 class="fw-light fs-lg-1 mb-1">Harrison Phillips</h6>
                                <p class="fw-normal mb-0 text-800">reporter</p>
                              </div>
                            </div>
                            <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow card-span p-3">
                          <div class="card-body">
                            <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-2.png" alt="testimonials" />
                              <div class="flex-1 ms-4">
                                <h6 class="fw-light fs-lg-1 mb-1">Ainara Vergara</h6>
                                <p class="fw-normal mb-0 text-800">Landscape</p>
                              </div>
                            </div>
                            <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow card-span p-3">
                          <div class="card-body">
                            <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-3.png" alt="testimonials" />
                              <div class="flex-1 ms-4">
                                <h6 class="fw-light fs-lg-1 mb-1">Niek Bove</h6>
                                <p class="fw-normal mb-0 text-800">Senior Developer</p>
                              </div>
                            </div>
                            <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 justify-content-center">
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow card-span p-3">
                          <div class="card-body">
                            <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-1.png" alt="testimonials" />
                              <div class="flex-1 ms-4">
                                <h6 class="fw-light fs-lg-1 mb-1">Harrison Phillips</h6>
                                <p class="fw-normal mb-0 text-800">reporter</p>
                              </div>
                            </div>
                            <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow card-span p-3">
                          <div class="card-body">
                            <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-2.png" alt="testimonials" />
                              <div class="flex-1 ms-4">
                                <h6 class="fw-light fs-lg-1 mb-1">Ainara Vergara</h6>
                                <p class="fw-normal mb-0 text-800">Landscape</p>
                              </div>
                            </div>
                            <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-5 flex-center">
                  <div class="col-auto position-relative z-index-2">
                    <ol class="carousel-indicators">
                      <li class="active mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="0"></li>
                      <li class="mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="1"></li>
                      <li class="mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="2"></li>
                      <li class="mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="3"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </div><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <div class="py-6 bg-100">
        <div class="container">
          <div class="row flex-center">
            <div class="col-md-7 col-lg-6 offset-xl-1">
              <h1 class="fw-light text-center text-md-start fs-lg-3 fs-xl-4">Ready to chase your dreams?</h1>
            </div>
            <div class="col-md-4 text-center text-lg-end"> <a class="btn btn-lg btn-primary hover-top" href="#">Apply Online <svg class="bi bi-arrow-right-short ms-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                </svg></a></div>
          </div>
        </div><!-- end of .container-->
      </div><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <Footer> begin ============================-->
        @include('layouts.frontend.inc.footer')
      <!-- <Footer> close ============================-->
      <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html>