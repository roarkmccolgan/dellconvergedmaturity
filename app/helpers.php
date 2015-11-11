<?php

function getLang(){
	$local = App::getLocale();
	switch($local){
		case 'en':
			return '';
		break;
		case 'fr':
			return 'fr/';
		break;
		case 'de':
			return 'de/';
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