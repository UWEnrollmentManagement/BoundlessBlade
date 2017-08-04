{% extends "page/base.twig" %}


{% block head %}
    <link rel="stylesheet" href="vendor/uwdoem/boundless/assets/uw-brand/css/full.css">
    {{ parent() }}
{% endblock head %}


{% block navheader %}
    <header class="uw-thinstrip">

        <div class='align-right'>
            <nav class="uw-thin-strip-nav">
                <ul class="uw-thin-links">
                    <li>
                        <a href="http://uw.edu/studentlife" title=
                        "Students">Students</a>
                    </li>

                    <li>
                        <a href="http://uw.edu/parents" title=
                        "Parents">Parents</a>
                    </li>

                    <li>
                        <a href="http://uw.edu/facultystaff" title=
                        "Faculty &amp; Staff">Faculty &amp; Staff</a>
                    </li>

                    <li>
                        <a href="http://uw.edu/alumni" title=
                        "Alumni">Alumni</a>
                    </li>
                </ul>
            </nav>
            <nav aria-label="search and quick links" id="search-quicklinks" role="navigation">


                <button class='uw-search' aria-haspopup="true" aria-owns="uwsearcharea" aria-controls="uwsearcharea" aria-expanded="false">Open search area
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18.776px" height="51.062px" viewBox="0 0 18.776 51.062" enable-background="new 0 0 18.776 51.062" xml:space="preserve">
            <g><path fill="#FFFFFF" d="M3.537,7.591C3.537,3.405,6.94,0,11.128,0c4.188,0,7.595,3.406,7.595,7.591
                c0,4.187-3.406,7.593-7.595,7.593C6.94,15.185,3.537,11.778,3.537,7.591z M5.245,7.591c0,3.246,2.643,5.885,5.884,5.885
                c3.244,0,5.89-2.64,5.89-5.885c0-3.245-2.646-5.882-5.89-5.882C7.883,1.71,5.245,4.348,5.245,7.591z"></path>

                <rect x="2.418" y="11.445" transform="matrix(0.7066 0.7076 -0.7076 0.7066 11.7842 2.0922)" fill="#FFFFFF" width="1.902" height="7.622"></rect>
            </g>
                        <path fill="#FFFFFF" d="M3.501,47.864c0.19,0.194,0.443,0.29,0.694,0.29c0.251,0,0.502-0.096,0.695-0.29l5.691-5.691l5.692,5.691
              c0.192,0.194,0.443,0.29,0.695,0.29c0.25,0,0.503-0.096,0.694-0.29c0.385-0.382,0.385-1.003,0-1.388l-5.692-5.691l5.692-5.692
              c0.385-0.385,0.385-1.005,0-1.388c-0.383-0.385-1.004-0.385-1.389,0l-5.692,5.691L4.89,33.705c-0.385-0.385-1.006-0.385-1.389,0
              c-0.385,0.383-0.385,1.003,0,1.388l5.692,5.692l-5.692,5.691C3.116,46.861,3.116,47.482,3.501,47.864z"></path>
            </svg>

                </button>

                <button class='uw-quicklinks' aria-haspopup="true" aria-expanded="false">Quick Links<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15.63px" height="69.13px" viewBox="0 0 15.63 69.13" enable-background="new 0 0 15.63 69.13" xml:space="preserve"><polygon fill="#FFFFFF" points="12.8,7.776 12.803,7.773 5.424,0 3.766,1.573 9.65,7.776 3.766,13.98 5.424,15.553 12.803,7.78"></polygon><polygon fill="#FFFFFF" points="9.037,61.351 9.036,61.351 14.918,55.15 13.26,53.577 7.459,59.689 1.658,53.577 0,55.15 5.882,61.351 5.882,61.351 5.884,61.353 0,67.557 1.658,69.13 7.459,63.019 13.26,69.13 14.918,67.557 9.034,61.353"></polygon></svg></button>
            </nav>
        </div>

        <div class="container page-width">
            <a class="uw-patch" href="http://uw.edu" tabindex="-1" title=
            "University of Washington Home">Home</a> <a class="uw-wordmark"
                                                        href="http://uw.edu" title=
                                                        "University of Washington Home">Home</a>
        </div>
    </header>
{% endblock navheader %}


{% block footer %}
    <div class="uw-footer">

        <a href="http://www.washington.edu" class="footer-wordmark">University of Washington</a>

        <a href="http://www.washington.edu/boundless/be-boundless/"><h3 class="be-boundless">Be boundless</h3></a>

        <h4>Connect with us:</h4>

        <nav role="navigation" aria-label="social networking">
            <ul class="footer-social">
                <li><a class="facebook" href="http://www.facebook.com/UofWA">Facebook</a></li>
                <li><a class="twitter" href="http://twitter.com/UW">Twitter</a></li>
                <li><a class="instagram" href="http://instagram.com/uofwa">Instagram</a></li>
                <li><a class="tumblr" href="http://uofwa.tumblr.com/">Tumblr</a></li>
                <li><a class="youtube" href="http://www.youtube.com/user/uwhuskies">YouTube</a></li>
                <li><a class="linkedin" href="http://www.linkedin.com/company/university-of-washington">LinkedIn</a></li>
                <li><a class="pinterest" href="http://www.pinterest.com/uofwa/">Pinterest</a></li>
                <li><a class="vine" href="https://vine.co/uofwa">Vine</a></li>
                <li><a class="google" href="https://plus.google.com/+universityofwashington/posts">Google+</a></li>
            </ul>
        </nav>

        <nav role="navigation" aria-label="footer links">
            <ul class="footer-links">
                <li><a href="http://www.uw.edu/accessibility">Accessibility</a></li>
                <li><a href="http://uw.edu/home/siteinfo/form">Contact Us</a></li>
                <li><a href="http://www.washington.edu/jobs">Jobs</a></li>
                <li><a href="http://www.washington.edu/safety">Campus Safety</a></li>
                <li><a href="http://myuw.washington.edu/">My UW</a></li>
                <li><a href="http://www.washington.edu/admin/rules/wac/rulesindex.html">Rules Docket</a></li>
                <li><a href="http://www.washington.edu/online/privacy/">Privacy</a></li>
                <li><a href="http://www.washington.edu/online/terms/">Terms</a></li>
            </ul>
        </nav>

        <p role="contentinfo">&copy; {{ "now"|date("Y") }} University of Washington  |  Seattle, WA</p>

    </div>
{% endblock footer %}