<?php snippet('head') ?>

  <div class="splash"></div>
  <?php snippet('header') ?>
  <?php snippet('navigation') ?>

  <main>
    <div class="intro u-sm-padd-double border-red bg-white text-black">
      <div class="l-container">
        <div class="h1 u-ta-center u-padd-top-double u-padd-btm-double u-push-btm-none fit">
          <?php echo $page->title()->html() ?>
        </div>
      </div>
    </div>

    <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <img class="lazyload" 
          src="<?php echo thumb($image, array('width' => 1500), false) ?>" 
          srcset="<?php echo thumb($image, array('width' => 600), false) ?> 600w,
                  <?php echo thumb($image, array('width' => 800), false) ?> 800w,
                  <?php echo thumb($image, array('width' => 1200), false) ?> 1200w,
                  <?php echo thumb($image, array('width' => 1600), false) ?> 1600w,
                  <?php echo thumb($image, array('width' => 2560), false) ?> 2560w"
          sizes="100vw"
        >
    <?php endforeach ?>

    <div class="bg-white text-black">
      <div class="l-container u-padd-top-double u-padd-btm-double">
        <div class="g-row u-sm-padd-top-double u-padd-btm-double max-width">
          <div class="g g-sm-10">
            <section class="l-section">
              <?php echo $page->text()->kirbytext() ?>
            </section>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>