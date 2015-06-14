<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php $image = get_post_meta($post->ID, 'image', true); ?>
<?php $imagemaxwidth = get_post_meta($post->ID, 'image-max-width', true); ?>

<article class="post" <?php $color = get_post_meta($post->ID, 'color', true); ?><?php if (!empty($color)) {echo 'style="background: '; echo $color; echo ';"';}?>>
<div class="post-body <?php $font_black = get_post_meta($post->ID, 'font_black', true); ?><?php if (!empty($font_black)) {echo 'font-black';}?><?php $font_white = get_post_meta($post->ID, 'font_white', true); ?><?php if (!empty($font_white)) {echo 'font-white';}?><?php if (empty($image)) { echo 'no-image';}?>">


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
