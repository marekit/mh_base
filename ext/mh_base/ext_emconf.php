<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Project: mh_base',
    'description' => 'mh_base boilerplate for provider extension',
    'category' => 'templates',
    'version' => '1.0.0',
    'state' => 'stable',
    'author' => 'Marc Hauschildt',
    'author_email' => 'marc.hauschildt@me.de',
    'author_company' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6',
            'cms' => '',
            'extbase' => '',
            'fluid' => '',
            'flux' => '',
            'fluidpages' => '',
            'fluidcontent' => '',
            'realurl' => '',
            'scheduler' => '',
            'vhs' => '',
        ],
        'conflicts' => [
            'rtehtmlarea' => '',
        ],
        'suggests' => [],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'autoload' => [
        'psr-4' => ['MH\\Base\\' => 'Classes'],
    ],
];