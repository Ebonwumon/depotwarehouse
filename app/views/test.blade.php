@extends('layout')

@section('imports')
<script src="/vendor/bower_components/platform/platform.js"></script>
<link rel="import" href="/vendor/bower_components/core-animated-pages/core-animated-pages.html">
<link rel="import" href="/vendor/bower_components/core-animated-pages/transitions/cross-fade.html">
@stop

@section('content')
<style>
    #hero1 {
        position: absolute;
        top: 0;
        left: 0;
        width: 300px;
        height: 300px;
        background-color: orange;
    }
    #hero2 {
        position: absolute;
        top: 200px;
        left: 300px;
        width: 300px;
        height: 300px;
        background-color: orange;
    }
    #bottom1, #bottom2 {
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        height: 50px;
    }
    #bottom1 {
        background-color: blue;
    }
    #bottom2 {
        background-color: green;
    }
</style>
// hero-transition and cross-fade are declared elsewhere
<core-animated-pages transitions="hero-transition cross-fade">
    <section id="page1">
        <div id="hero1" hero-id="hero" hero></div>
        <div id="bottom1" cross-fade></div>
    </section>
    <section id="page2">
        <div id="hero2" hero-id="hero" hero></div>
        <div id="bottom2" cross-fade></div>
    </section>
</core-animated-pages>

test

@stop