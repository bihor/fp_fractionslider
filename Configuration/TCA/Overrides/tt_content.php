<?php
// Einbindung Flexform + Plugin
foreach (['fractionslider', 'sliderpro', 'sliderrevolution', 'list', 'show'] as $plugin) {
    $pluginSignature = 'fpfractionslider_' . $plugin;
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        $pluginSignature,
        'FILE:EXT:fp_fractionslider/Configuration/FlexForms/flexform_pi1.xml'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'FpFractionslider',
        ucfirst($plugin),
        'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:tx_fp_fractionslider_domain_model_' . $plugin,
        'EXT:fp_fractionslider/Resources/Public/Icons/Extension.gif',
    );
}