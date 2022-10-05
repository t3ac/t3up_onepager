<?php
defined('TYPO3_MODE') or die();

$padding = array (
        'container' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3up/Resources/Private/Language/locallang_backend.xlf:containerhandle',
            'config' => [
                'type' => 'check',
                'default' => 0
            ]
        ],
);


/*********************************************************************************************************/

// Felder der allgemeinen Datensatzbeschreibung hinzufügen - noch keine Ausgabe im Backend!
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $padding
);

/*********************************************************************************************************/

// Felder der neuen Palette hinzufügen
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tt_content',
 'padding_fields',
 'container'
);

/*********************************************************************************************************/

// Diese Zeile muss auch in Gridelements in gridelements/Configuration/TCA/Overrides/tt_content.php ~ in Zeile 135!!
// --palette--;LLL:EXT:t3up/Resources/Private/Language/locallang_be.xlf:padding_class;padding_fields,container

// Palette hinzufügen, nach Layout - dadurch Anzeige im Backend
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
'tt_content','--palette--;LLL:EXT:t3up/Resources/Private/Language/locallang_backend.xlf:padding_class;padding_fields', '', 'after:layout');


?>
