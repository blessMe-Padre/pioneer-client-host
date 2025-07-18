<?php /* Template Name: Наша команда */ ?>
<?php
/*
Template Name: Страница категории
*/
?>
<?php
get_header();
?>

<?php
$arg_category = array(
	'orderby'      => 'name',
	'order'        => 'ASC',
	'hide_empty'   => 1,
	'exclude'      => '',
	'include'      => '',
	'taxonomy'     => 'category',
);
$categories = get_categories( $arg_category );
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

            <?php
                if( $categories ){
                    foreach( $categories as $cat ){

                    $arg_posts =  array(
                        'orderby'      => 'name',
                        'order'        => 'ASC',
                        'posts_per_page' => 100,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'cat' => $cat->cat_ID,
                    );
                    $query = new WP_Query($arg_posts);

                    ?>
                    <?php if ($query->have_posts() ) ?>
                      
                        <div class = "ourTeam">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                                    <div class="oneInTeam">
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                        <div class = "imgPostContainer"><img src = "<?= get_the_post_thumbnail_url() ?>" alt = "<?php the_title() ?>"></div>
                                    </div>

                    <?php endwhile; wp_reset_postdata()?>
                      </div>
                    <?php
                        }
                    }
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
