<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bludit CMS">

<!-- Dynamic title tag -->
<?php echo Theme::headTitle(); ?>

<!-- Dynamic description tag -->
<?php echo Theme::headDescription(); ?>

<!-- Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- CSS: Styles for this theme -->
<?php echo Theme::css('css/default.css'); ?>
<?php echo Theme::css('css/layout.css'); ?>
<?php echo Theme::css('css/media-queries.css'); ?>
<?php echo Theme::css('css/bludit.css'); ?>


<!-- Script -->
<?php echo Theme::js('js/modernizr.js'); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
