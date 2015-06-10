 <aside id="home-sidebar" class="asideleft">
 
 <?php if (is_active_sidebar ('home')): ?>
 
<?php dynamic_sidebar('home'); ?>

<?php else : ?>
<h2>Location</h2>
	<p>2121 8th Ave<br />
	Seattle, WA 98121</p>
	<p>(206) 555-1234</p>

<h2>Hours</h2>
<ul>
<li>09:00 AM - 6:00 PM Monday</li>
<li>09:00 AM - 6:00 PM Tuesday</li>
<li>09:00 AM - 6:00 PM Wednesday</li>
<li>09:00 AM - 6:00 PM Thursday</li>
<li>09:00 AM - 6:00 PM Fridayday</li>
<li>09:00 AM - 6:00 PM Saturday</li>
<li>10:00 AM - 4:00 PM Sunday</li>
</ul>
<?php endif; ?>
</aside>
