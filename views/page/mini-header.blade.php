@extends('boundless-blade::page.base')


@section('head')
    @parent
    <link rel="stylesheet" href="{{ asset('vendor/uwdoem/boundless-blade/css/mini.css') }}">
    <style>
        /* In mini-header, on small logo 'W' hover, don't go to big golden 'W'. */
        .uw-thinstrip .uw-patch:hover { background: url({{ asset('vendor/uwdoem/boundless-blade/assets/svg/uw-sprite-mini.svg') }}) no-repeat 0 -3px transparent }
    </style>
@endsection


@section('navheader')
    <header class="uw-thinstrip" style="z-index:30">
        <nav class="uw-thin-strip-nav">
            <ul class="uw-thin-links">
                <li>
                    <a href="http://myuw.washington.edu" title=
                    "MyUW">MyUW</a>
                </li>

                <li>
                    <a href="http://uw.edu/calendar" title=
                    "UW Calendar">Calendar</a>
                </li>

                <li>
                    <a href="http://uw.edu/maps" title=
                    "UW Maps">Maps</a>
                </li>

                <li>
                    <a href="http://uw.edu/directory" title=
                    "UW Directories">Directories</a>
                </li>
            </ul>
        </nav>

        <div class="container" style="position:absolute;left:2.5%">
            <a class="uw-patch" href="http://uw.edu" tabindex="-1" title=
            "University of Washington Home">Home</a> <a class="uw-wordmark"
                                                        href="http://uw.edu" title=
                                                        "University of Washington Home">Home</a>
        </div>
    </header>
@endsection


@section('footer')
    <div class="uw-footer internal-use-footer">

        <a href="http://www.washington.edu" class="footer-wordmark">University of Washington</a>

        <p role="contentinfo" style="margin:0">&copy; {{ "now"|date("Y") }} University of Washington  |  Seattle, WA</p>


    </div>
@endsection