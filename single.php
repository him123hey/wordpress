<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-light">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): ?>
                        <?php the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        Write by: <?php the_author(); ?>
                        <br>
                        Date: <?php the_date(); ?>
                        <div class="main">
                            <p class="text-light"><?php the_content() ?></p>
                        </div>
                    <?php endwhile; ?>
            <?php else: ?>
                <?php echo "Post not found"; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer() ?>