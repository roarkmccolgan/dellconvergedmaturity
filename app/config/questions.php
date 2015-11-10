<?php
return array(
    'demographics' => array(
        'title' => 'Demographics',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'display' => false,
        'complete' => false,
        'pages' => array(
        	'page1' => array(
                'title' => 'In which country is the company you work for situated?',
                'questions' => array(
                    's1'=>array(
                        'type'=>'radio',
                        'question'=>'In which country is the company you work for situated?',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'class'=>'',
                                'label'=>'France',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Germany',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'UK',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'How many full time employees work at your organization in that country',
                'questions' => array(
                    's2'=>array(
                        'type'=>'radio',
                        'question'=>'How many full time employees work at your organization in that country',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'class'=>'',
                                'label'=>'Less than 500',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'500-999',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'1,000 or more',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Which of the following industry classifications best represents your organization?',
                'questions' => array(
                    's3'=>array(
                        'type'=>'radio',
                        'question'=>'Which of the following industry classifications best represents your organization?',
                        'name'=>'s3',
                        'options'=>array(
                            array(
                                'class'=>'',
                                'label'=>'Financial services',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Manufacturing',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Telecommunications services',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Transport, distribution and logistics',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Retail and Wholesale',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'IT consulting and IT-related professional services',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Non-IT consulting and other professional services',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Central or Local Government, or Public services',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Charity or non-profit',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Other',
                                'value'=>false,
                                'checked'=>false,
                                'custom' => 'input'
                            )
                        )
                    )
                )//end question
            )//end page
        )
    ),
    'itbusiness' => array(
        'title' => 'IT and the Business',
        'description' => 'The following questions ask about how IT is aligned with the business and how it supports the ongoing strategic plan and requirements',
        'colour' => 'orange',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Which statement best reflects how the role of IT is seen by the Senior Management of the business?',
                'questions' => array(
                    'a1'=>array(
                        'type'=>'radio',
                        'question'=>'Which statement best reflects how the role of IT is seen by the Senior Management of the business?',
                        'name'=>'a1',
                        'options'=>array(
                            array(
                                'label'=>'IT is seen as a necessary cost',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT is seen as a enabler of business efficiency',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT is seen as a driver of competitive advantage and/or revenue growth',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page2' => array(
                'title' => 'How would you describe the level of IT investment in your organization?',
                'questions' => array(
                    'a2'=>array(
                        'type'=>'radio',
                        'question'=>'How would you describe the level of IT investment in your organization?',
                        'name'=>'a2',
                        'options'=>array(
                            array(
                                'label'=>'IT investment is not nearly enough for what we need to do',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT investment is tight, barely covering essential operations',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT investment is generally good for core operations, but tight for new initiatives',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT investment is good for core operations, and for new initiatives where the value is clear',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT Investment is readily available across the board with a good business case, even for experimental development',
                                'value'=>5,
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
                'title' => 'When it comes to business requests for new or enhanced applications or services, which statement best reflects your IT department\'s capabilities?',
                'questions' => array(
                    'a3'=>array(
                        'type'=>'radio',
                        'question'=>'When it comes to business requests for new or enhanced applications or services, which statement best reflects your IT department\'s capabilities?',
                        'name'=>'a3',
                        'options'=>array(
                            array(
                                'label'=>'We struggle to deal with most requests',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are generally OK with requests around existing applications or services, but struggle with requests for new or enhanced services',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are generally OK with requests both for existing applications and services, and new or enhanced services',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are very good at delivery on most or all requests',
                                'value'=>5,
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
                'title' => 'How involved is IT in overall projects and business initiatives?',
                'questions' => array(
                    'a4'=>array(
                        'type'=>'radio',
                        'question'=>'How involved is IT in overall projects and business initiatives?',
                        'name'=>'a4',
                        'options'=>array(
                            array(
                                'label'=>'The business tends to go ahead with many projects with technology requirements without bringing IT in, and we actively have to find out what is going on',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are involved in all or most projects that have identified with technology requirements, but often not early or deeply enough',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are heavily involved in all or most projects that have identified technology requirements',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are heavily involved in the planning of most or all business projects, even those that don\'t always have an identified technology requirements',
                                'value'=>5,
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
                'title' => 'Which statements describe the activities that you do to gauge your IT department\'s maturity and capability compared to best in class or other companies in the industry?',
                'questions' => array(
                    'a5'=>array(
                        'type'=>'radio',
                        'question'=>'Which statements describe the activities that you do to gauge your IT department\'s maturity and capability compared to best in class or other companies in the industry?',
                        'name'=>'a5',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t really do this at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Informal internal IT reviews',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Formal internal IT reviews',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We look at what other companies are seen to be doing',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use external assessors that report back to us on our strengths, weaknesses',
                                'value'=>5,
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
    ),
    'itservicedelivery' => array(
        'title' => 'IT Service Delivery',
        'description' => 'The following questions ask about how you approach the delivery of IT applications and services internally in your organization',
        'colour' => 'purple',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'How would you describe your implementation or use of the following areas of IT service delivery?',
                'questions' => array(
                    'b1'=>array(
                        'type'=>'groupradio',
                        'question'=>'How would you describe your implementation or use of the following areas of IT service delivery?',
                        'name'=>'b1',
                        'options'=>array(
                            array(
                                'label'=>'A clearly defined service catalog',
                                'name'=>'b1.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Non-existent',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ad-hoc',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In selected areas',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Self-service workload provisioning and management',
                                'name'=>'b1.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Non-existent',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ad-hoc',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In selected areas',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'The adoption of ITIL or a similar approach to formal IT Service Delivery',
                                'name'=>'b1.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Non-existent',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ad-hoc',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In selected areas',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Clearly understood Service Level Agreements',
                                'name'=>'b1.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Non-existent',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ad-hoc',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In selected areas',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Service Level monitoring and reporting',
                                'name'=>'b1.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Non-existent',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ad-hoc',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In selected areas',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'End-user satisfaction monitoring',
                                'name'=>'b1.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Non-existent',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ad-hoc',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In selected areas',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Automation and orchestration',
                                'name'=>'b1.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Non-existent',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ad-hoc',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In selected areas',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Application performance monitoring',
                                'name'=>'b1.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Non-existent',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ad-hoc',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In selected areas',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'In IDC\'s latest West European IT user survey, 93% of IT and security professionals stated that improving security for existing employees and devices was their highest security priority. Amongst SMBs, spending on all aspects of IT security is prioritised, but especially network and endpoint security solutions.',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )
            ),
            'page2' => array(
                'title' => 'What is your attitude towards investing in shared IT infrastructure that can run any number of applications or workloads rather than spending on hardware that supports specific dedicated applications?',
                'questions' => array(
                    'b2'=>array(
                        'type'=>'radio',
                        'question'=>'What is your attitude towards investing in shared IT infrastructure that can run any number of applications or workloads rather than spending on hardware that supports specific dedicated applications?',
                        'name'=>'b2',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t do any of this at the moment',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this unofficially by using portions of other investments to finance the capability',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this a little bit at the moment, but it is hard to do so don\'t see it increasing',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this a little bit at the moment, and are trying to increase it',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this quite a lot at the moment',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this wherever possible',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Data loss prevention is a serious and recurring problem for almost all organisations, large and small. Sensitive data protection is the second most important business objective for West European SMBs in terms of mean score and third in terms of share of respondents rating it as important or very important (60% of all respondents). Loss of devices containing personal data that is unencrypted can be seen as a breach of EU data protection law and fines have been imposed.',
                    'image'=>'img/techfit_icons_Q-B2.png'
                )
            ),
            'page3' => array(
                'title' => 'What is your attitude towards investing in end-to-end IT service monitoring and management tools in order to enhance IT service delivery and quality?',
                'questions' => array(
                    'b3'=>array(
                        'type'=>'radio',
                        'question'=>'What is your attitude towards investing in end-to-end IT service monitoring and management tools in order to enhance IT service delivery and quality?',
                        'name'=>'b3',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t do any of this at the moment',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this unofficially by using portions of other investments to finance the capability',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this a little bit at the moment, but it is hard to do so don\'t see it increasing',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this a little bit at the moment, and are trying to increase it',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this quite a lot at the moment',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this wherever possible',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Restricting printing to \'document owner present\' minimises sensitive data loss through unauthorised persons reading / copying documents. Loss of data or unauthorised copying and reading of sensitive documents can be a serious business risk and open the door to legal action. Around 30% of European SMBs have such solutions in place today.',
                    'image'=>'img/techfit_icons_Q-B3.png'
                )
            ),
            'page4' => array(
                'title' => 'What is your primary means of managing your IT infrastructure including servers, storage and networking?',
                'questions' => array(
                    'b4'=>array(
                        'type'=>'radio',
                        'question'=>'What is your primary means of managing your IT infrastructure including servers, storage and networking?',
                        'name'=>'b4',
                        'options'=>array(
                            array(
                                'label'=>'Very ad-hoc using spreadsheets etc.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We mainly use \'Out-of-the-Box\' tools from our hardware suppliers',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use a combination of specialized management tools with some \'Out-of-the-Box\' tools',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We mainly use specialized management tools',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use an integrated end-to-end service management suite',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Data loss prevention is critical for business reputation and legal compliance (particularly where that information includes personal data about employees or customers). 62% of companies below 1000 employees have adopted, or will adopt within the next 24 months, mobile device management.',
                    'image'=>'img/techfit_icons_Q-B4.png'
                )
            ),
            'page5' => array(
                'title' => 'To what level have you adopted automation in your IT management?',
                'questions' => array(
                    'b5'=>array(
                        'type'=>'radio',
                        'question'=>'To what level have you adopted automation in your IT management?',
                        'name'=>'b5',
                        'options'=>array(
                            array(
                                'label'=>'Manual processes across the board',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Mainly manual processes with a small amount of automation',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'A good balance of automation and manual processes',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Mainly automation with a small amount of manual processes',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Automation across the board',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Data loss prevention is critical for business reputation and legal compliance (particularly where that information includes personal data about employees or customers). 62% of companies below 1000 employees have adopted, or will adopt within the next 24 months, mobile device management.',
                    'image'=>'img/techfit_icons_Q-B4.png'
                )
            ),
            'page6' => array(
                'title' => 'What statement best describes the setup of your IT operations teams?',
                'questions' => array(
                    'b6'=>array(
                        'type'=>'radio',
                        'question'=>'What statement best describes the setup of your IT operations teams?',
                        'name'=>'b6',
                        'options'=>array(
                            array(
                                'label'=>'We have separate server, storage and networking teams',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have integrated server and storage teams, with a separate networking team',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have integrated server and networking teams, with a separate storage team',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have integrated storage and networking teams, with a separate server team',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have an integrated server, storage and networking team',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Data loss prevention is critical for business reputation and legal compliance (particularly where that information includes personal data about employees or customers). 62% of companies below 1000 employees have adopted, or will adopt within the next 24 months, mobile device management.',
                    'image'=>'img/techfit_icons_Q-B4.png'
                )
            )
        )
    ),
    'itinfrastructure' => array(
        'title' => 'IT Infrastructure Technology',
        'description' => 'The following questions ask about how IT is managed and operated at a high level',
        'colour' => 'dark-blue',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'On-premises. To what extent do you use the following?',
                'questions' => array(
                    'c1'=>array(
                        'type'=>'groupradio',
                        'question'=>'On-premises. To what extent do you use the following?',
                        'name'=>'c1',
                        'options'=>array(
                            array(
                                'label'=>'Server virtualization',
                                'name'=>'c1.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Storage virtualization',
                                'name'=>'c1.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Network virtualization',
                                'name'=>'c1.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Integrated Systems',
                                'name'=>'c1.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'On-premises Private Cloud',
                                'name'=>'c1.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Hybrid Cloud',
                                'name'=>'c1.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Cloud allows flexibility, scalability, easier remote working, ‘pay-as-you go’ efficiency, etc',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )
            ),
            'page2' => array(
                'title' => 'Third Party Managed Services or Hosting. To what extent do you use the following?',
                'questions' => array(
                    'c2'=>array(
                        'type'=>'groupradio',
                        'question'=>'Third Party Managed Services or Hosting. To what extent do you use the following?',
                        'name'=>'c2',
                        'options'=>array(
                            array(
                                'label'=>'Use of non-managed IT hosting options (Co-Lo etc.)',
                                'name'=>'c2.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'IT Managed Services',
                                'name'=>'c2.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Outsourcing Services',
                                'name'=>'c2.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Hosted or co-located Private Cloud',
                                'name'=>'c2.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Cloud allows flexibility, scalability, easier remote working, ‘pay-as-you go’ efficiency, etc',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )
            ),
            'page3' => array(
                'title' => 'Cloud. To what extent do you use the following?',
                'questions' => array(
                    'c3'=>array(
                        'type'=>'groupradio',
                        'question'=>'Cloud. To what extent do you use the following?',
                        'name'=>'c3',
                        'options'=>array(
                            array(
                                'label'=>'Public Cloud - Infrastructure as a Service',
                                'name'=>'c3.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Public Cloud – Storage as a Service',
                                'name'=>'c3.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Public Cloud – Platform as a Service',
                                'name'=>'c3.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Public Cloud – Software as a Service',
                                'name'=>'c3.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Not in use',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Limited Use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Widespread Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Cloud allows flexibility, scalability, easier remote working, ‘pay-as-you go’ efficiency, etc',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )
            ),
            'page4' => array(
                'title' => 'Which of the following best describes your IT department\'s approach to adopting new technologies?',
                'questions' => array(
                    'c4'=>array(
                        'type'=>'radio',
                        'question'=>'Which of the following best describes your IT department\'s approach to adopting new technologies?',
                        'name'=>'c4',
                        'options'=>array(
                            array(
                                'label'=>'We are slow to adopt new technologies',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We tend to wait to implement new technologies once they are mature and proven to work',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are quick to implement new technologies where we see a tangible benefit for the existing business',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We follow our competitors/industry peers very closely and implement new technologies just after they do.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We actively seek out new technologies or capabilities where we can see a way to help the business grow',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Data loss prevention is critical for business reputation and legal compliance (particularly where that information includes personal data about employees or customers). 62% of companies below 1000 employees have adopted, or will adopt within the next 24 months, mobile device management.',
                    'image'=>'img/techfit_icons_Q-B4.png'
                )
            ),
            'page5' => array(
                'title' => 'When it comes to buying infrastructure, what statement best describes your approach?',
                'questions' => array(
                    'c5'=>array(
                        'type'=>'radio',
                        'question'=>'When it comes to buying infrastructure, what statement best describes your approach?',
                        'name'=>'c5',
                        'options'=>array(
                            array(
                                'label'=>'We buy servers, storage or networking separately',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We buy most servers, storage or networking separately, but for limited areas of the infrastructure we buy them together',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We buy most servers, storage and networking together as part of a strategic plan',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We buy all our servers, storage and networking infrastructure together as part of a strategic plan',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'Data loss prevention is critical for business reputation and legal compliance (particularly where that information includes personal data about employees or customers). 62% of companies below 1000 employees have adopted, or will adopt within the next 24 months, mobile device management.',
                    'image'=>'img/techfit_icons_Q-B4.png'
                )
            )
        )
    )
);