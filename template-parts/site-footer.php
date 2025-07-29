<footer class="bg-gray-100 border-t py-6 mt-8">
  <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row justify-between items-center gap-4">

      <!-- Site Info -->
      <div class="text-sm text-gray-500">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
      </div>

      <!-- Footer Menu -->
      <nav>
        <?php
          wp_nav_menu([
            'theme_location' => 'footer',
            'container'      => false,
            'menu_class'     => 'flex flex-wrap gap-x-6 text-sm text-gray-600',
            'fallback_cb'    => false,
          ]);
        ?>
      </nav>

    </div>
  </div>
</footer>
