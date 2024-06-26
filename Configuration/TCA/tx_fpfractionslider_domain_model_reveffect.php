<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect',
        'label' => 'datastart',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
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
		'searchFields' => 'datax,datay,datastart,datawhitespace,datawidth,dataheight,datahoffset,datavoffset,dataresponsiveoffset,databasealign',
        'iconfile' => 'EXT:fp_fractionslider/Resources/Public/Icons/tx_fpfractionslider_domain_model_reveffect.png'
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, datax, datay, datastart, datawhitespace, datawidth, dataheight, datahoffset, datavoffset, dataresponsiveoffset, databasealign, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:LGL.language',
			'config' => ['type' => 'language'],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => '', 'value' => 0],
                ],
                'foreign_table' => 'tx_fpfractionslider_domain_model_reveffect',
                'foreign_table_where' => 'AND tx_fpfractionslider_domain_model_reveffect.pid=###CURRENT_PID### AND tx_fpfractionslider_domain_model_reveffect.sys_language_uid IN (-1,0)',
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
                        'label' => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
		],
    	'starttime' => [
    		'exclude' => true,
    		'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
    		'config' => [
    			'type' => 'datetime',
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
    			'type' => 'datetime',
    			'default' => 0,
    			'range' => [
    				'upper' => mktime(0, 0, 0, 1, 1, 2038)
    			],
    			'behaviour' => [
    				'allowLanguageSynchronization' => true
    			]
    		],
    	],
        'datax' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect.datax',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datay' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect.datay',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datastart' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect.datastart',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datawhitespace' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect.datawhitespace',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['label' => '-', 'value' => 0],
			        ['label' => 'normal', 'value' => 1],
			        ['label' => 'nowrap', 'value' => 2],
			        ['label' => 'pre', 'value' => 3]
			    ],
                'default' => 0,
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'datawidth' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect.datawidth',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'dataheight' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect.dataheight',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datahoffset' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect.datahoffset',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datavoffset' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect.datavoffset',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'dataresponsiveoffset' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect.dataresponsiveoffset',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['label' => '-', 'value' => 0],
			        ['label' => 'on', 'value' => 1],
			        ['label' => 'off', 'value' => 2]
			    ],
                'default' => 0,
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'databasealign' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_reveffect.databasealign',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['label' => '-', 'value' => 0],
			        ['label' => 'slide', 'value' => 1],
			        ['label' => 'grid', 'value' => 2]
			    ],
                'default' => 0,
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
        'part' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
