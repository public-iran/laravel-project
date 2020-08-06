@extends('welcome')
@section('css')
    <link rel="stylesheet" href="{{asset('static/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('static/DatePicker/Mh1PersianDatePicker.css')}}">
@endsection
@section('style')
@endsection

@section('content')

    <div>
        <div style="position:relative">
            <div class="HomePage___2_RrD">
                <section class="ParallaxFirst___jK-KG">
                    <div class="FirstSection___qnqKD">
                        <div class="MainTitle_Container___ZVpDQ"><h1 class="MainTitle___1EA2T">سامانه مقایسه و خرید
                                آنلاین بیمه</h1></div>
                        <div class="FirstSection_SelectionBar___2SbfX">
                            <div style="overflow-x: hidden;">
                                <div class="react-swipeable-view-container"
                                     style="flex-direction: row-reverse; transition: all 0s ease 0s; direction: ltr; display: flex; will-change: transform; transform: translate(0%, 0px);">
                                    <div aria-hidden="false" data-swipeable="true"
                                         style="width: 100%; flex-shrink: 0; overflow: auto;">
                                        <div><h4 class="ChooseYourInsure___3tD9G"> بیمه مورد نظر خودتون رو انتخاب
                                                کنید</h4>
                                            <p style="font-size: 12px; text-align: center; margin-top: 15px; direction: rtl;">
                                                در صورت خرید تا ساعت 21 در روزهای عادی و تا ساعت 19 در روزهای پنج‌شنبه و
                                                تعطیل، بیمه‌نامه شما همان روز صادر می‌شود.</p>
                                            <div class="SelectionBar___1Somp FadeIn___z23xk">
                                                <div class="SelectionBarItems___1q3ri">
                                                    <div class="SelectionBarContainer___1TAsM">
                                                        <div id="LgScreens" class="LgScreens___hIW11">
                                                            <div class="Row___MiMPM">
                                                                <div id="SaalesHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="SaalesHomePage"
                                                                         src="{{asset('/static/images/home/thirdparty.svg')}}"
                                                                         alt="بیمه شخص ثالث" height="54"
                                                                         style="height: 45px;"><span
                                                                        id="SaalesHomePage">شخص ثالث</span></div>
                                                                <div id="BadaneHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="BadaneHomePage"
                                                                         src="{{asset('/static/images/home/carBody.svg')}}"
                                                                         alt="بیمه بدنه" height="54"
                                                                         style="height: 45px;"><span
                                                                        id="BadaneHomePage">بدنه</span></div>
                                                                <div id="MotorHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="MotorHomePage"
                                                                         src="{{asset('/static/images/home/motorcycle_1.svg')}}"
                                                                         alt="بیمه موتور سیکلت" height="54"
                                                                         style="height: 42px;"><span id="MotorHomePage">موتورسیکلت</span>
                                                                </div>
                                                                <div id="AtashHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="AtashHomePage"
                                                                         src="{{asset('/static/images/home/fire_2.svg')}}"
                                                                         alt="بیمه آتش سوزی" height="62"
                                                                         style="height: 55px;"><span id="AtashHomePage">آتش سوزی</span>
                                                                </div>
                                                                <div id="ZelzeleHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="ZelzeleHomePage"
                                                                         src="{{asset('/static/images/home/earthquake.svg')}}"
                                                                         alt="بیمه زلزله" height="62"
                                                                         style="height: 55px;"><span
                                                                        id="ZelzeleHomePage">زلزله</span></div>
                                                            </div>
                                                            <div class="Row___MiMPM">
                                                                <div id="MosaferatiHomePage"
                                                                     class="InsurTypeBtn___1xBRT"><img
                                                                        id="MosaferatiHomePage"
                                                                        src="{{asset('/static/images/home/travel.svg')}}"
                                                                        alt="بیمه مسافرتی" height="57"
                                                                        style="height: 55px;"><span
                                                                        id="MosaferatiHomePage">مسافرتی</span></div>
                                                                <div id="PezeshkanHomePage"
                                                                     class="InsurTypeBtn___1xBRT"><img
                                                                        id="PezeshkanHomePage"
                                                                        src="{{asset('/static/images/home/medical.svg')}}"
                                                                        alt="بیمه مسئولیت پزشکان" height="63"
                                                                        style="height: 57px;"><span
                                                                        id="PezeshkanHomePage">مسئولیت پزشکان</span>
                                                                </div>
                                                                <div id="OmrHomePage" class="InsurTypeBtn___1xBRT"><img
                                                                        id="OmrHomePage"
                                                                        src="{{asset('/static/images/home/life.svg')}}"
                                                                        alt="بیمه عمر" height="63"
                                                                        style="height: 57px;"><span
                                                                        id="OmrHomePage">عمر</span></div>
                                                                <div id="DarmanHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="DarmanHomePage"
                                                                         src="{{asset('/static/images/home/health-corona.svg')}}"
                                                                         alt="بیمه تکمیلی" height="63"
                                                                         style="height: 57px;"><span
                                                                        id="DarmanHomePage">درمان و کرونا</span></div>
                                                                <div id="CorporateResponsibilityHomePage"
                                                                     class="InsurTypeBtn___1xBRT"><img
                                                                        id="CorporateResponsibilityHomePage"
                                                                        src="{{asset('/static/images/home/corporate-responsibility.svg')}}"
                                                                        alt="بیمه سازمانی" height="63"
                                                                        style="height: 57px;"><span
                                                                        id="CorporateResponsibilityHomePage"> سازمانی</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="SmScreens___1CkMK">
                                                            <div class="Row___MiMPM">
                                                                <div id="SaalesHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="SaalesHomePage"
                                                                         src="{{asset('/static/images/home/thirdparty.svg')}}"
                                                                         alt="بیمه شخص ثالث" style="height: 40px;"><span
                                                                        id="SaalesHomePage">شخص ثالث</span></div>
                                                                <div id="BadaneHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="BadaneHomePage"
                                                                         src="{{asset('/static/images/home/carBody.svg')}}"
                                                                         alt="بیمه بدنه" style="height: 40px;"><span
                                                                        id="BadaneHomePage">بدنه</span></div>
                                                                <div id="MotorHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="MotorHomePage"
                                                                         src="{{asset('/static/images/home/motorcycle_1.svg')}}"
                                                                         alt="بیمه موتور سیکلت"
                                                                         style="height: 34px;"><span id="MotorHomePage">موتورسیکلت</span>
                                                                </div>
                                                            </div>
                                                            <div class="Row___MiMPM">
                                                                <div id="AtashHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="AtashHomePage"
                                                                         src="{{asset('/static/images/home/fire_2.svg')}}"
                                                                         alt="بیمه آتش سوزی" style="height: 49px;"><span
                                                                        id="AtashHomePage">آتش سوزی</span></div>
                                                                <div id="ZelzeleHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="ZelzeleHomePage"
                                                                         src="{{asset('/static/images/home/earthquake.svg')}}"
                                                                         alt="بیمه زلزله" style="height: 49px;"><span
                                                                        id="ZelzeleHomePage">زلزله</span></div>
                                                                <div id="MosaferatiHomePage"
                                                                     class="InsurTypeBtn___1xBRT"><img
                                                                        id="MosaferatiHomePage"
                                                                        src="{{asset('/static/images/home/travel.svg')}}"
                                                                        alt="بیمه مسافرتی" style="height: 44px;"><span
                                                                        id="MosaferatiHomePage">مسافرتی</span></div>
                                                            </div>
                                                            <div class="Row___MiMPM">
                                                                <div id="PezeshkanHomePage"
                                                                     class="InsurTypeBtn___1xBRT"><img
                                                                        id="PezeshkanHomePage"
                                                                        src="{{asset('/static/images/home/medical.svg')}}"
                                                                        alt="بیمه مسئولیت پزشکان" style="height: 48px;"><span
                                                                        id="PezeshkanHomePage"> پزشکان</span></div>
                                                                <div id="OmrHomePage" class="InsurTypeBtn___1xBRT"><img
                                                                        id="OmrHomePage"
                                                                        src="{{asset('/static/images/home/life.svg')}}"
                                                                        alt="بیمه عمر" style="height: 49px;"><span
                                                                        id="OmrHomePage">عمر</span></div>
                                                                <div id="DarmanHomePage" class="InsurTypeBtn___1xBRT">
                                                                    <img id="DarmanHomePage"
                                                                         src="{{asset('/static/images/home/health-corona.svg')}}"
                                                                         alt="بیمه تکمیلی" style="height: 49px;"><span
                                                                        id="DarmanHomePage">درمان و کرونا</span></div>
                                                            </div>
                                                            <div class="Row___MiMPM">
                                                                <div id="CorporateResponsibilityHomePage"
                                                                     class="InsurTypeBtn___1xBRT"><img
                                                                        id="CorporateResponsibilityHomePage"
                                                                        src="{{asset('/static/images/home/corporate-responsibility.svg')}}"
                                                                        alt="بیمه سازمانی" style="height: 49px;"><span
                                                                        id="CorporateResponsibilityHomePage"> سازمانی</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div aria-hidden="true" data-swipeable="true"
                                         style="width: 100%; flex-shrink: 0; overflow: auto;">
                                        <div>
                                            <div style="padding: 10px;">
                                                <div class="Slider_Con___38hj0">
                                                    <div class="Slider_Con_head___2IUie">
                                                        <div class="NavigateBefore___194Gf">
                                                            <svg class="jss1" focusable="false" viewBox="0 0 24 24"
                                                                 aria-hidden="true" role="presentation">
                                                                <path
                                                                    d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                            </svg>
                                                            همه بیمه‌ها
                                                        </div>
                                                        <div></div>
                                                    </div>
                                                    <div class="Slider_Con_body___2Pvw7">
                                                        <div class="InsurFormPart___AU0YK" style="direction: rtl;">
                                                            <div class="InsurWrapper___2RcAE"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <svg class="SVG___2HZX2" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 5899.44 1779.24">
                                <defs>
                                    <clipPath id="clip-path">
                                        <polyline
                                            points="1447.41 1028.96 1447.41 968.95 1474.37 968.95 1474.37 1028.96 1447.41 1028.96"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                        <polyline
                                            points="1491.51 1029.06 1491.51 969.05 1518.47 969.05 1518.47 1029.06 1491.51 1029.06"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-3">
                                        <polyline
                                            points="1533.81 1028.96 1533.81 968.95 1560.77 968.95 1560.77 1028.96 1533.81 1028.96"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-4">
                                        <polyline
                                            points="1447.78 1113.88 1447.78 1053.88 1474.73 1053.88 1474.73 1113.88 1447.78 1113.88"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-5">
                                        <polyline
                                            points="1491.88 1113.98 1491.88 1053.97 1518.83 1053.97 1518.83 1113.98 1491.88 1113.98"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-6">
                                        <polyline
                                            points="1534.18 1113.88 1534.18 1053.88 1561.13 1053.88 1561.13 1113.88 1534.18 1113.88"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-7">
                                        <polyline
                                            points="2113.16 959.86 2113.16 928.04 2140.12 928.04 2140.12 959.86 2113.16 959.86"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-8">
                                        <polyline
                                            points="2157.26 959.91 2157.26 928.1 2184.22 928.1 2184.22 959.91 2157.26 959.91"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-9">
                                        <polyline
                                            points="2199.56 959.86 2199.56 928.04 2226.52 928.04 2226.52 959.86 2199.56 959.86"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-10">
                                        <polyline
                                            points="2113.53 1004.52 2113.53 972.7 2140.49 972.7 2140.49 1004.52 2113.53 1004.52"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-11">
                                        <polyline
                                            points="2157.63 1004.57 2157.63 972.75 2184.59 972.75 2184.59 1004.57 2157.63 1004.57"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-12">
                                        <polyline
                                            points="2199.93 1004.52 2199.93 972.7 2226.89 972.7 2226.89 1004.52 2199.93 1004.52"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-13">
                                        <polyline
                                            points="2113.59 1048.91 2113.59 1017.09 2140.55 1017.09 2140.55 1048.91 2113.59 1048.91"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-14">
                                        <polyline
                                            points="2157.69 1048.96 2157.69 1017.14 2184.65 1017.14 2184.65 1048.96 2157.69 1048.96"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-15">
                                        <polyline
                                            points="2199.99 1048.91 2199.99 1017.09 2226.95 1017.09 2226.95 1048.91 2199.99 1048.91"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-16">
                                        <polyline
                                            points="2113.96 1093.57 2113.96 1061.75 2140.92 1061.75 2140.92 1093.57 2113.96 1093.57"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-17">
                                        <polyline
                                            points="2158.06 1093.62 2158.06 1061.8 2185.01 1061.8 2185.01 1093.62 2158.06 1093.62"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-18">
                                        <polyline
                                            points="2200.36 1093.57 2200.36 1061.75 2227.32 1061.75 2227.32 1093.57 2200.36 1093.57"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-19">
                                        <polyline
                                            points="3288.16 906.12 3288.16 874.3 3315.11 874.3 3315.11 906.12 3288.16 906.12"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-20">
                                        <polyline
                                            points="3288.52 950.78 3288.52 918.96 3315.48 918.96 3315.48 950.78 3288.52 950.78"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-21">
                                        <polyline
                                            points="3288.59 995.16 3288.59 963.35 3315.54 963.35 3315.54 995.16 3288.59 995.16"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-22">
                                        <polyline
                                            points="3288.95 1039.82 3288.95 1008 3315.91 1008 3315.91 1039.82 3288.95 1039.82"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-23">
                                        <polyline
                                            points="3898.59 642.69 3898.59 610.87 3925.55 610.87 3925.55 642.69 3898.59 642.69"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-24">
                                        <polyline
                                            points="3940.89 642.64 3940.89 610.82 3967.85 610.82 3967.85 642.64 3940.89 642.64"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-25">
                                        <polyline
                                            points="3898.95 687.35 3898.95 655.53 3925.91 655.53 3925.91 687.35 3898.95 687.35"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-26">
                                        <polyline
                                            points="3941.25 687.3 3941.25 655.48 3968.21 655.48 3968.21 687.3 3941.25 687.3"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-27">
                                        <polyline
                                            points="3899.02 731.74 3899.02 699.92 3925.97 699.92 3925.97 731.74 3899.02 731.74"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-28">
                                        <polyline
                                            points="3941.32 731.69 3941.32 699.87 3968.28 699.87 3968.28 731.69 3941.32 731.69"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-29">
                                        <polyline
                                            points="3899.38 776.4 3899.38 744.58 3926.34 744.58 3926.34 776.4 3899.38 776.4"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-30">
                                        <polyline
                                            points="3941.68 776.35 3941.68 744.53 3968.64 744.53 3968.64 776.35 3941.68 776.35"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-31">
                                        <polyline
                                            points="3899.55 821.49 3899.55 789.67 3926.51 789.67 3926.51 821.49 3899.55 821.49"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-32">
                                        <polyline
                                            points="3941.85 821.44 3941.85 789.62 3968.81 789.62 3968.81 821.44 3941.85 821.44"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-33">
                                        <polyline
                                            points="3899.91 866.15 3899.91 834.33 3926.87 834.33 3926.87 866.15 3899.91 866.15"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-34">
                                        <polyline
                                            points="3942.21 866.1 3942.21 834.28 3969.17 834.28 3969.17 866.1 3942.21 866.1"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-35">
                                        <polyline
                                            points="3899.98 910.54 3899.98 878.72 3926.94 878.72 3926.94 910.54 3899.98 910.54"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-36">
                                        <polyline
                                            points="3942.28 910.49 3942.28 878.67 3969.24 878.67 3969.24 910.49 3942.28 910.49"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-37">
                                        <polyline
                                            points="3900.34 955.2 3900.34 923.38 3927.3 923.38 3927.3 955.2 3900.34 955.2"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-38">
                                        <polyline
                                            points="3942.64 955.14 3942.64 923.33 3969.6 923.33 3969.6 955.14 3942.64 955.14"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-39">
                                        <polyline
                                            points="4452.95 978.58 4452.95 918.57 4479.91 918.57 4479.91 978.58 4452.95 978.58"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-40">
                                        <polyline
                                            points="4497.05 978.68 4497.05 918.67 4524.01 918.67 4524.01 978.68 4497.05 978.68"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-41">
                                        <polyline
                                            points="4539.35 978.58 4539.35 918.57 4566.31 918.57 4566.31 978.58 4539.35 978.58"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-42">
                                        <polyline
                                            points="4453.31 1063.51 4453.31 1003.5 4480.27 1003.5 4480.27 1063.51 4453.31 1063.51"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-43">
                                        <polyline
                                            points="4497.41 1063.6 4497.41 1003.6 4524.37 1003.6 4524.37 1063.6 4497.41 1063.6"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-44">
                                        <polyline
                                            points="4539.71 1064.15 4539.71 1003.5 4566.67 1003.5 4566.67 1064.15 4539.71 1064.15"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-45">
                                        <polyline
                                            points="4580.15 979.16 4580.15 919.15 4607.1 919.15 4607.1 979.16 4580.15 979.16"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-46">
                                        <polyline
                                            points="4580.51 1064.15 4580.51 1004.14 4607.47 1004.14 4607.47 1064.15 4580.51 1064.15"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-47">
                                        <polyline
                                            points="3547.85 1023.05 3547.85 921.22 3561.61 921.22 3561.61 1023.05 3547.85 1023.05"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-48">
                                        <polyline
                                            points="3572.93 1023.05 3572.93 921.22 3586.69 921.22 3586.69 1023.05 3572.93 1023.05"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-49">
                                        <polyline
                                            points="3597.89 1023.05 3597.89 921.22 3611.65 921.22 3611.65 1023.05 3597.89 1023.05"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-50">
                                        <polyline
                                            points="4934.14 903.56 4934.14 871.74 4961.1 871.74 4961.1 903.56 4934.14 903.56"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-51">
                                        <polyline
                                            points="4978.24 903.61 4978.24 871.79 5005.2 871.79 5005.2 903.61 4978.24 903.61"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-52">
                                        <polyline
                                            points="5020.54 903.56 5020.54 871.74 5047.5 871.74 5047.5 903.56 5020.54 903.56"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-53">
                                        <polyline
                                            points="4934.51 948.22 4934.51 916.4 4961.46 916.4 4961.46 948.22 4934.51 948.22"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-54">
                                        <polyline
                                            points="4978.6 948.27 4978.6 916.45 5005.56 916.45 5005.56 948.27 4978.6 948.27"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-55">
                                        <polyline
                                            points="5020.91 948.22 5020.91 916.4 5047.86 916.4 5047.86 948.22 5020.91 948.22"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-56">
                                        <polyline
                                            points="4934.57 992.61 4934.57 960.79 4961.53 960.79 4961.53 992.61 4934.57 992.61"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-57">
                                        <polyline
                                            points="4978.67 992.66 4978.67 960.84 5005.63 960.84 5005.63 992.66 4978.67 992.66"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-58">
                                        <polyline
                                            points="5020.97 992.61 5020.97 960.79 5047.93 960.79 5047.93 992.61 5020.97 992.61"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-59">
                                        <polyline
                                            points="4934.94 1037.26 4934.94 1005.44 4961.89 1005.44 4961.89 1037.26 4934.94 1037.26"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-60">
                                        <polyline
                                            points="4979.04 1037.31 4979.04 1005.5 5005.99 1005.5 5005.99 1037.31 4979.04 1037.31"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <clipPath id="clip-path-61">
                                        <polyline
                                            points="5021.34 1037.26 5021.34 1005.44 5048.29 1005.44 5048.29 1037.26 5021.34 1037.26"
                                            fill="none"></polyline>
                                    </clipPath>
                                    <image id="image" width="113" height="133"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABYklEQVR4Xu3VIQrDQBBA0U2J6/1971cdvVWFmJCm5Lv33MCozyy7zDkHd1vHGK/32RYXPc4W+IesiXU/PJejNX6yff8p15qQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE+t+2ObRGte41oSsiWVOL/9+H4OMDIwDLfRFAAAAAElFTkSuQmCC"></image>
                                    <image id="image-2" width="113" height="133"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABXklEQVR4Xu3UIQ7CQBBA0S6pQ3M/bsb98NWLa1BtIP3uPTVi1M/sjtd7Llzq+VhuZzv8Q9bEuk/3cbDGue3rN3WtCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDWx7tM2D9b4jWtNyJoYc3r81/sAEy0K/cUuMpsAAAAASUVORK5CYII="></image>
                                    <image id="image-3" width="113" height="133"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABW0lEQVR4Xu3ToQ7CUBAAQUrq+H/P/6GrD4OoaaCk62bUu+TU5t4yM8/XjWvdvy3wD1kT6354LEdr/GSbz8O1JmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtbEuh+2OVrjHNeakDWxzPj513sDsVIMiFmn75YAAAAASUVORK5CYII="></image>
                                    <image id="image-4" width="113" height="133"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABXUlEQVR4Xu3TIQ7CQBBA0S6pQ3M/bsb98NWLa1BtIP3uPTVi1M/MeL3nwqWej+V2tsM/1n26j4M1zm1fb+9aE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1sS6T9s8WOM3rjUha2LM6fmv9wHD+Qr9WfUslQAAAABJRU5ErkJggg=="></image>
                                    <image id="image-5" width="114" height="133"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAACICAIAAABbdENrAAAACXBIWXMAAC7AAAAuwAGdJvZ1AAABaUlEQVR4Xu3VMQrCQBBA0UTSWYrnCt7AY3uR1GubJsQIv3uvG5jqM+zOY4yJwPL6TOvjbIuL3s/pdrbDn5StLPvhPh+t8ZNt92e52YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbay7IdtHK1xmZutKFuZx/AEJL7Tbg0DUPSvgAAAAABJRU5ErkJggg=="></image>
                                    <image id="image-6" width="113" height="133"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABYklEQVR4Xu3UIQ7DMBAAQacK6/95/1cc7KJKIVGaKstm2EmHVmcvc87B3dYxxut9tsVFj7MF/rHuh+dytMZPtu+H6loTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWxLoftnm0xjWuNSFrYpnTy7/fBzRnDIzgD0hDAAAAAElFTkSuQmCC"></image>
                                    <image id="image-7" width="113" height="133"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAACHCAIAAACqIvG+AAAACXBIWXMAAC5xAAAucQGxbqlcAAABZUlEQVR4Xu3UMQrCQBBA0Y2ks/Z+Hs37WadeWwmBGOF373UDU31md5lzDgLrGOP1Ptvioudj3M52+NO6m+/L4Ro/2b5+VjdbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVtbdvM3DNS5zsxVlK8uc3n/iA5k1DQFKxrYcAAAAAElFTkSuQmCC"></image>
                                    <image id="image-8" width="113" height="133"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABY0lEQVR4Xu3Uuw3CQBBAQRs5I0TUBSXQNZU4PhICJxYf+WUz0a200dPq5vtz3C4TB3pcp9OnHf6xbIfzvLfGV9bxfrjWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJpYtsM69tb4jWtNyJqQNTGP4UM93gtXvgr9zpGmfAAAAABJRU5ErkJggg=="></image>
                                    <image id="image-9" width="113" height="133"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABYklEQVR4Xu3UoQrDUBAAwZcS1//3/b/q6FdVEwJpStbNuINTy3HLnHNwt3WM8XqfbXHR42yBf6y7+bkcrvGT7ftQXWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTay7eZuHa1zjWhOyJmRNLHP6pvf7AM8fDIxSLYF5AAAAAElFTkSuQmCC"></image>
                                </defs>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <rect y="1387.27" width="5899.44" height="391.97" fill="#fff"></rect>
                                        <polygon
                                            points="796.88 1172.88 816.39 1172.88 1136.04 1172.88 1257.61 1172.88 1257.61 930.17 1353.44 930.17 1353.44 1234.51 1390.88 1234.51 1390.88 971.86 1502.25 728.38 1609.71 728.38 1609.71 1172.88 1747.31 1172.88 1747.31 945.38 1917.98 945.38 1917.98 1172.88 1954.38 1172.88 1954.38 1066.94 2074.3 1066.94 2074.3 891.25 2173.58 819.25 2266.73 891.25 2266.73 1148.85 2450.2 1148.85 2450.2 893.29 2609.66 784.56 2609.66 1128.03 2721.03 1128.03 2721.03 1172.88 2721.03 1223.11 2802.42 1223.11 2802.42 1375.45 2721.03 1375.45 2704.72 1377.79 695.54 1377.79 695.54 1301.71 796.88 1301.71 796.88 1172.88 796.88 1172.88"
                                            fill="#50d7ff" stroke="#e6e7e8" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <path class="LocationPath___cbwOl" id="location-path"
                                              d="M1424.27,785.58c-3.89-2.67-7.81-5.41-11.57-8.28l0,0-4.4,5.69.05,0,0,0c3.82,2.93,7.87,5.74,11.84,8.47l4.08-5.93Zm3457.3-43.94-3.06.16-4.42.18-4.5.15-2.28,0,.13,7.19,2.36,0,4.55-.15,4.51-.19,3.06-.16-.35-7.18Zm-50,.18-5-.22-5.06-.25-4.29-.25-.43,7.19,4.34.24,5.1.26,5,.21.34-7.18Zm-50-3.55-7.81-.79-6.45-.7-.82,7.15c4.77.54,9.57,1,14.36,1.5l.72-7.16Zm-49.87-5.94q-7.11-1-14.22-2l-1.05,7.12q7.14,1,14.27,2l1-7.13ZM4682,724.77c-4.73-.78-9.45-1.59-14.17-2.39l-1.22,7.09q7.09,1.21,14.21,2.39l1.18-7.09Zm-49.53-8.71-14.13-2.65-1.35,7.07,14.16,2.65,1.32-7.07Zm-49.41-9.51L4569,703.71l-1.43,7,14.12,2.84,1.4-7.05Zm-49.3-10.08-14.07-3-1.5,7c4.69,1,9.4,2,14.09,3l1.48-7ZM4484.51,686l-14.06-3-1.53,7,14.07,3,1.52-7Zm-49.21-10.69-14.05-3.07-1.54,7,14.06,3.07,1.53-7Zm-49.18-10.78-14.06-3.08-1.54,7,14,3.08,1.55-7Zm-49.21-10.76-14.06-3.06-1.52,7,14.05,3.06,1.53-7Zm-49.23-10.64-14.08-3-1.49,7,14.07,3,1.5-7Zm-49.3-10.43-14.09-2.92-1.45,7.05,14.08,2.92,1.46-7ZM4189,622.62l-14.12-2.81-1.39,7.05,14.1,2.81,1.41-7ZM4139.56,613l-14.15-2.67-1.32,7.08,14.13,2.66,1.34-7.07ZM4090,603.83l-14.18-2.49-1.23,7.09,14.16,2.48,1.25-7.08Zm-49.7-8.45-14.23-2.27-1.1,7.1,14.19,2.27,1.14-7.1Zm-49.85-7.64q-7.12-1-14.26-2l-1,7.13q7.13,1,14.23,2l1-7.12Zm-50-6.67q-7.15-.87-14.31-1.7l-.81,7.15,14.27,1.69.85-7.14Zm-50.15-5.49-6.79-.64-7.58-.68-.59,7.17,7.51.68,6.78.64.67-7.17ZM3840,571.52l-5.68-.36-8.72-.51-.36,7.19,8.65.5,5.67.36.44-7.18Zm-50.43-2.35-9.86-.23-4.57-.07-.1,7.19,4.54.07,9.81.23.18-7.19Zm-50.54-.24-5.49.12-8.94.26.28,7.19,8.83-.27,5.5-.11-.18-7.19Zm-50.51,2.35-5.66.46-6.17.54-2.56.25.72,7.15,2.5-.24,6.11-.53,5.67-.45-.61-7.18Zm-50.28,5.62-3.56.53-5.82.94-4.9.83,1.24,7.09,4.83-.82,5.76-.93,3.55-.53-1.1-7.11Zm-49.76,9.7-4.64,1.16-5.42,1.42-3.94,1.09,2,6.92,3.86-1.06,5.33-1.4,4.65-1.16-1.79-7ZM3540,601.47l-3,1.15-5,2-5.52,2.28,2.88,6.59,5.32-2.19,4.86-1.91,3-1.15-2.58-6.72Zm-46.21,21.27-3.86,2.19-4.39,2.59-4.25,2.61,3.82,6.1,4.14-2.55,4.28-2.52,3.86-2.19-3.6-6.23Zm-42.08,28.73-2.84,2.39-3.76,3.28-3.68,3.35-.68.63,5,5.18,4.15-3.79,3.64-3.18,2.85-2.39-4.68-5.47ZM3416,687.89l-1.62,2-3.06,4-3,4.1-1.08,1.54,5.94,4.06,1-1.42,2.9-4,3-3.9,1.62-2.05-5.68-4.41Zm-27.5,43-1.38,2.74-2.3,4.8-2.23,4.88-.33.77,6.62,2.79,2.45-5.39,2.25-4.67,1.38-2.74-6.46-3.18Zm-18.77,47.31,6.9,2-.47,1.57-.9,3.1-.84,3.11-.78,3.1-.68,2.82-7-1.63.7-2.91.82-3.21.86-3.2.92-3.21.48-1.57Zm-9,50.31-.12,2.23-.13,3.15-.07,3.15,0,3.15,0,2.91,7.19-.1v-2.8l0-3,.07-3,.11-3.05.12-2.23-7.18-.33Zm3.27,51,.82,4.24.65,3.07.69,3.06,1,3.93,7-1.83-.91-3.74-.67-3-.63-3-.8-4.15-7.07,1.35Zm14.68,48.86,1.57,3.71,1.3,3,1.35,3,1.75,3.7,6.46-3.17-1.68-3.55-1.31-2.88-1.27-2.88-1.54-3.63-6.63,2.79Zm23.68,45.09,1.42,2.23,1.87,2.84,1.89,2.83,2.87,4.19,5.89-4.14-2.8-4.07-1.85-2.78-1.82-2.78-1.42-2.23-6,3.91Zm30.18,40.84,2.64,3.1,2.35,2.7,4.56,5.12,5.33-4.82-4.48-5-2.31-2.66-2.6-3-5.49,4.64Zm34.83,36.88c3.48,3.34,7,6.62,10.62,9.86l4.81-5.35c-3.53-3.2-7-6.43-10.47-9.73l-5,5.22Zm38.18,33.28c3.75,3,7.58,6,11.4,8.92l4.36-5.73c-3.78-2.89-7.56-5.82-11.27-8.8l-4.49,5.61Zm40.69,30.11q6,4.1,12,8.07l3.93-6q-6-3.91-11.88-8l-4.06,5.94Zm42.63,27.25c4.14,2.45,8.29,4.89,12.47,7.28l3.56-6.25c-4.15-2.38-8.26-4.8-12.38-7.23l-3.65,6.2Zm44.14,24.61c4.18,2.28,8.6,4.44,12.87,6.58l3.21-6.43c-4.23-2.12-8.61-4.27-12.75-6.53l-3.33,6.38Zm45.42,22.19c4.37,2,8.77,4,13.18,5.91l2.87-6.6q-6.55-2.88-13.07-5.86l-3,6.55Zm46.47,19.86q6.7,2.67,13.44,5.26l2.56-6.72q-6.69-2.58-13.36-5.23l-2.64,6.69Zm47.35,17.6c4.54,1.58,9.12,3.12,13.69,4.62l2.23-6.84c-4.53-1.49-9.07-3-13.58-4.58l-2.34,6.8Zm48.14,15.35q6.93,2,13.88,4l1.92-6.93q-6.9-1.94-13.79-3.94l-2,6.9Zm48.82,13.06q7,1.68,14,3.29l1.57-7c-4.66-1.06-9.31-2.16-14-3.27l-1.66,7Zm49.39,10.64q7.09,1.35,14.22,2.59l1.2-7.1q-7-1.21-14.09-2.55l-1.33,7.06Zm49.9,8.08c4.77.64,9.56,1.25,14.34,1.8l.81-7.14q-7.11-.84-14.21-1.79l-.94,7.13Zm50.29,5.24c4.81.34,9.62.66,14.43.92l.38-7.18q-7.16-.4-14.29-.92l-.52,7.18Zm50.56,2c4.83,0,9.65,0,14.48-.08l-.15-7.19q-7.16.12-14.31.07l0,7.2Zm50.52-1.41c4.79-.2,9.6-.47,14.39-.74l-.39-7.17c-4.77.26-9.57.52-14.35.72l.35,7.19Zm50.37-3,6.29-.47,8.09-.65-.62-7.16-8,.64-6.29.47.55,7.17Zm50.27-4.53,8.53-.94,5.8-.68-.85-7.15-5.76.68-8.5.94.78,7.15Zm50.09-6.4,7-1.06,7.3-1.17-1.19-7.09-7.22,1.15-6.93,1,1.06,7.12Zm49.79-8.66,7.9-1.61,6.26-1.33-1.57-7-6.17,1.32-7.85,1.61,1.43,7Zm49.29-11.4,4.36-1.18,5.38-1.49,4.18-1.19-2-6.91-4.13,1.18-5.32,1.47-4.36,1.17,1.89,7Zm48.39-14.9,6.38-2.3,4.64-1.74,2.57-1-2.63-6.7-2.5,1-4.57,1.71-6.32,2.28,2.43,6.77Zm46.87-19.44,2.61-1.26,3.92-2,3.85-2,2.56-1.36-3.41-6.34-2.49,1.32-3.77,2-3.84,1.93-2.61,1.26,3.18,6.45Zm44-25.5,4.09-2.91,3-2.23,2.95-2.24,1.67-1.31-4.49-5.63-1.58,1.25-2.86,2.18-2.93,2.16-4,2.85,4.14,5.88Zm38.47-33.68,1.81-2.07,2.09-2.47,2-2.49,2-2.51,1.37-1.82-5.79-4.27-1.29,1.71-1.87,2.4-1.94,2.39-2,2.37-1.81,2.07,5.46,4.69Zm27.47-43.29,1.15-2.87,1-2.71.95-2.73.88-2.74.89-3-7-1.84-.8,2.68-.84,2.58-.89,2.58-1,2.57-1.08,2.73,6.65,2.72Zm10-50.51,0-2.69-.07-2.87-.13-2.89-.19-2.87-.3-3.4-7.15.82.27,3.12.18,2.74.13,2.73.07,2.73v2.7l7.2-.12Zm-8.4-50.56-.51-1.55-1-2.94-1.07-2.94-1.11-2.93-1.36-3.39-6.62,2.81,1.27,3.19,1.08,2.83,1,2.84,1,2.82.51,1.56,6.82-2.3Zm-21.54-46.3-1.38-2.28-1.83-2.94-1.88-2.93-2.73-4.12-5.94,4,2.64,4,1.83,2.86,1.78,2.85,1.38,2.29,6.13-3.77Zm-29.71-41.28-1.57-1.85-2.48-2.89-2.52-2.88-3-3.33-5.3,4.87,2.89,3.22,2.48,2.84,2.43,2.83,1.57,1.86,5.48-4.67Zm-34.94-36.81-2.34-2.19-3.05-2.81L4479.6,873l-4.77,5.38,2.15,1.92,3,2.77,3,2.77,2.34,2.2,4.9-5.27Zm-38.49-33-3.16-2.46-3.53-2.7-4.81-3.62-4.27,5.79,4.72,3.55,3.5,2.68,3.16,2.46,4.39-5.7Zm-41.05-29.6-7.08-4.66-5-3.24-3.83,6.08,4.95,3.19,7,4.63,4-6Zm-43-26.62-5.57-3.19-7-3.91-3.47,6.3,6.94,3.88,5.53,3.16,3.58-6.24Zm-44.55-23.91-5.95-2.95-7-3.41-3.1,6.49,6.95,3.38,5.91,2.93,3.21-6.44Zm-45.81-21.39-8.24-3.54-5.05-2.13-2.73,6.65,5,2.1,8.21,3.53,2.84-6.61Zm-46.82-19-7.24-2.7-6.31-2.3-2.42,6.77q6.74,2.43,13.45,5l2.52-6.74Zm-47.69-16.7-7.58-2.42-6.18-1.94-2.1,6.89,6.11,1.9,7.55,2.42,2.2-6.85Zm-48.4-14.47-1.88,6.95-3.6-1-10.26-2.73,1.8-7,10.35,2.76,3.59,1Zm-48.92-12.49-7.48-1.77-6.55-1.5-1.59,7,6.51,1.49,7.48,1.76,1.63-7Zm-49.28-10.86q-7.07-1.44-14.15-2.81l-1.34,7.07q7,1.37,14.07,2.8l1.42-7.06Zm-49.62-9.26-6-1-8.21-1.34-1.14,7.1,8.17,1.33,6,1,1.19-7.1Zm-49.87-7.7-9.58-1.3-4.72-.62-.91,7.14,4.68.61,9.54,1.3,1-7.13Zm-50.09-6.19-4.16-.45-10.18-1-.69,7.16,10.11,1,4.16.46.76-7.16Zm-50.24-4.75-7.67-.6-6.69-.49-.52,7.17,6.66.49,7.67.6.55-7.17Zm-50.33-3.35q-7.2-.39-14.41-.71l-.31,7.18c4.78.22,9.57.45,14.34.71l.38-7.18Zm-50.42-2-5.83-.16-8.57-.19-.15,7.19,8.54.19,5.83.16.18-7.19Zm-50.43-.78h-9.51l-4.91,0,0,7.19,4.88,0h9.48l0-7.19Zm-50.44.42c-4.81.09-9.62.19-14.42.33l.21,7.19c4.79-.14,9.57-.23,14.36-.32l-.15-7.2Zm-50.42,1.54-14.39.64.35,7.18,6.32-.29,8-.34-.32-7.19Zm-50.36,2.6q-7.19.43-14.38.93l.5,7.18c4.77-.34,9.55-.64,14.33-.93l-.45-7.18Zm-50.3,3.58-14.35,1.2.62,7.17,14.32-1.19-.59-7.18Zm-50.22,4.51q-7.17.7-14.34,1.45l.76,7.15c4.76-.49,9.53-1,14.29-1.44l-.71-7.16Zm-50.14,5.37-14.29,1.68.85,7.14,14.28-1.68-.84-7.14Zm-50,6.16q-7.14.93-14.28,1.9l1,7.13q7.13-1,14.25-1.9l-.94-7.13Zm-49.94,6.89-14.24,2.1,1.06,7.11,14.23-2.09-1-7.12Zm-49.83,7.57c-4.74.74-9.48,1.51-14.22,2.27l1.16,7.11c4.73-.77,9.46-1.54,14.19-2.28l-1.13-7.1Zm-49.73,8.18-14.19,2.44,1.23,7.09,14.17-2.44-1.21-7.09Zm-49.64,8.73q-7.08,1.28-14.16,2.6l1.31,7.07c4.71-.87,9.43-1.75,14.14-2.59l-1.29-7.08Zm-49.54,9.24c-4.71.91-9.43,1.79-14.14,2.72l1.38,7.07c4.7-.93,9.41-1.82,14.12-2.72l-1.36-7.07Zm-49.44,9.68L3021.1,718l1.43,7,14.1-2.83-1.41-7.06Zm-49.38,10.08c-4.7,1-9.4,1.95-14.09,2.94l1.48,7,14.08-2.94-1.47-7Zm-49.29,10.41-14.07,3,1.52,7,14.06-3-1.51-7Zm-49.23,10.7-14.06,3.1,1.56,7,14-3.1-1.54-7Zm-49.18,10.93-14,3.15,1.57,7,14-3.16-1.58-7ZM2789,768.37l-14,3.2,1.61,7,14-3.19-1.6-7Zm-49.09,11.23-14,3.23,1.62,7,14-3.23-1.61-7Zm-49.09,11.3-14,3.24,1.62,7,14-3.24-1.62-7Zm-49.06,11.32-14,3.23,1.61,7,14-3.23-1.61-7Zm-49.08,11.27-14,3.21,1.6,7,14-3.2-1.6-7Zm-49.09,11.17-14,3.17,1.58,7,14-3.17-1.58-7Zm-49.13,11-14,3.1,1.55,7,14.05-3.11-1.55-7Zm-49.18,10.77-14.06,3,1.5,7,14.08-3-1.52-7Zm-49.23,10.46L2382,859.83l1.45,7,14.1-2.93-1.47-7.05ZM2346.75,867l-14.1,2.8,1.38,7.07,14.13-2.81-1.41-7.06Zm-49.39,9.63-14.13,2.66,1.31,7.07,14.15-2.66-1.33-7.07Zm-49.49,9.09-14.16,2.48,1.22,7.09,14.19-2.49-1.25-7.08Zm-49.6,8.44-14.19,2.27,1.12,7.12c4.74-.76,9.48-1.51,14.22-2.29l-1.15-7.1Zm-49.71,7.69q-7.11,1-14.22,2l1,7.12c4.75-.67,9.51-1.34,14.26-2l-1-7.12Zm-49.82,6.83q-7.12.9-14.25,1.78l.85,7.14c4.76-.57,9.53-1.18,14.3-1.78l-.9-7.14Zm-49.94,5.85q-7.16.75-14.29,1.46l.7,7.16q7.17-.71,14.34-1.47l-.75-7.15Zm-50.05,4.7q-7.15.59-14.31,1.12l.5,7.18c4.8-.35,9.59-.74,14.38-1.12l-.57-7.18Zm-50.15,3.43c-4.78.27-9.56.49-14.34.72l.33,7.19,5.73-.28,8.67-.45-.39-7.18Zm-50.16,1.86q-7.17.09-14.33,0l0,7.2q7.23,0,14.45,0l-.07-7.2Zm-50.13-.89q-7.15-.36-14.3-.82l-.49,7.18c4.81.32,9.61.58,14.42.82l.37-7.18Zm-50-3.94c-4.76-.51-9.5-1.08-14.24-1.67l-.9,7.14c4.78.59,9.56,1.16,14.35,1.68l.79-7.15Zm-49.66-6.92c-4.7-.79-9.41-1.63-14.1-2.52l-1.35,7.07q7.11,1.35,14.23,2.54l1.22-7.09Zm-49.16-9.85q-7-1.62-13.93-3.35l-1.76,7q7,1.76,14,3.37l1.64-7ZM1651,890.19q-6.88-2-13.72-4.14l-2.15,6.86c4.59,1.44,9.2,2.82,13.82,4.18l2-6.9Zm-47.7-15.49q-6.75-2.41-13.46-4.92l-2.53,6.73q6.77,2.54,13.55,5l2.44-6.77Zm-46.74-18.2c-4.39-1.83-8.78-3.75-13.14-5.68l-2.92,6.57c4.39,2,8.83,3.89,13.26,5.74l2.8-6.63ZM1511,835.64q-6.42-3.17-12.79-6.45l-3.3,6.4c4.28,2.19,8.58,4.37,12.9,6.5l3.19-6.45Zm-44.25-23.56q-6.2-3.55-12.34-7.24l-3.71,6.16q6.19,3.72,12.47,7.32l3.58-6.24Z"
                                              fill="#a5a5a5"></path>
                                        <polygon
                                            points="2802.54 1128.64 2951.92 1128.64 2951.92 989.14 3162.52 989.14 3162.52 808.69 3348.82 732.42 3347.03 1128.64 3497.31 1128.64 3497.31 880.24 3544.56 880.24 3544.56 688.55 3572.91 688.55 3572.91 433.4 3587.76 433.4 3587.76 688.55 3617.46 688.55 3617.46 880.24 3662.01 880.24 3662.01 1061.14 3714.66 1061.14 3714.66 989.59 3799.71 989.59 3799.71 539.6 3999.5 539.6 3999.5 1128.64 4021.64 1128.64 4021.64 891.04 4207.4 891.04 4207.4 1128.64 4277.6 1128.64 4277.6 997.69 4397.75 997.69 4397.75 896.44 4525.99 819.5 4663.69 896.44 4663.69 1098.94 4890.49 1098.94 4890.49 783.04 5087.58 783.04 5087.58 1073.2 5225.25 1073.2 5225.25 1128.64 5225.25 1190.73 5325.86 1190.73 5325.86 1379.04 5225.25 1379.04 5205.09 1381.94 2802.54 1381.94 2802.54 1128.64 2802.54 1128.64"
                                            fill="#50d7ff" stroke="#e6e7e8" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="1145.05 1381.27 1341.48 1381.27 1341.48 1358.89 1145.05 1358.89 1145.05 1381.27 1145.05 1381.27"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1145.05,1357.69h197.62v24.78H1143.84v-24.78Zm195.22,2.4h-194v20h194v-20Z"
                                            fill="#fff"></path>
                                        <polygon
                                            points="1150.27 1268.03 1346.7 1268.03 1346.7 980.57 1150.27 980.57 1150.27 1268.03 1150.27 1268.03"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1150.27,979.37H1347.9v289.86H1149.07V979.37Zm195.23,2.4h-194v285h194v-285Z"></path>
                                        <polygon
                                            points="4128.59 1381.5 4395.49 1381.5 4395.49 954.05 4128.59 954.05 4128.59 1381.5 4128.59 1381.5"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M4128.59,950.46h270.5V1385.1H4125V950.46Zm263.3,7.19H4132.18V1377.9h259.71V957.65Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1192.39 1135.8 1228.3 1135.8 1228.3 1099.88 1192.39 1099.88 1192.39 1135.8 1192.39 1135.8"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="5126.45 1382.81 5170.88 1382.81 5170.88 1318.31 5126.45 1318.31 5126.45 1382.81 5126.45 1382.81"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M3986.66,1159.11a64.62,64.62,0,1,1-64.62,64.62,64.62,64.62,0,0,1,64.62-64.62Z"
                                            fill="#e9fbff" fill-rule="evenodd"></path>
                                        <path
                                            d="M3986.66,1155.46a68.28,68.28,0,1,1-48.27,20,68.06,68.06,0,0,1,48.27-20Zm43.11,25.16a61,61,0,1,0,17.86,43.11,60.78,60.78,0,0,0-17.86-43.11Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="3998.75 1221.41 3989.72 1233.38 3983.91 1228.99 3992.93 1217.02 3998.75 1221.41 3998.75 1221.41"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3969.63 1229.79 3989.03 1247.09 3984.18 1252.51 3964.79 1235.2 3969.63 1229.79 3969.63 1229.79"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M1192.27,1034.93l39.49-.1.11,43.08-43.09.1-.1-43.07Zm32.35,7.09-28.76.07.07,28.74,28.75-.07-.06-28.74Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M1192.35,1096.34l39.48-.08.11,43.06-43.08.11-.1-43.09Zm32.34,7.09-28.75.06.07,28.76,28.75-.07-.07-28.75Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M1192.7,1160l39.48-.09.1,43.07-43.08.1-.1-43.08Zm32.34,7.09-28.75.06.06,28.75,28.75-.06-.06-28.75Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1265.63 1038.4 1301.54 1038.33 1301.62 1074.23 1265.71 1074.32 1265.63 1038.4 1265.63 1038.4"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1265.63,1034.82l39.49-.09.09,43.08-43.07.1-.1-43.08Zm32.34,7.09-28.75.07.06,28.75,28.75-.07-.06-28.75Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M1265.6,1097l38.76-.1.1,41.62-41.62.11-.1-41.63Zm33.07,5.62-30.21.08.07,30.21,30.21-.08-.07-30.21Z"
                                            fill="#fc0"></path>
                                        <path
                                            d="M1265.72,1159.7l39.48-.1.1,43.09-43.08.1-.09-43.08Zm32.33,7.08-28.74.08.06,28.75,28.75-.07-.07-28.76Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="5088.89 1382.24 5230.01 1382.24 5230.01 1022.22 5088.89 1022.22 5088.89 1382.24 5088.89 1382.24"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M5092.52,1378.59h133.85V1025.87H5092.52v352.72Zm137.48,7.3H5085.21V1018.58h148.46v367.31Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="5204.02 1300.04 5109.83 1300.04 5109.83 1292.47 5207.7 1292.47 5207.7 1300.04 5204.02 1300.04 5204.02 1300.04"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5204.15 1276.77 5109.92 1276.77 5109.92 1269.2 5207.78 1269.2 5207.78 1276.77 5204.15 1276.77 5204.15 1276.77"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5204.24 1253.64 5110.01 1253.64 5110.01 1246.07 5207.87 1246.07 5207.87 1253.64 5204.24 1253.64 5204.24 1253.64"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5204.24 1230.77 5110.01 1230.77 5110.01 1223.19 5207.87 1223.19 5207.87 1230.77 5204.24 1230.77 5204.24 1230.77"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5204.33 1207.63 5110.14 1207.63 5110.14 1200.05 5208 1200.05 5208 1207.63 5204.33 1207.63 5204.33 1207.63"
                                            fill="#fc0"></polygon>
                                        <polygon
                                            points="5204.28 1185.34 5110.09 1185.34 5110.09 1177.77 5207.96 1177.77 5207.96 1185.34 5204.28 1185.34 5204.28 1185.34"
                                            fill="#fc0"></polygon>
                                        <polygon
                                            points="5204.28 1162.34 5110.09 1162.34 5110.09 1154.76 5207.96 1154.76 5207.96 1162.34 5204.28 1162.34 5204.28 1162.34"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5204.42 1139.07 5110.23 1139.07 5110.23 1131.49 5208.05 1131.49 5208.05 1139.07 5204.42 1139.07 5204.42 1139.07"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5204.5 1115.94 5110.31 1115.94 5110.31 1108.37 5208.13 1108.37 5208.13 1115.94 5204.5 1115.94 5204.5 1115.94"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5204.5 1093.06 5110.31 1093.06 5110.31 1085.49 5208.13 1085.49 5208.13 1093.06 5204.5 1093.06 5204.5 1093.06"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5204.64 1069.94 5110.4 1069.94 5110.4 1062.36 5208.27 1062.36 5208.27 1069.94 5204.64 1069.94 5204.64 1069.94"
                                            fill="#fc0"></polygon>
                                        <polygon
                                            points="5074.85 1022.23 5247.35 1022.23 5247.35 993.52 5074.85 993.52 5074.85 1022.23 5074.85 1022.23"
                                            fill="#fc0" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M5078.48,1018.59h165.2V997.17h-165.2v21.42Zm168.88,7.29H5071.18v-36H5251v36Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1220.94 1296.6 1220.94 1360.8 1145.07 1361.65 1144.22 1270.9 1352.57 1269.5 1352.57 1361.47 1273.86 1361.47 1273.86 1296.6 1220.94 1296.6 1220.94 1296.6"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M5008.21,1044.37h0a45.67,45.67,0,0,1,45.52,45.51v100.64a45.67,45.67,0,0,1-45.52,45.53h0a45.65,45.65,0,0,1-45.53-45.53V1089.88a45.64,45.64,0,0,1,45.53-45.51Z"
                                            fill="#e9fbff" fill-rule="evenodd"></path>
                                        <path
                                            d="M5008.21,1040.77a49.27,49.27,0,0,1,49.1,49.11v100.64a49.11,49.11,0,0,1-98.21,0V1089.88a49.27,49.27,0,0,1,49.11-49.11Zm29.6,19.51a41.94,41.94,0,0,0-71.54,29.6v100.64a41.92,41.92,0,0,0,83.83,0V1089.88a41.89,41.89,0,0,0-12.29-29.6Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="5028.36 1122.29 5013.76 1141.65 5007.94 1137.26 5022.55 1117.89 5028.36 1122.29 5028.36 1122.29"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="4981.57 1138.85 5012.93 1166.82 5008.07 1172.24 4976.77 1144.27 4981.57 1138.85 4981.57 1138.85"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M1150.27,977l199.33-.46.67,287.92,8.41,0,.29,121.5q-110.17.24-220.36.51l-.28-121.48,9,0L1146.68,977Zm192.18,6.72-188.59.43.62,280.76,188.63-.45-.66-280.74Zm9.08,287.89-206,.49.25,107.16,206-.48-.25-107.17Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2949.72 1386.43 3941.89 1386.43 3941.89 1378.79 2949.72 1378.79 2949.72 1386.43 2949.72 1386.43"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3969.8 1386.59 4003.82 1386.59 4003.82 1378.92 3969.8 1378.92 3969.8 1386.59 3969.8 1386.59"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="828.14 1386.43 2041.08 1386.43 2041.08 1379.27 828.14 1379.27 828.14 1386.43 828.14 1386.43"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3379.53 1382.61 3496.42 1382.61 3496.42 1034.07 3379.53 1034.07 3379.53 1382.61 3379.53 1382.61"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M3379.53,1030.48H3500V1386.2H3375.94V1030.48Zm113.29,7.19H3383.13V1379h109.69V1037.67Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="3467.26 1055.52 3625.2 1055.52 3625.2 1382.3 3467.26 1382.3 3467.26 1304.26 3340.59 1304.26 3340.59 1240.85 3467.26 1240.85 3467.26 1055.52 3467.26 1055.52"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M3467.26,1051.92H3628.8v334H3463.66v-78H3337v-70.6h126.66V1051.92Zm154.35,7.2H3470.85v185.33H3344.19v56.21h126.66v78h150.76V1059.12Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M3406.37,1324.39h37.38v60.13h-41v-60.13Zm30.18,7.19H3410v45.75h26.59v-45.75Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="3356.23 1303.88 3359.96 1303.88 3359.96 1384.84 3352.63 1384.84 3352.63 1303.88 3356.23 1303.88 3356.23 1303.88"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="4112.69 953.78 4408.7 953.78 4408.7 932.67 4112.69 932.67 4112.69 953.78 4112.69 953.78"
                                            fill="#ffcd03" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M4112.69,929.07H4412.3v28.3H4109.1v-28.3Zm292.41,7.19H4116.29v13.93H4405.1V936.26Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4217.72 1386.17 4610.32 1386.17 4610.32 1378.5 4217.72 1378.5 4217.72 1386.17 4217.72 1386.17"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="4624.08 1386.67 5380.28 1386.67 5380.28 1379.04 4624.08 1379.04 4624.08 1386.67 4624.08 1386.67"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5270.27 1381.93 5338.25 1381.93 5338.25 1151.35 5270.27 1151.35 5270.27 1381.93 5270.27 1381.93"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M5338.27,1385.66H5266.6v-238h75.3v238ZM5274,1378.2h60.65V1155.08H5274V1378.2Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="5319.16 1184.89 5305.08 1184.89 5305.08 1176.49 5322.83 1176.49 5322.83 1184.89 5319.16 1184.89 5319.16 1184.89"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5300.01 1241.02 5285.93 1241.02 5285.93 1232.63 5303.68 1232.63 5303.68 1241.02 5300.01 1241.02 5300.01 1241.02"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5324.67 1280.45 5310.55 1280.45 5310.55 1272.05 5328.3 1272.05 5328.3 1280.45 5324.67 1280.45 5324.67 1280.45"
                                            fill="#4a4a4a"></polygon>
                                        <g id="location-mark-2">
                                            <path class="LocationMarkBase___3b19t"
                                                  d="M4978.9,776.79c.79.82,1.57,1.63,2.4,2.39L5014,812.73l30.35-32.3a84.64,84.64,0,0,0,6.73-7.57,47,47,0,1,0-72.15,3.93Z"
                                                  fill="#00b4ff" fill-rule="evenodd"></path>
                                            <path class="LocationMarkBaseOutline___3bHh6"
                                                  d="M4981.57,774.31l1.09,1.13c10.58,10.12,21,21.47,31.22,32,9.67-10.26,19.29-20.56,28.95-30.77a63.76,63.76,0,0,0,5.29-6l.05,0a42.24,42.24,0,0,0,6.38-12.26,42.72,42.72,0,0,0,2.19-13.68,43.4,43.4,0,1,0-75.17,29.58Zm-4.07,6.27-1.27-1.31a50.48,50.48,0,0,1-13.6-34.54,50.71,50.71,0,1,1,101.41,0,51.06,51.06,0,0,1-2.58,16A50.45,50.45,0,0,1,5054,775a71,71,0,0,1-5.86,6.7c-11.41,12-22.74,24.19-34.11,36.28l-35.2-36.18c-.52-.46-1-.88-1.31-1.24Z"
                                                  fill="#00b4ff"></path>
                                            <path class="LocationMarkCircle___1r9JN"
                                                  d="M5012.75,722.11a21.25,21.25,0,1,1-21.26,21.25,21.26,21.26,0,0,1,21.26-21.25Z"
                                                  fill="#fff" fill-rule="evenodd"></path>
                                            <path class="LocationMarkBaseOutline___3bHh6"
                                                  d="M5012.75,718.46a25,25,0,1,1-17.58,7.3,24.88,24.88,0,0,1,17.58-7.3Zm12.46,12.46a17.7,17.7,0,1,0,5.11,12.44,17.59,17.59,0,0,0-5.11-12.44Z"
                                                  fill="#fff"></path>
                                        </g>
                                        <polygon
                                            points="5159.29 938.15 5163.05 938.15 5163.05 997.15 5155.7 997.15 5155.7 938.15 5159.29 938.15 5159.29 938.15"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3780.27 641.87 3776.32 641.87 3776.32 568.24 3783.96 568.24 3783.96 641.87 3780.27 641.87 3780.27 641.87"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3712.77 666.51 3712.77 641.7 3840.46 641.7 3840.46 666.51 3870.83 666.51 3870.83 1381.54 3685.58 1381.54 3685.58 666.51 3712.77 666.51 3712.77 666.51"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="5404.91 1386.59 5899.44 1386.59 5899.44 1378.92 5404.91 1378.92 5404.91 1386.59 5404.91 1386.59"
                                            fill="#4a4a4a"></polygon>
                                        <g id="cloud-5" class="Float6s___1rh_2">
                                            <path
                                                d="M4107.67,713.3a25.59,25.59,0,0,1,14.3,4.34,39,39,0,0,1,74.33,14.56H4082.93a25.65,25.65,0,0,1,24.74-18.9Z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M4107.67,709.7a29.25,29.25,0,0,1,8.52,1.28,28.78,28.78,0,0,1,4.31,1.69,42.87,42.87,0,0,1,13.95-14.58,42.56,42.56,0,0,1,65.44,34l.16,3.75H4078.23l1.23-4.54a29.27,29.27,0,0,1,28.21-21.56Zm6.44,8.13a22.11,22.11,0,0,0-25.92,10.77h104.17a35.4,35.4,0,0,0-67.14-9.46l-1.76,3.83-3.49-2.35a22.1,22.1,0,0,0-5.86-2.79Z"
                                                fill="#4a4a4a"></path>
                                        </g>
                                        <polygon
                                            points="3156.82 1381.95 3194.87 1381.95 3194.87 1318.37 3156.82 1318.37 3156.82 1381.95 3156.82 1381.95"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="3105.47 1382.35 3247.6 1382.35 3247.6 1019.76 3105.47 1019.76 3105.47 1382.35 3105.47 1382.35"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M3109.15,1378.68h134.78V1023.43H3109.15v355.25ZM3247.6,1386H3101.79V1016.08h149.49V1386Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="3141.87 1299.56 3126.57 1299.56 3126.57 1291.94 3145.55 1291.94 3145.55 1299.56 3141.87 1299.56 3141.87 1299.56"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3203.65 1276.12 3172.29 1276.12 3172.29 1268.49 3207.33 1268.49 3207.33 1276.12 3203.65 1276.12 3203.65 1276.12"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3166.98 1252.83 3142.62 1252.83 3142.62 1245.2 3170.66 1245.2 3170.66 1252.83 3166.98 1252.83 3166.98 1252.83"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3221.65 1229.8 3190.87 1229.8 3190.87 1222.17 3225.33 1222.17 3225.33 1229.8 3221.65 1229.8 3221.65 1229.8"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3137.74 1206.48 3126.9 1206.48 3126.9 1198.86 3141.42 1198.86 3141.42 1206.48 3137.74 1206.48 3137.74 1206.48"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3192.89 1184.04 3183.7 1184.04 3183.7 1176.41 3196.57 1176.41 3196.57 1184.04 3192.89 1184.04 3192.89 1184.04"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3207.8 1160.87 3185.09 1160.87 3185.09 1153.25 3211.47 1153.25 3211.47 1160.87 3207.8 1160.87 3207.8 1160.87"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3147.95 1137.43 3144.1 1137.43 3144.1 1129.81 3151.63 1129.81 3151.63 1137.43 3147.95 1137.43 3147.95 1137.43"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3150.16 1114.14 3127.06 1114.14 3127.06 1106.52 3153.84 1106.52 3153.84 1114.14 3150.16 1114.14 3150.16 1114.14"
                                            fill="#fc0"></polygon>
                                        <polygon
                                            points="3221.94 1091.1 3194.75 1091.1 3194.75 1083.48 3225.62 1083.48 3225.62 1091.1 3221.94 1091.1 3221.94 1091.1"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M3208.83,1382.18v-.29a17.54,17.54,0,0,1,14.93-17.34v-.19a37.59,37.59,0,1,1,75.17,0c0,.85,0,1.7-.08,2.54a21.43,21.43,0,0,1,28,15.28Z"
                                            fill="#00b4ff" fill-rule="evenodd"></path>
                                        <path
                                            d="M3205.25,1382.22l0-.33a21.17,21.17,0,0,1,15-20.22,41.18,41.18,0,0,1,82.23.65,25.25,25.25,0,0,1,3.58-.26,25,25,0,0,1,24.33,19.32l1,4.4H3205.3l-.05-3.56Zm10.53-9.42a13.65,13.65,0,0,0-3,5.79h108.91a17.86,17.86,0,0,0-18.73-9.08,18.07,18.07,0,0,0-2.95.78l-5.16,1.84.44-6.62v-1.15a34,34,0,0,0-68,0h0l0,3.29-3.11.45a13.94,13.94,0,0,0-8.5,4.7Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2668.96 986 2848.97 986 2848.97 965.95 2668.96 965.95 2668.96 986 2668.96 986"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="2680.41 1127.61 2721.92 1127.61 2721.92 1054.49 2680.41 1054.49 2680.41 1127.61 2680.41 1127.61"
                                            fill="#00aeef" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="2680.41 1127.61 2721.92 1127.61 2721.92 1054.49 2680.41 1054.49 2680.41 1127.61 2680.41 1127.61"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2682.23,1125.79h37.86v-69.48h-37.86v69.48Zm39.69,3.65h-43.34v-76.78h45.16v76.78Z"
                                            fill="#00b4ff"></path>
                                        <polygon
                                            points="2678.55 1381.67 2844.17 1381.67 2844.17 1290.79 2678.55 1290.79 2678.55 1381.67 2678.55 1381.67"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2844.16,1385.4H2674.94v-98.34h172.84v98.34Zm-162-7.46h158.38v-83.42H2682.17v83.42Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2679.71 1269.84 2844.12 1269.84 2844.12 986.63 2679.71 986.63 2679.71 1269.84 2679.71 1269.84"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2683.36,1266.19h157.11V990.28H2683.36v275.91Zm160.76,7.3H2676.06V983h171.71v290.51Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2668.96 986 2855.65 986 2855.65 965.95 2668.96 965.95 2668.96 986 2668.96 986"
                                            fill="#fc0" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2672.69,982.28h179.23v-12.6H2672.69v12.6Zm182.95,7.45H2665.23v-27.5h194.14v27.5Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M2783.88,1385.55h-56.52v-49.2h60.16v49.2Zm-49.23-7.76h45.58v-33.68h-45.58v33.68Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2842.74 1058.14 2676.06 1058.14 2676.06 1049.61 2846.39 1049.61 2846.39 1058.14 2842.74 1058.14 2842.74 1058.14"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2665.17 1290.06 2855.56 1290.06 2855.56 1270 2665.17 1270 2665.17 1290.06 2665.17 1290.06"
                                            fill="#fc0" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2668.9,1286.33h182.93v-12.6H2668.9v12.6Zm186.66,7.46H2661.44v-27.52h197.85v27.52Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2355.61 1381.38 2603.79 1381.38 2603.79 694.38 2355.61 694.38 2355.61 1381.38 2355.61 1381.38"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2355.61,690.78h251.78q-.13,347.1,0,694.2H2352V690.78ZM2600.2,698h-241v679.82h241V698Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2191.23 1331.46 2308.41 1331.46 2308.41 1321.44 2191.23 1321.44 2191.23 1331.46 2191.23 1331.46"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2194.82,1328.55h110v-4.2h-110v4.2Zm113.59,5.83H2187.63v-15.86H2312v15.86Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2183.05 1353.2 2315.8 1353.2 2315.8 1343.17 2183.05 1343.17 2183.05 1353.2 2183.05 1353.2"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2187.13,1350.26h124.6v-4.16h-124.6v4.16Zm128.67,5.87H2179v-15.89h140.9v15.89Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2191.01 1311.57 2308.19 1311.57 2308.19 1301.54 2191.01 1301.54 2191.01 1311.57 2191.01 1311.57"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2194.6,1308.65h110v-4.2h-110v4.2Zm113.59,5.83H2187.41v-15.86h124.38v15.86Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2299.71 1355.05 2302.59 1355.05 2302.59 1379.46 2296.83 1379.46 2296.83 1355.05 2299.71 1355.05 2299.71 1355.05"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2199.91 1354.82 2202.79 1354.82 2202.79 1379.23 2197.03 1379.23 2197.03 1354.82 2199.91 1354.82 2199.91 1354.82"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2090.82 1386.27 2884.45 1386.27 2884.45 1378.54 2090.82 1378.54 2090.82 1386.27 2090.82 1386.27"
                                            fill="#4a4a4a"></polygon>
                                        <g id="cloud-3">
                                            <path
                                                d="M1939.44,617.72a38.9,38.9,0,0,1,21.74,6.61,59.35,59.35,0,0,1,113.19,22.16H1901.75a39.09,39.09,0,0,1,37.69-28.77Z"
                                                fill="#00b4ff" fill-rule="evenodd"></path>
                                            <path
                                                d="M1939.44,614.12a42.6,42.6,0,0,1,20.26,5.13,63.4,63.4,0,0,1,21.51-23.12A62.93,62.93,0,0,1,2078,646.34l.18,3.75H1897.06l1.24-4.54a42.67,42.67,0,0,1,41.14-31.43Zm10.32,8.71a35.59,35.59,0,0,0-31.82,5.73,35.7,35.7,0,0,0-11.15,14.33h163.7a55.77,55.77,0,0,0-106.06-17.06l-1.76,3.82-3.49-2.34a34.88,34.88,0,0,0-9.42-4.48Z"
                                                fill="#fc0"></path>
                                            <path
                                                d="M1939.44,614.12a42.6,42.6,0,0,1,20.26,5.13,63.4,63.4,0,0,1,21.51-23.12A62.93,62.93,0,0,1,2078,646.34l.18,3.75H1897.06l1.24-4.54a42.67,42.67,0,0,1,41.14-31.43Zm10.32,8.71a35.59,35.59,0,0,0-31.82,5.73,35.7,35.7,0,0,0-11.15,14.33h163.7a55.77,55.77,0,0,0-106.06-17.06l-1.76,3.82-3.49-2.34a34.88,34.88,0,0,0-9.42-4.48Z"
                                                fill="#00b4ff" stroke="#00b4ff" stroke-miterlimit="2.61"
                                                stroke-width="0.22"></path>
                                        </g>
                                        <g id="airplane">
                                            <polygon
                                                points="1388.31 20.69 1421.4 67.45 1471.98 55.42 1407.06 15.99 1388.31 20.69 1388.31 20.69"
                                                fill="#fff" fill-rule="evenodd"></polygon>
                                            <path
                                                d="M1390.29,21.42l31.62,44.67,47-11.16-62-37.66-16.58,4.15Zm30.14,46.71L1386.33,20l20.92-5.24,65.36,39.7-.35,2.18L1420.9,68.8l-.47-.67Z"
                                                fill="#fff"></path>
                                            <polygon
                                                points="1256.66 6.75 1277.53 92.97 1345.53 75.23 1278.97 3.59 1256.66 6.75 1256.66 6.75"
                                                fill="#fff" fill-rule="evenodd"></polygon>
                                            <path
                                                d="M1258.13,7.76l20.27,83.75,64.9-16.93L1278.52,4.86l-20.39,2.9Zm18.23,85.5L1255.19,5.75l24.22-3.43,68.36,73.56q-35.57,9.27-71.12,18.56l-.29-1.18Z"
                                                fill="#fff"></path>
                                            <path
                                                d="M1444.12,60.34,1254.31,92c-2.07.34-4.7,2.9-3.19,4.33,12.88,12.14,55.48,39.55,101.23,41.73,50.15,2.39,79.26-6.66,127.37-14,36-5.52,73.2-10.07,108.89-16.31,14.78-2.58,23.8-7.85,7.9-26.5-10.84-12.72-21-21.44-33.88-26.19-34-12.52-76.23-1.69-118.51,5.35Z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M1444.71,63.88,1255.5,95.4c8.29,7.17,25,18.28,45.79,26.87,15.43,6.36,33.1,11.3,51.22,12.17,37.2,1.77,62.79-2.83,93.37-8.33,10.52-1.89,21.62-3.89,33.31-5.68,13-2,26.93-4,40.9-5.94,22.69-3.2,45.47-6.43,67.91-10.34,6.39-1.12,11.45-2.64,12.91-5.38s-.32-7.28-7.13-15.26a113.88,113.88,0,0,0-15.67-15.6,59.82,59.82,0,0,0-16.71-9.55c-28.06-10.33-62.53-4.14-97.89,2.22-6.48,1.16-13,2.34-18.8,3.3Zm-191,24.54L1443.53,56.8c6.71-1.11,12.73-2.2,18.72-3.27,36.34-6.54,71.77-12.91,101.62-1.91a66.64,66.64,0,0,1,18.71,10.67,121.25,121.25,0,0,1,16.65,16.56c9.1,10.67,10.82,18,8,23.29s-9.62,7.62-18,9.09c-22.17,3.87-45.21,7.13-68.16,10.37-13.42,1.9-26.84,3.8-40.82,5.94-12.42,1.9-23,3.82-33.11,5.63-31,5.57-57,10.24-95,8.43-19-.91-37.52-6.07-53.61-12.7-23.5-9.68-42-22.59-49.9-30a4.83,4.83,0,0,1-1.52-2.79,5.3,5.3,0,0,1,.44-3.07,7.24,7.24,0,0,1,1.34-2,9.09,9.09,0,0,1,4.79-2.65Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M1499.48,104.75l-65,60.7a3.59,3.59,0,0,1-1.94.93l-19.86,2.84a3.56,3.56,0,0,1-2.45-.53l-3.13-2a3.59,3.59,0,0,1-1.08-5l38.08-59.2,6,3.87-35.58,55.32,15.85-2.27,64.13-59.93,4.89,5.25Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M1479.3,51.3a3.59,3.59,0,0,1-3.43,6.3l-69.45-37.88-15.88,2.44L1419,63a3.59,3.59,0,0,1-5.88,4.11l-31.59-45.31a3.55,3.55,0,0,1-.78-1.75,3.6,3.6,0,0,1,3-4.09l22.76-3.49a3.68,3.68,0,0,1,2.25.41L1479.3,51.3Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M1348.16,72.78a3.59,3.59,0,1,1-5.25,4.89l-65.3-70.26-16.52,2.34L1279.54,85a3.58,3.58,0,1,1-7,1.68l-19.35-79-.11-.51a3.59,3.59,0,0,1,3.06-4L1278.47,0a3.6,3.6,0,0,1,3.12,1.11l66.57,71.64Z"
                                                fill="#4a4a4a"></path>
                                            <polygon
                                                points="1301.62 111.2 1350.4 102.73 1277.7 151.16 1301.62 111.2 1301.62 111.2"
                                                fill="#00b4ff" fill-rule="evenodd"></polygon>
                                            <path
                                                d="M1301,107.67l48.78-8.49a3.59,3.59,0,0,1,2.46,6.62l-72.57,48.36a3.59,3.59,0,0,1-5-5l23.83-39.81a3.59,3.59,0,0,1,2.47-1.69Zm33.23,1.51-30.39,5.28-14.91,24.9,45.3-30.18Z"
                                                fill="#00b4ff"></path>
                                            <polygon
                                                points="1572.84 68.19 1538.18 73.5 1537.23 67.4 1575.46 61.54 1576.39 67.65 1572.84 68.19 1572.84 68.19"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="1531.05 75.3 1522.95 76.53 1521.84 69.13 1530.91 67.73 1532.03 75.14 1531.05 75.3 1531.05 75.3"
                                                fill="#00b4ff"></polygon>
                                            <polygon
                                                points="1517.72 77.41 1509.65 78.64 1508.49 71.25 1517.59 69.85 1518.71 77.25 1517.72 77.41 1517.72 77.41"
                                                fill="#00b4ff"></polygon>
                                            <polygon
                                                points="1504.39 79.45 1496.32 80.69 1495.16 73.29 1504.23 71.9 1505.39 79.3 1504.39 79.45 1504.39 79.45"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="1490.91 81.55 1482.82 82.79 1481.69 75.38 1490.75 74 1491.91 81.39 1490.91 81.55 1490.91 81.55"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="1441.45 119.91 1414.59 161.94 1430.53 159.16 1480.77 112.43 1441.45 119.91 1441.45 119.91"
                                                fill="#fff" fill-rule="evenodd"></polygon>
                                            <polygon
                                                points="1477.59 83.81 1469.51 85.06 1468.35 77.65 1477.43 76.26 1478.59 83.67 1477.59 83.81 1477.59 83.81"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="1464.1 85.91 1456.01 87.15 1454.89 79.75 1463.97 78.36 1465.09 85.76 1464.1 85.91 1464.1 85.91"
                                                fill="#00b4ff"></polygon>
                                            <polygon
                                                points="1450.15 87.93 1442.07 89.17 1440.92 81.77 1450.01 80.37 1451.13 87.78 1450.15 87.93 1450.15 87.93"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="1436.66 90.02 1428.57 91.27 1427.45 83.86 1436.51 82.47 1437.67 89.87 1436.66 90.02 1436.66 90.02"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="1144.55 142.2 1243.49 134.04 1244.08 141.2 1145.14 149.37 1144.55 142.2 1144.55 142.2"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="1226.72 78 1186.18 80.96 1185.67 73.79 1226.21 70.83 1226.72 78 1226.72 78"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="1331.55 168.91 1379.17 163.78 1379.92 170.91 1332.32 176.06 1331.55 168.91 1331.55 168.91"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="1294.88 172.43 1315.34 170.22 1316.1 177.35 1295.64 179.57 1294.88 172.43 1294.88 172.43"
                                                fill="#4a4a4a"></polygon>
                                        </g>
                                        <polygon
                                            points="558.99 1385.93 796.56 1385.93 796.56 1378.86 558.99 1378.86 558.99 1385.93 558.99 1385.93"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="498.04 1386.38 548.63 1386.38 548.63 1379.32 498.04 1379.32 498.04 1386.38 498.04 1386.38"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1225.92 981.51 1233.28 981.51 1233.28 959.75 1225.92 959.75 1225.92 981.51 1225.92 981.51"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1262.34 980.58 1269.7 980.58 1269.7 958.82 1262.34 958.82 1262.34 980.58 1262.34 980.58"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M1491.62,1377.57c7,0,12.68,2.22,12.68,5s-5.68,5-12.68,5-12.69-2.22-12.69-5,5.69-5,12.69-5Z"
                                            fill="#fff" fill-rule="evenodd"></path>
                                        <path
                                            d="M1491.62,1375.73a27.3,27.3,0,0,1,9.63,1.58c3,1.18,4.89,3,4.89,5.23s-1.87,4-4.89,5.21a30,30,0,0,1-19.27,0c-3-1.18-4.89-3-4.89-5.21s1.87-4,4.89-5.23a27.32,27.32,0,0,1,9.64-1.58Zm8.29,5a23.59,23.59,0,0,0-8.29-1.32,23.84,23.84,0,0,0-8.3,1.32c-1.58.62-2.55,1.27-2.55,1.81s1,1.18,2.54,1.79a26.56,26.56,0,0,0,16.6,0c1.57-.61,2.55-1.26,2.55-1.79s-1-1.19-2.55-1.81Z"
                                            fill="#fff"></path>
                                        <path
                                            d="M1327.26,1381.27V1381a17.53,17.53,0,0,1,14.93-17.34v-.19a37.59,37.59,0,1,1,75.18,0c0,.85,0,1.7-.09,2.54a21.44,21.44,0,0,1,28,15.28Z"
                                            fill="#fff" fill-rule="evenodd"></path>
                                        <path
                                            d="M1323.67,1381.31l0-.33a21.17,21.17,0,0,1,15-20.22,41.18,41.18,0,0,1,82.23.65,23.9,23.9,0,0,1,3.59-.26,25,25,0,0,1,24.33,19.32l1,4.4H1323.72l0-3.56Zm10.53-9.42a13.79,13.79,0,0,0-3,5.78h108.91a17.8,17.8,0,0,0-21.67-8.29l-5.14,1.83.41-6.61v-1.15a34,34,0,1,0-68,0h0l0,3.28-3.11.46a13.94,13.94,0,0,0-8.5,4.7Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="581.85 1332.16 699.03 1332.16 699.03 1322.13 581.85 1322.13 581.85 1332.16 581.85 1332.16"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M585.44,1329.25h110v-4.2h-110v4.2ZM699,1335.08H578.25v-15.86H702.63v15.86Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="573.67 1353.9 706.42 1353.9 706.42 1343.87 573.67 1343.87 573.67 1353.9 573.67 1353.9"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M577.75,1351h124.6v-4.16H577.75V1351Zm128.67,5.87H569.6v-15.89H710.5v15.89Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="581.62 1312.26 698.81 1312.26 698.81 1302.23 581.62 1302.23 581.62 1312.26 581.62 1312.26"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path d="M585.22,1309.35h110v-4.2h-110v4.2Zm113.59,5.83H578v-15.86H702.4v15.86Z"
                                              fill="#4a4a4a"></path>
                                        <polygon
                                            points="590.52 1355.52 593.4 1355.52 593.4 1379.93 587.65 1379.93 587.65 1355.52 590.52 1355.52 590.52 1355.52"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="689.78 1355.52 692.65 1355.52 692.65 1379.93 686.9 1379.93 686.9 1355.52 689.78 1355.52 689.78 1355.52"
                                            fill="#4a4a4a"></polygon>
                                        <g id="cloud-2" class="Float4s___1w5M-">
                                            <path
                                                d="M2572.42,619.94a25.39,25.39,0,0,1,14.29,4.33,39,39,0,0,1,74.35,14.56H2547.68a25.65,25.65,0,0,1,24.74-18.89Z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M2572.42,616.31a29.27,29.27,0,0,1,8.52,1.31,29.78,29.78,0,0,1,4.31,1.66,42.57,42.57,0,0,1,79.39,19.38l.16,3.76H2543l1.23-4.55a29.39,29.39,0,0,1,28.21-21.56Zm6.44,8.13A22.05,22.05,0,0,0,2553,635.25h104.16a35.39,35.39,0,0,0-35-30,34.93,34.93,0,0,0-19,5.56,35.48,35.48,0,0,0-13.1,15l-1.76,3.84-3.49-2.36a22.27,22.27,0,0,0-5.86-2.8Z"
                                                fill="#4a4a4a"></path>
                                        </g>
                                        <path
                                            d="M1214,872h64.1A13.86,13.86,0,0,1,1292,885.82v62.29a13.86,13.86,0,0,1-13.81,13.82H1214a13.86,13.86,0,0,1-13.81-13.82V885.82A13.86,13.86,0,0,1,1214,872Z"
                                            fill="#00b4ff" fill-rule="evenodd"></path>
                                        <path
                                            d="M1214,868.4h64.1a17.46,17.46,0,0,1,17.41,17.42v62.29a17.4,17.4,0,0,1-5.11,12.29h0a17.38,17.38,0,0,1-12.28,5.11H1214a17.45,17.45,0,0,1-17.41-17.41V885.82a17.38,17.38,0,0,1,5.11-12.29h0A17.31,17.31,0,0,1,1214,868.4Zm64.1,7.2H1214a10.21,10.21,0,0,0-10.21,10.22v62.29A10.26,10.26,0,0,0,1214,958.33h64.1a10.17,10.17,0,0,0,7.21-3v0a10.13,10.13,0,0,0,3-7.21V885.82a10.24,10.24,0,0,0-10.21-10.22Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M3719.1,718.41h28.26v95.13H3715.5V718.41Zm21.07,7.19H3722.7v80.75h17.47V725.6Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M3766.28,718.33h28.27v95.14h-31.86V718.33Zm21.07,7.19h-17.47v80.75h17.47V725.52Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M3810.36,718.45h28.27v95.14h-31.87V718.45Zm21.07,7.2H3814V806.4h17.47V725.65Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1820.99 1382.09 1963.13 1382.09 1963.13 977.2 1820.99 977.2 1820.99 1382.09 1820.99 1382.09"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1824.24,1378.47h135.63V980.82H1824.24v397.65Zm138.88,7.23H1817.73V973.58h148.65V1385.7Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1712.4 1381.69 1780.38 1381.69 1780.38 1151.11 1712.4 1151.11 1712.4 1381.69 1712.4 1381.69"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1780.38,1385.42h-71.64v-238H1784v238Zm-64.33-7.46h60.67V1154.84h-60.67V1378Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1761.29 1184.64 1747.2 1184.64 1747.2 1176.25 1764.94 1176.25 1764.94 1184.64 1761.29 1184.64 1761.29 1184.64"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1742.13 1240.78 1728.03 1240.78 1728.03 1232.39 1745.78 1232.39 1745.78 1240.78 1742.13 1240.78 1742.13 1240.78"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1766.78 1280.21 1752.67 1280.21 1752.67 1271.81 1770.42 1271.81 1770.42 1280.21 1766.78 1280.21 1766.78 1280.21"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M1856,1027.65h28.26v33.17h-31.86v-33.17Zm21.07,7.2h-17.47v18.78H1877v-18.78Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M1903.14,1027.63h28.27v33.17h-31.86v-33.17Zm21.07,7.2h-17.47v18.77h17.47v-18.77Z"
                                            fill="#00b4ff"></path>
                                        <path
                                            d="M1856.18,1075.77h28.27v33.16h-31.86v-33.16Zm21.07,7.19h-17.47v18.78h17.47V1083Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M1903.37,1075.74h28.26v33.17h-31.86v-33.17Zm21.07,7.2H1907v18.77h17.47v-18.77Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M1221.84,905.26h0a2.74,2.74,0,0,1,2.73,2.73v16.35a2.74,2.74,0,0,1-2.73,2.73h0a2.74,2.74,0,0,1-2.73-2.73V908a2.74,2.74,0,0,1,2.73-2.73Z"
                                            fill="#4a4a4a" fill-rule="evenodd"></path>
                                        <path
                                            d="M1221.84,904.06a3.93,3.93,0,0,1,3.93,3.93v16.35a3.94,3.94,0,0,1-3.93,3.93,3.89,3.89,0,0,1-2.77-1.15,3.93,3.93,0,0,1-1.15-2.78V908a3.94,3.94,0,0,1,3.92-3.93Zm1.08,2.86a1.53,1.53,0,0,0-1.08-.46,1.52,1.52,0,0,0-1.52,1.53v16.35a1.55,1.55,0,0,0,.44,1.08,1.52,1.52,0,0,0,1.08.45,1.54,1.54,0,0,0,1.53-1.53V908a1.48,1.48,0,0,0-.45-1.07Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1735.94 1381.94 1757.13 1381.94 1757.13 1346.2 1735.94 1346.2 1735.94 1381.94 1735.94 1381.94"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1735.94,1342.6h24.78v42.93h-28.38V1342.6Zm17.59,7.2h-14v28.54h14V1349.8Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4464.12 1332.34 4581.3 1332.34 4581.3 1322.31 4464.12 1322.31 4464.12 1332.34 4464.12 1332.34"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M4467.71,1329.42h110v-4.2h-110v4.2Zm113.59,5.83H4460.52V1319.4h124.37v15.85Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4455.94 1354.07 4588.69 1354.07 4588.69 1344.04 4455.94 1344.04 4455.94 1354.07 4455.94 1354.07"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M4460,1351.14h124.6V1347H4460v4.16Zm128.68,5.87H4451.87v-15.9h140.9V1357Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4463.89 1312.44 4581.08 1312.44 4581.08 1302.41 4463.89 1302.41 4463.89 1312.44 4463.89 1312.44"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M4467.49,1309.53h110v-4.21h-110v4.21Zm113.59,5.82H4460.29V1299.5h124.38v15.85Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4572.59 1355.92 4575.47 1355.92 4575.47 1380.34 4569.72 1380.34 4569.72 1355.92 4572.59 1355.92 4572.59 1355.92"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="4472.79 1355.69 4475.67 1355.69 4475.67 1380.11 4469.91 1380.11 4469.91 1355.69 4472.79 1355.69 4472.79 1355.69"
                                            fill="#4a4a4a"></polygon>
                                        <g id="location-mark">
                                            <path class="LocationMarkBaseHollow___3K48C"
                                                  d="M1348.18,677.39a24.92,24.92,0,1,1-17.6,7.29,24.77,24.77,0,0,1,17.6-7.29Zm12.44,12.45a17.6,17.6,0,1,0,5.15,12.44,17.52,17.52,0,0,0-5.15-12.44Z"
                                                  fill="#4a4a4a"></path>
                                            <path class="LocationMarkBaseHollow___3K48C"
                                                  d="M1317,733.23l1.09,1.13c10.6,10.12,21,21.48,31.24,32,9.64-10.25,19.25-20.55,28.94-30.76a63.86,63.86,0,0,0,5.29-6h0a43.45,43.45,0,1,0-66.58,3.63Zm-4.07,6.28-1.26-1.32a50.71,50.71,0,1,1,77.74-4.24,72.14,72.14,0,0,1-5.87,6.7c-11.42,12-22.75,24.18-34.12,36.28l-35.19-36.18c-.51-.46-.94-.88-1.3-1.24Z"
                                                  fill="#4a4a4a"></path>
                                        </g>
                                        <path
                                            d="M2444.41,845.7h28.26v78.68h-31.86V845.7Zm21.06,7.2H2448v64.29h17.47V852.9Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M2491.59,845.64h28.26v78.68H2488V845.64Zm21.07,7.2h-17.47v64.29h17.47V852.84Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M2535.67,845.74h28.26v78.68h-31.86V845.74Zm21.07,7.2h-17.48v64.29h17.48V852.94Z"
                                            fill="#fc0"></path>
                                        <path
                                            d="M2535.67,845.74h28.26v78.68h-31.86V845.74Zm21.07,7.2h-17.48v64.29h17.48V852.94Z"
                                            fill="none" stroke="#fc0" stroke-miterlimit="2.61"
                                            stroke-width="0.22"></path>
                                        <polygon
                                            points="2453.86 784.86 2514.34 784.86 2514.34 767.78 2453.86 767.78 2453.86 784.86 2453.86 784.86"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2452.67,784.86V766.58h62.87v19.48h-62.87v-1.2Zm2.4-15.88v14.69h58.07V769Z"
                                            fill="#00b4ff"></path>
                                        <polygon
                                            points="2475.67 807.04 2492.76 807.04 2492.76 746.57 2475.67 746.57 2475.67 807.04 2475.67 807.04"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M2475.67,745.37H2494v62.87h-19.48V745.37Zm15.88,2.39h-14.68v58.08h14.68V747.76Z"
                                            fill="#00b4ff"></path>
                                        <path
                                            d="M2396.8,844.79h28.26v78.67H2393.2V844.79Zm21.07,7.19H2400.4v64.29h17.47V852Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2526.3 1240.17 2469.51 1240.17 2469.51 1232.57 2532.96 1232.57 2532.96 1240.17 2526.3 1240.17 2526.3 1240.17"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2459.89 1216.88 2415.77 1216.88 2415.77 1209.28 2466.55 1209.28 2466.55 1216.88 2459.89 1216.88 2459.89 1216.88"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2558.89 1193.85 2503.14 1193.85 2503.14 1186.25 2565.55 1186.25 2565.55 1193.85 2558.89 1193.85 2558.89 1193.85"
                                            fill="#00b4ff"></polygon>
                                        <polygon
                                            points="2406.94 1170.53 2387.3 1170.53 2387.3 1162.94 2413.6 1162.94 2413.6 1170.53 2406.94 1170.53 2406.94 1170.53"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2506.81 1148.09 2490.16 1148.09 2490.16 1140.5 2513.46 1140.5 2513.46 1148.09 2506.81 1148.09 2506.81 1148.09"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2533.8 1124.92 2492.69 1124.92 2492.69 1117.33 2540.46 1117.33 2540.46 1124.92 2533.8 1124.92 2533.8 1124.92"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2425.43 1101.49 2418.45 1101.49 2418.45 1093.89 2432.08 1093.89 2432.08 1101.49 2425.43 1101.49 2425.43 1101.49"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2429.43 1078.19 2387.59 1078.19 2387.59 1070.6 2436.09 1070.6 2436.09 1078.19 2429.43 1078.19 2429.43 1078.19"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2559.42 1055.15 2510.17 1055.15 2510.17 1047.56 2566.07 1047.56 2566.07 1055.15 2559.42 1055.15 2559.42 1055.15"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2410.44 1031.85 2387.79 1031.85 2387.79 1024.26 2417.1 1024.26 2417.1 1031.85 2410.44 1031.85 2410.44 1031.85"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M2444.83,946.12h28.26v33.61h-31.86V946.12Zm21.07,7.2h-17.47v19.21h17.47V953.32Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M2492,946.1h28.26v33.61h-31.86V946.1Zm21.07,7.19h-17.47v19.22h17.47V953.29Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M2536.09,946.14h28.26v33.61h-31.86V946.14Zm21.07,7.19h-17.47v19.22h17.47V953.33Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M2397.22,945.78h28.26v33.61h-31.86V945.78Zm21.07,7.19h-17.47V972.2h17.47V953Z"
                                            fill="#00b4ff"></path>
                                        <path
                                            d="M2429.56,1305.34h112V1384H2426v-78.68Zm104.76,7.2H2433.15v64.28h101.17v-64.28Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4327.08 1083.92 4364.91 1083.92 4364.91 1001.55 4327.08 1001.55 4327.08 1083.92 4327.08 1083.92"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="4199.46 1064.4 4166.39 1064.4 4166.39 1056.59 4200.74 1056.59 4200.74 1064.4 4199.46 1064.4 4199.46 1064.4"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M4165.27,997.53h41.42v89.57h-45V997.53Zm34.22,7.2h-30.63v75.17h30.63v-75.17Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4279.34 1064.45 4246.27 1064.45 4246.27 1056.64 4280.62 1056.64 4280.62 1064.45 4279.34 1064.45 4279.34 1064.45"
                                            fill="#00b4ff"></polygon>
                                        <path
                                            d="M4245.15,997.59h41.42v89.56h-45V997.59Zm34.23,7.19h-30.63V1080h30.63v-75.17Z"
                                            fill="#00b4ff"></path>
                                        <polygon
                                            points="4279.51 1189.5 4246.44 1189.5 4246.44 1181.7 4280.79 1181.7 4280.79 1189.5 4279.51 1189.5 4279.51 1189.5"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M4245.32,1122.64h41.42v89.56h-45v-89.56Zm34.23,7.19h-30.63V1205h30.63v-75.18Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4361.44 1189.87 4328.37 1189.87 4328.37 1182.06 4362.72 1182.06 4362.72 1189.87 4361.44 1189.87 4361.44 1189.87"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M4327.25,1123h41.42v89.56h-45V1123Zm34.23,7.19h-30.63v75.17h30.63V1130.2Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4113.99 1258.8 4409.99 1258.8 4409.99 1237.68 4113.99 1237.68 4113.99 1258.8 4113.99 1258.8"
                                            fill="#ffcd03" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M4114,1234.09h299.6v28.3h-303.2v-28.3Zm292.41,7.19H4117.59v13.92H4406.4v-13.92Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2925.67 1386.21 2901.6 1386.21 2901.6 1378.54 2931.45 1378.54 2931.45 1386.21 2925.67 1386.21 2925.67 1386.21"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1142.13 1362.42 1342.22 1362.42 1342.22 1355.36 1142.13 1355.36 1142.13 1362.42 1142.13 1362.42"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M1247.25,1299.56l23.15-.06.19,83c-17.46,0-28.53.06-46.25.11l-.26-83.08,23.17-.06v0Z"
                                            fill="#fff" fill-rule="evenodd"></path>
                                        <path
                                            d="M1250.85,1296l23.13-.06.21,90.21h-3.59c-11.83,0-20.72,0-30.73.06l-19.1,0-.28-90.24,30.36-.08v0Zm16,7.12-23.17.06v0l-16,0,.23,75.92,12,0c9,0,17,0,27.13-.06l-.17-75.87Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="971.97 1382.49 1097.87 1382.49 1097.87 832.17 971.97 832.17 971.97 1382.49 971.97 1382.49"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M972,828.57h129.49v557.52H968.38V828.57Zm122.3,7.19H975.57V1378.9h118.7V835.76Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1006.39 1140.2 995.66 1140.2 995.66 1132.58 1008.96 1132.58 1008.96 1140.2 1006.39 1140.2 1006.39 1140.2"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1029.69 1013.5 1007.69 1013.5 1007.69 1005.88 1032.27 1005.88 1032.27 1013.5 1029.69 1013.5 1029.69 1013.5"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1027.46 1093.47 1010.38 1093.47 1010.38 1085.84 1030.04 1085.84 1030.04 1093.47 1027.46 1093.47 1027.46 1093.47"
                                            fill="#fc0"></polygon>
                                        <polygon
                                            points="1076.19 1070.43 1054.59 1070.43 1054.59 1062.81 1078.77 1062.81 1078.77 1070.43 1076.19 1070.43 1076.19 1070.43"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1010.4 1047.12 1002.8 1047.12 1002.8 1039.5 1012.97 1039.5 1012.97 1047.12 1010.4 1047.12 1010.4 1047.12"
                                            fill="#00b4ff"></polygon>
                                        <polygon
                                            points="1059.56 1001.51 1043.63 1001.51 1043.63 993.89 1062.13 993.89 1062.13 1001.51 1059.56 1001.51 1059.56 1001.51"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1077.81 954.78 1061.61 954.78 1061.61 947.15 1080.39 947.15 1080.39 954.78 1077.81 954.78 1077.81 954.78"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1079.85 931.74 1060.77 931.74 1060.77 924.12 1082.42 924.12 1082.42 931.74 1079.85 931.74 1079.85 931.74"
                                            fill="#00b4ff"></polygon>
                                        <polygon
                                            points="1077.36 908.44 1068.59 908.44 1068.59 900.82 1079.94 900.82 1079.94 908.44 1077.36 908.44 1077.36 908.44"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1070.76 1222.33 1054.83 1222.33 1054.83 1214.7 1073.33 1214.7 1073.33 1222.33 1070.76 1222.33 1070.76 1222.33"
                                            fill="#00b4ff"></polygon>
                                        <polygon
                                            points="1030.32 1175.6 1014.11 1175.6 1014.11 1167.97 1032.89 1167.97 1032.89 1175.6 1030.32 1175.6 1030.32 1175.6"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1016.48 1382.45 1050 1382.45 1050 1300.29 1016.48 1300.29 1016.48 1382.45 1016.48 1382.45"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1016.48,1296.69h37.12v89.36h-40.71v-89.36Zm29.93,7.19h-26.33v75h26.33v-75Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1066.56 1132.07 1044.56 1132.07 1044.56 1124.44 1069.13 1124.44 1069.13 1132.07 1066.56 1132.07 1066.56 1132.07"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1021.46 1203.11 999.45 1203.11 999.45 1195.48 1024.03 1195.48 1024.03 1203.11 1021.46 1203.11 1021.46 1203.11"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="936.74 1109.79 922.15 1129.15 916.33 1124.76 930.92 1105.39 936.74 1109.79 936.74 1109.79"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="889.98 1126.35 921.32 1154.32 916.47 1159.74 885.13 1131.77 889.98 1126.35 889.98 1126.35"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="391.05 1386.05 0 1386.05 0 1378.43 484.99 1378.43 484.99 1386.05 391.05 1386.05 391.05 1386.05"
                                            fill="#4a4a4a"></polygon>
                                        <g id="cloud-4" class="Float3s___3Hxxl">
                                            <path
                                                d="M665.48,730.73a25.48,25.48,0,0,1,14.29,4.34,39,39,0,0,1,74.34,14.56H640.74a25.63,25.63,0,0,1,24.74-18.9Z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M665.48,727.13a29.3,29.3,0,0,1,8.52,1.28,28.14,28.14,0,0,1,4.31,1.69,42.56,42.56,0,0,1,79.38,19.37l.17,3.76H636l1.23-4.54a29.24,29.24,0,0,1,28.21-21.56Zm6.44,8.13A22.08,22.08,0,0,0,646,746H750.16A35.39,35.39,0,0,0,683,736.57l-1.76,3.82-3.5-2.35a21.85,21.85,0,0,0-5.85-2.78Z"
                                                fill="#4a4a4a"></path>
                                        </g>
                                        <g id="cloud-1" class="Float6s___1rh_2">
                                            <path
                                                d="M3323,799.06a25.48,25.48,0,0,1,14.29,4.35A39,39,0,0,1,3411.6,818H3298.23A25.65,25.65,0,0,1,3323,799.06Z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M3323,795.47a29.17,29.17,0,0,1,12.83,3,42.56,42.56,0,0,1,79.38,19.37l.17,3.75H3293.53l1.23-4.54A29.27,29.27,0,0,1,3323,795.47Zm6.44,8.13a22.08,22.08,0,0,0-25.92,10.77h104.16a35.39,35.39,0,0,0-67.13-9.46l-1.77,3.82-3.49-2.35a21.7,21.7,0,0,0-5.85-2.78Z"
                                                fill="#4a4a4a"></path>
                                        </g>
                                        <path
                                            d="M5143.5,1378.19H5174v-55.83H5143.5v55.83Zm34.15,7.31H5136.2v-70.43h45.08v70.43Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M5315.88,1385.64h-26.72V1330.2h29.78v55.44Zm-20.64-7.43h17.58v-40.58h-17.58v40.58Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M1872.83,1305.81h46v78.68h-49.57v-78.68Zm38.78,7.2h-35.18v64.29h35.18V1313Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M1787.11,1380.24V1380a17.52,17.52,0,0,1,14.93-17.33v-.2a37.59,37.59,0,1,1,75.17,0c0,.86,0,1.7-.08,2.55a21.41,21.41,0,0,1,28,15.27Z"
                                            fill="#fc0" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                            fill-rule="evenodd"></path>
                                        <path
                                            d="M3160.49,1378.28h30.71v-56.23h-30.71v56.23Zm34.39,7.35h-41.74v-70.94h45.41v70.94Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M4017.64,1175a58.82,58.82,0,1,1-80.61,80.6,58.13,58.13,0,0,0,80.61-80.6Z"
                                            fill="#00b4ff" fill-rule="evenodd"></path>
                                        <polygon
                                            points="3986.67 1385.25 3983.01 1385.25 3983.01 1212.75 3990.32 1212.75 3990.32 1385.25 3986.67 1385.25 3986.67 1385.25"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M2125.91,1155.06a64.62,64.62,0,1,1-64.62,64.62,64.63,64.63,0,0,1,64.62-64.62Z"
                                            fill="#e9fbff" fill-rule="evenodd"></path>
                                        <path
                                            d="M2125.91,1151.41a68.27,68.27,0,1,1-48.27,20,68.06,68.06,0,0,1,48.27-20Zm43.11,25.15a61,61,0,1,0,17.86,43.12,60.77,60.77,0,0,0-17.86-43.12Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2138 1217.36 2128.98 1229.33 2123.16 1224.94 2132.18 1212.97 2138 1217.36 2138 1217.36"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2108.89 1225.73 2128.28 1243.04 2123.43 1248.46 2104.04 1231.15 2108.89 1225.73 2108.89 1225.73"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M2157.12,1168.29a60,60,0,1,1-82.26,82.24,59.31,59.31,0,0,0,82.26-82.24Z"
                                            fill="#00b4ff" fill-rule="evenodd"></path>
                                        <polygon
                                            points="2125.93 1381.19 2122.26 1381.19 2122.26 1208.69 2129.58 1208.69 2129.58 1381.19 2125.93 1381.19 2125.93 1381.19"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M5038,1062.4a42.83,42.83,0,0,1,13.44,31.11v95a43.09,43.09,0,0,1-42.95,43h0a43.09,43.09,0,0,1-41.57-32.18,42.75,42.75,0,0,0,29.5,11.8h0a43.09,43.09,0,0,0,42.95-43v-94.95a42.72,42.72,0,0,0-1.37-10.74Z"
                                            fill="#00b4ff" fill-rule="evenodd"></path>
                                        <polygon
                                            points="5010.65 1386.24 5006.94 1386.24 5006.94 1111.89 5014.28 1111.89 5014.28 1386.24 5010.65 1386.24 5010.65 1386.24"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M887,1044.19h0a45.67,45.67,0,0,1,45.52,45.51v100.64A45.67,45.67,0,0,1,887,1235.86h0a45.64,45.64,0,0,1-45.52-45.52V1089.7A45.64,45.64,0,0,1,887,1044.19Z"
                                            fill="#e9fbff" fill-rule="evenodd"></path>
                                        <path
                                            d="M887,1040.59a49.25,49.25,0,0,1,49.11,49.11v100.64a49.11,49.11,0,0,1-98.22,0V1089.7A49.25,49.25,0,0,1,887,1040.59Zm29.61,19.5A41.94,41.94,0,0,0,845,1089.7v100.64a41.91,41.91,0,0,0,83.82,0V1089.7a42,42,0,0,0-12.28-29.61Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="907.13 1122.1 892.52 1141.47 886.71 1137.08 901.31 1117.71 907.13 1122.1 907.13 1122.1"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="860.34 1138.66 891.69 1166.64 886.84 1172.05 855.53 1144.09 860.34 1138.66 860.34 1138.66"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M916.79,1062.21a42.81,42.81,0,0,1,13.44,31.12v95a43.09,43.09,0,0,1-43,43h0a43.11,43.11,0,0,1-41.57-32.19,42.78,42.78,0,0,0,29.5,11.81h0a43.09,43.09,0,0,0,42.95-43v-95a42.38,42.38,0,0,0-1.37-10.74Z"
                                            fill="#00b4ff" fill-rule="evenodd"></path>
                                        <polygon
                                            points="889.42 1386.06 885.7 1386.06 885.7 1111.71 893.05 1111.71 893.05 1386.06 889.42 1386.06 889.42 1386.06"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3059.74 1111.6 3045.15 1130.97 3039.34 1126.58 3053.92 1107.21 3059.74 1111.6 3059.74 1111.6"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3012.98 1128.17 3044.32 1156.13 3039.47 1161.56 3008.13 1133.59 3012.98 1128.17 3012.98 1128.17"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M3010,1046h0a45.67,45.67,0,0,1,45.52,45.51v100.64a45.66,45.66,0,0,1-45.52,45.53h0a45.64,45.64,0,0,1-45.52-45.53V1091.51A45.65,45.65,0,0,1,3010,1046Z"
                                            fill="#e9fbff" fill-rule="evenodd"></path>
                                        <path
                                            d="M3010,1042.41a49.25,49.25,0,0,1,49.11,49.1v100.64a49.11,49.11,0,0,1-98.21,0V1091.51a49.25,49.25,0,0,1,49.1-49.1Zm29.61,19.5a41.94,41.94,0,0,0-71.54,29.6v100.64a41.92,41.92,0,0,0,83.83,0V1091.51a41.93,41.93,0,0,0-12.29-29.6Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="3030.13 1123.92 3015.53 1143.28 3009.71 1138.89 3024.32 1119.53 3030.13 1123.92 3030.13 1123.92"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2983.34 1140.48 3014.7 1168.45 3009.84 1173.87 2978.53 1145.9 2983.34 1140.48 2983.34 1140.48"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M3039.79,1064a42.8,42.8,0,0,1,13.44,31.12v94.95a43.08,43.08,0,0,1-42.94,43h0a43.1,43.1,0,0,1-41.58-32.18,42.77,42.77,0,0,0,29.5,11.8h0a43.09,43.09,0,0,0,42.95-43v-95a42.32,42.32,0,0,0-1.37-10.74Z"
                                            fill="#00b4ff" fill-rule="evenodd"></path>
                                        <polygon
                                            points="3012.42 1387.88 3008.7 1387.88 3008.7 1113.53 3016.05 1113.53 3016.05 1387.88 3012.42 1387.88 3012.42 1387.88"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="5079.68 1007.13 5243.13 1007.13 5243.13 1017.84 5079.68 1017.84 5079.68 1007.13 5079.68 1007.13"
                                            fill="#ffb300" stroke="#ffb300" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="2674.69 976.04 2850.65 976.04 2850.65 981.39 2674.69 981.39 2674.69 976.04 2674.69 976.04"
                                            fill="#ffb300" stroke="#ffb300" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="2670.6 1280.14 2851.36 1280.14 2851.36 1285.49 2670.6 1285.49 2670.6 1280.14 2670.6 1280.14"
                                            fill="#ffb300" stroke="#ffb300" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1591.76,1164.09h0a33.39,33.39,0,0,1,33.28,33.27v73.55a33.39,33.39,0,0,1-33.28,33.28h0a33.36,33.36,0,0,1-33.28-33.28v-73.55a33.37,33.37,0,0,1,33.28-33.27Z"
                                            fill="#fc0" stroke="#4a4a4a" stroke-miterlimit="10" stroke-width="6"
                                            fill-rule="evenodd"></path>
                                        <polygon
                                            points="1607.24 1221.6 1596.57 1235.75 1590.84 1231.43 1601.51 1217.28 1607.24 1221.6 1607.24 1221.6"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1572.91 1232.46 1595.83 1252.9 1591.06 1258.24 1568.14 1237.8 1572.91 1232.46 1572.91 1232.46"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M1612.89,1176.45a29.62,29.62,0,0,1,9.29,21.51v73.54a29.77,29.77,0,0,1-29.68,29.68h0a29.78,29.78,0,0,1-28.73-22.24,29.56,29.56,0,0,0,20.39,8.16h0a29.78,29.78,0,0,0,29.68-29.69v-73.54a29.36,29.36,0,0,0-.95-7.42Z"
                                            fill="#ffb300" fill-rule="evenodd"></path>
                                        <polygon
                                            points="1593.55 1378.61 1589.92 1378.61 1589.92 1209.68 1597.14 1209.68 1597.14 1378.61 1593.55 1378.61 1593.55 1378.61"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M779.37,1170.09h0a33.39,33.39,0,0,1,33.28,33.27v73.55a33.39,33.39,0,0,1-33.28,33.28h0a33.36,33.36,0,0,1-33.27-33.28v-73.55a33.36,33.36,0,0,1,33.27-33.27Z"
                                            fill="#fc0" stroke="#4a4a4a" stroke-miterlimit="10" stroke-width="6"
                                            fill-rule="evenodd"></path>
                                        <polygon
                                            points="794.85 1227.6 784.18 1241.75 778.46 1237.43 789.13 1223.28 794.85 1227.6 794.85 1227.6"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="760.53 1238.46 783.44 1258.9 778.67 1264.24 755.76 1243.8 760.53 1238.46 760.53 1238.46"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M800.51,1182.45a29.59,29.59,0,0,1,9.28,21.51v73.54a29.77,29.77,0,0,1-29.68,29.68h0a29.79,29.79,0,0,1-28.73-22.24,29.58,29.58,0,0,0,20.39,8.16h0a29.78,29.78,0,0,0,29.68-29.69v-73.54a29.82,29.82,0,0,0-.94-7.42Z"
                                            fill="#ffb300" fill-rule="evenodd"></path>
                                        <polygon
                                            points="781.16 1384.61 777.54 1384.61 777.54 1215.68 784.75 1215.68 784.75 1384.61 781.16 1384.61 781.16 1384.61"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="4132.19 957.65 4391.89 957.65 4391.89 969.99 4132.19 969.99 4132.19 957.65 4132.19 957.65"
                                            fill="#e9fbff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="3160.49 1322.05 3191.2 1322.05 3191.2 1378.28 3160.49 1378.28 3160.49 1322.05 3160.49 1322.05"
                                            fill="#e9fbff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="3508.76 1092.56 3590.62 1092.56 3590.62 1348.39 3508.76 1348.39 3508.76 1092.56 3508.76 1092.56"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="3591.09 1266.76 3506.44 1266.76 3506.44 1259.22 3594.36 1259.22 3594.36 1266.76 3591.09 1266.76 3591.09 1266.76"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3592.55 1254.68 3507.91 1254.68 3507.91 1247.14 3595.82 1247.14 3595.82 1254.68 3592.55 1254.68 3592.55 1254.68"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3591.04 1134.86 3597.8 1145.02 3508.57 1204.4 3501.8 1194.23 3591.04 1134.86 3591.04 1134.86"
                                            fill="#e9fbff" stroke="#e9fbff" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="3591.34 1169.71 3598.11 1179.88 3508.87 1239.25 3502.11 1229.09 3591.34 1169.71 3591.34 1169.71"
                                            fill="#e9fbff" stroke="#e9fbff" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <path
                                            d="M3504.86,1085.07h92.65v270.22h-96.24V1085.07Zm85.46,7.19h-81.86v255.83h81.86V1092.26Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="3591.54 1178.31 3506.89 1178.31 3506.89 1170.78 3594.8 1170.78 3594.8 1178.31 3591.54 1178.31 3591.54 1178.31"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3590.15 1166.55 3505.5 1166.55 3505.5 1159.01 3593.43 1159.01 3593.43 1166.55 3590.15 1166.55 3590.15 1166.55"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3409.96 1331.58 3437.2 1331.58 3437.2 1379.01 3409.96 1379.01 3409.96 1331.58 3409.96 1331.58"
                                            fill="#e9fbff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M4767.22,1380.52v-.3a17.52,17.52,0,0,1,14.93-17.33v-.2a37.59,37.59,0,1,1,75.17,0q0,1.29-.09,2.55a21.4,21.4,0,0,1,28.05,15.28Z"
                                            fill="#fff" fill-rule="evenodd"></path>
                                        <path
                                            d="M4763.64,1380.56l0-.34a21.2,21.2,0,0,1,15-20.22,41.18,41.18,0,0,1,82.23.65,25,25,0,0,1,27.91,19.06l1,4.4H4763.69l0-3.55Zm10.53-9.42a13.81,13.81,0,0,0-3,5.78h108.92a18,18,0,0,0-4.62-5.5,17.73,17.73,0,0,0-11.05-3.83,16.84,16.84,0,0,0-3.06.26,17.78,17.78,0,0,0-3,.77l-5.14,1.84.42-6.62v-1.15a34,34,0,0,0-68,0h0l0,3.29-3.1.46a13.89,13.89,0,0,0-8.5,4.7Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="2495.19 852.84 2512.66 852.84 2512.66 917.13 2495.19 917.13 2495.19 852.84 2495.19 852.84"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="2448.69 953.49 2466.16 953.49 2466.16 972.53 2448.69 972.53 2448.69 953.49 2448.69 953.49"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="2400.39 852.09 2417.86 852.09 2417.86 916.38 2400.39 916.38 2400.39 852.09 2400.39 852.09"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="2448 852.9 2465.47 852.9 2465.47 917.18 2448 917.18 2448 852.9 2448 852.9"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="2495.61 953.38 2513.08 953.38 2513.08 972.42 2495.61 972.42 2495.61 953.38 2495.61 953.38"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="2539.56 953.38 2557.03 953.38 2557.03 972.42 2539.56 972.42 2539.56 953.38 2539.56 953.38"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <path d="M4327.08,998h41.42v89.56h-45V998Zm34.23,7.2h-30.63v75.17h30.63v-75.17Z"
                                              fill="#4a4a4a"></path>
                                        <polygon
                                            points="4361.27 1064.82 4328.2 1064.82 4328.2 1057.01 4362.56 1057.01 4362.56 1064.82 4361.27 1064.82 4361.27 1064.82"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2723.15 1272.11 2718.26 1272.11 2718.26 986.38 2726.8 986.38 2726.8 1272.11 2723.15 1272.11 2723.15 1272.11"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2763.27 1271.73 2758.39 1271.73 2758.39 985.99 2766.92 985.99 2766.92 1271.73 2763.27 1271.73 2763.27 1271.73"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2804.97 1273.49 2800.1 1273.49 2800.1 987.75 2808.63 987.75 2808.63 1273.49 2804.97 1273.49 2804.97 1273.49"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2843.43 1132.49 2676.76 1132.49 2676.76 1123.97 2847.08 1123.97 2847.08 1132.49 2843.43 1132.49 2843.43 1132.49"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2841.23 1205.49 2679.7 1205.49 2679.7 1196.96 2844.88 1196.96 2844.88 1205.49 2841.23 1205.49 2841.23 1205.49"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="4116.29 944.32 4404.78 944.32 4404.78 949.67 4116.29 949.67 4116.29 944.32 4116.29 944.32"
                                            fill="#ffb300" stroke="#ffb300" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="4118.09 1250.57 4406.58 1250.57 4406.58 1255.92 4118.09 1255.92 4118.09 1250.57 4118.09 1250.57"
                                            fill="#ffb300" stroke="#ffb300" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="4308.2 1296.47 4345.33 1296.47 4345.33 1377.47 4308.2 1377.47 4308.2 1296.47 4308.2 1296.47"
                                            fill="#e9fbff" stroke="#e9fbff" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <path
                                            d="M4308.94,1288.73h41.42v94.67h-45v-94.67Zm34.22,7.19h-30.63v80.29h30.63v-80.29Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4344.05 1348.93 4310.98 1348.93 4310.98 1341.13 4345.33 1341.13 4345.33 1348.93 4344.05 1348.93 4344.05 1348.93"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2433.15 1313.14 2534.32 1313.14 2534.32 1377.42 2433.15 1377.42 2433.15 1313.14 2433.15 1313.14"
                                            fill="#00b4ff" stroke="#00b4ff" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="2487.93 1315.01 2487.93 1384.28 2480.35 1384.28 2480.35 1306.89 2487.93 1306.89 2487.93 1315.01 2487.93 1315.01"
                                            fill="#4a4a4a"></polygon>
                                        <g clip-path="url(#clip-path)">
                                            <image width="113" height="251"
                                                   transform="matrix(0.24, 0, 0, -0.24, 1447.41, 1028.96)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD9CAIAAADvWbQnAAAACXBIWXMAAC5xAAAucQGxbqlcAAACYUlEQVR4Xu3VMQrCQBRF0URiZS24PJfm/qxTxy5gkyHi7c6ppnjV5cPM27ZN/Nvyeo8mnPS8T5fRhl/Imlj2120+mDGwfv9QrjUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKyJZX+t28GMc1xrQtbE8riOJpz3ASFlCxCDimGFAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-2)">
                                            <image width="113" height="251"
                                                   transform="matrix(0.24, 0, 0, -0.24, 1491.51, 1029.06)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD8CAIAAAAkBWeCAAAACXBIWXMAAC5xAAAucQGxbqlcAAACZklEQVR4Xu3TsQkCQRRF0VE20kYEi7YEsR8rEAzFUIONTFxWvNk5ySQvuvzZnG6vwf9c7uN8GNulGb+Y5me/+T5jwePzz7vWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNTPPzeH2fsY5rTciamK7PpQlrHHdjjPEGNbEM90hn9ZAAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-3)">
                                            <image width="113" height="251"
                                                   transform="matrix(0.24, 0, 0, -0.24, 1533.81, 1028.96)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD9CAIAAADvWbQnAAAACXBIWXMAAC5xAAAucQGxbqlcAAACX0lEQVR4Xu3VMQ7CMBQFQQeZigtwfO5Hndq0aVAUxHYznaVXrb7kba01+Lc5xni9z1ZcdDsb8AtZE/P4eGzfZpzbD5+Ua03ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtiHh/7+jbjGteakDUxxxjP+9mKiz5TEAqb+4itaAAAAABJRU5ErkJggg=="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-4)">
                                            <image width="113" height="251"
                                                   transform="matrix(0.24, 0, 0, -0.24, 1447.78, 1113.88)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD9CAIAAADvWbQnAAAACXBIWXMAAC5xAAAucQGxbqlcAAACa0lEQVR4Xu3VsW3DQBBFwaVBJ3ID6sFNqwXXZShkTGWCIxEU/LKZ6IIfPSxwy77vw39bZ+b2e7TijJ/7fBxteIesifX5+lpezDi2/fmkXGtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsibW52vbX8w4x7Um1pm5fh6tOOP7Mg+5MQxuLckQCgAAAABJRU5ErkJggg=="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-5)">
                                            <image width="113" height="251"
                                                   transform="matrix(0.24, 0, 0, -0.24, 1491.88, 1113.98)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD9CAIAAADvWbQnAAAACXBIWXMAAC5xAAAucQGxbqlcAAACYUlEQVR4Xu3UIQ7CQBBA0ZbUcX/PwbgBukEuBlHTlJJ+957aSUb9THYeYzxeE9e6HS3wD1kTy3a4z3tr/GQd34drTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha2LZDuvYW+Mc15qQNbFM0/R8H21x0jyGD/V6H75RD0tSMVITAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-6)">
                                            <image width="114" height="251"
                                                   transform="matrix(0.24, 0, 0, -0.24, 1534.18, 1113.88)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAAD+CAIAAACGD623AAAACXBIWXMAAC7AAAAuwAGdJvZ1AAACX0lEQVR4Xu3VIQrDQBRF0UmJ6/59t9B1lcroqY0JSQrXneMGnrp8mGXOOQisY4zX52zFTe/veJxt+JOylXX/eC5HMy7Zdn+Wm60oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqylXX/2ObRjNvcbEXZyg9OPgwcAFMCKAAAAABJRU5ErkJggg=="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-7)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 2113.16, 959.86)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABa0lEQVR4Xu3UIQ7CQBRF0ZY0Zf97wLItFoCjZnDg2pRw3TlqxFM3PzOPMSb+bZmm6fbYjmaccH+ul6MNv5A1sXxe13Xd2XHotX3/UteakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWRPL5/Xatp0dp7jWhKyJeYxxtOG0N84iESN3DEEfAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-8)">
                                            <image width="114" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 2157.26, 959.91)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAACHCAIAAACqIvG+AAAACXBIWXMAAC7AAAAuwAGdJvZ1AAABaUlEQVR4Xu3SMQrCQBRFUZUQt+K+rcVVuQG7TBO7YGVQvN051R941WWO18dy4K9uz/l+OZz2ZvxI2cq0Xed5/rBj1zLG+9OfrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvTdi1jfNjxLX+2omzluK7r3oZfvACt8A74thcy8AAAAABJRU5ErkJggg=="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-9)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 2199.56, 959.86)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABaElEQVR4Xu3VIQ7CQBBA0ZbUcRGOzQ0I5yLI6kWgMG1K+t17Zsyon9nsPMaYONtyf+2tcMTzPT1u02VvjX/Imli+4zpvr7Fj/f2hXGtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTSzfsY7tNY5xrQlZE/MY3v/5PpwCDwHuuYlgAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-10)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 2113.53, 1004.52)"
                                                 xlink:href="#image-2"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-11)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 2157.63, 1004.57)"
                                                 xlink:href="#image-4"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-12)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 2199.93, 1004.52)"
                                                 xlink:href="#image-3"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-13)">
                                            <image width="114" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 2113.59, 1048.91)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC7AAAAuwAGdJvZ1AAABYUlEQVR4Xu3UIQ7CQBBA0S6p4/6aM3AtEmT14hpUG0i/e0+NGPUzu+PxmguXer6X29kO/5A1se7TfRyscW77+k1da0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJpY92mbB2v8xrUmZE2MOT3+630AiP0MKENabfUAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-14)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 2157.69, 1048.96)"
                                                 xlink:href="#image"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-15)">
                                            <image width="114" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 2199.99, 1048.91)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAACHCAIAAACqIvG+AAAACXBIWXMAAC7AAAAuwAGdJvZ1AAABYUlEQVR4Xu3UKw7CUBBAUUrq2L9nC6yLIKsHSU3DJ1x3jnqTjLqZvGVmrvcT/3V7nM7vdviRspV1P1yWozU+ss3r7WYrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZyroftjla42tutqJsZZnxBSSeFYgOKFX50NYAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-16)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 2113.96, 1093.57)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABZElEQVR4Xu3VIQ6DQBBAUWhw1b1fj8b9qtFbR6ogNHz3nhox6mc2O48xJu62rJ+zFS56v6bH2Q7/kDWx7NNzPljj3PbzSbnWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJpY9mkbB2tc41oTsibmMTz++30BC3ANARk3V9UAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-17)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 2158.06, 1093.62)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABZElEQVR4Xu3UIQ6DQBBAUWhw1b1fj8b9qtFbR1IDoeG799SIUT+zO48xJu62rJ+zFS56v6bH2Q7/WPbpOR+scWL7/Upda0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJpY9mkbB2tc41oTsibmMTz++30BwhgNAb8SWLQAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-18)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 2200.36, 1093.57)"
                                                 xlink:href="#image"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-19)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 3288.15, 906.12)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABXklEQVR4Xu3VIQ7CQBRF0ZaMQ7M/lsb+0NWDa1BtSrjuHDXiqZufzDrnXPi38XqfTbjo+VhuZxt+IWti7K/7ejDj3Pb1SbnWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJoY+2ubBzOuca0JWRMfpAUKA5VPy44AAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-20)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3288.52, 950.78)"
                                                 xlink:href="#image"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-21)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3288.58, 995.16)"
                                                 xlink:href="#image-2"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-22)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3288.95, 1039.82)"
                                                 xlink:href="#image-3"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-23)">
                                            <image width="113" height="134"
                                                   transform="matrix(0.24, 0, 0, -0.24, 3898.59, 642.69)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABZklEQVR4Xu3VMQrCQBRF0Ymk0s24ZPdnnXqsbIIQI97unG7gVZcPs8w5B/+2jjEez6MVJ12OBvxC1sS6e9+WjzO+sr3/KdeakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWRPr7r3NjzPOca0JWRPrGON+PVpx0gvTGAnM5iGEUQAAAABJRU5ErkJggg=="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-24)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3940.89, 642.64)"
                                                 xlink:href="#image-5"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-25)">
                                            <image width="113" height="134"
                                                   transform="matrix(0.24, 0, 0, -0.24, 3898.95, 687.35)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABZUlEQVR4Xu3VIQ7CQBRFUUpGkKDZH0tjf+jqwTWoNiVcd44a8dTNT2aZc174t/F6H0046fm4XI82/ELWxNhe92VnxrH165NyrQlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1MbbXOndmnONaE7Imxm05mnDeByA9ChD6BgFdAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-26)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3941.25, 687.3)"
                                                 xlink:href="#image-6"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-27)">
                                            <image width="113" height="134"
                                                   transform="matrix(0.24, 0, 0, -0.24, 3899.02, 731.74)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABX0lEQVR4Xu3SIQ7CQBRF0Smpgs2wZPaHrh4MooaUEq47R81PnrqZZc75eA7+63I04BeyJtb9cVs+zfjKNt8PvzUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJtb9sc1PM87xWxOyJtYxxv16tOKkFwbtCcgeVKiDAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-28)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3941.32, 731.69)"
                                                 xlink:href="#image-7"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-29)">
                                            <image width="113" height="134"
                                                   transform="matrix(0.24, 0, 0, -0.24, 3899.38, 776.4)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABX0lEQVR4Xu3UIQ7CQBRF0ZaMIEGzv+6M/eGri2tQbUq47hw14qmbn5lf723ir5bndDvb8AtZE2N/PeaDGefWr9/UtSZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWxNhf63Yw4xrXmpA1Me7z2YTrPif6CAyOUJAwAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-30)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3941.68, 776.34)"
                                                 xlink:href="#image-4"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-31)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3899.55, 821.49)"
                                                 xlink:href="#image-9"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-32)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3941.85, 821.44)"
                                                 xlink:href="#image-5"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-33)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 3899.91, 866.15)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABbElEQVR4Xu3UIQ7CQBRF0ZbUobu/Lo0tsC6CRA+OoNqUcN05asRTNz8zjzEm/m25PY4mnLSt0+Vowy+Wz+s678w49vr6TV1rQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE0sn9dr7Mw4x7UmZE0s9+fRhJO2dZrH8Kf+3xtTkA8WAfZdRgAAAABJRU5ErkJggg=="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-34)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3942.21, 866.1)"
                                                 xlink:href="#image-6"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-35)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 3899.98, 910.54)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABW0lEQVR4Xu3UoQ7CUBAAQUrq+H/P/6GrD4OoaaCk62bUu+TU5vKWmXm+blzr/m2Bf6z74bEcrfGTbT4P15qQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE+t+2OZojXNca0LWhKyJZcaHer03AvQMiM4Lo8MAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-36)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3942.28, 910.49)"
                                                 xlink:href="#image-7"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-37)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 3900.34, 955.2)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABZ0lEQVR4Xu3UMQ6CQBBAUTB01tyPm3kGr2ViSY2dsYJg+N171RRT/czu+HhtA5da5uF2tMM/pu90H3fWOLb+PHvXmpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkT03dat501znGtCVkT0/N9tMJJyzyM2+ZPvd4HW00NElesMb8AAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-38)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 3942.64, 955.14)"
                                                 xlink:href="#image-4"></use>
                                        </g>
                                        <path
                                            d="M3709.18,662.92V638.1h134.88v24.82h30.37v722.22H3682V662.92Zm7.19-17.62v24.81h-27.19v707.83h178.05V670.11h-30.37V645.3Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="3722.7 725.6 3740.17 725.6 3740.17 806.35 3722.7 806.35 3722.7 725.6 3722.7 725.6"
                                            fill="#e9fbff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="3769.88 725.52 3787.35 725.52 3787.35 806.27 3769.88 806.27 3769.88 725.52 3769.88 725.52"
                                            fill="#e9fbff" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="3813.98 725.22 3831.45 725.22 3831.45 805.97 3813.98 805.97 3813.98 725.22 3813.98 725.22"
                                            fill="#e9fbff" fill-rule="evenodd"></polygon>
                                        <g clip-path="url(#clip-path-39)">
                                            <image width="113" height="251"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4452.95, 978.58)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAAD9CAIAAAAAm98ZAAAACXBIWXMAAC5xAAAucQGxbqlcAAACZElEQVR4Xu3UIQ4CQRAAwT1yDs3/eBoP4wdoglwkGHIcoV2V2klGdSa7zDkvt8F/nU/jsLXDj5StrO/Dcfm0xlfu8/V2sxVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK2s78N9flpjNzdbUbayjjGuj60t9lvm9LkmnucDD8DKg3FmAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-40)">
                                            <image width="113" height="250"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4497.05, 978.68)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD9CAIAAADvWbQnAAAACXBIWXMAAC5xAAAucQGxbqlcAAACYUlEQVR4Xu3UMQrCQBRF0YnEyg24fPdnnXqshDQSI97unG7gVZfPLHPOwb+tY4zH82jFSZejAb9Y94/b8mnGV7b3h+paE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWti3T+2+WnGOa41sY4x7tejFSe9AF1ICps8WSMvAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-41)">
                                            <image width="113" height="251"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4539.35, 978.58)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD9CAIAAADvWbQnAAAACXBIWXMAAC5xAAAucQGxbqlcAAACYUlEQVR4Xu3UIQ7CUBBAwZbUobkfN+NinADfID+OoNqU9LkZtWLVy2bnx2tMnOp+my57O/xD1sTyna7zxhr71p9v6loTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciaWL7TOjbWOMa1JmRNLM/33grHzWP4qef7ABPgDcCQH7h6AAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-42)">
                                            <image width="113" height="251"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4453.31, 1063.51)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD9CAIAAADvWbQnAAAACXBIWXMAAC5xAAAucQGxbqlcAAACaklEQVR4Xu3VsQnCUBhG0Six0VIEd3AYcQPHdpHUsRJsJEa83Tndg6+6/PA28zwP/Nt4ewzX49KKNe6nYbu04ReyJsb3x2HzacZXptc/5VoTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUxvj+m+dOMdVxrYrzsh/NuacVKT7QtC0XC+ANFAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-43)">
                                            <image width="113" height="251"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4497.41, 1063.6)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD8CAIAAAAkBWeCAAAACXBIWXMAAC5xAAAucQGxbqlcAAACW0lEQVR4Xu3TIQ7CQBRF0ZaMQ7M/dtaNsQJ8gyy2pmlKuO4cN8lTN3/m5b1N/NXzMd3ONvxi7B/3+WjGuXX37V1rQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7Imxv6xbkczrnGtCVkT4/U5m3DdF1dYCsJrtEmqAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-44)">
                                            <image width="113" height="253"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4539.71, 1064.15)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD/CAIAAACikRUsAAAACXBIWXMAAC5xAAAucQGxbqlcAAACfElEQVR4Xu3WMUpEMRRA0USm0tKFiYW7dEFuwnJsn/1nYFA8Mwj3dIEHgcsLZM/M68d6eV738na/q52HawP5jdPh/LQvjkGPe66N/Cdfs1fbipSVKCtRVqKsRFmJshLHf+vtvX/e/KssnWetthUpK1FWoqxEWYmyEmUlykqUlSgrUVairERZibISZSXKSpSVKCtRVqKsRFmJshJlJcpKlJUoK1FWoqxEWYmyEmUlykqUlSgrUVairERZibISZSXKSpSVKCtRVqKsRFmJshJlJcpKlJUoK1FWoqxEWYmyEmUlykqUlSgrUVairERZibISZSXKSpSVKCtRVqKsRFmJshJlJcpKlJUoK1FWoqxEWYmyEmUlykqUlSgrUVairERZibISZSXKSpSVKCtRVqKsRFmJshJlJcpKlJUoK1FWoqxEWYmyEmUlykqUlSgrUVairERZibISZSXKSpSVKCtRVqKsRFmJshJlJcpKlJUoK1FWoqxEWYmyEmUlykqUlSgrUVairERZibISZSXKSpSVKCtRVqKsRFmJshJlJcpKlJUoK1FWoqxEWYmyEmUlykqUlSgrUVairERZibISZSXKSpSVKCtRVqKsRFmJshJlJcpKlJUoK1FWoqxEWYmyEmUlykqUlSgrUVairERZibISZSXKSpSVKCtRVqKsRFmJshJlJcpKlJUoK1FWoqxEWYmyEmUlykqUlSgrUVairERZibISZSXKSpSVKCtRVqKsRFmJshJlJcpKlJUoK1FWoqxEWYmyEmUlykqUlSgrUVairERZibISZSXKSpSVKCtRVqKsRFmJshJlJcpKnA7n81wcy8+0rURZiT3Ts/973xIgEn6qeyXLAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-45)">
                                            <image width="113" height="250"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4580.15, 979.16)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAD9CAIAAADvWbQnAAAACXBIWXMAAC5xAAAucQGxbqlcAAACYElEQVR4Xu3UIQ7CQBRF0ZYUhSZheSyN/aGri2tQnZRw3TlqxFM3PzNv2zbxb8vrPZpw0vM+XUYbfrHsr9t8MGNs/fpNXWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTSz7a90OZpzjWhPL4zqacN4HK50LENZCmfYAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-46)">
                                            <image width="113" height="250"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4580.51, 1064.15)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAAD9CAIAAAAAm98ZAAAACXBIWXMAAC5xAAAucQGxbqlcAAACgklEQVR4Xu3XMUpDURBA0fnh28RSBPfgYgRX4LZdSGyfjViEQIx6u3O6gaku84q3rbXWWh9rG/7P/WEO13b4pf1sPm7r4h4/9P363WxF2YqyFWUrylaUrShb2Wfm9X17efia7zefsT85rZmZt0c3m1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK/vZfFoX17iZm63sM/N8nKe7a4vcaFvL+098AiQVFkV3nXJOAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g id="bimito-banner">
                                            <polygon
                                                points="4704.69 1204.41 4708.42 1204.41 4708.42 1379.97 4701.09 1379.97 4701.09 1204.41 4704.69 1204.41 4704.69 1204.41"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="4549.59 1204.36 4870.71 1204.36 4870.71 1061.64 4549.59 1061.64 4549.59 1204.36 4549.59 1204.36"
                                                fill="#fff" fill-rule="evenodd"></polygon>
                                            <polygon
                                                points="4789.48 1042.54 4793.21 1042.54 4793.21 1062.41 4785.88 1062.41 4785.88 1042.54 4789.48 1042.54 4789.48 1042.54"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="4738.3 1043.08 4742.03 1043.08 4742.03 1065.23 4734.7 1065.23 4734.7 1043.08 4738.3 1043.08 4738.3 1043.08"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="4683.56 1042.6 4687.29 1042.6 4687.29 1064.75 4679.97 1064.75 4679.97 1042.6 4683.56 1042.6 4683.56 1042.6"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="4631.93 1042.79 4635.66 1042.79 4635.66 1064.95 4628.34 1064.95 4628.34 1042.79 4631.93 1042.79 4631.93 1042.79"
                                                fill="#4a4a4a"></polygon>
                                            <path
                                                d="M4784.19,1029.73h11.69a9,9,0,0,1,6.34,2.64l0,0a9,9,0,0,1-6.36,15.33h-11.69a9,9,0,0,1,0-18Zm11.69,7.2h-11.69a1.79,1.79,0,0,0-1.27.52,1.83,1.83,0,0,0-.52,1.28,1.79,1.79,0,0,0,1.79,1.79h11.69a1.76,1.76,0,0,0,1.27-.53,1.72,1.72,0,0,0,.53-1.26,1.81,1.81,0,0,0-.51-1.27h0a1.79,1.79,0,0,0-1.27-.52Z"
                                                fill="#00b4ff"></path>
                                            <path
                                                d="M4732.57,1029.17h11.69a9,9,0,0,1,6.34,2.64h0a9,9,0,0,1-6.35,15.33h-11.69a9,9,0,0,1,0-18Zm11.69,7.2h-11.69a1.78,1.78,0,0,0-1.27.51,1.83,1.83,0,0,0-.53,1.28,1.81,1.81,0,0,0,1.8,1.8h11.69a1.79,1.79,0,0,0,1.27-.53,1.74,1.74,0,0,0,.53-1.27,1.79,1.79,0,0,0-.52-1.27h0a1.78,1.78,0,0,0-1.27-.51Z"
                                                fill="#fc0"></path>
                                            <path
                                                d="M4677.72,1029.62h11.69a9,9,0,0,1,6.34,2.64h0a9,9,0,0,1-6.35,15.33h-11.69a9,9,0,0,1,0-18Zm11.69,7.19h-11.69a1.79,1.79,0,0,0-1.27.52,1.88,1.88,0,0,0-.53,1.28,1.81,1.81,0,0,0,1.8,1.8h11.69a1.8,1.8,0,0,0,1.27-.53,1.76,1.76,0,0,0,.53-1.27,1.78,1.78,0,0,0-.51-1.26l0,0a1.79,1.79,0,0,0-1.27-.52Z"
                                                fill="#00b4ff"></path>
                                            <path
                                                d="M4626.14,1030.18h11.7a9,9,0,0,1,6.33,2.64l0,0a9,9,0,0,1-6.35,15.33h-11.7a9,9,0,0,1,0-18Zm11.7,7.2h-11.7a1.78,1.78,0,0,0-1.26.51,1.83,1.83,0,0,0-.53,1.28,1.78,1.78,0,0,0,.53,1.27,1.75,1.75,0,0,0,1.26.53h11.7a1.79,1.79,0,0,0,1.27-.53,1.77,1.77,0,0,0,.52-1.27,1.83,1.83,0,0,0-.51-1.27h0a1.78,1.78,0,0,0-1.27-.51Z"
                                                fill="#fc0"></path>
                                            <path
                                                d="M4549.59,1058h324.72V1208H4546V1058Zm317.5,7.2h-313.9v135.52h313.9V1065.24Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M4624.22,1106.9a21,21,0,0,1,20.9,20.91v4.91a13.72,13.72,0,0,0,27.26-.57c0-.4,0-.79,0-1.19v-23.15h7.28V1131c0,.41,0,.8,0,1.2A13.72,13.72,0,0,0,4707,1131v-4.16h.07a20.91,20.91,0,0,1,41.78,1.2v4.91a13.72,13.72,0,0,0,27.26-.56c0-.39,0-.79,0-1.19V1108h7.28v23.15c0,.4,0,.8,0,1.2a13.72,13.72,0,0,0,27.38-1.19V1108h7.19v23.15a20.88,20.88,0,0,1-35.67,14.77,21.29,21.29,0,0,1-2.51-3,20.53,20.53,0,0,1-2.49,3,20.83,20.83,0,0,1-29.54,0,20.41,20.41,0,0,1-1.79-2,21.27,21.27,0,0,1-3.18,4.06,20.82,20.82,0,0,1-29.53,0,20.58,20.58,0,0,1-3.31-4.28,21,21,0,0,1-16.59,8.21,20.81,20.81,0,0,1-14.76-6.14,20.56,20.56,0,0,1-2.5-3,21.25,21.25,0,0,1-2.5,3,20.84,20.84,0,0,1-28.53,1v4.74a20.91,20.91,0,0,1-41.24,4.84h7.51a13.86,13.86,0,0,0,3.14,4.84,13.72,13.72,0,0,0,23.4-9.68v-2.54a20.9,20.9,0,0,1-34.46-15.89v-5.17a20.95,20.95,0,0,1,20.91-20.91Zm13.55,28.17.16-7.26a13.72,13.72,0,0,0-27.43,0V1133a13.72,13.72,0,0,0,27.27,2.09Zm103.85-1.75c.12-1.77,0-3.47,0-5.32a13.72,13.72,0,0,0-27.43,0v5.18a13.71,13.71,0,0,0,27.42.14Z"
                                                fill="#4a4a4a"></path>
                                            <polygon
                                                points="4644.96 1100.24 4644.96 1096.51 4667.99 1096.51 4667.99 1103.83 4644.96 1103.83 4644.96 1100.24 4644.96 1100.24"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="4682.17 1165.77 4682.17 1162.03 4705.2 1162.03 4705.2 1169.37 4682.17 1169.37 4682.17 1165.77 4682.17 1165.77"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="4751.24 1165.43 4751.24 1161.7 4774.27 1161.7 4774.27 1169.03 4751.24 1169.03 4751.24 1165.43 4751.24 1165.43"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="4794.2 1165.54 4794.2 1161.81 4802.88 1161.81 4802.88 1169.13 4794.2 1169.13 4794.2 1165.54 4794.2 1165.54"
                                                fill="#4a4a4a"></polygon>
                                        </g>
                                        <path
                                            d="M4869.94,1167.63h0a33.39,33.39,0,0,1,33.27,33.27v73.56a33.39,33.39,0,0,1-33.27,33.27h0a33.36,33.36,0,0,1-33.28-33.27V1200.9a33.36,33.36,0,0,1,33.28-33.27Z"
                                            fill="#fc0" stroke="#4a4a4a" stroke-miterlimit="10" stroke-width="6"
                                            fill-rule="evenodd"></path>
                                        <polygon
                                            points="4885.42 1225.14 4874.75 1239.29 4869.02 1234.97 4879.69 1220.82 4885.42 1225.14 4885.42 1225.14"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="4851.09 1236 4874 1256.44 4869.24 1261.78 4846.32 1241.34 4851.09 1236 4851.09 1236"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M4891.07,1180a29.62,29.62,0,0,1,9.29,21.51V1275a29.77,29.77,0,0,1-29.68,29.68h0a29.78,29.78,0,0,1-28.73-22.24,29.53,29.53,0,0,0,20.38,8.16h0A29.79,29.79,0,0,0,4892,1261v-73.54a29.36,29.36,0,0,0-1-7.42Z"
                                            fill="#ffb300" fill-rule="evenodd"></path>
                                        <polygon
                                            points="4871.73 1382.15 4868.1 1382.15 4868.1 1213.22 4875.31 1213.22 4875.31 1382.15 4871.73 1382.15 4871.73 1382.15"
                                            fill="#4a4a4a"></polygon>
                                        <g clip-path="url(#clip-path-47)">
                                            <image width="58" height="425"
                                                   transform="matrix(0.24, 0, 0, -0.24, 3547.85, 1023.05)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADsAAAGvCAIAAABqxzoFAAAACXBIWXMAAC7AAAAuwAGdJvZ1AAACAklEQVR4Xu3SMQrCQBRF0Ymkc/+9W3BdYpk6VkIaSXVxAud0A6+4fGbZ931cyjrGeLzOVjO5nQ2msx4f9+XX7P+27+e93o0V9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU9xT3FPcU99bjY9t/zSZyvRtfr3gdYzzfZ6uZfAAUFQ2ApJxNbQAAAABJRU5ErkJggg=="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-48)">
                                            <image width="59" height="425"
                                                   transform="matrix(0.23, 0, 0, -0.24, 3572.93, 1023.05)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAG2CAIAAACswnIvAAAACXBIWXMAAC+FAAAvhQHoCLdpAAACK0lEQVR4Xu3SMUrEQACG0Y2slaUHky32NpbexsLr7EVSWYyNzYaFQNBHAt+rZuAvPoaZxhiX2+nt9XQgT2uDPTov7i/Tw9kuzOP3cMiXLlopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVo5ZPR5cZ/Hw9m+LKP/yvX7Y22y3X99j8/n97XJdtMY43JbW23yNU9rk42mMY7wi+/9AIYJF7T09iPQAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-49)">
                                            <image width="59" height="425"
                                                   transform="matrix(0.23, 0, 0, -0.24, 3597.89, 1023.05)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAG2CAIAAACswnIvAAAACXBIWXMAAC+FAAAvhQHoCLdpAAACGElEQVR4Xu3SMWoDMQBFwVVwlzJVThVyppwvfS6ytdK4sTFsN0jwppLgFw+hMef8/ju+Po6NvF0NVnR7ur+Pl7MlnPN+2PKli1aKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWilaKVopWila2jL493c/5craWMec8fsf5+XO1XMiW3+P+0leztYw5d/jFj/4Bty8YDZouhNsAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g id="cloud-7" class="Float4s___1w5M-">
                                            <path
                                                d="M3622,885.7a42.7,42.7,0,0,1,20.27,5.13,62.94,62.94,0,0,1,118.25,27.09l.17,3.75H3579.61l1.23-4.54A42.7,42.7,0,0,1,3622,885.7Zm10.33,8.7a35.53,35.53,0,0,0-43,20.08H3753A55.77,55.77,0,0,0,3647,897.41l-1.76,3.82-3.49-2.35a35.64,35.64,0,0,0-9.42-4.48Z"
                                                fill="#fc0"></path>
                                            <path
                                                d="M3622,889.29a38.85,38.85,0,0,1,21.74,6.61,59.36,59.36,0,0,1,113.2,22.17H3584.3A39.1,39.1,0,0,1,3622,889.29Z"
                                                fill="#00b4ff" fill-rule="evenodd"></path>
                                            <path
                                                d="M3622,885.7a42.7,42.7,0,0,1,20.27,5.13,62.94,62.94,0,0,1,118.25,27.09l.17,3.75H3579.61l1.23-4.54A42.7,42.7,0,0,1,3622,885.7Zm10.33,8.7a35.53,35.53,0,0,0-43,20.08H3753A55.77,55.77,0,0,0,3647,897.41l-1.76,3.82-3.49-2.35a35.64,35.64,0,0,0-9.42-4.48Z"
                                                fill="#00b4ff" stroke="#00b4ff" stroke-miterlimit="2.61"
                                                stroke-width="0.22"></path>
                                        </g>
                                        <g clip-path="url(#clip-path-50)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4934.14, 903.56)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABY0lEQVR4Xu3UIQ6DQBBAUWhw1b1fj8b9qtFbR6ogNHz3nhox6md25zHGxN2W9XO2wkXv1/Q42+Efyz4954M1zm0/v6lrTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWRPLPm3jYI1rXGtC1sQ8hsd/vy+8PA0B/oqkzgAAAABJRU5ErkJggg=="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-51)">
                                            <image width="113" height="134"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4978.24, 903.61)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABY0lEQVR4Xu3SIQ7CUBRFQUrqkMC6wGHZNSupLgZR05QSjptR/yVXnfzh/ppv5wN/9LwejlsbfiFrYlwep2Ftxlem+fPwWxOyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrYlwe07w2Yx+/NSFrYnxctibs9wad0QhuqMef1AAAAABJRU5ErkJggg=="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-52)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 5020.54, 903.56)"
                                                 xlink:href="#image-6"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-53)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4934.51, 948.22)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABXklEQVR4Xu3UMQrCQBBA0Y2ks/Rg4u29SOq1DwGj5HfvdQNTfYZZ5pyv93g+Bhe6fVvgH+tuvi+Ha5y1zTFca0TWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNrLt5m4dr/Ma1JmRNyJpY5vRNr/cB9eMMiDCeK0MAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-54)">
                                            <image width="113" height="134"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4978.61, 948.27)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABX0lEQVR4Xu3SoQ7CQBRFwS2pIOH/Pf+Hrl4MoqYpJRw3o/YlV53sMud8vgb/dTsb8AtZE+v+eCxHM76yzc/Db03ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsiXV/bPNoxjV+a0LWxDrGuC9nKy56A8YECZcVy6biAAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-55)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 5020.91, 948.22)"
                                                 xlink:href="#image-8"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-56)">
                                            <image width="114" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4934.57, 992.6)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAACHCAIAAACqIvG+AAAACXBIWXMAAC7AAAAuwAGdJvZ1AAABYUlEQVR4Xu3UOwrCUBBAUSPpLF2YuHs3knpsrELAD97unOoNTHUZ3jIz98fpdj3xX+d3C/xo3c2X5XCNT23zerjZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtqJsRdmKshVlK8pWlK0oW1G2omxF2YqyFWUrylaUrShbUbaibEXZirIVZSvKVpStKFtRtrLu5m0O1/iam60oW1G2ssz4WRNPbaEMinzpUPsAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-57)">
                                            <image width="113" height="134"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4978.67, 992.66)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACGCAIAAACOvEklAAAACXBIWXMAAC5xAAAucQGxbqlcAAABZElEQVR4Xu3VMQrCQBRF0UTSWYrrEnfgst2I9VgJaUKMeLtzuoFXXT7MPMaY+Lfl/pxul70VRzyu02lvwy9kTSzrx3nemvGV1+efcq0JWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNbGsH6+xNeMY15qQNfEGlwMKA1N5X2UAAAAASUVORK5CYII="></image>
                                        </g>
                                        <g clip-path="url(#clip-path-58)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 5020.97, 992.6)"
                                                 xlink:href="#image-8"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-59)">
                                            <use transform="matrix(0.24, 0, 0, -0.24, 4934.94, 1037.26)"
                                                 xlink:href="#image-9"></use>
                                        </g>
                                        <g clip-path="url(#clip-path-60)">
                                            <image width="113" height="134"
                                                   transform="matrix(0.24, 0, 0, -0.24, 4979.04, 1037.31)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABZUlEQVR4Xu3VsQrCQBRFwY2kEPz/3v+zTr1WQpoQI55uplu41eHBLnPOwb+tY4zn62zFRbezAb+QNbHuH4/laMZXts8/5VoTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha2LdP7Z5NOMa15qQNbGOMe7L2YqL3pg+CZv1WE16AAAAAElFTkSuQmCC"></image>
                                        </g>
                                        <g clip-path="url(#clip-path-61)">
                                            <image width="113" height="133"
                                                   transform="matrix(0.24, 0, 0, -0.24, 5021.34, 1037.26)"
                                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAACHCAIAAABF4JqAAAAACXBIWXMAAC5xAAAucQGxbqlcAAABY0lEQVR4Xu3UIQ7DQAwAwaQKK+7/+rT+rzj4SkOiU6osm2GWjFaW1zHGwt22z3e2wkXv1/KY7fCP7Tg817M15vbDN3WtCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDUha0LWhKwJWROyJmRNyJqQNSFrQtaErAlZE7ImZE3ImpA1IWtC1oSsCVkTsiZkTciakDWxHYd9nK1xjWtNyJqQNbGO4aHe7wdXAw0B9HQv3AAAAABJRU5ErkJggg=="></image>
                                        </g>
                                        <g id="cloud-6">
                                            <path
                                                d="M4871.75,955.72a25.51,25.51,0,0,1,14.29,4.34,39,39,0,0,1,74.35,14.56H4847a25.63,25.63,0,0,1,24.74-18.9Z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M4871.75,952.12a29.17,29.17,0,0,1,12.83,3,42.78,42.78,0,0,1,13.95-14.58,42.56,42.56,0,0,1,65.44,34l.17,3.75H4842.31l1.24-4.54a29.27,29.27,0,0,1,28.2-21.55Zm6.44,8.13A22.05,22.05,0,0,0,4852.28,971h104.16a35.4,35.4,0,0,0-67.14-9.46l-1.76,3.82-3.49-2.34a21.5,21.5,0,0,0-5.86-2.79Z"
                                                fill="#4a4a4a"></path>
                                        </g>
                                        <polygon
                                            points="4163.81 1208.48 4201.63 1208.48 4201.63 1126.11 4163.81 1126.11 4163.81 1208.48 4163.81 1208.48"
                                            fill="#00b4ff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M4163.81,1122.52h41.41v89.56h-45v-89.56Zm34.23,7.19H4167.4v75.17H4198v-75.17Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="4198 1189.38 4164.93 1189.38 4164.93 1181.57 4199.28 1181.57 4199.28 1189.38 4198 1189.38 4198 1189.38"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3828.01 645.64 3836.53 645.64 3836.53 681.77 3828.01 681.77 3828.01 645.64 3828.01 645.64"
                                            fill="#e9fbff" stroke="#e9fbff" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <path
                                            d="M3867.23,670.11v707.11h-10.45V681.77h-28v-11.7h38.47v0ZM3717.13,646h119.51v10.37H3717.13V646Z"
                                            fill="#e9fbff" stroke="#e9fbff" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></path>
                                        <g id="car-2">
                                            <path
                                                d="M3700,1547.49l56.74,44.29,29.91,47.13-169.88,32.66L3508.61,1662l-124.46-11.07,2.94-43.19,105.67-11.53,65.17-68s103.07,3.71,120.29,10.61,21.76,8.68,21.76,8.68Z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M3527.25,1680.27c1.19-7.26,3.79-28.72-3.63-41.34-24.65-41.85-107-46-118-15.74-3.1,8.5,1.94,33.27,1.94,33.27l2.32,23.83,18.23,3.23c.36.06,1.07-4.35,2.06-9.45,6.38-32.83,37.37-32.39,61-15.94,9.62,6.68,10.64,22.6,10.59,22.58,1.31.22,25.52-.44,25.52-.44Z"
                                                fill="#00b4ff" fill-rule="evenodd"></path>
                                            <path
                                                d="M3420.73,1622.71c-1.75,0-4,6.47-4,13.28s2,14.11,3.79,14.11,4.42-6.87,4.42-13.66-2.46-13.73-4.2-13.73Z"
                                                fill="#fcfafb" fill-rule="evenodd"></path>
                                            <path
                                                d="M3420.73,1615.42c7,0,10.26,10.42,10.26,20.09s-3.23,20.08-10.26,20.08-10.27-10.42-10.27-20.08,3.21-20.09,10.27-20.09Zm0,32.9h0c1.1-1,3.12-5.41,3.12-12.81s-2-11.78-3.12-12.8c-1.11,1-3.14,5.38-3.14,12.8s2,11.77,3.14,12.81Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M3465.09,1660.65a23,23,0,1,1-23,23,23,23,0,0,1,23-23Zm0,38.78h0a15.83,15.83,0,1,0-15.83-15.82,15.84,15.84,0,0,0,15.83,15.82Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M3709.49,1660.65a23,23,0,1,1-23,23,23,23,0,0,1,23-23Zm0,38.78h0a15.83,15.83,0,1,0-15.83-15.82,15.84,15.84,0,0,0,15.83,15.82Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M3534.76,1599.44h10.18a7.11,7.11,0,0,1,7.11,7.12h-24.41a7.12,7.12,0,0,1,7.12-7.12Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M3635.37,1590.55l1.2,69s11.17-22.47,26.1-33.9,35.1-16.5,44.7-13.8,46.2,13.5,52.5,24.9a191.46,191.46,0,0,1,10.2,21.6l19.42-1.85s-4.3-11.64-15.77-30.83a234.65,234.65,0,0,1-17-33.89l-121.35-1.23Z"
                                                fill="#00b4ff" stroke="#00b4ff" stroke-miterlimit="2.61"
                                                stroke-width="0.5" fill-rule="evenodd"></path>
                                            <path
                                                d="M3634.92,1532.61l.45,57.94,79.51-1.35-14.9-41.71s-23.94-8.59-37.75-12a109.53,109.53,0,0,0-27.31-2.86Z"
                                                fill="#e9fbff" stroke="#e9fbff" stroke-miterlimit="2.61"
                                                stroke-width="0.5" fill-rule="evenodd"></path>
                                            <path
                                                d="M3381.44,1657.75v-41.86a22.34,22.34,0,0,1,18.93-22v-.13l93.3-4.78,47.5-54.73c.36-.41,8.88-9.86,29.91-9.86h46.73c33.33,0,115.88,9.55,162.21,97.95.38.72,9.36,17.65,9.47,34.17,3.77.24,6.67,3.87,6.67,8.49v13.55c0,4.78-3.1,8.55-7.06,8.55h-9.52v0l-31.33,0a38.93,38.93,0,0,1-77.52.21l-166.9.07a38.94,38.94,0,0,1-77.5,0h-41.16c-4,0-7.06-3.76-7.06-8.55V1665a8.93,8.93,0,0,1,3.33-7.24Zm248.09-125.84h0c-4.37-.29-8.32-.4-11.72-.4h-46.73c-17.52,0-24.28,7.15-24.53,7.42l-42.25,48.68,125.75,0-.52-55.66Zm75.37,21.68h0l11.69,34h30.87a163.32,163.32,0,0,0-42.56-34Zm74.5,126.35h9.3a2.9,2.9,0,0,0,.33-1.4V1665a2.9,2.9,0,0,0-.33-1.4h-11.92a74.22,74.22,0,0,1,2.62,16.35Zm3-23.48h0c-.14-14.71-8.54-30.59-8.64-30.79a189.63,189.63,0,0,0-20.2-31l-116.26,0,.53,56.74c12.5-25.26,37.75-42.42,66.88-42.42a75,75,0,0,1,69.72,47.44Zm-72.87,59h0a31.82,31.82,0,1,0-31.81-31.82,31.84,31.84,0,0,0,31.81,31.82Zm-38.77-35.23h0a38.92,38.92,0,0,1,77.53-.22h24.1c-1.86-35.5-31.51-63.81-67.68-63.81-39.21,0-64.56,31.93-67.71,64Zm-33.53-92.63h0l71.86,0-13.32-38.67a181.78,181.78,0,0,0-59.06-16.36l.52,55Zm-102.81,92.7H3546v-.07h83.78a76.25,76.25,0,0,1,1-7.82h0l-.72-77.68-130.19,0-.51,17.31a69.31,69.31,0,0,1,14.74,10.84c13.41,13,20.21,30.89,20.21,53.16v4.22Zm-69.29,35.16h0a31.82,31.82,0,1,0-31.82-31.82,31.85,31.85,0,0,0,31.82,31.82Zm-57.57-59h2.32v23.83h16.47a38.91,38.91,0,0,1,77.55,0h23.39v-4.22c0-20.24-6.06-36.39-18-48-21.83-21.17-56.41-20.37-56.88-20.38h-12.28c-16,0-32.57,9.11-32.57,24.33v24.45Zm0-42.72h0c7.6-8.46,20.2-13.2,32.57-13.2h12.17a102.38,102.38,0,0,1,40.13,8l.37-12.42-85.24,4.37v13.21Zm-7.15,18.27v-30.93a15.21,15.21,0,0,0-11.8,14.81v.65h8.08v7.13h-8.08V1631h8.08v7.15h-8.08v7.35h8.08v7.14h-8.08v3.8h11.8V1632Zm-15.12,46.88h0a2.83,2.83,0,0,0,.33,1.4h17.13v-16.7h-17.13a2.9,2.9,0,0,0-.33,1.4v13.9Z"
                                                fill="#4a4a4a"></path>
                                        </g>
                                        <polygon
                                            points="3715.53 1722.49 3785.47 1722.49 3785.47 1714.82 3715.53 1714.82 3715.53 1722.49 3715.53 1722.49"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3798.36 1722.57 3835.29 1722.57 3835.29 1714.89 3798.36 1714.89 3798.36 1722.57 3798.36 1722.57"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3471.08 1722.01 3542.16 1722.01 3542.16 1714.34 3471.08 1714.34 3471.08 1722.01 3471.08 1722.01"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3552.83 1722.08 3566.12 1722.08 3566.12 1714.4 3552.83 1714.4 3552.83 1722.08 3552.83 1722.08"
                                            fill="#4a4a4a"></polygon>
                                        <g id="car-3">
                                            <path
                                                d="M4092.88,1415.12h12.66a.39.39,0,0,1-.39-.34l7-.06a6.62,6.62,0,0,0-6.63-6.62h-12.66a6.62,6.62,0,0,0-6.62,6.62v.06l7-.06a.41.41,0,0,1-.4.4Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M4032.62,1373c0,6.36,7.31,11.34,16.65,11.34s16.65-5,16.65-11.34-7.31-11.32-16.65-11.32-16.65,5-16.65,11.32Zm16.65-4.3h0c5.79,0,9.63,2.59,9.63,4.3s-3.84,4.31-9.63,4.31-9.63-2.6-9.63-4.31,3.85-4.3,9.63-4.3Z"
                                                fill="#4a4a4a"></path>
                                            <polygon
                                                points="4187.49 1353.53 4081.24 1353.53 4081.22 1393.6 4222.93 1393.6 4187.49 1353.53 4187.49 1353.53"
                                                fill="#fafafc" fill-rule="evenodd"></polygon>
                                            <polygon
                                                points="4009.14 1396.78 4221.13 1396.78 4184.99 1352.56 4040.36 1352.56 4009.14 1396.78 4009.14 1396.78"
                                                fill="#e9fbff" fill-rule="evenodd"></polygon>
                                            <path
                                                d="M4047.81,1369.9c6.17,0,11.18,2.35,11.18,5.25s-5,5.25-11.18,5.25-11.17-2.35-11.17-5.25,5-5.25,11.17-5.25Z"
                                                fill="#ffcd03" stroke="#ffcd03" stroke-miterlimit="2.61"
                                                stroke-width="0.5" fill-rule="evenodd"></path>
                                            <path
                                                d="M4030.66,1374.35c0,6.39,7.36,11.41,16.77,11.41s16.77-5,16.77-11.41-7.37-11.41-16.77-11.41-16.77,5-16.77,11.41Zm16.77-4.33h0c5.83,0,9.7,2.6,9.7,4.33s-3.87,4.33-9.7,4.33-9.69-2.61-9.69-4.33,3.86-4.33,9.69-4.33Z"
                                                fill="#4a4a4a"></path>
                                            <polygon
                                                points="4076.52 1479.27 4225.02 1479.27 4225.02 1403.8 4076.57 1403.8 4076.52 1479.27 4076.52 1479.27"
                                                fill="#00b4ff" fill-rule="evenodd"></polygon>
                                            <path
                                                d="M4014.39,1458.64a20.78,20.78,0,1,0,20.78,20.78,20.82,20.82,0,0,0-20.78-20.78Zm0,34.53h0a13.75,13.75,0,1,1,13.76-13.75,13.77,13.77,0,0,1-13.76,13.75Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M4269.39,1458.64a20.78,20.78,0,1,0,20.78,20.78,20.8,20.8,0,0,0-20.78-20.78Zm0,34.53h0a13.75,13.75,0,1,1,13.76-13.75,13.77,13.77,0,0,1-13.76,13.75Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M4364.52,1451.05l-19.6-41.7-111.81-9.66-2-1.82-42.78-52.35H4036.72l-36.18,51.26h0l-1,1.47h0l-1,1.43-66,4.42-3.49,15.66h-.19l-6.47,29.79h0l-.67,3h-7.46v25.85h14.71l3.94,7.84h47.2a35,35,0,0,0,68.66,0h186.34a35,35,0,0,0,68.66,0h23.18l16.26-10,27.9,0v-25.24Zm-287.91-98.5H4185l36.14,44.23H4076.57l0-44.23Zm-142,74.25h5.31l-2.15,15.74h-6.66l3.5-15.74Zm-13.38,44.63v-11.81h40.16l0,11.81Zm93.16,36h0a28,28,0,1,1,28-28,28,28,0,0,1-28,28Zm55.11-28.14h-20.1a35,35,0,0,0-70,0h-42.19l-.4-.82h31.57l.08-25.85h-39.57l.67-3h14.36l4.07-29.79h-11.8l2-9,64.18-4.29,1.85-2.69h65.35l0,75.47Zm.05-82.49h-60.41l31.22-44.23h29.22l0,44.23ZM4225,1479.27h-148.5l.05-75.47H4225v75.47Zm120.33-52.47h0l5.25,11.17H4332l3-11.17Zm-76,80.61h0a28,28,0,1,1,28-28,28,28,0,0,1-28,28Zm55.53-28.14H4304.4a35,35,0,0,0-70,0h-2.33v-72.61l108.23,9.34,1.77,3.77h-12.41l-6.86,25.24h31.13l2.84,6H4309l3.82,25.29,16.86,0-4.79,3Zm39.11-10h0l-45.14,0-1.7-11.24H4364v11.2Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M4269.5,1465.57a13.59,13.59,0,1,1-13.59,13.59,13.6,13.6,0,0,1,13.59-13.59Z"
                                                fill="#ffcd03" stroke="#ffcd03" stroke-miterlimit="2.61"
                                                stroke-width="0.5" fill-rule="evenodd"></path>
                                        </g>
                                        <polygon
                                            points="4217.28 1513.79 4260.8 1513.79 4260.8 1506.11 4217.28 1506.11 4217.28 1513.79 4217.28 1513.79"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="3916.2 1513.56 4006.41 1513.56 4006.41 1505.88 3916.2 1505.88 3916.2 1513.56 3916.2 1513.56"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="4183.81 1513.38 4202.51 1513.38 4202.51 1505.71 4183.81 1505.71 4183.81 1513.38 4183.81 1513.38"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1482.12 1361.93 1448.72 1406.8 1508.03 1407.79 1508.43 1361.93 1482.12 1361.93 1482.12 1361.93"
                                            fill="#00aeef" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="1483.86 1361.93 1448.72 1406.8 1511.12 1407.79 1511.54 1361.93 1483.86 1361.93 1483.86 1361.93"
                                            fill="#e9fbff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1484.81,1363.78,1452.49,1405l56.71.9.39-42.15Zm-37.66,41.93,35.74-45.61h30.59l-.46,49.55-68.11-1.08,2.24-2.86Z"
                                            fill="#e9fbff"></path>
                                        <path
                                            d="M1476.34,1382.49c0,6.39,7.35,11.41,16.77,11.41s16.77-5,16.77-11.41-7.37-11.41-16.77-11.41-16.77,5-16.77,11.41Zm16.77-4.33h0c5.83,0,9.7,2.6,9.7,4.33s-3.87,4.33-9.7,4.33-9.7-2.61-9.7-4.33,3.87-4.33,9.7-4.33Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1518.62 1405.31 1663.66 1405.78 1628.46 1361.62 1518.91 1360.83 1518.62 1405.31 1518.62 1405.31"
                                            fill="#fff" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1535,1425h12.75a.39.39,0,0,1-.4-.33l7.08-.07a6.68,6.68,0,0,0-6.68-6.67H1535a6.67,6.67,0,0,0-6.67,6.67v.07l7.07-.07a.39.39,0,0,1-.4.4Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1767.09 1463.5 1770.02 1475.16 1806.54 1474.85 1806.15 1464.74 1767.09 1463.5 1767.09 1463.5"
                                            fill="#00aeef" fill-rule="evenodd"></polygon>
                                        <polygon
                                            points="1757.69 1463.5 1761.3 1479.51 1806.54 1479.07 1806.05 1465.19 1757.69 1463.5 1757.69 1463.5"
                                            fill="#fc0" fill-rule="evenodd"></polygon>
                                        <path
                                            d="M1760.62,1466.12l2.45,10.86,41.12-.4-.31-8.94-43.26-1.52Zm-1.51,14-4.35-19.24,53.48,1.88.65,18.8-49.35.48-.43-1.92Z"
                                            fill="#fc0"></path>
                                        <path
                                            d="M1457.22,1459.63a30.89,30.89,0,1,1-30.9,30.88,30.89,30.89,0,0,1,30.9-30.88Z"
                                            fill="#00b4ff" fill-rule="evenodd"></path>
                                        <path
                                            d="M1456,1468.78a20.93,20.93,0,1,0,20.93,20.93,20.95,20.95,0,0,0-20.93-20.93Zm0,34.79h0a13.86,13.86,0,1,1,13.86-13.86,13.88,13.88,0,0,1-13.86,13.86Z"
                                            fill="#4a4a4a"></path>
                                        <path
                                            d="M1712.85,1468.78a20.93,20.93,0,1,0,20.94,20.93,21,21,0,0,0-20.94-20.93Zm0,34.79h0a13.86,13.86,0,1,1,13.86-13.86,13.88,13.88,0,0,1-13.86,13.86Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1414.58 1524.54 1449.57 1524.54 1449.57 1516.87 1414.58 1516.87 1414.58 1524.54 1414.58 1524.54"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1329.73 1524.61 1401.7 1524.61 1401.7 1516.94 1329.73 1516.94 1329.73 1524.61 1329.73 1524.61"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1623.01 1524.06 1703.91 1524.06 1703.91 1516.39 1623.01 1516.39 1623.01 1524.06 1623.01 1524.06"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="1578.59 1524.12 1612.35 1524.12 1612.35 1516.45 1578.59 1516.45 1578.59 1524.12 1578.59 1524.12"
                                            fill="#4a4a4a"></polygon>
                                        <path
                                            d="M1808.69,1461.14l-19.75-42-112.63-9.73-2-1.84-43.1-52.72H1478.46L1442,1406.49h0l-1,1.47v0l-1,1.44-66.54,4.45-3.51,15.76h-.2l-6.51,30h0l-.68,3.06H1355v26h14.82l4,7.9h47.55a35.27,35.27,0,0,0,69.17,0h187.72a35.27,35.27,0,0,0,69.17,0h23.36l16.37-10.05,28.11,0v-25.41Zm-290-99.21h109.19l36.41,44.56H1518.62l0-44.56Zm-143.05,74.78H1381l-2.16,15.86h-6.72l3.52-15.86Zm-13.47,45v-11.89h40.46l0,11.89Zm93.85,36.24h0a28.2,28.2,0,1,1,28.19-28.2,28.23,28.23,0,0,1-28.19,28.2Zm55.51-28.34h-20.25a35.27,35.27,0,0,0-70.54,0H1378.2l-.42-.83h31.82l.08-26h-39.87l.69-3.06H1385l4.11-30h-11.91l2-9.05,64.64-4.33,1.87-2.7h65.84l0,76Zm0-83.08h-60.85l31.44-44.56h29.43l0,44.56Zm156.64,83.08H1518.56l.06-76h149.55v76Zm121.21-52.86h0l5.29,11.26H1775.9l3.06-11.26Zm-76.53,81.2h0a28.2,28.2,0,1,1,28.2-28.2,28.23,28.23,0,0,1-28.2,28.2Zm56-28.34h-20.67a35.28,35.28,0,0,0-70.55,0h-2.33v-73.14l109,9.41,1.79,3.79h-12.51l-6.9,25.42H1798l2.86,6.09h-48.07l3.86,25.47h17l-4.82,3Zm39.39-10.08h0l-45.46,0-1.71-11.32h47.17v11.28Z"
                                            fill="#4a4a4a"></path>
                                        <polygon
                                            points="1518.02 1413.85 1668.17 1413.85 1668.17 1489.87 1518.02 1489.87 1518.02 1413.85 1518.02 1413.85"
                                            fill="#00b4ff" stroke="#00b4ff" stroke-miterlimit="2.61" stroke-width="0.5"
                                            fill-rule="evenodd"></polygon>
                                        <g id="motorcycle">
                                            <path
                                                d="M2725.15,1547.59a30.9,30.9,0,1,1-30.9,30.9,30.9,30.9,0,0,1,30.9-30.9Z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M2725.15,1544a34.5,34.5,0,1,1-24.38,58.89h0a34.47,34.47,0,0,1,0-48.76h0a34.39,34.39,0,0,1,24.38-10.11Zm19.32,15.19a27.32,27.32,0,0,0-38.62,0h0a27.35,27.35,0,0,0,0,38.62h0a27.31,27.31,0,0,0,38.62-38.63Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M2572.18,1549.35a30.9,30.9,0,1,1-30.91,30.9,30.9,30.9,0,0,1,30.91-30.9Z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M2572.18,1545.75a34.43,34.43,0,0,1,24.38,10.1v0a34.44,34.44,0,0,1,0,48.75v0a34.47,34.47,0,0,1-48.76,0l0,0a34.46,34.46,0,0,1,0-48.75l0,0a34.41,34.41,0,0,1,24.38-10.1Zm19.31,15.18a27.33,27.33,0,0,0-38.62,0h0a27.35,27.35,0,0,0,0,38.62h0a27.35,27.35,0,0,0,38.62,0h0a27.35,27.35,0,0,0,0-38.62Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M2725.17,1558.08a20.41,20.41,0,1,1-20.43,20.41,20.44,20.44,0,0,1,20.43-20.41Zm0,33.92h0a13.51,13.51,0,1,0-13.52-13.51,13.52,13.52,0,0,0,13.52,13.51Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M2697.88,1522.63a3.58,3.58,0,1,1,0,7.16l-131.5.21a35.28,35.28,0,0,0-13.13,2.24,21.63,21.63,0,0,0-10,8,3.58,3.58,0,0,1-5.92-4,28.48,28.48,0,0,1,13.21-10.69,42.33,42.33,0,0,1,15.83-2.75l131.5-.2Z"
                                                fill="#4a4a4a"></path>
                                            <polygon
                                                points="2684.79 1528.02 2651.75 1585.71 2604.96 1585.71 2604.96 1578.51 2647.59 1578.51 2678.55 1524.45 2684.79 1528.02 2684.79 1528.02"
                                                fill="#4a4a4a"></polygon>
                                            <polygon
                                                points="2665.67 1557.76 2609.24 1557.64 2609.24 1550.47 2665.67 1550.59 2665.67 1557.76 2665.67 1557.76"
                                                fill="#4a4a4a"></polygon>
                                            <path
                                                d="M2573.26,1508.25h31.87a9.07,9.07,0,0,1,9,9h0a9.08,9.08,0,0,1-9,9.06h-31.87a9.08,9.08,0,0,1-9.05-9.06h0a9.07,9.07,0,0,1,9.05-9Z"
                                                fill="#00b4ff" fill-rule="evenodd"></path>
                                            <path
                                                d="M2573.26,1504.66h31.87a12.65,12.65,0,0,1,0,25.29h-31.87a12.65,12.65,0,0,1,0-25.29Zm31.87,7.19h-31.87a5.46,5.46,0,0,0-5.45,5.45,5.48,5.48,0,0,0,5.45,5.46h31.87a5.46,5.46,0,0,0,0-10.91Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M2649.29,1502H2688l3.32,7h-42a5.55,5.55,0,0,0,0,11.1h47.22l3.32,7h-50.54a12.56,12.56,0,0,1,0-25.12Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M2534.94,1565.92a3.59,3.59,0,0,1-6.83-2.22,46.23,46.23,0,0,1,89.84,8.82c.09.77.17,1.57.22,2.4s.08,1.52.1,2.42a3.59,3.59,0,0,1-7.17.11c0-.59,0-1.27-.09-2s-.11-1.33-.19-2a39,39,0,0,0-75.88-7.44Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M2712,1502.48a19.67,19.67,0,0,1,2.19.13v17.72a19.67,19.67,0,0,1-2.19.13c-7.15,0-12.95-4-12.95-9s5.8-9,12.95-9Z"
                                                fill="#ffb300" fill-rule="evenodd"></path>
                                            <path
                                                d="M2712,1498.89l1.31,0,1.29.11,3.19.37v24.1l-3.19.38-1.29.11-1.31,0a19.76,19.76,0,0,1-11.2-3.28c-3.3-2.3-5.34-5.58-5.34-9.3s2-7,5.34-9.3a19.76,19.76,0,0,1,11.2-3.28Zm-1.41,17.91v-10.65a11.86,11.86,0,0,0-5.69,1.92h0a3.71,3.71,0,0,0,0,6.81h0a12.08,12.08,0,0,0,5.69,1.92Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M2622.12,1506.82h31.77a6.65,6.65,0,0,1,6.63,6.63h0a6.63,6.63,0,0,1-2.57,5.23L2632.19,1549a6.64,6.64,0,0,1-9.34.76h0a6.64,6.64,0,0,1-.76-9.33l17.28-20.32h-18a6.64,6.64,0,0,1-6.63-6.63h0a6.57,6.57,0,0,1,1.51-4.19,14.46,14.46,0,0,1-2.39.19h0a14.5,14.5,0,0,1-14.46-14.46v-21.91a14.51,14.51,0,0,1,14.46-14.47h0a14.51,14.51,0,0,1,13.21,8.59,5.19,5.19,0,0,1,1.51.43l27.57,12.44a5.49,5.49,0,0,1,2.74,7.24h0a5.5,5.5,0,0,1-7.25,2.75l-23.31-10.52V1495a14.46,14.46,0,0,1-6.18,11.83Z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M2622.12,1506.82h31.77a6.65,6.65,0,0,1,6.63,6.63h0a6.63,6.63,0,0,1-2.57,5.23L2632.19,1549a6.64,6.64,0,0,1-9.34.76h0a6.64,6.64,0,0,1-.76-9.33l17.28-20.32h-18a6.64,6.64,0,0,1-6.63-6.63h0a6.57,6.57,0,0,1,1.51-4.19,14.46,14.46,0,0,1-2.39.19h0a14.5,14.5,0,0,1-14.46-14.46v-21.91a14.51,14.51,0,0,1,14.46-14.47h0a14.51,14.51,0,0,1,13.21,8.59,5.19,5.19,0,0,1,1.51.43l27.57,12.44a5.49,5.49,0,0,1,2.74,7.24h0a5.5,5.5,0,0,1-7.25,2.75l-23.31-10.52V1495a14.46,14.46,0,0,1-6.18,11.83Z"
                                                fill="none" stroke="#4a4a4a" stroke-miterlimit="2.61"
                                                stroke-width="7"></path>
                                            <path
                                                d="M2613.21,1420.83a17.87,17.87,0,1,1-12.61,5.24v0a17.81,17.81,0,0,1,12.6-5.22Zm7.54,10.3a10.65,10.65,0,0,0-18.19,7.54,10.65,10.65,0,1,0,18.19-7.54Z"
                                                fill="#4a4a4a"></path>
                                            <path d="M2572.18,1564.25a16,16,0,1,1-16,16,16,16,0,0,1,16-16Z"
                                                  fill="#00b4ff" fill-rule="evenodd"></path>
                                            <path
                                                d="M2572.18,1560.65a19.57,19.57,0,0,1,13.84,5.74v0a19.54,19.54,0,1,1-13.85-5.76Zm8.77,10.81a12.43,12.43,0,1,0,3.63,8.79,12.4,12.4,0,0,0-3.63-8.79Z"
                                                fill="#4a4a4a"></path>
                                            <path
                                                d="M2725.11,1564.39a13.59,13.59,0,1,1-13.59,13.59,13.6,13.6,0,0,1,13.59-13.59Z"
                                                fill="#ffcd03" stroke="#ffcd03" stroke-miterlimit="2.61"
                                                stroke-width="0.5" fill-rule="evenodd"></path>
                                            <path
                                                d="M2660.53,1489.59a3.59,3.59,0,1,1,0-7.17l19.83-.11a3.6,3.6,0,0,1,3.26,2.06l42.08,89a3.59,3.59,0,0,1-6.49,3.06l-41.11-86.92-17.54.1Z"
                                                fill="#4a4a4a"></path>
                                        </g>
                                        <polygon
                                            points="2518.39 1612.6 2561.63 1612.6 2561.63 1605.12 2518.39 1605.12 2518.39 1612.6 2518.39 1612.6"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2681.86 1612.1 2717.87 1612.1 2717.87 1604.62 2681.86 1604.62 2681.86 1612.1 2681.86 1612.1"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2665.95 1612.1 2676.78 1612.1 2676.78 1604.62 2665.95 1604.62 2665.95 1612.1 2665.95 1612.1"
                                            fill="#4a4a4a"></polygon>
                                        <polygon
                                            points="2467.52 1612.98 2503.53 1612.98 2503.53 1605.5 2467.52 1605.5 2467.52 1612.98 2467.52 1612.98"
                                            fill="#4a4a4a"></polygon>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </section>
            </div>
            <div class="Wrapper___17Np2">
                <div class="Reminder___2XGOY">
                    <div class="Reminder__Title___3Qmcs"><img class="PunchHole_1___3UkDf"
                                                              src="{{asset('/static/images/home/punchHoles.svg')}}" alt=""><img
                            class="PunchHole_4___1g-8l" src="{{asset('/static/images/home/punchHoles.svg')}}" alt="">
                        <div class="Reminder_Header___arWR5">یادآور تمدید یا اقساط بیمه</div>
                    </div>
                    <div class="Reminder__Content___1qRYd">
                        <form novalidate="" autocomplete="off">
                            <div style="display: flex">
                            <div class="col-lg-4 col-md-6 mb-4">

                                <!-- Name -->
                                <select class="mdb-select md-form">
                                    <option>بیمه شخص ثالث</option>
                                    <option>بیمه بدنه</option>
                                    <option>بیمه عمر</option>
                                    <option>بیمه آتش سوزی</option>
                                    <option>بیمه تامین اجتماعی</option>
                                    <option>بیمه حوادث</option>
                                </select>
                                <label class="mdb-main-label">یادآور برای بیمه</label>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">

                                <!-- Name -->
                                <select class="mdb-select md-form">
                                        <option value="1">هرماه</option>
                                        <option value="2">هر سه ماه</option>
                                        <option value="3">هر شش ماه</option>
                                        <option value="4">سالیانه</option>
                                        <option value="5">تکرار نشود</option>
                                </select>
                                <label class="mdb-main-label">نحوه تکرار</label>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">

                                <div class="md-form">
                                    <input type="text" id="form1" class="form-control">
                                    <label for="form1" class="">توضیحات یادآوری</label>
                                </div>

                            </div>
                        </div>
                            <div style="display: flex">
                                <div class="col-lg-4 col-md-6 mb-4">


                                    <div class="md-form">
                                        <input type="text" id="date" class="form-control" onclick="Mh1PersianDatePicker.Show(this,<?= "'" . Verta::now()->format('Y/n/j') . "'" ?>)">
                                        <label for="date" class="">تاریخ سررسید</label>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 mb-4">

                                    <!-- Name -->
                                    <select required id="ostan" name="ostan_id"
                                            class="selectpicker  mdb-select md-form show-tick "
                                            data-live-search="true">
                                        <option>استان را انتخاب کنید</option>
                                    </select>


                                </div>
                                <div class="col-lg-4 col-md-6 mb-4">

                                    <select required id="city" name="city_id" onchange="set_state_name()"
                                            class="selectpicker mdb-select md-form city">
                                        <option>ابتدا استان را انتخاب کنید</option>
                                    </select>

                                </div>
                            </div>
                            <button
                                class="jss229 jss203 jss214 jss215 jss217 jss218 jss227 Reminder__Submit___ASeNE"
                                tabindex="0" type="button" id="SabtHomePage"><span class="jss204">ثبت</span><span
                                    class="jss274"></span></button>
                        </form>
                </div>
            </div>
            <section class="Features_Con___RO4aG">
                <div class="Features___3E41w">
                    <div class="jss44 jss66">
                        <div class="jss45 jss78 jss89">
                            <div class="Wrap___2VvQt">
                                <div class="Circle___1erEk AnimateBorder___3f_Jh">
                                    <div class="Feature___31sGk"><img src="{{asset('/static/images/home/icon-simple.svg')}}"
                                                                      alt="سادگی در خرید "></div>
                                </div>
                            </div>
                            <div
                                style="opacity: 1; transform: scale(1, 1) translateZ(0px); transform-origin: 0px 0px 0px; transition: opacity 177ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 118ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                                سادگی در خرید
                            </div>
                        </div>
                        <div class="jss45 jss78 jss89">
                            <div class="Wrap___2VvQt">
                                <div class="Circle___1erEk AnimateBorder___3f_Jh">
                                    <div class="Feature___31sGk"><img src="{{asset('/static/images/home/icon-speed.svg')}}"
                                                                      alt="صدور فوری بیمه"></div>
                                </div>
                            </div>
                            <div
                                style="opacity: 1; transform: scale(1, 1) translateZ(0px); transform-origin: 0px 0px 0px; transition: opacity 177ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 118ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                                سرعت در صدورddd
                            </div>
                        </div>
                        <div class="jss45 jss78 jss89">
                            <div class="Wrap___2VvQt">
                                <div class="Circle___1erEk AnimateBorder___3f_Jh">
                                    <div class="Feature___31sGk"><img src="{{asset('/static/images/home/icon-support.svg')}}"
                                                                      alt="پشتیبانی خرید بیمه"></div>
                                </div>
                            </div>
                            <div
                                style="opacity: 1; transform: scale(1, 1) translateZ(0px); transform-origin: 0px 0px 0px; transition: opacity 177ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 118ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                                پشتیبانی در همه مراحل
                            </div>
                        </div>
                        <div class="jss45 jss78 jss89">
                            <div class="Wrap___2VvQt">
                                <div class="Circle___1erEk AnimateBorder___3f_Jh">
                                    <div class="Feature___31sGk"><img src="{{asset('/static/images/home/icon-ersal.svg')}}"
                                                                      alt="ارسال رایگان بیمه نامه"></div>
                                </div>
                            </div>
                            <div
                                style="opacity: 1; transform: scale(1, 1) translateZ(0px); transform-origin: 0px 0px 0px; transition: opacity 177ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 118ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                                ارسال رایگان
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="Slider_Wrapper___21NIi">
                <div class="Slider___1Fm30">

                    <div class="main-carousel"
                         data-flickity='{ "cellAlign": "right", "contain": true , "pageDots": false}'>
                        <div class="jss45 jss81 jss89 jss103">
                            <div class="Card___1jErD">
                                <div class="CardImage___14hBN"><img
                                        src="{{asset('/static/images/home/sliders/sales.jpg')}}"
                                        alt="بیمه شخص ثالث"></div>
                                <div class="CardText___3-bOv"><h4>بیمه شخص ثالث</h4>بیمه شخص ثالث
                                    بیمه‌ای الزامی برای دارندگان وسایل نقلیه موتوری است. با دفتر بیمه،
                                    امکان استعلام قیمت بیمه شخص ثالث و خرید آنلاین آن از تمامی
                                    شرکت‌های بیمه (بیمه ایران، آسیا، پاسارگاد، البرز، نوین، ملت،
                                    دانا، سینا، آرمان، کارآفرین و ...) وجود دارد.
                                </div>
                                <div class="CardAction___2Xuk2">
                                    <button class="jss229 jss203 jss214 jss215 jss217 jss218"
                                            tabindex="0" type="button"><span
                                            class="jss204">بیشتر</span><span class="jss274"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="jss45 jss81 jss89 jss103">
                            <div class="Card___1jErD">
                                <div class="CardImage___14hBN"><img
                                        src="{{asset('/static/images/home/sliders/sales.jpg')}}" alt="بیمه بدنه">
                                </div>
                                <div class="CardText___3-bOv"><h4>بیمه بدنه</h4> بیمه بدنه بیمه‌ای
                                    اختیاری است که می‌تواند به عنوان مکمل بیمه شخص ثالث استفاده شود.
                                    دفتر بیمه امکان استعلام قیمت و خرید آنلاین بیمه بدنه خودرو را از
                                    کلیه شرکت‌های بیمه فراهم کرده است. ضمناً از طریق دفتر بیمه
                                    می‌توانید از تخفیف‌های ویژه شرکت‌های بیمه و جشنواره‌های فصلی که
                                    تأثیر بسزایی بر نرخ بیمه بدنه دارند، مطلع شوید.
                                </div>
                                <div class="CardAction___2Xuk2">
                                    <button class="jss229 jss203 jss214 jss215 jss217 jss218"
                                            tabindex="0" type="button"><span
                                            class="jss204">بیشتر</span><span class="jss274"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="jss45 jss81 jss89 jss103">
                            <div class="Card___1jErD">
                                <div class="CardImage___14hBN"><img
                                        src="{{asset('/static/images/home/sliders/omr.jpg')}}" alt="بیمه عمر">
                                </div>
                                <div class="CardText___3-bOv"><h4>بیمه عمر</h4> بیمه عمر و
                                    سرمایه‌گذاری از شما و خانواده شما در طول مدت زندگی محافظت
                                    می‌کند. حتی بعد از مرگ بیمه‌گزار نیز از خانواده او پشتیبانی
                                    می‌کند. با دفتر بیمه می‌توانید اقدام به مقایسه شرایط بیمه عمر
                                    شرکت‌های مختلف بیمه کنید و مناسب‌ترین بیمه را به‌صورت آنلاین
                                    خریداری کنید.
                                </div>
                                <div class="CardAction___2Xuk2">
                                    <button class="jss229 jss203 jss214 jss215 jss217 jss218"
                                            tabindex="0" type="button"><span
                                            class="jss204">بیشتر</span><span class="jss274"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="jss45 jss81 jss89 jss103">
                            <div class="Card___1jErD">
                                <div class="CardImage___14hBN"><img
                                        src="{{asset('/static/images/home/sliders/khane.jpg')}}"
                                        alt="بیمه آتش سوزی"></div>
                                <div class="CardText___3-bOv"><h4>بیمه آتش سوزی</h4> بیمه آتش سوزی
                                    ساختمان بیمه‌ای اختیاری است که متأسفانه لزوم خرید آن، زمانی
                                    احساس می‌شود که خیلی دیر شده است. با دفتر بیمه می‌توانید از
                                    پیشنهادهای مختلف شرکت‌های بیمه و تخفیف‌های ویژه آن‌ها مطلع شوید.
                                    همچنین امکان مقایسه و خرید آنلاین بیمه آتش سوزی از شرکت‌های
                                    مختلف بیمه با دفتر بیمه فراهم شده است.
                                </div>
                                <div class="CardAction___2Xuk2">
                                    <button class="jss229 jss203 jss214 jss215 jss217 jss218"
                                            tabindex="0" type="button"><span
                                            class="jss204">بیشتر</span><span class="jss274"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="jss45 jss81 jss89 jss103">
                            <div class="Card___1jErD">
                                <div class="CardImage___14hBN"><img
                                        src="{{asset('/static/images/home/sliders/motor.jpg')}}"
                                        alt="بیمه موتورسیکلت"></div>
                                <div class="CardText___3-bOv"><h4>بیمه موتورسیکلت</h4> بیمه
                                    موتورسیکلت در برابر خسارت‌های وارد شده به اشخاص ثالث از
                                    بیمه‌گزار پشتیبانی می‌کند. خرید این بیمه برای تمام موتورسیکلت‌ها
                                    اجباری است. با دفتر بیمه می‌توان قیمت و شرایط این بیمه را در
                                    شرکت‌های مختلف بیمه مقایسه کرد و مناسب‌ترین گزینه را انتخاب کرده
                                    و آنلاین خرید.
                                </div>
                                <div class="CardAction___2Xuk2">
                                    <button class="jss229 jss203 jss214 jss215 jss217 jss218"
                                            tabindex="0" type="button"><span
                                            class="jss204">بیشتر</span><span class="jss274"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="jss45 jss81 jss89 jss103">
                            <div class="Card___1jErD">
                                <div class="CardImage___14hBN"><img
                                        src="{{asset('/static/images/home/sliders/masoliat.jpg')}}"
                                        alt="بیمه مسئولیت پزشکان"></div>
                                <div class="CardText___3-bOv"><h4>بیمه مسئولیت پزشکان</h4> بیمه
                                    مسئولیت پزشکان و پیراپزشکان مسئولیت بروز خسارت‌های غیرعمدی وارد
                                    شده از پزشکان و پیراپزشکان به بیماران را قبول می‌کند. پزشکان و
                                    پیراپزشکان با داشتن این بیمه دیگر لازم نیست نگران بروز حادثه‌ای
                                    برای بیماران خود باشند. با دفتر بیمه می‌توان بیمه‌های مسئولیت
                                    پزشکان شرکت‌های مختلف بیمه را با یکدیگر مقایسه کرد و مناسب‌ترین
                                    بیمه را برای خود انتخاب و خریداری کرد.
                                </div>
                                <div class="CardAction___2Xuk2">
                                    <button class="jss229 jss203 jss214 jss215 jss217 jss218"
                                            tabindex="0" type="button"><span
                                            class="jss204">بیشتر</span><span class="jss274"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="jss45 jss84 jss89 jss103">
                            <div class="Card___1jErD">
                                <div class="CardImage___14hBN"><img
                                        src="{{asset('/static/images/home/sliders/khane.jpg')}}"
                                        alt="بیمه زلزله"></div>
                                <div class="CardText___3-bOv"><h4>بیمه زلزله</h4> بیمه زلزله در واقع
                                    نوعی از بیمه آتش سوزی است که علاوه بر جبران خسارت در برابر آتش
                                    سوزی، صاعقه و انفجار، در برابر حادثه زلزله نیز خسارت پرداخت
                                    می‌کند. با دفتر بیمه می‌توانید شرایط و قیمت بیمه زلزله شرکت‌های
                                    مختلف را مقایسه کنید و با توجه به اولویت‌های خود، بیمه‌ای مناسب
                                    انتخاب و به‌صورت آنلاین خریداری کنید.
                                </div>
                                <div class="CardAction___2Xuk2">
                                    <button class="jss229 jss203 jss214 jss215 jss217 jss218"
                                            tabindex="0" type="button"><span
                                            class="jss204">بیشتر</span><span class="jss274"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="jss45 jss81 jss89 jss103">
                            <div class="Card___1jErD">
                                <div class="CardImage___14hBN"><img
                                        src="{{asset('/static/images/home/sliders/safr.jpg')}}"
                                        alt="بیمه مسافرتی"></div>
                                <div class="CardText___3-bOv"><h4>بیمه مسافرتی خارج از کشور</h4>
                                    بیمه مسافرتی خارج از کشور از شما در برابر خطرات ممکن در طول
                                    سفرهای خارجی محافظت می‌کند. با اپلیکیشن و وب‌سایت دفتر بیمه
                                    می‌توانید پس از استعلام قیمت بیمه مسافرتی شرکت‌های مختلف و
                                    مقایسه آن‌ها، بهترین انتخاب را داشته باشید و بیمه مورد نظر خود
                                    را آنلاین خریداری کنید.
                                </div>
                                <div class="CardAction___2Xuk2">
                                    <button class="jss229 jss203 jss214 jss215 jss217 jss218"
                                            tabindex="0" type="button"><span
                                            class="jss204">بیشتر</span><span class="jss274"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="App___1qnb_">
                <div class="Mobile__Items___gJpNd">
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(80%) translateX(-130%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/7.png')}}"
                             alt="شرکت بیمه ایران"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(80%) translateX(-210%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/3.png')}}" alt="شرکت بیمه آسیا">
                    </div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(80%) translateX(-290%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/15.png')}}"
                             alt="شرکت بیمه پارسیان"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(80%) translateX(-370%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/5.png')}}" alt="شرکت بیمه دانا">
                    </div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(80%) translateX(-450%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/18.png')}}"
                             alt="شرکت بیمه رازی"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(80%) translateX(-530%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/10.png')}}"
                             alt="شرکت بیمه ما (ملت ایران)"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(80%) translateX(-50%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/13.png')}}"
                             alt="شرکت بیمه معلم"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(80%) translateX(-610%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/14.png')}}"
                             alt="شرکت بیمه پاسارگاد"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(80%) translateX(-690%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/1.png')}}"
                             alt="شرکت بیمه البرز"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(0%) translateX(-770%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/6.png')}}" alt="شرکت بیمه دی">
                    </div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(80%) translateX(-770%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/11.png')}}" alt="شرکت بیمه ملت">
                    </div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(0%) translateX(-50%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/8.png')}}"
                             alt="شرکت بیمه کارآفرین"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(0%) translateX(-130%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/21.png')}}"
                             alt="شرکت بیمه نوین"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(0%) translateX(-210%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/19.png')}}"
                             alt="شرکت بیمه سامان"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(0%) translateX(-290%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/16.png')}}"
                             alt="شرکت بیمه تجارت نو"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(0%) translateX(-370%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/9.png')}}" alt="شرکت بیمه کوثر">
                    </div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(0%) translateX(-450%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/2.png')}}"
                             alt="شرکت بیمه آرمان"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(0%) translateX(-530%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/4.png')}}" alt="شرکت بیمه سینا">
                    </div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(0%) translateX(-610%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/17.png')}}"
                             alt="شرکت بیمه تعاون"></div>
                    <div class="Mobile__Item___3Opuk"
                         style="transform: translateY(0%) translateX(-690%) scale(0.7) rotate(0deg); opacity: 1;">
                        <img height="96" width="96" src="{{asset('/static/images/home/insurances/22.png')}}"
                             alt="شرکت بیمه آسماری"></div>
                </div>
                <div class="jss44 jss67" style="position: relative; z-index: 2;">
                    <div class="jss45 jss76">
                        <div class="App__Right___108Hs">
                            <div class="App__Side___3crGb">در هر لحظه میتونی رو مشاوره ما حساب کنی.</div>
                            <div class="App__Side___3crGb">بیمَتو در محل تحویل بگیر، مهمون ما :)</div>
                        </div>
                    </div>
                    <div class="jss45 jss76">
                        <div class="Mobile__Wrapper___2BEz5">
                            <div class="Mobile__Screen___1wn8t">
                                <div class="Mobile__Screen__InnerWrapper___oTsuX"
                                     style="transform: translateY(-50.1%);"><img src="{{asset('/static/images/home/2.png')}}"
                                                                                 alt="مقایسه قیمت بیمه"><img
                                        src="{{asset('/static/images/home/1.jpg')}}" alt="خرید اینترنتی بیمه از دفتر بیمه"
                                        style="position: relative; top: -4px;"></div>
                            </div>
                            <img class="Mobile__PhoneImg___2gA2j" src="{{asset('/static/images/home/mobilee.svg')}}"
                                 alt="اپلیکیشن خرید بیمه iOS"></div>
                    </div>
                    <div class="jss45 jss76">
                        <div class="App__Left___3neef">
                            <div class="App__Side___3crGb">تعرفه‌ها و خدمات شرکتهای بیمه رو مقایسه کن.</div>
                        </div>
                    </div>
                </div>
                <div class="Crooked___1yUD7"></div>
            </div>
            <div class="Download__Links___1esC_"><h6 class="jss232 jss249 jss259 jss255"
                                                     style="padding-bottom:15px">دانلود اپلیکیشن دفتر بیمه</h6>
                <div><a id="GooglePlayHomePage"
                        href="https://play.google.com/store/apps/details?id=com.nar.bimito&amp;hl=en"
                        target="_blank"><img class="Download__Img___EH-f1" src="{{asset('/static/images/home/google.png')}}"
                                             alt="دانلود اپلیکیشن دفتر بیمه از گوگل پلی"></a><a id="BazarHomePage"
                                                                                             href="http://cafebazaar.ir/app/com.nar.bimito/?l=fa"
                                                                                             target="_blank"><img
                            class="Download__Img___EH-f1" src="{{asset('/static/images/home/bazar.png')}}"
                            alt="دانلود اپلیکیشن دفتر بیمه از کافه بازار"></a><a id="MayketHomePage"
                                                                              href="https://www.myket.ir/app/com.nar.bimito"
                                                                              target="_blank"><img
                            class="Download__Img___EH-f1" src="{{asset('/static/images/home/mayket.png')}}"
                            alt="دانلود اپلیکیشن دفتر بیمه از مایکت"></a><a id="IranAppsHomePage"
                                                                         href="http://iranapps.com/app/com.nar.bimito"
                                                                         rel="nofollow" target="_blank"><img
                            class="Download__Img___EH-f1" src="{{asset('/static/images/home/iranapps2.png')}}"
                            alt="دانلود اپلیکیشن دفتر بیمه از ایران اپس"></a><a id="CharKhooneHomePage"
                                                                             href="https://www.charkhoneh.com/content/930534870"
                                                                             rel="nofollow" target="_blank"><img
                            class="Download__Img___EH-f1" src="{{asset('/static/images/home/charkhone.png')}}"
                            alt="دانلود اپلیکیشن دفتر بیمه از چارخونه"></a><a id="ios"
                                                                           href="https://www.bimito.com/ios"
                                                                           rel="nofollow" target="_blank"><img
                            class="Download__Img___EH-f1" src="{{asset('/static/images/home/ios.png')}}"
                            alt="نسخه ios دفتر بیمه"></a></div>
            </div>
            <div class="Wrapper___3AUQ_">
                <div class="Title___13xUr"><h4 class="jss232 jss247 jss259">دفتر بیمه چیست؟</h4></div>
                <div class="Description___3HmkO">از طریق اپلیکیشن و وب‌سایت دفتر بیمه هر لحظه و هر جایی که هستی می‌تونی
                    به صورت آنلاین بیمه بخری. فقط کافیه به چند تا سوال ساده، جواب بدی تا بتونی کیفیت و قیمت ده‌ها
                    شرکت بیمه مورد تایید بیمه مرکزی رو مقایسه کنی. آخر سر بیمه‌ای که به نظرت مناسب‌تر هست رو انتخاب
                    کنی و بخری و در خونه تحویل بگیری.
                </div>
            </div>


{{--            -----------------------------------------تمدید کن ---------------------------------------}}
            {{--<div class="ExtendSVG___UXYTe">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <path d="M50,0A50,50,0,1,1,0,50,50,50,0,0,1,50,0Z" fill="#fff"
                                  fill-rule="evenodd"></path>
                            <path d="M50,84A34,34,0,1,1,84,50,34,34,0,0,1,50,84Z" fill="#ebf9ff"
                                  fill-rule="evenodd"></path>
                            <g id="arrow" class="Spin___1mH97">
                                <path
                                    d="M49.83,92.12A42,42,0,0,1,16.27,25a42.19,42.19,0,0,1,7.66-7.85l.59.75A41.08,41.08,0,0,0,9.25,56,41.05,41.05,0,0,0,82.74,74.74c.57-.75,1.12-1.54,1.64-2.35l.8.52c-.54.82-1.1,1.63-1.68,2.4A42,42,0,0,1,49.83,92.12Z"
                                    fill="#4a4a4a"></path>
                                <path
                                    d="M88,34.85a39.33,39.33,0,0,0-2-4.26l.84-.45a43.14,43.14,0,0,1,2.05,4.35Zm-4.46-8.26a41.59,41.59,0,0,0-6.23-7l.63-.71a42,42,0,0,1,6.38,7.19Zm-58.3-9.27-.57-.76a44.16,44.16,0,0,1,4-2.67l.48.82A42.19,42.19,0,0,0,25.22,17.32Zm48.39-.68a39.2,39.2,0,0,0-4-2.5l.46-.83a40.93,40.93,0,0,1,4.08,2.55ZM33.32,12.57l-.39-.87a41.74,41.74,0,0,1,9.18-2.85l.17.94A40.28,40.28,0,0,0,33.32,12.57Zm32.06-.45a40.72,40.72,0,0,0-9-2.53l.15-.94a42.63,42.63,0,0,1,9.26,2.59ZM47,9.19l-.07-.95c1-.07,2-.11,3-.11h0l1.3,0,.53,0,0,.95-.52,0c-.43,0-.85,0-1.28,0C48.88,9.08,47.91,9.12,47,9.19Z"
                                    fill="#4a4a4a"></path>
                                <polygon points="85.18 76.21 85.08 72.04 81.36 74.03 85.18 76.21 85.18 76.21"
                                         fill="#fff" fill-rule="evenodd"></polygon>
                                <path d="M85.67,77l-5.3-3,5.17-2.77Zm-3.33-3,2.34,1.34-.06-2.56Z"
                                      fill="#4a4a4a"></path>
                            </g>
                            <path
                                d="M36.41,56s-.15,2.07.61,2.74a3.1,3.1,0,0,0,2.54.66,2.72,2.72,0,0,0,1.28-2.06,3.55,3.55,0,0,0-.12-1.46L36.41,56Z"
                                fill="#fff" fill-rule="evenodd"></path>
                            <path
                                d="M39.06,59.63a3.4,3.4,0,0,1-2.14-.76c-.82-.71-.67-2.79-.66-2.87v-.15l4.56-.12,0,.1A3.75,3.75,0,0,1,41,57.36a2.85,2.85,0,0,1-1.39,2.2A1.75,1.75,0,0,1,39.06,59.63Zm-2.49-3.47c0,.47,0,2,.56,2.47a3,3,0,0,0,2.38.63,2.57,2.57,0,0,0,1.18-1.93,3.83,3.83,0,0,0-.08-1.28Z"
                                fill="#fff"></path>
                            <path
                                d="M38.7,60.06h-.16a2.66,2.66,0,0,1-2.66-2.67V55.12h5.48v2.27a2.66,2.66,0,0,1-2.66,2.67Zm-.16-.91h.16a1.75,1.75,0,0,0,1.24-.52,1.73,1.73,0,0,0,.51-1.24V56H36.79v1.36a1.73,1.73,0,0,0,.51,1.24,1.75,1.75,0,0,0,1.24.52Z"
                                fill="#4a4a4a"></path>
                            <path
                                d="M59.34,55.87s-.32,3.07.9,3.43,2.53.44,2.81-.1a12.92,12.92,0,0,0,.72-2.81,2.48,2.48,0,0,0-.16-.74l-4.27.22Z"
                                fill="#fff" fill-rule="evenodd"></path>
                            <path
                                d="M62,59.75a6.71,6.71,0,0,1-1.79-.3c-1.33-.39-1-3.47-1-3.6v-.13l4.52-.23,0,.11a2.77,2.77,0,0,1,.17.79,12.87,12.87,0,0,1-.74,2.88C63,59.62,62.55,59.75,62,59.75ZM59.48,56c-.07.9,0,2.88.8,3.13,1.29.38,2.42.37,2.63,0a13.47,13.47,0,0,0,.7-2.74,2.13,2.13,0,0,0-.11-.57Z"
                                fill="#fff"></path>
                            <path
                                d="M61.56,60.07H61.4a2.68,2.68,0,0,1-2.67-2.67V54.71h5.49V57.4a2.68,2.68,0,0,1-2.66,2.67Zm-.16-.91h.16a1.71,1.71,0,0,0,1.23-.52,1.74,1.74,0,0,0,.52-1.24V55.62H59.64V57.4a1.78,1.78,0,0,0,1.76,1.76Z"
                                fill="#4a4a4a"></path>
                            <path
                                d="M36,42.73H64.26a3.15,3.15,0,0,1,3.21,3.06V52.6a3.14,3.14,0,0,1-3.21,3H36a3.15,3.15,0,0,1-3.22-3V45.79A3.15,3.15,0,0,1,36,42.73Z"
                                fill="#fff" fill-rule="evenodd"></path>
                            <path
                                d="M36,42.33H64.26a3.68,3.68,0,0,1,2.55,1,3.35,3.35,0,0,1,1.07,2.45V52.6a3.37,3.37,0,0,1-1.07,2.45,3.68,3.68,0,0,1-2.55,1H36a3.66,3.66,0,0,1-2.55-1,3.35,3.35,0,0,1-1.07-2.45V45.79a3.35,3.35,0,0,1,1.07-2.45,3.66,3.66,0,0,1,2.55-1Zm28.27.81H36a2.86,2.86,0,0,0-2,.79,2.55,2.55,0,0,0-.82,1.86V52.6A2.57,2.57,0,0,0,34,54.46a2.86,2.86,0,0,0,2,.79H64.26a2.87,2.87,0,0,0,2-.79,2.56,2.56,0,0,0,.81-1.86V45.79a2.55,2.55,0,0,0-.81-1.86,2.87,2.87,0,0,0-2-.79Z"
                                fill="#4a4a4a"></path>
                            <path
                                d="M39.5,32.32H60.38c1.11,0,1.76.94,2,2l2,8.42-28.7-.13,1.79-8.29c.24-1.09.91-2,2-2Z"
                                fill="#00b4ff" fill-rule="evenodd"></path>
                            <path
                                d="M39.5,31.91H60.38a2.12,2.12,0,0,1,1.54.65h0a3.52,3.52,0,0,1,.87,1.68l2.12,8.93L35.18,43l1.91-8.79a3.44,3.44,0,0,1,.85-1.69,2.15,2.15,0,0,1,1.56-.65Zm20.88.82H39.5a1.36,1.36,0,0,0-1,.41,2.63,2.63,0,0,0-.64,1.28l-1.69,7.81,27.68.13L62,34.43a2.73,2.73,0,0,0-.66-1.29h0a1.36,1.36,0,0,0-1-.4Z"
                                fill="#4a4a4a"></path>
                            <path
                                d="M62.32,47.41h0a2.29,2.29,0,0,1,2.28,2.28h0A2.28,2.28,0,0,1,62.32,52h0a2.27,2.27,0,0,1-2.27-2.27h0a2.28,2.28,0,0,1,2.27-2.28Z"
                                fill="#fc0" fill-rule="evenodd"></path>
                            <path
                                d="M62.32,47a2.72,2.72,0,0,1,1.9.79h0a2.72,2.72,0,0,1,.79,1.9,2.7,2.7,0,0,1-2.69,2.68,2.64,2.64,0,0,1-1.89-.79h0A2.69,2.69,0,0,1,62.32,47Zm1.32,1.37A1.87,1.87,0,1,0,61,51h0a1.87,1.87,0,1,0,2.64-2.64Z"
                                fill="#4a4a4a"></path>
                            <path
                                d="M37.69,47.43h0A2.28,2.28,0,0,1,40,49.7h0A2.29,2.29,0,0,1,37.69,52h0a2.29,2.29,0,0,1-2.28-2.28h0a2.28,2.28,0,0,1,2.28-2.27Z"
                                fill="#fc0" fill-rule="evenodd"></path>
                            <path
                                d="M37.69,47a2.64,2.64,0,0,1,1.89.79h0a2.69,2.69,0,0,1,0,3.79,2.68,2.68,0,0,1-1.9.79,2.64,2.64,0,0,1-1.89-.79h0A2.71,2.71,0,0,1,35,49.7,2.68,2.68,0,0,1,37.69,47ZM39,48.38a1.9,1.9,0,0,0-1.32-.54,1.87,1.87,0,0,0-1.32.55,1.83,1.83,0,0,0-.55,1.31A1.85,1.85,0,0,0,36.37,51h0A1.87,1.87,0,1,0,39,48.38Z"
                                fill="#4a4a4a"></path>
                            <path
                                d="M56.84,38.52a4.53,4.53,0,0,1,3.22,1.34h0a4.57,4.57,0,0,1,1.31,2.81h-.82a3.75,3.75,0,0,0-1.07-2.24h0a3.77,3.77,0,0,0-5.3,0h0a3.81,3.81,0,0,0-1.07,2.24h-.82a4.52,4.52,0,0,1,1.32-2.81h0a4.55,4.55,0,0,1,3.23-1.34Z"
                                fill="#4a4a4a"></path>
                            <polygon
                                points="43.52 47.43 56.28 47.43 56.28 48.34 43.52 48.34 43.52 47.43 43.52 47.43"
                                fill="#4b4a4a" fill-rule="evenodd"></polygon>
                            <polygon
                                points="43.51 50.93 56.27 50.93 56.27 51.84 43.51 51.84 43.51 50.93 43.51 50.93"
                                fill="#4b4a4a" fill-rule="evenodd"></polygon>
                            <path
                                d="M34.87,41.71s.26-1.88-.15-2.13a8.48,8.48,0,0,0-2.85-.23c-.48.07-1.74,1.49-1,1.93s4,.43,4,.43Z"
                                fill="#fff" fill-rule="evenodd"></path>
                            <path
                                d="M34.84,41.87c-.35,0-3.26,0-4-.45a.63.63,0,0,1-.31-.72,2.34,2.34,0,0,1,1.33-1.51,8.5,8.5,0,0,1,3,.25c.46.28.29,1.83.23,2.29l0,.14h-.17Zm-2.32-2.39a4.85,4.85,0,0,0-.63,0,2.08,2.08,0,0,0-1.07,1.25.33.33,0,0,0,.16.39,13.15,13.15,0,0,0,3.75.4c.1-.82.09-1.73-.09-1.84A7.29,7.29,0,0,0,32.52,39.48Z"
                                fill="#fff"></path>
                            <path
                                d="M34.39,39.59H32.14a1.08,1.08,0,0,0-1.09,1.08.84.84,0,0,0,.25.59.83.83,0,0,0,.58.24h2.79V39.87a.27.27,0,0,0-.28-.28Zm-2.25-.91h2.25a1.2,1.2,0,0,1,1.19,1.19v2.54h-3.7a1.74,1.74,0,0,1-1.22-.51,1.72,1.72,0,0,1-.51-1.23,2,2,0,0,1,2-2Z"
                                fill="#4a4a4a"></path>
                            <path d="M64.69,42s-.31-2.29.7-2.44,3.06-.32,3.44.05.42,1.79,0,2.09-4.13.3-4.13.3Z"
                                  fill="#fff" fill-rule="evenodd"></path>
                            <path
                                d="M64.69,42.11h-.14l0-.14c0-.25-.3-2.45.83-2.62,0,0,3-.44,3.58.09a2.06,2.06,0,0,1,.34,1.45,1.27,1.27,0,0,1-.37.89C68.46,42.09,65.32,42.11,64.69,42.11Zm2.87-2.62a16.74,16.74,0,0,0-2.15.17c-.65.1-.65,1.46-.58,2.13a18.14,18.14,0,0,0,3.9-.27,1,1,0,0,0,.23-.66,1.83,1.83,0,0,0-.24-1.19A2.31,2.31,0,0,0,67.56,39.49Z"></path>
                            <path
                                d="M65.61,38.75h2.25a2,2,0,0,1,1.41.59,2,2,0,0,1,.58,1.4,1.74,1.74,0,0,1-1.73,1.74h-3.7V39.94a1.2,1.2,0,0,1,1.19-1.19Zm2.25.91H65.61a.27.27,0,0,0-.28.28v1.63h2.79a.83.83,0,0,0,.58-.24.84.84,0,0,0,.25-.59,1.1,1.1,0,0,0-.32-.76,1.08,1.08,0,0,0-.77-.32Z"
                                fill="#4a4a4a"></path>
                            <path
                                d="M38.48,72.49a2.39,2.39,0,0,1-1.09-.25,3.23,3.23,0,0,1-.92-.67l.56-.79a2.87,2.87,0,0,0,.6.44,2.37,2.37,0,0,0,.6.23,1.91,1.91,0,0,0,.58,0,2.17,2.17,0,0,0,.56-.13,1.72,1.72,0,0,0,.41-.22,2.16,2.16,0,0,0,.25-.2l-1.57-3.78.9-.37c.11.25.24.56.38.92l.48,1.15.66,1.6c.07.16.13.3.18.43a1.3,1.3,0,0,0,.19.33.74.74,0,0,0,.32.22,1.58,1.58,0,0,0,.54.08.51.51,0,0,1,.35.13.5.5,0,0,1,.14.35.48.48,0,0,1-.14.35.52.52,0,0,1-.35.14,3.1,3.1,0,0,1-.57,0,1.83,1.83,0,0,1-.45-.15,1.55,1.55,0,0,1-.33-.21,1.48,1.48,0,0,1-.25-.25l-.34.23a3,3,0,0,1-.44.22,3.83,3.83,0,0,1-.58.16,4.36,4.36,0,0,1-.67,0Zm5.28,1.71L43,75l-.82-.81.81-.81.81.82Zm2,0L45,75l-.81-.81.81-.81.81.81ZM41.37,72a.5.5,0,0,1,.14-.35.49.49,0,0,1,.35-.13h.93l.41,0,.41,0a2,2,0,0,0,.37-.11,1.43,1.43,0,0,0,.3-.16.72.72,0,0,0,.19-.24,1.13,1.13,0,0,0,.06-.61,6,6,0,0,0-.2-.92l-.13-.35c-.05-.12-.09-.24-.14-.34s-.11-.25-.16-.37l.88-.44a.36.36,0,0,0,0,.1,2.54,2.54,0,0,1,.11.26l.16.38c0,.14.11.3.16.46a3.29,3.29,0,0,1,.11,2.23,1.82,1.82,0,0,1-1.25,1,2.12,2.12,0,0,1-.34.06,3.11,3.11,0,0,1-.43,0l-.42,0H41.86a.5.5,0,0,1-.35-.14.48.48,0,0,1-.14-.35Zm7.69.49A2.39,2.39,0,0,1,48,72.24a3.23,3.23,0,0,1-.92-.67l.56-.79a2.87,2.87,0,0,0,.6.44,2.37,2.37,0,0,0,.6.23,1.91,1.91,0,0,0,.58,0,2.17,2.17,0,0,0,.56-.13,1.72,1.72,0,0,0,.41-.22,2.16,2.16,0,0,0,.25-.2L49,67.16l.9-.37c.11.25.24.56.38.92l.48,1.15c.18.46.41,1,.66,1.6.07.16.13.3.18.43a1.3,1.3,0,0,0,.19.33.74.74,0,0,0,.32.22,1.58,1.58,0,0,0,.54.08.51.51,0,0,1,.35.13.5.5,0,0,1,.14.35.48.48,0,0,1-.14.35.52.52,0,0,1-.35.14,3.1,3.1,0,0,1-.57,0,1.83,1.83,0,0,1-.45-.15,1.55,1.55,0,0,1-.33-.21,1.48,1.48,0,0,1-.25-.25l-.34.23a3,3,0,0,1-.44.22,3.83,3.83,0,0,1-.58.16,4.36,4.36,0,0,1-.67,0Zm7.19-1a.53.53,0,0,0,.56-.18.9.9,0,0,0,.13-.56v-.23a1.56,1.56,0,0,0-.3-.78.73.73,0,0,0-.58-.36c-.17,0-.36.19-.56.56-.07.12-.15.28-.25.5l-.06.12-.06.12c0,.08-.07.16-.1.21a3.77,3.77,0,0,0,1.23.6Zm2.26,0a.44.44,0,0,1,.34.14A.45.45,0,0,1,59,72a.42.42,0,0,1-.14.34.45.45,0,0,1-.34.15A1.36,1.36,0,0,1,57.39,72a1,1,0,0,1-1,.46,4.39,4.39,0,0,1-1.92-.78,1.64,1.64,0,0,1-.42.41,2.24,2.24,0,0,1-1.34.4.51.51,0,0,1-.49-.49.46.46,0,0,1,.15-.34.42.42,0,0,1,.34-.14,1.54,1.54,0,0,0,1.25-.73,4,4,0,0,0,.36-.6c0-.07.08-.16.13-.27l0-.07,0,0,.05-.11.12-.23.13-.23a2.91,2.91,0,0,1,.3-.41,1.29,1.29,0,0,1,1-.41,1.52,1.52,0,0,1,1.17.55,2.54,2.54,0,0,1,.58,1.31,2.5,2.5,0,0,1,0,.48,1.07,1.07,0,0,0,.22.58.59.59,0,0,0,.47.19Zm1.92-5.22-.8.81-.81-.81.8-.81.81.81Zm2,0-.8.81-.82-.82.81-.8.81.81ZM57.87,72a.5.5,0,0,1,.14-.35.49.49,0,0,1,.35-.13h.93l.41,0,.41,0a2,2,0,0,0,.37-.11,1.43,1.43,0,0,0,.3-.16.72.72,0,0,0,.19-.24,1.13,1.13,0,0,0,.06-.61,6,6,0,0,0-.2-.92l-.13-.35c-.05-.12-.09-.24-.14-.34s-.11-.25-.16-.37l.88-.44a.36.36,0,0,0,0,.1,2.54,2.54,0,0,1,.11.26l.16.38c0,.14.11.3.16.46a3.29,3.29,0,0,1,.11,2.23,1.82,1.82,0,0,1-1.25,1,2.35,2.35,0,0,1-.34.06,3.11,3.11,0,0,1-.43,0l-.42,0H58.36a.5.5,0,0,1-.35-.14.48.48,0,0,1-.14-.35Z"
                                fill="#4a4a4a"></path>
                        </g>
                    </g>
                </svg>
            </div>--}}
        </div>
    </div>

@endsection

@section('script_link')
            <script src="{{asset(('static/frotel/ostan.js'))}}"></script>
            <script src="{{asset('static/frotel/city.js')}}"></script>
            <script src="{{asset('static/DatePicker/Mh1PersianDatePicker.js')}}"></script>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.mdb-select').materialSelect();
            $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
                $(this).closest('.select-outline').find('label').toggleClass('active');
                $(this).closest('.select-outline').find('.caret').toggleClass('active');
            });
        });
    </script>

    <script>

                loadOstan('ostan');

                $("#ostan").change(function () {
                    var i = $(this).find('option:selected').val();
                    ldMenu(i, 'city');
                    $('.selectpicker').selectpicker('refresh');
                });

                function set_state_name() {
                    var ostan_name = $('#ostan option:selected').text();
                    var city_name = $('#city option:selected').text();
                    $('input[name=city]').val(city_name);
                    $('input[name=ostan]').val(ostan_name);
                }


            </script>
@endsection
