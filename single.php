<?php get_header(); ?>

<section class="hero">
  <div class="hero-body">
    <div class="container is-fluid">
        <div class="notification">
            <div class="title">
                <h2><?php the_title(); ?></h2>
            </div>

            <?php if(has_post_thumbnail()): ?>

                <img src="<?php the_post_thumbnail_url('img-large'); ?>" alt="<?php the_title(); ?>">

            <?php endif; ?>

            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>