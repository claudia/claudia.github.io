<?php get_header(); ?>
<div id="container">
 <div id="primaryContent">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  <?php the_content(); ?>
 
   <?php endwhile; ?>
  <?php endif; ?>

 </div><div id="border"></div></div>
 
<?php get_footer(); ?>
</div></div></div>
