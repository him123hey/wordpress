<?php get_header() ?>
    <div class="container">
        <div class="row  bg-light">
            <div class="col-12">
            <?php if (have_posts()): ?>
                    <?php while (have_posts()): ?>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                            <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <?php echo "not found" ?>
                                        <?php endif; ?>
                            </div>
                            <div class="col-8">
                        <?php the_post(); ?>
                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        Write by: <?php the_author(); ?>
                        <br>
                        Date: <?php the_date(); ?>
                        <?php
                            $caters = get_the_category();
                            $output = "";
                            if ($caters) {
                                foreach ($caters as $cater) {
                                    $output = '<a href="' . get_category_link($cater_term_id) . '">' . $cater->cat_name . '</a>';
                                    }
                                }
                            echo $output;
                        ?>
                            <div class="main">
                                <?php the_excerpt() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
                <?php echo "Post not found"; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
    <?php get_footer() ?>