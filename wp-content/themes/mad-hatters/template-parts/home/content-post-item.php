<div class="home-posts__list-item">
	<?php the_post_thumbnail(); ?>
	<div class="home-posts__list-item-wrapper">
		<a 
			href="<?php the_permalink(); ?>"
			class="home-posts__list-item-link"
		><?php the_title(); ?></a>
		<div class="home-posts__list-item-text"><?php the_excerpt(); ?></div>
	</div>
</div>
