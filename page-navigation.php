<?php 
	$prev_page = get_previous_posts_link();
	$next_page = get_next_posts_link();
?>

<div class="navigation">
	<div class="navigation--prev-page <?php if (empty($next_page)) {echo 'centered-page-nav';}?>">
	<?php echo get_previous_posts_link('<i class="demo-icon icon-left-open">&#xe801;</i>Newer'); ?>
	</div>

	<div class="navigation--next-page <?php if (empty($prev_page)) {echo 'centered-page-nav';}?>">
	<?php echo get_next_posts_link('Older<i class="demo-icon icon-right-open">&#xe800;</i>'); ?>
	</div>
</div>