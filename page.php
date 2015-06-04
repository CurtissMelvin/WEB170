<?php get_header(); ?>

<?php get_sidebar('blog') ?>

<!-- START CONTENT -->
<div id="content" class="page">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>
		<?php the_content('<p class="serif">More &raquo;</p>'); ?>


		<?php wp_link_pages(); ?>
	</div>

	<?php endwhile; endif; ?>
	<p>page.php</p>  

</div>
<!-- END CONTENT -->

<?php get_footer(); ?>

<?php /*Final Theme 2014--page.php*/ ?>
