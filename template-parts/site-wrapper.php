<main class="flex-grow container mx-auto px-4 py-8">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="mb-8">
        <h2 class="text-2xl font-bold mb-2">
          <?php the_title(); ?>
        </h2>
        <div class="prose"><?php the_content(); ?></div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No content found.</p>
  <?php endif; ?>
</main>
