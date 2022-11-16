<?php

defined('TYPO3_MODE') or die();


$boot = function () {
    

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_onepager/Configuration/TsConfig/Layouts/OnePagerLayout.typoscript">');

};

$boot();
unset($boot);