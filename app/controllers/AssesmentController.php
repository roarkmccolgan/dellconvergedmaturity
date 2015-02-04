<?php
 
 
    class AssesmentController extends BaseController {

        var $numSections = false;
        var $quiz = false;
        var $menu = false;
        var $baseline = false;
		var $userid;
        var $howfit = false;
		var $report;


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
            $this->howfit=Session::get('result');
            $this->baseline = Session::get('baseline');

            $validate_data = Input::except('_token');
            $rules = array(
                'fname'=>'required',
                'sname'=>'required',
                'email'=>'required',
                'company'=>'required',
				'country'=>'required',
                'terms'=>'required'
            );

            $validator = Validator::make($validate_data, $rules);

            if ($validator->passes()) {
                Session::put('user', $validate_data);
				
				//save in db
				$user = new User;
				$user->fname = $validate_data['fname'];
				$user->lname = $validate_data['sname'];
				$user->email = $validate_data['email'];
				$user->company = $validate_data['company'];
				$user->tel = $validate_data['phone'];
				$user->quiz = json_encode($this->quiz);
				$user->result = json_encode($this->howfit);
				
				$user->save();
				$this->userid = $user->id;
				$validate_data['userid'] = $user->id;
				
				//generate report
				$this->generateReport();
				
				//
				
				//send mail to user
                Mail::send('emails.download2', array('fname'=>$validate_data['fname'], 'sname'=>$validate_data['sname'], 'userid'=>$validate_data['userid']), function($message)  use ($validate_data){

                    $message->to($validate_data['email'], $validate_data['fname'].' '.$validate_data['sname'])->subject('Your Tech Fitness Report');
                });
				//send mailt to notification people
				$emails = ['nikhil.kalanjee@hp.com', 'ftang@idc.com','kerry.gilbert@hp.com','emma.westley@hp.com','roarkmccolgan@gmail.com'];
				Mail::send('emails.notification', array('fname'=>$validate_data['fname'], 'sname'=>$validate_data['sname'], 'email'=>$validate_data['email'], 'company'=>$validate_data['company'], 'phone'=>$validate_data['phone'], 'screener1'=>$this->quiz['screeners']['pages']['page1']['questions']['s1']['selected'], 'screener2'=>$this->quiz['screeners']['pages']['page2']['questions']['s2']['selected'], 'score'=>$this->howfit['overall']['score'], 'rating'=>$this->howfit['overall']['rating'], 'userid'=>$validate_data['userid']), function($message)  use ($validate_data){

                    $message->to($emails)->subject('Tech fitness Report Completed');
                });
				
				$vars = array(
                    'heading' => "Hi ".$validate_data['fname']." ".$validate_data['sname'].",",
                    'sub1' => "Your download link will be in your inbox soon.",
                    'tweet' => $this->baseline['overall']['types'][$this->howfit['overall']['rating']]['tweet'],
                    'colour' => 'orange',
                    'quiz' => $this->quiz
                );
				
                return View::make('thankyou',$vars);
            }
            Input::flashExcept('_token');
            return Redirect::to('quiz/complete')->withErrors($validator);
        }
        public function getDownload($userid){
            //PDF file is stored under project/public/download/info.pdf
			$user = User::find($userid);
            $file= public_path(). '/download/'.$user->id.'_'.str_replace(" ", "_", $user->fname).'_'.str_replace(" ", "_", $user->lname).'_Tech_Fitness_Report.pdf';
            $headers = array(
                'Content-Type: application/pdf',
            );
            return Response::download($file, $user->id.'_'.str_replace(" ", "_", $user->fname).'_'.str_replace(" ", "_", $user->lname).'_Tech_Fitness_Report.pdf', $headers);
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
		
		private function generateReport(){
			$this->baseline = Config::get('baseline');
            $this->report = new Pdf;
			
			$time_start = microtime(true);

            $this->report->SetTitle('Your Tech Fitness Report');
            $this->report->AddPage();
			$this->report->intro($this->howfit,$this->baseline,$this->quiz);
            //$this->pdf->SetFont(K_PATH_FONTS.'Latinotype - Arquitecta.otf');
            //$this->pdf->mainGraph($this->guest_name,$this->guest_company,$this->intent_score,$this->data_score,$this->tech_score,$this->people_score,$this->process_score,$this->overall_score);
            
            $time_end = microtime(true);
            $execution_time = round($time_end - $time_start,2);
            $this->report->SetY($this->report->GetY()+2);
            //$this->report->cell(120,0, 'report took '.$execution_time.'seconds to generate');
			$this->report->SetDisplayMode('fullpage'); 		
            $this->report->Output(public_path().'/download/'.$this->userid.'_'.str_replace(" ", "_", Session::get('user.fname')).'_'.str_replace(" ", "_", Session::get('user.sname')).'_Tech_Fitness_Report.pdf','F');
        }
 
    }