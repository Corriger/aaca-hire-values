<?php
/**
* Template Name: All Fields Layout
*/
?>

<?php if ( have_posts() ) : // check if the Page or Post Type has data to show ?>
    <section class="template">
        <?php while ( have_posts() ) : the_post(); // loop through the data ?>

            <?php if( have_rows('aaca') ): // check if the flexible content field name Front Layout has rows of data ?>
                <?php while ( have_rows('aaca') ) : the_row(); // loop through the rows of data ?>

                    <?php if( get_row_layout() == 'home' ): // check if the row layout has information ?>

                        <?php get_template_part('home'); ?>

                    <?php elseif( get_row_layout() == 'about' ): // check if the row layout has information ?>

                        <?php get_template_part('about'); ?>

                    <?php elseif( get_row_layout() == 'contact' ): // check if the row layout has information ?>

                        <?php get_template_part('contact'); ?>

                    <?php endif; ?>
                <?php endwhile; ?>

            <?php else : // no layouts found ?>
              <p>Not here.</p>
                <?php get_template_part('templates/components/empty-state'); ?>
            <?php endif; ?>

        <?php endwhile; ?>
    </section>
<?php endif; ?>
