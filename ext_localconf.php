<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;
use Fixpunkt\FpFractionslider\Controller\SlideController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
	{
        ExtensionUtility::configurePlugin(
            'FpFractionslider',
            'Fractionslider',
            [   SlideController::class => 'fractionslider'     ],
            [   SlideController::class => ''    ]
        );
        ExtensionUtility::configurePlugin(
            'FpFractionslider',
            'Sliderpro',
            [   SlideController::class => 'sliderpro'     ],
            [   SlideController::class => ''    ]
        );
        ExtensionUtility::configurePlugin(
            'FpFractionslider',
            'Sliderrevolution',
            [   SlideController::class => 'sliderrevolution'     ],
            [   SlideController::class => ''    ]
        );
        ExtensionUtility::configurePlugin(
            'FpFractionslider',
            'List',
            [   SlideController::class => 'list'     ],
            [   SlideController::class => ''    ]
        );
        ExtensionUtility::configurePlugin(
            'FpFractionslider',
            'Show',
            [   SlideController::class => 'show'     ],
            [   SlideController::class => ''    ]
        );

        // wizards
        if ((new Typo3Version())->getMajorVersion() < 13) {
            // @extensionScannerIgnoreLine
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fp_fractionslider/Configuration/TSconfig/ContentElementWizard.tsconfig">');
        }
    }
);


