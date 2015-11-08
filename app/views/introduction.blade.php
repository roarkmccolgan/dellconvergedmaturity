@extends('_layout.default')

@section('pagetitle', 'Dell Converge Infrastructure - Maturity Benchmark')


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
<!--=== Content ===-->
<div class="container margin-bottom-40">
   <div class="row">
        <!-- Image -->
        <div class="landing-image">
            <img src="images/landing3.png" class="img-responsive" alt="landing" width="100%" style="height:350px;">
        </div>
        <!-- End Image -->

        <div class="bg-grey content-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{Lang::get('general.title')}}</h2>
                        <h4 class="margin-right-20">{{Lang::get('general.landing')}}
                            <br><br>
                            <a href="{{'quiz/'.Session::get('startSection').'/page1'}}" class="btn-u pull-right margin-right-20" style="padding:15px 20px; font-size:18px;">{{Lang::get('general.startbut')}} &nbsp; <i class="fa fa-play"> </i></a>
                            <br><br><br>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!--=== End Content ===-->
@if($return_visitor)
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
@endif

@stop
@section('pagescript')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.1.min.js')}}"><\/script>')</script>
@if($return_visitor)
    <script src="{{ asset('js/jquery.leanModal.min.js')}}"></script>
@endif

<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/main.js')}}}"></script>
@stop