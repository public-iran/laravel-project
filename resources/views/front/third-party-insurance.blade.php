@extends('welcome')
@section('css')
    <link rel="stylesheet" href="{{asset('static/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/third_party_insurance.css')}}">
@endsection
@section('style')
    <style>
        .Bg_1___17O1p {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -56px -5px;
        }


        .Bg_2___1Lkkm {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -5px -56px;
        }


        .Bg_3___NtKZ0 {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -55px -56px;
        }


        .Bg_4___398VP {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -106px -5px;
        }


        .Bg_5___3PauW {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -106px -55px;
        }


        .Bg_6___3Xi5g {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -5px -106px;
        }


        .Bg_7___2L74o {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -55px -106px;
        }


        .Bg_8___JknH4 {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -105px -106px;
        }


        .Bg_9___1fpRm {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -156px -5px;
        }


        .Bg_10___34Koo {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -156px -55px;
        }


        .Bg_11___nLu1C {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -156px -105px;
        }


        .Bg_12___WTh20 {
            width: 40px; height: 40px;
            background: url('{{'static/images/landings/third-party/css_sprites.png'}}') -5px -156px;
        }


        .Bg_13___3GwTt {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -55px -156px;
        }


        .Bg_14___2Mh20 {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -105px -156px;
        }


        .Bg_15___2dubM {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -155px -156px;
        }


        .Bg_16___2izwd {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -206px -5px;
        }


        .Bg_17___2I3ce {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -206px -55px;
        }


        .Bg_18___29dAN {
            width: 40px; height: 40px;
            background: url('{{'static/images/landings/third-party/css_sprites.png'}}') -206px -105px;
        }


        .Bg_19___q28oV {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -206px -155px;
        }


        .Bg_20___1oi6H {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -5px -206px;
        }


        .Bg_21___2AVfJ {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -55px -206px;
        }


        .Bg_22___2m7f9 {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -105px -206px;
        }


        .Bg_23___2hqOK {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -155px -206px;
        }


        .Bg_24___19ET4 {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -205px -206px;
        }


        .Bg_25___3P4pF {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -256px -5px;
        }


        .Bg_26___1ZCTR {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -256px -55px;
        }


        .Bg_27___34H7h {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -256px -105px;
        }


        .Bg_28___294J4 {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -256px -155px;
        }


        .Bg_29___38CXG {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -256px -205px;
        }


        .Bg_30___1KoFC {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -5px -256px;
        }


        .Bg_31___1sPc5 {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -55px -256px;
        }


        .Bg_32___2Vbd_ {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -105px -256px;
        }


        .Bg_33___3NQus {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -155px -256px;
        }


        .Bg_34___1Ch70 {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -205px -256px;
        }


        .Bg_35___2GtXe {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -255px -256px;
        }


        .Bg_36___37zQh {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -306px -5px;
        }


        .Bg_37___mI-BW {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -306px -55px;
        }


        .Bg_38___1E0AQ {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -306px -105px;
        }


        .Bg_39___1dLlr {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -306px -155px;
        }


        .Bg_40___1nqpN {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -306px -205px;
        }


        .Bg_41___3G7qO {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -306px -255px;
        }


        .Bg_42___2g4MK {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -5px -306px;
        }


        .Bg_43___3nH2e {
            width: 41px; height: 41px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -5px -5px;
        }


        .Bg_44___3WFnu {
            width: 40px; height: 40px;
            background: url('{{asset('static/images/landings/third-party/css_sprites.png')}}') -55px -306px;
        }

    </style>
@endsection

