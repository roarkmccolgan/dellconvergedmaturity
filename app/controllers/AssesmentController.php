<?php
 
 
    class AssesmentController extends BaseController {

        var $numSections = false;
        var $quiz = false;
        var $menu = false;

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
            $vars = array(
                'heading' => "You’re PROACTIVE!",
                'sub1' => "With great TechFitness already, you’re well placed to succeed in this era of tech-led business transformation. However, there are still things you can consider to ensure you stay ahead. ",
                'colour' => 'orange',
                'quiz' => $this->quiz
            );
            return View::make('complete',$vars);
        }
        public function postComplete()
        {
            $this->loadQuestions();
            $validate_data = Input::except('_token');
            $vars = array(
                'heading' => "Hi ".$validate_data['fname']." ".$validate_data['sname'],
                'sub1' => "Your download link will be in your inbox soon.<br/><br/>While you’re waiting why not tweet your results and see how your colleagues measure up?",
                'tweet' => "I just took the %40HP %23TechFitness quiz, and my company is proactive. Why don’t you take it and see how you do? http://bit.ly/1GwpxoI",
                'colour' => 'orange',
                'quiz' => $this->quiz
            );
            return View::make('thankyou',$vars);
        }

        private function endKey($array){
            return end($array);
        }
 
    }