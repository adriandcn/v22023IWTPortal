<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
    <head>
        <!-- Page Title -->
    <title>iWaNaTrip - Viaja y vive la experiencia de conocer Ecuador - Aventura</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="iWaNaTrip es un espacio de busqueda para la red viajeros de todo el mundo, permite compartir el contenido de forma sencilla a traves de internet.
              iWaNaTrip es experiencia de vida. Deja de ser turista, conviertete en viajero. Viaja por el mundo y descubre Ecuador">
    <meta name="keywords" content="iWaNaTrip, Vive, Turismo, Transformacion digital, Guia turistica,  Marketing digital, Turistas, Viajeros, Viaja, Potencial turistico, Ecuador, Viajar,  Aventura, Tours">
    <meta name="author" content="iWaNaTrip group">
    <meta http-equiv="Content-Language" content="en">
    <meta NAME="robots" CONTENT="all | index | follow">
    <meta name="Revisit" content="3 days">
    <meta name="msvalidate.01" content="421B34D10B14BB413DA96450492A81E9" />

        <!-- Theme Styles -->
        <link rel="apple-touch-icon" href="{{ asset('/img/60x60_logo_iwana.png')}}">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/76x76logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/120x120logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/180x180logo_iwana.png')}}">
    <link rel="icon" sizes="180x180" href="{{ asset('/img/180x180logo_iwana.png')}}">


            <link rel="stylesheet" href="{{ asset('public_components/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public_components/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{ asset('/public_components/css/letras.css')}}">

        <link rel="stylesheet" href="{{ asset('public_components/css/animate.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public_components/components/owl-carousel/owl.carousel.css')}}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />
        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="{{ asset('public_components/components/magnific-popup/magnific-popup.css')}}">
        {!!HTML::script('js/sliderTop/jssor.slider.mini.js') !!}

  <!-- Main Style -->
        <link id="main-style" rel="stylesheet" href="{{ asset('public_components/css/style.css')}}">

        <!-- Updated Styles -->
        <link rel="stylesheet" href="{{ asset('public_components/css/updates.css')}}">

        <!-- Custom Styles -->
        <link rel="stylesheet" href="{{ asset('public_components/css/custom.css')}}">

        <!-- Responsive Styles -->
        <link rel="stylesheet" href="{{ asset('public_components/css/responsive.css')}}">


        <!-- CSS for IE -->
        <!--[if lte IE 9]>
            <link rel="stylesheet" type="text/css" href="{{ asset('public_components/css/ie.css')}}" />
        <![endif]-->


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->

        <style>

            a.morelink {
                text-decoration:none;
                outline: none;
            }
            .morecontent span {
                display: none;
            }

        </style>


        <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-85546019-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
    <div id="page-wrapper">
           <header id="header"  class="header-color-white" >
                @include('public_page.reusable.header')
            </header>


               @include('public_page.reusable.banner', ['titulo' =>""])

                <ul class="breadcrumbs">
                    <li><a href="#" onclick="window.location.href = '{!!asset('/')!!}'">{{ trans('publico/labels.label1')}}</a></li>
                    @if($region==1)
                    <li class="active"><a href="#">{{ trans('publico/labels.label13')}}</a></li>
                    @elseif($region==2)
                    <li class="active"><a href="#">{{ trans('publico/labels.label14')}}</a></li>
                    @elseif($region==3)
                    <li class="active"><a href="#">{{ trans('publico/labels.label15')}}</a></li>
                    @elseif($region==4)
                    <li class="active"><a href="#">{{ trans('publico/labels.label16')}}</a></li>

                    @endif

                </ul>

