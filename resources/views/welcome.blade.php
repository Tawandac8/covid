<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Health Care</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>
    <!--::header part start::-->

    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>We are here for your care</h5>
                            <h1>Vaccination Point</h1>
                            <a href="#" class="btn_2 vaccinated">Get Vaccinated</a>
                            <a href="#" class="btn_2 report">Report Reaction</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="{{ asset('storage/banner_img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="{{ asset('storage/top_service.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>Login</h2>

                            <form class="form-contact contact_form" action="{{ route('login') }}" method="post"
                              novalidate="novalidate">
                              @csrf
                              <div class="row">
                                <div class="col-12">
                                  <div class="form-group">
                                    <input class="form-control" name="email" id="subject" type="email" onfocus="this.placeholder = ''"
                                      onblur="this.placeholder = 'Enter Email'" placeholder='Enter Email'>
                                  </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                      <input class="form-control" name="password" id="subject" type="password" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter password'" placeholder='Enter Password'>
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group mt-3">
                                <button type="submit" class=" btn_1">Login</button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="backdrop"></div>
    <div class="reaction-modal">
        <h2>Report Reaction</h2>
            <form class="form-contact contact_form" action="" method="post"
                              novalidate="novalidate">
                              @csrf
                              <div class="row">
                                <div class="col-12">
                                  <div class="form-group">
                                    <input class="form-control" name="email" id="subject" type="email" onfocus="this.placeholder = ''"
                                      onblur="this.placeholder = 'Enter Email'" placeholder='Enter Email'>
                                  </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                      <input class="form-control" name="password" id="subject" type="password" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter password'" placeholder='Enter Password'>
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group mt-3">
                                <button type="submit" class=" btn_2">Report</button>
                              </div>
                            </form>
    </div>
    <div class="vac-modal">
        <h2>Get Vaccinated</h2>
            <form class="form-contact contact_form" action="" method="post"
                              novalidate="novalidate">
                              @csrf
                              <div class="row">
                                <div class="col-12">
                                  <div class="form-group">
                                    <select class="form-control city select-city" name="city" id="city">
                                        <option value="" selected disabled>Select City</option>
                                        @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                </div>

                              </div>
                              <div class="form-group mt-3">
                                <button type="submit" class=" btn_2">Select City</button>
                              </div>
                            </form>
    </div>
    <!-- about us part end-->
    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
