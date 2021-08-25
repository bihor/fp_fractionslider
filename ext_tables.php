<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fpfractionslider_domain_model_slide', 'EXT:fp_fractionslider/Resources/Private/Language/locallang_csh_tx_fpfractionslider_domain_model_slide.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fpfractionslider_domain_model_slide');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fpfractionslider_domain_model_fraceffect', 'EXT:fp_fractionslider/Resources/Private/Language/locallang_csh_tx_fpfractionslider_domain_model_fraceffect.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fpfractionslider_domain_model_fraceffect');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fpfractionslider_domain_model_cssclass', 'EXT:fp_fractionslider/Resources/Private/Language/locallang_csh_tx_fpfractionslider_domain_model_cssclass.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fpfractionslider_domain_model_cssclass');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fpfractionslider_domain_model_proeffect', 'EXT:fp_fractionslider/Resources/Private/Language/locallang_csh_tx_fpfractionslider_domain_model_proeffect.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fpfractionslider_domain_model_proeffect');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fpfractionslider_domain_model_reveffect', 'EXT:fp_fractionslider/Resources/Private/Language/locallang_csh_tx_fpfractionslider_domain_model_reveffect.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fpfractionslider_domain_model_reveffect');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fpfractionslider_domain_model_part', 'EXT:fp_fractionslider/Resources/Private/Language/locallang_csh_tx_fpfractionslider_domain_model_part.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fpfractionslider_domain_model_part');
    }
);
