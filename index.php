<?php
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
    <div class="row mx-0 align-items-center">
        <div class="col-lg-6 px-md-5 text-center text-lg-left">
            <h1 class="display-2 text-uppercase mb-3">Best Digital Marketing Agency</h1>
            <p class="text-dark mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                lorem dolore sed stet et est justo dolore.</p>
            <a href="" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn More</a>
        </div>
    </div>
</div>
<!-- Header End -->


<main class="container">
    <h1 class="mb-4 text-center">ARTICLES</h1>
    <?php if (have_posts()) : ?>

        <div id="loop" class="row justify-content-between">
            <?php while (have_posts()) : the_post(); ?>
                <article class=" service-item rounded p-4 mb-4 d-flex flex-column">
                    <h3><?php the_title(); ?></h3>
                    <p>Publié le <?php the_time('d/m/Y'); ?><?php if (!is_page()) : ?> dans <?php the_category(', '); ?><?php endif; ?></p>

                    <?php if (is_singular()) : ?>
                        <p class="h-100"><?= get_the_content(); ?></p>
                    <?php else : ?>
                        <p class="h-100"><?= get_the_excerpt(); ?></p>
                        <a class="btn btn-primary" href=" <?php the_permalink(); ?>">Lire la suite</a>
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