<?php get_header(); ?>

<?php if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT): ?>
  <!-- Static dev content -->
  <div class="place-content-center flex items-center h-full max-w-screen-lg mx-auto">
    <!-- your Hello World content here -->
  </div>
<?php else: ?>
  <?php get_template_part('template-parts/site-wrapper'); ?>
<?php endif; ?>

<?php get_footer(); ?>
