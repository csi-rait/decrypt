<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bludit CMS">

<!-- Dynamic <title> -->
<?php echo Theme::metaTags('title') ?>

<!-- Dynamic <meta name="description" ...> -->
<?php echo Theme::metaTags('description') ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png') ?>

<!-- Include Bootstrap CSS file bootstrap.css, this is part of Bludit core; We're using the link to boost the speed -->
<?php echo Theme::cssBootstrap() ?>


<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">


<!-- Include CSS Styles from the theme -->
<?php echo Theme::css('css/bootstrap.css') ?>
<?php echo Theme::css('css/all.min.css') ?>
<?php echo Theme::css('css/style.css') ?>
<?php echo Theme::css('css/lightbox.css') ?>
<?php echo Theme::css('css/bludit.css') ?>

<!-- Load plugins siteHead -->
<?php Theme::plugins('siteHead') ?>
