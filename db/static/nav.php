<?php

$navLinks = ['home'=>['href'=>  WEB_URL],
    'about' => ['href'=>_link('about','about')],
    'claims' =>['href' => [ 
          // 'new fire claim' => ['href' => _link('fire-claim','fire-claim')],
           'new motor claim' => ['href' => _link('motor-claim','motor-claim')],
            'FAQ' => ['href'=> '#']
        ],
    ],
    'proposals' =>['href' => [ 
            'new motor policy' => ['href' => _link('motor-policy','motor-policy')],
            'FAQ' => ['href'=> '#']
        ],
    ]
];