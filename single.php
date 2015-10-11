<?php get_header('single'); ?>

<?php include ('loop-single.php'); ?>

<div <?php if (!empty($color)) {echo 'style="background: '; echo $color; echo ';"';}?>>
    <?php previous_post('<div class="coming-up"><small>Continue reading</small> %</div>', '', 'yes'); ?>
</div>
 
</div><!-- #main --> 

<?php get_footer(''); ?>