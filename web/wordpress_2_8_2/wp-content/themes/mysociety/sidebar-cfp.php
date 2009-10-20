<?php

# XXX
$is_idea = in_category(29);
$is_cee_cfp = ($_SERVER['SERVER_NAME'] == 'cee.mysociety.org' && substr($_SERVER['REQUEST_URI'], 0, 5) == '/cfp/');

if ($is_idea) {
    $add_link = '/call-for-proposals-2009/';
    $add_text = 'Add an idea&hellip;';
    $view_link = '/category/proposal-submissions-2009/';
} elseif ($is_cee_cfp) {
    $add_link = '/cfp/';
    $view_link = '/cfp/view/';
    $add_text = 'Submit a proposal';
}

?>

<div class="contentnarrow right">
    <p>
    <a class="linkbutton" href="<?=$add_link?>">
        <span class="left">&nbsp;</span>
        <span class="middle"><?=$add_text?></span>
        <span class="right">&nbsp;</span>
    </a>
    <br class="clear"/>
    </p>

    <h3>Ideas so far</h3>
    <!--Recent posts-->
    <ul>
<?php

if ($is_idea) {
    query_posts('category_name=proposal-submissions-2009&showposts=10');
} elseif ($is_cee_cfp) {
    query_posts('showposts=10');
}

while (have_posts()) : the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
<?php endwhile; ?>
    </ul>

    <a href="<?=$view_link?>">View all ideas &raquo;</a>

</div>

