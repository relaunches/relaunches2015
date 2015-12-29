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

<!--
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
-->

<script src="//use.typekit.net/uge1fqn.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<meta name="description" content="The latest UX/UI Design Stories &amp; Bookmarks: <?php while (have_posts()) : the_post(); ?><?php the_title(''); echo ', ' ?><?php endwhile; ?>..." />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">

<link rel="icon" type="image/png" href="<?php echo get_site_url(); ?>/favicon-16x16.png">
<link rel="apple-touch-icon" href="<?php echo get_site_url(); ?>/apple-touch-icon.png">
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

	<?php
	// random logo background
	  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg' ); // array of filenames

	  $i = rand(0, count($bg)-1); // generate random number size of the array
	  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
	?>

	<div id="logo">
		<a class="relaunches" style="background: url(<?php echo get_template_directory_uri(); ?>/bgs/<?php echo $selectedBg; ?>) center center no-repeat;" href="<?php echo get_site_url(); ?>">
		Relaunches
		</a>
	</div>
	<small> 
	<?php
	if(is_category('')) {
		$category = get_the_category(); 
		echo 'This Thing Called ';
		echo $category[0]->cat_name;
	}
	else {

		if (is_tag('')) {
			$current_tag = single_tag_title("", false); 
			echo 'This Thing Called '; 
			echo $current_tag;
		}

		elseif (is_page()) {
			// wp_title('');
			echo 'This Thing Called User Experience';
		}

		else {
			// echo 'UX Design &infin; UI Design';
			echo 'This Thing Called User Experience';
		}

	}
	?>
	</small>

</header>


<div id="main">
