<?php
return array(
    'demographics' => array(
        'title' => 'Demographische Daten',
        'description' => 'Als Erstes haben wir ein paar Fragen über Ihr Unternehmen.',
        'colour' => '',
        'display' => false,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'In welchem Land befindet sich das Unternehmen, für das Sie arbeiten?',
                'questions' => array(
                    's1'=>array(
                        'type'=>'radio',
                        'question'=>'In welchem Land befindet sich das Unternehmen, für das Sie arbeiten?',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'class'=>'',
                                'label'=>'Frankreich',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Deutschland',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Großbritannien',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Wie viele Vollzeitmitarbeiter beschäftigt Ihr Unternehmen in diesem Land?',
                'questions' => array(
                    's2'=>array(
                        'type'=>'radio',
                        'question'=>'Wie viele Vollzeitmitarbeiter beschäftigt Ihr Unternehmen in diesem Land?',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'class'=>'',
                                'label'=>'250 bis 499 Mitarbeiter',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'500 bis 999 Mitarbeiter',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'1.000 oder mehr Mitarbeiter',
                                'value'=>false,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Welche der folgenden Branchen beschreibt Ihr Unternehmen am besten?',
                'questions' => array(
                    's3'=>array(
                        'type'=>'radio',
                        'question'=>'Welche der folgenden Branchen beschreibt Ihr Unternehmen am besten?',
                        'name'=>'s3',
                        'options'=>array(
                            array(
                                'class'=>'',
                                'label'=>'Finanzdienstleistungen',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Produktion',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Telekommunikationsdienstleistungen',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Transport, Vertrieb und Logistik',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Einzelhandel und Großhandel',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'IT-Beratung und IT-bezogene Fachdienstleistungen',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Nicht IT-bezogene Beratung und andere professionelle Dienstleistungen',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Staatliche oder örtliche Verwaltung oder öffentliche Dienstleistungen',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Wohltätigkeit oder gemeinnützige Tätigkeit',
                                'value'=>false,
                                'checked'=>false
                            ),
                            array(
                                'class'=>'',
                                'label'=>'Sonstige',
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
        'title' => 'IT und das Unternehmen',
        'description' => 'The following questions ask about how IT is aligned with the business and how it supports the ongoing strategic plan and requirements',
        'colour' => 'orange',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Welche Aussage beschreibt am besten, wie die Rolle der IT-Abteilung von der Geschäftsleitung des Unternehmens gesehen wird?',
                'questions' => array(
                    'a1'=>array(
                        'type'=>'radio',
                        'question'=>'Welche Aussage beschreibt am besten, wie die Rolle der IT-Abteilung von der Geschäftsleitung des Unternehmens gesehen wird?',
                        'name'=>'a1',
                        'options'=>array(
                            array(
                                'label'=>'IT wird als notwendige Kostenaufwendung angesehen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT wird als Antrieb für geschäftliche Effizienz angesehen',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT wird als Auslöser für Wettbewerbsvorteile bzw. Umsatzwachstum angesehen',
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
                'title' => 'Wie würden Sie das Ausmaß der IT-Investitionen in Ihrem Unternehmen beschreiben?',
                'questions' => array(
                    'a2'=>array(
                        'type'=>'radio',
                        'question'=>'Wie würden Sie das Ausmaß der IT-Investitionen in Ihrem Unternehmen beschreiben?',
                        'name'=>'a2',
                        'options'=>array(
                            array(
                                'label'=>'IT-Investitionen sind nicht annähernd genug für das, was wir tun müssen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT-Investitionen sind knapp und decken kaum die wesentlichen Geschäfte',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT-Investitionen sind im Allgemeinen gut für das hauptsächliche Geschäft, aber knapp für neue Initiativen',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT-Investitionen sind gut für das hauptsächliche Geschäft und für neue Initiativen, deren Mehrwert klar erkennbar ist',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT-Investitionen sind flächendeckend für gute Geschäftsfalle leicht zugänglich, sowie auch für experimentelle Entwicklung',
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
                'title' => 'In Bezug auf Geschäftsanforderungen für neue oder verbesserte Anwendungen oder Dienste, welche Aussage beschreibt die Fähigkeiten Ihrer IT-Abteilung am besten?',
                'questions' => array(
                    'a3'=>array(
                        'type'=>'radio',
                        'question'=>'In Bezug auf Geschäftsanforderungen für neue oder verbesserte Anwendungen oder Dienste, welche Aussage beschreibt die Fähigkeiten Ihrer IT-Abteilung am besten?',
                        'name'=>'a3',
                        'options'=>array(
                            array(
                                'label'=>'Es fällt uns schwer, die meisten Anforderungen abzuwickeln',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'In der Regel sind wir mit Anforderungen zu bestehenden Anwendungen oder Diensten in Ordnung, aber wir kämpfen mit Anforderungen für neue oder verbesserte Dienstleistungen',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'In der Regel sind wir sowohl mit Anforderungen zu bestehenden Anwendungen oder Diensten, als auch für neue oder verbesserte Dienstleistungen in Ordnung',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Unsere Dienstleistungen für die meisten oder alle Anforderungen sind sehr gut',
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
                'title' => 'Wie stark ist IT in die gesamten Projekte und Geschäftsinitiativen involviert?',
                'questions' => array(
                    'a4'=>array(
                        'type'=>'radio',
                        'question'=>'Wie stark ist IT in die gesamten Projekte und Geschäftsinitiativen involviert?',
                        'name'=>'a4',
                        'options'=>array(
                            array(
                                'label'=>'Das Unternehmen neigt dazu, viele Projekte mit technologischen Anforderungen voranzutreiben, ohne dass IT einbezogen wird und wir müssen uns aktiv bemühen, um herauszufinden, was geschieht',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir sind in allen oder in den meisten Projekten involviert, für die technologische Anforderungen erkannt wurden, aber oft nicht früh oder tiefgehend genug',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir sind in allen oder in den meisten Projekten maßgeblich involviert, die erkannte technologische Anforderungen aufweisen',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir sind bei der Planung der meisten oder allen Geschäftsprojekten maßgeblich involviert, auch in solche, die nicht immer eine erkannte technologische Anforderung aufweisen',
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
                'title' => 'Welche Aussagen beschreiben die von Ihnen eingesetzten Aktivitäten zur Messung der Reife und Fähigkeit Ihrer IT-Abteilung im Vergleich zu den besten oder anderen Unternehmen in der Branche? ',
                'questions' => array(
                    'a5'=>array(
                        'type'=>'radio',
                        'question'=>'Welche Aussagen beschreiben die von Ihnen eingesetzten Aktivitäten zur Messung der Reife und Fähigkeit Ihrer IT-Abteilung im Vergleich zu den besten oder anderen Unternehmen in der Branche? ',
                        'name'=>'a5',
                        'options'=>array(
                            array(
                                'label'=>'Wir tun es eigentlich überhaupt nicht',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Informelle interne IT-Bewertungen',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Formelle interne IT-Bewertungen',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir sehen uns an, was andere Unternehmen sichtbar tun',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir nutzen externe Gutachter, die uns unsere Stärken, Schwächen und Lücken aufweisen',
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
        'title' => 'Bereitstellung von IT-Services',
        'description' => 'The following questions ask about how you approach the delivery of IT applications and services internally in your organization',
        'colour' => 'purple',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Wie würden Sie Ihre Umsetzung oder Ihre Verwendung der folgenden Bereiche der IT-Dienstbereitstellung beschreiben?',
                'questions' => array(
                    'b1'=>array(
                        'type'=>'groupradio',
                        'question'=>'Wie würden Sie Ihre Umsetzung oder Ihre Verwendung der folgenden Bereiche der IT-Dienstbereitstellung beschreiben?',
                        'name'=>'b1',
                        'options'=>array(
                            array(
                                'label'=>'Ein klar definierter Dienstleistungskatalog',
                                'name'=>'b1.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Nicht vorhanden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Gelegentlich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In ausgewählten Bereichen',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Weit verbreitet',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Self-Service-Arbeitslastbereitstellung und Verwaltung',
                                'name'=>'b1.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Nicht vorhanden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Gelegentlich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In ausgewählten Bereichen',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Weit verbreitet',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Die Annahme von ITIL oder ein ähnliches Konzept zur formellen IT-Dienstbereitstellung',
                                'name'=>'b1.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Nicht vorhanden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Gelegentlich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In ausgewählten Bereichen',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Weit verbreitet',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Klares Verständnis der Dienstleistungsvereinbarungen',
                                'name'=>'b1.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Nicht vorhanden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Gelegentlich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In ausgewählten Bereichen',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Weit verbreitet',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Überwachung und Berichterstattung des Dienstleistungsniveaus',
                                'name'=>'b1.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Nicht vorhanden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Gelegentlich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In ausgewählten Bereichen',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Weit verbreitet',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Überwachung der Endbenutzer-Zufriedenheit',
                                'name'=>'b1.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Nicht vorhanden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Gelegentlich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In ausgewählten Bereichen',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Weit verbreitet',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Automatisierung und Orchestrierung',
                                'name'=>'b1.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Nicht vorhanden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Gelegentlich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In ausgewählten Bereichen',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Weit verbreitet',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Überwachung der Anwendungsleistung',
                                'name'=>'b1.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Nicht vorhanden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Gelegentlich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In ausgewählten Bereichen',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Weit verbreitet',
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
                'title' => 'Wie ist Ihre Haltung gegenüber Investitionen in einer gemeinsam genutzten IT-Infrastruktur, die eine beliebige Anzahl von Anwendungen oder Arbeitslasten ausführen kann, im Gegensatz zu Ausgaben für Hardware, die bestimmte spezielle Anwendungen unterstützt? ',
                'questions' => array(
                    'b2'=>array(
                        'type'=>'radio',
                        'question'=>'Wie ist Ihre Haltung gegenüber Investitionen in einer gemeinsam genutzten IT-Infrastruktur, die eine beliebige Anzahl von Anwendungen oder Arbeitslasten ausführen kann, im Gegensatz zu Ausgaben für Hardware, die bestimmte spezielle Anwendungen unterstützt? ',
                        'name'=>'b2',
                        'options'=>array(
                            array(
                                'label'=>'Wir tun zu diesem Zeitpunkt nichts dergleichen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir tun dies inoffiziell mithilfe von Anteilen von anderen Investitionen, um die Fähigkeit zu finanzieren',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir tun dies zurzeit ein wenig, aber da es so schwierig ist, denken wir nicht dran es zu erweitern',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir tun dies zurzeit ein wenig, und versuchen, es zu erweitern',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir tun es zurzeit sehr viel',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir tun es, wann immer möglich',
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
                'title' => 'Wie ist Ihre Haltung gegenüber Investitionen in End-to-End IT-Dienstüberwachungs- und Management-Tools für eine verbesserte Bereitstellung und Qualität der IT-Dienste?',
                'questions' => array(
                    'b3'=>array(
                        'type'=>'radio',
                        'question'=>'Wie ist Ihre Haltung gegenüber Investitionen in End-to-End IT-Dienstüberwachungs- und Management-Tools für eine verbesserte Bereitstellung und Qualität der IT-Dienste?',
                        'name'=>'b3',
                        'options'=>array(
                            array(
                                'label'=>'Wir tun zu diesem Zeitpunkt nichts dergleichen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir tun dies inoffiziell mithilfe von Anteilen von anderen Investitionen, um die Fähigkeit zu finanzieren',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir tun dies zurzeit ein wenig, aber da es so schwierig ist, denken wir nicht dran es zu erweitern',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir tun dies zurzeit ein wenig, und versuchen, es zu erweitern',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir tun es zurzeit sehr viel',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir tun es, wann immer möglich',
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
                'title' => 'Wie verwalten Sie primär Ihre IT-Infrastruktur einschließlich Server, Speicher und Netzwerke? ',
                'questions' => array(
                    'b4'=>array(
                        'type'=>'radio',
                        'question'=>'Wie verwalten Sie primär Ihre IT-Infrastruktur einschließlich Server, Speicher und Netzwerke? ',
                        'name'=>'b4',
                        'options'=>array(
                            array(
                                'label'=>'Sehr gelegentliche Nutzung von Tabellenkalkulationen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir verwenden hauptsächlich &quot;gebrauchsfertige&quot; Programme von unserem Hardwarelieferanten',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir verwenden eine Kombination aus spezialisierten Management-Programmen mit einigen &quot;gebrauchsfertigen&quot; Programmen',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir verwenden hauptsächlich spezialisierte Management-Programme',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir verwenden eine integrierte End-to-End Management-Suite',
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
                'title' => 'In welchem Ausmaß haben Sie in Ihrem IT-Management Automatisierung angenommen? ',
                'questions' => array(
                    'b5'=>array(
                        'type'=>'radio',
                        'question'=>'In welchem Ausmaß haben Sie in Ihrem IT-Management Automatisierung angenommen? ',
                        'name'=>'b5',
                        'options'=>array(
                            array(
                                'label'=>'Manuelle Prozesse in allen Bereichen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Hauptsächlich manuelle Prozesse mit wenig Automatisierung',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Ein gutes Gleichgewicht zwischen Automatisierung und manuellen Prozessen',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Vor allem Automatisierung mit wenigen manuellen Prozessen',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Automatisierung in allen Bereichen',
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
                'title' => 'Welche Aussage beschreibt den Aufbau Ihrer IT-Betriebsteams am besten?',
                'questions' => array(
                    'b6'=>array(
                        'type'=>'radio',
                        'question'=>'Welche Aussage beschreibt den Aufbau Ihrer IT-Betriebsteams am besten?',
                        'name'=>'b6',
                        'options'=>array(
                            array(
                                'label'=>'Wir haben getrennte Server-, Speicher- und Netzwerkteams',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir haben integrierte Server- und Speicher-Teams, mit einem getrennten Netzwerkteam',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir haben integrierte Server- und Netzwerkteams, mit einem getrennten Speicherteam',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir haben integrierte Speicher- und Netzwerkteams, mit einem getrennten Serverteam',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir verfügen über ein integriertes Server-, Speicher- und Netzwerkteam',
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
        'title' => 'IT-Infrastrukturtechnologie',
        'description' => 'The following questions ask about how IT is managed and operated at a high level',
        'colour' => 'dark-blue',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'In Ihrem eigenen Rechenzentrum oder Ihrem Standort. In welchem Umfang verwenden Sie Folgendes?',
                'questions' => array(
                    'c1'=>array(
                        'type'=>'groupradio',
                        'question'=>'In Ihrem eigenen Rechenzentrum oder Ihrem Standort. In welchem Umfang verwenden Sie Folgendes?',
                        'name'=>'c1',
                        'options'=>array(
                            array(
                                'label'=>'Server-Virtualisierung',
                                'name'=>'c1.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Speichervirtualisierung',
                                'name'=>'c1.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Netzwerkvirtualisierung',
                                'name'=>'c1.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Integrierte Systeme (Server, Speicher, Netzwerk, Management als integrierter Stack erhältlich)',
                                'name'=>'c1.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Lokale Private Cloud',
                                'name'=>'c1.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Hybrid Cloud (IT-Bereitstellung mit Private und Public Clouds)',
                                'name'=>'c1.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
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
                'title' => 'Managed Services oder Hosting von Drittanbietern. In welchem Umfang verwenden Sie Folgendes?',
                'questions' => array(
                    'c2'=>array(
                        'type'=>'groupradio',
                        'question'=>'Managed Services oder Hosting von Drittanbietern. In welchem Umfang verwenden Sie Folgendes?',
                        'name'=>'c2',
                        'options'=>array(
                            array(
                                'label'=>'Verwendung von nicht verwalteten IT-Hosting-Optionen (Co-Lo usw.)',
                                'name'=>'c2.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
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
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Outsourcing-Services',
                                'name'=>'c2.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Gehostete oder im gemeinsam genutzten Rechenzentrum gehostete Private Cloud',
                                'name'=>'c2.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
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
                'title' => 'Public Cloud. In welchem Umfang verwenden Sie Folgendes?',
                'questions' => array(
                    'c3'=>array(
                        'type'=>'groupradio',
                        'question'=>'Public Cloud. In welchem Umfang verwenden Sie Folgendes?',
                        'name'=>'c3',
                        'options'=>array(
                            array(
                                'label'=>'Public Cloud – Infrastructure-as-a-Service',
                                'name'=>'c3.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Public Cloud – Storage-as-a-Service',
                                'name'=>'c3.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Public Cloud – Platform-as-a-Service',
                                'name'=>'c3.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
                                        'value'=>4,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Public Cloud – Software-as-a-Service',
                                'name'=>'c3.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Noch nicht berücksichtigt',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Begrenzte Verwendung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Intensive Nutzung',
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
                'title' => 'Welche der folgenden Aussagen beschreibt die Haltung Ihrer IT-Abteilung in Bezug auf die Annahme neuer Technologien am besten?',
                'questions' => array(
                    'c4'=>array(
                        'type'=>'radio',
                        'question'=>'Welche der folgenden Aussagen beschreibt die Haltung Ihrer IT-Abteilung in Bezug auf die Annahme neuer Technologien am besten?',
                        'name'=>'c4',
                        'options'=>array(
                            array(
                                'label'=>'Wir sind bei der Annahme neuer Technologien langsam',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir neigen dazu, mit der Umsetzung neuer Technologien zu warten, bis sie ausgereift sind und sich als funktionsfähig bewährt haben',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir setzen schnell neue Technologien um, wenn wir einen greifbaren Nutzen für  bestehende Geschäftsaktivitäten sehen',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir folgen unseren Konkurrenten bzw. den Unternehmen der Branche sehr genau und setzen neue Technologien, kurz nachdem sie es tun, um',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir suchen aktiv nach neuen Technologien und Fähigkeiten, wenn wir eine Möglichkeit sehen, dem Geschäftswachstum zu helfen',
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
                'title' => 'In Bezug auf den Erwerb von Infrastruktur, welche Aussage beschreibt Ihre Haltung am besten?',
                'questions' => array(
                    'c5'=>array(
                        'type'=>'radio',
                        'question'=>'In Bezug auf den Erwerb von Infrastruktur, welche Aussage beschreibt Ihre Haltung am besten?',
                        'name'=>'c5',
                        'options'=>array(
                            array(
                                'label'=>'Wir kaufen Server, Speicher und Netzwerk getrennt',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir kaufen die meisten Server, Speichersysteme oder das Netzwerk getrennt, aber für begrenzte Bereiche der Infrastruktur kaufen wir sie zusammen als Teil eines strategischen Plans',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir kaufen die meisten Server, Speichersysteme und Netzwerke zusammen als Teil eines strategischen Plans',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wir kaufen alle unsere Server-, Speicher- und Netzwerkinfrastruktur zusammen als Teil eines strategischen Plans',
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