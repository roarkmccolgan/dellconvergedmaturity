<?php
 
 
    class AssesmentController extends BaseController {

        var $numSections = false;
        var $quiz = false;
        var $menu = false;
        var $baseline = false;

        var $howfit = false;


        public function loadQuestions(){
            $this->quiz=Session::get('questions');
            if(!$this->quiz) return Redirect::to('/');
            $this->numSections=count($this->quiz);
            $temp = array();
            foreach ($this->quiz as $key => $value) {
                $temp[$key]['display']=isset($value['display']) ? $value['display']:true;
                $temp[$key]['numpages']=count($value['pages']);
                $temp[$key]['colour']=isset($value['colour']) ? $value['colour']:'orange';
                $temp[$key]['complete']=isset($value['display']) ? $value['display']:false;
                $i = 1;
                foreach ($value['pages'] as $pkey => $page) {
                    $temp[$key]['pages'][$pkey]['done'] = isset($page['done'])? true : false;
                    $temp[$key]['pages'][$pkey]['progress'] = $i.' of '.$temp[$key]['numpages'];
                    $i++;
                }
            }
            $this->menu = $temp;
        }

        public function getPage($section=false, $page=false)
        {
            if($section===false || $page===false) return Redirect::to('/');
            $this->loadQuestions();
            if(!isset($this->quiz[$section]['pages']['page'.$page])) return Redirect::to('/');

            $data = $this->quiz[$section];
            $sectionQuestions = $data['pages']['page'.$page];

            $script = false;
            foreach ($sectionQuestions['questions'] as $number => $question) {
                if(isset($question['script'])){
                    $script[]=$question['script'];
                }
            }
            $vars = array(
                'questions' => $sectionQuestions['questions'],
                'heading' => $sectionQuestions['title'],
                'report' => isset($sectionQuestions['report']) ? $sectionQuestions['report']:false,
                'menu' => $this->menu,
                'colour' => $data['colour'],
                'section'=>$section,
                'page'=>$page,
                'script'=>$script
            );
            return View::make('question',$vars);
        }

        public function savePage($section=false, $page=false)
        {
            if($section===false || $page===false) return Redirect::to('/');
            $validate_data = Input::except('_token');
            
            Session::put('questions.'.$section.'.pages.page'.$page.'.questions.'.$validate_data['question'].'.selected', $validate_data['answer']);
            Session::put('questions.'.$section.'.pages.page'.$page.'.done', true);

            if(Session::has('questions.'.$section.'.pages.page'.($page+1))){
                $this->getPage($section,$page+1);
                return Redirect::to('quiz/'.$section.'/page'.($page+1));
            }else{
                Session::put('questions.'.$section.'.complete', true);
                $questions = Session::get('questions');
                while (key($questions) !== $section  && key($questions) !== null) {
                    next($questions);
                }
                next($questions);
                if(key($questions)==null) return Redirect::to('quiz/complete');
                //return $this->getPage(key($questions),1);
                return Redirect::to('quiz/'.key($questions).'/page1');
            }
        }

        public function getComplete()
        {
            $this->loadQuestions();
            $this->calcResults();
            $vars = array(
                'heading' => "You’re ".strtoupper($this->howfit['overall']['rating']),
                'sub1' => $this->baseline['overall']['types'][$this->howfit['overall']['rating']]['copy'],
                'colour' => 'orange',
                'quiz' => $this->quiz
            );
            return View::make('complete',$vars);
        }
        public function postComplete()
        {
            $this->loadQuestions();
            $result=Session::get('result');
            $baseline = Session::get('baseline');

            $validate_data = Input::except('_token');
            $rules = array(
                'fname'=>'required',
                'sname'=>'required',
                'email'=>'required',
                'website'=>'required',
                'terms'=>'required'
            );

            $validator = Validator::make($validate_data, $rules);

            if ($validator->passes()) {
                Session::put('user', $validate_data);

                Mail::send('emails.download', array('fname'=>$validate_data['fname'], 'sname'=>$validate_data['sname']), function($message)  use ($validate_data){

                    $message->to($validate_data['email'], $validate_data['fname'].' '.$validate_data['sname'])->subject('Your TechFitness report');
                });

                $vars = array(
                    'heading' => "Hi ".$validate_data['fname']." ".$validate_data['sname'],
                    'sub1' => "Your download link will be in your inbox soon.<br/><br/>While you’re waiting why not tweet your results and see how your colleagues measure up?",
                    'tweet' => $baseline['overall']['types'][$result['overall']['rating']]['tweet'],
                    'colour' => 'orange',
                    'quiz' => $this->quiz
                );
                return View::make('thankyou',$vars);
            }
            Input::flashExcept('_token');
            return Redirect::to('quiz/complete')->withErrors($validator);
        }
        public function getDownload(){
            //PDF file is stored under project/public/download/info.pdf
            $file= public_path(). "/download/PDF_Report_layout_new.pdf";
            $headers = array(
                'Content-Type: application/pdf',
            );
            return Response::download($file, 'PDF_Report_layout_new.pdf', $headers);
        }

        private function calcResults(){
            $this->baseline = Config::get('baseline');
            $result = array();
            $result['overall']['score'] = 0;

            foreach ($this->quiz as $key => $value) {
                if($key!=='screeners'){
                    foreach ($value['pages'] as $page => $props) {
                        foreach ($props['questions'] as $q => $details) {
                            if($q=='c1' && is_array($details['selected'])){
                                if(count($details['selected'])==1 && strrpos($details['selected'][0], "Unsure")!==false){
                                    $val = 1;
                                }elseif(count($details['selected'])==1 || count($details['selected'])==2){
                                    $val = 3;
                                }elseif(count($details['selected'])>=3){
                                    $val = 5;
                                }
                            }else{
                                $val = explode('|', $details['selected']);
                                $val = $val[1];
                            }
                            if (isset($result[$key]['score'])){
                                $result[$key]['score'] += $val;
                            } else {
                                $result[$key]['score'] = $val;
                            }
                        }
                        foreach ($this->baseline[$key]['types'] as $rating => $limits) {
                            if($result[$key]['score']>=$limits['low'] && $result[$key]['score']<=$limits['high']){
                                $result[$key]['rating'] = $rating;
                            }
                        }
                    }
                    $result['overall']['score'] += $result[$key]['score'];
                    foreach ($this->baseline['overall']['types'] as $rating => $limits) {
                        if($result['overall']['score']>=$limits['low'] && $result['overall']['score']<=$limits['high']){
                            $result['overall']['rating'] = $rating;
                        }
                    }
                }
            }
            Session::put('result', $result);
            Session::put('baseline', $this->baseline);
            $this->howfit = $result;
        }
 
    }