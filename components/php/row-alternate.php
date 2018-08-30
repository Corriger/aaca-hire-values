<?php if(have_rows('row_alternate')): ?>
    <?php while (have_rows('row_alternate')): the_row(); ?>
      <section class="row-alternate">
        <?php if (get_sub_field('image')): ?>
          <div class="row-alternate-image" style="border-bottom: 5px solid <?php the_sub_field('content_color'); ?>">
            <img src="<?php the_sub_field('image'); ?>" alt="">
          </div>
        <?php endif;?>
        <?php if (get_sub_field('content')): ?>
          <div class="row-alternate-content" style="background:<?php the_sub_field('content_color'); ?>">
            <p><?php the_sub_field('content'); ?></p>
            <a href="<?php the_sub_field('cta'); ?>" style="color:<?php the_sub_field('content_color'); ?>"><?php the_sub_field('cta_name');?></a>
          </div>
    <?php endif;?>
    </section>
  <?php endwhile; ?>
  <?php endif;?>
