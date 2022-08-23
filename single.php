<?php
get_header();
?>



<main class="container">

    <?php if (have_posts()) : ?>
        <div id="loop">
            <?php while (have_posts()) : the_post(); ?>
                <article class="my-4 py-2">
                    <div class="d-flex align-items-center justify-content-between">

                        <h1><?php the_title(); ?></h1>
                        <p>Publié le <?php the_time('d/m/Y'); ?><?php if (!is_page()) : ?> dans <?php the_category(', '); ?><?php endif; ?></p>

                    </div>
                    <?php if (is_singular()) : ?>
                        <?php the_content(); ?>
                    <?php else : ?>
                        <?php the_excerpt(); ?>
                        <a href=" <?php the_permalink(); ?>">Lire la suite</a>
                    <?php endif; ?>
                </article>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</main>


<?php
get_footer();
?>