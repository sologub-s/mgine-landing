<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Mgine<?php echo isset($t['title']) ? ' - '.$t['title'] : '' ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="mgine" />
    <meta name="description" content="Mgine" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto" rel="stylesheet">
    <!--<link rel="icon" type="image/png" href="img/favicon.ico">-->

    <?php if (DEV_MODE === 'development'): ?>
    <!-- <DEVELOPMENT> -->

    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="node_modules/tether/dist/css/tether.min.css" rel="stylesheet" />
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.css?_=<?php echo time(); ?>" rel="stylesheet" />
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.slim.min.js" ></script>
    <script type="text/javascript" src="node_modules/tether/dist/js/tether.min.js" ></script>
    <script async type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>

    <!-- </DEVELOPMENT> -->
    <?php else: ?>
    <!-- <PRODUCTION> -->


    <link href="build/css/bundle.min.css?_=1515534748" rel="stylesheet" />
    <script async type="text/javascript" src="build/js/bundle.min.js?_=1515534748" ></script>

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

    <base href="./" />
</head>
<body>

<nav class="navbar-custom fixed-top d-flex align-items-center">
    <a class="navbar-brand" href="https://mgine.offerslook.com">
        <img src="build/img/logo.png" />
    </a>
    <!--<button class="btn btn-custom btn-white uppercase px-4" type="button" data-toggle="modal" data-target="#loginModal">Log in</button>-->
    <!--<button class="btn btn-custom btn-white uppercase px-4" type="button" data-toggle="modal" data-target="#laterModal">Log in</button>-->
    <a class="btn btn-custom btn-white uppercase px-4" role="button" href="//mgine.offerslook.com/index.php?r=site/login" >Log in</a>
</nav>

<section class="section1 d-flex align-items-center container-fluid justify-content-center">
    <h1>Premium Performance Network</h1>
</section>

<a id="beforeContent"></a>