<?php

Form::macro('errors', function($errors, $field = false)
	{
		if ($errors->any())
		{
			if ($field && !$errors->has($field))
			{
				return null;
			}
			return View::make('_errors.form', [
				'errors' => $errors,
				'field' => $field
			]);
		}
	return null;
});

Form::macro('idcIcon', function($section,$q,$page,$num){
	$errors = Session::get('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	//$value = Input::old($name)?Input::old($name):(Session::get('questions.'.$section.'.pages.page'.$page.'.questions.'.$num) ? Session::get('questions.'.$section.'.pages.page'.$page.'.questions.'.$num:'');
	$class = '';

	foreach ($q['options'] as $key => $optionSet) {
		$len = strlen($optionSet['label']);
		$padding = $len<=15 ? ' style="padding-top:8px"':($len>15 && $len<=30 ? ' style="padding-top:4px"':($len>30 ? ' style="padding-top:0px"':''));
		$sub = isset($optionSet['sub']) ? '<p>'.$optionSet['sub'].'</p>':'';
		$html.='<button class="info" type="submit" value="'.$optionSet['label'].'" name="answer" id="'.$key.'-'.$name.'">
			<i class="'.$optionSet['class'].'"></i>
			<a href="#" class="more">More info</a>
			<aside'.$padding.'>
				<h3>'.$optionSet['label'].'</h3>
				'.$sub.'
			</aside>
		</button>';
	}
	return $html;
});

Form::macro('idcButton', function($section,$q,$page){
	$errors = Session::get('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$class = '';
	$html.='
		<fieldset>';
	foreach ($q['options'] as $key => $optionSet) {
		$html.='
            <button value="'.$optionSet['label'].'" type="submit" class="btn-q" name="answer" id="'.$key.'-'.$name.'">'.$optionSet['label'].'</button>';
	}
	$html.='
		</fieldset>';
	return $html;
});

Form::macro('idcCheckbox', function($section,$q,$page){
	$errors = Session::get('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$class = '';
	$html.='
		<fieldset>';
	foreach ($q['options'] as $key => $optionSet) {
		$html.='
			<label class="rel">
				<input class="chq" type="checkbox" name="answer[]" value="'.$optionSet['label'].'" id="'.$key.'-'.$name.'" style="display: none;">
				<div class="checktext">'.$optionSet['label'].'</div>
			</label>';
	}
	$html.='
		</fieldset>
		<button class="button-small" type="submit">Next</button>';
	return $html;
});