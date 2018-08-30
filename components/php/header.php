<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <body <?php body_class(); ?>>
    <head>
      <title><?php bloginfo('name'); ?></title>
      <?php wp_head(); ?>
    </head>
    <header class="main-header">
      <a href="<?php echo home_url(); ?>">
        <figure class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/media/logo.jpg" alt="aaca">
        </figure>
      </a>
      <strong>AACA</strong>
      <strong>HIRE VALUES Youth Program</strong>
      <nav>
        <?php wp_nav_menu(); ?>
        <button class="cta">Donate</span>
      </nav>
    </header>
