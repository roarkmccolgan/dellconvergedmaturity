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

Form::macro('idcCheckRad', function($num,$q,$type,$page){
	$errors = Session::get('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$selected = isset($q['selected'])? $q['selected']:false;
	if($selected){
		if(strpos($selected, "|")!==false){
			$selected = explode('|', $selected);
            $selected = $selected[0];
		}
	}
	//$value = Input::old($name)?Input::old($name):(Session::get('questions.'.$section.'.pages.page'.$page.'.questions.'.$num) ? Session::get('questions.'.$section.'.pages.page'.$page.'.questions.'.$num:'');
	$class = '';

	foreach ($q['options'] as $key => $optionSet) {
		$sub = isset($optionSet['sub']) ? '<p>'.$optionSet['sub'].'</p>':'';
		$class = isset($optionSet['class']) ? $optionSet['class']:'';
		$checked = $optionSet['label']==$selected? ' checked':'';
		$value = $optionSet['value']===false ? $optionSet['label']:$optionSet['label'].'|'.$optionSet['value'];
		$html.='<button class="btnoption radius '.$class.$checked.'" type="submit" value="'.$value.'" name="answer" id="'.$key.'-'.$name.'">
			<i class="fa fa-check"></i> <span class="idc'.$type.'">'.$optionSet['label'].' '.$sub.'</span>
		</button><div class="clearfix"></div>';
	}
	return $html;
});

Form::macro('idcGroup', function($section,$q,$page,$type){
	$errors = Session::get('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$class = '';
	$selected = isset($q['selected'])? $q['selected']:false;
	
	$html.='<div class="row">';
	foreach ($q['options'] as $key => $optionSet) {
			$html.='
				<div class="col-md-12 groupcheck">
					<h4>'.$optionSet['label'].'</h4>
					<fieldset>';
			foreach ($optionSet['options'] as $setkey => $option) {
				$checked = ($selected[$optionSet['name']][0]==$option['label'].'|'.$option['value']) ? ' checked':'';
				
				$html.='
						<input'.$checked.' class="chq" type="'.$type.'" name="answer['.$optionSet['name'].'][]" value="'.$option['label'].'|'.$option['value'].'" id="'.$setkey.'-'.$name.'">
						<label>'.$option['label'].'</label>';
			}
			$html.='
					</fieldset>
				</div>
			';
	}
	$html.='</row>';
	$currentLocal = App::getLocale();
	$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
	$btnsize = '-small';
	if($localQuestions=='es'){
		$btnsize = '-small lang';
	}
	$html.='
			<div class="col-md-12" style="padding: 20px 0 20px 0">
				<button id="next" class="btn-u pull-right margin-right-20" style="padding:15px 20px; font-size:18px;">'.Lang::get('general.next').' &nbsp; <i class="fa fa-arrow-circle-right"></i></button>
			</div>';
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
			<label>
				<input class="chq" type="checkbox" name="answer[]" value="'.$optionSet['label'].'|'.$optionSet['value'].'" id="'.$key.'-'.$name.'" style="display: none;">
				<div class="checktext">'.$optionSet['label'].'</div>
			</label>';
	}
	$currentLocal = App::getLocale();
	$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
	$btnsize = '-small';
	if($localQuestions=='es'){
		$btnsize = '-small lang';
	}
	$html.='
		</fieldset>
		<button class="button'.$btnsize.'" type="submit">'.Lang::get('general.next').'</button>';
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
            <button value="'.$optionSet['label'].'|'.$optionSet['value'].'" type="submit" class="btn-q" name="answer" id="'.$key.'-'.$name.'">'.$optionSet['label'].'</button>';
	}
	$html.='
		</fieldset>';
	return $html;
});