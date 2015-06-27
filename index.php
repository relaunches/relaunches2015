<?php get_header(); ?>

<div id="content">
<?php include ('loop.php'); ?>
</div>

<div class="navigation">
	<div class="navigation--prev-page">
	<?php echo get_previous_posts_link('<i class="demo-icon icon-left-open">&#xe801;</i>Newer'); ?>
	</div>

	<div class="navigation--next-page">
	<?php echo get_next_posts_link('Older<i class="demo-icon icon-right-open">&#xe800;</i>'); ?>
	</div>
</div>

</div><!-- #main -->

<?php get_footer(); ?>
