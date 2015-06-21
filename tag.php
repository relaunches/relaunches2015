<?php get_header(); ?>

<div id="content">
<?php include ('loop.php'); ?>
</div>

<div class="container">
	<div class="navigation"><p><?php posts_nav_link(' ','<i class="demo-icon icon-left-open">&#xe801;</i>Newer','Older<i class="demo-icon icon-right-open">&#xe800;</i>'); ?></p></div>
</div>


</div><!-- #main -->

<?php get_footer(); ?>
