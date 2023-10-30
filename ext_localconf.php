<?php
declare(strict_types=1);

use Fixpunkt\FpFractionslider\Controller\SlideController;
use Fixpunkt\FpFractionslider\Updates\SwitchableControllerActionsPluginUpdater;
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

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
'mod.wizards.newContentElement.wizardItems.fractionslider {
    header = Fractionslider
	elements {
		fpfractionslider_fractionslider {
			iconIdentifier = ext-fpfractionslider-wizard-icon
			title = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model_fractionslider
			description = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model.description
			tt_content_defValues {
				CType = list
				list_type = fpfractionslider_fractionslider
			}
		}
		fpfractionslider_sliderpro {
			iconIdentifier = ext-fpfractionslider-wizard-icon
			title = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model_sliderpro
			description = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model.description
			tt_content_defValues {
				CType = list
				list_type = fpfractionslider_sliderpro
			}
		}
		fpfractionslider_sliderrevolution {
			iconIdentifier = ext-fpfractionslider-wizard-icon
			title = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model_sliderrevolution
			description = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model.description
			tt_content_defValues {
				CType = list
				list_type = fpfractionslider_sliderrevolution
			}
		}
		fpfractionslider_list {
			iconIdentifier = ext-fpfractionslider-wizard-icon
			title = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model_list
			description = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model.description
			tt_content_defValues {
				CType = list
				list_type = fpfractionslider_list
			}
		}
		fpfractionslider_show {
			iconIdentifier = ext-fpfractionslider-wizard-icon
			title = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model_show
			description = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model.description
			tt_content_defValues {
				CType = list
				list_type = fpfractionslider_show
			}
		}
	}
    show = *
}'
        );

        // Register switchableControllerActions plugin migrator
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['switchableControllerActionsPluginUpdaterFpFrac']
            = SwitchableControllerActionsPluginUpdater::class;
    }
);


