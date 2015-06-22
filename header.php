<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Arvo::latin', 'Montserrat:400,700:latin', 'Roboto:400,700:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 
</script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/sass/css/relaunches.css" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php include('navigation.php');  ?>

<div id="page">

<header>

	<div id="logo">
		<a class="relaunches" href="<?php echo get_site_url(); ?>">
		Relaunches
		</a>
	</div>
	<small> 
	<?php
	if(is_category('')) {
		$category = get_the_category(); 
		echo $category[0]->cat_name;
	}
	else {

		if (is_tag('')) {
			$current_tag = single_tag_title("", false); 
			echo $current_tag;
		}
		else {
			echo 'All stories';
		}

	}
	?>
	</small>

</header>


<div id="main">
