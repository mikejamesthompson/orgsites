<?php 

$body_id = 'moretravel';
$mysoc_static_title = 'Travel time and house price maps';

include "interactive_map.php";
include "../../wp-blog-header.php";
header('HTTP/1.0 200 OK');
add_action('wp_head', 'add_swfobject_js');
include "../../wp-content/themes/mysociety/header.php";
?>

<div id="content"><article class="article">

<h1>Travel time and house price maps</h1>

<p>This page contains two larger, more detailed travel time and house price maps of
London. Read the <a href="./">main page</a> to learn more about these maps.</p>

<h2>BBC Television Centre</h2>

<p>This map is quite zoomed in, showing 20km round the BBC Television Centre at
W12 7RJ. Adjust the sliders to see areas within varying travel times to work
and with varying house prices.</p>

<?php interactive_map("w127rj-800-20km/config.xml", "maphouse2", 800, 893) ?>

<h2>Olympic Stadium Site</h2>

<p>This map shows more of London, 40 km round the Olympic Stadium Site in
Stratford at E15 2NQ. Adjust the sliders to see areas within varying travel
times to work and with varying house prices.</p>

<?php interactive_map("e152nq-800-40km/config.xml", "maphouse3", 800, 893) ?>

<p><a href="./">Main page explaining these maps</a></p>

</article></div>

<?php include "../../wp-content/themes/mysociety/footer.php"; ?>
