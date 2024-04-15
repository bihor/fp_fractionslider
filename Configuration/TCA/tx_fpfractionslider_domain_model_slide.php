<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_slide',
        'label' => 'title',
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
        'searchFields' => 'title,subtitle',
        'iconfile' => 'EXT:fp_fractionslider/Resources/Public/Icons/tx_fpfractionslider_domain_model_slide.png'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, subtitle, background, color, datain, elements, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_fpfractionslider_domain_model_slide',
                'foreign_table_where' => 'AND tx_fpfractionslider_domain_model_slide.pid=###CURRENT_PID### AND tx_fpfractionslider_domain_model_slide.sys_language_uid IN (-1,0)',
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
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_slide.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'required' => true
            ],
        ],
        'subtitle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_slide.subtitle',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 3,
                'eval' => 'trim'
            ],
        ],
        'background' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_slide.background',
            'config' =>
                [
                    'type' => 'file',
                    'maxitems' => 1,
                    'allowed' => 'common-image-types'
                ],
        ],
        'color' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_slide.color',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'datain' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_slide.datain',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => '-', 'value' => 0],
                    ['label' => 'none', 'value' => 1],
                    ['label' => 'fade', 'value' => 2],
                    ['label' => '-- fractionslider: --', 'value' => 3],
                    ['label' => 'slideLeft', 'value' => 4],
                    ['label' => 'slideRight', 'value' => 5],
                    ['label' => 'slideTop', 'value' => 6],
                    ['label' => 'slideBottom', 'value' => 7],
                    ['label' => 'scrollLeft', 'value' => 8],
                    ['label' => 'scrollRight', 'value' => 9],
                    ['label' => 'scrollTop', 'value' => 10],
                    ['label' => 'scrollBottom', 'value' => 11],
                    ['label' => '-- slider revolution: --', 'value' => 12],
                    ['label' => 'slideup', 'value' => 13],
                    ['label' => 'slidedown', 'value' => 14],
                    ['label' => 'slideright', 'value' => 15],
                    ['label' => 'slideleft', 'value' => 16],
                    ['label' => 'slidehorizontal', 'value' => 17],
                    ['label' => 'slidevertical', 'value' => 18],
                    ['label' => 'boxslide', 'value' => 19],
                    ['label' => 'slotslide-horizontal', 'value' => 20],
                    ['label' => 'slotslide-vertical', 'value' => 21],
                    ['label' => 'boxfade', 'value' => 22],
                    ['label' => 'slotfade-horizontal', 'value' => 23],
                    ['label' => 'slotfade-vertical', 'value' => 24],
                    ['label' => 'fadefromright', 'value' => 25],
                    ['label' => 'fadefromleft', 'value' => 26],
                    ['label' => 'fadefromtop', 'value' => 27],
                    ['label' => 'fadefrombottom', 'value' => 28],
                    ['label' => 'fadetoleftfadefromright', 'value' => 29],
                    ['label' => 'fadetorightfadefromleft', 'value' => 30],
                    ['label' => 'fadetotopfadefrombottom', 'value' => 31],
                    ['label' => 'fadetobottomfadefromtop', 'value' => 32],
                    ['label' => 'parallaxtoright', 'value' => 33],
                    ['label' => 'parallaxtoleft', 'value' => 34],
                    ['label' => 'parallaxtotop', 'value' => 35],
                    ['label' => 'parallaxtobottom', 'value' => 36],
                    ['label' => 'scaledownfromright', 'value' => 37],
                    ['label' => 'scaledownfromleft', 'value' => 38],
                    ['label' => 'scaledownfromtop', 'value' => 39],
                    ['label' => 'scaledownfrombottom', 'value' => 40],
                    ['label' => 'zoomout', 'value' => 41],
                    ['label' => 'zoomin', 'value' => 42],
                    ['label' => 'slotzoom-horizontal', 'value' => 43],
                    ['label' => 'slotzoom-vertical', 'value' => 44],
                    ['label' => 'random-static', 'value' => 45],
                    ['label' => 'random', 'value' => 46],
                ],
                'default' => 0,
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'elements' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fpfractionslider_domain_model_slide.elements',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_fpfractionslider_domain_model_part',
                'foreign_field' => 'slide',
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
    ],
];
