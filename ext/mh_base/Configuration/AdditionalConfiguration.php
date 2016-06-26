<?php

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/**
 * FE
 */

/*
 * String: embed,querystring,''. Allows to automatically include a version number (timestamp of the file) to referred
 * CSS and JS filenames on the rendered page. This will make browsers and proxies reload the files if they change
 * (thus avoiding caching issues).
 *
 * Set to 'embed' will have the timestamp embedded in the filename,
 * ie. filename.1269312081.js. IMPORTANT: 'embed' requires extra .htaccess rules to work (please refer to _.htaccess
 * or the _.htaccess file from the dummy package)
 *
 * Set to 'querystring' (default setting) to append the version number as a query parameter (doesn't require mod_rewrite).
 *
 * Set to '' will turn this functionality off (behaves like TYPO3 < v4.4).
 */
$GLOBALS['TYPO3_CONF_VARS']['FE']['versionNumberInFilename'] = 'embed';


/**
 * GFX
 */

/*
 * Integer: Default JPEG generation quality
 */
$GLOBALS['TYPO3_CONF_VARS']['GFX']['jpg_quality'] = 87;


/**
 * SYS
 */
