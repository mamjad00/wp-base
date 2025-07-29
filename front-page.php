<?php
get_header();
?>

<main class="flex-grow container mx-auto px-4 py-8">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="mb-8">
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No content found.</p>
  <?php endif; ?>
</main>

<?php

get_footer();