@section('content')
    <div>
        <div class="ExtendSVG___UXYTe">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                        <path d="M50,0A50,50,0,1,1,0,50,50,50,0,0,1,50,0Z" fill="#fff" fill-rule="evenodd"></path>
                        <path d="M50,84A34,34,0,1,1,84,50,34,34,0,0,1,50,84Z" fill="#ebf9ff" fill-rule="evenodd"></path>
                        <g id="arrow" class="Spin___1mH97">
                            <path
                                d="M49.83,92.12A42,42,0,0,1,16.27,25a42.19,42.19,0,0,1,7.66-7.85l.59.75A41.08,41.08,0,0,0,9.25,56,41.05,41.05,0,0,0,82.74,74.74c.57-.75,1.12-1.54,1.64-2.35l.8.52c-.54.82-1.1,1.63-1.68,2.4A42,42,0,0,1,49.83,92.12Z"
                                fill="#4a4a4a"></path>
                            <path
                                d="M88,34.85a39.33,39.33,0,0,0-2-4.26l.84-.45a43.14,43.14,0,0,1,2.05,4.35Zm-4.46-8.26a41.59,41.59,0,0,0-6.23-7l.63-.71a42,42,0,0,1,6.38,7.19Zm-58.3-9.27-.57-.76a44.16,44.16,0,0,1,4-2.67l.48.82A42.19,42.19,0,0,0,25.22,17.32Zm48.39-.68a39.2,39.2,0,0,0-4-2.5l.46-.83a40.93,40.93,0,0,1,4.08,2.55ZM33.32,12.57l-.39-.87a41.74,41.74,0,0,1,9.18-2.85l.17.94A40.28,40.28,0,0,0,33.32,12.57Zm32.06-.45a40.72,40.72,0,0,0-9-2.53l.15-.94a42.63,42.63,0,0,1,9.26,2.59ZM47,9.19l-.07-.95c1-.07,2-.11,3-.11h0l1.3,0,.53,0,0,.95-.52,0c-.43,0-.85,0-1.28,0C48.88,9.08,47.91,9.12,47,9.19Z"
                                fill="#4a4a4a"></path>
                            <polygon points="85.18 76.21 85.08 72.04 81.36 74.03 85.18 76.21 85.18 76.21" fill="#fff"
                                     fill-rule="evenodd"></polygon>
                            <path d="M85.67,77l-5.3-3,5.17-2.77Zm-3.33-3,2.34,1.34-.06-2.56Z" fill="#4a4a4a"></path>
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
                        <path d="M39.5,32.32H60.38c1.11,0,1.76.94,2,2l2,8.42-28.7-.13,1.79-8.29c.24-1.09.91-2,2-2Z"
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
                        <polygon points="43.52 47.43 56.28 47.43 56.28 48.34 43.52 48.34 43.52 47.43 43.52 47.43"
                                 fill="#4b4a4a" fill-rule="evenodd"></polygon>
                        <polygon points="43.51 50.93 56.27 50.93 56.27 51.84 43.51 51.84 43.51 50.93 43.51 50.93"
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
                        <path d="M64.69,42s-.31-2.29.7-2.44,3.06-.32,3.44.05.42,1.79,0,2.09-4.13.3-4.13.3Z" fill="#fff"
                              fill-rule="evenodd"></path>
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
        </div>
        <div class="Main___9UZAk"><h1>استعلام بیمه شخص ثالث</h1>
            <div class="Content_Container___3zLwF">
                <div class="InsureImage___2YBer">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 1087.96 700.72">
                        <defs>
                            <clipPath id="clip-path">
                                <polyline points="434.53 346.77 434.53 346.36 474.1 346.36 474.1 346.77 434.53 346.77"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-2">
                                <polyline points="433.99 346.42 433.99 346.18 474.64 346.18 474.64 346.42 433.99 346.42"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-3">
                                <polyline points="433.45 346.24 433.45 346 475.18 346 475.18 346.24 433.45 346.24"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-4">
                                <polyline points="433.09 346.06 433.09 345.82 475.54 345.82 475.54 346.06 433.09 346.06"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-5">
                                <polyline points="432.73 345.88 432.73 345.64 475.9 345.64 475.9 345.88 432.73 345.88"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-6">
                                <polyline points="432.37 345.7 432.37 345.46 476.25 345.46 476.25 345.7 432.37 345.7"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-7">
                                <polyline points="432.19 345.52 432.19 345.29 476.44 345.29 476.44 345.52 432.19 345.52"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-8">
                                <polyline points="432.01 345.34 432.01 345.11 476.62 345.11 476.62 345.34 432.01 345.34"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-9">
                                <polyline points="431.65 345.16 431.65 344.93 476.97 344.93 476.97 345.16 431.65 345.16"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-10">
                                <polyline points="431.47 344.99 431.47 344.75 477.15 344.75 477.15 344.99 431.47 344.99"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-11">
                                <polyline points="431.29 344.81 431.29 344.57 477.33 344.57 477.33 344.81 431.29 344.81"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-12">
                                <polyline points="431.11 344.63 431.11 344.39 477.51 344.39 477.51 344.63 431.11 344.63"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-13">
                                <polyline points="430.93 344.45 430.93 344.21 477.69 344.21 477.69 344.45 430.93 344.45"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-14">
                                <polyline points="430.75 344.27 430.75 343.86 477.87 343.86 477.87 344.27 430.75 344.27"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-15">
                                <polyline points="430.57 343.91 430.57 343.68 478.05 343.68 478.05 343.91 430.57 343.91"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-16">
                                <polyline points="430.39 343.73 430.39 343.5 478.23 343.5 478.23 343.73 430.39 343.73"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-17">
                                <polyline points="430.21 343.55 430.21 343.14 478.41 343.14 478.41 343.55 430.21 343.55"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-18">
                                <polyline points="430.04 343.2 430.04 342.78 478.59 342.78 478.59 343.2 430.04 343.2"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-19">
                                <polyline points="429.86 342.84 429.86 342.42 478.77 342.42 478.77 342.84 429.86 342.84"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-20">
                                <polyline points="429.68 342.48 429.68 341.89 478.95 341.89 478.95 342.48 429.68 342.48"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-21">
                                <polyline points="429.5 341.94 429.5 341.35 479.13 341.35 479.13 341.94 429.5 341.94"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-22">
                                <polyline points="429.32 341.41 429.32 333.84 479.31 333.84 479.31 341.41 429.32 341.41"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-23">
                                <polyline points="429.5 333.89 429.5 333.3 479.13 333.3 479.13 333.89 429.5 333.89"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-24">
                                <polyline points="429.68 333.36 429.68 332.76 478.95 332.76 478.95 333.36 429.68 333.36"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-25">
                                <polyline points="429.86 332.82 429.86 332.41 478.77 332.41 478.77 332.82 429.86 332.82"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-26">
                                <polyline points="430.04 332.46 430.04 332.05 478.59 332.05 478.59 332.46 430.04 332.46"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-27">
                                <polyline points="430.21 332.11 430.21 331.69 478.41 331.69 478.41 332.11 430.21 332.11"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-28">
                                <polyline points="430.39 331.75 430.39 331.51 478.23 331.51 478.23 331.75 430.39 331.75"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-29">
                                <polyline points="430.57 331.57 430.57 331.33 478.05 331.33 478.05 331.57 430.57 331.57"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-30">
                                <polyline points="430.75 331.39 430.75 330.98 477.87 330.98 477.87 331.39 430.75 331.39"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-31">
                                <polyline points="430.93 331.03 430.93 330.8 477.69 330.8 477.69 331.03 430.93 331.03"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-32">
                                <polyline points="431.11 330.85 431.11 330.62 477.51 330.62 477.51 330.85 431.11 330.85"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-33">
                                <polyline points="431.29 330.68 431.29 330.44 477.33 330.44 477.33 330.68 431.29 330.68"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-34">
                                <polyline points="431.47 330.5 431.47 330.26 477.15 330.26 477.15 330.5 431.47 330.5"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-35">
                                <polyline points="431.65 330.32 431.65 330.08 476.97 330.08 476.97 330.32 431.65 330.32"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-36">
                                <polyline points="432.01 330.14 432.01 329.9 476.62 329.9 476.62 330.14 432.01 330.14"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-37">
                                <polyline points="432.19 329.96 432.19 329.72 476.44 329.72 476.44 329.96 432.19 329.96"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-38">
                                <polyline points="432.37 329.78 432.37 329.55 476.25 329.55 476.25 329.78 432.37 329.78"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-39">
                                <polyline points="432.73 329.6 432.73 329.37 475.9 329.37 475.9 329.6 432.73 329.6"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-40">
                                <polyline points="433.09 329.42 433.09 329.19 475.54 329.19 475.54 329.42 433.09 329.42"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-41">
                                <polyline points="433.45 329.24 433.45 329.01 475.18 329.01 475.18 329.24 433.45 329.24"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-42">
                                <polyline points="433.99 329.06 433.99 328.83 474.64 328.83 474.64 329.06 433.99 329.06"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-43">
                                <polyline points="432.73 405.62 432.73 405.21 472.3 405.21 472.3 405.62 432.73 405.62"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-44">
                                <polyline points="432.19 405.26 432.19 405.03 472.84 405.03 472.84 405.26 432.19 405.26"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-45">
                                <polyline points="431.65 405.08 431.65 404.85 473.38 404.85 473.38 405.08 431.65 405.08"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-46">
                                <polyline points="431.29 404.9 431.29 404.67 473.74 404.67 473.74 404.9 431.29 404.9"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-47">
                                <polyline points="430.93 404.73 430.93 404.49 474.1 404.49 474.1 404.73 430.93 404.73"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-48">
                                <polyline points="430.57 404.55 430.57 404.31 474.46 404.31 474.46 404.55 430.57 404.55"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-49">
                                <polyline points="430.39 404.37 430.39 404.13 474.64 404.13 474.64 404.37 430.39 404.37"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-50">
                                <polyline points="430.21 404.19 430.21 403.95 474.82 403.95 474.82 404.19 430.21 404.19"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-51">
                                <polyline points="429.85 404.01 429.85 403.77 475.18 403.77 475.18 404.01 429.85 404.01"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-52">
                                <polyline points="429.67 403.83 429.67 403.6 475.36 403.6 475.36 403.83 429.67 403.83"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-53">
                                <polyline points="429.49 403.65 429.49 403.42 475.53 403.42 475.53 403.65 429.49 403.65"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-54">
                                <polyline points="429.31 403.47 429.31 403.24 475.71 403.24 475.71 403.47 429.31 403.47"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-55">
                                <polyline points="429.13 403.3 429.13 403.06 475.89 403.06 475.89 403.3 429.13 403.3"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-56">
                                <polyline points="428.95 403.12 428.95 402.7 476.07 402.7 476.07 403.12 428.95 403.12"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-57">
                                <polyline points="428.77 402.76 428.77 402.52 476.25 402.52 476.25 402.76 428.77 402.76"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-58">
                                <polyline points="428.6 402.58 428.6 402.34 476.43 402.34 476.43 402.58 428.6 402.58"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-59">
                                <polyline points="428.42 402.4 428.42 401.99 476.61 401.99 476.61 402.4 428.42 402.4"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-60">
                                <polyline points="428.24 402.04 428.24 401.63 476.79 401.63 476.79 402.04 428.24 402.04"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-61">
                                <polyline points="428.06 401.69 428.06 401.27 476.97 401.27 476.97 401.69 428.06 401.69"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-62">
                                <polyline points="427.88 401.33 427.88 400.73 477.15 400.73 477.15 401.33 427.88 401.33"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-63">
                                <polyline points="427.7 400.79 427.7 400.2 477.33 400.2 477.33 400.79 427.7 400.79"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-64">
                                <polyline points="427.52 400.25 427.52 392.68 477.51 392.68 477.51 400.25 427.52 400.25"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-65">
                                <polyline points="427.7 392.74 427.7 392.15 477.33 392.15 477.33 392.74 427.7 392.74"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-66">
                                <polyline points="427.88 392.2 427.88 391.61 477.15 391.61 477.15 392.2 427.88 392.2"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-67">
                                <polyline points="428.06 391.67 428.06 391.25 476.97 391.25 476.97 391.67 428.06 391.67"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-68">
                                <polyline points="428.24 391.31 428.24 390.9 476.79 390.9 476.79 391.31 428.24 391.31"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-69">
                                <polyline points="428.42 390.95 428.42 390.54 476.61 390.54 476.61 390.95 428.42 390.95"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-70">
                                <polyline points="428.6 390.59 428.6 390.36 476.43 390.36 476.43 390.59 428.6 390.59"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-71">
                                <polyline points="428.77 390.42 428.77 390.18 476.25 390.18 476.25 390.42 428.77 390.42"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-72">
                                <polyline points="428.95 390.24 428.95 389.82 476.07 389.82 476.07 390.24 428.95 390.24"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-73">
                                <polyline points="429.13 389.88 429.13 389.64 475.89 389.64 475.89 389.88 429.13 389.88"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-74">
                                <polyline points="429.31 389.7 429.31 389.46 475.71 389.46 475.71 389.7 429.31 389.7"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-75">
                                <polyline points="429.49 389.52 429.49 389.29 475.53 389.29 475.53 389.52 429.49 389.52"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-76">
                                <polyline points="429.67 389.34 429.67 389.11 475.36 389.11 475.36 389.34 429.67 389.34"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-77">
                                <polyline points="429.85 389.16 429.85 388.93 475.18 388.93 475.18 389.16 429.85 389.16"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-78">
                                <polyline points="430.21 388.98 430.21 388.75 474.82 388.75 474.82 388.98 430.21 388.98"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-79">
                                <polyline points="430.39 388.81 430.39 388.57 474.64 388.57 474.64 388.81 430.39 388.81"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-80">
                                <polyline points="430.57 388.63 430.57 388.39 474.46 388.39 474.46 388.63 430.57 388.63"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-81">
                                <polyline points="430.93 388.45 430.93 388.21 474.1 388.21 474.1 388.45 430.93 388.45"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-82">
                                <polyline points="431.29 388.27 431.29 388.03 473.74 388.03 473.74 388.27 431.29 388.27"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-83">
                                <polyline points="431.65 388.09 431.65 387.85 473.38 387.85 473.38 388.09 431.65 388.09"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-84">
                                <polyline points="432.19 387.91 432.19 387.68 472.84 387.68 472.84 387.91 432.19 387.91"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-85">
                                <polyline points="434.93 470.02 434.93 469.6 474.54 469.6 474.54 470.02 434.93 470.02"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-86">
                                <polyline points="434.39 469.66 434.39 469.43 475.07 469.43 475.07 469.66 434.39 469.66"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-87">
                                <polyline points="433.85 469.48 433.85 469.25 475.61 469.25 475.61 469.48 433.85 469.48"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-88">
                                <polyline points="433.5 469.3 433.5 469.07 475.97 469.07 475.97 469.3 433.5 469.3"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-89">
                                <polyline points="433.14 469.12 433.14 468.89 476.33 468.89 476.33 469.12 433.14 469.12"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-90">
                                <polyline points="432.78 468.94 432.78 468.71 476.69 468.71 476.69 468.94 432.78 468.94"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-91">
                                <polyline points="432.6 468.77 432.6 468.53 476.87 468.53 476.87 468.77 432.6 468.77"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-92">
                                <polyline points="432.42 468.59 432.42 468.35 477.04 468.35 477.04 468.59 432.42 468.59"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-93">
                                <polyline points="432.06 468.41 432.06 468.17 477.4 468.17 477.4 468.41 432.06 468.41"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-94">
                                <polyline points="431.88 468.23 431.88 467.99 477.58 467.99 477.58 468.23 431.88 468.23"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-95">
                                <polyline points="431.7 468.05 431.7 467.81 477.76 467.81 477.76 468.05 431.7 468.05"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-96">
                                <polyline points="431.53 467.87 431.53 467.64 477.94 467.64 477.94 467.87 431.53 467.87"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-97">
                                <polyline points="431.35 467.69 431.35 467.46 478.12 467.46 478.12 467.69 431.35 467.69"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-98">
                                <polyline points="431.17 467.51 431.17 467.1 478.3 467.1 478.3 467.51 431.17 467.51"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-99">
                                <polyline points="430.99 467.16 430.99 466.92 478.48 466.92 478.48 467.16 430.99 467.16"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-100">
                                <polyline points="430.81 466.98 430.81 466.74 478.65 466.74 478.65 466.98 430.81 466.98"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-101">
                                <polyline points="430.63 466.8 430.63 466.38 478.83 466.38 478.83 466.8 430.63 466.8"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-102">
                                <polyline points="430.45 466.44 430.45 466.03 479.01 466.03 479.01 466.44 430.45 466.44"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-103">
                                <polyline points="430.27 466.08 430.27 465.67 479.19 465.67 479.19 466.08 430.27 466.08"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-104">
                                <polyline points="430.09 465.73 430.09 465.13 479.37 465.13 479.37 465.73 430.09 465.73"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-105">
                                <polyline points="429.92 465.19 429.92 464.6 479.55 464.6 479.55 465.19 429.92 465.19"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-106">
                                <polyline points="429.74 464.65 429.74 457.08 479.73 457.08 479.73 464.65 429.74 464.65"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-107">
                                <polyline points="429.92 457.14 429.92 456.55 479.55 456.55 479.55 457.14 429.92 457.14"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-108">
                                <polyline points="430.09 456.6 430.09 456.01 479.37 456.01 479.37 456.6 430.09 456.6"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-109">
                                <polyline points="430.27 456.06 430.27 455.65 479.19 455.65 479.19 456.06 430.27 456.06"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-110">
                                <polyline points="430.45 455.71 430.45 455.29 479.01 455.29 479.01 455.71 430.45 455.71"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-111">
                                <polyline points="430.63 455.35 430.63 454.94 478.83 454.94 478.83 455.35 430.63 455.35"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-112">
                                <polyline points="430.81 454.99 430.81 454.76 478.65 454.76 478.65 454.99 430.81 454.99"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-113">
                                <polyline points="430.99 454.81 430.99 454.58 478.48 454.58 478.48 454.81 430.99 454.81"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-114">
                                <polyline points="431.17 454.63 431.17 454.22 478.3 454.22 478.3 454.63 431.17 454.63"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-115">
                                <polyline points="431.35 454.28 431.35 454.04 478.12 454.04 478.12 454.28 431.35 454.28"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-116">
                                <polyline points="431.53 454.1 431.53 453.86 477.94 453.86 477.94 454.1 431.53 454.1"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-117">
                                <polyline points="431.7 453.92 431.7 453.68 477.76 453.68 477.76 453.92 431.7 453.92"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-118">
                                <polyline points="431.88 453.74 431.88 453.5 477.58 453.5 477.58 453.74 431.88 453.74"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-119">
                                <polyline points="432.06 453.56 432.06 453.32 477.4 453.32 477.4 453.56 432.06 453.56"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-120">
                                <polyline points="432.42 453.38 432.42 453.15 477.04 453.15 477.04 453.38 432.42 453.38"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-121">
                                <polyline points="432.6 453.2 432.6 452.97 476.87 452.97 476.87 453.2 432.6 453.2"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-122">
                                <polyline points="432.78 453.02 432.78 452.79 476.69 452.79 476.69 453.02 432.78 453.02"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-123">
                                <polyline points="433.14 452.85 433.14 452.61 476.33 452.61 476.33 452.85 433.14 452.85"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-124">
                                <polyline points="433.5 452.67 433.5 452.43 475.97 452.43 475.97 452.67 433.5 452.67"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-125">
                                <polyline points="433.85 452.49 433.85 452.25 475.61 452.25 475.61 452.49 433.85 452.49"
                                          fill="none"></polyline>
                            </clipPath>
                            <clipPath id="clip-path-126">
                                <polyline points="434.39 452.31 434.39 452.07 475.07 452.07 475.07 452.31 434.39 452.31"
                                          fill="none"></polyline>
                            </clipPath>
                            <image id="image" width="226" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOIAAAADCAIAAAABakSnAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVQ4T2P8//8/wygYBYMbsMx9REjJKBgFAw0YR0vTUTD4AQC/mweAuycxygAAAABJRU5ErkJggg=="></image>
                            <image id="image-2" width="232" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOgAAAADCAIAAAAWSNRuAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVRIS2P8//8/wygYBUMNsMx9REjJKBgFgw8wjpa4o2AoAgDNvAeAiXBZtAAAAABJRU5ErkJggg=="></image>
                            <image id="image-3" width="236" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOwAAAADCAIAAAAfo3QUAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVRIS2P8//8/wygYBUMZsMx9REjJKBgFgxswjpbEo2CoAwCB1weAb7sYUwAAAABJRU5ErkJggg=="></image>
                            <image id="image-4" width="240" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAAADCAIAAAAiMRVyAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVRIS2P8//8/wygYBcMFsMx9REjJKBgFQwcwjpbQo2A4AQA18geAWjejkgAAAABJRU5ErkJggg=="></image>
                            <image id="image-5" width="246" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPYAAAADCAIAAAAvL2U1AAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVRIS2P8//8/wygYBcMXsMx9REjJKBgFQxkwjpbio2B4AwBEEweAIQkwVAAAAABJRU5ErkJggg=="></image>
                            <image id="image-6" width="248" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPgAAAADCAIAAAAx5lWGAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVRIS2P8//8/wygYBcMdsMx9REjJKBgFQx8wjpboo2AkAACeGQeAVBtzhwAAAABJRU5ErkJggg=="></image>
                            <image id="image-7" width="252" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPwAAAADCAIAAAA4DfX8AAAACXBIWXMAAD2EAAA9hAHVrK90AAAAKElEQVRIS2P8//8/wygYBSMJsMx9REjJKBgFwwgkyzEwjpb0o2CkAQDRHQgBcxCnxwAAAABJRU5ErkJggg=="></image>
                            <image id="image-8" width="256" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAADCAIAAADz80YrAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVRIS2P8//8/wygYBSMVsMx9REjJKBgFwxcwjtYAo2AkAwAGTweAeCispQAAAABJRU5ErkJggg=="></image>
                            <image id="image-9" width="260" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAAADCAIAAAD6GOZRAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAKklEQVRIS2P8//8/wygYBaOAgYFl7iNCSkbBKBgBIFmOgXG0ZhgFowACAEVrCAExUPYiAAAAAElFTkSuQmCC"></image>
                            <image id="image-10" width="262" height="2"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQYAAAAECAIAAADj6AbUAAAACXBIWXMAAD2EAAA9hAHVrK90AAAANklEQVRIS2P8//8/wygYBaMABljmPiKkZBSMghEDkuUYmAipGQWjYASBuY8YGEcbTqNgFCADALUwCYLnlYilAAAAAElFTkSuQmCC"></image>
                            <image id="image-11" width="264" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQgAAAADCAIAAADgJAbfAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVRIS2P8//8/wygYBaMAFbDMfURIySgYBSMPMI7WGKNgFGACAG52B4B96IrbAAAAAElFTkSuQmCC"></image>
                            <image id="image-12" width="266" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQoAAAADCAIAAADk0dbiAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVRIS2P8//8/wygYBaMAG2CZ+4iQklEwCkYqYBytPUbBKMAFAMh8B4DNqEEQAAAAAElFTkSuQmCC"></image>
                            <image id="image-13" width="268" height="2"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQwAAAAECAIAAAD0ypYdAAAACXBIWXMAAD2EAAA9hAHVrK90AAAANUlEQVRIS+3WURUAIAjFUPCQw3LmohxFngmUAOx+L8BckgF4i6wuAQY721bXAKNlmbNbwN8FQd4JggOEQa8AAAAASUVORK5CYII="></image>
                            <image id="image-14" width="270" height="2"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAAAECAIAAADwP0YgAAAACXBIWXMAAD2EAAA9hAHVrK90AAAANElEQVRIS+3WQREAIAzEwCtTHZhDV83VyCGh/Mm+IyBhWwAmWT0lwPfO1poaAKpWMGDAiwvGDgmCnbP0DwAAAABJRU5ErkJggg=="></image>
                            <image id="image-15" width="272" height="2"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARAAAAAECAIAAADJWPd7AAAACXBIWXMAAD2EAAA9hAHVrK90AAAAOElEQVRIS+3WMREAIAzAwJRDB+bQhQwMsaGiLOwgID9HQCIzkfSnjvVKJAHQG+XVSLrmJlwy6d8BrZIJoejEvQwAAAAASUVORK5CYII="></image>
                            <image id="image-16" width="274" height="3"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARIAAAAFCAIAAAAG8fTjAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAPUlEQVRYR+3XoRXAIBBEQcijDpqjrpRBQziquNigeOdn9LcrtkZEATLau24J8DN6eW4NcJjbbCCv+jaQ9QGWpwmj+Zlv9AAAAABJRU5ErkJggg=="></image>
                            <image id="image-17" width="276" height="3"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARQAAAAFCAIAAAAL74SkAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAPklEQVRYR+3XMQ0AIAxE0StBB+bQhQwMsaGiCICkofN/819vOHN3AfhXx4oSAJfeVKIGwBvjATLmlvF5gJwDBpkJoz+DoVMAAAAASUVORK5CYII="></image>
                            <image id="image-18" width="276" height="3"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARQAAAAECAIAAADAs1cBAAAACXBIWXMAAD2EAAA9hAHVrK90AAAANUlEQVRIS+3WQQ0AMAjFUEAI5rA1c1PyMUBCtnPfuQLq58oAPKq02BoAs6jcEgATl9g24EcDOhAGggP2jfQAAAAASUVORK5CYII="></image>
                            <image id="image-19" width="274" height="3"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARIAAAAECAIAAADNrSdGAAAACXBIWXMAAD2EAAA9hAHVrK90AAAANElEQVRIS+3WMQEAIAgFUSAI5ahlOZN8Zl3Q/d58Ac7XlgF4VmkxNQBuUTklAE4uMWnAnwbc4waCTwRwbwAAAABJRU5ErkJggg=="></image>
                            <image id="image-20" width="272" height="2"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARAAAAADCAIAAADUXcfDAAAACXBIWXMAAD2EAAA9hAHVrK90AAAALklEQVRIS2Oc8/A/wygYBaOACJAsx8CULEdI1SgYBaMABhj//x+tYUbBKCAWAADcOgaAJnWolQAAAABJRU5ErkJggg=="></image>
                            <image id="image-21" width="270" height="2"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAAADCAIAAADtOnaYAAAACXBIWXMAAD2EAAA9hAHVrK90AAAALklEQVRIS2Oc8/A/wygYBaMAL0iWY2BKliOkahSMglHAwMD4//9orTIKRgFhAACROgaA+d3QxgAAAABJRU5ErkJggg=="></image>
                            <image id="image-22" width="266" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQoAAAACCAIAAAAvjQVHAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVQ4T2P8////3EcMo2AUjAI0kCzHwPj//39CykbBKBihAADksgf9O7rJFQAAAABJRU5ErkJggg=="></image>
                            <image id="image-23" width="264" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQgAAAACCAIAAAAreNV6AAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVQ4T2P8////3EcMo2AUjAI4SJZjYPz//z8hZaNgFIw4AACZ0Af9RpmvFgAAAABJRU5ErkJggg=="></image>
                            <image id="image-24" width="262" height="2"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQYAAAADCAIAAAD+7TZsAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAMklEQVRIS2Oc8/A/wygYBaOAgYGBgSFZjoEpWY6QqlEwCkYGgOQFxv//R2uJUTAKEAAA9LUHAZUYsx8AAAAASUVORK5CYII="></image>
                            <image id="image-25" width="260" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAAACCAIAAAAxRDX0AAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVQ4T2P8////3EcMo2AUjGSQLMfAwMDA+P//f0IqR8EoGBEAAAWPB/1+rTesAAAAAElFTkSuQmCC"></image>
                            <image id="image-26" width="256" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAACCAIAAAA4r5WOAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVQ4T2P8////3EcMo2AUjDSQLMfAwMDA+P//f0IqR8EoGLYAAG+8B/1tLSp1AAAAAElFTkSuQmCC"></image>
                            <image id="image-27" width="254" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP4AAAACCAIAAAD3pPZkAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVQ4T2P8////3EcMo2AUjByQLMfAwMDA+P//f0IqR8EoGIYAACTaB/1ZJDriAAAAAElFTkSuQmCC"></image>
                            <image id="image-28" width="252" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPwAAAACCAIAAADzUSZZAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVQ4T2P8//8/AwPD3EcMo2AUDHuQLMfAwMDACEn0o2AUjBwAANVsB/3HCh96AAAAAElFTkSuQmCC"></image>
                            <image id="image-29" width="248" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPgAAAACCAIAAAD6uoYjAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJElEQVQ4T2P8////3EcMo2AUDGOQLMfA+P//f0LKRsEoGPIAAEKiB/3TGQ5XAAAAAElFTkSuQmCC"></image>
                            <image id="image-30" width="246" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPYAAAACCAIAAADkc7aQAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVQ4T2P8////3EcMo2AUDD+QLMfAwMDA+P//f0IqR8EoGMIAAPk0B/1JJMfuAAAAAElFTkSuQmCC"></image>
                            <image id="image-31" width="244" height="1"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPQAAAACCAIAAADghmatAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVQ4T2P8//8/AwPD3EcMo2AUDA+QLAdlMEIS9ygYBcMPAACrWAf9N8yTrAAAAABJRU5ErkJggg=="></image>
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <polygon points="3 452.3 1038.86 452.3 1038.86 453.49 3 453.49 3 452.3 3 452.3"
                                         fill="#231f20" stroke="#4a4a4a" stroke-miterlimit="2.61"
                                         stroke-width="6"></polygon>
                                <polygon points="295.77 158 845.3 158 845.3 578.73 295.77 578.73 295.77 158 295.77 158"
                                         fill="#fff" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                         fill-rule="evenodd"></polygon>
                                <polygon
                                    points="331.92 203.79 881.44 203.79 881.44 516.14 331.92 516.14 331.92 203.79 331.92 203.79"
                                    fill="#fff" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></polygon>
                                <polygon
                                    points="307.22 170.16 856.75 170.16 856.75 208.8 307.22 208.8 307.22 170.16 307.22 170.16"
                                    fill="#4d4d4d" fill-rule="evenodd"></polygon>
                                <polygon
                                    points="365.78 223.47 853.58 223.47 853.58 300.74 365.78 300.74 365.78 223.47 365.78 223.47"
                                    fill="#f5f5f5" fill-rule="evenodd"></polygon>
                                <path
                                    d="M409.33,317.92H853v38.66H409.33V317.92Zm.31,60.4H853.32V417H409.64V378.32ZM409,439.2H852.68v38.66H409V439.2Z"
                                    fill="none" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"></path>
                                <g id="object">
                                    <polygon
                                        points="936.65 231.82 1040.74 231.82 1040.74 334.1 936.65 334.1 936.65 231.82 936.65 231.82"
                                        fill="#08b2fd" fill-rule="evenodd"></polygon>
                                    <polygon
                                        points="925.92 222.52 1030 222.52 1030 324.8 925.92 324.8 925.92 222.52 925.92 222.52"
                                        fill="none" stroke="#4a4a4a" stroke-miterlimit="2.61"
                                        stroke-width="6"></polygon>
                                    <polygon
                                        points="949.98 256.3 966.06 256.3 966.06 311.67 949.98 311.67 949.98 256.3 949.98 256.3"
                                        fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                        fill-rule="evenodd"></polygon>
                                    <polygon
                                        points="975.95 279.9 992.03 279.9 992.03 311.78 975.95 311.78 975.95 279.9 975.95 279.9"
                                        fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                        fill-rule="evenodd"></polygon>
                                    <polygon
                                        points="1000.99 289.46 1017.07 289.46 1017.07 311.56 1000.99 311.56 1000.99 289.46 1000.99 289.46"
                                        fill="#fc0" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                        fill-rule="evenodd"></polygon>
                                </g>
                                <g clip-path="url(#clip-path)">
                                    <image width="220" height="2" transform="matrix(0.18, 0, 0, -0.21, 434.53, 346.77)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANwAAAAECAIAAABqVcaUAAAACXBIWXMAAD2EAAA9hAHVrK90AAAANUlEQVRIS2P8//8/wygYBYMJsKDx5z7CqmwUjAJagWQ5dBHGOQ9HS8pRMLgA42j1PQoGGwAAt40KfmQ3LG8AAAAASUVORK5CYII="></image>
                                </g>
                                <g clip-path="url(#clip-path-2)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 433.99, 346.42)"
                                         xlink:href="#image"></use>
                                </g>
                                <g clip-path="url(#clip-path-3)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 433.45, 346.24)"
                                         xlink:href="#image-2"></use>
                                </g>
                                <g clip-path="url(#clip-path-4)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 433.09, 346.06)"
                                         xlink:href="#image-3"></use>
                                </g>
                                <g clip-path="url(#clip-path-5)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 432.73, 345.88)"
                                         xlink:href="#image-4"></use>
                                </g>
                                <g clip-path="url(#clip-path-6)">
                                    <image width="244" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.37, 345.7)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPQAAAADCAIAAAAr2rUIAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVRIS2P8//8/wygYBcMRsMx9REjJKBgFQxMwjpbco2C4AgDp/geA96X65wAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-7)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 432.19, 345.52)"
                                         xlink:href="#image-5"></use>
                                </g>
                                <g clip-path="url(#clip-path-8)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 432.01, 345.34)"
                                         xlink:href="#image-6"></use>
                                </g>
                                <g clip-path="url(#clip-path-9)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 431.65, 345.16)"
                                         xlink:href="#image-7"></use>
                                </g>
                                <g clip-path="url(#clip-path-10)">
                                    <image width="254" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.47, 344.99)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP4AAAADCAIAAAA8+CXBAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVRIS2P8//8/wygYBSMPsMx9REjJKBgFwxEwjpb6o2BkAgCsOgeASg2FLgAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-11)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 431.29, 344.81)"
                                         xlink:href="#image-8"></use>
                                </g>
                                <g clip-path="url(#clip-path-12)">
                                    <image width="258" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.11, 344.63)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQIAAAADCAIAAAD3BpYWAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVRIS2P8//8/wygYBSMbsMx9REjJKBgFwx0wjtYGo2AUAABgVQeAwdqg7QAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-13)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.93, 344.45)"
                                         xlink:href="#image-9"></use>
                                </g>
                                <g clip-path="url(#clip-path-14)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 430.75, 344.27)"
                                         xlink:href="#image-10"></use>
                                </g>
                                <g clip-path="url(#clip-path-15)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.57, 343.91)"
                                         xlink:href="#image-11"></use>
                                </g>
                                <g clip-path="url(#clip-path-16)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.39, 343.73)"
                                         xlink:href="#image-12"></use>
                                </g>
                                <g clip-path="url(#clip-path-17)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 430.22, 343.55)"
                                         xlink:href="#image-13"></use>
                                </g>
                                <g clip-path="url(#clip-path-18)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 430.04, 343.2)"
                                         xlink:href="#image-14"></use>
                                </g>
                                <g clip-path="url(#clip-path-19)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 429.86, 342.84)"
                                         xlink:href="#image-15"></use>
                                </g>
                                <g clip-path="url(#clip-path-20)">
                                    <use transform="matrix(0.18, 0, 0, -0.2, 429.68, 342.48)"
                                         xlink:href="#image-16"></use>
                                </g>
                                <g clip-path="url(#clip-path-21)">
                                    <use transform="matrix(0.18, 0, 0, -0.2, 429.5, 341.94)"
                                         xlink:href="#image-17"></use>
                                </g>
                                <g clip-path="url(#clip-path-22)">
                                    <image width="278" height="42" transform="matrix(0.18, 0, 0, -0.18, 429.32, 341.41)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARYAAAAsCAIAAAAvuQBnAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAsElEQVR4Xu3TMRHCQAAAwSSDB7oYQkZ0IQNDdKh4FCQ/k2t362tvHWMswF2P93eWACeOfdlmDXDFQpBYCBILwX2fn4WgsRAkFoLEQpBYCBILQWIhSCwEiYUgsRAkFoLEQpBYCBILQWIhSCwEiYUgsRAkFoLEQpBYCBILQWIhSCwEiYUgsRAkFoLEQpBYCBILQWIhSCwEiYXgvtfTQtBYCBILQbId+ywBzq1jjFkDnPoD8cMK1FkYNXsAAAAASUVORK5CYII="></image>
                                </g>
                                <g clip-path="url(#clip-path-23)">
                                    <use transform="matrix(0.18, 0, 0, -0.2, 429.5, 333.89)"
                                         xlink:href="#image-18"></use>
                                </g>
                                <g clip-path="url(#clip-path-24)">
                                    <use transform="matrix(0.18, 0, 0, -0.2, 429.68, 333.36)"
                                         xlink:href="#image-19"></use>
                                </g>
                                <g clip-path="url(#clip-path-25)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 429.86, 332.82)"
                                         xlink:href="#image-20"></use>
                                </g>
                                <g clip-path="url(#clip-path-26)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 430.04, 332.46)"
                                         xlink:href="#image-21"></use>
                                </g>
                                <g clip-path="url(#clip-path-27)">
                                    <image width="268" height="2" transform="matrix(0.18, 0, 0, -0.21, 430.22, 332.11)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQwAAAADCAIAAADpz6alAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAL0lEQVRIS2Oc8/A/wygYBaMAB0iWY2BKliOkahSMgpEKILmD8f//0ZpkFIwCfAAA3tYHAVKNJ1QAAAAASUVORK5CYII="></image>
                                </g>
                                <g clip-path="url(#clip-path-28)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.39, 331.75)"
                                         xlink:href="#image-22"></use>
                                </g>
                                <g clip-path="url(#clip-path-29)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.57, 331.57)"
                                         xlink:href="#image-23"></use>
                                </g>
                                <g clip-path="url(#clip-path-30)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 430.75, 331.39)"
                                         xlink:href="#image-24"></use>
                                </g>
                                <g clip-path="url(#clip-path-31)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.93, 331.03)"
                                         xlink:href="#image-25"></use>
                                </g>
                                <g clip-path="url(#clip-path-32)">
                                    <image width="258" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.11, 330.85)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQIAAAACCAIAAAA8WkWzAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVQ4T2P8////3EcMo2AUjEyQLMfAwMDA+P//f0IqR8EoGOYAALqeB/0bpHkbAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-33)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 431.29, 330.67)"
                                         xlink:href="#image-26"></use>
                                </g>
                                <g clip-path="url(#clip-path-34)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 431.47, 330.5)"
                                         xlink:href="#image-27"></use>
                                </g>
                                <g clip-path="url(#clip-path-35)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 431.65, 330.32)"
                                         xlink:href="#image-28"></use>
                                </g>
                                <g clip-path="url(#clip-path-36)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 432.01, 330.14)"
                                         xlink:href="#image-29"></use>
                                </g>
                                <g clip-path="url(#clip-path-37)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 432.19, 329.96)"
                                         xlink:href="#image-30"></use>
                                </g>
                                <g clip-path="url(#clip-path-38)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 432.37, 329.78)"
                                         xlink:href="#image-31"></use>
                                </g>
                                <g clip-path="url(#clip-path-39)">
                                    <image width="240" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.73, 329.6)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAAACCAIAAADpbcbXAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJUlEQVQ4T2P8//8/AwPD3EcMo2AUDF2QLAdlMEIS9CgYBcMDAAAVlAf9/RoAGgAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-40)">
                                    <image width="236" height="1" transform="matrix(0.18, 0, 0, -0.24, 433.09, 329.42)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOwAAAACCAIAAADU/6exAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVQ4T2P8//8/AwPD3EcMo2AUDDmQLMfAwMDACEnEo2AUDF0AAH4+B/1zKFz0AAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-41)">
                                    <image width="232" height="1" transform="matrix(0.18, 0, 0, -0.24, 433.45, 329.24)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOgAAAACCAIAAADdFAfLAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAKElEQVQ4T2P8//8/AwMDAwPD3EcMo2AUDGaQLIdgM8IT7igYBUMIAADm9Af9OFnMjwAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-42)">
                                    <image width="226" height="1" transform="matrix(0.18, 0, 0, -0.24, 433.99, 329.06)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOIAAAACCAIAAADKNpcCAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAKElEQVQ4T2P8//8/AwMDAwPD3EcMo2AUDB6QLIdgM8KT6SgYBYMWAAAGTgf97UMXxwAAAABJRU5ErkJggg=="></image>
                                </g>
                                <polygon
                                    points="500.26 335.96 561.61 335.96 561.61 338.7 500.26 338.7 500.26 335.96 500.26 335.96"
                                    fill="#f5f5f5" fill-rule="evenodd"></polygon>
                                <polygon
                                    points="593.73 335.81 655.08 335.81 655.08 338.55 593.73 338.55 593.73 335.81 593.73 335.81"
                                    fill="#f5f5f5" fill-rule="evenodd"></polygon>
                                <polygon
                                    points="687.46 335.95 748.81 335.95 748.81 338.69 687.46 338.69 687.46 335.95 687.46 335.95"
                                    fill="#f5f5f5" fill-rule="evenodd"></polygon>
                                <polygon
                                    points="503.98 396.44 565.33 396.44 565.33 399.18 503.98 399.18 503.98 396.44 503.98 396.44"
                                    fill="#f5f5f5" fill-rule="evenodd"></polygon>
                                <polygon
                                    points="597.45 396.29 658.8 396.29 658.8 399.03 597.45 399.03 597.45 396.29 597.45 396.29"
                                    fill="#f5f5f5" fill-rule="evenodd"></polygon>
                                <polygon
                                    points="691.18 396.43 752.53 396.43 752.53 399.17 691.18 399.17 691.18 396.43 691.18 396.43"
                                    fill="#f5f5f5" fill-rule="evenodd"></polygon>
                                <polygon
                                    points="500.41 460.48 561.75 460.48 561.75 463.22 500.41 463.22 500.41 460.48 500.41 460.48"
                                    fill="#f5f5f5" fill-rule="evenodd"></polygon>
                                <polygon
                                    points="593.87 460.33 655.22 460.33 655.22 463.07 593.87 463.07 593.87 460.33 593.87 460.33"
                                    fill="#f5f5f5" fill-rule="evenodd"></polygon>
                                <g clip-path="url(#clip-path-43)">
                                    <image width="220" height="2" transform="matrix(0.18, 0, 0, -0.21, 432.73, 405.62)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANwAAAAECAIAAABqVcaUAAAACXBIWXMAAD2EAAA9hAHVrK90AAAANUlEQVRIS2P8//8/wygYBYMJsGAKzX2EKTYKRgFNQLIcFkHGOQ9HS8pRMLgA42j1PQoGGwAAtJMKfjoBolcAAAAASUVORK5CYII="></image>
                                </g>
                                <g clip-path="url(#clip-path-44)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 432.19, 405.26)"
                                         xlink:href="#image"></use>
                                </g>
                                <g clip-path="url(#clip-path-45)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 431.65, 405.08)"
                                         xlink:href="#image-2"></use>
                                </g>
                                <g clip-path="url(#clip-path-46)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 431.29, 404.91)"
                                         xlink:href="#image-3"></use>
                                </g>
                                <g clip-path="url(#clip-path-47)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.93, 404.73)"
                                         xlink:href="#image-4"></use>
                                </g>
                                <g clip-path="url(#clip-path-48)">
                                    <image width="244" height="1" transform="matrix(0.18, 0, 0, -0.24, 430.57, 404.55)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPQAAAADCAIAAAAr2rUIAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAKElEQVRIS2P8//8/wygYBcMRsMx9REjJKBgFQxAkyzEwjpbco2C4AgBc3ggBgUNwYAAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-49)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.39, 404.37)"
                                         xlink:href="#image-5"></use>
                                </g>
                                <g clip-path="url(#clip-path-50)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.21, 404.19)"
                                         xlink:href="#image-6"></use>
                                </g>
                                <g clip-path="url(#clip-path-51)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 429.85, 404.01)"
                                         xlink:href="#image-7"></use>
                                </g>
                                <g clip-path="url(#clip-path-52)">
                                    <image width="254" height="1" transform="matrix(0.18, 0, 0, -0.24, 429.67, 403.83)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP4AAAADCAIAAAA8+CXBAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAKElEQVRIS2P8//8/wygYBSMPsMx9REjJKBgFww4kyzEwjpb6o2BkAgAuOAgBZVtB7QAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-53)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 429.49, 403.65)"
                                         xlink:href="#image-8"></use>
                                </g>
                                <g clip-path="url(#clip-path-54)">
                                    <image width="258" height="1" transform="matrix(0.18, 0, 0, -0.24, 429.31, 403.47)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQIAAAADCAIAAAD3BpYWAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAKElEQVRIS2P8//8/wygYBSMbsMx9REjJKBgFwxokyzEwjtYGo2AUAADoUAgBdPD1YQAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-55)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 429.13, 403.3)"
                                         xlink:href="#image-9"></use>
                                </g>
                                <g clip-path="url(#clip-path-56)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 428.95, 403.12)"
                                         xlink:href="#image-10"></use>
                                </g>
                                <g clip-path="url(#clip-path-57)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 428.78, 402.76)"
                                         xlink:href="#image-11"></use>
                                </g>
                                <g clip-path="url(#clip-path-58)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 428.6, 402.58)"
                                         xlink:href="#image-12"></use>
                                </g>
                                <g clip-path="url(#clip-path-59)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 428.42, 402.4)"
                                         xlink:href="#image-13"></use>
                                </g>
                                <g clip-path="url(#clip-path-60)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 428.24, 402.04)"
                                         xlink:href="#image-14"></use>
                                </g>
                                <g clip-path="url(#clip-path-61)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 428.06, 401.69)"
                                         xlink:href="#image-15"></use>
                                </g>
                                <g clip-path="url(#clip-path-62)">
                                    <use transform="matrix(0.18, 0, 0, -0.2, 427.88, 401.33)"
                                         xlink:href="#image-16"></use>
                                </g>
                                <g clip-path="url(#clip-path-63)">
                                    <use transform="matrix(0.18, 0, 0, -0.2, 427.7, 400.79)"
                                         xlink:href="#image-17"></use>
                                </g>
                                <g clip-path="url(#clip-path-64)">
                                    <image width="278" height="42" transform="matrix(0.18, 0, 0, -0.18, 427.52, 400.25)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARYAAAArCAIAAAAyvDDfAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAqUlEQVR4Xu3TMRHCQAAAwZDBA10MISO6kIEhOlQ8CsLP/LW79bV3G2NswKr76zNLgAvnse2zBvjHQpBYCBILwbr310LQWAgSC0FiIUgsBImFILEQJBaCxEKQWAgSC0FiIUgsBImFILEQJBaCxEKQWAgSC0FiIUgsBImFILEQJBaCxEKQWAgSC0FiIUgsBImFILEQJBaCxEKw7vmwEDQWgsRCkOznMUuAaz+kNAfWbu/ZCgAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-65)">
                                    <use transform="matrix(0.18, 0, 0, -0.2, 427.7, 392.74)"
                                         xlink:href="#image-18"></use>
                                </g>
                                <g clip-path="url(#clip-path-66)">
                                    <use transform="matrix(0.18, 0, 0, -0.2, 427.88, 392.2)"
                                         xlink:href="#image-19"></use>
                                </g>
                                <g clip-path="url(#clip-path-67)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 428.06, 391.67)"
                                         xlink:href="#image-20"></use>
                                </g>
                                <g clip-path="url(#clip-path-68)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 428.24, 391.31)"
                                         xlink:href="#image-21"></use>
                                </g>
                                <g clip-path="url(#clip-path-69)">
                                    <image width="268" height="2" transform="matrix(0.18, 0, 0, -0.21, 428.42, 390.95)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQwAAAADCAIAAADpz6alAAAACXBIWXMAAD2EAAA9hAHVrK90AAAALElEQVRIS2Oc8/A/wygYBaMAB0iWY2BKliOkahSMgpENGP//H61JRsEowAcARjoGgHONSdoAAAAASUVORK5CYII="></image>
                                </g>
                                <g clip-path="url(#clip-path-70)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 428.6, 390.59)"
                                         xlink:href="#image-22"></use>
                                </g>
                                <g clip-path="url(#clip-path-71)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 428.78, 390.42)"
                                         xlink:href="#image-23"></use>
                                </g>
                                <g clip-path="url(#clip-path-72)">
                                    <use transform="matrix(0.18, 0, 0, -0.21, 428.95, 390.24)"
                                         xlink:href="#image-24"></use>
                                </g>
                                <g clip-path="url(#clip-path-73)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 429.13, 389.88)"
                                         xlink:href="#image-25"></use>
                                </g>
                                <g clip-path="url(#clip-path-74)">
                                    <image width="258" height="1" transform="matrix(0.18, 0, 0, -0.24, 429.31, 389.7)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQIAAAACCAIAAAA8WkWzAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJElEQVQ4T2P8////3EcMo2AUjFiQLMfA+P//f0LKRsEoGOYAALkbB/1xp4MRAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-75)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 429.49, 389.52)"
                                         xlink:href="#image-26"></use>
                                </g>
                                <g clip-path="url(#clip-path-76)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 429.67, 389.34)"
                                         xlink:href="#image-27"></use>
                                </g>
                                <g clip-path="url(#clip-path-77)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 429.85, 389.16)"
                                         xlink:href="#image-28"></use>
                                </g>
                                <g clip-path="url(#clip-path-78)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.21, 388.98)"
                                         xlink:href="#image-29"></use>
                                </g>
                                <g clip-path="url(#clip-path-79)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.39, 388.81)"
                                         xlink:href="#image-30"></use>
                                </g>
                                <g clip-path="url(#clip-path-80)">
                                    <use transform="matrix(0.18, 0, 0, -0.24, 430.57, 388.63)"
                                         xlink:href="#image-31"></use>
                                </g>
                                <g clip-path="url(#clip-path-81)">
                                    <image width="240" height="1" transform="matrix(0.18, 0, 0, -0.24, 430.93, 388.45)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAAACCAIAAADpbcbXAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVQ4T2P8//8/AwPD3EcMo2AUDGmQLMfAwMDACEnQo2AUDA8AABQRB/3MTw3VAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-82)">
                                    <image width="236" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.29, 388.27)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOwAAAACCAIAAADU/6exAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAJ0lEQVQ4T2P8////3EcMo2AUDEWQLMfAwMDA+P//f0IqR8EoGNQAAIK7B/30BFKbAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-83)">
                                    <image width="232" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.65, 388.09)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOgAAAACCAIAAADdFAfLAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAKElEQVQ4T2P8//8/AwMDAwPD3EcMo2AUDHKQLAdlMMIT7igYBUMIAADlcQf9spGG8QAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-84)">
                                    <image width="226" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.19, 387.91)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOIAAAACCAIAAADKNpcCAAAACXBIWXMAAD2EAAA9hAHVrK90AAAAKElEQVQ4T2P8//8/AwMDAwPD3EcMo2AUDCqQLAdlMMKT6SgYBYMWAAAEywf9xctq1wAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-85)">
                                    <image width="221" height="2" transform="matrix(0.18, 0, 0, -0.21, 434.93, 470.02)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAN4AAAAECAIAAABuoBapAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAOUlEQVRIS2P8//8/wygYBYMPsDAwMMx9REjVKBgF9ALJclAG45yHo6XmKBh0IFmOgXG0Qh8FgxMAAK+QCv/yfpqGAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-86)">
                                    <image width="227" height="1" transform="matrix(0.18, 0, 0, -0.24, 434.39, 469.66)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOQAAAADCAIAAAAMdDTgAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVRIS2P8//8/wygYBUMBsMx9REjJKBgFgwAkyzEwjpaso2CoAAB0UQgBJ3mwswAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-87)">
                                    <image width="233" height="1" transform="matrix(0.18, 0, 0, -0.24, 433.85, 469.48)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOoAAAADCAIAAAASvQRTAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVRIS2P8//8/wygYBUMTsMx9REjJKBgFgxIkyzEwjpa+o2DoAgCLhAgBg//mbgAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-88)">
                                    <image width="237" height="1" transform="matrix(0.18, 0, 0, -0.24, 433.49, 469.3)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAO4AAAADCAIAAAAbVqQpAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVRIS2P8//8/wygYBUMfsMx9REjJKBgFgx4kyzEwjpbKo2B4AABFqwgB5b74ngAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-89)">
                                    <image width="241" height="1" transform="matrix(0.18, 0, 0, -0.24, 433.14, 469.12)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPIAAAADCAIAAAAmxMVPAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVRIS2P8//8/wygYBcMLsMx9REjJKBgFQwokyzEwjpbWo2D4AQD/wwgBLzjkkAAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-90)">
                                    <image width="245" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.78, 468.95)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPYAAAADCAIAAAAvL2U1AAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVRIS2P8//8/wygYBcMXsMx9REjJKBgFQxYkyzEwjpbio2B4AwC56ggBkHPLxQAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-91)">
                                    <image width="247" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.6, 468.77)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPgAAAADCAIAAAAx5lWGAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVRIS2P8//8/wygYBcMdsMx9REjJKBgFQxwkyzEwjpboo2AkAAAXBQgB1lKeQQAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-92)">
                                    <image width="249" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.42, 468.59)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAADCAIAAAA1E4W7AAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVRIS2P8//8/wygYBSMDsMx9REjJKBgFwwIkyzEwjpbuo2DkAAB0EQgBg4zN4gAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-93)">
                                    <image width="253" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.06, 468.41)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP4AAAADCAIAAAA8+CXBAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAK0lEQVRIS2P8//8/wygYBSMPsMx9REjJKBgFwwskyzEwMDAwjpb6o2BkAgAvuwgBxng0ggAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-94)">
                                    <image width="255" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.88, 468.23)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAADCAIAAADz80YrAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVRIS2P8//8/wygYBSMVsMx9REjJKBgFwxQkyzEwjtYAo2AkAwCLRAgBLJIfqwAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-95)">
                                    <image width="257" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.71, 468.05)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQIAAAADCAIAAAD3BpYWAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVRIS2P8//8/wygYBSMbsMx9REjJKBgFwxokyzEwjtYGo2AUAADoUAgBdPD1YQAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-96)">
                                    <image width="259" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.53, 467.87)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAAADCAIAAAD6GOZRAAAACXBIWXMAAD3SAAA90gHjmr5MAAAALUlEQVRIS2P8//8/wygYBaOAgYFl7iNCSkbBKBjuIFmOgYGBgXG0ZhgFowACAEbuCAE3gszyAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-97)">
                                    <image width="261" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.35, 467.69)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQYAAAADCAIAAAD+7TZsAAAACXBIWXMAAD3SAAA90gHjmr5MAAAALUlEQVRIS2P8//8/wygYBaMABljmPiKkZBSMgpEBkuUYGBgYGEdriVEwCpABAKP6CAFHCM7sAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-98)">
                                    <image width="263" height="2" transform="matrix(0.18, 0, 0, -0.21, 431.17, 467.51)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQgAAAAECAIAAAD9ITZnAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAOUlEQVRIS2P8//8/wygYBaMAFbDMfURIySgYBSMJJMsxMDAwMBFSNgpGwcgCkKqCcbQpNQpGASYAAD9vCYJ4Q8PuAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-99)">
                                    <image width="265" height="1" transform="matrix(0.18, 0, 0, -0.24, 430.99, 467.16)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQoAAAADCAIAAADk0dbiAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKklEQVRIS2P8//8/wygYBaMAG2CZ+4iQklEwCkYkSJZjYBytPUbBKMAFAFyeCAE+mpL8AAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-100)">
                                    <image width="267" height="1" transform="matrix(0.18, 0, 0, -0.24, 430.81, 466.98)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQwAAAADCAIAAADpz6alAAAACXBIWXMAAD3SAAA90gHjmr5MAAAALUlEQVRIS2P8//8/wygYBaMAN2CZ+4iQklEwCkYqSJZjYGBgYBytSUbBKMAPALstCAFjxCTgAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-101)">
                                    <image width="269" height="2" transform="matrix(0.18, 0, 0, -0.21, 430.63, 466.8)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAAAECAIAAADwP0YgAAAACXBIWXMAAD3SAAA90gHjmr5MAAAANElEQVRIS+3WMREAIAzAwJRDB+bQhbkaKRLKTn6OgERVIakzT3aJ9Le9AEaXSQIIB0x6cQEGZQgD+0vLFAAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-102)">
                                    <image width="271" height="2" transform="matrix(0.18, 0, 0, -0.21, 430.45, 466.44)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARAAAAAECAIAAADJWPd7AAAACXBIWXMAAD3SAAA90gHjmr5MAAAANElEQVRIS+3WMREAIAzAwJRDB+bQhTmMlJGxFZCfIyCRmUjqmedWiSTYC2BUmaQvXDKp7wGBmwgDbwigCwAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-103)">
                                    <image width="273" height="2" transform="matrix(0.18, 0, 0, -0.21, 430.27, 466.08)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARIAAAAECAIAAADNrSdGAAAACXBIWXMAAD3SAAA90gHjmr5MAAAANklEQVRIS+3WMREAIAwEwQ+DDsyhC3Mx8lQ0NJn0t/UJuLAtAB3zZJUAePaSpFFlAH7BpAFdF/zRCAM25bkbAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-104)">
                                    <image width="275" height="3" transform="matrix(0.18, 0, 0, -0.2, 430.09, 465.73)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARQAAAAFCAIAAAAL74SkAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAO0lEQVRYR+3XsQ0AIAwDQQcxB8sxF8uxiKmRkCJS/9XfunDYFoB/fe0sAXCbQ5JalgF4YzxAUfB5gJoDxysIBaFWHpYAAAAASUVORK5CYII="></image>
                                </g>
                                <g clip-path="url(#clip-path-105)">
                                    <image width="277" height="3" transform="matrix(0.18, 0, 0, -0.2, 429.92, 465.19)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARYAAAAFCAIAAAAPGlSZAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAO0lEQVRYR+3XsQ0AIAwDQQcxB8sxF8uxiFkAEYm0f/W3Lhy2BeBXXztLANzMIUktywC8MCGgJPhCQMUBYKYIBfBYQ5EAAAAASUVORK5CYII="></image>
                                </g>
                                <g clip-path="url(#clip-path-106)">
                                    <image width="279" height="42" transform="matrix(0.18, 0, 0, -0.18, 429.74, 464.65)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARgAAAAsCAIAAAAxcDDUAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAt0lEQVR4Xu3dsQ0CQRAEwf0XcZAccZEciRwGEh46iW+zyh63teYea60BrrnNzPO1WwE/PO4zM6eK4LpzNwD2hAQBIUFASBAQEgSEBAEhQUBIEBASBIQEASFBQEgQEBIEhAQBIUFASBAQEgSEBAEhQUBIEBASBIQEASFBQEgQEBIEhAQBIUFASBAQEgSEBAEhQUBIEBASBIQEASFBQEgQOD8/mYErXCT43/cOCQkCQoLAsdbabYCNN/cYCtSufW2vAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-107)">
                                    <image width="277" height="3" transform="matrix(0.18, 0, 0, -0.2, 429.92, 457.14)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARYAAAAECAIAAADERoc8AAAACXBIWXMAAD3SAAA90gHjmr5MAAAAOUlEQVRIS+3TsQ0AIAzEwA+DsBxzsRyLfApaUIRofbVbh+25BODV6JLUqgzAwf5HLAR8CttVA+AqAa/ECIIitEunAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-108)">
                                    <image width="275" height="3" transform="matrix(0.18, 0, 0, -0.2, 430.09, 456.6)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARQAAAAECAIAAADAs1cBAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAOklEQVRIS+3WoQ0AIBBD0d4NwnKsxXJMUgQJDgLo/0xNbZNG6xaAF7VIUs4AcGlNJo81AFthc9uAHwMlgAcD+GjhVgAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-109)">
                                    <image width="273" height="2" transform="matrix(0.18, 0, 0, -0.21, 430.27, 456.07)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARIAAAADCAIAAADQqBf+AAAACXBIWXMAAD3SAAA90gHjmr5MAAAAMUlEQVRIS2P8////3EcMo2AUjAKCIFkOymDCq2wUjIJRgAUw/v//n5CaUTAKRgEKAAAw8wf/hxB9TgAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-110)">
                                    <image width="271" height="2" transform="matrix(0.18, 0, 0, -0.21, 430.45, 455.71)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARAAAAADCAIAAADUXcfDAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAMElEQVRIS2P8////3EcMo2AUjAI8IFkOymBC5oyCUTAK8APG////E1IzCkbBKIACAP1dCIB3iMcMAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-111)">
                                    <image width="269" height="2" transform="matrix(0.18, 0, 0, -0.21, 430.63, 455.35)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAAADCAIAAADtOnaYAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAM0lEQVRIS2P8////3EcMo2AUjAKsIFkOymBC5oyCUTAKkAFy1mD8//8/bpWjYBSMAigAAC0UCQEtKVCZAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-112)">
                                    <image width="267" height="1" transform="matrix(0.18, 0, 0, -0.24, 430.81, 454.99)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQwAAAACCAIAAAAik3UAAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAJ0lEQVQ4T2P8//8/AwPD3EcMo2AUjAI4SJZDsBkhmWQUjIJRgAsAAC+vB/3EREqZAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-113)">
                                    <image width="265" height="1" transform="matrix(0.18, 0, 0, -0.24, 430.99, 454.81)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQoAAAACCAIAAAAvjQVHAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAJklEQVQ4T2P8////3EcMo2AUjAI4SJaDMhj///+PV+UoGAUjFwAA57gH/d5GwoEAAAAASUVORK5CYII="></image>
                                </g>
                                <g clip-path="url(#clip-path-114)">
                                    <image width="263" height="2" transform="matrix(0.18, 0, 0, -0.21, 431.17, 454.63)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQgAAAADCAIAAADgJAbfAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAMklEQVRIS2P8////3EcMo2AUjAIGBoZkOSiDCZkzCkbBSAbIGYHx////uFWOglEwQgEA1uQJAbIg+O8AAAAASUVORK5CYII="></image>
                                </g>
                                <g clip-path="url(#clip-path-115)">
                                    <image width="261" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.35, 454.28)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQYAAAACCAIAAAA1seXJAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAJUlEQVQ4T2P8//8/AwPD3EcMo2AUjFiQLIdgM0KyxCgYBaMAAgBO+gf9wDgcYwAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-116)">
                                    <image width="259" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.53, 454.1)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAAACCAIAAAAxRDX0AAAACXBIWXMAAD3SAAA90gHjmr5MAAAAJElEQVQ4T2P8//8/AwPD3EcMo2AUjECQLIdgM0IywygYBaMAAAQYB/2/7PCPAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-117)">
                                    <image width="257" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.71, 453.92)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQIAAAACCAIAAAA8WkWzAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAJUlEQVQ4T2P8//8/AwPD3EcMo2AUjCiQLIdgM0KywSgYBSMZAAC5Jwf95QxF+gAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-118)">
                                    <image width="255" height="1" transform="matrix(0.18, 0, 0, -0.24, 431.88, 453.74)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAACCAIAAAA4r5WOAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVQ4T2P8//8/AwMDAwPD3EcMo2AUjASQLIdgM8IzwCgYBSMQAABpyAf9sc9cJQAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-119)">
                                    <image width="253" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.06, 453.56)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP4AAAACCAIAAAD3pPZkAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVQ4T2P8//8/AwMDAwPD3EcMo2AUDGOQLIfCZYQn/VEwCkYUAAAgaQf9PsAZbAAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-120)">
                                    <image width="249" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.42, 453.38)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAACCAIAAAD+T1YeAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAJUlEQVQ4T2P8//8/AwPD3EcMo2AUDEuQLIdgM0KS+ygYBSMBAACNkAf98Rul1AAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-121)">
                                    <image width="247" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.6, 453.2)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPgAAAACCAIAAAD6uoYjAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVQ4T2P8//8/AwMDAwPD3EcMo2AUDBuQLIfCZYQn9FEwCoYxAAA/tAf9m3ge0QAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-122)">
                                    <image width="245" height="1" transform="matrix(0.18, 0, 0, -0.24, 432.78, 453.02)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPYAAAACCAIAAADkc7aQAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAJElEQVQ4T2P8//8/AwzMfcQwCkbBkAbJcugijMhJfBSMguEHAPHJB/01SJmwAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-123)">
                                    <image width="241" height="1" transform="matrix(0.18, 0, 0, -0.24, 433.14, 452.85)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPIAAAACCAIAAADtmBbqAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAKElEQVQ4T2P8//8/AwMDAwPD3EcMo2AUDFGQLIfCZYQn61EwCoYNAABe/wf9F49RFQAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-124)">
                                    <image width="237" height="1" transform="matrix(0.18, 0, 0, -0.24, 433.49, 452.67)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAO4AAAACCAIAAADQCneMAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAJElEQVQ4T2P8//8/AwzMfcQwCkbBkADJcugijMhJeRSMgqELAMYyB/0+Z9fKAAAAAElFTkSuQmCC"></image>
                                </g>
                                <g clip-path="url(#clip-path-125)">
                                    <image width="233" height="1" transform="matrix(0.18, 0, 0, -0.24, 433.85, 452.49)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOoAAAACCAIAAADZ4df2AAAACXBIWXMAAD3SAAA90gHjmr5MAAAAJUlEQVQ4T2P8//8/AxKY+4hhFIyCQQiS5bAIMqIl31EwCoYQAAAtdAf9uAMjXQAAAABJRU5ErkJggg=="></image>
                                </g>
                                <g clip-path="url(#clip-path-126)">
                                    <image width="227" height="1" transform="matrix(0.18, 0, 0, -0.24, 434.39, 452.31)"
                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOQAAAACCAIAAADHKOdFAAAACXBIWXMAAD3SAAA90gHjmr5MAAAAJklEQVQ4T2P8//8/AzYw9xFW4VEwCmgIkuXwyTLiSqyjYBQMNgAAQ9EH/ekaB7oAAAAASUVORK5CYII="></image>
                                </g>
                                <path d="M670.42,29.59a98.74,98.74,0,1,1-98.75,98.74,98.74,98.74,0,0,1,98.75-98.74Z"
                                      fill="#08b2fd" stroke="#08b2fd" stroke-miterlimit="2.61" stroke-width="0.5"
                                      fill-rule="evenodd"></path>
                                <polygon
                                    points="661.95 9.78 661.95 107.93 562.73 107.93 562.73 106.74 660.76 106.74 660.76 9.78 661.95 9.78 661.95 9.78"
                                    fill="#231f20" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"></polygon>
                                <path d="M650.4,99V.25A98.76,98.76,0,0,0,551.62,99Z" fill="#f5f5f5" stroke="#f5f5f5"
                                      stroke-miterlimit="2.61" stroke-width="0.5" fill-rule="evenodd"></path>
                                <path d="M660.48,207a98.72,98.72,0,1,1,80.89-42.1" fill="none" stroke="#4a4a4a"
                                      stroke-miterlimit="2.61" stroke-width="6"></path>
                                <path
                                    d="M220.14,238.19h0a33.38,33.38,0,0,1,33.27,33.26V345a33.39,33.39,0,0,1-33.27,33.28h0A33.36,33.36,0,0,1,186.86,345V271.45a33.35,33.35,0,0,1,33.28-33.26Z"
                                    fill="#fc0" stroke="#4a4a4a" stroke-miterlimit="10" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <polygon
                                    points="235.62 295.7 224.95 309.85 219.22 305.52 229.89 291.37 235.62 295.7 235.62 295.7"
                                    fill="#4a4a4a"></polygon>
                                <polygon
                                    points="201.29 306.56 224.2 327 219.44 332.34 196.52 311.89 201.29 306.56 201.29 306.56"
                                    fill="#4a4a4a"></polygon>
                                <path
                                    d="M241.27,250.55a29.58,29.58,0,0,1,9.29,21.5v73.54a29.78,29.78,0,0,1-29.68,29.69h0A29.79,29.79,0,0,1,192.15,353a29.55,29.55,0,0,0,20.39,8.15h0a29.78,29.78,0,0,0,29.68-29.68V258a29.3,29.3,0,0,0-.95-7.42Z"
                                    fill="#ffb300" fill-rule="evenodd"></path>
                                <polygon
                                    points="221.93 452.7 218.3 452.7 218.3 283.77 225.52 283.77 225.52 452.7 221.93 452.7 221.93 452.7"
                                    fill="#4a4a4a"></polygon>
                                <path d="M346.5,195a5.94,5.94,0,1,0-5.94-5.94A5.94,5.94,0,0,0,346.5,195Z" fill="#08b2fd"
                                      fill-rule="evenodd"></path>
                                <path d="M362.31,195a5.95,5.95,0,1,0-5.94-5.95,5.94,5.94,0,0,0,5.94,5.95Z"
                                      fill="#08b2fd" fill-rule="evenodd"></path>
                                <path d="M377.92,195A5.94,5.94,0,1,0,372,189.1a5.94,5.94,0,0,0,5.95,5.94Z"
                                      fill="#08b2fd" fill-rule="evenodd"></path>
                                <path id="cloud-1" class="Float6s___uYEoz"
                                      d="M971,157.61a33.63,33.63,0,0,1,18.84,5.73A51.43,51.43,0,0,1,1088,182.55H938.39A33.86,33.86,0,0,1,971,157.61Z"
                                      fill="#00b4ff" fill-rule="evenodd"></path>
                                <path id="cloud-2" class="Float4s___J18uG"
                                      d="M377.79,125.24A22.13,22.13,0,0,1,390.18,129a33.77,33.77,0,0,1,64.41,12.61H356.35a22.24,22.24,0,0,1,21.44-16.38Z"
                                      fill="none" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6.23"></path>
                                <polygon points="51 401.99 168.19 401.99 168.19 391.96 51 391.96 51 401.99 51 401.99"
                                         fill="#fff" fill-rule="evenodd"></polygon>
                                <path d="M54.6,399.08h110v-4.21H54.6v4.21Zm113.59,5.82H47.4V389.05H171.78V404.9Z"
                                      fill="#4a4a4a"></path>
                                <polygon
                                    points="42.82 423.73 175.57 423.73 175.57 413.7 42.82 413.7 42.82 423.73 42.82 423.73"
                                    fill="#fff" fill-rule="evenodd"></polygon>
                                <path d="M46.9,420.79H171.5v-4.16H46.9v4.16Zm128.68,5.87H38.75v-15.9h140.9v15.9Z"
                                      fill="#4a4a4a"></path>
                                <polygon
                                    points="50.78 382.1 167.96 382.1 167.96 372.06 50.78 372.06 50.78 382.1 50.78 382.1"
                                    fill="#fff" fill-rule="evenodd"></polygon>
                                <path d="M54.37,379.18h110V375h-110v4.2ZM168,385H47.18V369.15H171.56V385Z"
                                      fill="#4a4a4a"></path>
                                <polygon
                                    points="160.92 425.57 163.8 425.57 163.8 449.99 158.04 449.99 158.04 425.57 160.92 425.57 160.92 425.57"
                                    fill="#4a4a4a"></polygon>
                                <polygon
                                    points="59.68 425.35 62.56 425.35 62.56 449.76 56.8 449.76 56.8 425.35 59.68 425.35 59.68 425.35"
                                    fill="#4a4a4a"></polygon>
                                <path
                                    d="M636,667.07l59.45-407.29a8.34,8.34,0,0,1,9.43-7h0a8.34,8.34,0,0,1,7,9.43l-59.45,407.3a8.34,8.34,0,0,1-9.43,7h0a8.34,8.34,0,0,1-7-9.43Z"
                                    fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M644.75,668.21l59.79-409.68A6.55,6.55,0,0,1,712,253h0a6.56,6.56,0,0,1,5.52,7.4L657.67,670.1a6.55,6.55,0,0,1-7.41,5.51h0a6.54,6.54,0,0,1-5.51-7.4Z"
                                    fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M709,296.23H816.71a5.55,5.55,0,0,1,5.54,5.55h0a5.55,5.55,0,0,1-5.54,5.54H709a5.56,5.56,0,0,1-5.55-5.54h0a5.56,5.56,0,0,1,5.55-5.55Z"
                                    fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M699.72,353.65H807.41A5.56,5.56,0,0,1,813,359.2h0a5.55,5.55,0,0,1-5.54,5.54H699.72a5.56,5.56,0,0,1-5.55-5.54h0a5.57,5.57,0,0,1,5.55-5.55Z"
                                    fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M690.42,410.18H798.1a5.56,5.56,0,0,1,5.55,5.54h0a5.57,5.57,0,0,1-5.55,5.55H690.42a5.57,5.57,0,0,1-5.55-5.55h0a5.56,5.56,0,0,1,5.55-5.54Z"
                                    fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M683.26,467.78H791a5.55,5.55,0,0,1,5.54,5.54h0a5.55,5.55,0,0,1-5.54,5.55H683.26a5.55,5.55,0,0,1-5.54-5.55h0a5.55,5.55,0,0,1,5.54-5.54Z"
                                    fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M674,524H781.65a5.55,5.55,0,0,1,5.54,5.54h0a5.56,5.56,0,0,1-5.54,5.55H674a5.57,5.57,0,0,1-5.55-5.55h0A5.56,5.56,0,0,1,674,524Z"
                                    fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M667.52,581.37H775.21a5.56,5.56,0,0,1,5.54,5.55h0a5.55,5.55,0,0,1-5.54,5.54H667.52a5.55,5.55,0,0,1-5.54-5.54h0a5.56,5.56,0,0,1,5.54-5.55Z"
                                    fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M765.37,668.72l55-407.92a8.34,8.34,0,0,1,9.35-7.13h0a8.36,8.36,0,0,1,7.13,9.36L781.86,671a8.35,8.35,0,0,1-9.36,7.13h0a8.35,8.35,0,0,1-7.13-9.36Z"
                                    fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M774.15,669.8l55.33-410.31a6.55,6.55,0,0,1,7.34-5.6h0a6.55,6.55,0,0,1,5.6,7.35L787.09,671.55a6.55,6.55,0,0,1-7.34,5.6h0a6.55,6.55,0,0,1-5.6-7.35Z"
                                    fill="#f5f5f5" stroke="#4a4a4a" stroke-miterlimit="2.61" stroke-width="6"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M468.19,525.64l56.74,44.29,29.92,47.13L385,649.72,276.83,640.1,152.37,629l2.93-43.19L261,574.31l65.17-68s103.08,3.71,120.3,10.61,21.75,8.68,21.75,8.68Z"
                                    fill="#fff" fill-rule="evenodd"></path>
                                <path
                                    d="M295.46,658.42c1.2-7.26,3.8-28.73-3.63-41.34-24.65-41.85-107-46-118-15.74-3.09,8.5,1.94,33.26,1.94,33.26l2.32,23.84,18.23,3.23c.37.06,1.07-4.35,2.06-9.46,6.39-32.82,37.38-32.38,61-15.93C269,643,270,658.88,269.94,658.86c1.31.22,25.52-.44,25.52-.44Z"
                                    fill="#00b4ff" fill-rule="evenodd"></path>
                                <path
                                    d="M188.94,600.86c-1.75,0-4,6.47-4,13.28s2,14.11,3.79,14.11,4.42-6.87,4.42-13.66-2.45-13.73-4.2-13.73Z"
                                    fill="#fcfafb" fill-rule="evenodd"></path>
                                <path
                                    d="M188.94,593.57c7,0,10.26,10.42,10.26,20.08s-3.22,20.09-10.26,20.09-10.27-10.42-10.27-20.09,3.22-20.08,10.27-20.08Zm0,32.9h0c1.1-1,3.12-5.41,3.12-12.82s-2-11.77-3.12-12.79c-1.11,1-3.14,5.38-3.14,12.79s2,11.78,3.14,12.82Z"
                                    fill="#4a4a4a"></path>
                                <path
                                    d="M233.3,638.8a23,23,0,1,1-23,23,23,23,0,0,1,23-23Zm0,38.78h0a15.83,15.83,0,1,0-15.83-15.82,15.84,15.84,0,0,0,15.83,15.82Z"
                                    fill="#4a4a4a"></path>
                                <path
                                    d="M477.7,638.8a23,23,0,1,1-22.95,23,23,23,0,0,1,22.95-23Zm0,38.78h0a15.83,15.83,0,1,0-15.82-15.82,15.84,15.84,0,0,0,15.82,15.82Z"
                                    fill="#4a4a4a"></path>
                                <path d="M303,577.59h10.17a7.12,7.12,0,0,1,7.12,7.12H295.86a7.12,7.12,0,0,1,7.12-7.12Z"
                                      fill="#4a4a4a"></path>
                                <polygon
                                    points="483.74 700.64 553.69 700.64 553.69 692.97 483.74 692.97 483.74 700.64 483.74 700.64"
                                    fill="#4a4a4a"></polygon>
                                <polygon
                                    points="566.57 700.71 603.51 700.71 603.51 693.04 566.57 693.04 566.57 700.71 566.57 700.71"
                                    fill="#4a4a4a"></polygon>
                                <polygon
                                    points="239.29 700.16 310.38 700.16 310.38 692.49 239.29 692.49 239.29 700.16 239.29 700.16"
                                    fill="#4a4a4a"></polygon>
                                <polygon
                                    points="321.04 700.22 334.34 700.22 334.34 692.55 321.04 692.55 321.04 700.22 321.04 700.22"
                                    fill="#4a4a4a"></polygon>
                                <path
                                    d="M403.59,568.7l1.2,69s11.17-22.47,26.1-33.9,35.1-16.5,44.7-13.8,46.2,13.5,52.5,24.9a191.46,191.46,0,0,1,10.2,21.6l19.41-1.85s-4.3-11.65-15.77-30.83a235.94,235.94,0,0,1-17-33.89L403.59,568.7Z"
                                    fill="#00b4ff" stroke="#00b4ff" stroke-miterlimit="2.61" stroke-width="0.5"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M403.13,510.76l.46,57.94,79.5-1.35-14.9-41.71s-23.94-8.59-37.75-12a109.53,109.53,0,0,0-27.31-2.86Z"
                                    fill="#e9fbff" stroke="#e9fbff" stroke-miterlimit="2.61" stroke-width="0.5"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M149.66,635.89V594a22.35,22.35,0,0,1,18.93-22v-.12l93.29-4.79,47.51-54.72c.35-.41,8.87-9.86,29.91-9.86H386c33.33,0,115.88,9.55,162.22,98,.38.72,9.36,17.65,9.46,34.17,3.77.24,6.68,3.86,6.68,8.49v13.55c0,4.78-3.1,8.55-7.06,8.55H547.8l-31.34,0a38.92,38.92,0,0,1-77.51.21l-166.9.07a38.94,38.94,0,0,1-77.5,0H153.39c-3.95,0-7.06-3.76-7.06-8.55v-13.9a9,9,0,0,1,3.33-7.25ZM397.75,510.06h0c-4.38-.29-8.33-.4-11.73-.4H339.3c-17.53,0-24.29,7.15-24.53,7.42l-42.26,48.68,125.76,0-.52-55.65Zm75.37,21.68h0l11.68,34,30.87,0a163.61,163.61,0,0,0-42.55-33.94Zm74.49,126.35h9.31a2.92,2.92,0,0,0,.32-1.4V643.14a2.92,2.92,0,0,0-.32-1.4H545a73,73,0,0,1,2.62,16.35Zm3-23.49h0c-.14-14.7-8.54-30.58-8.64-30.78a189,189,0,0,0-20.2-31l-116.26,0,.54,56.74c12.49-25.26,37.74-42.42,66.87-42.42A75,75,0,0,1,542.6,634.6Zm-72.87,59h0a31.83,31.83,0,1,0-31.81-31.82,31.84,31.84,0,0,0,31.81,31.82Zm-38.77-35.23h0a38.92,38.92,0,0,1,77.53-.22h24.11c-1.87-35.51-31.52-63.82-67.69-63.82-39.2,0-64.55,31.94-67.71,64.05Zm-33.52-92.64h71.86L463.94,527a181.52,181.52,0,0,0-59.05-16.37l.52,55.05ZM302.59,658.42h11.66v-.07H398c.23-2.67.58-5.26,1.05-7.82h0l-.73-77.68-130.18,0-.52,17.31A69.31,69.31,0,0,1,282.38,601c13.41,13,20.21,30.89,20.21,53.16v4.22ZM233.3,693.58h0a31.83,31.83,0,1,0-31.81-31.82,31.85,31.85,0,0,0,31.81,31.82Zm-57.57-59h2.32v23.84h16.47a38.91,38.91,0,0,1,77.55,0h23.39V654.2c0-20.24-6.06-36.4-18-48-21.82-21.18-56.41-20.37-56.87-20.38H208.3c-16,0-32.57,9.11-32.57,24.33V634.6Zm0-42.71h0c7.6-8.46,20.21-13.2,32.57-13.2h12.17a102.42,102.42,0,0,1,40.14,8l.36-12.42-85.24,4.37v13.21Zm-7.14,18.27V579.23A15.22,15.22,0,0,0,156.78,594v.65h8.09v7.13h-8.09v7.35h8.09v7.15h-8.09v7.34h8.09v7.15h-8.09v3.79h11.81V610.16ZM153.47,657h0a2.83,2.83,0,0,0,.33,1.4h17.12v-16.7H153.8a2.9,2.9,0,0,0-.33,1.4V657Z"
                                    fill="#4a4a4a"></path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="InnerContent___3WBjQ" style="box-shadow: rgb(197, 197, 197) 1px 1px 15px;display: flex">
            <div class="col-md-8">

                <div class="classic-tabs">

                    <!-- Nav tabs -->
                    <div class="tabs-wrapper">
                        <ul class="nav tabs-blue" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link waves-light active waves-effect waves-light" data-toggle="tab"
                                   href="#panel36"
                                   role="tab">درباره بیمه شخص ثالث</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-light waves-effect waves-light" data-toggle="tab"
                                   href="#panel37" role="tab">سوالات متداول</a>
                            </li>

                        </ul>
                    </div>

                    <!-- Tab panels -->
                    <div class="tab-content card">
                        <!-- Panel 1 -->
                        <div class="tab-pane fade in show active" id="panel36" role="tabpanel">
                            <div class="Content___2GPoc"><h2 id="بیمه شخص ثالث"><span class="P__Icon___Eyr_h"><img
                                            class="Bg_13___3GwTt"
                                            src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                            alt="third party insurance"></span><span>بیمه شخص ثالث</span></h2>
                                <p><span>در میان انواع طرح‌های بیمه‌ای که از جانب شرکت‌های مختلف ارائه می‌شوند، بیمه شخص ثالث همچنان پرمخاطب‌ترین نوع بیمه است. بدون شک یکی از دلایل اصلی سهم بالای بیمه شخص ثالث در بازار ایران، اجباری بودن این بیمه است. به‌صورتی‌که اگر وسیله نقلیه‌ای تحت این پوشش نباشد، ممکن است عواقب جبران‌ناپذیری داشته باشد که به آن خواهیم پرداخت.</span>
                                </p>
                                <p><span>اما به‌راستی بیمه شخص ثالث چه مواردی را پوشش می‌دهد و علت نام‌گذاری این بیمه چیست. در پوشش بیمه شخص ثالث، شخص اول مالک وسیله نقلیه یا بیمه‌گزار، شخص ثانی شرکت بیمه یا بیمه‌گر و شخص ثالث فرد زیان‌دیده غیر از راننده مقصر در حادثه هستند.</span>
                                </p>
                                <p><span>برای مثال در یک حادثه رانندگی هزینه درمان، فوت و خسارت وارد شده به اموال تمامی افراد زیان‌دیده، تحت پوشش بیمه شخص ثالث قرار می‌گیرد. راننده مقصر نیز تحت پوشش  بیمه حوادث راننده که به تازگی جزئی از بیمه شخص ثالث شده است قرار می‌گیرد. با این تفاوت که بیمه حوادث راننده تنها خسارت‌های جانی را پوشش می‌دهد و در برابر خسارات مالی مسئولیتی ندارد. </span>
                                </p>
                                <p><span>بیمه شخص ثالث را تمامی <a href="https://bimito.com/company-insurance"
                                                                   target="_blank">شرکت‌های بیمه</a> ارائه می‌دهند و نرخ بیمه در شرکت‌های مختلف می‌تواند متفاوت باشد. همچنین تفاوت در کیفیت ارائه خدمات این بیمه می‌تواند تأثیر بسزایی در میزان رضایت بیمه‌گزار داشته باشد. در ادامه به بررسی بهترین بیمه شخص ثالث نیز خواهیم پرداخت.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2 id="روش محاسبه حق بیمه شخص ثالث"><span class="P__Icon___Eyr_h"><img
                                            class="Bg_27___34H7h"
                                            src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                            alt="روش محاسبه قیمت بیمه شخص ثالث"></span>روش محاسبه حق بیمه شخص ثالث</h2>
                                <p><span>در اولین قدم به این می‌پردازیم که حق بیمه شخص ثالث بر چه اساسی تعیین می‌شود و سپس به عوامل مؤثر بر قیمت نهایی خواهیم پرداخت.</span>
                                </p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_8___JknH4"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="حق بیمه پایه ابلاغ شده توسط بیمه مرکزی"></span><span>1. حق بیمه پایه ابلاغ شده توسط بیمه مرکزی</span>
                                </h3>
                                <p><span>اساس تعیین حق بیمه شخص ثالث و میزان پوشش مالی و جانی که به آن خواهیم پرداخت مبلغ تعیین‌شده برای دیه کامل یک انسان در ماه حرام است. هر ساله قوه قضائیه میزان مشخصی را به عنوان حق دیه کامل در ماه حرام اعلام می‌کند. در سال 99 دیه کامل در ماه حرام 440 میلیون تومان و در ماه غیرحرام 330 میلیون تومان تعیین شده است. در تقویم قمری چهار ماه‌ ذی‌القعده، ذی‌الحجه، محرم و رجب ماه‌های حرام به شمار می‌آیند. بدین معنی که اگر فوت ناشی از حادثه رانندگی در یکی از این چهار ماه رخ دهد میزان دیه 440 میلیون تومان و در باقی ماه‌های سال 330 میلیون تومان خواهد بود. بر همین اساس حداقل پوشش مالی نیز در سال 99، 11 میلیون تومان تعیین شده است که یک چهلم دیه کامل در ماه حرام است. بیمه مرکزی بر اساس این مبلغ، حق بیمه‌ را به شرکت‌های بیمه ابلاغ می‌کند. این مبلغ پایه حق بیمه خواهد بود. در مراحل بعدی می‌توان با استفاده از تخفیف‌ها و تغییر برخی از فاکتورهای مؤثر بر حق بیمه، قیمت بیمه شخص ثالث را کاهش یا افزایش داد.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_17___2I3ce"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="third party extention discount"></span><span>2. تخفیف عدم خسارت بیمه شخص ثالث</span>
                                </h3>
                                <p><span>محاسبه تخفیف عدم خسارت در بیمه شخص ثالث مدتی است که تغییر کرده است. قبلاً هر تعداد سال تخفیف که روی بیمه‌نامه قبلی‌تان نوشته شده بود به اضافه 1 می‌کردید (درصورتی‌که بیمه قبلی‌تان یک‌ساله باشد و در این مدت از آن استفاده نکرده باشید) و به‌عنوان سال‌های تخفیف عدم خسارت عنوان می‌کردید. الآن برای محاسبه تخفیف عدم خسارت این بیمه باید از درصد تخفیف بیمه‌نامه قبلی و حوادث راننده که هر دو بر روی بیمه‌نامه قبلی درج شده است استفاده کنید. بنابراین موقع دریافت استعلام قیمت بیمه شخص ثالث به بیمه‌نامه قبلی خود نگاه کنید؛ اگر درصد تخفیف ثالث 10 و درصد تخفیف حوادث راننده 5 باشد از همین اعداد برای استعلام قیمت استفاده کنید. در گام بعدی اینکه در مدت بیمه‌نامه قبلی از آن استفاده کردید یا نه اهمیت دارد. اگر در این مدت از بیمه‌نامه خودرو استفاده کرده باشید باید تعداد خسارت‌های جانی، مالی و حوادث راننده را نیز از روی بیمه‌نامه بخوانید. درصورتی‌که از بیمه‌نامه خودرو استفاده کرده باشید بر روی آن یک مهر زده شده که تعداد خسارت و نوع آن توسط مرکز پرداخت خسارت شرکت بیمه مشخص است. با استفاده از درصد تخفیف بیمه‌نامه و اینکه در این مدت از بیمه‌نامه استفاده کردید یا نه می‌توانید میزان تخفیف عدم خسارت بیمه‌نامه خود را محاسبه کنید و استعلام قیمت بیمه شخص ثالث بگیرید.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_15___2dubM"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="third party price on car usage"></span><span>3. کاربری خودرو</span>
                                </h3>
                                <p><span>کاربری خودرو تعیین‌کننده میزان ریسک خودرو برای رخ دادن حادثه و همچنین میزان هزینه معمول در یک حادثه رانندگی است. برای مثال خودروهای تاکسی یا آموزش رانندگی، بیشتر در معرض حوادث رانندگی هستند و باید حق بیمه شخص ثالث بیشتری را پرداخت کنند. تاکسی‌ها موظف به پرداخت 20% حق بیمه ثالث بیشتر و خودروهای آموزش رانندگی موظف به پرداخت 15% حق بیمه ثالث بیشتر هستند. کاربری‌های دیگری نیز تعریف شده‌است که برخی از آن‌ها صنعتی، آمبولانس و حمل خون و آتش‌نشانی، بارکش، عمومی سازمانی و ... هستند.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_31___1sPc5"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="third party extention latency penalty"></span><span>4. جریمه دیرکرد بیمه شخص ثالث</span>
                                </h3>
                                <p><span>در مقابل تخفیف عدم خسارت بیمه شخص ثالث، جریمه دیرکرد آن موجب افزایش حق بیمه می‌شود. همان‌طور که اشاره کردیم بیمه شخص ثالث برای تمامی دارندگان وسایل نقلیه اجباری است. درصورتی‌که در  تمدید بیمه شخص ثالث وقفه‌ای بیفتد به صورت روزشمار مبلغی به حق بیمه ماشین اضافه خواهد شد که برای خودروهای مختلف متفاوت است. اضافه شدن جریمه دیرکرد به حق بیمه ماشین به صورت روزشمار تنها تا 365 روز محاسبه و اعمال می‌شود؛ به این صورت که جریمه دیرکرد یک سال با دو سال فرقی ندارد.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_18___29dAN"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="میزان پوشش بیمه شخص ثالث"></span><span>5. میزان پوشش</span>
                                </h3>
                                <p><span>میزان پوشش از موارد دیگری است که تعیین‌کننده حق بیمه ماشین است. پوشش به معنای تعهد مالی شرکت بیمه در مقابل بیمه‌گزار است. حداقل میزان پوشش مالی تعیین شده از جانب بیمه مرکزی در سال 99، 11 میلیون تومان است. بیمه‌گزار می‌تواند با پرداخت حق بیمه بیشتر، پوشش مالی بالاتری را خریداری کند. برای مثال اگر خسارت وارد‌شده به زیان‌دیده در یک حادثه رانندگی 15 میلیون تومان باشد و فرد مقصر حداقل میزان پوشش مالی را خریداری کرده باشد، باید مابه‌تفاوت 4 میلیون تومان خسارت وارد‌شده را شخصاً تقبل کند در صورتی‌که با پرداخت حق بیمه اندکی بیشتر و خرید پوشش 15 میلیون تومانی لازم نبود هیچ هزینه‌ای را جدا از خسارت پرداختی شرکت بیمه بپردازد. همان‌طور که می‌دانید در چند سال گذشته قیمت ماشین رشد چند برابری داشته به همین دلیل ممکن است در تصادف با یک خودروی گران‌قیمت خسارت واردشده بیشتر از پوشش پایه بیمه ثالث باشد؛ بنابراین توصیه می‌شود حتماً پوشش مالی بیمه شخص ثالث ماشین خود را بالا انتخاب کنید و به پوشش پایه این بیمه اکتفا نکنید. با خرید بیمه شخص ثالث از بیمیتو می‌توانید ببینید هر شرکت بیمه چه پوشش‌های مالی را ارائه می‌دهد و قیمت هر یک چقدر است.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_17___2I3ce"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="insurance company discount"></span><span>6. تخفیف شرکت بیمه</span>
                                </h3>
                                <p><span>در سال‌های گذشته بیمه مرکزی هر ساله حداقل و حداکثر حق بیمه را به شرکت‌های بیمه ابلاغ می‌کرد و شرکت‌های بیمه می‌توانستند در این بازه قیمتی، مبلغی را که برایشان مطلوب بود به عنوان حق بیمه ثالث به متقاضیان بیمه شخص ثالث اعلام ‌کنند؛ در حال حاضر بعضی از شرکت‌های بیمه این تخفیف 2 و نیم درصدی را ارائه می‌دهند و بعضی خیر؛ بنابراین قیمت بیمه شخص ثالث شرکت‌های مختلف با یکدیگر تفاوت دارد. به عنوان مثال در سال جاری <a
                                            href="https://bimito.com/car-insurance/third-party-insurance/asia-third-party-insurance">بیمه شخص ثالث آسیا</a> این تخفیف را ارائه می‌کند ولی بیمه <a
                                            href="https://bimito.com/car-insurance/third-party-insurance/iran-third-party-insurance">شخص ثالث ایران</a> آن را ارائه نمی‌دهد. علاوه بر تخفیف شرکت بیمه تخفیف عدم خسارت بیمه‌نامه قبلی شما نیز بر نرخ بیمه شما تاثیر می‌گذارد و در استعلام نرخ بیمه شخص ثالث باید آن را اعمال کنید.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_19___q28oV"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="third party insurance credit"></span><span>7. مدت اعتبار بیمه‌نامه</span>
                                </h3>
                                <p><span>مدت اعتبار بیمه ‌نامه شخص ثالث می‌تواند از چند روز تا یک سال باشد. برخی از شرکت‌های بیمه، بیمه شخص ثالث را به صورت روزشمار نیز ارائه می‌دهند. در کل خرید بیمه نامه شخص ثالث به صورت سالانه مقرون‌به‌صرفه‌تر است. برای مثال قیمت بیمه‌نامه شش ماهه از نصف قیمت بیمه‌نامه یک ساله بیشتر است. چرا که بیمه‌های کوتاه مدت برای شرکت‌های بیمه ریسک بیشتری دارند.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <p><span>نحوه تأثیرگذاری تمامی فاکتورهای بالا در فرمول‌هایی وارد می‌شوند و قیمت بیمه شخص ثالث را تعیین می‌کند. با توجه به پیچیده بودن این محاسبات می‌توان با مراجعه به&nbsp;<a
                                            href="https://bimito.com" target="_blank">وب‌سایت و اپلیکیشن خرید آنلاین بیمه بیمیتو</a>&nbsp;با تغییر هر یک از این موارد نحوه تأثیر آن را بر نرخ بیمه بررسی کرد. برای مثال می‌توان پوشش بیمه‌نامه را از 11 میلیون تومان تا 220 میلیون تومان تغییر داد و گزینه مناسب را انتخاب کرد.</span>
                                </p>
                                <p><span>در مجموع با بررسی از طریق <a href="/"
                                                                      target="_blank">وب‌سایت و اپلیکیشن بیمیتو</a> متوجه خواهید شد که در مورد بیمه شخص ثالث، نرخ بیمه شرکت‌های مختلف با یکدیگر تفاوت چندانی ندارد و عامل اصلی برتری یک شرکت به شرکت‌های دیگر کیفیت خدمات‌دهی آن است که البته این عامل نیز در <a
                                            href="/" target="_blank">سامانه بیمیتو</a> بر اساس نظرسنجی‌ها و آمار بیمه مرکزی قابل مقایسه است.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2><span class="P__Icon___Eyr_h"><img class="Bg_34___1Ch70"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="نرخ بیمه شخص ثالث"></span><span>نرخ بیمه شخص ثالث در سال 99</span>
                                </h2>
                                <p><span>با افزایش نرخ دیه در سال 99 و مطابق با اعلام سازمان بیمه مرکزی نرخ بیمه شخص ثالث در سال 99 به میزان25  درصد نسبت به سال قبل افزایش پیدا کرده است. تعیین نرخ بیمه شخص ثالث برای هر خودرو به عواملی مانند نوع خودرو، تعداد سیلندر، کاربری خودرو، تخفیف عدم خسارت، سقف تعهدات بیمه‌نامه و جریمه دیرکرد بستگی دارد. بنابراین نرخ بیمه ای که در اینجا بیان می‌کنیم قطعی نیست و تنها به صورت نرخ پایه و مطابق اعلام سازمان بیمه مرکزی بیان می‌شود. با نگاهی به جداول زیر می‌توانید از نرخ پایه وسایل نقلیه مختلف مطلع شوید:</span>
                                </p>
                                <div class="Table___3Rlal" style="border: 1px solid rgb(224, 224, 224); border-radius: 2px;"><table class="jss1072"><thead class="jss1073"><tr class="jss1074 jss1077"><th class="jss1079 jss1080" scope="col">نوع خودروی سواری شخصی</th><th class="jss1079 jss1080" scope="col">مبلغ حق بیمه پایه به تومان</th></tr></thead><tbody class="jss1087"><tr class="jss1074"><td class="jss1079 jss1081">کمتر از چهار سیلندر</td><td class="jss1079 jss1081">1,414,200</td></tr><tr class="jss1074"><td class="jss1079 jss1081">پیکان، پراید و سپند</td><td class="jss1079 jss1081">1,674,700</td></tr><tr class="jss1074"><td class="jss1079 jss1081">چهار سیلندر</td><td class="jss1079 jss1081">1,968,700</td></tr><tr class="jss1074"><td class="jss1079 jss1081">بالاتر از چهار سیلندر</td><td class="jss1079 jss1081">2,203,200</td></tr></tbody></table></div>
                                <p><span><li>نرخ بیمه که برای خودروهای سواری مسافرکش درون شهری 10درصد و برای خودروهای مسافرکش برون شهری 20درصد به مبالغ فوق افزوده می‌شود.</li></span>
                                </p>
                                <br>
                                <p><span>نرخ  <a href="https://bimito.com/motorcycle-insurance" target="_blank"> بیمه موتور سیکلت</a> همان بیمه شخص ثالث است که برای موتورسیکلت‌ها صادر می‌شود. نرخ پایه حق بیمه موتور سیکلت نیز مطابق جدول زیر است. گفتنی است بر این مبالغ عواملی مانند تخفیف عدم خسارت و جریمه دیرکرد موثر هستند و باعث کاهش یا افزایش این نرخ‌ها می‌شوند. </span>
                                </p>
                                <div class="Table___3Rlal" style="border: 1px solid rgb(224, 224, 224); border-radius: 2px;"><table class="jss1072"><thead class="jss1073"><tr class="jss1074 jss1077"><th class="jss1079 jss1080" scope="col">نوع موتورسیکلت</th><th class="jss1079 jss1080" scope="col">مبلغ حق بیمه پایه به تومان</th></tr></thead><tbody class="jss1087"><tr class="jss1074"><td class="jss1079 jss1081">گازی</td><td class="jss1079 jss1081">351,000</td></tr><tr class="jss1074"><td class="jss1079 jss1081">دنده‌ای یک‌سیلندر</td><td class="jss1079 jss1081">428,900</td></tr><tr class="jss1074"><td class="jss1079 jss1081">دو سیلندر و بیشتر</td><td class="jss1079 jss1081">471,200</td></tr><tr class="jss1074"><td class="jss1079 jss1081">دنده‌ای سه‌چرخ و سایدکار</td><td class="jss1079 jss1081">506,700</td></tr></tbody></table></div>                                <br>
                                <p><span>به خودروهایی که بیشتر از 6 سرنشین دارند اصطلاحاً اتوکار می‌گویند مانند مینی‌بوس، اتوبوس، ون، استیشن. نرخ بیمه پایه شخص ثالث این خودروها نیز به شرح جدول زیر است: </span>
                                </p>
                                <div class="Table___3Rlal" style="border: 1px solid rgb(224, 224, 224); border-radius: 2px;"><table class="jss1072"><thead class="jss1073"><tr class="jss1074 jss1077"><th class="jss1079 jss1080" scope="col">نوع وسیله نقلیه مسافرکش</th><th class="jss1079 jss1080" scope="col">مبلغ حق بیمه پایه به تومان</th></tr></thead><tbody class="jss1087"><tr class="jss1074"><td class="jss1079 jss1081">استیشن، ون و... با ظرفیت 7 نفر</td><td class="jss1079 jss1081">4,055,000</td></tr><tr class="jss1074"><td class="jss1079 jss1081">استیشن، ون و... با ظرفیت 9 نفر</td><td class="jss1079 jss1081">4,172,200</td></tr><tr class="jss1074"><td class="jss1079 jss1081">ون با ظرفیت 10 نفر</td><td class="jss1079 jss1081">4,218,700</td></tr><tr class="jss1074"><td class="jss1079 jss1081">مینی‌بوس با ظرفیت 16 نفر</td><td class="jss1079 jss1081">5,186,400</td></tr><tr class="jss1074"><td class="jss1079 jss1081">مینی‌بوس با ظرفیت 21 نفر</td><td class="jss1079 jss1081">5,387,400</td></tr><tr class="jss1074"><td class="jss1079 jss1081">اتوبوس با ظرفیت 27 نفر</td><td class="jss1079 jss1081">7,944,400</td></tr><tr class="jss1074"><td class="jss1079 jss1081">اتوبوس با ظرفیت 40 نفر</td><td class="jss1079 jss1081">9,995,100</td></tr><tr class="jss1074"><td class="jss1079 jss1081">اتوبوس با ظرفیت 44 نفر</td><td class="jss1079 jss1081">10,607,400</td></tr></tbody></table></div>                                <p><span><li> در جدول بالا منظور از ظرفیت خودرو، تعداد مسافران به همراه راننده و کمک‌راننده است.</li></span>
                                </p>
                                <br>
                                <p><span>برای خودروهای بارکش میزان ظرفیت بارگیری در تعیین حق بیمه موثر است. قیمت بیمه شخص ثالث پایه در خودروهای بارکش نیز مطابق جدول زیر است:</span>
                                </p>
                                <div class="Table___3Rlal" style="border: 1px solid rgb(224, 224, 224); border-radius: 2px;"><table class="jss1072"><thead class="jss1073"><tr class="jss1074 jss1077"><th class="jss1079 jss1080" scope="col">نوع وسیله نقلیه بارکش</th><th class="jss1079 jss1080" scope="col">مبلغ حق بیمه پایه به تومان</th></tr></thead><tbody class="jss1087"><tr class="jss1074"><td class="jss1079 jss1081">تا یک تُن</td><td class="jss1079 jss1081">1,732,500</td></tr><tr class="jss1074"><td class="jss1079 jss1081">بیشتر از 1 تن و تا ظرفیت 3 تن</td><td class="jss1079 jss1081">2,086,100</td></tr><tr class="jss1074"><td class="jss1079 jss1081">بیشتر از 3 تن و تا ظرفیت 5 تن</td><td class="jss1079 jss1081">2,640,600</td></tr><tr class="jss1074"><td class="jss1079 jss1081">بیشتر از 5 تن و تا ظرفیت 10 تن</td><td class="jss1079 jss1081">3,383,100</td></tr><tr class="jss1074"><td class="jss1079 jss1081">بییشتر از 10 تن و تا ظرفیت20 تن</td><td class="jss1079 jss1081">3,936,700</td></tr><tr class="jss1074"><td class="jss1079 jss1081">بیشتر از 20 تن</td><td class="jss1079 jss1081">4,172,200</td></tr></tbody></table></div>                                <p><span><li>اگر از خودروی بارکش برای حمل‌ونقل مواد خطرناک مانند مواد قابل اشتعال (سوختنی) مایع و گاز استفاده شود 25درصد و در صورت به کارگیری خودروی بارکش برای حمل مواد منفجره 50 درصد به مبالغ نرخ بیمه پایه افزوده می‌شود. </li></span>
                                </p>
                                <br>
                                <p><span>نرخ بیمه پایه برای سایر خودروهایی که در امور مختلف به کار گرفته می‌شوند نیز به صورت زیر است:</span>
                                </p>
                                <div class="Table___3Rlal" style="border: 1px solid rgb(224, 224, 224); border-radius: 2px;"><table class="jss1072"><thead class="jss1073"><tr class="jss1074 jss1077"><th class="jss1079 jss1080" scope="col">کاربرد وسیله نقلیه</th><th class="jss1079 jss1080" scope="col">مبلغ حق بیمه پایه به تومان</th></tr></thead><tbody class="jss1087"><tr class="jss1074"><td class="jss1079 jss1081">کشاورزی</td><td class="jss1079 jss1081">725,900</td></tr><tr class="jss1074"><td class="jss1079 jss1081">راه‌سازی و ساختمانی</td><td class="jss1079 jss1081">1,037,100</td></tr><tr class="jss1074"><td class="jss1079 jss1081">حمل زباله و خیابان پاک‌کن‌ها</td><td class="jss1079 jss1081">1,685,400</td></tr></tbody></table></div>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2><span class="P__Icon___Eyr_h"><img class="Bg_39___1dLlr"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="بیمه شخص ثالث ارزان"></span><span>چطور ارزان‌ترین بیمه شخص ثالث را بخریم؟</span>
                                </h2>
                                <p><span> خرید ارزان‌ترین بیمه شخص ثالث به موارد زیر بستگی دارد:</span></p>
                                <p><span><b>سال‌های تخفیف عدم خسارت : </b></span><span>همان‌طور که گفتیم سال‌های عدم خسارت باعث می‌شود که بیمه‌گزار در خرید بیمه شخص ثالث از تخفیف استفاده کند. هرچه سال‌های تخفیف عدم خسارت بیشتر باشد بیمه شخص ثالث ارزان‌تر خواهد شد.</span>
                                </p>
                                <p><span><b>نداشتن جریمه دیرکرد : </b></span><span>جریمه دیرکرد زمانی اعمال می‌شود که بیمه‌گزار نسبت به تمدید بیمه شخص ثالث خود دیر و بعد از تاریخ سررسید آن اقدام کند. در این حالت بیمه‌گزار باید جریمه دیرکرد بپردازد. در نتیجه اگر می‌خواهید بیمه خود را ارزان‌تر تهیه کنید باید یک هفته قبل از تاریخ سررسید برای تمدید بیمه اقدام کنید.            </span>
                                </p>
                                <p><span><b>سقف تعهدات بیمه شخص ثالث : </b></span><span>سقف تعهدات مالی بیمه شخص ثالث در سال 99 حداقل 11 میلیون تومان در نظر گرفته شده است. بیمه‌گزار می‌تواند سقف تعهدات را تا 220 میلیون تومان افزایش دهد که به ازای آن باید حق بیمه بیشتری نیز بپردازد. البته بسیار مهم است در نظر داشته باشید که سقف تعهدات بیمه‌نامه خودرو را افزایش دهید اهمیت این کار در این است که اگرچه حق بیمه اندکی بیشتر می‌شود اما این افزایش سقف تعهدات به نفع بیمه‌گزار است زیرا بیمه در زمان حادثه با پرداخت خسارت بیشتر از بیمه‌گزار حمایت کند. با این حال هرچه سقف تعهدات بیمه‌گزار پایین‌تر باشد نرخ بیمه نیز کمتر می‌شود.</span>
                                </p>
                                <p><span><b>تخفیف شرکت بیمه: </b></span><span>طبق مصوبه بیمه مرکزی شرکت‌های بیمه می‌توانند تا 2 و نیم درصد بر نرخ بیمه شخص ثالث تخفیف بدهند. این موضوع اختیاری است و بعضی از شرکت‌های بیمه این تخفیف را ارائه می‌دهند و بعضی ارائه نمی‌دهند. بنابراین ارزانترین بیمه شخص ثالث را باید از شرکت بیمه‌ای بخرید که تخفیف 2 و نیم درصد را اعمال کرده باشد. برای مثال قیمت بیمه دانا شخص ثالث و بیمه شخص ثالث آسیا در حال حاضر با اعمال این تخفیف ارائه می‌شود و نرخ کمتری نسبت به بیمه شخص ثالث ایران دارد.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2><span class="P__Icon___Eyr_h"><img class="Bg_37___mI-BW"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="سقف تعهدات بیمه شخص ثالث"></span><span>سقف تعهدات جانی و تعهدات مالی بیمه شخص ثالث در سال 99</span>
                                </h2>
                                <p><span>سقف تعهدات بیمه شخص ثالث بر اساس نرخ دیه‌ای است که هر ساله از سوی قوه قضائیه اعلام می‌شود. در سال 99 نرخ دیه در ماه حرام 440 میلیون تومان تعیین شده است که یک چهلم آن یعنی 11 میلیون تومان مبنای سقف تعهدات پایه بیمه شخص ثالث است. منظور از حداقل سقف تعهدات 11 میلیون به این معنی است که در صورت ایجاد خسارت مالی، بیمه شخص ثالث تا 11 میلیون تومان به فرد خسارت‌دیده، غرامت پرداخت می‌کند و در صورت وقوع صدمه بدنی، خسارت ایجادشده مطابق دیه به افراد آسیب‌دیده پرداخت می‌شود. همچنین بیمه شخص ثالث، خسارت جانی منجر به فوت را نیز بر اساس دیه کامل (یعنی 330 میلیون تومان در ماه‌های غیرحرام و 440 میلیون تومان در ماه‌های حرام) به خانواده و یا ذی‌نفع متوفی پرداخت می‌کند.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2 id="کدام شرکت بهترین بیمه شخص ثالث را ارائه می‌دهد"><span
                                        class="P__Icon___Eyr_h"><img class="Bg_9___1fpRm"
                                                                     src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                     alt="best third party insurance"></span><span>کدام شرکت بهترین بیمه شخص ثالث را ارائه می‌دهد؟</span>
                                </h2>
                                <p><span>بهترین بیمه شخص ثالث بر اساس اولویت‌های شخص تعاریف متفاوتی دارد. در مواردی اولویت متقاضی خرید بیمه شخص ثالث، قیمت پایین حق بیمه است در صورتی‌که ممکن است افرادی حاضر باشند با پرداخت حق بیمه بیشتر، خدمات باکیفیت‌تری دریافت کنند. در گذشته به دلیل محدودیت امکان مقایسه، انتخاب آگاهانه و متناسب با اولویت‌ها بسیار سخت و حتی غیرممکن بود. امکان مقایسه تمامی فاکتورهای مربوط به کیفیت و قیمت از طریق <a
                                            href="/" target="_blank">اپلیکیشن و وب‌سایت بیمیتو</a> فراهم شده است. در مورد مقایسه قیمت بیمه شخص ثالث، تمامی موارد مؤثر بر حق بیمه در قالب فرمول‌هایی درآورده شده است و متقاضی بعد از وارد کردن مشخصات خودرو و بیمه نامه خودرو قادر به مقایسه قیمت بیمه شخص ثالث تمام شرکت‌ها خواهد بود.</span>
                                </p>
                                <p><span>در مورد مقایسه کیفیت، بیمه مرکزی سالانه آماری را منتشر می‌کند که میزان رضایتمندی بیمه‌گزاران از شرکت‌های مختلف را بر اساس عواملی چون سطح پوشش، مدت اعتبار، پاسخگویی (شفافیت و سرعت)، دانش کارکنان، ارائه اطلاعات زمان خسارت، ارائه اطلاعات زمان صدور بیمه شخص ثالث، رسیدگی به شکایات، رضایت مالی (حق بیمه)، رضایت مالی (خسارت دریافتی)، سادگی و سرعت صدور بیمه شخص ثالث، سادگی و سرعت پرداخت خسارت، ارتباط با مشتری، تبلیغات صحیح، محیط فیزیکی و سهم از بازار نشان می‌دهد. تمامی این اطلاعات به صورت شفاف و با رتبه‌بندی شرکت‌های مختلف در <a
                                            href="/" target="_blank">سامانه بیمیتو </a>قابل بررسی است.</span></p>
                                <p><span>بنابراین شما با توجه به اولویت‌های خودتان می‌توانید بهترین بیمه شخص ثالث را برای خود از بیمیتو بخرید. اگر برایتان قیمت بیمه شخص ثالث مهم است، مناسب‌ترین قیمت را و اگر سایر پارامترهای کیفی مهم است می‌توانید با مقایسه آن بین بیمه‌های مختلف، بیمه مناسب را انتخاب کرده و آنلاین بخرید.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2 id="آیا می‌توان جریمه دیرکرد بیمه شخص ثالث را کاهش داد"><span
                                        class="P__Icon___Eyr_h"><img class="Bg_22___2m7f9"
                                                                     src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                     alt="کاهش جریمه دیرکرد بیمه شخص ثالث"></span><span>آیا می‌توان جریمه دیرکرد بیمه شخص ثالث را کاهش داد؟</span>
                                </h2>
                                <p><span>همان‌طور که در قسمت‌های قبل توضیح دادیم به دلیل اجباری بودن بیمه شخص ثالث برای تمامی دارندگان وسیله نقلیه، نداشتن آن حتی برای مدت یک روز عواقبی در پی خواهد داشت. افراد ممکن است به دلایل متعددی تاریخ اتمام یا همان سررسید بیمه ‌نامه خود را فراموش کنند؛ مواردی مانند مشکلات مالی، فراموشی، سهل‌انگاری، عدم دسترسی به دفتر نمایندگی بیمه و ... . در چنین شرایطی جریمه دیرکرد بیمه شخص ثالث به صورت روزانه محاسبه و به نرخ بیمه شخص اضافه می‌شود.</span>
                                </p>
                                <p><span>جریمه دیرکرد بیمه شخص ثالث در حالت عادی قابل بخشش و تخفیف نیست و کاهش جریمه دیرکرد بیمه شخص ثالث به عنوان تخلف نمایندگی بیمه محسوب می‌شود.</span>
                                </p>
                                <p><span>گاهی اوقات این جریمه‌های دیرکرد توسط بیمه مرکزی بخشیده می‌شود که قاعده خاصی ندارد و همیشگی نیست.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2 id="عواقب دیر کرد تمدید بیمه شخص ثالث"><span class="P__Icon___Eyr_h"><img
                                            class="Bg_30___1KoFC"
                                            src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                            alt="عواقب دیرکرد تمدید بیمه شخص ثالث"></span><span> عواقب دیرکرد تمدید بیمه شخص ثالث</span>
                                </h2>
                                <p><span>به غیر از عواقب مالی، مشکلات دیگری نیز وجود خواهد داشت که علاوه بر خسارات مالی بالا موجب صرف زمان زیادی نیز خواهد بود. از عواقب اصلی نداشتن بیمه نامه شخص ثالث عبارتند از:</span>
                                </p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_23___2hqOK"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="police stop car whitout insurance"></span><span>1. متوقف شدن خودرو توسط پلیس راهنمایی و رانندگی</span>
                                </h3>
                                <p><span>پلیس راهنمایی و رانندگی در صورت شناسایی خودروی فاقد بیمه نامه شخص ثالث آن را متوقف می‌کند و به پارکینگ انتقال می‌دهد. در این حالت شخص خاطی باید بیمه‌ نامه شخص ثالث دارای اعتبار تهیه کند و علاوه بر پرداخت جریمه دیرکرد بیمه شخص ثالث که به حق بیمه‌اش اضافه شده است، هزینه پارکینگ را نیز بپردازد.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_43___3nH2e"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="driving accident with no insurance"></span><span>2. حوادث رانندگی</span>
                                </h3>
                                <p><span>در صورت نداشتن بیمه شخص ثالث در تصادفات، چه فرد مقصر باشد و چه زیان‌دیده؛ به مشکلات جدی بر خواهد خورد. درصورتی‌که مالک خودرو، مقصر باشد باید تمامی هزینه را شخصاً بپردازد. در بعضی از مواقع به ویژه اگر فوت یا خسارات بدنی دیگر در اثر حادثه رخ دهد، خسارت مالی جبران‌ناپذیری برای راننده مقصر به همراه خواهد داشت.</span>
                                </p>
                                <p><span>در صورتی‌که راننده فاقد بیمه شخص ثالث در حادثه رانندگی زیان‌دیده باشد نیز ممکن است با مشکلاتی مواجه شود. چرا که پلیس راهنمایی و رانندگی برای ارائه گزارش به مدارک هر دو طرف نیاز دارد. از طرفی شرکت بیمه طرف قرارداد با خودروی مقصر نیز ممکن است در پرداخت خسارت به راننده زیان‌دیده فاقد بیمه شخص ثالث مشکلاتی به وجود آورد.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_33___3NQus"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="car deal without third party insurance"></span><span>3. خرید و فروش خودروی فاقد بیمه نامه شخص ثالث</span>
                                </h3>
                                <p><span>در صورتی‌که مالک خودروی فاقد بیمه نامه شخص ثالث قصد معامله آن را داشته باشد ابتدا باید برای وسیله نقلیه خود بیمه شخص ثالث تهیه کند چرا که امکان خرید و فروش خودرویی که تحت پوشش بیمه شخص ثالث نیست وجود ندارد.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_24___19ET4"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="افزایش حق بیمه در اثر جریمه دیرکرد"></span><span>4. افزایش حق بیمه ناشی از جریمه دیرکرد بیمه شخص ثالث</span>
                                </h3>
                                <p><span>همان‌طور که توضیح دادیم درصورتی‌که تمدید بیمه شخص ثالث با تأخیر انجام شود به صورت روزشمار مبلغی به عنوان جریمه دیرکرد بیمه شخص ثالث به حق بیمه شخص ثالث افزوده خواهد شد. گاهی ممکن است این مبلغ به یک میلیون تومان نیز برسد و این مبلغ مشمول هیچ‌گونه تخفیف یا بخشودگی نمی‌شود.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <p style="display: flex;"><span class="P__Icon___Eyr_h" style="margin-left: 6px;"><svg
                                            color="#00b4ff" class="svg-inline--fa " viewBox="0 0 512 512"><path
                                                fill="currentColor"
                                                d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"></path></svg></span><span>در صورتی‌که خودرویی دارای تخفیف عدم خسارت بیمه شخص ثالث باشد در صورت تأخیر در تمدید بیمه ‌نامه، تعداد سال تخفیف آن حفظ خواهد شد. برای مثال اگر بیمه نامه ماشین فرد یک سال تخفیف عدم خسارت داشته باشد و به دلیل دیرکرد در تمدید بیمه‌ نامه مشمول جریمه شود، باید جریمه دیرکرد را بدون احتساب تخفیف و به صورت کامل بپردازد اما در حق بیمه اصلی 5% تخفیف خواهد داشت و تعداد سال تخفیف عدم خسارت بیمه ثالث خودرو نیز از بین نمی‌رود.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2 id="چند روز قبل از اتمام اعتبار بیمه‌نامه باید آن را تمدید کرد"><span
                                        class="P__Icon___Eyr_h"><img class="Bg_12___WTh20"
                                                                     src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                     alt="insurance extention time"></span><span>چند روز قبل از اتمام اعتبار بیمه‌نامه باید آن را تمدید کرد؟</span>
                                </h2>
                                <p><span>اعتبار بیمه شخص ثالث از دوازده بامداد فردای خرید بیمه نامه شخص ثالث آغاز می‌شود و تا بامداد روز سررسید بیمه‌نامه معتبر است. برای مثال اگر روز اتمام اعتبار بیمه نامه ماشین فردی دوشنبه باشد و فرد بیمه‌نامه خود را در هر ساعتی از روز دوشنبه تمدید کند اعتبار بیمه‌نامه‌اش از بامداد سه شنبه آغاز می‌شود و فرد در این فاصله تحت پوشش بیمه شخص ثالث نیست و در صورتی‌که خسارت ناشی از حادثه رانندگی برایش اتفاق بیافتد باید تمام هزینه را شخصاً تقبل کند.</span>
                                </p>
                                <p><span>بهترین زمان برای تمدید بیمه شخص ثالث یک هفته قبل از اتمام تاریخ اعتبار بیمه‌نامه است. تمدید بیمه زودتر از یک هفته مانده به تاریخ سررسید نیز صرفه اقتصادی ندارد.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <p style="display: flex;"><span class="P__Icon___Eyr_h" style="margin-left: 6px;"><svg
                                            color="#00b4ff" class="svg-inline--fa " viewBox="0 0 512 512"><path
                                                fill="currentColor"
                                                d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"></path></svg></span><span>در مدت زمانی که بیمه‌نامه قبلی و جدید همپوشانی دارند اگر حادثه رانندگی رخ دهد از بیمه‌نامه قبلی استفاده می‌شود.</span>
                                </p>
                                <p style="display: flex;"><span class="P__Icon___Eyr_h" style="margin-left: 6px;"><svg
                                            color="#00b4ff" class="svg-inline--fa " viewBox="0 0 512 512"><path
                                                fill="currentColor"
                                                d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"></path></svg></span><span>اگر برای مثال فرد 5 سال تخفیف عدم خسارت داشته باشد طبعاً در بیمه‌نامه جدیدش درج خواهد شد. حال اگر در مدت همپوشانی دو بیمه‌نامه فرد دچار خسارت شود و مجبور به استفاده از بیمه شخص ثالث خود شود 5 سال تخفیف عدم خسارت وی از بین می‌رود و در بیمه‌نامه جدید وی اعمال می‌شود. در این حالت شخص با پرداخت مبلغی که به واسطه تخفیف از حق بیمه‌اش کسر شده بود الحاقیه‌ای دریافت می‌کند که از بین رفتن تخفیف عدم خسارت وی در آن درج شده است.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2 id="استثنا بخشش جریمه دیرکرد بیمه شخص ثالث"><span class="P__Icon___Eyr_h"><img
                                            class="Bg_21___2AVfJ"
                                            src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                            alt="استثنا بخشش جریمه دیرکرد بیمه شخص ثالث"></span><span>استثنا بخشش جریمه دیرکرد بیمه شخص ثالث</span>
                                </h2>
                                <p><span>تنها در یک صورت جریمه دیرکرد بیمه شخص ثالث بخشیده می‌شود و آن هم در صورتی است که اعتبار بیمه‌نامه خودرو زمانی که در پارکینگ نیروی انتظامی متوقف شده است پایان یابد. در این صورت مالک خودرو با ارائه مجوز رفع توقیف به شرکت بیمه از پرداخت جریمه دیرکرد بیمه شخص ثالث معاف می‌شود. البته در بعضی از مواقع این جریمه‌های دیرکرد توسط بیمه مرکزی بخشیده می‌شود که این موضوع از قبل مشخص نیست.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <p><span>یکی از مزایای اصلی <a href="/" target="_blank">خرید آنلاین بیمه از سامانه بیمیتو</a> از میان برداشتن تمامی محدودیت‌های زمانی و مکانی است؛ به این صورت که در هر ساعتی از شبانه‌روز و در هر جای ایران امکان خرید و تمدید بیمه شخص ثالث وجود دارد. از مزایای دیگر این سامانه یادآوری سررسید بیمه‌ نامه خودرو چند روز قبل از موعد آن است.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2 id="انواع روش‌های انتقال بیمه شخص ثالث"><span class="P__Icon___Eyr_h"><img
                                            class="Bg_28___294J4"
                                            src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                            alt="third party insurance transfer"></span><span>انواع روش‌های انتقال بیمه شخص ثالث</span>
                                </h2>
                                <p><span>در شرایط متفاوتی ممکن است فرد قصد انتقال بیمه شخص ثالث خود را به روش‌های مختلف داشته باشد. در ادامه به چند مورد از اَشکال انتقال و روند آن‌ها اشاره خواهیم کرد.</span>
                                </p>
                                <h3 style="padding: 8px 0px;"><span>1. تمدید بیمه شخص ثالث با شرکت بیمه‌ای متفاوت</span>
                                </h3>
                                <p><span> در بسیاری از مواقع فرد ممکن است به دلایلی مانند عدم رضایت از نحوه سرویس‌دهی شرکت بیمه یا تفاوت قیمتی و غیره قصد تمدید بیمه شخص ثالث خود با شرکتی دیگر را داشته باشد. در این صورت روند و تمامی مدارک با حالتی که تمدید بیمه‌نامه از طریق شرکت قبلی انجام شود یکسان است. مطابق روند خرید از سامانه بیمیتو پیداست می‌توان برای تمدید بیمه‌نامه شرکتی متفاوت را انتخاب کرد و مدارک همیشگی را ارائه داد.</span>
                                </p>
                                <p style="display: flex;"><span class="P__Icon___Eyr_h" style="margin-left: 6px;"><svg
                                            color="#00b4ff" class="svg-inline--fa " viewBox="0 0 512 512"><path
                                                fill="currentColor"
                                                d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"></path></svg></span><span>درصورتی‌که بیمه شخص ثالث دارای تخفیف عدم خسارت باشد و فرد بیمه‌نامه‌اش را با شرکتی متفاوت تمدید کند، تخفیف بیمه‌نامه از بین نمی‌رود.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3 style="padding: 8px 0px;"><span>2. انتقال بیمه شخص ثالث به مالک جدید خودرو</span>
                                </h3>
                                <p><span>  <a href="https://bimito.com/car-insurance/car-body-insurance"
                                              target="_blank">بیمه شخص ثالث ماشین </a>مانند بیمه ثالث نیست که تنها متعلق به شخص است؛ به این معنا که بیمه شخص ثالث می‌تواند متعلق به شخص یا خودرو باشد. در صورت معامله خودرو مالک جدید خودرو می‌تواند بیمه‌نامه را به نام خود ثبت کند که در این صورت الحاقیه‌ای ضمیمه بیمه‌نامه می‌شود مبنی بر تغییر مالک بیمه‌نامه و یا می‌تواند مشخصات بیمه نامه خودرو را تغییر ندهد چرا که شماره شاسی خودرو در بیمه‌نامه درج شده است و از آن‌جایی که کارت خودرو به نام مالک جدید است مشکلی پیش نخواهد آمد.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3 style="padding: 8px 0px;"><span>3. انتقال تخفیف بیمه شخص ثالث</span></h3>
                                <p><span>در برخی از موارد فرد مایل به انتقال بیمه نامه خودرو خود به خودروی دیگری است. این انتقال به دو صورت امکان‌پذیر است. در مواردی ممکن است فرد قصد فروش خودروی خود را داشته باشد. در این حالت می‌تواند تخفیف بیمه‌نامه خودرو را به خودروی جدید خود انتقال دهد. از طرفی در مواردی ممکن است فرد قصد داشته باشد که تخفیف عدم خسارت بیمه‌نامه‌اش را به شخص دیگری انتقال دهد. در این حالت انتقال تخفیف بیمه نامه ماشین تنها در یک خانواده و بین مادر، پدر و فرزندان امکان‌پذیر است.</span>
                                </p>
                                <p style="display: flex;"><span class="P__Icon___Eyr_h" style="margin-left: 6px;"><svg
                                            color="#00b4ff" class="svg-inline--fa " viewBox="0 0 512 512"><path
                                                fill="currentColor"
                                                d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"></path></svg></span><span>در انتقال تخفیف بیمه شخص ثالث باید به قانون خودروهای مشابه دقت داشت. قانون خودروهای مشابه به این صورت است که انتقال تخفیف بیمه‌نامه شخص ثالث تنها بین خودروهایی با کاربری مشابه امکان‌پذیر است و امکان انتقال تخفیف بیمه‌نامه از خودروی سواری به بارکش وجود ندارد.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_40___1nqpN"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="بیمه شخص ثالث"></span><span>با تغییر شرکت بیمه تخفیف عدم خسارت از بین نمی‌رود</span>
                                </h3>
                                <p><span>اگر به هر دلیل می‌خواهید شرکت بیمه‌ای که از آن بیمه می‌خریده‌اید را عوض کنید؛ مثلاً اگر می‌خواهید خرید بیمه را به صورت قسطی انجام دهید و امکان <a
                                            href="https://bimito.com/installment-insurance" target="_blank">خرید بیمه قسطی</a> از شرکت قبلی‌تان فراهم نیست می‌توانید بدون نگرانی از شرکت دیگری بیمه شخص ثالث را تهیه کنید. تخفیف‌های عدم خسارت با تغییر شرکت بیمه در زمان تمدید بیمه‌نامه از بین نمی‌روند و با داشتن بیمه‌نامه از هر شرکت بیمه، به راحتی می‌توانید از تخفیف‌های خود استفاده کنید.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2 id="بعد از گم‌شدن بیمه شخص ثالث چه روندی را باید طی کرد"><span
                                        class="P__Icon___Eyr_h"><img class="Bg_29___38CXG"
                                                                     src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                     alt="گم شدن بیمه شخص ثالث"></span><span>بعد از گم‌شدن بیمه شخص ثالث چه روندی را باید طی کرد؟</span>
                                </h2>
                                <p><span>اولین قدم بعد از گم‌شدن بیمه شخص ثالث گزارش فوری آن به نمایندگی بیمه است. برای بیمه شخص ثالث المثنی صادر نمی‌شود و تنها گواهی صادر می‌شود. برای دریافت گواهی ابتدا باید به مجتمع بیمه‌ای که بیمه‌نامه از آن صادر شده است مراجعه کرد. در صورتی که فرد شرکت بیمه خود را فراموش کرده است، می‌تواند با هریک از موارد شماره پلاک خودرو، شماره شاسی، شماره موتور یا شماره بیمه‌نامه از طریق سایت بیمه مرکزی مشخصات بیمه‌نامه را استعلام کند. مدارک لازم جهت ارائه به مجتمع بیمه نیز سند خودرو و کارت شناسایی است.</span>
                                </p>
                                <p><span>ارزش قانونی این گواهی هیچ تفاوتی با اصل بیمه‌نامه ندارد. نمایندگی بیمه تعداد کوپن‌ها و تخفیف عدم خسارت و مشخصات دیگر بیمه‌نامه قبلی را استعلام می‌کند و در گواهی بیمه شخص ثالث درج می‌کند. در صورتی‌که بعدها شخص در حادثه رانندگی دچار خسارت شود الحاقیه‌ای مبنی بر استفاده از بیمه شخص ثالث و از بین رفتن تخفیف عدم خسارت ضمیمه گواهی بیمه خواهد شد.</span>
                                </p>
                                <p style="display: flex;"><span class="P__Icon___Eyr_h" style="margin-left: 6px;"><svg
                                            color="#00b4ff" class="svg-inline--fa " viewBox="0 0 512 512"><path
                                                fill="currentColor"
                                                d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"></path></svg></span><span>صدور گواهی بیمه شخص ثالث رایگان است.</span>
                                </p>
                                <hr class="jss1028 MarginTopBottom15___1lpS9">
                                <h2 id="تغییرات قانون جدید بیمه شخص ثالث"><span class="P__Icon___Eyr_h"><img
                                            class="Bg_1___17O1p"
                                            src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                            alt="تغییرات قانون جدید بیمه شخص ثالث"></span><span>تغییرات قانون بیمه شخص ثالث در سال 96</span>
                                </h2>
                                <p><span>قانون بیمه شخص ثالث در سال 96 دست‌خوش تغییراتی شده است. هرکس به‌عنوان بیمه‌گزار بیمه شخص ثالث بهتر است درباره این تغییرات اطلاعات کافی داشته باشد. قانون جدید بیمه شخص ثالث در موارد زیر دچار تغییراتی شده است که به توضیح درباره آن‌ها می‌پردازیم:</span>
                                </p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_2___1Lkkm"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="الحاقیه بیمه شخص ثالث"></span><span>1. الحاقیه بیمه شخص ثالث</span>
                                </h3>
                                <p><span>در سال‌های گذشته بیمه‌گزارانی که سررسید بیمه‌نامه‌شان ابتدای سال شمسی نبود، موظف بودند با اعلام نرخ جدید حق بیمه از جانب بیمه مرکزی، مابه‌تفاوت حق بیمه را بپردازند تا بتوانند حداقل میزان پوشش مالی را برای بیمه‌نامه خود تهیه کنند. این مابه‌تفاوت در قالب الحاقیه‌ای ارائه می‌شد که هر ساله دغدغه بسیاری از رانندگان بود. خوشبختانه در سال 96 الحاقیه حذف شده است و در صورت بروز خسارت، مابه‌تفاوت مبلغ ناشی از افزایش دیه و نرخ بیمه توسط صندوق خسارات بدنی پرداخته می‌شود و دیگر نگرانی بابت خرید الحاقیه وجود ندارد.</span>
                                </p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_3___NtKZ0"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="برخورد بیمه شخص ثالث با رانندگان سابقه‌دار"></span><span>2. بیمه شخص ثالث برای رانندگان سابقه‌دار!</span>
                                </h3>
                                <p><span>در قانون جدید بیمه شخص ثالث نرخ این بیمه برای رانندگان با نمره منفی بالا و سابقه تخلفات رانندگی زیاد با سایر افراد فرق می‌کند. قطعاً این افراد باید حق بیمه بیشتری نسبت به افراد کم تخلف بپردازند زیرا ریسک خسارت این افراد بیشتر است.</span>
                                </p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_4___398VP"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt=" برخورد قانون جدید بیمه شخص ثالث با متقلبان"></span><span>3. برخورد قانون جدید بیمه شخص ثالث با متقلبان</span>
                                </h3>
                                <p><span>در قانون جدید بیمه شخص ثالث درصورتی‌که فردی با صحنه‌سازی و تقلب اقدام به دریافت خسارت از بیمه کند، به حبس تعزیری محکوم می‌شود و باید دو برابر مبلغ خسارت دریافت شده از بیمه را پرداخت کند.</span>
                                </p>
                                <p><span>در این قانون راننده مقصر حادثه تحت هیچ شرایطی زندانی نمی‌شود.</span></p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_5___3PauW"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="پرداخت خسارت بیمه شخص ثالث توسط رانندگان متخلف"></span><span>4. رانندگان متخلف و پرداخت خسارت بیمه شخص ثالث</span>
                                </h3>
                                <p><span>مطابق قانون جدید بیمه شخص ثالث درصورتی‌که راننده مقصر به دلیل رعایت نکردن قوانین راهنمایی و رانندگی باعث بروز حادثه شده باشد، باید بخشی از خسارت وارد شده را پرداخت کند.</span>
                                </p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_6___3Xi5g"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="جریمه شرکت های بیمه"></span><span>5. جریمه برای <a
                                            href="https://bimito.com/company-insurance"
                                            target="_blank">شرکت های بیمه</a>  </span></h3>
                                <p><span>این قانون برای شرکت‌های بیمه هم در شرایطی جریمه در نظر گرفته است. اگر مدارک بیمه‌گزار کامل باشد و دادگاه رأی مبنی بر دریافت خسارت به نفع بیمه‌گزار داده باشد، درصورتی‌که شرکت بیمه در پرداخت خسارت تأخیر کند باید جریمه بپردازد.</span>
                                </p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_7___2L74o"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="بیمه حوادث راننده"></span><span>6. تغییرات بیمه حوادث راننده</span>
                                </h3>
                                <p><span>در قانون جدید بیمه شخص ثالث به راننده مقصر هم توجه شده است. در این قانون خسارات جانی راننده مقصر مطابق بیمه‌نامه پرداخت می‌شود؛ درصورتی‌که در قانون قدیم فقط فوت و نقص عضو تحت پوشش بیمه حوادث راننده قرار می‌گرفت.</span>
                                </p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_10___34Koo"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="دریافت خسارت شرکت های بیمه از ارگان های مقصر"></span><span>7. شرکت‌های بیمه از ارگان‌های مقصر خسارت بگیرند</span>
                                </h3>
                                <p><span>درصورتی‌که حادثه رخ داده به علت خرابی راه، نبود علائم راهنمایی و رانندگی و... باشد، شرکت بیمه می‌تواند نسبت به دریافت خسارت از ارگان مربوطه اقدام کند. میزان خسارت طبق رأی دادگاه اعلام می‌شود.</span>
                                </p>
                                <h2 id="دریافت خسارت در حوادث مختصر"><span class="P__Icon___Eyr_h"><img
                                            class="Bg_11___nLu1C"
                                            src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                            alt="دریافت خسارت بیمه شخص ثالث در حوادث مختصر"></span><span>دریافت خسارت در حوادث مختصر</span>
                                </h2>
                                <p><span>در صورتی‌که حادثه‌ای رخ دهد و کمتر از 11 میلیون تومان به خودروی زیان ‌دیده خسارت وارد کند، برای دریافت خسارت از بیمه نیازی به کروکی و گزارش پلیس نیست. در این حالت بیمه با حضور خودرو طرفین حادثه و مدارک مورد نیاز هزینه خسارت را پرداخت می‌کند.</span>
                                </p>
                                <h2 id="خرید بیمه شخص ثالث"><span class="P__Icon___Eyr_h"><img class="Bg_1___17O1p"
                                                                                               src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                                               alt="تغییرات قانون جدید بیمه شخص ثالث در سال ۹۷"></span><span>تغییرات قانون بیمه شخص ثالث در سال 97</span>
                                </h2>
                                <p><span>در ابتدای سال 97 قانون بیمه شخص ثالث دستخوش تغییراتی شد. بنابراین  محاسبه بیمه شخص ثالث  از این پس تغییر می‌کند. تغییرات اعمال شده در این قانون در سال 97 عبارت است از:</span>
                                </p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_38___1E0AQ"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="حذف کوپن بیمه شخص ثالث"></span><span>حذف کوپن بیمه شخص ثالث</span>
                                </h3>
                                <p><span>کوپن بیمه شخص ثالث در سال 97 حذف شده است و بیمه‌نامه شخص ثالثی که از این به بعد خریداری می‌کنید کوپن ندارد. با اینکه کوپن بیمه نشان دهنده تعداد خسارت خودرو محسوب می‌شود ولی از آنجا که اطلاعات هر فرد در سیستم بیمه موجود است لذا حضور کوپن بیمه خیلی ضروری نیست.</span>
                                </p>
                                <h3><span class="P__Icon___Eyr_h"><img class="Bg_36___37zQh"
                                                                       src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                       alt="محاسبه تخفیف‌های بیمه شخص ثالث"></span><span>محاسبه تخفیف‌های بیمه شخص ثالث</span>
                                </h3>
                                <p><span>قانون تخفیف‌های بیمه شخص ثالث در سال 97 نیز تغییر کرده است. از این به بعد اگر فرد تصادف کند و از بیمه خود استفاده کند، تخفیف‌های او به‌طور کامل از بین نمی‌رود و فقط مقداری از آن کم می‌شود. به‌طور مثال در تصادف اول 20 درصد از تخفیف بیمه و در تصادف دوم 30 درصد از آن از بین می‌رود. از طرف دیگر سالانه به‌جای 10 درصد فقط 5 درصد به میزان تخفیف‌های بیمه شخص ثالث اضافه می‌شود.</span>
                                </p>
                                <h2 id="خرید بیمه شخص ثالث"><span class="P__Icon___Eyr_h"><img class="Bg_26___1ZCTR"
                                                                                               src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                                                                               alt="خرید بیمه شخص ثالث"></span><span>خرید بیمه شخص ثالث</span>
                                </h2>
                                <p><span>بعد از پرداختن به موارد مهم در مورد بیمه شخص ثالث نوبت به بررسی نکات مهم در خرید این بیمه می‌رسد.</span>
                                </p>
                                <p><span>در گذشته خرید بیمه شخص ثالث عمدتاً از طریق دفاتر نمایندگی بیمه انجام می‌شده است. امروزه تمامی صنایع به سمت الکترونیک شدن پیش می‌روند. صنعت بیمه نیز از این قاعده مستثنی نیست. <a
                                            href="/" target="_blank">بیمیتو </a>اولین اپلیکیشن فروش آنلاین بیمه است که در آن امکان مقایسه بیمه‌ها و شرکت‌های متفاوت وجود دارد و نتیجه آن خریدی آگاهانه خواهد بود. از طرفی در این سامانه همان‌طور که پیش‌تر توضیح داده شد محدودیت مکان و زمان وجود ندارد و می‌توان در هر ساعتی از شبانه‌روز و از هر شهری در ایران خرید بیمه را انجام داد تا طی حداکثر یک شبانه‌روز صدور بیمه شخص ثالث انجام شود. از طرفی سرعت صدور بالا و صرفه‌جویی در زمان و هزینه رفت‌و‌آمد از مزایای دیگر خرید اینترنتی بیمه شخص ثالث از <a
                                            href="/" target="_blank">بیمیتو </a>هستند.</span></p><h4
                                    style="padding: 10px 0px;"><span>در ادامه به توضیح مراحل خرید بیمه شخص ثالث از <a
                                            href="/" target="_blank">سامانه بیمیتو</a> می‌پردازیم:</span></h4>
                                <p><span>1. ورود به <a href="/" target="_blank">وب‌سایت</a> یا اپلیکیشن بیمیتو</span>
                                </p>
                                <p><span>2. انتخاب نوع خودرو و مدل خودرو و سال ساخت</span></p>
                                <p><span>3. وارد کردن درصد تخفیف بیمه شخص ثالث و حوادث راننده.</span></p>
                                <p><span>4. وارد کردن تاریخ اتمام یا همان سررسید بیمه‌نامه و مقایسه قیمت</span></p>
                                <p><span>5. تغییر مدت اعتبار، کاربری خودرو و پوشش به انتخاب خود</span></p>
                                <p><span>6. مقایسه قیمت و کیفیت شرکت‌های مختلف و ثبت سفارش</span></p>
                                <p><span>7. ثبت‌نام یا ورود به حساب کاربری </span></p>
                                <p><span>8. آپلود عکس پشت و روی کارت ماشین و بیمه‌نامه (کیفیت عکس‌ها به گونه‌ای باشد که خواندن اطلاعات آن‌ها امکان‌پذیر باشد. تمامی کوپن‌های بیمه‌نامه در عکس بیمه‎نامه مشخص باشند.)</span>
                                </p>
                                <p><span>9. ثبت جزئیات محل ارسال و زمان تحویل بیمه نامه خودرو</span></p>
                                <p><span>10. مطالعه قوانین و شرایط و تایید در صورت پذیرفتن</span></p>
                                <p><span>11. پرداخت آنلاین</span></p>
                                <p style="display: flex;"><span class="P__Icon___Eyr_h" style="margin-left: 6px;"><svg
                                            color="#00b4ff" class="svg-inline--fa " viewBox="0 0 512 512"><path
                                                fill="currentColor"
                                                d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"></path></svg></span><span>در خرید از <a
                                            href="/" target="_blank">سامانه بیمیتو</a> هیچ مبلغ اضافه‌ای نسبت به نمایندگی‌های بیمه دریافت نمی‌شود.</span>
                                </p>
                                <p><span>خرید از سامانه بیمیتو به صورت ساده طراحی شده است تا شخص حین فرآیند خرید دچار سردرگمی و اشتباه نشود. با این حال، در هر لحظه‌ای که نیاز به مشاوره با ما داشتید، می‌توانید از بخش چت وب‌سایت یا به وسیله تماس تلفنی، با ما در تماس باشید.</span>
                                </p>
                                <h2 id="خرید اقساطی بیمه شخص ثالث"><span class="P__Icon___Eyr_h"><img
                                            class="Bg_35___2GtXe"
                                            src="{{asset('static/images/landings/third-party/transparent.png')}}"
                                            alt="خرید قسطی بیمه شخص ثالث"></span><span>خرید اقساطی بیمه شخص ثالث</span>
                                </h2>
                                <p><span>خرید قسطی بیمه شخص ثالث کمک بزرگی است به افرادی که می‌خواهند حق بیمه را به صورت قسطی بپردازند. امکان خرید قسطی بیمه به وسیله بیمیتو نیز وجود دارد کافی است در زمان خرید بررسی کنید از کدام شرکت می‌خواهید بیمه شخص ثالث را به صورت قسطی بخرید. پس از انتخاب و در زمان ثبت سفارش تعداد و قیمت اقساط به شما نشان داده می‌شود. بیمه شخص ثالث را می‌توانید طی دو قسط پرداخت کنید. نصف هزینه بیمه شخص ثالث در ابتدا باید به صورت پیش‌پرداخت واریز شود. باقیمانده را می‌توان طی دو قسط و به صورت چک صیاد در فاصله‌های زمانی یک و دو ماه از زمان خرید بیمه به حساب شرکت بیمه واریز کرد. یعنی تاریخ چک اول باید برای یک ماه بعد از خرید و تاریخ چک دوم باید برای دو ماه بعد از خرید باشد. ممکن است شرکتی که سال قبل از آن بیمه شخص ثالث خریده‌اید، بیمه‌نامه را به صورت قسطی ارایه ندهد و ناچار به تغییر شرکت خود باشید.</span>
                                </p>
                                <p><span>خرید قسطی بیمه شخص ثالث کمک بزرگی است به افرادی که می‌خواهند حق بیمه را به صورت قسطی بپردازند. امکان  <a
                                            href="https://bimito.com/installment-insurance" target="_blank">خرید قسطی بیمه</a>   به وسیله بیمیتو نیز وجود دارد کافی است در زمان خرید بررسی کنید از کدام شرکت می‌خواهید بیمه شخص ثالث را به صورت قسطی بخرید. پس از انتخاب و در زمان ثبت سفارش تعداد و قیمت اقساط به شما نشان داده می‌شود. بیمه شخص ثالث را می‌توانید طی چند قسط پرداخت کنید. بخشی از هزینه بیمه شخص ثالث در ابتدا باید به صورت پیش‌پرداخت واریز شود. باقیمانده را می‌توان طی چند قسط و به صورت چک صیاد در فاصله‌های زمانی چند ماه از زمان خرید بیمه به حساب شرکت بیمه واریز کرد. ممکن است شرکتی که سال قبل از آن بیمه شخص ثالث خریده‌اید، بیمه‌نامه را به صورت قسطی ارایه ندهد و ناچار به تغییر شرکت خود باشید.</span>
                                </p></div>
                        </div>
                        <!-- Panel 1 -->

                        <!-- Panel 2 -->
                        <div class="tab-pane fade" id="panel37" role="tabpanel">
                            <!-- Grid column -->
                            <div class="col-md-12">

                                <!-- Accordion wrapper -->
                                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                                    <!-- Accordion card -->
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                               aria-controls="collapseOne1">
                                                <h5 class="mb-0">
                                                    بیمه شخص ثالث چیست؟ <i class="fas fa-angle-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                            <div class="card-body">
                                                بیمه شخص ثالث یکی از انواع بیمه خودرو است که خسارات جانی و مالی وارد شده به اشخاص زیان‌دیده را پرداخت می‌کند. داشتن بیمه شخص ثالث برای تمامی وسایل نقلیه موتوری اجباری است.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->

                                    <!-- Accordion card -->
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingTwo2">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                               aria-expanded="false" aria-controls="collapseTwo2">
                                                <h5 class="mb-0">
                                                    منظور از شخص ثالث در بیمه شخص ثالث چیست؟ <i class="fas fa-angle-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                            <div class="card-body">
                                                در بیمه شخص ثالث، شخص اول شخص بیمه‌گزار (کسی که برای وسیله نقلیه‌ای بیمه شخص ثالث خریداری می‌کند)، شخص ثانی، بیمه‌گر یا شرکت بیمه و شخص ثالث فرد یا افرادی هستند در حادثه رانندگی زیان دیده‌اند به جز راننده مقصر.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->

                                    <!-- Accordion card -->
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingThree3">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                               aria-expanded="false" aria-controls="collapseThree3">
                                                <h5 class="mb-0">
                                                    داشتن بیمه شخص ثالث برای چه کسانی الزامی است؟ <i class="fas fa-angle-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                                            <div class="card-body">
                                                طبق قانون، داشتن بیمه شخص ثالث برای تمامی دارندگان وسایل نقلیه موتوری (سواری، مسافری، خودروی بارکش، موتور سیکلت و ...) الزامی است.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Panel 2 -->


                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <div class="col-md-4">
                <div class="jss46 jss85 jss93 jss113">
                    <div>
                        <div class="Companies___2091O">
                            <div class="Companies__Head___3Laqu">شرکت‌های ارائه‌دهنده بیمه ثالث</div>
                            <div class="Companies__Body___3ObOX">
                                <ul>
                                    <li>
                                        <a href="https://bimito.com/car-insurance/third-party-insurance/parsian-third-party-insurance">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/home/insurances/35x35/15.png')}}"
                                                    alt=""></div>
                                            بیمه شخص ثالث پارسیان</a></li>
                                    <li>
                                        <a href="https://bimito.com/car-insurance/third-party-insurance/asia-third-party-insurance">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/home/insurances/35x35/3.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث آسیا</a></li>
                                    <li>
                                        <a href="https://bimito.com/car-insurance/third-party-insurance/iran-third-party-insurance">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/home/insurances/35x35/7.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث ایران</a></li>
                                    <li>
                                        <a href="https://bimito.com/car-insurance/third-party-insurance/dana-third-party-insurance">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/home/insurances/35x35/5.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث دانا</a></li>
                                    <li>
                                        <a href="https://bimito.com/car-insurance/third-party-insurance/alborz-third-party-insurance">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/home/insurances/35x35/1.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث البرز</a></li>
                                    <li>
                                        <a href="https://bimito.com/car-insurance/third-party-insurance/pasargad-third-party-insurance">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/home/insurances/35x35/14.png')}}"
                                                    alt=""></div>
                                            بیمه شخص ثالث پاسارگاد</a></li>
                                    <li>
                                        <div class="CompanyImage___3ngHM"><img
                                                src="{{asset('static/images/home/insurances/35x35/11.png')}}" alt="">
                                        </div>
                                        بیمه شخص ثالث ملت
                                    </li>
                                    <li>
                                        <div class="CompanyImage___3ngHM"><img
                                                src="{{asset('static/images/home/insurances/35x35/8.png')}}" alt="">
                                        </div>
                                        بیمه شخص ثالث کارآفرین
                                    </li>
                                    <li>
                                        <div class="CompanyImage___3ngHM"><img
                                                src="{{asset('static/images/home/insurances/35x35/9.png')}}" alt="">
                                        </div>
                                        بیمه شخص ثالث کوثر
                                    </li>
                                    <li>
                                        <div class="CompanyImage___3ngHM"><img
                                                src="{{asset('static/images/home/insurances/35x35/18.png')}}" alt="">
                                        </div>
                                        بیمه شخص ثالث رازی
                                    </li>
                                    <li>
                                        <div class="CompanyImage___3ngHM"><img
                                                src="{{asset('static/images/home/insurances/35x35/17.png')}}" alt="">
                                        </div>
                                        بیمه شخص ثالث تعاون
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jss46 jss85 jss93 jss113">
                    <div>
                        <div class="Companies___2091O" style="margin: 20px 0px;">
                            <div class="Companies__Head___3Laqu">خودروهای متداول</div>
                            <div class="Companies__Body___3ObOX">
                                <ul>
                                    <li><a href="https://bimito.com/car-insurance/peugeot-206">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/206.png')}}" alt=""></div>
                                            بیمه شخص ثالث پژو 206</a></li>
                                    <li><a href="https://bimito.com/car-insurance/pride">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/Pride.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث پراید</a></li>
                                    <li><a href="https://bimito.com/car-insurance/peugeot-pars">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/Persia.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث پژو پارس</a></li>
                                    <li><a href="https://bimito.com/car-insurance/l90">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/L90.png')}}" alt=""></div>
                                            بیمه شخص ثالث ال 90</a></li>
                                    <li><a href="https://bimito.com/car-insurance/samand">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/Samand.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث سمند</a></li>
                                    <li><a href="https://bimito.com/car-insurance/tiba">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/Tiba.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث تیبا</a></li>
                                    <li><a href="https://bimito.com/car-insurance/peugeot-405">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/405.png')}}" alt=""></div>
                                            بیمه شخص ثالث پژو 405</a></li>
                                    <li><a href="https://bimito.com/car-insurance/sandro">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/Sandro.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث ساندرو</a></li>
                                    <li><a href="https://bimito.com/car-insurance/cerato">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/Cerato.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث سراتو</a></li>
                                    <li><a href="https://bimito.com/car-insurance/mazda3">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/Mazda.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث مزدا 3</a></li>
                                    <li><a href="https://bimito.com/car-insurance/brilliance">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/Brilliance.png')}}"
                                                    alt=""></div>
                                            بیمه شخص ثالث برلیانس</a></li>
                                    <li><a href="https://bimito.com/car-insurance/runna">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/Rana.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث رانا</a></li>
                                    <li><a href="https://bimito.com/car-insurance/dena">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/Dena.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث دنا</a></li>
                                    <li><a href="https://bimito.com/car-insurance/h30cross">
                                            <div class="CompanyImage___3ngHM"><img
                                                    src="{{asset('static/images/landings/cars/H30-crass.png')}}" alt="">
                                            </div>
                                            بیمه شخص ثالث اچ سی کراس</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jss46 jss85 jss93 jss113">
                    <div class="BlogPost___39nUs">
                        <div class="BlogPost__Head___1QKPv">مقالات مرتبط</div>
                        <div class="BlogPost__Body___1BHKY">
                            <div class="jss45" style="align-items: center; margin-bottom: 15px;">
                                <div class="jss46 jss75 jss105" style="display: flex;"><img
                                        class="BlogPosts__Image___3Po3Z"
                                        src="https://blog.bimito.com/wp-content/uploads/2020/05/a-150x150.jpg" alt="">
                                </div>
                                <div class="jss46 jss83 jss109"><p style="padding-right: 10px;"><a
                                            href="https://blog.bimito.com/1399-03-06-%d8%a2%d8%ae%d8%b1%db%8c%d9%86-%d8%ae%d8%a8%d8%b1-%d8%a7%d8%b2-%d8%ad%d8%b0%d9%81-%d8%a8%db%8c%d9%85%d9%87%e2%80%8c%d9%86%d8%a7%d9%85%d9%87-%da%a9%d8%a7%d8%ba%d8%b0%db%8c-%d8%a8%db%8c%d9%85%d9%87/">آخرین
                                            خبر از حذف نسخه کاغذی بیمه شخص ثالث!</a></p></div>
                            </div>
                            <div class="jss45" style="align-items: center; margin-bottom: 15px;">
                                <div class="jss46 jss75 jss105" style="display: flex;"><img
                                        class="BlogPosts__Image___3Po3Z"
                                        src="https://blog.bimito.com/wp-content/uploads/2020/01/1-1-150x150.jpg" alt="">
                                </div>
                                <div class="jss46 jss83 jss109"><p style="padding-right: 10px;"><a
                                            href="https://blog.bimito.com/1398-11-02-%d8%a8%d8%ae%d8%b4%d9%88%d8%af%da%af%db%8c-%d8%ac%d8%b1%db%8c%d9%85%d9%87-%d8%af%db%8c%d8%b1%da%a9%d8%b1%d8%af-%d8%a8%db%8c%d9%85%d9%87-%d8%b4%d8%ae%d8%b5-%d8%ab%d8%a7%d9%84%d8%ab/">خبر
                                            فوری! بخشودگی جریمه دیرکرد بیمه شخص ثالث</a></p></div>
                            </div>
                            <div class="jss45" style="align-items: center; margin-bottom: 15px;">
                                <div class="jss46 jss75 jss105" style="display: flex;"><img
                                        class="BlogPosts__Image___3Po3Z"
                                        src="https://blog.bimito.com/wp-content/uploads/2020/01/jaraem-150x150.png"
                                        alt=""></div>
                                <div class="jss46 jss83 jss109"><p style="padding-right: 10px;"><a
                                            href="https://blog.bimito.com/1398-11-02-%d8%a8%d8%ae%d8%b4%d9%88%d8%af%da%af%db%8c-%d8%ac%d8%b1%d8%a7%db%8c%d9%85-%d8%af%db%8c%d8%b1%da%a9%d8%b1%d8%af-%d8%a8%db%8c%d9%85%d9%87-%d8%ab%d8%a7%d9%84%d8%ab/">جریمه
                                            دیرکرد بیمه شخص ثالث به مناسبت دهه فجر بخشیده شد!</a></p></div>
                            </div>
                            <div class="jss45" style="align-items: center; margin-bottom: 15px;">
                                <div class="jss46 jss75 jss105" style="display: flex;"><img
                                        class="BlogPosts__Image___3Po3Z"
                                        src="https://blog.bimito.com/wp-content/uploads/2020/01/6-150x150.jpg" alt="">
                                </div>
                                <div class="jss46 jss83 jss109"><p style="padding-right: 10px;"><a
                                            href="https://blog.bimito.com/1398-10-24-%d8%a7%d8%b3%d8%aa%d8%b9%d9%84%d8%a7%d9%85-%d8%a8%db%8c%d9%85%d9%87-%d8%a8%d8%a7-%d9%be%d9%84%d8%a7%da%a9-%d9%85%d8%a7%d8%b4%db%8c%d9%86/">استعلام
                                            بیمه با پلاک ماشین را چطور انجام دهیم!</a></p></div>
                            </div>
                            <div class="jss45" style="align-items: center; margin-bottom: 15px;">
                                <div class="jss46 jss75 jss105" style="display: flex;"><img
                                        class="BlogPosts__Image___3Po3Z"
                                        src="https://blog.bimito.com/wp-content/uploads/2019/03/online-shopping-for-car-insurance-min-150x150.jpg"
                                        alt=""></div>
                                <div class="jss46 jss83 jss109"><p style="padding-right: 10px;"><a
                                            href="https://blog.bimito.com/1397-12-26-%da%86%da%af%d9%88%d9%86%d9%87-%d8%a8%d9%81%d9%87%d9%85%db%8c%d9%85-%d9%85%d8%a7%d8%b4%db%8c%d9%86-%d8%a8%db%8c%d9%85%d9%87-%d8%af%d8%a7%d8%b1%d8%af/">چگونه
                                            بفهمیم ماشین بیمه دارد ؟</a></p></div>
                            </div>
                            <div class="jss45" style="align-items: center; margin-bottom: 15px;">
                                <div class="jss46 jss75 jss105" style="display: flex;"><img
                                        class="BlogPosts__Image___3Po3Z"
                                        src="https://blog.bimito.com/wp-content/uploads/2019/01/8-4-150x150.jpg" alt="">
                                </div>
                                <div class="jss46 jss83 jss109"><p style="padding-right: 10px;"><a
                                            href="https://blog.bimito.com/1397-11-07-%d8%a8%db%8c%d9%85%d9%87-%d8%b4%d8%ae%d8%b5-%d8%ab%d8%a7%d9%84%d8%ab-%d8%b1%d8%a7%d9%86%d9%86%d8%af%d9%87-%d9%85%d8%ad%d9%88%d8%b1/">بیمه
                                            شخص ثالث راننده محور به کام مردم یا شرکت‌های بیمه؟</a></p></div>
                            </div>
                            <div class="jss45" style="align-items: center; margin-bottom: 15px;">
                                <div class="jss46 jss75 jss105" style="display: flex;"><img
                                        class="BlogPosts__Image___3Po3Z"
                                        src="https://blog.bimito.com/wp-content/uploads/2018/11/13150775_266884746990100_330834002_n-150x150.jpg"
                                        alt=""></div>
                                <div class="jss46 jss83 jss109"><p style="padding-right: 10px;"><a
                                            href="https://blog.bimito.com/1397-08-28-%d9%be%da%98%d9%88-206/">پژو 206،
                                            اسپرت، جوان‌پسند و خوش‌استایل!</a></p></div>
                            </div>
                            <div class="jss45" style="align-items: center; margin-bottom: 15px;">
                                <div class="jss46 jss75 jss105" style="display: flex;"><img
                                        class="BlogPosts__Image___3Po3Z"
                                        src="https://blog.bimito.com/wp-content/uploads/2018/08/Crash_of_a_Porsche11-1-150x150.jpg"
                                        alt=""></div>
                                <div class="jss46 jss83 jss109"><p style="padding-right: 10px;"><a
                                            href="https://blog.bimito.com/1397-05-28-%d9%82%d8%a7%d8%b9%d8%af%d9%87-%d9%86%d8%b3%d8%a8%db%8c/">با
                                            جدیدترین فرمول محاسبه خسارت در بیمه شخص ثالث آشنا شوید</a></p></div>
                            </div>
                            <div class="jss45" style="align-items: center; margin-bottom: 15px;">
                                <div class="jss46 jss75 jss105" style="display: flex;"><img
                                        class="BlogPosts__Image___3Po3Z"
                                        src="https://blog.bimito.com/wp-content/uploads/2018/08/what-is-mptl-insurance1-150x150.jpg"
                                        alt=""></div>
                                <div class="jss46 jss83 jss109"><p style="padding-right: 10px;"><a
                                            href="https://blog.bimito.com/1397-05-20-%d8%b3%d9%88%d8%a7%d9%84%d8%a7%d8%aa-%d8%a8%db%8c%d9%85%d9%87-%d8%b4%d8%ae%d8%b5-%d8%ab%d8%a7%d9%84%d8%ab/">8
                                            مورد از چالش برانگیزترین سوالات بیمه شخص ثالث</a></p></div>
                            </div>
                            <div class="jss45" style="align-items: center; margin-bottom: 15px;">
                                <div class="jss46 jss75 jss105" style="display: flex;"><img
                                        class="BlogPosts__Image___3Po3Z"
                                        src="https://blog.bimito.com/wp-content/uploads/2017/01/2-300x81-150x150.jpg"
                                        alt=""></div>
                                <div class="jss46 jss83 jss109"><p style="padding-right: 10px;"><a
                                            href="https://blog.bimito.com/1397-02-04-%d9%85%d8%ad%d8%a7%d8%b3%d8%a8%d9%87-%d8%a8%db%8c%d9%85%d9%87-%d8%b4%d8%ae%d8%b5-%d8%ab%d8%a7%d9%84%d8%ab/">محاسبه
                                            بیمه شخص ثالث در سال 99 چگونه انجام می‌شود؟</a></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jss44">
            <div class="jss45 jss84">
                <div class="TestImonational___12ocE">
                    <div class="Slider___1ar0U">
                        <div class="Customer__Comments___zy3ta">مشتریان بیمیتو چه می گویند؟</div>
                        <div style="overflow-x: hidden;">
                            <div class="react-swipeable-view-container"
                                 style="flex-direction: row; transition: transform 0.35s cubic-bezier(0.15, 0.3, 0.25, 1) 0s; direction: ltr; display: flex; will-change: transform; transform: translate(-200%, 0px);">
                                <div aria-hidden="true" data-swipeable="true"
                                     style="width: 100%; flex-shrink: 0; overflow: auto;">
                                    <div class="Slides___1XqW4">
                                        <div class="jss44 jss66 jss61">
                                            <div class="jss45 jss81 jss90 jss104">
                                                <div class="CommentsBox_Border___13SBX">
                                                    <div class="CommentsBox___2tDpi">
                                                        <div class="CommentsAuthor___3OWr2">محمد امیری</div>
                                                        <div>بیمیتو با ۷ هزار تومان ناقابل ‎دفترچه بیمه ‎تامین اجتماعی
                                                            رو میاد می‌گیره، می‌بره تمدید می‌کنه و مجدداً تحویل می‌ده!
                                                            یعنی سرویسی به این خوبی داریم مگه؟!
                                                        </div>
                                                        <div class="CommentsRate___2h_J5">
                                                            <div class="Customer_Rating___3TxzI"><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label></div>
                                                        </div>
                                                        <div class="LikeImg___1YDYO"><img
                                                                src="/static/images/landings/like.svg" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jss45 jss81 jss90 jss104">
                                                <div class="CommentsBox_Border___13SBX">
                                                    <div class="CommentsBox___2tDpi">
                                                        <div class="CommentsAuthor___3OWr2">مهدی حمیدبیگی</div>
                                                        <div>پنج‌شنبه ظهر بود که رفتم بیمه بخرم. اما دفتر بیمه بسته بود.
                                                            همونجا با موبایل سرچ کردم؛ دیدم میشه بیمه‌م رو آنلاین خرید.
                                                            خیلی سریع کارم رو راه انداختن و نذاشتن جریمه بیمه‌م بیشتر
                                                            شه.
                                                        </div>
                                                        <div class="CommentsRate___2h_J5">
                                                            <div class="Customer_Rating___3TxzI"><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label></div>
                                                        </div>
                                                        <div class="LikeImg___1YDYO"><img
                                                                src="/static/images/landings/like.svg" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jss45 jss81 jss90 jss104">
                                                <div class="CommentsBox_Border___13SBX">
                                                    <div class="CommentsBox___2tDpi">
                                                        <div class="CommentsAuthor___3OWr2">ایران‌دخت امیدوار</div>
                                                        <div>اینکه تو همون روزی که می‌خواستم بیمه‌م رو تمدید کنم تونستم
                                                            پیشنهادهای شرکت‌های مختلفو با هم مقایسه کنمو همون روز هم
                                                            بیمه‌م رو تحویل بگیرم خیلی برام جالب بود.
                                                        </div>
                                                        <div class="CommentsRate___2h_J5">
                                                            <div class="Customer_Rating___3TxzI"><label
                                                                    class=""></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label></div>
                                                        </div>
                                                        <div class="LikeImg___1YDYO"><img
                                                                src="/static/images/landings/like.svg" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-hidden="true" data-swipeable="true"
                                     style="width: 100%; flex-shrink: 0; overflow: auto;">
                                    <div class="Slides___1XqW4">
                                        <div class="jss44 jss66 jss61">
                                            <div class="jss45 jss81 jss90 jss104">
                                                <div class="CommentsBox_Border___13SBX">
                                                    <div class="CommentsBox___2tDpi">
                                                        <div class="CommentsAuthor___3OWr2">مهدی یزدان‌پناه</div>
                                                        <div>بیمه بدنه خریدم از بیمیتو. اینکه کارشناستون صادقانه تلاش
                                                            می‌کرد تا بتونم بهترین بیمه بدنه رو بخرم برام خیلی ارزشمند
                                                            بود.
                                                        </div>
                                                        <div class="CommentsRate___2h_J5">
                                                            <div class="Customer_Rating___3TxzI"><label
                                                                    class=""></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label></div>
                                                        </div>
                                                        <div class="LikeImg___1YDYO"><img
                                                                src="/static/images/landings/like.svg" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jss45 jss81 jss90 jss104">
                                                <div class="CommentsBox_Border___13SBX">
                                                    <div class="CommentsBox___2tDpi">
                                                        <div class="CommentsAuthor___3OWr2">آزاده حسینی</div>
                                                        <div>من ماشین صفرم رو براش از بیمیتو بیمه بدنه خریدم؛ انقدری هم
                                                            ازتون راضی بودم که به همه دوستام معرفی کردمتون.
                                                        </div>
                                                        <div class="CommentsRate___2h_J5">
                                                            <div class="Customer_Rating___3TxzI"><label
                                                                    class=""></label><label class=""></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label></div>
                                                        </div>
                                                        <div class="LikeImg___1YDYO"><img
                                                                src="/static/images/landings/like.svg" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jss45 jss81 jss90 jss104">
                                                <div class="CommentsBox_Border___13SBX">
                                                    <div class="CommentsBox___2tDpi">
                                                        <div class="CommentsAuthor___3OWr2">حمیدرضا عباسی</div>
                                                        <div>وقتی پرداخت رو انجام دادم پسرام گفتن فک کردی بیمه رو می‌شه
                                                            اینترنتی خرید؟!! اما وقتی پیکتون برام بیمه رو اورد بهشون
                                                            گفتم ببینین اینم بیمه!
                                                        </div>
                                                        <div class="CommentsRate___2h_J5">
                                                            <div class="Customer_Rating___3TxzI"><label
                                                                    class=""></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label></div>
                                                        </div>
                                                        <div class="LikeImg___1YDYO"><img
                                                                src="/static/images/landings/like.svg" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-hidden="false" data-swipeable="true"
                                     style="width: 100%; flex-shrink: 0; overflow: auto;">
                                    <div class="Slides___1XqW4">
                                        <div class="jss44 jss66 jss61">
                                            <div class="jss45 jss81 jss90 jss104">
                                                <div class="CommentsBox_Border___13SBX">
                                                    <div class="CommentsBox___2tDpi">
                                                        <div class="CommentsAuthor___3OWr2">جعغر صالحی شندی</div>
                                                        <div>همیشه دوست داشتم ماشینمو بیمه بدنه کنم اما نمی‌دونستم اصلاً
                                                            چه خسارتایی رو پوشش می‌ده. خلاصه با سرچ و ... به یکی از
                                                            مطالب بلاگتون رسیدم که خیلی ساده و کاربردی جواب سؤالامو
                                                            ‌داد. بعد که دیدم خودتون بیمه هم می‌فروشین دیگه از شما
                                                            خریدم.
                                                        </div>
                                                        <div class="CommentsRate___2h_J5">
                                                            <div class="Customer_Rating___3TxzI"><label
                                                                    class=""></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label><label
                                                                    class="Yellow___2TUJM"></label></div>
                                                        </div>
                                                        <div class="LikeImg___1YDYO"><img
                                                                src="/static/images/landings/like.svg" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Stepper___zrxuC">
                            <div class="jss289 jss291 jss722 jss725">
                                <button class="jss229 jss680 jss688" tabindex="0" type="button"><span class="jss681"><svg
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10 "
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path
                                                fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></span><span
                                        class="jss706"></span></button>
                                <div class="jss726">
                                    <div class="jss727"></div>
                                    <div class="jss727"></div>
                                    <div class="jss727 jss728"></div>
                                </div>
                                <button class="jss229 jss230 jss680 jss688 jss700" tabindex="-1" type="button"
                                        disabled=""><span class="jss681"> <svg aria-hidden="true" focusable="false"
                                                                               data-prefix="fas"
                                                                               data-icon="chevron-left"
                                                                               class="svg-inline--fa fa-chevron-left fa-w-10 "
                                                                               role="img"
                                                                               xmlns="http://www.w3.org/2000/svg"
                                                                               viewBox="0 0 320 512"><path
                                                fill="currentColor"
                                                d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_link')

@endsection

@section('script')

@endsection
