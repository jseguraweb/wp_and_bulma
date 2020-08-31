<?php if(have_posts()): while(have_posts()): the_post(); ?>
 <div class="box archive-container">
    <div class="title">
        <h1><?php the_title(); ?></h1>
    </div>

    <?php if(has_post_thumbnail()): ?>

        <img src="<?php the_post_thumbnail_url('img-small'); ?>" alt="<?php the_title(); ?>">

    <?php endif; ?>

    <div class="content">
        <?php the_excerpt(); ?>
    </div>

    <a href="<?php the_permalink(); ?>"><button class="button">Read more</button></a>
</div>
<?php endwhile; else: endif; ?>