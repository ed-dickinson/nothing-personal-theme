<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			do_action( 'storefront_single_post_before' );

			get_template_part( 'content', 'single' );

			do_action( 'storefront_single_post_after' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<script>

// remove hyperlinks
document.querySelectorAll('a[data-anchor-comp-id*="comp"]').forEach(link => {

	link.removeAttribute("href")
	link.style.cursor = 'default'

	link.addEventListener('click', ()=> {
		event.preventDefault()
	})
})
</script>

<?php
do_action( 'storefront_sidebar' );
get_footer();
