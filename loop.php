<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="post" <?php $color = get_post_meta($post->ID, 'color', true); ?><?php if (!empty($color)) {echo 'style="background: '; echo $color; echo ';"';}?>>

<div class="post-body <?php $font_black = get_post_meta($post->ID, 'font_black', true); ?><?php if (!empty($font_black)) {echo 'font-black';}?><?php $font_white = get_post_meta($post->ID, 'font_white', true); ?><?php if (!empty($font_white)) {echo 'font-white';}?>">


<div class="entry-body">

	<div class="container">

	<div class="datestamp"><b <?php if (!empty($color)) {echo 'style="background: '; echo $color; echo ';"';}?>><?php the_date(); ?></b></div>

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<div class="cat">
		<?php the_category(', '); ?>
		</div>

		<section class="entry">

			<div class="description">
				<?php the_content('more'); ?>
			</div>

		</section>

		<!--
		<section class="metadata">
		<?php the_tags('', ''); ?>
		</section>

		<div class="clear"></div>
		-->
		<?php edit_post_link(__('Edit', ''), '', ''); ?>

	</div>

</div>


</div> <!-- post-body end-->

</article> <!-- post end-->

<?php endwhile; else: ?>


<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
