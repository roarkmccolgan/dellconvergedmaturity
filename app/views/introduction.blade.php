@extends('_layout.default')

@section('pagetitle', Lang::get('general.title'))


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
            <img src="{{asset('images/landing3.png')}}" class="img-responsive" alt="landing" width="100%">
        </div>
        <!-- End Image -->

        <div class="bg-grey content-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{Lang::get('general.title')}}</h2>
                        <h4 class="margin-right-20">{{Lang::get('general.landing')}}
                            <br><br>
                            <div class="text-center">
                                <a href="{{Request::root().'/'.getLang()}}{{'quiz/'.Session::get('startSection').'/page1'}}" class="btn-u" style="padding:15px 20px; font-size:18px;">{{Lang::get('general.startbut')}} &nbsp; <i class="fa fa-play"> </i></a>
                            </div>
                            <br>
                            <hr>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-primary">{{Lang::get('assets.more')}}</p>
                        <div class="clearfix" style="height: 20px;"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="media">
                            <div class="media-left">
                            <a href="{{Request::root().'/'.getLang()}}video">
                                <img src="{{Lang::get('assets.videoimage')}}" class="media-object" style="width: 220px; height: 124px;">
                            </a>
                            </div>
                            <div class="media-body">
                            <h4 class="media-heading">{{Lang::get('assets.video')}}</h4>
                                {{Lang::get('assets.videointro')}}<br/><br/>
                                <a href="{{Request::root().'/'.getLang()}}video" id="video" class="btn-u btn-md btn-primary">{{Lang::get('assets.playnow')}} <i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media">
                            <div class="media-left">
                            <a href="{{Request::root().'/'.getLang()}}infobrief/download">
                                <img src="{{asset('images/ibpreview.jpg')}}" class="media-object" style="width: 220px; height: 124px;">
                            </a>
                            </div>
                            <div class="media-body">
                            <h4 class="media-heading">{{Lang::get('assets.infobrief')}}</h4>
                                {{Lang::get('assets.infobriefintro')}}<br/><br/>
                                <a href="{{Request::root().'/'.getLang()}}infobrief/download" id="video" class="btn-u btn-md btn-primary">{{Lang::get('assets.downloadnow')}} <i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
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
@section('javascript')
@parent
<!-- JS Page Level -->

<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
@stop