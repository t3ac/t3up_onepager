<?php

/***********************************************************************
 * Extension Manager/Repository config file for ext "t3up_OnePager".
 **********************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - OnePager',
    'description'      => 'Headerimage as a content element',
    'version'          => '10.0.0',
    'state'            => 'stable',
    'category'         => 'fe',
    'author'           => 'Michael Lang',
    'author_email'     => 'michael.lang@h-da.de',
    'author_company'   => 'h_da Hochschule Darmstadt',
    'uploadfolder'     => false,
    'createDirs'       => '',
    'clearcacheonload' => true,
    'constraints'      => [
        'depends'   => [
            'typo3' => '10.4.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];