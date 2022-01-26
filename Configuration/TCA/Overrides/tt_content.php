<?php
// Einbindung Flexform 
$pluginSignature = 'fpfractionslider_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue( $pluginSignature, 'FILE:EXT:fp_fractionslider/Configuration/FlexForms/flexform_pi1.xml' );

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'FpFractionslider',
		'Pi1',
		'Professional Slider-Plugin'
);
