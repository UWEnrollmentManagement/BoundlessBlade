<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    @section('metahead')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            @yield('title')
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--<base href="{{ baseHref }}" target="_self">--}}

        <link rel='shortcut icon' type='image/x-icon' href='{{ asset('vendor/uwdoem/boundless-blade/img/favicon.ico') }}'/>
    @show

    @section('head')

        <script>
            var uw = {"siteUrl": "../assets/"};
        </script>

        <!--[if lt IE 9]>
        <script src="{{ asset('vendor/uwdoem/boundless-blade/js/html5shiv.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/uwdoem/boundless-blade/js/respond.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/uwdoem/boundless-blade/js/site.js') }}" type="text/javascript"></script>
        <link rel='stylesheet' href='{{ asset('vendor/uwdoem/boundless-blade/css/ie.css') }}' type='text/css' media='all'/>
        <![endif]-->

        <link rel="stylesheet" href="{{ asset('vendor/uwdoem/boundless-blade/uw.css') }}"/>
        <link rel="stylesheet" href="{{ asset('vendor/uwdoem/boundless-blade/wp-style.css') }}"/>

        <!--File uw.css breaks the small header; this statement fixes it.-->
        <style media="screen" type="text/css">
            .uw-thinstrip nav {
                display: inline;
            }

            .uw-thinstrip div nav {
                display: inline-block;
            }
        </style>

    @show
</head>

<body>
@section('body')

    <div id='uwsearcharea' aria-hidden="true" class="uw-search-bar-container"></div>

    <div id="uw-container">

        <div id="uw-container-inner">
            @yield('navheader')
            <div id="notification-area">

            </div>

            <div id="page-container" class="container page-width">

                @yield('content')

            </div>

            <br class="footer-break">

            @yield('footer')
        </div>
    </div>

    </div>

@show
</body>
</html>