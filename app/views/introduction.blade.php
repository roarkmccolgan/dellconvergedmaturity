@extends('_layout.default')

@section('pagetitle', 'How TechFit is Your Business?')


@section('head')
@parent
<meta name="description" content="">
@stop

@section('header')
<header id="intro">
    <h1>How TechFit<br/> is Your Business?</h1>
    <h2>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet.</h2>
    <a href="{{'quiz/'.Session::get('startSection').'/page1'}}" class="button-big">Take the Quiz Now</a>
</header>
@stop

@section('pagescript')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.1.min.js')}}"><\/script>')</script>

<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/main.js')}}}"></script>
@stop