<?php

function getLang(){
	$local = App::getLocale();
	$host = Config::get('app.host');
	//return($local);
	switch($local){
		case 'en':
			if($host=='convergedmaturity.com' || $host=='convergedmaturity.co.uk' || $host=='certus.convergedmaturity.co.uk' || $host=='dellconverged.app' || $host=='itf.convergedmaturity.com' || $host=='infoniqa.convergedmaturity.com'){
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
			if($host=='bereit-fuer-konvergente-infrastruktur.de' || $host=='niteflite.bereit-fuer-konvergente-infrastruktur.de'){
				return '';
			}else{
				return 'de/';
			}
		break;
	}
}
function getLangSwitch(){
	$local = App::getLocale();
	$host = Config::get('app.host');
	$fr = '/fr';
	$de = '/de';
	$en = '/en';

	if($host=='convergedmaturity.com' || $host=='convergedmaturity.co.uk' || $host=='certus.convergedmaturity.co.uk' || $host=='dellconverged.app' || $host=='itf.convergedmaturity.com' || $host=='infoniqa.convergedmaturity.com'){
		$en = '';
	}elseif($host=='convergedmaturity.fr'){
		$fr = '';
	}elseif($host=='bereit-fuer-konvergente-infrastruktur.de' || $host=='niteflite.bereit-fuer-konvergente-infrastruktur.de'){
		$de = '';
	}
	switch($local){
		case 'en':
			return "
			<li><a href=".Request::root().$fr."><i class=\"flag fr\"></i> French</a></li>
			<li><a href=".Request::root().$de."><i class=\"flag de\"></i> German</a></li>
			";
		break;
		case 'fr':
			return "
			<li><a href=".Request::root().$en."><i class=\"flag\"></i> English</a></li>
			<li><a href=".Request::root().$de."><i class=\"flag de\"></i> German</a></li>
			";
		break;
		case 'de':
			return "
			<li><a href=".Request::root().$en."><i class=\"flag\"></i> English</a></li>
			<li><a href=".Request::root().$fr."><i class=\"flag fr\"></i> French</a></li>
			";
		break;
	}
}