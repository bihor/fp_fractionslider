<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_fraceffect',
        'label' => 'datatime',
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
		'searchFields' => 'dataposition,datain,dataout,dataeasein,dataeaseout,datadelay,datatime,datastep,dataspecial',
        'iconfile' => 'EXT:fp_fractionslider/Resources/Public/Icons/tx_fpfractionslider_domain_model_fraceffect.png'
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, dataposition, datain, dataout, dataeasein, dataeaseout, datadelay, datatime, datastep, dataspecial, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_fpfractionslider_domain_model_fraceffect',
                'foreign_table_where' => 'AND tx_fpfractionslider_domain_model_fraceffect.pid=###CURRENT_PID### AND tx_fpfractionslider_domain_model_fraceffect.sys_language_uid IN (-1,0)',
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
        'dataposition' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_fraceffect.dataposition',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datain' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_fraceffect.datain',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['-', 0],
			        ['none', 1],
			        ['fade', 2],
			        ['left', 3],
			        ['right', 4],
			        ['top', 5],
			        ['bottom', 6],
			        ['topLeft', 7],
			        ['bottomLeft', 8],
			        ['topRight', 9],
			        ['bottomRight', 10],
			    ],
                'default' => 0,
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'dataout' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_fraceffect.dataout',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['-', 0],
					['none ', 1],
					['fade', 2],
					['left', 3],
					['right', 4],
					['top', 5],
					['bottom', 6],
					['topLeft', 7],
					['bottomLeft', 8],
					['topRight', 9],
					['bottomRight', 10],
			    ],
                'default' => 0,
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'dataeasein' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_fraceffect.dataeasein',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'dataeaseout' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_fraceffect.dataeaseout',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datadelay' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_fraceffect.datadelay',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datatime' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_fraceffect.datatime',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'datastep' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_fraceffect.datastep',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'dataspecial' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_fraceffect.dataspecial',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['-', 0],
		    		['cycle', 1],
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
