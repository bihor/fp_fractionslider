<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part',
        'label' => 'title',
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
		'searchFields' => 'title,subtitle',
        'iconfile' => 'EXT:fp_fractionslider/Resources/Public/Icons/tx_fpfractionslider_domain_model_part.png'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, subtitle, linktitle, link, image, cettcontent, cssstyles, cssclass, fraction, pro, revolution',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, subtitle, linktitle, link, image, cettcontent, cssstyles, cssclass, fraction, pro, revolution, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
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
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_fpfractionslider_domain_model_part',
                'foreign_table_where' => 'AND tx_fpfractionslider_domain_model_part.pid=###CURRENT_PID### AND tx_fpfractionslider_domain_model_part.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'title' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'subtitle' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.subtitle',
	        'config' => [
							'type' => 'text',
							'cols' => 40,
							'rows' => 3,
							'eval' => 'trim'
			],
	    ],
	    'linktitle' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.linktitle',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'link' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.link',
	        'config' => [
					'type'     => 'input',
					'size'     => '25',
					'max'      => '255',
					'checkbox' => '',
					'eval'     => 'trim',
					'wizards' => [
							'link' => [
									'type' => 'popup',
									'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
									'icon' => 'actions-wizard-link',
									'module' => [
											'name' => 'wizard_element_browser',
											'urlParameters' => [
													'mode' => 'wizard'
											]
									],
									'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
							]
					],
					'softref' => 'typolink'
			],
	    ],
	    'image' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.image',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'image',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ],
			        'maxitems' => 1
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	    ],
	    'cettcontent' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.cettcontent',
	        'config' => [
			    'type' => 'group',
			    'internal_type' => 'db',
	    		'allowed' => 'tt_content',
	    		'size' => '1',
	    		'maxitems' => '1',
	    		'minitems' => '0',
	    		'show_thumbs' => '1',
	    		'wizards' => [
	    			'suggest' => [
	    				'type' => 'suggest'
	    			]
	    		]
			],
	    ],
	    'cssstyles' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.cssstyles',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'cssclass' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.cssclass',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_fpfractionslider_domain_model_cssclass',
				'foreign_table_where' => 'AND 1=1 ORDER BY tx_fpfractionslider_domain_model_cssclass.sorting ASC',
				'items' => array(
					array('-', 0),
				),
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			],
	    ],
	    'fraction' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.fraction',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_fpfractionslider_domain_model_fraceffect',
			    'foreign_field' => 'part',
			    'foreign_sortby' => 'sorting',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'useSortable' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
	    'pro' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.pro',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_fpfractionslider_domain_model_proeffect',
			    'foreign_field' => 'part',
			    'foreign_sortby' => 'sorting',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'useSortable' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
	    'revolution' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_part.revolution',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_fpfractionslider_domain_model_reveffect',
			    'foreign_field' => 'part',
			    'foreign_sortby' => 'sorting',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'useSortable' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
        'slide' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
