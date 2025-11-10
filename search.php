<?php
/**
 * The template for displaying search results pages
 *
 * @author  RadiusTheme
 * @since   1.0.0
 * @version 1.0.0
 * @package RadiusTheme\ClassifiedLite
 */

use RadiusTheme\ClassifiedLite\Helper;
use RadiusTheme\ClassifiedLite\Options;

get_header();
?>

	<main id="primary" class="site-search content-area">
		<div class="container">
			<div class="row">
				<?php
				if ( 'left-sidebar' == Options::$layout ) {
					get_sidebar();
				}
				?>
				<div class="<?php Helper::the_layout_class(); ?>">
					<div class="main-content">
						<?php if ( have_posts() ) : ?>
							<?php
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content' );
							endwhile;
							?>
						<?php else : ?>
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
						<?php endif; ?>
					</div>
					<?php get_template_part( 'template-parts/pagination' ); ?>
				</div>
				<?php
				if ( 'right-sidebar' == Options::$layout ) {
					get_sidebar();
				}
				?>
			</div>
		</div>
	</main>
<?php get_footer(); ?>