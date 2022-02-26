<html>
<head>
<title>Mariapori.fi</title>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/main.js'; ?>">
</script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<div id="banneri">
<img src="<?php echo get_stylesheet_directory_uri().'/banneri.png'; ?>">
</div>
<div id="mobiilinavigaatio">
</div>
<div id="navigaatio">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>
<div class="sisalto">
<?php wp_head(); ?>