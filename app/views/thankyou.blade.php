@extends('_layout.default')

@section('pagetitle', $heading)


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
<!--=== Content ===-->
<div class="container margin-bottom-40">
    <div class="row">
        <div class="col-md-9">
        	<div class="row">
                <div class="col-md-10 col-md-offset-2">
	                <div class="headline"><h2>{{$sub1}}</h2></div>
	                <p>
	                    {{$sub2}}<br/>{{Lang::get('general.wait')}}</p>
	                <a class="btn-u" href="http://twitter.com/home/?status={{$tweet}}" target="_blank" style="margin-top: 20px;"><i class="fa fa-twitter"></i> Tweet</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('javascript')
@parent
<!-- JS Page Level -->

<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
@stop