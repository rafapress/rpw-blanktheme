<?php get_header(); ?>

	<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();       
	  			the_content(); // displays whatever you wrote in the wordpress editor
	  		endwhile;
		else :
	?>
		Nenhum conteúdo encontrado para a página.
	<?php
		endif;
	?>

<?php get_footer(); ?>