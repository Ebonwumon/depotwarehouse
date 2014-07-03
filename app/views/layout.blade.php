<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DEPOT WAREHOUSE Software is an Edmonton, Alberta based software development company that specializes in dynamic webapps to manage your data">

    <title>@yield('title', 'DEPOT WAREHOUSE Software Inc.')</title>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/forms.css">

    @yield('imports', '')

</head>
<body unresolved touch-action="auto">
    <nav class="header">
        <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href="#">DEPOT WAREHOUSE Software</a>

            <ul>
                <li class="pure-menu-selected"><a href="{{ URL::route('home.index') }}#">Home</a></li>
                <li><a href="{{ URL::route('home.index') }}#about">About</a></li>
                <li><a href="{{ URL::to('blog') }}">Blog</a></li>
                <li><a href="{{ URL::route('home.index') }}#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    @include('partials/notification')
    <div class="wrap">
        @yield('content')
    </div>

</body>

</html>