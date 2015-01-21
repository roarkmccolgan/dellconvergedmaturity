<?php

class Pdf extends \Maxxscho\LaravelTcpdf\LaravelTcpdf {

	var $tempLabels = array('business'=>'Business effectiveness and IT capability', 'security'=>'IT Security', 'cloud'=>'Cloud solutions', 'mobility'=>'Mobility and BYOD', 'bigdataanalytics'=>'Big Data Analytics');
    //Page header
    public function Header() {

        if ($this->header_xobjid === false) {
            // start a new XObject Template
            $this->header_xobjid = $this->startTemplate($this->w, $this->tMargin);
            $headerfont = $this->getHeaderFont();
            $this->headerdata = $this->getHeaderData();
            
            $this->ImageEps(K_PATH_IMAGES.$this->headerdata['logo'], 0, 0, $this->headerdata['logo_width']);
            $imgy = $this->getImageRBY();

            $this->x = $this->w - $this->original_rMargin-35;
            $this->y = $this->header_margin+2;
            $this->Image(K_PATH_IMAGES.'idc_logo.jpg', '', '', 35);
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
	
	public function startPage($orientation='', $format='', $tocpage=false) {
		if ($tocpage) {
			$this->tocpage = true;
		}
		// move page numbers of documents to be attached
		if ($this->tocpage) {
			// move reference to unexistent pages (used for page attachments)
			// adjust outlines
			$tmpoutlines = $this->outlines;
			foreach ($tmpoutlines as $key => $outline) {
				if (!$outline['f'] AND ($outline['p'] > $this->numpages)) {
					$this->outlines[$key]['p'] = ($outline['p'] + 1);
				}
			}
			// adjust dests
			$tmpdests = $this->dests;
			foreach ($tmpdests as $key => $dest) {
				if (!$dest['f'] AND ($dest['p'] > $this->numpages)) {
					$this->dests[$key]['p'] = ($dest['p'] + 1);
				}
			}
			// adjust links
			$tmplinks = $this->links;
			foreach ($tmplinks as $key => $link) {
				if (!$link['f'] AND ($link['p'] > $this->numpages)) {
					$this->links[$key]['p'] = ($link['p'] + 1);
				}
			}
		}
		if ($this->numpages > $this->page) {
			// this page has been already added
			$this->setPage($this->page + 1);
			$this->SetY($this->tMargin);
			return;
		}
		// start a new page
		if ($this->state == 0) {
			$this->Open();
		}
		++$this->numpages;
		$this->swapMargins($this->booklet);
		// save current graphic settings
		$gvars = $this->getGraphicVars();
		// start new page
		$this->_beginpage($orientation, $format);
		// mark page as open
		$this->pageopen[$this->page] = true;
		// restore graphic settings
		$this->setGraphicVars($gvars);
		// mark this point
		$this->setPageMark();
		// print page header
		$this->setHeader();
		// restore graphic settings
		$this->setGraphicVars($gvars);
		// mark this point
		$this->setPageMark();
		// print table header (if any)
		$this->setTableHeader();
		// set mark for empty page check
		$this->emptypagemrk[$this->page]= $this->pagelen[$this->page];
		
		if($this->Getpage()!=1){
			$this->drawBorder();
		}
	}
	
	
	public function intro($result,$baseline,$quiz){
		File::requireOnce(app_path().'/library/SVGGraph/SVGGraph.php');
		$this->SetY(25);
		$this->SetLineStyle(array('width' => 0.85 / $this->k, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(147)));
		$this->SetX($this->original_lMargin);
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 88,89,91);
		$this->Cell(($this->w - $this->original_lMargin - $this->original_rMargin), 0, 'RESULTS', 'B', 2, 'L');
		
		$this->SetFont('helvetica', '', 8);
		
		$txt = "
Thank you for completing the IDC How TechFit Are You quiz sponsored by HP. The quiz aims to establish your organisation's fitness and ability to cope with the latest technology challenges in the following areas: ";

		$this->MultiCell(($this->w/2 - $this->original_lMargin), 0, $txt, 0, 'L');
		
		$this->SetXY($this->GetX()+5, $this->GetY()+3);
		$this->ImageEps(K_PATH_IMAGES.'business.ai', '', '', 5);
		$this->SetX($this->GetX()+6);
		$this->Cell(75, 0, 'Business effectiveness and IT capability', 0, 2, 'L');
		
		$this->SetXY($this->GetX()-6, $this->GetY()+1);
		$this->ImageEps(K_PATH_IMAGES.'security.ai', '', '', 4);
		$this->SetXY($this->GetX()+6, $this->GetY()+1.5);
		$this->Cell(75, 0, 'IT Security', 0, 2, 'L');
		
		$this->SetXY($this->GetX()-6, $this->GetY()+2);
		$this->ImageEps(K_PATH_IMAGES.'cloud.ai', '', '', 4.5);
		$this->SetXY($this->GetX()+6, $this->GetY());
		$this->Cell(75, 0, 'Cloud solutions', 0, 2, 'L');
		
		$this->SetXY($this->GetX()-5.5, $this->GetY()+2);
		$this->ImageEps(K_PATH_IMAGES.'mobility.ai', '', '', 3);
		$this->SetXY($this->GetX()+5.5, $this->GetY());
		$this->Cell(75, 0, 'Mobility and BYOD', 0, 2, 'L');
		
		$this->SetXY($this->GetX()-6, $this->GetY()+2);
		$this->ImageEps(K_PATH_IMAGES.'bigdataanalytics.ai', '', '', 4);
		$this->SetXY($this->GetX()+6, $this->GetY());
		$this->Cell(75, 0, 'Big Data Analytics', 0, 2, 'L');
		
		$this->SetY($this->GetY()+4);
		
		$this->SetFont('helvetica', 'I', 8);
		$txt = "Based on your responses, we would classify your overall TechFitness as:";
		$this->MultiCell(($this->w/2 - $this->original_lMargin), 0, $txt, 0, 'L');
		
		$this->SetFont('helvetica', 'B', 8);
		$this->SetColor('text', 0,82,148);
		$this->SetY($this->GetY()+2);
		$this->Cell(($this->w - $this->original_lMargin), 0, strtoupper($result['overall']['rating']), 0, 1, 'L');
		$this->resetText();
		
		switch($result['overall']['rating']){
			case "Proactive":
				$txt = "Congratulations! You are ahead of the curve and demonstrate a competitive advantage through technology leadership.";
				break;
			case "Moderate":
				$txt = "Your organisation is at the midway point. There are some IT initiatives in place, but you still need to catch up.";
				break;
			case "Reactive":
				$txt = "Your organisation is falling behind your competitors and is not sufficiently responding to major challenges.";
				break;
		}
		$this->SetY($this->GetY()+2);
		$this->MultiCell(($this->w/2 - $this->original_lMargin), 0, $txt, 0, 'L');
		$this->resetText();
		
		$improve = 0;
		foreach($result as $key=>$res){
			if($key!='overall' && ($res['rating']=='Reactive' || $res['rating']=='Moderate')){
				if($improve==0){
					$txt = "
Based on your responses you can look to improve your overall score by focusing on improving your:";
					$this->MultiCell(($this->w/2 - $this->original_lMargin), 0, $txt, 0, 'L');
					$this->SetY($this->GetY()+2);
					$this->SetColor('text', 0,82,148);
				}
				
				if($this->GetX()+$this->GetStringWidth($this->tempLabels[strtolower($key)])+2 > ($this->w/2 - $this->original_lMargin)){
					$this->SetXY($this->original_lMargin, $this->GetY()+1);
					$this->ln();
				}
				
				$this->Cell($this->GetStringWidth($this->tempLabels[strtolower($key)])+2, 0, " • ".$this->tempLabels[strtolower($key)], 0, 0, 'L');
				$this->SetX($this->GetX()+2);
				$improve++;
			}
		}
		
		//graphs
		$this->SetY($this->GetY()+2);
		$this->RoundedRect(($this->w/2 - $this->original_lMargin)+15, 34, ($this->w/2 - $this->original_lMargin - 5), 30, 5, '1010', 'F',array(), array(230,231,232));
		
		$rightX = ($this->w/2 - $this->original_lMargin)+17;
		$this->SetXY($rightX, 36);
		$this->SetFont('helvetica', '', 9);
		$this->SetColor('text', 0,82,148);
		$this->Cell(($this->w/2 - $this->original_lMargin - 5), 0, 'OVERALL TECHFITNESS', 0, 1, 'L');
		
		
		//first graph
		$settings = array(
			'back_colour' => '#eee',
			'stroke_colour' => '#000',
			'back_stroke_width' => 0,
			'show_bar_labels' => 1,
			'bar_label_position' => 'above',
			'bar_label_font_size' => 14,
			'bar_label_space' => 5,
			'bar_label_colour' => '#005294',
			'show_grid' => false,
			'show_axis_h' => false,
			'show_axis_v' => false,
			'stroke_width' => 0,
			'back_stroke_colour' => '#eee',
			'axis_colour' => '#333',
			'axis_overlap' => 2,
			'axis_font' => 'Georgia',
			'axis_font_size' => 10,
			'grid_colour' => '#666',
			'label_colour' => '#000',
			'pad_right' => 10,
			'pad_left' => 10,
			'grid_division_h' => 20
        );
		$colours = array('#9334B8','#A4D36C');
		$graph = new SVGGraph(300, 120, $settings);
		$graph->colours = $colours;
		$values = array(
			 array('BASELINE SCORE' => $baseline['overall']['baseline'], 'YOUR SCORE' => $result['overall']['score'])
		);
		$graph->Values($values);
		
		$output = $graph->fetch('HorizontalBarGraph');
		$this->ImageSVG('@'.$output, $rightX, $this->GetY(), $w=60, $h='', '', $align='', $palign='', '', $fitonpage=false);
		
		$this->RoundedRect(($this->w/2 - $this->original_lMargin)+15, 70, ($this->w/2 - $this->original_lMargin - 5), 45, 5, '1010', 'F',array(), array(230,231,232));
		
		//overall
		$this->SetXY($rightX+65, 43);
		$this->SetFont('helvetica_condensed', '', 10);
		$this->SetColor('text', 172);
		$this->Cell(30, 0, strtoupper($result['overall']['rating']), 0, 1, 'L');
		$this->SetX($rightX+65);
		$this->SetFont('impact', '', 34);
		$this->Cell(30, 0, strtoupper($result['overall']['score']), 0, 1, 'L');
		
		//second graph
		$this->SetXY($rightX, 72);
		$this->SetFont('helvetica', '', 9);
		$this->SetColor('text', 0,82,148);
		$this->Cell(($this->w/2 - $this->original_lMargin - 5), 0, 'SECTION RESULTS', 0, 1, 'L');
		
		$settings = array(
			'back_colour' => '#eee',
			'stroke_colour' => '#000',
			'back_stroke_width' => 0,
			'show_grid' => false,
			'show_axis_h' => false,
			'show_axis_v' => false,
			'stroke_width' => 0,
			'back_stroke_colour' => '#eee',
			'axis_colour' => '#333',
			'axis_overlap' => 2,
			'axis_font' => 'Georgia',
			'axis_font_size' => 10,
			'grid_colour' => '#666',
			'label_colour' => '#000',
			'pad_right' => 10,
			'pad_left' => 10,
			'bar_space' => 15,
			'grid_division_v' => 10,
			'show_axis_text_h' => false
			
        );
		$colours = array('#A4D36C','#9334B8');
		$graph = new SVGGraph(300, 100, $settings);
		$graph->colours = $colours;
		$values = array(
			 array('Business effectiveness and IT capability' => $result['business']['score'], 'IT Security' => $result['security']['score'], 'Cloud solutions' => $result['cloud']['score'], 'Mobility and BYOD' => $result['mobility']['score'], 'Big Data Analytics' => $result['bigdataanalytics']['score']),
			 array('Business effectiveness and IT capability' => $baseline['business']['baseline'], 'IT Security' => $baseline['security']['baseline'], 'Cloud solutions' => $baseline['cloud']['baseline'], 'Mobility and BYOD' => $baseline['mobility']['baseline'], 'Big Data Analytics' => $baseline['bigdataanalytics']['baseline'])
		);
		$graph->Values($values);
		//first graph
		$output = $graph->fetch('GroupedBarGraph');
		$this->ImageSVG('@'.$output, $rightX, $this->GetY(), $w=84, $h='', '', $align='', $palign='', '', $fitonpage=false);
		
		//legend
		$this->SetFont('helvetica_condensed', '', 8);
		$this->SetColor('text', 88,89,91);
		$this->Rect($rightX+40,$this->getY()-3,4,4,'F',array(),array(164, 211, 108));
		$this->SetXY($rightX+45,$this->getY()-2.5);
		$this->MultiCell(15, 5, 'Your Result', 0, 'L', 0, 0, '', '', true);
		
		$this->Rect($rightX+60,$this->getY()-.5,4,4,'F',array(),array(147, 52, 184));
		$this->SetXY($rightX+65,$this->getY());
		$this->MultiCell(20, 5, 'Baseline Result', 0, 'L', 0, 0, '', '', true);
		
		//x-axiz lables
		$this->SetColor('text', 0,82,148);
		$this->SetXY($rightX+7,$this->getY()+28);
		
		$this->SetFont('helvetica_condensed', '', 8);
		$this->MultiCell(15, 5, 'Business effectiveness & IT capability', 0, 'C', 0, 0, '', '', true);
        $this->MultiCell(15, 5, 'IT Security', 0, 'C', 0, 0, '', '', true);
        $this->MultiCell(15, 5, 'Cloud solutions', 0, 'C', 0, 0, '', '', true);
        $this->MultiCell(15, 5, 'Mobility & BYOD',0, 'C', 0, 0, '', '', true);
        $this->MultiCell(15, 5, 'Big Data Analytics', 0, 'C', 0, 0, '', '', true);
		$this->SetY($this->getY()+23);
		$this->resetText();
		
		//copy
		$this->drawBorder();
		
		//get_answers
		$answers = array();
		foreach($quiz as $section=>$props){
			if($section!='screeners'){
				foreach($props['pages'] as $page=>$details){
					foreach($details['questions'] as $q=>$att){
						if(!is_array($att['selected'])){
							$val = explode("|", $att['selected']);
							$answers[$q] = (int) $val[1];
						}else{
							$answers[$q] = 0;
							foreach($att['selected'] as $select){
								$val = explode("|", $select);
								$answers[$q] += (int) $val[1];
							}
						}
					}
				}
			}
		}
		
		$style3 = array('width' => .5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(174));
		$indent = 24;
		$bullet = 4;
		$margins = $this->GetMargins();
		
		$para_cell = $this->w - $margins['left'] - $margins['right']-$indent;
		$bullet_cell = $this->w - $margins['left'] - $margins['right']-($indent+$bullet);
		
		//business
		$this->SetX($this->GetX()+2);
		$this->ImageEps(K_PATH_IMAGES.'business.ai', '', '', 10);
		$this->SetXY($indent, $this->GetY()+1);
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->Cell(0, 0, strtoupper('Business effectiveness and IT capability'), 0, 2, 'L');
		$this->resetText();
		
		$txt = "According to your responses in this section, your organisation's Business Effectiveness &amp; IT Capability TechFitness is: <b>".$result['business']['rating']."</b>";
		$this->writeHTMLCell($para_cell,0,$this->GetX(),$this->GetY()+1, $txt, 0, 1);
		$this->ln();
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->SetX($indent);
		$this->Cell(0, 0, 'How To Get Ahead?', 0, 2, 'L');
		$this->resetText();
		
		$txt = "<b>IT should not be considered a cost centre in organisations.</b> IT should be considered crucial in achieving a competitive advantage. Currently, only 56% of European organisations believe that their IT makes an important contribution to business objectives";
		$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
		$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		
		if($answers['b2']<5){
			$txt = "<b>Ensure compliance risks are understood throughout the business.</b> Regulatory compliance is increasingly more prescriptive and officials more fervent in what they expect from organisation's compliance programs. Regulatory compliance should be integrated into IT strategies at the development stage with a major focus on security";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['b3']<5){
			$txt = "<b>Understand the business processes and requirements before attempting to automate document workflow.</b> Digitised business workflows have been adopted, or plan to be adopted by three quarters of organisations interviewed, however to successfully deploy an automated document workflow you need a full understanding of business rules and procedures before looking for the right solution.";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['b4']<5){
			$txt = "<b>Adopt telecom expense management to manage costs.</b> 86% of organisations have adopted the use of mobile devices, the cost of running these are very much driven by individual usage. The need to control the cost of these devices is therefore of critical importance. Around one-third of companies are adopting telecom expense management to manage costs associated with mobile device usage.";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['b5']<5){
			$txt = "<b>Implement print device usage and reporting facilities.</b> Controlling who can print what, and where, leads to considerable cost savings, as well as other benefits such as enhanced privacy and security, reducing legal and business risk. IDC research shows that 26% of European SMBs have printing device usage and reporting facilities in place today, while 24% have implemented printing device security and ID solutions.";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		//it
		$this->SetXY($this->GetX()+3,$this->GetY()+5);
		$this->ImageEps(K_PATH_IMAGES.'security.ai', '', '', 7);
		$this->SetXY($indent, $this->GetY()+1);
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->Cell(0, 0, strtoupper('IT Security'), 0, 2, 'L');
		$this->resetText();
		
		$txt = "According to your responses in this section, your organisation's IT Security TechFitness i: <b>".$result['security']['rating']."</b>";
		$this->writeHTMLCell($para_cell,0,$this->GetX(),$this->GetY()+1, $txt, 0, 1);
		$this->ln();
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->SetX($indent);
		$this->Cell(0, 0, 'How To Get Ahead?', 0, 2, 'L');
		$this->resetText();
		
		$txt = "<b>Security is a business function that needs to be incorporated into the way you do business.</b> Security should be built by design rather than as a bolt on afterthought. 93% of IT users view the improvement of security for existing employees and devices as their highest security priority";
		$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
		$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		
		if($answers['e2']<5){
			$txt = "<b>Create secure, protected workspaces within central servers to eliminate risks in the deployment of mobile devices.</b> Mobile employees drive the need for secure access to data, however data loss prevention is a serious and recurring problem for almost all organisations. Sensitive data protection is the second most important business objective for businesses (60%)";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['e3']<5){
			$txt = "<b>Restrict printing to 'document owner present' minimises sensitive data loss through unauthorised persons reading/copying documents.</b> Loss of data or unauthorised copying and reading of sensitive documents can be a serious business risk and open the door to legal action. Around 30% of European SMBs have such solutions in place today.";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['e4']<5){
			$txt = "<b>Control your mobile devices through Mobile Device Management (MDM) software.</b> MDM allows network administrators to secure mobile devices regardless of connection. The management of mobile computing should be based on the principle of isolation of transactions so that any malware incursion can be isolated, examined, and then discarded. Other features include the encryption of files, authentication and access privileges, locking down applications, and validating security identification. 62% of companies below 1000 employees have adopted, or will adopt within the next 24 months, MDM. ";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		//cloud
		$this->SetXY($this->GetX()+3,$this->GetY()+6);
		$this->ImageEps(K_PATH_IMAGES.'cloud.ai', '', '', 8);
		$this->SetXY($indent, $this->GetY());
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->Cell(0, 0, strtoupper('Cloud solutions'), 0, 2, 'L');
		$this->resetText();
		
		$txt = "According to your responses in this section, your organisation's Cloud TechFitness is: <b>".$result['cloud']['rating']."</b>";
		$this->writeHTMLCell($para_cell,0,$this->GetX(),$this->GetY()+1, $txt, 0, 1);
		$this->ln();
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->SetX($indent);
		$this->Cell(0, 0, 'How To Get Ahead?', 0, 2, 'L');
		$this->resetText();
		
		$txt = "<b>Focus on the architecture and planning.</b> Cloud has the potential to turn any mobile device into a supercomputer, providing access to processing power as needed to analyse virtually any type of information required. However, performance issues can affect cloud computing efforts; this is caused by cloud-based apps being widely distributed, with the data far away from the application logic. Unless careful planning has gone into the design of the system, latency and reliability may become major issues.";
		$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
		$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		
		if($answers['c2']<5){
			$txt = "<b>Inform, educate, and control users over their file sharing activities.</b> Although Cloud storage facilitates collaboration, mobile working, and can be more cost-effective, it is also in high demand from end-users and not having a solution in place leads to increased 'shadow IT' as users adopt consumer solutions. This in turn may lead to increased business risk through lack of control. In the latest IDC survey around 20% of organisations had implemented a cloud-based file sharing solution – mostly to a restricted set of users";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['c3']<5){
			$txt = "<b>Evaluate your data security needs.</b> Preferences for data location and data security are often based on personal preference and misinformation. Consult with your local data privacy office to understand the actual requirements for certain data types, such as financial information, customer information, employee information, and personal identifiable information";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['c4']<5){
			$txt = "<b>Audit your organisation's printing infrastructure.</b> Consider device type (printer, MFP, toner, inkjet), brand, and age of devices. Evaluate the requirements of your internal customers – and, potentially, of external partners and other stakeholders that may need to print at corporate locations – including document types and output features. Today, 39% of European companies utilise cloud-printing, potentially benefitting from increased productivity and flexibility, while reducing the need for local infrastructure (fewer PCs deployed).";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['c5']<5){
			$txt = "<b>Evaluate your existing level of maturity for cloud services to begin vendor qualification process.</b> 70% of surveyed organisations stated that improving IT security due to Cloud/SaaS usage was a very or extremely important part of strategy for the upcoming 12 months. Investment in the correct training and development is needed for the enterprise staff to ensure they understand how to operate securely in a cloud environment";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		//mobility
		$this->SetXY($this->GetX()+4,$this->GetY()+6);
		$this->ImageEps(K_PATH_IMAGES.'mobility.ai', '', '', 6);
		$this->SetXY($indent, $this->GetY());
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->Cell(0, 0, strtoupper('Mobility and BYOD'), 0, 2, 'L');
		$this->resetText();
		
		$txt = "According to your responses in this section, your organisation's Mobility and BYOD TechFitness is: <b>".$result['mobility']['rating']."</b>";
		$this->writeHTMLCell($para_cell,0,$this->GetX(),$this->GetY()+1, $txt, 0, 1);
		$this->ln();
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->SetX($indent);
		$this->Cell(0, 0, 'How To Get Ahead?', 0, 2, 'L');
		$this->resetText();
		
		$txt = "<b>Ensure your BYOD policy is up to date with your BYOD practice.</b> 53% of companies worldwide have some type of BYOD practice, however only 25% have a formal policy in place to support usage. With the growth in BYOD, organisations face growing threats to security risks. The need for effective governance of employee-managed devices and the utilisation of technology that allows employees to access information remotely without bringing it onto their personal devices will help to control security breaches";
		$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
		$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		
		if($answers['m2']<5){
			$txt = "<b>Shift your focus from technology to solutions and business enablement in your go-to-market strategy.</b> Organisations are maturing in their application strategies and building, deploying and distributing a wide number of native or hybrid applications via multiple back-end systems. 25% of companies surveyed have at least launched their first mobile app and 5% have launched more than one. ";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['m3']<5){
			$txt = "<b>Consider multiple platforms and points of access for your staff.</b> Tablets can be a powerful tool for mobile staff, for knowledge workers, and for management wanting better access to reporting. The most recent IDC study shows that 62% of companies have evaluated or deployed tablets. ";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['m4']<5){
			$txt = "<b>Consider mobile print solutions that are easy to operate and suitable for use in the work environment.</b> Staff requests to print using a mobile device are increasing (75% of companies interviewed saw an increase in requests). Seamless mobility can drive new business processes and improve worker productivity. Successful mobile printing solutions depend on a convenient, intuitive process for workers to follow";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['m5']<5){
			$txt = "<b>Consider implementing mobile print facilities for mobile workers.</b> The ability to print is fundamental to productivity and mobility. 68% of European organisations allow printing from outside the office, not being able to print remotely hampers productivity and the distribution of information. Ensure that the mobile print facilities are secure and private.";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		//bigdataanalytics
		$this->SetXY($this->GetX()+4,$this->GetY()+6);
		$this->ImageEps(K_PATH_IMAGES.'bigdataanalytics.ai', '', '', 6);
		$this->SetXY($indent, $this->GetY());
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->Cell(0, 0, strtoupper('Big Data Analytics'), 0, 2, 'L');
		$this->resetText();
		
		$txt = "According to your responses in this section, your organisation's Big Data and Analytics TechFitness is: <b>".$result['bigdataanalytics']['rating']."</b>";
		$this->writeHTMLCell($para_cell,0,$this->GetX(),$this->GetY()+1, $txt, 0, 1);
		$this->ln();
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->SetX($indent);
		$this->Cell(0, 0, 'How To Get Ahead?', 0, 2, 'L');
		$this->resetText();
		
		if($answers['d1']<5){
			$txt = "<b>Provide visual and interactive analytics tools to empower employees.</b> The use of visualization tools is common among European companies to drive business success and agility. The tools allow employees to analyze vast quantities of data, including social media to take full advantage improving customer satisfaction. ";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['d2']<5){
			$txt = "<b>Cloud-based analytics should be considered with other means of analytics solution deployment options.</b> Users are able to access analytical functionality more readily than on-premise deployments, and departments or smaller work groups can often fund purchases through operational budgets. ";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['d3']<5){
			$txt = "<b>Drive the C-agenda with Big Data.</b> The promise of better and faster data-driven decision making has pushed the Big Data initiative to the top of C-suite agenda. Access to information and the ability to create collective organisational intelligence as well as being able to act on these insights in a timely manner creates competitive advantage. 21% of European organisations have access to Big Data, whether via a feed into an existing production system or a Big Data–specific production system. ";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['d4']<5){
			$txt = "<b>Monitor your social media sentiment to ensure you are gaining the most from your customer base.</b> As customers are increasingly becoming multi-channel with suppliers, it is important to monitor and understand your customer requirements. In a recent European survey 15% of organisations said they use Big Data to analyse or utilise social media information. This needn't be a big in-house operation, but it may make more sense to use simple cloud services or applications that offer social dashboards, alerting and timeline views";
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
	}
	
	public function resetText(){
		$this->SetFont('helvetica', '', 8);
		$this->SetColor('text', 88,89,91);
	}
	
	public function drawBorder(){
		$margins = $this->GetMargins();
		$this->RoundedRect($this->original_lMargin , $this->GetY()-3, $this->w - $this->original_lMargin - $this->original_rMargin, $this->h - $this->GetY() - ($margins['footer']-5), 5, '1010', 'D',array(147,149,152), array());
		$this->SetY($this->GetY()+5);
	}
	

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font		
        $this->SetFont('helvetica', 'I', 8);
		$this->SetColor('text', 88,89,91);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
		
		$this->ImageEps(K_PATH_IMAGES.'sponsored.ai', $this->w-$this->original_rMargin-24, $this->GetY()-2, 28);
    }
}