</div>


    <section id="content">
            <div class="container">
                <div id="main">
                    <div class="iso-container iso-col-3 style-masonry has-column-width blog-posts">
                       <div class="iso-item">
                            <article class="post post-masonry">
                               <div class="post-image">
                                    <div class="image">



                                           @if($region==1)

                                        <a href="{{ url(env('AWS_PUBLIC_URL').'images/img/mapa-costa.png')}}" class="soap-mfp-popup">
                                    <img src="{{ url(env('AWS_PUBLIC_URL').'images/img/mapa-costa.png')}}" alt="costa">

                                </a>

                                        @elseif($region==2)
                                          <a href="{{ url(env('AWS_PUBLIC_URL').'images/img/mapa-sierra.png')}}" class="soap-mfp-popup">
                                    <img src="{{ url(env('AWS_PUBLIC_URL').'images/img/mapa-sierra.png')}}" alt="sierra">

                                </a>

                                        @elseif($region==3)

                                        <img alt="" src="{{ url(env('AWS_PUBLIC_URL').'images/img/mapa-oriente.png')}}">
                                        @elseif($region==4)

                                        <img alt="galapagos" src="{{ url(env('AWS_PUBLIC_URL').'images/img/mapa-galapagos.png')}}">
                                        @endif


                                        <div class="image-extras">
                                            <a class="post-gallery" href="#"></a>
                                        </div>
                                    </div>
                                </div>

                            </article>
                        </div>


                        @foreach ($imagenes as $imagen)
                        <div class="iso-item">

                            <article class="post post-masonry">
                                <div class="post-image">
                                    <div class="image">
                                        <img alt="{{$imagen->filename)}}" src="{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$imagen->filename)}}">
                                        <div class="image-extras">
                                                   <?php
                        $nombre = str_replace(' ', '-', $imagen->nombre);
                        $nombre = str_replace('/', '-', $nombre);
                        ?>

                                            <a style="cursor:pointer" onclick="$('.woocommerce').LoadingOverlay('show'); window.location.href = '{!!asset('/detalle')!!}/{!!$nombre!!}/{!!$imagen->id_geo!!}'" class="post-gallery"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content">

                                    <div class="post-meta">

                                    </div>
                                    <h3 class="entry-title"><a href="#" onclick="$('.woocommerce').LoadingOverlay('show'); window.location.href = '{!!asset('/detalle')!!}/{!!$nombre!!}/{!!$imagen->id_geo!!}'">{!!$imagen->nombre!!}</a></h3>

                                </div>
                                <div class="post-action">
                                    <a style="cursor:pointer" onclick="$('.woocommerce').LoadingOverlay('show'); window.location.href = '{!!asset('/detalle')!!}/{!!$nombre!!}/{!!$imagen->id_geo!!}'" class="btn btn-sm style3 post-read-more">More</a>
                                </div>
                            </article>
                        </div>


                     @endforeach
                        <div class="iso-item">
                            <article class="post post-masonry">
                                <div class="video-container">
                                    <div class="full-video">


                                           @if($region==1)
                                        <iframe src="http://www.youtube.com/embed/uOkQlSGDbzY?wmode=transparent" allowfullscreen></iframe>


                                        @elseif($region==2)

                                        <iframe src="http://www.youtube.com/embed/CO_39m75Ogs?wmode=transparent" allowfullscreen></iframe>
                                        @elseif($region==3)

                                        <iframe src="http://www.youtube.com/embed/uOkQlSGDbzY?wmode=transparent" allowfullscreen></iframe>
                                        @elseif($region==4)

                                        <iframe src="http://www.youtube.com/embed/5gLNQ-Cww5c?wmode=transparent" allowfullscreen></iframe>
                                        @endif
                                    </div>
                                </div>
                                <div class="post-content no-author-img">
                                    <div class="post-meta">
                                        <span class="entry-author fn">By <a href="#">iWaNaTrip</a></span>
                                        <span class="entry-time"><span class="updated no-display">2019</span><span class="published">2016</span></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>
                                    </div>

                                </div>
                                <div class="post-action">
                                </div>
                            </article>
                        </div>



                    </div>
                    <div class="post-pagination">
                        <a href="#" class="nav-prev disabled" onclick="return false;"></a>
                        <div class="page-links">
                            <span class="active">1</span>

                        </div>
                        <a href="#" class="nav-next" data-page-num="2"></a>
                    </div>
                </div>
            </div>
        </section>



        <footer id="footer" class="style4">
          @include('public_page.reusable.footer')
        </footer>
    </div>

    <!-- Javascript -->

        {!! HTML::script('js/jquery.js') !!}
        {!!HTML::script('js/js_public/Compartido.js') !!}
        {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}

        <script type="text/javascript" src="{{ asset('public_components/js/jquery-2.1.3.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('public_components/js/jquery.noconflict.js')}}"></script>
        <script type="text/javascript" src="{{ asset('public_components/js/modernizr.2.8.3.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('public_components/js/jquery-migrate-1.2.1.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('public_components/js/jquery-ui.1.11.2.min.js')}}"></script>

        <!-- Twitter Bootstrap -->
        <script type="text/javascript" src="{{ asset('public_components/js/bootstrap.min.js')}}"></script>

        <!-- Magnific Popup core JS file -->
        <script type="text/javascript" src="{{ asset('public_components/components/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

        <!-- parallax -->
        <script type="text/javascript" src="{{ asset('public_components/js/jquery.stellar.min.js')}}"></script>

        <!-- waypoint -->
        <script type="text/javascript" src="{{ asset('public_components/js/waypoints.min.js')}}"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{ asset('public_components/components/owl-carousel/owl.carousel.min.js')}}"></script>

        <!-- plugins -->
        <script type="text/javascript" src="{{ asset('public_components/js/jquery.plugins.js')}}"></script>




