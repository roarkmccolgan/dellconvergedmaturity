<?php
return array(
    'screeners' => array(
        'colour' => '',
        'display' => false,
        'complete' => false,
        'pages' => array(
        	'page1' => array(
                'title' => 'First things first. A couple of questions about you and your company.',
                'questions' => array(
                    's1'=>array(
                        'type'=>'icon',
                        'question'=>'Which of these best describes your role within your company?',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'class'=>'ico-it',
                                'label'=>'You run or work within the IT dept of your company',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-o',
                                'label'=>'Day to day you work outside of IT, but you influence IT policy',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'One more question before we begin.',
                'questions' => array(
                    's2'=>array(
                        'type'=>'icon',
                        'question'=>'How big is the company you work for or run?',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'class'=>'ico-few',
                                'label'=>'0-9 employees',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-more',
                                'label'=>'10-99 employees',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'ico-most',
                                'label'=>'Above 100 employees',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'business' => array(
        'colour' => 'orange',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Business Effectiveness &amp; IT Capability',
                'questions' => array(
                    'b1'=>array(
                        'type'=>'button',
                        'question'=>'How important is IT when it comes to your business goals, especially improving business performance and reducing operating costs?',
                        'name'=>'b1',
                        'options'=>array(
                            array(
                                'label'=>'Critically important',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Important contributor',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Moderate contributor',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Little or no importance',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )
            ),
            'page2' => array(
                'title' => 'Business Effectiveness &amp; IT Capability',
                'questions' => array(
                    'b2'=>array(
                        'type'=>'button',
                        'question'=>'How important is IT for you in achieving legal and regulatory compliance?',
                        'name'=>'b2',
                        'options'=>array(
                            array(
                                'label'=>'Critically important',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Important contributor',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Moderate contributor',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Little or no importance',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'In IDC\'s 2014 survey, Western European SMBs rated regulatory compliance as their third most critically important business priority in 2014 and IT has a vital role to play',
                    'image'=>'img/techfit_icons_Q-A2.png'
                )
            ),
            'page3' => array(
                'title' => 'Business Effectiveness &amp; IT Capability',
                'questions' => array(
                    'b3'=>array(
                        'type'=>'button',
                        'question'=>'Have you replaced, or are you planning to replace, key paper documents with digital alternatives?',
                        'name'=>'b3',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently investigating',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Digitised workflows reduce costs and allow superior retrieval and storage management. IDC surveys of West European SMBs show that only 26% of SMBs do not intend to replace their paper-based systems with document workflow software solutions – the rest either have done already (>40% in the case of accounting documents) or are planning to do so in the near future.',
                    'image'=>'img/techfit_icons_Q-A3.png'
                )
            ),
            'page4' => array(
                'title' => 'Business Effectiveness &amp; IT Capability',
                'questions' => array(
                    'b4'=>array(
                        'type'=>'button',
                        'question'=>'Do you use a wireless telecoms expense management solution to track the cost and use of company mobile devices?',
                        'name'=>'b4',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently investigating',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC surveys in Western Europe indicate that the percentage of companies using mobile devices ranges from 78% in healthcare to nearly 95% in telecom/media, where around 24% of employees are issued with a device. The average adoption is 86%. But the cost of these is very much driven by usage. Controlling the cost of these devices is therefore of critical importance.',
                    'image'=>'img/techfit_icons_Q-A4.png'
                )
            ),
            'page5' => array(
                'title' => 'Business Effectiveness &amp; IT Capability',
                'questions' => array(
                    'b5'=>array(
                        'type'=>'button',
                        'question'=>'Do you document or control who uses office printers and when they use them?',
                        'name'=>'b5',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently investigating',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Controlling who can print what, and where, leads to considerable cost-savings, as well as other benefits such as enhanced privacy and security, reducing legal and business risk. IDC research shows that 26% of West European SMBs have printing device usage and reporting facilities in place today, while 24% have implemented printing device security and ID solutions.',
                    'image'=>'img/techfit_icons_Q-A5.png'
                )
            )
        )
    )
);