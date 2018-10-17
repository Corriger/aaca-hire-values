<?php if(have_rows('row_basic')): ?>
    <?php while (have_rows('row_basic')): the_row(); ?>
      <section class="row-basic">
        <?php if (get_sub_field('image')): ?>
          <figure class="row-basic-image">
            <img src="<?php the_sub_field('image'); ?>" alt="">
          </figure>
        <?php endif;?>
        <?php if (get_sub_field('content')): ?>
          <article class="row-basic-content">
            <p><?php the_sub_field('content'); ?></p>
          </article>
    <?php endif;?>
    </section>
  <?php endwhile; ?>
  <?php endif;?>