@if(session('device')!='mobile')
        <script>
            jQuery(document).ready(function ($) {

                var jssor_1_SlideshowTransitions = [
                    {$Duration: 1800, $Opacity: 2}
                ];

                var jssor_1_options = {
                    $AutoPlay: true,
                    $SlideshowOptions: {
                        $Class: $JssorSlideshowRunner$,
                        $Transitions: jssor_1_SlideshowTransitions,
                        $TransitionsOrder: 1
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1360);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>

        <style>

            /* jssor slider bullet navigator skin 05 css */
            /*
            .jssorb05 div           (normal)
            .jssorb05 div:hover     (normal mouseover)
            .jssorb05 .av           (active)
            .jssorb05 .av:hover     (active mouseover)
            .jssorb05 .dn           (mousedown)
            */
            .jssorb05 {
                position: absolute;
            }
            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background:url ("{!!asset("https://iwannatrip.s3.us-east-1.amazonaws.com/images/img/internas/b05.png")!!}") no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb05 div { background-position: -7px -7px; }
            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
            .jssorb05 .av { background-position: -67px -7px; }
            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

            /* jssor slider arrow navigator skin 12 css */
            /*
            .jssora12l                  (normal)
            .jssora12r                  (normal)
            .jssora12l:hover            (normal mouseover)
            .jssora12r:hover            (normal mouseover)
            .jssora12l.jssora12ldn      (mousedown)
            .jssora12r.jssora12rdn      (mousedown)
            */
            .jssora12l, .jssora12r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 30px;
                height: 46px;
                cursor: pointer;
                background:url("{!!asset("https://iwannatrip.s3.us-east-1.amazonaws.com/images/img/internas/a12.png")!!}") no-repeat;
                overflow: hidden;
            }
            .jssora12l { background-position: -16px -37px; }
            .jssora12r { background-position: -75px -37px; }
            .jssora12l:hover { background-position: -136px -37px; }
            .jssora12r:hover { background-position: -195px -37px; }
            .jssora12l.jssora12ldn { background-position: -256px -37px; }
            .jssora12r.jssora12rdn { background-position: -315px -37px; }
        </style>
        @endif

        <!-- load page Javascript -->
        <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>


</body>
</html>