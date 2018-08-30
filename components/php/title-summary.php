<div class="title-summary">
  <?php if (get_sub_field('title')): ?>
     <h1><?php the_sub_field('title');?></h1>
   <?php endif;?>
   <?php if (get_sub_field('summary')): ?>
      <p><?php the_sub_field('summary');?></p>
  <?php endif;?>
</div>
