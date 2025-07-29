<header class="bg-white shadow-md">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between">
    <div class="site-logo text-xl font-bold">
      <?php
        if (has_custom_logo()) {
          echo get_custom_logo(); // Already includes <a> tag
        } else {
          // Only wrap with <a> if there's no logo
          echo '<a href="' . esc_url(home_url('/')) . '" class="block">';
          bloginfo('name');
          echo '</a>';
        }
      ?>
    </div>


    <div class="bg-red-500 text-white p-4">
      <h1>Tailwind Test</h1>
    </div>

    <nav class="hidden md:block">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'flex space-x-6 text-sm font-medium',
          'fallback_cb'    => false,
        ]);
      ?>
    </nav>

    <!-- Mobile menu toggle -->
    <button class="md:hidden text-gray-600 focus:outline-none" id="mobile-menu-toggle">
      ☰
    </button>
  </div>

  <!-- Mobile Menu -->
  <nav class="md:hidden hidden px-4 pb-4" id="mobile-menu" style="border: 2 solid red">
    <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'flex flex-col space-y-2 text-base font-medium',
        'fallback_cb'    => false,
      ]);
    ?>
  </nav>
</header>

<script>
  document.getElementById('mobile-menu-toggle')?.addEventListener('click', function () {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
  });
</script>
