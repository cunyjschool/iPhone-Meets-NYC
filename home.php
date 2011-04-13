<?php get_header(); ?>

<!-- Begin top thumbnails -->
<div class="home-thumbs">
<?php $home_query = new WP_Query("cat=&showposts=6"); $i = 0; ?>
<ul class="thumbs">
	<?php while ($home_query->have_posts()) : $home_query->the_post();
	    $do_not_duplicate = $post->ID; $i++; ?>
	    <li class="post-<?php the_ID(); ?> thumb-big">
		<?php get_the_image( array( 'custom_key' => array( 'thumbnail' ), 'default_size' => 'thumbnail', 'width' => '160', 'height' => '160' ) ); ?>
		</li>
    <?php endwhile; wp_reset_query(); $i = 0; ?>
</ul>
</div>

<div id="branding">
	<div class="brand-wrap">
	<h2><a href="<?php bloginfo('home'); ?>/" title="Home"><?php bloginfo('name'); ?></a></h2>
	<div class="description"><?php bloginfo('description'); ?></div> 
	<?php fullscreen_theme_nav(); ?>
	<div class="go-left"><a href="#"><img src="<?php bloginfo("template_directory"); ?>/images/back.gif" class="go-left" alt="back" /></a></div>
<div class="go-right"><a href="#"><img src="<?php bloginfo("template_directory"); ?>/images/forward.gif" class="go-right" alt="forward" /></a></div>
</div>
</div>

<!-- Begin middle thumbnails -->
<div class="home-thumbs middle-thumbs">
<?php $home_query = new WP_Query("cat=&showposts=6&offset=6"); $i = 0; ?>
<ul class="thumbs">
	<?php while ($home_query->have_posts()) : $home_query->the_post();
	    $do_not_duplicate = $post->ID; $i++; ?>
	    <li class="post-<?php the_ID(); ?> thumb-big"><?php get_the_image( array( 'custom_key' => array( 'thumbnail' ), 'default_size' => 'thumbnail', 'width' => '160', 'height' => '160' ) ); ?></li>
    <?php endwhile; wp_reset_query(); $i = 0; ?>
</ul>
</div>

<!-- Begin bottom thumbnails -->
<div class="home-thumbs bottom-thumbs">
<?php $home_query_bottom = new WP_Query("cat=&showposts=6&offset=12"); $b = 0; ?>
<ul class="thumbs">
	<?php while ($home_query_bottom->have_posts()) : $home_query_bottom->the_post();
	    $do_not_duplicate = $post->ID; $b++; ?>
	
	    <li class="post-<?php the_ID(); ?> thumb"><?php get_the_image( array( 'custom_key' => array( 'thumbnail' ), 'default_size' => 'thumbnail', 'width' => '160', 'height' => '160' ) ); ?></li>
    <?php endwhile; wp_reset_query(); $b = 0; ?>
</ul>
</div>

<!-- Begin very-bottom thumbnails -->
<div class="home-thumbs very-bottom-thumbs">
<?php $home_query_bottom = new WP_Query("cat=&showposts=6&offset=18"); $b = 0; ?>
<ul class="thumbs">
	<?php while ($home_query_bottom->have_posts()) : $home_query_bottom->the_post();
	    $do_not_duplicate = $post->ID; $b++; ?>
	
	    <li class="post-<?php the_ID(); ?> thumb"><?php get_the_image( array( 'custom_key' => array( 'thumbnail' ), 'default_size' => 'thumbnail', 'width' => '160', 'height' => '160' ) ); ?></li>
    <?php endwhile; wp_reset_query(); $b = 0; ?>
</ul>
</div>

</div> <!--end container-->
<?php wp_footer(); ?>
</body>
</html>