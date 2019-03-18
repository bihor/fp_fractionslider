<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
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
        
        /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        $iconRegistry->registerIcon(
        	'ext-fpfractionslider-wizard-icon',
        	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        	['source' => 'EXT:fp_fractionslider/Resources/Public/Icons/Fractionslider.svg']
        );
        $iconRegistry->registerIcon(
        	'ext-fpfractionslider-folder-icon',
        	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        	['source' => 'EXT:fp_fractionslider/Resources/Public/Icons/ext-fpfractionslider-folder-tree.svg']
        );
    }
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fp_fractionslider/Configuration/TSconfig/ContentElementWizard.txt">');

// Page module hook - show flexform settings in page module
// klappt noch nicht einwandfrei: 'No class named Fixpunkt\FpFractionslider\Hooks\PageLayoutView' (61 chars) in TYPO3 8
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['fpfractionslider_pi1']['fp_fractionslider'] =
	\Fixpunkt\FpFractionslider\Hooks\PageLayoutView::class . '->getExtensionSummary';
