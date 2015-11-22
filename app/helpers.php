<?php

function getLang(){
	$local = App::getLocale();
	$host = Config::get('app.host');
	switch($local){
		case 'en':
			if($host=='convergedmaturity.com' || $host=='dellconverged.app'){
				return '';
			}else{
				return 'en/';
			}		
		break;
		case 'fr':
			if($host=='convergedmaturity.fr'){
				return '';
			}else{
				return 'fr/';
			}
		break;
		case 'de':
			if($host=='bereit-fuer-konvergente-infrastruktur.de'){
				return '';
			}else{
				return 'de/';
			}
		break;
	}
}
function getLangSwitch(){
	$local = App::getLocale();
	switch($local){
		case 'en':
			return "
			<li><a href=".Request::root().'/fr'."><i class=\"flag fr\"></i> French</a></li>
			<li><a href=".Request::root().'/de'."><i class=\"flag de\"></i> German</a></li>
			";
		break;
		case 'fr':
			return "
			<li><a href=".Request::root()."><i class=\"flag\"></i> English</a></li>
			<li><a href=".Request::root().'/de'."><i class=\"flag de\"></i> German</a></li>
			";
		break;
		case 'de':
			return "
			<li><a href=".Request::root()."><i class=\"flag\"></i> English</a></li>
			<li><a href=".Request::root().'/fr'."><i class=\"flag fr\"></i> French</a></li>
			";
		break;
	}
}