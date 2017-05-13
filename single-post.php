<?php 
get_header();
the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-content">
		<?php the_content(); ?>
		</div>
<?php 
	get_sidebar(); 
	get_footer(); 
?>