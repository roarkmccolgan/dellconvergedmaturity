<?php
    $isie='["html5","flash"]';
     if(preg_match('/(?i)msie [1-9]/',$_SERVER['HTTP_USER_AGENT']))
    {
       $isie = '["flash","html5"]';
    }
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false){
        $isie='["flash","html5"]';
    }
?>
@extends('_layout.default')

@section('pagetitle', Lang::get('general.title'))


@section('head')
@parent
<link href="//vjs.zencdn.net/4.9.0/video-js.css" rel="stylesheet">
<style type="text/css">
    /*Video js*/
    .video-js {padding-top: 56.32%}
    .vjs-fullscreen {padding-top: 0px}
    .vjs-default-skin.vjs-paused .vjs-big-play-button 
    {
    display: none;
    }
</style>
<meta name="description" content="">
@stop

@section('main')
<!--=== Content ===-->
<div class="container margin-bottom-40">
   <div class="row">
        <div class="bg-grey content-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="center-block" id="playvid">
                            <div class="idcvideo">
                                <div class="preview">
                                    <video id="iview_video" class="video-js vjs-default-skin vjs-big-play-centered video-js-fullscreen"
                                    controls preload="auto" width="640" height="360"
                                    poster="{{Lang::get('assets.videoimage')}}"
                                    data-setup='{ "example_option": true, "width": "auto", "height": "auto", "autoplay": true, "techOrder": <?=$isie;?> }'>
                                        <source src="{{Lang::get('assets.hdvideo')}}" type="video/mp4" data-quality="hd" data-res="HD" data-default="true">
                                        <source src="{{Lang::get('assets.sdvideo')}}" type="video/mp4" data-quality="sd" data-res="SD">
                                        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                    </video>
                                </div>
                                <div class="video_info">
                                    <span class="intro">{{Lang::get('assets.introduction')}}</span>
                                    <h2>{{Lang::get('assets.analystname')}}</h2>
                                    <strong>{{Lang::get('assets.analysttitle')}}</strong><br/>
                                    {{Lang::get('assets.analystarea')}}
                                    <div class="playbut" href="#"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <br>
                                <hr>
                    <div class="col-md-12">
                        <p class="text-primary">{{Lang::get('assets.more')}}</p>
                        <div class="clearfix" style="height: 20px;"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="media">
                            <div class="media-left">
                            <a href="{{Request::root().'/'.getLang()}}">
                                <img src="{{asset('images/assespreview.jpg')}}" class="media-object" style="width: 220px; height: 124px;">
                            </a>
                            </div>
                            <div class="media-body">
                            <h4 class="media-heading">{{Lang::get('assets.maturitybenchmark')}}</h4>
                                {{Lang::get('assets.maturitybenchmarkintro')}}<br/><br/>
                                <a href="{{Request::root().'/'.getLang()}}" id="video" class="btn-u btn-md btn-primary">{{Lang::get('assets.take')}} <i class="fa fa-list-ul"></i></i></a>
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

@stop
@section('javascript')
@parent
<!-- JS Page Level -->
<script src="//vjs.zencdn.net/4.9.0/video.js"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        $(".video_info").click(function() {
            if(myPlayer){
                myPlayer.paused() ? myPlayer.play() : myPlayer.pause();
            }
        });
    });
</script>
@stop