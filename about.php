<?php
/*
Template Name: About
*/
?>


<?php get_header(); ?>

<!-- START SIDEBAR -->

<?php get_sidebar('about'); ?>

<!-- END SIDEBAR -->

<!-- START CONTENT -->
<?php if (have_posts()) : ?>
<div id="content" class="content">
    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <p class="postmetadata">
            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in
            <span class="cat"><?php the_category(', ') ?></span>
            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
         	<span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
        </p>
		<?php the_excerpt('More'); ?>
    <!-- <?php // the_content('Read More'); ?> -->

    <?php endwhile; ?>


		<?php /*?><nav class="main">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
			</nav>
			<?php */?>
</div>
<?php endif; ?>
<!-- END CONTENT -->

<?php get_footer(); ?>
