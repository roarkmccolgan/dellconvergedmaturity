@extends('_layout.default')

@section('pagetitle', $heading)


@section('head')
@parent
<meta name="description" content="">
@stop

@section('header')
<header id="side">
    <h1>How TechFit is Your Business?</h1>
    <nav id="steps" class="clearfix">
        @foreach ($menu as $key=>$pages)
            @if($pages['display'])
            <div class="{{$pages['colour']}} {{$pages['complete'] || $key==$section ? 'passed':''}}">
                <i></i><!--{{var_dump($pages['complete'])}}-->
                <ul>
                @foreach ($pages['pages'] as $pkey => $qpage)
                    <li class="{{$qpage['done'] || ($pkey == 'page'.$page && $key==$section)? 'done':''}}">{{$pkey}}</li>
                @endforeach
                </ul>
            </div>
            @endif
        @endforeach
        
    </nav>
    <h2><small>{{$menu[$section]['pages']['page'.$page]['progress']}}</small> {{$heading}}</h2>
</header>
@stop

@section('main')
<section id="page" class="{{$colour}}">
    @foreach ($questions as $question)
    <h2>{{$question['question']}}</h2>
    {{ Form::open(array('url' => 'quiz/'.$section.'/page'.$page,'id'=>'form-question','class'=>'clearfix')) }}
    {{ Form::errors($errors) }}
        {{Form::hidden('section', $section);}}
        {{Form::hidden('page', $page);}}
        @foreach ($questions as $num=>$q)
            @if ($q['type'] == 'radio')
                {{ Form::idcRadio($num,$q,'radio',$page) }}
            @elseif ($q['type'] == 'slider')
                {{ Form::idcSlider($num,$q,$page) }}
            @elseif ($q['type'] == 'checkbox')
                {{ Form::idcCheckbox($num,$q,$page) }}
            @elseif ($q['type'] == 'icon')
                {{ Form::idcIcon($section,$q,$page,$num) }}
            @elseif ($q['type'] == 'button')
                {{ Form::idcButton($section,$q,$page) }}
            @elseif ($q['type'] == 'text')
                {{ Form::idcInput($num,$q,$page) }}
            @endif
        @endforeach
    @endforeach
    {{ Form::close() }}
</section>
@stop

@section('pagescript')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.1.min.js')}}"><\/script>')</script>
<script type="text/javascript">var error = false;</script>
<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/main.js')}}}"></script>
@if ($script)
<script>
$(function() {
    @foreach ($script as $s)
       {{ $s }}
    @endforeach
});
</script>
@endif
<script>
jQuery(window).on("beforeunload", function(event){
      return "Are you sure you would like to leave this page? Your answers for this page will be lost";
});
@if ($report)
    var els;
    if($('button.btn-q').length){
        $('button.btn-q').click(function(e){
            e.preventDefault();
            var title = $(this).text();
            var val = $(this).val();
            var parent = $(this).parent("fieldset");
            var parentHeight = parent.css('height');
            var num = $('button.btn-q').length;
            if(num>0){
                var start = 1;
                jQuery.each($('button.btn-q'), function( i, item ) {
                    $(item).fadeOut('fast', function() {
                        start++;
                        if(num == start){
                            html = 
                                '<div class="repmod">'+
                                    '<h4>'+title+'</h4>'+
                                    '<div class="rep-img">'+
                                        '<img src="{{URL::to("/").'/'.$report['image']}}" alt="" width="80" height="80">'+
                                    '</div>'+
                                    '<div class="rep-text">'+
                                        '{{addslashes($report['text'])}}'+
                                    '</div>'+
                                    '<div class="clearfix"></div>'+
                                '</div>'+
                                '<button class="button-small" type="submit" value="'+val+'" name="answer">Next</button>';
                            $(html).hide().appendTo(parent).fadeIn("fast");
                        }
                    });
                });
            }
        })
    }else if($('label.rel').length){
        $('button.button-small').click(function(e){
            e.preventDefault();
            var title = 'Cloud Services';
            var sibling = $(this).prev("fieldset");
            var parentHeight = sibling.css('height');
            var num = $('label.rel').length;
            var selected = 0;
            if(num>0){
                $(sibling).find('input.chq').each(function( index ) {
                    if($(this).is(':checked'))  selected ++;
                });
                if(selected>0){
                    $('div.error').fadeOut('fast', function() {
                        this.remove();
                    });
                    var start = 0;
                    $('button.button-small').fadeOut('fast');
                    jQuery.each($('label.rel'), function( i, item ) {
                        $(item).fadeOut('fast', function() {
                            start++;
                            if(num == start && selected>0){
                                html = 
                                    '<div class="repmod">'+
                                        '<h4>'+title+'</h4>'+
                                        '<div class="rep-img">'+
                                            '<img src="{{URL::to("/").'/'.$report['image']}}" alt="" width="80" height="80">'+
                                        '</div>'+
                                        '<div class="rep-text">'+
                                            '{{addslashes($report['text'])}}'+
                                        '</div>'+
                                        '<div class="clearfix"></div>'+
                                    '</div>'+
                                    '<button class="button-small" type="submit">Next</button>';
                                $(html).hide().appendTo(sibling).fadeIn("fast");
                            }
                        });
                    });
                }else{
                    if(error==false){
                        html = 
                            '<div class="error" style="padding:0 15px 0 15px;">'+
                                '<span style="color: #ed2024;">Please answer this question in order to continue.</span>'+
                            '</div>';
                        $(html).hide().appendTo(sibling).fadeIn("fast");
                        error=true;
                    }
                    
                }
            }
        })
    }
@endif
</script>
@stop