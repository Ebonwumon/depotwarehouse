@extends('layout')

@section('imports')
<script src="/vendor/bower_components/platform/platform.js"></script>
<link rel="import" href="/components/post-card.html">
<link rel="import" href="/components/nav-panel.html">
@stop

@section('content')
<div class="blog-container" layout vertical center>
    <nav-panel>
        <ul>
            <li>
                <a href="{{ Wardrobe::route('posts.archive') }}">Archive</a>
            </li>
        </ul>
    </nav-panel>
    <div class="post-container">
        @yield('blog_content')
    </div>
</div>

@stop
