<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = [
    '_DEFAULT' => [
        'init' => [
            'appendMissingSlash' => 'ifNotFile,redirect',
            'emptyUrlReturnValue' => '/',
        ],
    ],
];