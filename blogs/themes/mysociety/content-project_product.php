<article id="post-<? the_ID() ?>" <? post_class() ?>>
  <header class="entry-header">
      <h1 class="entry-title"><? the_title() ?></h1>
  </header>
    
  <div class="entry-content">
    <? if(get_field('intro')): ?><p class="entry-intro"><? the_field('intro') ?></p><? endif; ?>
    
    <?
      $images = get_field('gallery');
      if($images):
    ?>
      <ul id="featured-gallery">
      <? foreach($images as $image): ?>
        <li>
          <? $sized = vt_resize( $image['image'], '', 385, 219, true ); ?>
          <a href="<?=wp_get_attachment_url($image['image'])?>"><img src="<?= $sized['url']; ?>" width="<?= $sized['width']; ?>" height="<?= $sized['height']; ?>" alt="<?= $image['alt'] ?>" /></a>
        </li>
      <? endforeach; ?>
      </ul>
    <? endif; ?>



    <?
      //set up resources stuff
      $resources = get_field('resources');
      if($resources) {
        $i = 0;
        foreach($resources as $resource) {
          //modify the type strings
          switch ($resource['type']) {
            case 'wikidocs':
                $resources[$i]['mod_type'] = 'Wiki + Docs';
                break;
            case 'codeblog':
                $resources[$i]['mod_type'] = 'Code blog';
                break;
            case 'github':
                $resources[$i]['mod_type'] = 'GitHub';
                break;
            case 'twitter':
                $twitter_user = $resources[$i]['url'];
                break;
          }
          $i++;
        }
      }

      //set colour
      get_field('colour') ? $colour = get_field('colour') : $colour = '';
    ?>

    <? if(get_field('commercial-options')): ?>
      <section class="project_product-section">
        <h2 class="build white_icon">Commercial Options</h2>
        <div class="project_product-section-inner">
          <?= the_field('commercial-options') ?>
        </div>
      </section>
    <? endif; ?>

    <? if(get_field('build-your-own')) : ?>
      <section class="project_product-section <?= $colour; ?>_back">
        <h2>Build your own</h2>
        <div class="project_product-section-inner">
          <?= the_field('build-your-own') ?>

          <? if($resources): ?>
            <ul class="resource-list">
            <? foreach($resources as $resource): ?>
              <? if($resource['type'] !== 'twitter'): ?>
              <li>
                <a class="<?= $resource['type']; ?> <?= $colour; ?>_icon" href="<?= $resource['url']; ?>"><?= ($resource['title'] ? $resource['title'] : $resource['mod_type']); ?></a>
              </li>
              <? endif; ?>
            <? endforeach; ?>
            </ul>
          <? endif; ?>
        </div>
      </section>
    <? endif; ?>


    <? if($twitter_user): ?>
      <section class="twitter_box">
        <h2 class="twitter <?= $colour; ?>_icon">Twitter</h2>
        <a class="<?= $colour; ?>_button" href="http://twitter.com/<?= $twitter_user; ?>">@<?= $twitter_user; ?></a>
        <ul class="tweets">
          <li>
            <span>13 Mar</span>
            <small><a href="http://ow.ly/9CvOe">http://ow.ly/9CvOe</a> "Ministers expect councils to make savings on road maintenance" - one way is to put problem-reporting online!</small>
          </li>
          <li>
            <span>13 Mar</span>
            <small>FixMyStreet is available for council websites: <a href="http://ow.ly/9CvUF">http://ow.ly/9CvUF</a> - slashes costs and makes reporting easy for users.</small>
          </li>
          <li>
            <span class="tw_date">13 Mar</span>
            <small>We're helping make the Philippines "a smoother, less perforated place": <a href="http://www.mysociety.org/2012/03/06/international-potholing/">http://www.mysociety.org/2012/03/06/international-potholing/</a></small>
          </li>
          <li>
            <span class="tw_date">13 Mar</span>
            <small>One of our most-viewed reports this week - strong smell coming from <a href="http://twitter.com/">#Hammersmith</a> park: <a href="http://ow.ly/9pblZ">http://ow.ly/9pblZ</a></small>
          </li>
        </ul>
      </section>
    <? endif; ?>
    <!-- news -->
    <!-- pagination? -->
  </div>
</article>