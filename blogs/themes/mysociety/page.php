<?php get_header(); ?>

    <div id="content">
        <article class="article">

            <header>
                <h2><?php the_title(); ?></h2>
                <!-- <p class="meta">Written by <a href="#">Author Name</a> on <time datetime="2012-06-01">1st June 2012</time></p> -->
            </header>
<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}

?>

        </article>
    </div>

<?php get_footer();
