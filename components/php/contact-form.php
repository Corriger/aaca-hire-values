<?php if(have_rows('contact_form')): ?>
  <ul class="form-select">
    <?php while(have_rows('contact_form')): the_row(); ?>
      <li>
        <strong><?php the_sub_field('form_name'); ?></strong><span>►</span>
        <?php if(get_sub_field('image')): ?>
          <img src="<?php the_sub_field('image'); ?>" alt="">
        <?php endif; ?>
      </li>
    <?php endwhile; ?>
    </ul>
    <strong class="back" style="display:none;">Go Back</strong>
    <?php while(have_rows('contact_form')): the_row(); ?>
      <?php if(get_sub_field('form')): ?>
        <!-- Class: 'referrals, volunteer, apply' -->
        <?php the_sub_field('form'); ?>
      <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
