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
    {% block metahead %}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            {{ title }}
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <base href="{{ baseHref }}" target="_self">

        <link rel='shortcut icon' type='image/x-icon' href='vendor/uwdoem/boundless/assets/uw-brand/img/favicon.ico'/>

    {% endblock metahead %}

    {% block head %}

        {% include "page/athens-css.twig" %}

        {% include "page/athens-js.twig" %}

        <!--jQuery UI-->
        <link rel="stylesheet" href="vendor/uwdoem/boundless/assets/css/jquery-ui/jquery-ui.min.css">
        <script src="vendor/uwdoem/boundless/assets/js/jquery-ui.min.js"></script>

        <!--Bootstrap-->
        <link rel="stylesheet" href="vendor/uwdoem/boundless/assets/css/bootstrap.min.css">
        <script src="vendor/uwdoem/boundless/assets/js/bootstrap.min.js"></script>

        <!--Summernote-->
        <link rel="stylesheet" href="vendor/uwdoem/boundless/assets/css/summernote.css">
        <script src="vendor/uwdoem/boundless/assets/js/summernote.min.js"></script>

        <!--Chosen.js-->
        <link rel="stylesheet" href="vendor/uwdoem/boundless/assets/css/chosen.min.css">
        <script src="vendor/uwdoem/boundless/assets/js/chosen.jquery.min.js"></script>

        <!--bootstrap-notify-->
        <link rel="stylesheet" href="vendor/uwdoem/boundless/assets/css/animate.css">
        <script src="vendor/uwdoem/boundless/assets/js/bootstrap-notify.min.js"></script>

        <!--Override athens.alert to use bootstrap-notify-->
        <script src="vendor/uwdoem/boundless/assets/js/alert.js"></script>

        <script type='text/javascript' src='vendor/uwdoem/boundless/assets/uw-brand/js/underscore.min.js'></script>
        <script type='text/javascript' src='vendor/uwdoem/boundless/assets/uw-brand/js/backbone.min.js'></script>

        <script>
            var uw = {"siteUrl": "../assets/"};
        </script>

        <!--[if lt IE 9]>
        <script src="vendor/uwdoem/boundless/assets/uw-brand/js/html5shiv.js" type="text/javascript"></script>
        <script src="vendor/uwdoem/boundless/assets/uw-brand/js/respond.js" type="text/javascript"></script>
        <script src="vendor/uwdoem/boundless/assets/uw-brand/js/site.js" type="text/javascript"></script>
        <link rel='stylesheet' href='assets/uw-brand/css/ie.css' type='text/css' media='all'/>
        <![endif]-->

        <link rel="stylesheet" href="vendor/uwdoem/boundless/assets/uw-brand/uw.css"/>
        <link rel="stylesheet" href="vendor/uwdoem/boundless/assets/uw-brand/wp-style.css"/>

        <!--File uw.css breaks the small header; this statement fixes it.-->
        <style media="screen" type="text/css">
            .uw-thinstrip nav {
                display: inline;
            }

            .uw-thinstrip div nav {
                display: inline-block;
            }
        </style>

        <link rel="stylesheet" href="vendor/uwdoem/boundless/assets/css/style.css"/>
    {% endblock head %}

    {% block project_head %}

        {% for cssFile in projectCSS %}
    <link rel="stylesheet" href="{{ cssFile }}">
        {% endfor %}

        {% for jsFile in projectJS %}
        <script type='text/javascript' src='{{ jsFile }}'></script>
        {% endfor %}

    {% endblock project_head %}
</head>
<body id="{{ id }}" class="{{ pageType }} {{ classes|join(' ') }}">
{% block body %}

    <div class="loading-gif hidden"></div>

    <div id="mask-screen">

        <div class="search-div">
            <div class="section-label">Search Criteria</div>
            <div id="search-criteria-area"></div>
        </div>

    </div>

    <div id='uwsearcharea' aria-hidden="true" class="uw-search-bar-container"></div>

    <div id="uw-container">

        <div id="uw-container-inner">
            {% block navheader %}{% endblock navheader %}
            <div id="notification-area">

            </div>

            <div id="page-container" class="container page-width">

                {% block content %}
                    {% for writable in writables  %}
                        {{ writable|write|raw }}
                    {% endfor %}
                {% endblock content %}

            </div>

            <br class="footer-break">

            {% block footer %}{% endblock footer %}
        </div>
    </div>

    </div>
{% endblock body %}
<script type='text/javascript'>
    $('textarea.html').summernote();
    $('.chosen select, select.chosen').chosen();

    athens.ajax_section.registerPostSectionAction(function() {
        $('textarea.html').summernote();
        $('.chosen select, select.chosen').chosen();
    });

</script>
</body>
</html>