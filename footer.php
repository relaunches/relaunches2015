<footer>

	<address>
	Stories and Bookmarks about Interaction&nbsp;&amp;&nbsp;Design
	<br>
	From the desk of <a href="http://imin.de">Jan Hendrik Weiss</a>
	<br>
	</address>

	<ul>
		<li><a href="https://twitter.com/relaunches"><i class="demo-icon icon-twitter">&#xe807;</i></a></li>
	    <li><a href="https://www.pinterest.com/spyline/"><i class="demo-icon icon-pinterest">&#xe804;</i></a></li>
	    <li><a href="<?php bloginfo('atom_url'); ?>"><i class="demo-icon icon-rss">&#xe806;</i></a></li>  
	</ul>

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1932405-18', 'relaunch.es');
  ga('send', 'pageview');

</script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
$("#menu, #close").click(function(){
    $("#nav-container").toggleClass("active");
    $(".icon-menu-1").toggleClass("toggled");
    $(".icon-cancel").toggleClass("toggled");
    $(".icon-search").toggleClass("toggled");
    $("body").toggleClass("noscroll");
});
$("#filter, #filter--active").click(function(){
    $("#filter-container").toggleClass("active");
    $(".icon-menu-1").toggleClass("toggled");
    $(".icon-search").toggleClass("toggled");
    $(".icon-search--active").toggleClass("toggled");
    $("body").toggleClass("noscroll");
});
</script>

</body>
</html>