<?php
/**
 * The template for displaying search results pages
 *
*/

get_header(); ?>


		<?php if ( have_posts() ) : ?>

			
			<h1 class="page-title"><?php echo 'Search Results for:<span>' . esc_html( get_search_query() ) . '</span>'; ?></h1>
			
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				echo 'RESULTS: '. the_title();

			// End the loop.
			endwhile;

		// If no content, include the "No posts found" template.
		else :
			echo 'No Results';

		endif;
		?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
