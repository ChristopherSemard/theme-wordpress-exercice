<?php
get_header();
?>

<!-- Page Header Start -->
<div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
    <h1 class="display-3 text-uppercase mb-3"><?php the_title(); ?></h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="/">Home</a></h6>
        <h6 class="m-0 px-3">/</h6>
        <h6 class="text-uppercase m-0"><?php the_title(); ?></h6>
    </div>
</div>
<!-- Page Header Start -->



<main class="container">
    <?php if (have_posts()) : ?>

        <div id="loop">
            <?php while (have_posts()) : the_post(); ?>
                <article class="my-4 py-2">
                    <?php if (is_singular()) : ?>
                        <?php the_content(); ?>
                    <?php else : ?>
                        <?php the_excerpt(); ?>
                        <a href=" <?php the_permalink(); ?>">Lire la suite</a>
                    <?php endif; ?>
                </article>
            <?php endwhile; ?>
        </div>
        <div id="pagination">
            <?php echo paginate_links(); ?>
        </div>
    <?php else : ?>
        <p>Aucun résultat</p>
    <?php endif; ?>

</main>


<?php
get_footer();
?>