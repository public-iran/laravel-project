<!doctype html>
<html lang="fa">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>شرکت بیمه</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/mdb.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/style.css')}}">

    @yield('css')
    @yield('style')
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">سایت بیمه</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        بیمه وسایل نقلیه
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">بیمه شخص ثالث</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        بیمه اشخاص
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        بیمه اموال
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        بیمه مسئولیت
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">شرکت های بیمه</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">بلاگ</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <div><a data-toggle="modal" data-target="#modalLRFormMobile">ورود / ثبت نام</a></div>
            </div>
        </div>
    </div>
</nav>



<main>
    @yield('content')
</main>

<footer class="Footer___mB0lJ">
    <div class="Section1___1G0R0">
        <div class="InnerContent___3Ph9R">
            <div class="jss44">
                <div class="jss45 jss84 jss98 jss106" style="padding-top:30px">
                    <div class="jss44">
                        <div class="jss45 jss78"><a href="/car-insurance/third-party-insurance">بیمه شخص ثالث</a><br><a
                                href="/car-insurance/car-body-insurance">بیمه بدنه</a><br><a
                                href="/property-insurance/fire-insurance">بیمه آتش سوزی</a><br><a
                                href="/personal-insurance/travel-insurance">بیمه مسافرتی</a><br><a
                                href="/personal-insurance/life-insurance">بیمه عمر</a><br><a
                                href="/motorcycle-insurance">بیمه موتورسیکلت</a><br><a
                                href="/personal-insurance/health-insurance">بیمه درمان تکمیلی</a><br></div>
                        <div class="jss45 jss78"><a href="https://bimito.com/bimito" target="_blank">ورود به پنل</a><br><a
                                href="/terms">شرایط و قوانین</a><br><a href="/faq/general">سوالات متداول</a><br><a
                                href="/cooperation">همکاری با ما</a><br><a href="/contact-us">تماس با ما</a><br><a
                                href="/about-us">درباره ما</a><br><a href="https://bimito.adilar.com" target="_blank">فرصت‌های
                                شغلی</a><br></div>
                    </div>
                </div>
                <div class="jss45 jss84 jss98 jss106">
                    <div class="Certified___NmoDm">
                        <div class="jss44 jss69">
                            <div class="jss45 jss76">
                                <div class="Certified__Img___3sP3y"><img id="apfunbqeoeukjxlzrgvj" alt="logo-samandehi"
                                                                         src="{{asset('/static/images/footer/samandehi.png')}}"
                                                                         width="150" height="150"></div>
                            </div>
                            <div class="jss45 jss76">
                                <div class="Certified__Img___3sP3y"><img id="hwlabrgwwmcsgwmdsgui" alt="enamad"
                                                                         src="{{asset('/static/images/footer/enamad.png')}}"
                                                                         width="125" height="136"></div>
                            </div>
                            <div class="jss45 jss76">
                                <div class="Certified__Img___3sP3y"><img id="eanjoman"
                                                                         src="{{asset('/static/images/footer/anjoman.png')}}"
                                                                         width="125" height="125" alt="anjoman logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jss44">
                        <div class="jss45 jss84 jss98">
                            <svg class="jss1 jss8 MaterialIcon___2ettk" focusable="false" viewBox="0 0 24 24"
                                 aria-hidden="true" role="presentation" style="color:#00b4ff">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                            </svg>
                            تهران، خیابان وزرا، خیابان هفتم، پلاک 7
                        </div>
                        <div class="jss45 jss84 jss92">
                            <svg class="jss1 jss8 MaterialIcon___2ettk" focusable="false" viewBox="0 0 24 24"
                                 aria-hidden="true" role="presentation" style="color:#00b4ff">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"></path>
                            </svg>
                            تلفن: ۹۱۰۰۷۱۱۷ - ٠٢١
                        </div>
                        <div class="jss45 jss84 jss92">
                            <svg class="jss1 jss8 MaterialIcon___2ettk" focusable="false" viewBox="0 0 24 24"
                                 aria-hidden="true" role="presentation" style="color:#00b4ff">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                            </svg>
                            ایمیل:<a href="mailto:info@bimito.com">info@bimito.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Section2___QdALU">
        <div class="InnerContent___3Ph9R">
            <div class="jss44">
                <div class="jss45 jss84 jss120">
                    <div class="MarketingButton__Container___-UMCo"><span id="BazaryabanHomePage"
                                                                          class="MarketingButton___2kwDw">سامانه بازاریابان دفتر بیمه</span>
                    </div>
                </div>
                <div class="jss45 jss84 jss120">
                    <div class="SocialMedia___2F1lH"><a href="https://instagram.com/bimitocom">
                            <div title="اینستاگرام">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                                     class="svg-inline--fa fa-instagram fa-w-14 fa-lg " role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" color="white">
                                    <path fill="currentColor"
                                          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                                </svg>
                            </div>
                        </a><a href="https://telegram.me/bimito">
                            <div title="تلگرام">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="telegram-plane"
                                     class="svg-inline--fa fa-telegram-plane fa-w-14 fa-lg " role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" color="white">
                                    <path fill="currentColor"
                                          d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path>
                                </svg>
                            </div>
                        </a><a href="https://twitter.com/BimitoCom">
                            <div title="توئیتر">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                                     class="svg-inline--fa fa-twitter fa-w-16 fa-lg " role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" color="white">
                                    <path fill="currentColor"
                                          d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                </svg>
                            </div>
                        </a><a href="https://facebook.com/bimitocom">
                            <div title="فیسبوک">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                                     class="svg-inline--fa fa-facebook-f fa-w-10 fa-lg " role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" color="white">
                                    <path fill="currentColor"
                                          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                </svg>
                            </div>
                        </a><a href="https://www.linkedin.com/company/bimito">
                            <div title="لینکدین">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
                                     class="svg-inline--fa fa-linkedin-in fa-w-14 fa-lg " role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" color="white">
                                    <path fill="currentColor"
                                          d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                </svg>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- JQuery -->

