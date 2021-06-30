<?php
/**
 * Legacy template for compatibility with versions prior to 2.0.0
 *
 * @version     2.1.1
 */
?>

<?php if ($instance['before_posts']) : ?>
  <div class="upw-before">
    <?php echo wpautop($instance['before_posts']); ?>
  </div>
<?php endif; ?>

<?php if ($upw_query->have_posts()) : ?>

  <ul>

  <?php while ($upw_query->have_posts()) : $upw_query->the_post(); ?>

    <?php $current_post = ($post->ID == $current_post_id && is_single()) ? 'current-post-item' : ''; ?>

    <li class="<?php echo ($post->ID == $current_post_id && is_single())?'current-post-item':'' ?> list-course">

        <?php if (get_the_title() && $instance['show_title']) : ?>
          
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php the_title(); ?>
            </a>
         
        <?php endif; ?>
    </li>

  <?php endwhile; ?>

  </ul>

<?php else : ?>

  <p><?php echo wpautop($instance['custom_empty']); ?></p>

<?php endif; ?>

<?php if ($instance['after_posts']) : ?>
  <div class="upw-after">
    <?php echo wpautop($instance['after_posts']); ?>
  </div>
<?php endif; ?>
