<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Fixpunkt.FpFractionslider',
            'Pi1',
            [
                'Slide' => 'fractionslider, sliderpro, sliderrevolution, list, show',
                'FracEffect' => 'list',
                'Cssclass' => 'list',
                'ProEffect' => 'list',
                'RevEffect' => 'list',
                'Part' => 'list'
            ],
            // non-cacheable actions
            [
                'Slide' => '',
                'FracEffect' => '',
                'Cssclass' => '',
                'ProEffect' => '',
                'RevEffect' => '',
                'Part' => ''
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					pi1 {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/Fractionslider.svg
						title = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fp_fractionslider_domain_model_pi1
						description = LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_db.xlf:tx_fp_fractionslider_domain_model_pi1.description
						tt_content_defValues {
							CType = list
							list_type = fpfractionslider_pi1
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder


// Page module hook - show flexform settings in page module
// klappt noch nicht einwandfrei: 'No class named Fixpunkt\FpFractionslider\Hooks\PageLayoutView' (61 chars) in TYPO3 8
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['fpfractionslider_pi1']['fp_fractionslider'] =
	\Fixpunkt\FpFractionslider\Hooks\PageLayoutView::class . '->getExtensionSummary';
	
if (TYPO3_MODE === 'BE') {
	// Page module hook - show flexform settings in page module
    //$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
    //$pluginSignature = strtolower($extensionName) . '_pi';
	//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info'][$pluginSignature][$_EXTKEY] =
	//	\Fixpunkt\FpFractionslider\Hooks\PageLayoutView::class . '->getExtensionSummary';
	
	/** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	//	$iconRegistry->registerIcon(
	//		'ext-fpreferenzen-wizard-icon',
	//		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
	//		['source' => 'EXT:fp_referenzen/Resources/Public/Icons/ce_wiz.gif']
	//	);
	$iconRegistry->registerIcon(
		'ext-fpfractionslider-folder-icon',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		['source' => 'EXT:fp_fractionslider/Resources/Public/Icons/ext-fpfractionslider-folder-tree.svg']
	);
}