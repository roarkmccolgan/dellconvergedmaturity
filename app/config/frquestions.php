<?php
return array(
    'demographics' => array(
        'title' => 'Démographie',
        'description' => 'Pour commencer, nous aimerions vous poser quelques questions sur votre entreprise.',
        'colour' => '',
        'display' => false,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Dans quel pays est située l\'entreprise pour laquelle vous travaillez?',
                'questions' => array(
                    's1'=>array(
                        'type'=>'radio',
                        'question'=>'Dans quel pays est située l\'entreprise pour laquelle vous travaillez?',
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
                                'label'=>'Allemagne',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Royaume-Uni',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Reste de l\'Europe',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Combien de salariés à plein temps travaillent dans votre organisation dans ce pays?',
                'questions' => array(
                    's2'=>array(
                        'type'=>'radio',
                        'question'=>'Combien de salariés à plein temps travaillent dans votre organisation dans ce pays?',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'class'=>'',
                                'label'=>'moins de 499 employés',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'500-999 employés',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'1000 et plus employés',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Laquelle des classifications de l\'industrie suivantes représente le mieux votre organisation?',
                'questions' => array(
                    's3'=>array(
                        'type'=>'radio',
                        'question'=>'Laquelle des classifications de l\'industrie suivantes représente le mieux votre organisation?',
                        'name'=>'s3',
                        'options'=>array(
                            array(
                                'class'=>'',
                                'label'=>'Services financiers',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Industrie manufacturière',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Services de télécommunication',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Transport, distribution et logistique',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Vente au détail/en gros',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Conseil informatique et services informatiques professionnels',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Conseil non-informatique et autres services professionnels',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Gouvernement central ou local, ou services publics',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Caritatif ou à but non lucratif',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Autre',
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
        'title' => 'Informatique et entreprise',
        'description' => 'The following questions ask about how IT is aligned with the business and how it supports the ongoing strategic plan and requirements',
        'colour' => 'orange',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Quel énoncé reflète le mieux la façon dont le rôle de l\'informatique est considérée par la haute direction de l\'entreprise?',
                'questions' => array(
                    'a1'=>array(
                        'type'=>'radio',
                        'question'=>'Quel énoncé reflète le mieux la façon dont le rôle de l\'informatique est considérée par la haute direction de l\'entreprise?',
                        'name'=>'a1',
                        'options'=>array(
                            array(
                                'label'=>'L\'informatique est considérée comme un coût nécessaire',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'L\'informatique est considérée comme un facteur d\'efficacité de l\'entreprise',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'L\'informatique est considérée comme une source d\'avantage concurrentiel ou de croissance du chiffre d\'affaires',
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
                'title' => 'Comment décririez-vous le niveau des investissements informatiques dans votre organisation ?',
                'questions' => array(
                    'a2'=>array(
                        'type'=>'radio',
                        'question'=>'Comment décririez-vous le niveau des investissements informatiques dans votre organisation ?',
                        'name'=>'a2',
                        'options'=>array(
                            array(
                                'label'=>'L\'investissement informatique est loin d\'être suffisant pour ce que nous avons à faire',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'L\'investissement informatique est serré, couvrant à peine les opérations essentielles',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'L\'investissement informatique est généralement correct pour les opérations de base, mais serré pour de nouvelles initiatives',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'L\'investissement informatique est correct pour les opérations de base, et pour des nouvelles initiatives où la valeur est claire',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'L\'investissement informatique est facilement disponible dans l\'ensemble avec une bonne analyse de rentabilisation, même pour le développement expérimental',
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
                'title' => 'Face aux demandes de l\'entreprise pour des applications ou des services nouveaux ou améliorés, quel énoncé reflète le mieux les capacités de votre service informatique ?',
                'questions' => array(
                    'a3'=>array(
                        'type'=>'radio',
                        'question'=>'Face aux demandes de l\'entreprise pour des applications ou des services nouveaux ou améliorés, quel énoncé reflète le mieux les capacités de votre service informatique ?',
                        'name'=>'a3',
                        'options'=>array(
                            array(
                                'label'=>'Nous avons du mal à faire face à la plupart des demandes',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous sommes généralement OK avec les demandes concernant des applications ou des services existants, mais avons du mal pour les demandes de services nouveaux ou améliorés',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous sommes généralement OK avec les demandes, à la fois pour les applications et services existants et pour les services nouveaux ou améliorés',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous sommes très bons à satisfaire toutes les demandes ou presque',
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
                'title' => 'Comment l\'informatique est-elle impliquée dans l\'ensemble des projets et des initiatives de l\'entreprise ? ',
                'questions' => array(
                    'a4'=>array(
                        'type'=>'radio',
                        'question'=>'Comment l\'informatique est-elle impliquée dans l\'ensemble des projets et des initiatives de l\'entreprise ? ',
                        'name'=>'a4',
                        'options'=>array(
                            array(
                                'label'=>'L\'entreprise a tendance à aller de l\'avant avec de nombreux projets avec des exigences de technologie sans y associer l\'informatique, et nous devons chercher activement ce qui se passe',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous sommes impliqués dans tous ou presque tous les projets qui ont des exigences identifiées de technologie, mais souvent pas assez tôt ou pas assez profondément',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous sommes fortement impliqués dans tous ou presque tous les projets qui ont identifié les besoins technologiques',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous sommes fortement impliqués dans la planification de la plupart ou de tous les projets de l\'entreprise, même ceux qui ne possèdent pas toujours une exigence identifiée de technologie',
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
                'title' => 'Quels énoncés décrivent les activités que vous faites pour évaluer la maturité et la capacité de votre département informatique par rapport aux meilleures ou à d\'autres sociétés du secteur ? ',
                'questions' => array(
                    'a5'=>array(
                        'type'=>'radio',
                        'question'=>'Quels énoncés décrivent les activités que vous faites pour évaluer la maturité et la capacité de votre département informatique par rapport aux meilleures ou à d\'autres sociétés du secteur ? ',
                        'name'=>'a5',
                        'options'=>array(
                            array(
                                'label'=>'Nous ne faisons vraiment rien de cela',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Revues informelles de l\'informatique en interne',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Revues formelles de l\'informatique en interne',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous regardons ce que d\'autres entreprises semblent faire',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous utilisons des évaluateurs externes qui nous font part de nos points forts, nos faiblesses et nos lacunes',
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
        'title' => 'Prestation de services informatiques',
        'description' => 'The following questions ask about how you approach the delivery of IT applications and services internally in your organization',
        'colour' => 'purple',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Comment décririez-vous votre mise en œuvre ou votre utilisation des domaines suivants de prestation de services informatiques ?',
                'questions' => array(
                    'b1'=>array(
                        'type'=>'groupradio',
                        'question'=>'Comment décririez-vous votre mise en œuvre ou votre utilisation des domaines suivants de prestation de services informatiques ?',
                        'name'=>'b1',
                        'options'=>array(
                            array(
                                'label'=>'Un catalogue de services clairement définis',
                                'name'=>'b1.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Non existante',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Au coup par coup',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Dans des secteurs sélectionnés',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Répandue',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Apport et gestion de la charge de travail en libre-service',
                                'name'=>'b1.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Non existante',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Au coup par coup',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Dans des secteurs sélectionnés',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Répandue',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Adoption de la Bibliothèque pour l\'infrastructure des technologies de l\'information (ITIL) ou d\'une approche similaire pour la fourniture formelle de services informatiques',
                                'name'=>'b1.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Non existante',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Au coup par coup',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Dans des secteurs sélectionnés',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Répandue',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Contrats de niveau de service clairement compris',
                                'name'=>'b1.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Non existante',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Au coup par coup',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Dans des secteurs sélectionnés',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Répandue',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Surveillance du niveau de service et reporting',
                                'name'=>'b1.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Non existante',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Au coup par coup',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Dans des secteurs sélectionnés',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Répandue',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Suivi de la satisfaction de l\'utilisateur final',
                                'name'=>'b1.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Non existante',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Au coup par coup',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Dans des secteurs sélectionnés',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Répandue',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Automatisation et orchestration',
                                'name'=>'b1.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Non existante',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Au coup par coup',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Dans des secteurs sélectionnés',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Répandue',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Suivi de la performance des applications',
                                'name'=>'b1.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Non existante',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Au coup par coup',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Dans des secteurs sélectionnés',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Répandue',
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
                'title' => 'Quelle est votre attitude face au fait d\'investir dans une infrastructure informatique partagée qui peut exécuter un nombre d\'applications ou un volume de travail quelconque, plutôt que de dépenser pour du matériel prenant en charge des applications dédiées spécifiques ?',
                'questions' => array(
                    'b2'=>array(
                        'type'=>'radio',
                        'question'=>'Quelle est votre attitude face au fait d\'investir dans une infrastructure informatique partagée qui peut exécuter un nombre d\'applications ou un volume de travail quelconque, plutôt que de dépenser pour du matériel prenant en charge des applications dédiées spécifiques ?',
                        'name'=>'b2',
                        'options'=>array(
                            array(
                                'label'=>'Nous ne faisons rien de cela pour le moment',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous faisons cela officieusement en utilisant en partie d\'autres investissements pour financer l\'infrastructure',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous faisons cela un peu pour le moment, mais il est difficile de le faire et nous ne le voyons pas augmenter',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous faisons cela un peu pour le moment, et nous essayons de l\'augmenter',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous faisons cela beaucoup pour le moment',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous faisons cela chaque fois que possible',
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
                'title' => 'Quelle est votre attitude à l\'égard de l\'investissement dans des outils de suivi et de gestion de bout-en-bout des services informatiques afin d\'améliorer la prestation et la qualité des services informatiques ?',
                'questions' => array(
                    'b3'=>array(
                        'type'=>'radio',
                        'question'=>'Quelle est votre attitude à l\'égard de l\'investissement dans des outils de suivi et de gestion de bout-en-bout des services informatiques afin d\'améliorer la prestation et la qualité des services informatiques ?',
                        'name'=>'b3',
                        'options'=>array(
                            array(
                                'label'=>'Nous ne faisons rien de cela pour le moment',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous faisons cela officieusement en utilisant en partie d\'autres investissements pour financer l\'infrastructure',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous faisons cela un peu pour le moment, mais il est difficile de le faire et nous ne le voyons pas augmenter',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous faisons cela un peu pour le moment, et nous essayons de l\'augmenter',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous faisons cela beaucoup pour le moment',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous faisons cela chaque fois que possible',
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
                'title' => 'Quel est votre principal moyen de gérer votre infrastructure informatique - en incluant serveurs, stockage et mise en réseau ? ',
                'questions' => array(
                    'b4'=>array(
                        'type'=>'radio',
                        'question'=>'Quel est votre principal moyen de gérer votre infrastructure informatique - en incluant serveurs, stockage et mise en réseau ? ',
                        'name'=>'b4',
                        'options'=>array(
                            array(
                                'label'=>'Au coup par coup, en utilisant des feuilles de calcul, etc.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous utilisons principalement des outils prêts à l\'emploi de nos fournisseurs de matériel',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous utilisons une combinaison d\'outils de gestion spécialisés avec quelques outils prêts à l\'emploi',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous utilisons principalement des outils de gestion spécialisés',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous utilisons une suite de gestion de services bout-en-bout intégrée',
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
                'title' => 'Jusqu\'à quel niveau avez-vous adopté l\'automatisation dans votre gestion de l\'informatique ?',
                'questions' => array(
                    'b5'=>array(
                        'type'=>'radio',
                        'question'=>'Jusqu\'à quel niveau avez-vous adopté l\'automatisation dans votre gestion de l\'informatique ?',
                        'name'=>'b5',
                        'options'=>array(
                            array(
                                'label'=>'Procédures manuelles dans l\'ensemble',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Principalement procédures manuelles avec un peu d\'automatisation',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Bon équilibre entre automatisation et procédures manuelles',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Principalement automatisation avec un peu de procédures manuelles',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Automatisation dans l\'ensemble',
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
                'title' => 'Quel énoncé décrit le mieux la configuration de vos équipes d\'exploitation informatique ? ',
                'questions' => array(
                    'b6'=>array(
                        'type'=>'radio',
                        'question'=>'Quel énoncé décrit le mieux la configuration de vos équipes d\'exploitation informatique ? ',
                        'name'=>'b6',
                        'options'=>array(
                            array(
                                'label'=>'Nous avons des équipes distinctes pour serveur, stockage et réseau',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous avons intégré les équipes serveur et stockage, avec une équipe réseau distincte',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous avons intégré les équipes serveur et réseau, avec une équipe stockage distincte',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous avons intégré les équipes stockage et réseau, avec une équipe serveur distincte',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous avons une équipe intégrée serveur, stockage et réseau',
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
        'title' => 'Technologie d\'infrastructure informatique',
        'description' => 'The following questions ask about how IT is managed and operated at a high level',
        'colour' => 'dark-blue',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Sur site. Dans quelle mesure utilisez-vous les éléments suivants ?',
                'questions' => array(
                    'c1'=>array(
                        'type'=>'groupradio',
                        'question'=>'Sur site. Dans quelle mesure utilisez-vous les éléments suivants ?',
                        'name'=>'c1',
                        'options'=>array(
                            array(
                                'label'=>'Virtualisation du serveur',
                                'name'=>'c1.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Virtualisation du stockage',
                                'name'=>'c1.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Virtualisation du réseau',
                                'name'=>'c1.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Système intégré (serveurs, stockage, réseau, gestion vendus en un ensemble intégré)',
                                'name'=>'c1.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cloud privé sur site',
                                'name'=>'c1.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cloud hybride (prestation informatique utilisant à la fois les services cloud privé et public)',
                                'name'=>'c1.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
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
                'title' => 'Services gérés ou hébergement tiers. Dans quelle mesure utilisez-vous les éléments suivants ?',
                'questions' => array(
                    'c2'=>array(
                        'type'=>'groupradio',
                        'question'=>'Services gérés ou hébergement tiers. Dans quelle mesure utilisez-vous les éléments suivants ?',
                        'name'=>'c2',
                        'options'=>array(
                            array(
                                'label'=>'Hébergement informatique non géré (colocation, etc.)',
                                'name'=>'c2.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Services informatiques gérés',
                                'name'=>'c2.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Services d\'externalisation',
                                'name'=>'c2.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cloud privé hébergé/en colocation',
                                'name'=>'c2.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
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
                'title' => 'Cloud public. Dans quelle mesure utilisez-vous les éléments suivants ?',
                'questions' => array(
                    'c3'=>array(
                        'type'=>'groupradio',
                        'question'=>'Cloud public. Dans quelle mesure utilisez-vous les éléments suivants ?',
                        'name'=>'c3',
                        'options'=>array(
                            array(
                                'label'=>'Cloud public - Infrastructure en tant que service',
                                'name'=>'c3.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cloud public - Stockage en tant que service',
                                'name'=>'c3.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cloud public - Plate-forme en tant que service',
                                'name'=>'c3.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cloud public - Logiciel en tant que service',
                                'name'=>'c3.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Pas encore considérée',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Utilisation limitée',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Forte utilisation',
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
                'title' => 'Lequel des énoncés suivants décrit le mieux l\'approche de votre service informatique pour adopter des nouvelles technologies ? ',
                'questions' => array(
                    'c4'=>array(
                        'type'=>'radio',
                        'question'=>'Lequel des énoncés suivants décrit le mieux l\'approche de votre service informatique pour adopter des nouvelles technologies ? ',
                        'name'=>'c4',
                        'options'=>array(
                            array(
                                'label'=>'Nous sommes lents à adopter des nouvelles technologies',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous avons tendance à attendre pour mettre en œuvre des nouvelles technologies que leur maturité et leur fonctionnement soient bien établis',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous sommes prompts à mettre en œuvre des nouvelles technologies si nous y voyons un avantage tangible pour l\'activité existante',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous suivons nos concurrents ou pairs du secteur de très près et mettons en œuvre des nouvelles technologies, rapidement après eux',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous cherchons activement de nouvelles technologies ou capacités dans lesquelles nous pouvons voir un moyen d\'aider l\'entreprise à croître',
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
                'title' => 'Pour l\'achat de l\'infrastructure, quel énoncé décrit le mieux votre approche ? ',
                'questions' => array(
                    'c5'=>array(
                        'type'=>'radio',
                        'question'=>'Pour l\'achat de l\'infrastructure, quel énoncé décrit le mieux votre approche ? ',
                        'name'=>'c5',
                        'options'=>array(
                            array(
                                'label'=>'Nous achetons séparément serveurs, stockage ou composants réseau',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous achetons serveurs, stockage ou composants réseau séparément le plus souvent, mais pour des parties limitées de l\'infrastructure, nous les achetons ensemble dans le cadre d\'un plan stratégique',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous achetons serveurs, stockage et composants réseau en grande partie dans le cadre d\'un plan stratégique',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous achetons ensemble tout, serveurs, stockage et infrastructure réseau, dans le cadre d\'un plan stratégique',
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