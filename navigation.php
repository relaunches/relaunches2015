<div id="menu"><i class="demo-icon icon-menu-1">&#xe803;</i></div>
<div id="close"><i class="demo-icon icon-cancel">&#xe802;</i></div>

<div id="nav-container">
<nav>
<ul>
<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
<?php wp_list_categories('title_li='); ?> 
<!--<li><a href="">Search</a></li>-->
<!--<li><a href="">Information</a></li>-->
</ul>
</nav>
</div>