<?php get_header(); ?>

<p>This file was edited by me just to show some changes</p>

<div id="content">
<?php include ('loop.php'); ?>
</div>

<div class="container">
	<div class="navigation"><p><?php posts_nav_link(' ','&larr; back','forward &rarr;'); ?></p></div>
</div>

</div><!-- #main -->

<?php get_footer(); ?>
