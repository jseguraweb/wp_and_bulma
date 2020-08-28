<?php /*
Template Name: general-template
*/ ?>

<?php get_header(); ?>

<div class="content-area">
    <section class="hero is-fullheight">
        <div class="hero-body frontpage-wrapper">
            <div class="container">
                <h1 class="title">
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="container">
                <p class="content">
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>