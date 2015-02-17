@extends('_layout.default')

@section('pagetitle', 'How TechFit is Your Business?')


@section('head')
@parent
<meta name="description" content="">
@stop

@section('header')
<header id="intro">
    <h1>How TechFit<br/> is Your Business?</h1>
    <h2>A New Style of IT is emerging. Take this 5-10 minute quiz and see how your tech fitness compares to industry benchmarks in key areas such as security and mobility, plus receive a report on how to become tech fitter.</h2>
    <a href="{{'quiz/'.Session::get('startSection').'/page1'}}" class="button-big">Take the quiz</a>
</header>
@stop
@if($return_visitor)
    @section('main')
    <div id="return">
    	<h1>Welcome back!</h1><br />
        <p>
        	We noticed you started the quiz but have not complete it.
            <br/><br/>
        	Would you like to continue where you left off or would you like to restart?
        </p>
        <br/><br/>
        <a href="/continue" class="button-big">Continue</a>
        <a href="/restart" class="button-big">Restart</a>
    </div>
    <a id="trigger_id" href="#return">&nbsp;</a>
    @stop
@endif
@section('pagescript')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.1.min.js')}}"><\/script>')</script>
@if($return_visitor)
    <script src="{{ asset('js/jquery.leanModal.min.js')}}"></script>
@endif

<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/main.js')}}}"></script>
@stop