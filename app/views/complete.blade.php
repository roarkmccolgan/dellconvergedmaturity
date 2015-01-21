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
    <img src="{{{ asset('img/report.png')}}}" alt="Get your report sent to your inbox">
</header>
@stop

@section('main')
<section id="page" class="{{$colour}}">
    <h2 class="title">We can send you the full results directly to your mailbox</h2>
    <p>
        Want a full report that benchmarks your tech fitness and suggests how you can improve?
    </p>
    <p>
        Just provide us your name and email  and we’ll send you a link to download it.
    </p>

    {{ Form::open(array('url' => '/quiz/complete','id'=>'form-email-report','class'=>'clearfix')) }}
        <fieldset>
            <div class="row{{$errors->has('fname')?' error':''}}">
                <label>First Name*</label>
                <input type="text" class="req" value="" name="fname">
                <span>Enter your name</span>
            </div>
            <div class="row{{$errors->has('sname')?' error':''}}">
                <label>Surname*</label>
                <input type="text" class="req" value="" name="sname">
                <span>Enter your surname</span>
            </div>
            <div class="row{{$errors->has('email')?' error':''}}">
                <label>Email Address*</label>
                <input type="text" class="req email" value="" name="email">
                <span>Enter a valid email address</span>
            </div>
            <div class="row{{$errors->has('website')?' error':''}}">
                <label>Company website*</label>
                <input type="url" value="" name="website" class="req web" autocapitalize="off">
                <span>Enter a valid website address</span>
            </div>
            <div class="row">
                <label>Phone Number</label>
                <input type="text" value="" name="phone">
                <span>Enter a valid number</span>
            </div>
            <div class="terms">
                <label class="checkbox{{$errors->has('terms')?' error':''}}">
                    <input type="checkbox" class="req" name="terms">
                    I accept the terms 
                </label>
                <aside>
                    <h6>Terms &amp; Condtions*</h6>
                    <p>
                    	By registering with IDC, you accept our <a href="{{'/privacy'}}" target="_blank">Privacy Policy</a> and <a href="{{'http://www8.hp.com/uk/en/privacy/privacy.html'}}" target="_blank">HP Privacy Policy</a>
                        The information we collect will be shared with HP for the purpose of direct marketing
                    </p>
                </aside>
            </div>
            <em>* Required</em>
            <button class="button" type="submit">Email me my report</button>
        </fieldset>
    {{ Form::close() }}
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