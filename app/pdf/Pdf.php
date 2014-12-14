<?php

class Pdf extends \Maxxscho\LaravelTcpdf\LaravelTcpdf {

    //Page header
    public function Header() {

        if ($this->header_xobjid === false) {
            // start a new XObject Template
            $this->header_xobjid = $this->startTemplate($this->w, $this->tMargin);
            $headerfont = $this->getHeaderFont();
            $headerdata = $this->getHeaderData();
            $this->y = $this->header_margin+5;
            if ($this->rtl) {
                $this->x = $this->w - $this->original_rMargin;
            } else {
                $this->x = $this->original_lMargin;
            }
            $this->ImageEps(K_PATH_IMAGES.$headerdata['logo'], '', '', $headerdata['logo_width']);
            $imgy = $this->getImageRBY();

            $this->x = $this->w - $this->original_rMargin-35;
            $this->y = $this->header_margin+2;
            $this->Image(K_PATH_IMAGES.'idc_logo.jpg', '', '', 35);
            $imgy = $this->getImageRBY();


            
            // print an ending header line
            $this->SetLineStyle(array('width' => 0.85 / $this->k, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => $headerdata['line_color']));
            $this->SetY($this->header_margin + $imgy+2);
            if ($this->rtl) {
                $this->SetX($this->original_rMargin);
            } else {
                $this->SetX($this->original_lMargin);
            }
            $this->Cell(($this->w - $this->original_lMargin - $this->original_rMargin), 0, '', 'T', 0, 'C');
            $this->endTemplate();
        }
        // print header template
        $x = 0;
        $dx = 0;
        if (!$this->header_xobj_autoreset AND $this->booklet AND (($this->page % 2) == 0)) {
            // adjust margins for booklet mode
            $dx = ($this->original_lMargin - $this->original_rMargin);
        }
        if ($this->rtl) {
            $x = $this->w + $dx;
        } else {
            $x = 0 + $dx;
        }
        $this->printTemplate($this->header_xobjid, $x, 0, 0, 0, '', '', false);
        if ($this->header_xobj_autoreset) {
            // reset header xobject template at each page
            $this->header_xobjid = false;
        }
    }

    // Page footer
    public function mainGraph($name, $company,$intent_score,$data_score,$tech_score,$people_score,$process_score, $overall_score) {
        $user_name =$name;
        $user_company_name = $company;

        $graph_base = 97;
        $base_shift = 10;
        $difference = 9.527778;

        $user_intent = $intent_score; //dynamic
        $base_intent = 3.29; //dynamic

        $user_data = $data_score; //dynamic
        $base_data = 3.42; //dynamic

        $user_tech = $tech_score; //dynamic
        $base_tech = 2.4; //dynamic

        $user_people = $people_score; //dynamic
        $base_people = 2.59; //dynamic

        $user_process = $process_score; //dynamic
        $base_process = 2.53; //dynamic

        $user_overall = $overall_score; //dynamic
        $base_overall = 2.42; //dynamic
        
        $intent =array(
            'bl'=>array(
                'x'=>40,
                'y'=>$graph_base
                ),
            't'=>array(
                'x'=>47,
                'y'=>$graph_base
                ),
            'br'=>array(
                'x'=>54,
                'y'=>$graph_base
                )
            );

        $data =array(
            'bl'=>array(
                'x'=>67,
                'y'=>$graph_base
                ),
            't'=>array(
                'x'=>74,
                'y'=>$graph_base
                ),
            'br'=>array(
                'x'=>81,
                'y'=>$graph_base
                )
            );

        $tech =array(
            'bl'=>array(
                'x'=>93,
                'y'=>$graph_base
                ),
            't'=>array(
                'x'=>100,
                'y'=>$graph_base
                ),
            'br'=>array(
                'x'=>107,
                'y'=>$graph_base
                )
            );

        $people =array(
            'bl'=>array(
                'x'=>119,
                'y'=>$graph_base
                ),
            't'=>array(
                'x'=>126,
                'y'=>$graph_base
                ),
            'br'=>array(
                'x'=>133,
                'y'=>$graph_base
                )
            );

        $process =array(
            'bl'=>array(
                'x'=>145,
                'y'=>$graph_base
                ),
            't'=>array(
                'x'=>152,
                'y'=>$graph_base
                ),
            'br'=>array(
                'x'=>159,
                'y'=>$graph_base
                )
            );

        $overall =array(
            'bl'=>array(
                'x'=>171,
                'y'=>$graph_base
                ),
            't'=>array(
                'x'=>177,
                'y'=>$graph_base
                ),
            'br'=>array(
                'x'=>184,
                'y'=>$graph_base
                )
            );

        $style0 = array('width' => 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(209));
        $style0small = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(209));

