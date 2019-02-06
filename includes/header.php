<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <title>Mgine<?php echo isset($t['title']) ? ' - '.$t['title'] : '' ?></title>
    <?php if (DEV_MODE === 'development'): ?>
        <!-- <DEVELOPMENT> -->

        <link rel="stylesheet" href="styles/fonts.css?_=<?php echo time(); ?>">
        <link rel="stylesheet" href="styles/styles.css?_=<?php echo time(); ?>">
        <link rel="stylesheet" href="styles/custom.css?_=<?php echo time(); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/app.js?_=<?php echo time(); ?>"></script>
        <script src="js/mail.js?_=<?php echo time(); ?>"></script>

        <!-- </DEVELOPMENT> -->
    <?php else: ?>
        <!-- <PRODUCTION> -->


        <!--
        <link href="build/css/bundle.min.css?_=1515534748" rel="stylesheet" />
        <script async type="text/javascript" src="build/js/bundle.min.js?_=1515534748" ></script>
        -->

        <?php
        $timeCache = 3;
        //$timeCache = time();
        ?>

        <link rel="stylesheet" href="styles/fonts.css?_=<?php echo $timeCache; ?>">
        <link rel="stylesheet" href="styles/styles.css?_=<?php echo $timeCache; ?>">
        <link rel="stylesheet" href="styles/custom.css?_=<?php echo $timeCache; ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/app.js?_=<?php echo $timeCache; ?>"></script>
        <script src="js/mail.js?_=<?php echo $timeCache; ?>"></script>

        <!-- </PRODUCTION> -->
    <?php endif; ?>

    <link rel="apple-touch-icon" sizes="57x57" href="build/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="build/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="build/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="build/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="build/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="build/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="build/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="build/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="build/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="build/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="build/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="build/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="build/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="build/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="google-site-verification" content="ZCkCFNXE30IDac4qOSy42zhmiA7RHltWWtfCMVhmegw" />

</head>
<body>
<div class="overlay"></div>
<div class="contentWrapper">
    <header>
        <div class="container">
            <button class="burgerIco">
                <svg aria-hidden="true">
                    <use xlink:href="imgs/svg/icons.svg#burgerIco"></use>
                </svg>
            </button>
            <a href="//mgine.offerslook.com/index.php?r=site%2Flogin" class="logo">
                <svg aria-hidden="true">
                    <use xlink:href="imgs/svg/logo.svg#logo"></use>
                </svg>
            </a>
            <nav>
                <button class="closeMenu">
                    <svg aria-hidden="true">
                        <use xlink:href="imgs/svg/icons.svg#closeIco"></use>
                    </svg>
                </button>
                <ul>
                    <li><a href="<?php echo $publishersPageLink; ?>" class="actionCloseMenu">Publishers</a></li>
                    <li><a href="<?php echo $advertisersPageLink; ?>" class="actionCloseMenu">Advertisers</a></li>
                </ul>
                <a class="btn_default" href="//mgine.offerslook.com/index.php?r=site%2Flogin">Login</a>
            </nav>
            <a class="btn_default mobile" href="//mgine.offerslook.com/index.php?r=site%2Flogin">Login</a>
        </div>
    </header>
    <main>

        <a id="beforeContent"></a>
