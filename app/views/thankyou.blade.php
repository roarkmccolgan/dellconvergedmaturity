@extends('_layout.default')

@section('pagetitle', $heading)


@section('head')
@parent
<meta name="description" content="">
@stop

@section('header')
<header id="side">
    <h1>How TechFit is Your Business?</h1>
    
    <h2>{{$heading}}</h2>
    <p>{{$sub1}}</p>
</header>
@stop

@section('main')
<section id="page" class="{{$colour}}">
    <h2 class="title">Tweet about TechFitness</h2>
    <a class="button-tweet" href="http://twitter.com/home/?status={{$tweet}}" target="_blank">{{rawurldecode($tweet)}}</a>
    <div style="float: right"><em><a href="http://twitter.com/home/?status={{$tweet}}" target="_blank" style="color: #fff">Click to tweet!</a></em></div>
</section>
@stop

@section('pagescript')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.1.min.js')}}"><\/script>')</script>

<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/main.js')}}}"></script>
@if (isset($script))
<script>
$(function() {
    @foreach ($script as $s)
       {{ $s }}
    @endforeach
});
</script>
@endif
@stop