<!-- Modal: Login / Register Form Demo -->
<div class="modal fade" id="modalLRFormMobile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-sm" role="document">
        <!-- Content -->
        <div class="modal-content">

            <!-- Modal cascading tabs -->
            <div class="modal-c-tabs">



                <!-- Tab panels -->
                <div class="tab-content model-login">
                    <!-- Panel 17 -->
                    <div class="tab-pane tab-mobile fade in show active" id="panel17" role="tabpanel">

                        <!-- header -->
                        <div class="modal-header mb-1">
                            <div class="Dialog__Title___2rQoI"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14 fa-1x " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><p class="Dialog__Title__Text___3VFWW"> ورود / ثبت نام</p></div>
                        </div>
                        <p class="Label___3iX8H" style="margin: 15px 0 0;">برای <b>ورود</b> یا <b>ثبت‌نام</b> شماره تلفن همراه خود را وارد کنید</p>
                        <!-- Body -->
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm">
                                <input name="mobile" type="number" id="form2" class="form-control form-control-sm">
                                <label for="form2">شماره موبایل</label>
                            </div>


                            <div class="text-center mt-2">
                                <button onclick="checkmobileforlogin(this)" style="width: 100%;padding: 8px;" class="btn btn-info">ادامه</button>
                            </div>
                        </div>
                        <!-- Footer -->

                    </div>
                    <!-- Panel 7 -->

                    <!-- Panel 18 -->
                    <div class="tab-pane fade tab-register" id="panel18" role="tabpanel">

                        <!-- Body -->
                        <div class="modal-body">
                            <div class="md-form form-sm">
                                <i class="fas fa-envelope prefix"></i>
                                <input type="text" id="form14" class="form-control form-control-sm">
                                <label for="form14">Your email</label>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fas fa-lock prefix"></i>
                                <input type="password" id="form5" class="form-control form-control-sm">
                                <label for="form5">Your password</label>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fas fa-lock prefix"></i>
                                <input type="password" id="form6" class="form-control form-control-sm">
                                <label for="form6">Repeat password</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info">Sign up <i class="fas fa-sign-in-alt ml-1"></i></button>
                            </div>

                        </div>
                        <!-- Footer -->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- Panel 8 -->
                </div>

            </div>
        </div>
        <!-- Content -->
    </div>
</div>
<!-- Modal: Login / Register Form Demo -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{asset('static/js/popper.min.js')}}"></script>
<script src="{{asset('static/js/bootstrap.js')}}"></script>
<script src="{{asset('static/js/mdb.min.js')}}"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>$(document).ready(function () {
        $('body').bootstrapMaterialDesign();
    });</script>

<script>
    function checkmobileforlogin(tag) {
        var mobile=$(tag).parents('.modal-body').find('input[name=mobile]').val();
        var invalid=0;
        var regularMobile = /^0{1}9{1}[0-9]{9}$/i;
        if (regularMobile.test(mobile) == false) {
            invalid = 1;
            $(tag).parents('.modal-body').find('input[name=mobile]').addClass('error-input')
        } else {
            $(tag).parents('.modal-body').find('input[name=mobile]').removeClass('error-input')
            $('.tab-register').addClass(' in show active');
            $('.tab-mobile').removeClass(' in show active');
        }
    }


</script>
@yield('script_link')
@yield('script')
</body>
</html>
