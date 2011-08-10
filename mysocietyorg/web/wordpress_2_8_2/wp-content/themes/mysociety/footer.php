
<div id="divFooter">
<?
    if ($_SERVER['SERVER_NAME'] != 'cee.mysociety.org') {
        print file_get_contents(TEMPLATEPATH . '/footer.html');
    }
?>

<p>
mySociety is a project of <a href="http://www.ukcod.org.uk/">UK Citizens Online Democracy</a> (UKCOD).
UKCOD is a registered charity in England and Wales, no. 1076346.
Its company number is 03277032, and mySociety Ltd's is 05798215.
</p>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

</div>
</div>
</div>

<?php

wp_footer();

if ($_SERVER['SERVER_NAME'] == 'cee.mysociety.org') {
    $piwik_id = 11;
} else {
    $piwik_id = 5;
}

?>
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.mysociety.org/" : "http://piwik.mysociety.org/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php",  <?=$piwik_id ?>);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://piwik.mysociety.org/piwik.php?idsite=<?=$piwik_id ?>" style="border:0" alt=""/></p></noscript>
<!-- End Piwik Tag -->

</body>
</html>