        $style1 = array('width' => 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(243,157,30));
        $style1small = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(243,157,30));
        $style1smalllight = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(248,192,119));

        $style2 = array('width' => 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(230,77,59));
        $style2small = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(239,147,121));

        $style3 = array('width' => 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(28,173,96));
        $style3small = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(138,199,152));

        $style4 = array('width' => 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(229,125,37));
        $style4small = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(238,171,114));

        $style5 = array('width' => 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(94,172,223));
        $style5small = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(158,199,234));

        $style6 = array('width' => 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(142,60,229));
        $style6small = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(175,105,249));

        $style_user = array('width' => 0.85, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(67,199,244));
        $style_base = array('width' => 0.85, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(1,102,153));

        $style_small_dot = array('width' => 0.2, 'cap' => 'round', 'join' => 'miter', 'dash' => '0,1', 'color' => array(0,0,0));


        //Rounded rectangle styles
        $style_top_orange = array('L' => 0,
                            'T' => array('width' => 1, 'round' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(239, 171, 30)),
                            'R' => 0,
                            'B' => 0);
        $style_small_dot_orange = array('width' => 0.3, 'cap' => 'round', 'join' => 'miter', 'dash' => '0,1', 'color' => array(239, 171, 30));



        // Position at 15 mm from bottom
        $this->SetXY($this->original_lMargin,31);
        // Set font
        $this->SetFont('helvetica', '', 12);
        $this->SetColor('text', 88,88,91);
        // Heading
        $this->Write(0, 'RESULTS');
        $this->Ln();
        $this->SetXY(40,$this->GetY()+2);

        // Multicell test
        $this->Rect(171,$this->GetY()+6, 25, 52,'F',array(),array(238));
        $this->SetFont('helvetica', '', 8);
        $this->setCellMargins(1);
        $this->MultiCell(25, 5, 'Intent', array('B'=>$style1), 'C', 0, 0, '', '', true);
        $this->MultiCell(25, 5, 'Data', array('B'=>$style2), 'C', 0, 0, '', '', true);
        $this->MultiCell(25, 5, 'Tech', array('B'=>$style3), 'C', 0, 0, '', '', true);
        $this->MultiCell(25, 5, 'People', array('B'=>$style4), 'C', 0, 0, '', '', true);
        $this->MultiCell(25, 5, 'Process', array('B'=>$style5), 'C', 0, 0, '', '', true);
        $this->MultiCell(25, 5, 'Overall', array('B'=>$style6), 'C', 0, 1, '', '', true);

        $this->SetXY($this->original_lMargin,$this->GetY()+1);
        $this->setCellPaddings(0,3,0,3);

        $this->MultiCell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 4, 'Optimized', '', 'L', 0, 1, '', '', true);
        $optimized_y = $this->GetY()-4.5;
        $this->MultiCell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 4, 'Managed', '', 'L', 0, 1, '', '', true);
        $managed_y = $this->GetY()-4.5;
        $this->MultiCell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 4, 'Repeatable', '', 'L', 0, 1, '', '', true);
        $repeatable_y = $this->GetY()-4.5;
        $this->MultiCell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 4, 'Opportunistic', '', 'L', 0, 1, '', '', true);
        $opportunistic_y = $this->GetY()-4.5;
        $this->MultiCell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 4, 'Ad hoc', '', 'L', 0, 1, '', '', true);
        $adhoc_y = $this->GetY()-4.5;

        $after_y = $this->GetY()+4.5;
        
        //draw lines
        $this->SetLineStyle($style_small_dot);

        $this->SetXY(28,$optimized_y);        
        $this->Cell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 0, '', 'T', 0, 'C');
        $this->SetXY(28,$managed_y);
        $this->Cell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 0, '', 'T', 0, 'C');
        $this->SetXY(28,$repeatable_y);
        $this->Cell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 0, '', 'T', 0, 'C');
        $this->SetXY(28,$opportunistic_y);
        $this->Cell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 0, '', 'T', 0, 'C');
        $this->SetXY(28,$adhoc_y);
        $this->Cell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 0, '', 'T', 0, 'C');
        $this->SetXY(28,$this->GetY()+($adhoc_y-$opportunistic_y));
        //$this->Cell(30, 10, $adhoc_y-$opportunistic_y, 'T', 0, 'C');
        $this->Cell($this->getPageWidth()-$this->original_lMargin-$this->original_rMargin, 0, '', 'T', 0, 'C');




        //user_intent
        $this->SetLineStyle($style1smalllight);
                           //BL                ,BL                ,T                ,T                                             ,BR                ,BR
        $this->Polygon(array($intent['bl']['x'],$intent['bl']['y'],$intent['t']['x'],$intent['t']['y']-($user_intent * $difference),$intent['br']['x'],$intent['br']['y']),'','','',false);
        $this->SetLineStyle($style_user);
        $this->Circle($intent['t']['x'],$intent['t']['y']-($user_intent * $difference),1.5,0,360, 'DF','',array(255,255,255));

        //base_intent
        $this->SetLineStyle($style0small);
                           //BL                            ,BL                ,T                            ,T                                             ,BR                            ,BR
        $this->Polygon(array($intent['bl']['x']+$base_shift,$intent['bl']['y'],$intent['t']['x']+$base_shift,$intent['t']['y']-($base_intent * $difference),$intent['br']['x']+$base_shift,$intent['br']['y']),'','','',false);
        $this->SetLineStyle($style_base);
        $this->Circle($intent['t']['x']+$base_shift,$intent['t']['y']-($base_intent * $difference),1.5,0,360, 'DF','',array(255,255,255));

        
        //user_data
        $this->SetLineStyle($style2small);
                           //BL                ,BL                ,T                ,T                                             ,BR                ,BR
        $this->Polygon(array($data['bl']['x'],$data['bl']['y'],$data['t']['x'],$data['t']['y']-($user_data * $difference),$data['br']['x'],$data['br']['y']),'','','',false);
        $this->SetLineStyle($style_user);
        $this->Circle($data['t']['x'],$data['t']['y']-($user_data * $difference),1.5,0,360, 'DF','',array(255,255,255));

        //base_data
        $this->SetLineStyle($style0small);
                           //BL                            ,BL                ,T                            ,T                                             ,BR                            ,BR
        $this->Polygon(array($data['bl']['x']+$base_shift,$data['bl']['y'],$data['t']['x']+$base_shift,$data['t']['y']-($base_data * $difference),$data['br']['x']+$base_shift,$data['br']['y']),'','','',false);
        $this->SetLineStyle($style_base);
        $this->Circle($data['t']['x']+$base_shift,$data['t']['y']-($base_data * $difference),1.5,0,360, 'DF','',array(255,255,255));


        //user_tech
        $this->SetLineStyle($style3small);
                           //BL                ,BL                ,T                ,T                                             ,BR                ,BR
        $this->Polygon(array($tech['bl']['x'],$tech['bl']['y'],$tech['t']['x'],$tech['t']['y']-($user_tech * $difference),$tech['br']['x'],$tech['br']['y']),'','','',false);
        $this->SetLineStyle($style_user);
        $this->Circle($tech['t']['x'],$tech['t']['y']-($user_tech * $difference),1.5,0,360, 'DF','',array(255,255,255));

        //base_tech
        $this->SetLineStyle($style0small);
                           //BL                            ,BL                ,T                            ,T                                             ,BR                            ,BR
        $this->Polygon(array($tech['bl']['x']+$base_shift,$tech['bl']['y'],$tech['t']['x']+$base_shift,$tech['t']['y']-($base_tech * $difference),$tech['br']['x']+$base_shift,$tech['br']['y']),'','','',false);
        $this->SetLineStyle($style_base);
        $this->Circle($tech['t']['x']+$base_shift,$tech['t']['y']-($base_tech * $difference),1.5,0,360, 'DF','',array(255,255,255));


        //user_people
        $this->SetLineStyle($style4small);
                           //BL                ,BL                ,T                ,T                                             ,BR                ,BR
        $this->Polygon(array($people['bl']['x'],$people['bl']['y'],$people['t']['x'],$people['t']['y']-($user_people * $difference),$people['br']['x'],$people['br']['y']),'','','',false);
        $this->SetLineStyle($style_user);
        $this->Circle($people['t']['x'],$people['t']['y']-($user_people * $difference),1.5,0,360, 'DF','',array(255,255,255));

        //base_people
        $this->SetLineStyle($style0small);
                           //BL                            ,BL                ,T                            ,T                                             ,BR                            ,BR
        $this->Polygon(array($people['bl']['x']+$base_shift,$people['bl']['y'],$people['t']['x']+$base_shift,$people['t']['y']-($base_people * $difference),$people['br']['x']+$base_shift,$people['br']['y']),'','','',false);
        $this->SetLineStyle($style_base);
        $this->Circle($people['t']['x']+$base_shift,$people['t']['y']-($base_people * $difference),1.5,0,360, 'DF','',array(255,255,255));


        //user_process
        $this->SetLineStyle($style5small);
                           //BL                ,BL                ,T                ,T                                             ,BR                ,BR
        $this->Polygon(array($process['bl']['x'],$process['bl']['y'],$process['t']['x'],$process['t']['y']-($user_process * $difference),$process['br']['x'],$process['br']['y']),'','','',false);
        $this->SetLineStyle($style_user);
        $this->Circle($process['t']['x'],$process['t']['y']-($user_process * $difference),1.5,0,360, 'DF','',array(255,255,255));

        //base_process
        $this->SetLineStyle($style0small);
                           //BL                            ,BL                ,T                            ,T                                             ,BR                            ,BR
        $this->Polygon(array($process['bl']['x']+$base_shift,$process['bl']['y'],$process['t']['x']+$base_shift,$process['t']['y']-($base_process * $difference),$process['br']['x']+$base_shift,$process['br']['y']),'','','',false);
        $this->SetLineStyle($style_base);
        $this->Circle($process['t']['x']+$base_shift,$process['t']['y']-($base_process * $difference),1.5,0,360, 'DF','',array(255,255,255));


        //user_overall
        $this->SetLineStyle($style6small);
                           //BL                ,BL                ,T                ,T                                             ,BR                ,BR
        $this->Polygon(array($overall['bl']['x'],$overall['bl']['y'],$overall['t']['x'],$overall['t']['y']-($user_overall * $difference),$overall['br']['x'],$overall['br']['y']),'','','',false);
        $this->SetLineStyle($style_user);
        $this->Circle($overall['t']['x'],$overall['t']['y']-($user_overall * $difference),1.5,0,360, 'DF','',array(255,255,255));

        //base_overall
        $this->SetLineStyle($style0small);
                           //BL                            ,BL                ,T                            ,T                                             ,BR                            ,BR
        $this->Polygon(array($overall['bl']['x']+$base_shift,$overall['bl']['y'],$overall['t']['x']+$base_shift,$overall['t']['y']-($base_overall * $difference),$overall['br']['x']+$base_shift,$overall['br']['y']),'','','',false);
        $this->SetLineStyle($style_base);
        $this->Circle($overall['t']['x']+$base_shift,$overall['t']['y']-($base_overall * $difference),1.5,0,360, 'DF','',array(255,255,255));

        $this->SetY($after_y);
        $this->SetLineStyle($style_user);
        $this->Circle(155,$this->GetY()+5,1.5,0,360, 'DF','',array(255,255,255));
        $this->SetX(157);
        $this->Cell(20, 0, 'Your Result');
        $this->SetLineStyle($style_base);
        $this->Circle($this->GetX(),$this->GetY()+5,1.5,0,360, 'DF','',array(255,255,255));
        $this->SetX($this->GetX()+1.5);
        $this->Cell(30, 0, 'Baseline Result',0,1);

        //end graph


        //begin overall
        //$this->SetFont('helvetica', '', 8);
        $this->setCellHeightRatio(1.3);
        $this->SetXY($this->original_lMargin, $this->GetY()+5);
        $this->setCellPadding(5);
        $overallText = '<strong>ASSESMENT RESULTS FOR</strong><br/>'.$user_name.' of '.$user_company_name.'<br/><br/>'.
        '<strong>GENERATED</strong><br/>on '.date('M d Y');
        $this->writeHTMLCell(36, 38, '','',$overallText, array('TRBL'=>$style1small), 0, false, true, 'L', true);

        $cur_x = $this->GetX();

        $dynamic_text = 'Thank you for completing the IDC Big Data Readiness Assessment sponsored by SAP.';
        if($overall_score>=0 && $overall_score<2){
            $dynamic_text.='Based on your responses, we would describe your organization\'s current readiness and maturity level as <strong>Ad hoc</strong>. <br/>Your organization is ranked at the lowest end of the range of possible competency levels in terms of Big Data readiness.';
        }
        if($overall_score>=2 && $overall_score<3){
            $dynamic_text.='Based on your responses, we would describe your organization\'s current readiness and maturity level as <strong>Opportunistic</strong>. <br/>This is the second stage (of a possible five) within the range of possible competency levels in terms of Big Data readiness.';
        }
        if($overall_score>=3 && $overall_score<4){
            $dynamic_text.='Based on your responses, we would describe your organization\'s current readiness and maturity level as <strong>Repeatable</strong>. <br/>This means that your organization is ranked in the middle of the range of possible maturity levels in terms of Big Data readiness.';
        }
        if($overall_score>=4 && $overall_score<5){
            $dynamic_text.='Based on your responses, we would describe your organization\'s current readiness and maturity level as <strong>Managed</strong>. <br/>Congratulations! This means that your organization is ranked in the fourth of five possible maturity levels in terms of Big Data readiness.';
        }
        if($overall_score>=5){
            $dynamic_text.='Based on your responses, we would describe your organization\'s current readiness and maturity level as <strong>Optimized</strong>. <br/>Congratulations! This is the highest level of five possible maturity levels in terms of Big Data readiness.';
        }

        $this->writeHTMLCell(0, 0,'','', $dynamic_text);
        $this->Ln();
        $this->SetX($cur_x+5);
        $this->SetLineStyle($style1small);
        
        //draw line
        $this->Cell(($this->w - $this->GetX() - $this->original_rMargin-1), 0, '', 'T', 0, 'C');

        $this->SetX($cur_x);
        $recommendations = '<h4>RECOMMENDATIONS</h4> IDC research has shown that the promise of better and faster data-driven decision making has pushed Big Data initiatives to the top of C-suite agendas. In the current global competitive environment, it is not only access to information but the ability to create collective organizational intelligence and act on these insights in a timely manner that creates competitive advantages. Many organizations, however, do not yet possess the required maturity to address the range of technology, staffing, and process requirements needed to capitalize on Big Data assets and to deploy Big Data analytics pervasively to optimize operational, tactical, and strategic decisions. In addition, the focus on only one specific dimension creates an imbalance in an organization\'s ability to realize Big Data\'s business value potential. For instance, organizations with deep expertise in technology can find they are unprepared for the efforts and process changes needed to change business behavior; those with ample human resources for analytics may find they are lacking access to clean, relevant, and real-time data; and those unable to articulate or measure the benefits of the solution can find they are without ongoing funding support. These market realities point to the need to create a balanced Big Data program that addresses all five key measures of Big Data readiness and maturity.<br/><br/> <em>The following recommendations will help your organization raise your Big Data readiness and maturity levels.</em>';
        $this->writeHTMLCell(0, 0,'','', $recommendations,0,1);
        $this->setCellPadding(0);

    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}