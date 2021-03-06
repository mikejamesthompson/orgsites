<?php get_header(); ?>

    <div id="content">

        <article class="error">

            <header class="error">

                <hgroup>
                    <h2> Page Not Found <em>404</em></h2>
                    <h3>Ceci n'est pas un cheval</h3>
                </hgroup>

                <div class="images">
                    <ul class="slider">
                        <li><img src="<?php bloginfo('template_url'); ?>/img/404.png" alt="Ceci n'est pas un cheval"></li>
                    </ul>
                </div>

                <div class="description">
                    <p>Sorry. Please try our <a href="/">home page</a> or <a href="mailto:hello@mysociety.org">get in touch</a> and we'll help you find what you're looking for.</p>
                </div>
            </header>
        </article>

    </div>

<?php get_footer(); ?>
