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
    <p>Your results and what it means</p>
    <img src="{{{ asset('img/report.png')}}}">
</header>
@stop

@section('main')
<section id="page" class="{{$colour}}">
    <h2 class="title">We can send you the full results directly to your mailbox</h2>
    <form class="clearfix" id="form-email-report" action="?" method="post">
        <fieldset>
            <div class="row">
                <label>First Name*</label>
                <input type="text" class="req" value="" name="fname">
                <span>Enter your name</span>
            </div>
            <div class="row">
                <label>Surname*</label>
                <input type="text" class="req" value="" name="sname">
                <span>Enter your surname</span>
            </div>
            <div class="row">
                <label>Email Address*</label>
                <input type="text" class="req email" value="" name="">
                <span>Enter a valid email address</span>
            </div>
            <div class="row">
                <label>Phone Number</label>
                <input type="text" value="" name="">
                <span>Enter a valid number</span>
            </div>
            <div class="row">
                <label>Company website</label>
                <input type="text" value="" name="">
                <span>Enter a valid number</span>
            </div>
            <em>* Required</em>
            <div class="terms">
                <label class="checkbox">
                    <input type="checkbox" class="req" name="">
                    I accept the terms 
                </label>
                <aside>
                    <h6>Terms &amp; Condtions</h6>
                    <p>Details of terms and condictions to appear here, with a link to full terms and conditions</p>
                </aside>
            </div>
            <button class="button" type="submit">Email me my report</button>
        </fieldset>
    </form>
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