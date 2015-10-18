<?php
/** Page Template Name: Information */

get_header(); ?>

<?php $args = array(
	'smallest'                  => 1, 
	'largest'                   => 1,
	'unit'                      => 'em', 
	'number'                    => 45,  
	'format'                    => 'flat',
	'separator'                 => ", ",
	'orderby'                   => 'name', 
	'order'                     => 'ASC',
	'exclude'                   => null, 
	'include'                   => null, 
	'topic_count_text_callback' => default_topic_count_text,
	'link'                      => 'view', 
	'taxonomy'                  => 'post_tag', 
	'echo'                      => true,
	'child_of'                  => null, // see Note!
); ?>

<div id="content">

<!-- inline styles for the lazy ones -->
<article class="post" style="background: #fff; font-size: 1.2em; line-height: 1.5em;">
<div class="post-body">

	<div class="entry-body">

	

	<h2>What is this all about?</h2>

	<div class="description">
	<br>
	Relaunches is personal collection of Stories and Bookmarks about modern day challenges in User Experience Design &amp; User Interface Design. If you are into UX/UI Design like me, you should probably find something interesting here.
	</div>
	
	<div class="description">
	The collected content is dealing with topics like 
	<?php wp_tag_cloud( $args ); ?>.
	</div>

	<div class="description">
	Relaunches is made with WordPress using a custom theme built from scratch. The current theme is also available on <a href="https://github.com/relaunches/relaunches2015">GitHub</a>.	
	</div>

	<div class="description">
	Right now there are 

	<?php
	$numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish'");
	if (0 < $numposts) $numposts = number_format($numposts); 
	?>

	<?php echo $numposts . ' '; ?>

	Stories &amp; Bookmarks online. <a href="<?php echo get_site_url(); ?>">Have fun!</a>
	<br>
	<br>
	And that is that.
	</div>

	</div>

</div>
</article>

</div>


</div><!-- #main -->

<?php get_footer(); ?>