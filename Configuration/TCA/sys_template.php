<?php

defined('TYPO3_MODE') || die ('Access denied.');

call_user_func(
    function ($extKey) {
        /**
         * Embed static TypoScript template(s)
         */
        TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            't3up_onepager',
            'Configuration/TypoScript/',
            'T3UP - Onepager'
        );
    },
    't3uponepager'
);
