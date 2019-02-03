<?php

$t = isset($t) ? $t : [];

if ($_SERVER['SERVER_NAME'] === 'mgine.sologub.od.ua') {
    define('DEV_MODE', 'development');
} else {
    define('DEV_MODE', 'production');
}

switch ($_SERVER['REQUEST_URI'])
{
    case '/privacy-policy.html':
        require_once 'includes/privacy-policy.php';
        break;
    case '/advertisers-terms-and-conditions.html':
        require_once 'includes/advertisers-terms-and-conditions.php';
        break;
    case '/publisher-terms-and-conditions.html':
        require_once 'includes/publisher-terms-and-conditions.php';
        break;
    default:
        require_once 'includes/main.php';
        break;
}
?>




