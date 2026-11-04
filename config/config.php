<?php

if (!defined('BASE_URL')) {
    $baseUrl = '/billing_hospital';
    $projectRoot = realpath(dirname(__DIR__));
    $documentRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? '');

    if ($projectRoot !== false && $documentRoot !== false) {
        $documentRoot = rtrim($documentRoot, DIRECTORY_SEPARATOR);

        if (strcasecmp($projectRoot, $documentRoot) === 0) {
            $baseUrl = '';
        } else {
            $documentRootPrefix = $documentRoot . DIRECTORY_SEPARATOR;
            if (strncasecmp($projectRoot, $documentRootPrefix, strlen($documentRootPrefix)) === 0) {
                $relativePath = substr($projectRoot, strlen($documentRootPrefix));
                $baseUrl = '/' . str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);
            }
        }
    }

    define('BASE_URL', $baseUrl);
}