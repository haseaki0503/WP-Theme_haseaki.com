<!DOCTYPE html>
<html lang="ja">
<head>
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<!--<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="screen and (min-width: 1000px)">-->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/smart.css" media="screen and (max-width: 1000px)">-->
	<link href="<?php echo get_template_directory_uri(); ?>/google-code-prettify/prettify.css" rel="stylesheet">

	<!-- Script -->
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/google-code-prettify/prettify.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

	<!-- wp_head -->
	<?php wp_head(); ?>

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54860307-1', 'auto');
  ga('send', 'pageview');

</script>