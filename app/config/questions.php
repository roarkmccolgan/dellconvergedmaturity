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
    ),
    'security' => array(
        'colour' => 'purple',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Security',
                'questions' => array(
                    'e1'=>array(
                        'type'=>'button',
                        'question'=>'Are you upgrading your current IT security to adapt to changing or emerging threats?',
                        'name'=>'e1',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently re-evaluating our IT security',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Not currently upgrading',
                                'value'=>1,
                                'checked'=>false
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
                'title' => 'Security',
                'questions' => array(
                    'e2'=>array(
                        'type'=>'button',
                        'question'=>'Do you make sure that all mobile devices used in your company – including laptops and memory sticks – are all data encrypted?',
                        'name'=>'e2',
                        'options'=>array(
                            array(
                                'label'=>'Yes, all of them',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, some of them',
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
                    'text'=>'Data loss prevention is a serious and recurring problem for almost all organisations, large and small. Sensitive data protection is the second most important business objective for West European SMBs in terms of mean score and third in terms of share of respondents rating it as important or very important (60% of all respondents). Loss of devices containing personal data that is unencrypted can be seen as a breach of EU data protection law and fines have been imposed.',
                    'image'=>'img/techfit_icons_Q-B2.png'
                )
            ),
            'page3' => array(
                'title' => 'Security',
                'questions' => array(
                    'e3'=>array(
                        'type'=>'button',
                        'question'=>'Are you able to restrict printing to times when the document owner is present?',
                        'name'=>'e3',
                        'options'=>array(
                            array(
                                'label'=>'Yes we have this capability',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently investigating',
                                'value'=>1,
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
                    'text'=>'Restricting printing to \'document owner present\' minimises sensitive data loss through unauthorised persons reading / copying documents. Loss of data or unauthorised copying and reading of sensitive documents can be a serious business risk and open the door to legal action. Around 30% of European SMBs have such solutions in place today.',
                    'image'=>'img/techfit_icons_Q-B3.png'
                )
            ),
            'page4' => array(
                'title' => 'Security',
                'questions' => array(
                    'e4'=>array(
                        'type'=>'button',
                        'question'=>'Can you remotely disable or erase mobile devices if they are lost/stolen/misused etc?',
                        'name'=>'e4',
                        'options'=>array(
                            array(
                                'label'=>'Yes, any device used for company purposes (including BYOD)',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Company owned devices only',
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
                    'text'=>'Data loss prevention is critical for business reputation and legal compliance (particularly where that information includes personal data about employees or customers). 62% of companies below 1000 employees have adopted, or will adopt within the next 24 months, mobile device management.',
                    'image'=>'img/techfit_icons_Q-B4.png'
                )
            )
        )
    ),
    'cloud' => array(
        'colour' => 'dark-blue',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c1'=>array(
                        'type'=>'checkbox',
                        'question'=>'Which of these are you using Cloud services for: <span class="instruct">SELECT ALL THAT APPLY</span>',
                        'name'=>'c1',
                        'script'=>'
                            $(\'#4-c1\').on(\'ifChecked\', function(event){
                                $(\'div.error\').fadeOut(\'fast\', function() {
                                    this.remove();
                                    error=false;
                                });
                                $(\'#0-c1\').iCheck(\'uncheck\');
                                $(\'#1-c1\').iCheck(\'uncheck\');
                                $(\'#2-c1\').iCheck(\'uncheck\');
                                $(\'#3-c1\').iCheck(\'uncheck\');
                            });
                            jQuery.each([$(\'#0-c1\'),$(\'#1-c1\'),$(\'#2-c1\'),$(\'#3-c1\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    $(\'#4-c1\').iCheck(\'uncheck\');
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'Everyday business such HR onboarding, timesheets and expenses.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Communication and collaboration',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Hosting  online sales and marketing systems',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT security systems',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Unsure',
                                'value'=>1,
                                'checked'=>false
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
                'title' => 'Cloud',
                'questions' => array(
                    'c2'=>array(
                        'type'=>'button',
                        'question'=>'Are you using Cloud “sync-and-share” storage services?',
                        'name'=>'c2',
                        'options'=>array(
                            array(
                                'label'=>'Yes we have deployed',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently evaluating',
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
                    'text'=>'Cloud storage facilitates collaboration, mobile working, and can be more cost-effective. It is also in high demand from end-users and not putting solutions in place leads to increased ‘shadow IT’ as users adopt consumer solutions – leading to increased business risk through lack of control. IDC’s latest survey on this topic in Western Europe showed that around 20% of organisations had implemented a cloud-based file sharing solution – mostly to a restricted set of users – while 37% of organisations were evaluating or planning to deploy such a solution.',
                    'image'=>'img/techfit_icons_Q-C2.png'
                )
            ),
            'page3' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c3'=>array(
                        'type'=>'button',
                        'question'=>'Do you know where your Cloud data is stored and can you control that location?',
                        'name'=>'c3',
                        'options'=>array(
                            array(
                                'label'=>'We can control where the data is stored',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We chose our providers due to their location',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are aware of where it is stored but cannot change that',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are not aware of where it is stored',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do not use such cloud systems because of the storage location issue',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do not use cloud systems for other reasons',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'There is still major controversy over controlling access to cloud-stored data, particularly personal data due to conflicting regulatory regimes and rapidly evolving case law – notably the battle between Microsoft and US-based courts over access to data resident in Dublin, and the EU’s re-appraisal of the provisions of the so-called ‘Safe Harbor’ agreement with the US.',
                    'image'=>'img/techfit_icons_Q-C3.png'
                )
            ),
            'page4' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c4'=>array(
                        'type'=>'button',
                        'question'=>'Can your users print using the Cloud?',
                        'name'=>'c4',
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
                    'text'=>'Today 39% of European companies allow cloud-printing. While this can increase business risk if not implemented correctly, potential benefits include productivity, flexibility and reduced need for local infrastructure (fewer PCs deployed)',
                    'image'=>'img/techfit_icons_Q-C4.png'
                )
            ),
            'page5' => array(
                'title' => 'Cloud',
                'questions' => array(
                    'c5'=>array(
                        'type'=>'button',
                        'question'=>'Has using the Cloud changed your IT security strategy?',
                        'name'=>'c5',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently re-evaluating',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We don\'t believe we need to upgrade at this time',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'70% of surveyed organisations stated that improving IT security due to Cloud/SaaS was very or extremely important part of strategy over the next 12 months.',
                    'image'=>'img/techfit_icons_Q-C5.png'
                )
            )
        )
    ),
    'mobility' => array(
        'colour' => 'green',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Mobility',
                'questions' => array(
                    'm1'=>array(
                        'type'=>'button',
                        'question'=>'Do you let employees use their own devices for work (“BYOD”)?',
                        'name'=>'m1',
                        'options'=>array(
                            array(
                                'label'=>'Yes, we give them full access to company systems',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, but we limit the use to basic things',
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
                    'text'=>'53% of companies WW have some type of BYOD policy, but only 25% a formal one. Mobile access to corporate email is widespread but other applications is lower.',
                    'image'=>'img/techfit_icons_Q-D1.png'
                )
            ),
            'page2' => array(
                'title' => 'Mobility',
                'questions' => array(
                    'm2'=>array(
                        'type'=>'button',
                        'question'=>'Do you create apps for your company’s customers to access your products and services?',
                        'name'=>'m2',
                        'options'=>array(
                            array(
                                'label'=>'We have an app for customers',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Our company website is useable from mobile devices',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No special support for mobiles',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'25% of companies have at least launched their first mobile app; 5% have launched more than one. One in four firms plan to deploy mobile apps in tablets; +40% plan to use HTLM5 tools to enable cross-platform applications',
                    'image'=>'img/techfit_icons_Q-D2.png'
                )
            ),
            'page3' => array(
                'title' => 'Mobility',
                'questions' => array(
                    'm3'=>array(
                        'type'=>'button',
                        'question'=>'Do you support the use of tablet devices in your business?',
                        'name'=>'m3',
                        'options'=>array(
                            array(
                                'label'=>'Yes, we support and provide these for employees with a business need',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We support tablets where the employee brings their own',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We provide these for senior executives on demand',
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
                    'text'=>'Tablets can be a powerful tool for mobile employees (in sales and service), for knowledge workers, and for management wanting better access to reporting etc. The most recent IDC study shows that 62% of companies have evaluated or deployed tablets.',
                    'image'=>'img/techfit_icons_Q-D3.png'
                )
            ),
            'page4' => array(
                'title' => 'Mobility',
                'questions' => array(
                    'm4'=>array(
                        'type'=>'button',
                        'question'=>'Does your company provide the capability for staff to print directly from their mobile devices?',
                        'name'=>'m4',
                        'options'=>array(
                            array(
                                'label'=>'Yes, from any device',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, from company owned devices only',
                                'value'=>3,
                                'checked'=>false
                            ),

                            array(
                                'label'=>'Yes, company laptops only',
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
                    'text'=>'This is an increasingly requested requirement from business users. 85% of companies currently allow this [IDC custom study]. There are several options including wireless printing (WiFi); cloud printing; bluetooth enabled printers.',
                    'image'=>'img/techfit_icons_Q-D4.png'
                )
            ),
            'page5' => array(
                'title' => 'Mobility',
                'questions' => array(
                    'm5'=>array(
                        'type'=>'button',
                        'question'=>'Does your company let staff print from outside the office from laptops or other mobile devices?',
                        'name'=>'m5',
                        'options'=>array(
                            array(
                                'label'=>'Yes, from any device',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, from company owned devices only',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, BYOD and/or company managed devices',
                                'value'=>5,
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
                    'text'=>'Increased efficiency and effectiveness. 68% of organisations allow printing from outside the office',
                    'image'=>'img/techfit_icons_Q-D5.png'
                )
            )
        )
    ),
    'bigdataanalytics' => array(
        'colour' => 'light-blue',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Big Data Analytics',
                'questions' => array(
                    'd1'=>array(
                        'type'=>'button',
                        'question'=>'Do you give your employees visualisation tools to fully explore data and create reports?',
                        'name'=>'d1',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently evaluating',
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
                    'text'=>'Use of visualisation tools is now widespread amongst Western European organisations for interactive data exploration and analysis. And for knowledge workers in particular, such tools are a critical success factor in their work.',
                    'image'=>'img/techfit_icons_Q-E1.png'
                )
            ),
            'page2' => array(
                'title' => 'Big Data Analytics',
                'questions' => array(
                    'd2'=>array(
                        'type'=>'button',
                        'question'=>'With data analysis across the business becoming more important, what is your status regarding cloud-based analytics?',
                        'name'=>'d2',
                        'options'=>array(
                            array(
                                'label'=>'We are using a cloud-based analytics service',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have investigated but not yet deployed cloud-based analytics',
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
                    'text'=>'IDC West European survey: 27% of organisations are investing in storage technologies to keep up with data growth',
                    'image'=>'img/techfit_icons_Q-E2.png'
                )
            ),
            'page3' => array(
                'title' => 'Big Data Analytics',
                'questions' => array(
                    'd3'=>array(
                        'type'=>'button',
                        'question'=>'Do you currently use Big Data technologies in your business?',
                        'name'=>'d3',
                        'options'=>array(
                            array(
                                'label'=>'We are currently using big data technologies in our business',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are planning to implement big data technologies in the next 6-18 months',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are currently investigating the possibilities',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No plans',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC West European survey: 21% of end users in European organisations have access to Big Data, whether via a feed into an existing production system or a Big Data–specific production system.',
                    'image'=>'img/techfit_icons_Q-E3.png'
                )
            ),
            'page4' => array(
                'title' => 'Big Data Analytics',
                'questions' => array(
                    'd4'=>array(
                        'type'=>'button',
                        'question'=>'Do you have a process to deal with social media sentiment?',
                        'name'=>'d4',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently evaluating',
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
                    'text'=>'IDC West European survey: 15% of organisations use Big Data to analyse or utilize social media information',
                    'image'=>'img/techfit_icons_Q-E4.png'
                )
            )
        )
    )
);