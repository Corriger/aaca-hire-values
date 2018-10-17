<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <body <?php body_class(); ?>>
    <head>
      <title><?php bloginfo('name'); ?></title>
      <?php get_template_part('head'); ?>
      <?php wp_head(); ?>
    </head>
    <style>
      html{
        margin-top: 0!important;
      }
    </style>
    <header class="main-header">
      <a href="<?php echo home_url(); ?>">
        <figure class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/media/logo.jpg" alt="aaca">
        </figure>
      </a>
      <strong>AACA</strong>
      <strong>HIRE VALUES Youth Program</strong>
      <div class="hmbr">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav>
        <?php wp_nav_menu(); ?>
        <button class="cta">Donate</span>
      </nav>
    </header>
