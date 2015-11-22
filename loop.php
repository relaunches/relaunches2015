<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php $image = get_post_meta( get_the_ID(), 'image', true); ?>
<?php $imagemaxwidth = get_post_meta( get_the_ID(), 'image-max-width', true); ?>
<?php $vimeo = get_post_meta( get_the_ID(), 'vimeo', true); ?>

<article class="post" <?php $color = get_post_meta($post->ID, 'color', true); ?><?php if (!empty($color)) {echo 'style="background-color: '; echo $color; echo ';"';}?>>
<div class="post-body <?php $inverted = get_post_meta($post->ID, 'inverted', true); ?><?php if (!empty($inverted)) {echo 'inverted';}?> <?php if ( empty($vimeo) && empty($image) ) { echo 'no-image';}?>">


<?php if (!empty($image)) {
	echo '<div class="image-container">';
	echo '<img src="';
	echo $image;
	echo '" alt="" ';
	if (!empty($imagemaxwidth)) {
		echo 'style="max-width:';
		echo $imagemaxwidth;
		echo 'px;"';
	};
	echo ' />'; 
	echo '</div>';
}?>

<?php if (!empty($vimeo)) { ?>
<div class="teaservideo">
	<div class="video-container">
		<iframe src="http://player.vimeo.com/video/<?php $key="vimeo"; echo get_post_meta($post->ID, $key, true); ?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>
</div>
<?php } ?>

<div class="entry-body">

	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

	<div class="cat">
		<?php the_category(', '); ?>
	</div>

	<div class="description">
		<?php the_content('more'); ?>
	</div>

	<?php edit_post_link(__('Edit', ''), '', ''); ?>

</div>


</div> <!-- post-body end-->


</article> <!-- post end-->

<?php endwhile; else: ?>

<p>404</p>
<?php endif; ?>
