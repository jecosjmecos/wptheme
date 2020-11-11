<?php
get_header();
?>

<section>
	<div class="container">
		<div class="row">
			<h1 class="col-lg-12">
				<?php the_title() ?>
			</h1>
		</div>
	</div>
</section>

<?php my_breadcrumbs() ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
				if ( have_posts() ):
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
				else:
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
