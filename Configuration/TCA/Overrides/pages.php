<?php
defined('TYPO3') or die();

// Override icon
$GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
    0 => 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:fpfractionslider-folder',
    1 => 'fraction',
    2 => 'ext-fpfractionslider-folder-icon'
];

$GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-fraction'] = 'ext-fpfractionslider-folder-icon';