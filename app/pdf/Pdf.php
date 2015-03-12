<?php

class Pdf extends \Maxxscho\LaravelTcpdf\LaravelTcpdf {

	var $tempLabels;
	var $copyY;
	
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
		$bus = Lang::get('report.business');
		$sec = Lang::get('report.security');
		$clo = Lang::get('report.cloud');
		$mob = Lang::get('report.mobility');
		$dat = Lang::get('report.data');
		
		$this->tempLabels = array('business'=>$bus, 'security'=>$sec, 'cloud'=>$clo, 'mobility'=>$mob, 'bigdataanalytics'=>$dat);
		
		$this->SetY(25);
		$this->SetLineStyle(array('width' => 0.85 / $this->k, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(147)));
		$this->SetX($this->original_lMargin);
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 88,89,91);
		$this->Cell(($this->w - $this->original_lMargin - $this->original_rMargin), 0, strtoupper(Lang::get('report.results')), 'B', 2, 'L');
		
		$this->SetFont('helvetica', '', 8);
		
		$txt = "
".Lang::get('report.thankyou')." ".Lang::get('report.aims');

		$this->MultiCell(($this->w/2 - $this->original_lMargin), 0, $txt, 0, 'L');
		
		$this->SetXY($this->GetX()+5, $this->GetY()+3);
		$this->ImageEps(K_PATH_IMAGES.'business.ai', '', '', 5);
		$this->SetX($this->GetX()+6);
		$this->Cell(75, 0, Lang::get('report.business'), 0, 2, 'L');
		
		$this->SetXY($this->GetX()-6, $this->GetY()+1);
		$this->ImageEps(K_PATH_IMAGES.'security.ai', '', '', 4);
		$this->SetXY($this->GetX()+6, $this->GetY()+1.5);
		$this->Cell(75, 0, Lang::get('report.security'), 0, 2, 'L');
		
		$this->SetXY($this->GetX()-6, $this->GetY()+2);
		$this->ImageEps(K_PATH_IMAGES.'cloud.ai', '', '', 4.5);
		$this->SetXY($this->GetX()+6, $this->GetY());
		$this->Cell(75, 0, Lang::get('report.cloud'), 0, 2, 'L');
		
		$this->SetXY($this->GetX()-5.5, $this->GetY()+2);
		$this->ImageEps(K_PATH_IMAGES.'mobility.ai', '', '', 3);
		$this->SetXY($this->GetX()+5.5, $this->GetY());
		$this->Cell(75, 0, Lang::get('report.mobility'), 0, 2, 'L');
		
		$this->SetXY($this->GetX()-6, $this->GetY()+2);
		$this->ImageEps(K_PATH_IMAGES.'bigdataanalytics.ai', '', '', 4);
		$this->SetXY($this->GetX()+6, $this->GetY());
		$this->Cell(75, 0, Lang::get('report.data'), 0, 2, 'L');
		
		$this->SetY($this->GetY()+4);
		
		$this->SetFont('helvetica', 'I', 8);
		$txt = Lang::get('report.based');
		$this->MultiCell(($this->w/2 - $this->original_lMargin), 0, $txt, 0, 'L');
		
		$this->SetFont('helvetica', 'B', 8);
		$this->SetColor('text', 0,82,148);
		$this->SetY($this->GetY()+2);
		$this->Cell(($this->w - $this->original_lMargin), 0, strtoupper(Lang::get('general.'.strtolower($result['overall']['rating']))), 0, 1, 'L');
		$this->resetText();
		
		switch($result['overall']['rating']){
			case "Proactive":
				$txt = Lang::get('report.proactiveintro');
				break;
			case "Moderate":
				$txt = Lang::get('report.moderateintro');
				break;
			case "Reactive":
				$txt = Lang::get('report.reactiveintro');
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
".Lang::get('report.basedimprove');;
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
		$this->copyY = $this->GetY();
		
		//graphs
		$this->SetY($this->GetY()+2);
		$this->RoundedRect(($this->w/2 - $this->original_lMargin)+15, 34, ($this->w/2 - $this->original_lMargin - 5), 30, 5, '1010', 'F',array(), array(230,231,232));
		
		$rightX = ($this->w/2 - $this->original_lMargin)+17;
		$this->SetXY($rightX, 36);
		$this->SetFont('helvetica', '', 9);
		$this->SetColor('text', 0,82,148);
		$this->Cell(($this->w/2 - $this->original_lMargin - 5), 0, strtoupper(Lang::get('report.overall')), 0, 1, 'L');
		
		
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
			 array(strtoupper(Lang::get('report.baselinescore')) => $baseline['overall']['baseline'], strtoupper(Lang::get('report.yourscore')) => $result['overall']['score'])
		);
		$graph->Values($values);
		
		$output = $graph->fetch('HorizontalBarGraph');
		$this->ImageSVG('@'.$output, $rightX, $this->GetY(), $w=60, $h='', '', $align='', $palign='', '', $fitonpage=false);
		
		$this->RoundedRect(($this->w/2 - $this->original_lMargin)+15, 70, ($this->w/2 - $this->original_lMargin - 5), 45, 5, '1010', 'F',array(), array(230,231,232));
		
		//overall
		$this->SetXY($rightX+65, 43);
		$this->SetFont('helvetica_condensed', '', 10);
		$this->SetColor('text', 172);
		$this->Cell(30, 0, strtoupper(Lang::get('general.'.strtolower($result['overall']['rating']))), 0, 1, 'L');
		$this->SetX($rightX+65);
		$this->SetFont('impact', '', 34);
		$this->Cell(30, 0, $result['overall']['score'], 0, 1, 'L');
		
		//second graph
		$this->SetXY($rightX, 72);
		$this->SetFont('helvetica', '', 9);
		$this->SetColor('text', 0,82,148);
		$this->Cell(($this->w/2 - $this->original_lMargin - 5), 0, strtoupper(Lang::get('report.section')), 0, 1, 'L');
		
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
			 array(Lang::get('report.business') => $result['business']['score'], Lang::get('report.security') => $result['security']['score'], Lang::get('report.cloud') => $result['cloud']['score'], Lang::get('report.mobility') => $result['mobility']['score'], Lang::get('report.data') => $result['bigdataanalytics']['score']),
			 array(Lang::get('report.business') => $baseline['business']['baseline'], Lang::get('report.security') => $baseline['security']['baseline'], Lang::get('report.cloud') => $baseline['cloud']['baseline'], Lang::get('report.mobility') => $baseline['mobility']['baseline'], Lang::get('report.data') => $baseline['bigdataanalytics']['baseline'])
		);
		$graph->Values($values);
		//first graph
		$output = $graph->fetch('GroupedBarGraph');
		$this->ImageSVG('@'.$output, $rightX, $this->GetY(), $w=84, $h='', '', $align='', $palign='', '', $fitonpage=false);
		
		//legend
		$this->SetFont('helvetica_condensed', '', 8);
		$this->SetColor('text', 88,89,91);
		$this->Rect($rightX+40,$this->getY(),4,4,'F',array(),array(164, 211, 108));
		$this->SetXY($rightX+45,$this->getY());
		$this->MultiCell(15, 5, Lang::get('report.yourscore'), 0, 'L', 0, 0, '', '', true);
		
		$this->Rect($rightX+60,$this->getY()-.5,4,4,'F',array(),array(147, 52, 184));
		$this->SetXY($rightX+65,$this->getY());
		$this->MultiCell(20, 5, Lang::get('report.baselinescore'), 0, 'L', 0, 0, '', '', true);
		
		//x-axiz lables
		$this->SetColor('text', 0,82,148);
		$this->SetXY($rightX+7,$this->getY()+28);
		
		$this->SetFont('helvetica_condensed', '', 8);
		$this->MultiCell(15, 5, Lang::get('report.business'), 0, 'C', 0, 0, '', '', true);
        $this->MultiCell(15, 5, Lang::get('report.security'), 0, 'C', 0, 0, '', '', true);
        $this->MultiCell(15, 5, Lang::get('report.cloud'), 0, 'C', 0, 0, '', '', true);
        $this->MultiCell(15, 5, Lang::get('report.mobility'),0, 'C', 0, 0, '', '', true);
        $this->MultiCell(15, 5, Lang::get('report.data'), 0, 'C', 0, 0, '', '', true);
		//$this->SetY($this->getY()+23);
		$this->resetText();
		
		//copy
		$this->SetY($this->copyY+12);
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
		$this->Cell(0, 0, strtoupper(Lang::get('report.business')), 0, 2, 'L');
		$this->resetText();
		
		$txt = Lang::get('report.businesssummary')." <b>".Lang::get('general.'.strtolower($result['business']['rating']))."</b>";
		$this->writeHTMLCell($para_cell,0,$this->GetX(),$this->GetY()+1, $txt, 0, 1);
		$this->ln();
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->SetX($indent);
		$this->Cell(0, 0, Lang::get('report.getahead'), 0, 2, 'L');
		$this->resetText();
		
		$txt = Lang::get('report.business1');
		$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
		$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		
		if($answers['b2']<5){
			$txt = Lang::get('report.business2');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['b3']<5){
			$txt = Lang::get('report.business3');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['b4']<5){
			$txt = Lang::get('report.business4');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['b5']<5){
			$txt = Lang::get('report.business5');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		//it
		$this->SetXY($this->GetX()+3,$this->GetY()+5);
		$this->ImageEps(K_PATH_IMAGES.'security.ai', '', '', 7);
		$this->SetXY($indent, $this->GetY()+1);
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->Cell(0, 0, strtoupper(Lang::get('report.security')), 0, 2, 'L');
		$this->resetText();
		
		$txt =  Lang::get('report.securitysummary')." <b>".Lang::get('general.'.strtolower($result['security']['rating']))."</b>";
		$this->writeHTMLCell($para_cell,0,$this->GetX(),$this->GetY()+1, $txt, 0, 1);
		$this->ln();
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->SetX($indent);
		$this->Cell(0, 0, Lang::get('report.getahead'), 0, 2, 'L');
		$this->resetText();
		
		$txt = Lang::get('report.security1');
		$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
		$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		
		if($answers['e2']<5){
			$txt = Lang::get('report.security2');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['e3']<5){
			$txt = Lang::get('report.security3');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['e4']<5){
			$txt = Lang::get('report.security4');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		//cloud
		$this->SetXY($this->GetX()+3,$this->GetY()+6);
		$this->ImageEps(K_PATH_IMAGES.'cloud.ai', '', '', 8);
		$this->SetXY($indent, $this->GetY());
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->Cell(0, 0, strtoupper(Lang::get('report.cloud')), 0, 2, 'L');
		$this->resetText();
		
		$txt =  Lang::get('report.cloudsummary')." <b>".Lang::get('general.'.strtolower($result['cloud']['rating']))."</b>";
		$this->writeHTMLCell($para_cell,0,$this->GetX(),$this->GetY()+1, $txt, 0, 1);
		$this->ln();
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->SetX($indent);
		$this->Cell(0, 0, Lang::get('report.getahead'), 0, 2, 'L');
		$this->resetText();
		
		$txt = Lang::get('report.cloud1');
		$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
		$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		
		if($answers['c2']<5){
			$txt = Lang::get('report.cloud2');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['c3']<5){
			$txt = Lang::get('report.cloud3');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['c4']<5){
			$txt = Lang::get('report.cloud4');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['c5']<5){
			$txt = Lang::get('report.cloud5');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		//mobility
		$this->SetXY($this->GetX()+4,$this->GetY()+6);
		$this->ImageEps(K_PATH_IMAGES.'mobility.ai', '', '', 6);
		$this->SetXY($indent, $this->GetY());
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->Cell(0, 0, strtoupper(Lang::get('report.mobility')), 0, 2, 'L');
		$this->resetText();
		
		$txt =  Lang::get('report.mobilitysummary')." <b>".Lang::get('general.'.strtolower($result['mobility']['rating']))."</b>";
		$this->writeHTMLCell($para_cell,0,$this->GetX(),$this->GetY()+1, $txt, 0, 1);
		$this->ln();
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->SetX($indent);
		$this->Cell(0, 0, Lang::get('report.getahead'), 0, 2, 'L');
		$this->resetText();
		
		$txt = Lang::get('report.mobility1');
		$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
		$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		
		if($answers['m2']<5){
			$txt = Lang::get('report.mobility2');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['m3']<5){
			$txt = Lang::get('report.mobility3');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['m4']<5){
			$txt = Lang::get('report.mobility4');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['m5']<5){
			$txt = Lang::get('report.mobility5');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		//bigdataanalytics
		$this->SetXY($this->GetX()+4,$this->GetY()+6);
		$this->ImageEps(K_PATH_IMAGES.'bigdataanalytics.ai', '', '', 6);
		$this->SetXY($indent, $this->GetY());
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->Cell(0, 0, strtoupper(Lang::get('report.data')), 0, 2, 'L');
		$this->resetText();
		
		$txt = Lang::get('report.datasummary')." <b>".Lang::get('general.'.strtolower($result['bigdataanalytics']['rating']))."</b>";
		$this->writeHTMLCell($para_cell,0,$this->GetX(),$this->GetY()+1, $txt, 0, 1);
		$this->ln();
		
		$this->SetFont('helvetica', 'B', 10);
		$this->SetColor('text', 0,82,148);
		$this->SetX($indent);
		$this->Cell(0, 0, Lang::get('report.getahead'), 0, 2, 'L');
		$this->resetText();
		
		if($answers['d1']<5){
			$txt = Lang::get('report.data1');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['d2']<5){
			$txt = Lang::get('report.data2');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['d3']<5){
			$txt = Lang::get('report.data3');
			$this->Circle($indent+1.25,$this->GetY()+4,.75, 0, 360, 'D', $style3);
			$this->writeHTMLCell($bullet_cell,0,$indent+$bullet,$this->GetY()+2, $txt, 0, 1);
		}
		
		if($answers['d4']<5){
			$txt = Lang::get('report.data4');
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