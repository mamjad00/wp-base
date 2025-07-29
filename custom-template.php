<?php
/**
 * Template Name: Custom Template
 */

get_header(); ?>

<main id="primary" class="site-main flex-grow">
  <section class="custom-content">
    <h1><?php the_title(); ?></h1>
    <div class="page-content">


      <?php
        $testimonials = new WP_Query([
          'post_type' => 'testimonial',
          'posts_per_page' => -1,
        ]);

        if ($testimonials->have_posts()) :
          while ($testimonials->have_posts()) : $testimonials->the_post();
            get_template_part('template-parts/acf-cpt/testimonials');
          endwhile;
          wp_reset_postdata();
        endif;
        ?>


    </div>
  </section>
</main>

<?php get_footer(); ?>
