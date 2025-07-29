<?php
/**
 * Template part for displaying a single testimonial
 * Loaded using:
 * get_template_part('template-parts/content/content', 'testimonials');
 */

// ACF Fields
$client_name = get_field('client_name');
$client_role = get_field('client_role_or_company');
$client_photo = get_field('client_photo');
$testimonial_content = get_field('testimonial_content');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('testimonial'); ?>>
  <div class="testimonial-inner">

    <?php if (!empty($client_photo)): ?>
      <div class="testimonial-photo">
        <img
          src="<?php echo esc_url($client_photo['url']); ?>"
          alt="<?php echo esc_attr($client_photo['alt'] ?: $client_name); ?>"
          width="80" height="80" />
      </div>
    <?php endif; ?>

    <div class="testimonial-content">
      <?php if (!empty($testimonial_content)): ?>
        <blockquote class="testimonial-text">
          “<?php echo esc_html($testimonial_content); ?>”
        </blockquote>
      <?php endif; ?>

      <div class="testimonial-meta">
        <?php if (!empty($client_name)): ?>
          <p class="testimonial-name"><?php echo esc_html($client_name); ?></p>
        <?php endif; ?>

        <?php if (!empty($client_role)): ?>
          <p class="testimonial-role"><?php echo esc_html($client_role); ?></p>
        <?php endif; ?>
      </div>
    </div>

  </div>
</article>
