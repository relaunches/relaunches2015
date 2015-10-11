<?php
/** Page Template Name: Filter */

get_header(); ?>

<?php $args = array(
	'smallest'                  => 1.65, 
	'largest'                   => 1.65,
	'unit'                      => 'em', 
	'number'                    => 45,  
	'format'                    => 'flat',
	'separator'                 => "\n",
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

<div class="tag-list">
<?php wp_tag_cloud( $args ); ?>
</div>

</div>


</div><!-- #main -->

<?php get_footer(); ?>