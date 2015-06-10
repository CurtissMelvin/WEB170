	<aside id="about-sidebar" class="asideleft">

		<?php if (is_active_sidebar ('about')): ?>

			<?php dynamic_sidebar('about'); ?>

		<?php else : ?>

	<h3>DESIGN</h3>
	<br />
	<p> We are a premier remodeling and construction company specializing in all phases of remodeling and construction in the greater Seattle area including:</p><br />
	<ul>
	    <li>Bathrooms and Kitchens</li>
	    <li>Additions and Full Home Remodels</li>
	    <li>Small Scale Updates and Renovations</li>
	    <li>Garages and Earthquake Retrofitting</li>
	    <li>Condo Remodels</li>
	    <li>Energy Efficient Upgrades</li><br />
	</ul>
	<p>We strive to create thoughtful, carefully crafted, and handsome projects using the highest quality and environmentally responsible building products and techniques.</p>

	<p>We strive to ensure all of our customers' goals and needs are fully realized, and that open, upfront and honest communication takes place throughout the entire remodeling and construction process.</p>


	<!-- Begin Quote -->
	<?php if (get_post_meta($post->ID, 'Quote', true)) : // check to see if there is a quote|?>
	|<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>
	<?php endif; ?>
	<!-- End Quote -->
	
	<?php endif; ?>
	</aside>
