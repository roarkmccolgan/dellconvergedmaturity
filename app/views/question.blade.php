@extends('_layout.default')

@section('pagetitle', $heading)


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
<div class="container margin-bottom-20">
    @if(Session::has('flash_message'))
    <div class="alert alert-warning fade in">
        {{Session::get('flash_message')}}
    </div>
    @endif
    <div class="row">
        <div class="col-md-3">
            <div class="widget">
                <ul class="categories">
                    @foreach ($menu as $key=>$pages)
                    <li class="{{$pages['complete'] || $key==$section ? 'passed':''}} {{$key==$section ? 'base':''}}">
                        <a tabindex="-1" class="" href="{{URL::to('quiz/'.$key.'/page1') }}">{{$pages['title']}}</a> <!-- class="base" for highlight-->
                        <div class="subprogress">
                            @foreach ($pages['pages'] as $pkey => $qpage)
                            
                            <a href="{{URL::to('quiz/'.$key.'/'.$pkey) }}" title="{{$qpage['title']}}"><i class="fa {{ $qpage['done'] ? ($pkey == 'page'.$page && $key==$section ? 'fa-check-circle-o':'fa-check') : ($pkey == 'page'.$page && $key==$section ? 'fa-circle':'fa-genderless')}}"></i></a>
                            @endforeach                            
                        </div>
                        @if($key==$section)
                        <div class="subprogresstext">
                            {{$page.' '.Lang::get('general.of').' '.$pages['numpages']}}
                        </div>
                        @endif
                        <div class="clearfix"></div>
                    </li>
                    @endforeach
                </ul>
                <a href="#" class="btn-u historyback" style="margin-top:5px;"><i class="fa fa-arrow-left"> </i> {{Lang::get('general.back')}} </a>
                <a href="/{{getLang()}}" class="btn-u" style="margin-top:5px;"><i class="fa fa-undo"></i> {{Lang::get('general.restart')}}</a>
            </div>
        </div>

        <div class="col-md-9">
            <h3 class="heading-sm">{{Lang::get('general.progress')}} ({{ $progress }}%)</h3>
            <div class="progress progress-u progress-xs rounded">
                <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progress }}%; background:#0081BF;"></div>
            </div>
            <div class="headline">
                <h2> <strong>{{$title}}</strong></h2>
            </div>
            <!-- <p><font color="red"> All fields are required </font></p> -->
            <hr class="margin-15">

            @foreach ($questions as $question)
            <h2>{{$question['question']}}</h2>
            {{ Form::open(array('url' => getLang().'quiz/'.$section.'/page'.$page,'id'=>'form-question','class'=>'clearfix question')) }}
            {{ Form::errors($errors) }}
                {{Form::hidden('section', $section);}}
                {{Form::hidden('page', $page);}}
                @foreach ($questions as $num=>$q)
                    @if ($q['type'] == 'radio')
                        {{ Form::idcCheckRad($num,$q,'radio',$page) }}
                    @elseif ($q['type'] == 'slider')
                        {{ Form::idcSlider($num,$q,$page) }}
                    @elseif ($q['type'] == 'checkbox')
                        {{ Form::idcCheckbox($num,$q,$page) }}
                    @elseif ($q['type'] == 'groupradio')
                        {{ Form::idcGroup($num,$q,$page,'radio') }}
                    @elseif ($q['type'] == 'radio')
                        {{ Form::idcIcon($section,$q,$page,$num) }}
                    @elseif ($q['type'] == 'button')
                        {{ Form::idcButton($section,$q,$page) }}
                    @elseif ($q['type'] == 'text')
                        {{ Form::idcInput($num,$q,$page) }}
                    @endif
                @endforeach
            @endforeach
            {{ Form::close() }}
        </div>
    </div>
</div>
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
    error = false;
    /*jQuery(window).on("beforeunload", function(event){
      return "Are you sure you would like to leave this page? Your answers for this page will be lost";
    });*/
