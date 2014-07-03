@extends('layout')

@section('imports')
<script src="/vendor/bower_components/platform/platform.js"></script>
<link rel="import" href="/components/post-card.html">
<link rel="import" href="/components/nav-card.html">
@stop

@section('content')
<div class="blog-container" layout vertical center>
    <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
            <div style="position:relative;">
                <nav-card></nav-card>
            </div>

        </div>
        <div class="pure-u-1 pure-u-md-2-3">
            @yield('blog_content')
        </div>


    </div>
</div>

@stop
