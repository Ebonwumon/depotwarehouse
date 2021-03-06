@extends('layout')

@section('imports')
<script src="/vendor/bower_components/platform/platform.js"></script>
<link rel="import" href="/components/post-card.html">
<link rel="import" href="/components/nav-panel.html">
@stop

@section('content')
<div class="blog-container" layout vertical center>
    <div class="post-container">
        @yield('blog_content')
    </div>
    <nav-panel>
        <ul>
            @if (Route::currentRouteName() == "wardrobe.index")
            <li>
                <a href="{{ Wardrobe::route('posts.archive') }}">Archive</a>
            </li>
            @else
            <li>
                <a href="{{ Wardrobe::route('index') }}">Home</a>
            </li>
            @endif
        </ul>
    </nav-panel>
</div>

@stop
