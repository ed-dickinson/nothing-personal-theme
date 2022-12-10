<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<!--<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">-->

			<!--<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>-->

		<!--</div>--><!-- .col-full -->
	<!--</footer>--><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
let body_element = document.querySelector('body')

// only act on homepage
if (body_element.classList.contains('home')) {
	let window_height = window.innerHeight
	let first_para = document.querySelector('h2+p')

	// if first paragrph visible
	if (first_para.offsetTop < window_height) {
		first_para.style.paddingTop = `${window_height - first_para.offsetTop}px`
	}
}

// issue front cover hover code
if (body_element.classList.contains('term-issues')) {
	const issues = [
		'/wp-content/uploads/2022/11/issue-3-front-416x543.png',
		'/wp-content/uploads/2022/11/issue-2-front-416x543.jpg',
		'/wp-content/uploads/2022/11/issue-1-front-416x543.jpg',
		'/wp-content/uploads/2022/11/issue-pilot-cover-416x543.jpg'
	]
	let i = 0
	document.querySelectorAll('ul.products li a img').forEach(link => {
		// let img = document.createElement('img')
		let html = "<img class='front-cover' src='" + issues[i]+ "' alt='Front cover of issue.'/>"
		link.insertAdjacentHTML('afterend', html)
		i = i + 1
	})
}

</script>

<script>

</script>
</body>
</html>
