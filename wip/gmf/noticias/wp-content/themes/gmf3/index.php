<?php get_header(); ?>
<div id="container">
	<div id="primaryContent">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if (is_search()) { echo '<h3>Resultados da pesquisa:'; } ?>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
		<div class="border"></div>
		<?php endwhile; else: ?>
		<p><?php _e('Nenhum post encontrado.'); ?></p>
		<?php endif; ?>
	</div>
	<div id="pagina" align="center"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	</div>
	<!--<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
	<p>Procurar:&nbsp;&nbsp;&nbsp;<input type="text" name="s" id="s" value="Procurar..."  onblur="if	(this.value=='') this.value='Procurar...';" onfocus="if(this.value=='Procurar...') this.value='';"/></p>
	</form>-->
</div> 
<?php get_footer(); ?>
</div></div></div>
 