@if ($report)
    var els;
    if($('button.btnoption').length){
        $('button.btnoption').click(function(e){
            e.preventDefault();
            var title = $(this).text();
            var val = $(this).val();
            var parent = $(this).parent("form");
            var parentHeight = parent.css('height');
            var num = $('button.btnoption').length;
            var that = this;
            if(num>0){
                var start = 1;
                //inject info
                html = '<div class="repwrap">'+
                            '<div class="repmod">'+
                                '<h4>'+title+'</h4>'+
                                '<p>'+
                                    '{{addslashes($report['text'])}}'+
                                '</p>'+
                                '<div class="clearfix"></div>'+
                            '</div>'+
                            '<button class="btn-u btn{{$btnsize}}" type="submit" value="'+val+'" name="answer">{{Lang::get('general.next')}}</button>'+
                        '</div>';
                $(html).hide().appendTo(parent);
                
                //hide next buttton
                $('div.repwrap').find('button.button{{$btnsize}}').hide();
                $('div.repwrap').find('button.button{{str_replace(" ",".",$btnsize)}}').hide();
                
                //move out of view
                $('div.repwrap').css({
                        position : "absolute",
                        left: -90000
                });
                $('div.repwrap').show();
                //set original height for later
                var repheight = $('div.repmod').height();
                if(parentHeight < repheight) {
                    $(parent).css({height: repheight+70 });
                }else{
                    $(parent).css({height: parentHeight });
                }
                $('div.repwrap').hide();
                //move bak into view
                $('div.repwrap').css({
                    left: 'auto',
                    position: 'relative'
                });
                
                
                jQuery.each($('button.btnoption'), function( i, item ) {
                    $(item).fadeOut('fast', function() {
                        start++;
                        if(num == start){                               
                            $('div.repwrap').fadeIn("slow",function(){
                                $('div.repwrap').find('button.button{{$btnsize}}').fadeIn("fast");
                                $('div.repwrap').find('button.button{{str_replace(" ",".",$btnsize)}}').fadeIn("fast");
                            });
                        }
                    });
                });
            }
        })
    }
@endif
if($('div.iradio_line').length){
    $('#next').click(function(e){
        e.preventDefault();
        var thisBut = this;
        var title = '{{$heading}}';
        var numGroups = $('fieldset').length;
        var sibling = $(this).prev("fieldset");
        var pos = false;
        var parentHeight = sibling.css('height');
        var num = $('label.rel').length;
        var selected = 0;
        $('fieldset').each(function( index ) {
            var num = $(this).find('input.chq').length;
            $(this).find('input.chq').each(function( index ) {
                if($(this).is(':checked')){
                    selected ++;
                }
            });
        });
        if(selected==numGroups){
            $('div.error').fadeOut('fast', function() {
                this.remove();
                error = false;
            });
            
            @if ($report)
            var start = 0;
            thisBut.fadeOut('fast');
            jQuery.each($('fieldset'), function( i, item ) {
                $(item).fadeOut('fast', function() {
                    start++;
                    if(numGroups == start && selected>0){
                                                    
                        //inject new thing
                        html = 
                            '<div class="repwrap">'+
                                '<div class="repmod">'+
                                    '<h4 style="font-size: 13px;">'+title+'</h4>'+
                                    '<div class="rep-img">'+
                                        '<img src="{{URL::to("/").'/'.$report['image']}}" alt="" width="80" height="80">'+
                                    '</div>'+
                                    '<div class="rep-text">'+
                                        '{{addslashes($report['text'])}}'+
                                    '</div>'+
                                    '<div class="clearfix"></div>'+
                                '</div>'+
                                '<button class="button{{$btnsize}}" type="submit">{{Lang::get('general.next')}}</button>'+
                            '</div>';
                        
                        $(html).appendTo($('#form-question'));
                    
                    }
                });
            });
            @else
                $('#form-question').trigger('submit');
            @endif
        }else{
            if(error==false){
                console.log(thisBut);
                html = 
                    "<div class=\"clearfix\"></div><div class=\"error pull-right\" style=\"padding:0 15px 0 15px; margin-top: 5px;\">"+
                        "<span style=\"color: #ed2024;\">{{Lang::get('general.multierror')}}</span>"+
                    "</div>";
                $(html).insertAfter(thisBut).hide().fadeIn("fast");
                error=true;
            }
            
        }
    })
}
</script>
<!--[if lt IE 9]>
    <script src="{{ asset('plugins/respond.js')}}"></script>
    <script src="{{ asset('plugins/html5shiv.js')}}"></script>
    <script src="{{ asset('plugins/placeholder-IE-fixes.js')}}"></script>
<![endif]-->
@stop