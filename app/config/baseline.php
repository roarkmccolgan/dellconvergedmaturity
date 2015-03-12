<?php
return array(
    'business' => array(
        'baseline' => 15.49,
        'types' => array(
            'Reactive' => array(
                'low' => 0,
                'high' => 11
            ),
            'Moderate' => array(
                'low' => 11.1,
                'high' => 20
            ),
            'Proactive' => array(
                'low' => 20.1,
                'high' => 25
            )
        )
    ),
    'security' => array(
        'baseline' => 12.33,
        'types' => array(
            'Reactive' => array(
                'low' => 0,
                'high' => 9
            ),
            'Moderate' => array(
                'low' => 9.1,
                'high' => 16
            ),
            'Proactive' => array(
                'low' => 16.1,
                'high' => 20
            )
        )
    ),
    'cloud' => array(
        'baseline' => 14.76,
        'types' => array(
            'Reactive' => array(
                'low' => 0,
                'high' => 9
            ),
            'Moderate' => array(
                'low' => 9.1,
                'high' => 20
            ),
            'Proactive' => array(
                'low' => 20.1,
                'high' => 25
            )
        )
    ),
    'mobility' => array(
        'baseline' => 14.45,
        'types' => array(
            'Reactive' => array(
                'low' => 0,
                'high' => 11
            ),
            'Moderate' => array(
                'low' => 11.1,
                'high' => 20
            ),
            'Proactive' => array(
                'low' => 20.1,
                'high' => 25
            )
        )
    ),
    'bigdataanalytics' => array(
        'baseline' => 9.58,
        'types' => array(
            'Reactive' => array(
                'low' => 0,
                'high' => 9
            ),
            'Moderate' => array(
                'low' => 9.1,
                'high' => 16
            ),
            'Proactive' => array(
                'low' => 16.1,
                'high' => 20
            )
        )
    ),
    'overall' => array(
        'baseline' => 66.61,
        'types' => array(
            'Reactive' => array(
                'low' => 0,
                'high' => 48,
                'copy' => Lang::get('general.reativetxt'),
				'tweet' => Lang::get('general.relativetweet')
            ),
            'Moderate' => array(
                'low' => 48.1,
                'high' => 92,
                'copy' => Lang::get('general.moderatetxt'),
                'tweet' => Lang::get('general.moderatetweet')
            ),
            'Proactive' => array(
                'low' => 92.1,
                'high' => 115,
                'copy' => Lang::get('general.proactivetxt'),
                'tweet' => Lang::get('general.proactivetweet')
            )
        )
    )
    
);