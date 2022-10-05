<?php

defined('TYPO3_MODE') or die();


$boot = function () {
    
    if (class_exists('TYPO3\CMS\Core\Configuration\ExtensionConfiguration')) {
        $extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
            \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
            );
        $Configuration = $extensionConfiguration->get('t3up_onepager');
    } else {
        $Configuration = GeneralUtility::makeInstance(ExtensionConfiguration::class)->get('t3up_onepager');
        if (!is_array($Configuration)) {
            $Configuration = unserialize($Configuration);
        }
    }
    
    # Enable/dissable the Right Marginal-Layout -> addPageTSConfig
    if ($Configuration['OnePagerLayout']) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_onepager/Configuration/TsConfig/Layouts/OnePagerLayout.typoscript">');
    } 
        
};

$boot();
unset($boot);