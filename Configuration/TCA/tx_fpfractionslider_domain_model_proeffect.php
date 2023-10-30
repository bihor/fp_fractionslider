<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect',
        'label' => 'datashowdelay',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
		'searchFields' => 'datawidth,dataheight',
        'iconfile' => 'EXT:fp_fractionslider/Resources/Public/Icons/tx_fpfractionslider_domain_model_proeffect.png'
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, datawidth, dataheight, datadepth, dataposition, datahorizontal, datavertical, datashowtransition, datashowoffset, datashowduration, datashowdelay, datahidetransition, datahideoffset, datahideduration, datahidedelay, datastayduration, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_fpfractionslider_domain_model_proeffect',
                'foreign_table_where' => 'AND tx_fpfractionslider_domain_model_proeffect.pid=###CURRENT_PID### AND tx_fpfractionslider_domain_model_proeffect.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
		],
    	'starttime' => [
    		'exclude' => true,
    		'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
    		'config' => [
    			'type' => 'input',
    			'renderType' => 'inputDateTime',
    			'eval' => 'datetime,int',
    			'default' => 0,
    			'behaviour' => [
    				'allowLanguageSynchronization' => true
    			]
    		]
    	],
    	'endtime' => [
    		'exclude' => true,
    		'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
    		'config' => [
    			'type' => 'input',
    			'renderType' => 'inputDateTime',
    			'eval' => 'datetime,int',
    			'default' => 0,
    			'range' => [
    				'upper' => mktime(0, 0, 0, 1, 1, 2038)
    			],
    			'behaviour' => [
    				'allowLanguageSynchronization' => true
    			]
    		],
    	],
        'datawidth' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datawidth',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'dataheight' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.dataheight',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datadepth' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datadepth',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'dataposition' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.dataposition',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['-', 0],
			        ['topLeft', 1],
			        ['topCenter', 2],
			        ['topRight', 3],
			        ['bottomLeft', 4],
			        ['bottomCenter', 5],
			        ['bottomRight', 6],
			        ['centerLeft', 7],
			        ['centerRight', 8],
			        ['centerCenter', 9],
			    ],
                'default' => 0,
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'datahorizontal' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datahorizontal',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datavertical' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datavertical',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datashowtransition' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datashowtransition',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['-', 0],
			        ['left', 1],
			        ['right', 2],
			        ['up', 3],
			        ['down', 4],
			    ],
                'default' => 0,
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'datashowoffset' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datashowoffset',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datashowduration' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datashowduration',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datashowdelay' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datashowdelay',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datahidetransition' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datahidetransition',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['-', 0],
			        ['left', 1],
			        ['right', 2],
			        ['up', 3],
			        ['down', 4],
			    ],
                'default' => 0,
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'datahideoffset' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datahideoffset',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datahideduration' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datahideduration',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datahidedelay' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datahidedelay',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datastayduration' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_proeffect.datastayduration',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
        'part' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
