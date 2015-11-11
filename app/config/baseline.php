<?php
return array(
    'itbusiness' => array(
        'baseline' => 17.5,
        'types' => array(
            'Reactive' => array(
                'low' => 5,
                'high' => 12.9
            ),
            'Mainstream' => array(
                'low' => 13,
                'high' => 17.9
            ),
            'Proactive' => array(
                'low' => 18,
                'high' => 25
            )
        )
    ),
    'itservicedelivery' => array(
        'baseline' => 11,
        'types' => array(
            'Reactive' => array(
                'low' => 6,
                'high' => 14.9
            ),
            'Mainstream' => array(
                'low' => 15,
                'high' => 20.9
            ),
            'Proactive' => array(
                'low' => 21,
                'high' => 30
            )
        )
    ),
    'itinfrastructure' => array(
        'baseline' => 12.05,
        'types' => array(
            'Reactive' => array(
                'low' => 5,
                'high' => 10.9
            ),
            'Mainstream' => array(
                'low' => 11,
                'high' => 15.4
            ),
            'Proactive' => array(
                'low' => 15.5,
                'high' => 22
            )
        )
    ),
    'overall' => array(
        'baseline' => 51.5,
        'types' => array(
            'Current-Focused' => array(
                'low' => 16,
                'high' => 38.4,
                'copy' => Lang::get('general.currenttxt'),
				'tweet' => Lang::get('general.currenttweet')
            ),
            'Future-Aware' => array(
                'low' => 38.5,
                'high' => 49.9,
                'copy' => Lang::get('general.future-awaretxt'),
                'tweet' => Lang::get('general.future-awaretweet')
            ),
            'Future-Focused' => array(
                'low' => 50,
                'high' => 61.4,
                'copy' => Lang::get('general.future-focusedtxt'),
                'tweet' => Lang::get('general.future-focusedtweet')
            ),
            'Future-Creator' => array(
                'low' => 61.5,
                'high' => 77,
                'copy' => Lang::get('general.future-creatortxt'),
                'tweet' => Lang::get('general.future-creatortweet')
            )
        )
    )
    
);