<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DEPOT WAREHOUSE Software is an Edmonton, Alberta based software development company that specializes in dynamic webapps to manage your data">

    <title>DEPOT WAREHOUSE Software Inc.</title>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/forms.css">


</head>

<body>
    <nav class="header">
        <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href="#">DEPOT WAREHOUSE Software</a>

            <ul>
                <li class="pure-menu-selected"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    @include('partials/notification')

    <div class="splash-container">
        <div class="splash">
            <h1 class="splash-head">DEPOT WAREHOUSE Software</h1>
            <p class="splash-subhead">
                Web software that deals with your junk, so your life gets to suck less
            </p>
        </div>
    </div>


    <div class="content-wrapper">
        <a id="about" class="anchor"></a>
        <div class="content section-1">
            <h2 class="content-header is-centered">What we do</h2>
            <div class="pure-g">
                <div class="l-box pure-u-1 pure-u-md-1-3">
                    <h3 class="content-subhead">Create data sanity and management</h3>
                    <p>
                        We will examine your business processes and data intake and create software to streamline
                        the process, catalog the data and make it easy for you to analyze and generate reports
                        that allow you to make decisions that benefit you and your business most.
                    </p>
                </div>

                <div class="l-box pure-u-1 pure-u-md-1-3">
                    <h3 class="content-subhead">Streamline client interfacing</h3>
                    <p>
                        Nothing frustrates a client more than when they want to contact or do business with you
                        and the site is confusing and cumbersome. We will make portals for your client to easily
                        communicate with you so that your business can achieve its maximum potential.
                    </p>
                </div>

                <div class="l-box pure-u-1 pure-u-md-1-3">
                    <h3 class="content-subhead">Write beautiful code</h3>
                    <p>
                        We hope we have a long-lasting relationship with you, but if you ever hire on another developer
                        they'll be overjoyed with the quality of the codebase they received. We write solid, testable
                        code to make changes and feature additions a breeze.
                    </p>
                </div>
            </div>
        </div>

        <div class="content section-2">
            <a id="contact" class="anchor"></a>
            <h2 class="content-header is-centered">
                <i class="fa fa-envelope"></i>
                Drop us a line
            </h2>

            <div class="l-box-lrg is-centered">
                @include('errors')
                {{ Form::open(array('route' => 'home.mail', 'class' => "pure-form pure-form-aligned", 'style' => "position: relative; left:-80px;", 'method' => 'POST')) }}
                    <fieldset>

                        <div class="pure-control-group">
                            <label for="name">Your Name</label>
                            <input name="name" type="text" placeholder="Your Name" class="pure-input-1-2">
                        </div>

                        <div class="pure-control-group">
                            <label for="from">Your Email</label>
                            <input name="from" type="email" placeholder="Your Email" class="pure-input-1-2">
                        </div>

                        <div class="pure-control-group">
                            <label for="message">Your Message</label>
                            <textarea name="message" rows="5" class="pure-input-1-2"></textarea>
                        </div>

                        <div class="pure-controls">
                            <button type="submit" class="pure-button pure-button-lightblue">
                                <i class="fa fa-send"></i>
                                Send Message
                            </button>
                        </div>

                    </fieldset>
                {{ Form::close() }}
            </div>

        </div>

        <div class="footer l-box is-centered">
            &copy; DEPOT WAREHOUSE Software Inc. 2014
        </div>
    </div>


</body>

</html>