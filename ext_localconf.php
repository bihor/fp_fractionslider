<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
	{
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FpFractionslider',
            'Pi1',
            [
                \Fixpunkt\FpFractionslider\Controller\SlideController::class => 'fractionslider, sliderpro, sliderrevolution, list, show',
                \Fixpunkt\FpFractionslider\Controller\FracEffectController::class => 'list',
                \Fixpunkt\FpFractionslider\Controller\CssclassController::class => 'list',
                \Fixpunkt\FpFractionslider\Controller\ProEffectController::class => 'list',
                \Fixpunkt\FpFractionslider\Controller\RevEffectController::class => 'list',
                \Fixpunkt\FpFractionslider\Controller\PartController::class => 'list'
            ],
            // non-cacheable actions
            [
                \Fixpunkt\FpFractionslider\Controller\SlideController::class => '',
                \Fixpunkt\FpFractionslider\Controller\FracEffectController::class => '',
                \Fixpunkt\FpFractionslider\Controller\CssclassController::class => '',
                \Fixpunkt\FpFractionslider\Controller\ProEffectController::class => '',
                \Fixpunkt\FpFractionslider\Controller\RevEffectController::class => '',
                \Fixpunkt\FpFractionslider\Controller\PartController::class => ''
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

        // Page module hook - show flexform settings in page module
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['fpfractionslider_pi1']['fp_fractionslider'] =
            \Fixpunkt\FpFractionslider\Hooks\PageLayoutView::class . '->getExtensionSummary';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fp_fractionslider/Configuration/TSconfig/ContentElementWizard.txt">');
    }
);


