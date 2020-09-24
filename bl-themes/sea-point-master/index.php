<!DOCTYPE html>
<html lang="<?php echo $language->currentLanguageShortVersion() ?>">
<head>
<?php include(THEME_DIR_PHP.'head.php') ?>
</head>
<body>
<!-- Load plugins siteBodyBegin -->
<?php Theme::plugins('siteBodyBegin') ?>
        
<!-- Navigation -->
<?php include(THEME_DIR_PHP.'navbar.php') ?>
        
<!-- Main Content -->
<?php
if ($WHERE_AM_I=='page') {
include(THEME_DIR_PHP.'page.php');
} else {
include(THEME_DIR_PHP.'home.php');
}
?>
        
<!-- Footer -->
<?php include(THEME_DIR_PHP.'footer.php') ?>
        
<!-- Javascript -->
<?php echo Theme::jquery() ?>
<?php echo Theme::jsBootstrap(); ?>
<?php echo Theme::js('js/clean-blog.min.js') ?>
<?php echo Theme::js('js/lightbox.js') ?>
<?php echo Theme::js('js/main.js') ?>

<!-- Load plugins siteBodyEnd -->
<?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>
