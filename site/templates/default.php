<?php snippet('head') ?>

  <div class="splash"></div>
  <?php snippet('header') ?>
  <?php snippet('navigation') ?>

  <main>
    <?php if($page->text() != ''): ?>
      <div class="intro bg-blue u-sm-padd-double">
        <div class="l-container">
          <div class="h1 u-ta-center u-padd-top-double u-padd-btm-double u-push-btm-none fit">
            <?php echo $page->text()->kirbytext() ?>
          </div>
        </div>
      </div>
    <?php endif ?>
    
    <?php foreach($page->images() as $image): ?>
      <img src="<?php echo $image->url() ?>" alt="Death">
    <?php endforeach ?>
  </main>
  
<?php snippet('footer') ?>