<div id="menu"><i class="demo-icon icon-menu-1">&#xe803;</i></div>
<div id="close"><i class="demo-icon icon-cancel">&#xe802;</i></div>

<div id="filter"><i class="demo-icon icon-search">&#xe805;</i></div>
<div id="filter--active"><i class="demo-icon icon-search--active">&#xe805;</i></div>

<div id="nav-container">
<nav>
<ul>
<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
<?php wp_list_categories('title_li='); ?> 
<!--<li><a href="">Information</a></li>-->
</ul>
</nav>
</div>

<div id="filter-container">

<?php $args = array(
	'smallest'                  => 1.65, 
	'largest'                   => 1.65,
	'unit'                      => 'em', 
	'number'                    => 45,  
	'format'                    => 'list',
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

<div class="tag-list">
<?php wp_tag_cloud( $args ); ?>
</div>

</div>