<?php $about = $pages->find('/about') ?>
<?php snippet('head') ?>
<div class="splash"></div>
<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="about">
  <div class="intro bg-white u-sm-padd-double u-sm-padd-btm-none border-red">
    <div class="l-container">
      <div class="h1 u-ta-center u-padd-top-double u-padd-btm-none u-sm-padd-btm-none u-push-none fit">
        <?php echo $about->introtext()->kirbytext() ?>
      </div>
    </div>
  </div>

  <div id="contact" class="bg-white u-padd-btm u-padd-top u-lg-padd-top-double border-side-red">
    <div class="l-container">
      <div class="g-row u-ta-center u-md-ta-lft u-sm-padd-btm u-sm-padd-top-double">
        <div class="g g-md-3">
          <?php echo $about->firstcol()->kirbytext() ?>
        </div>
        <div class="g g-md-4">
          <?php echo $about->secondcol()->kirbytext() ?>
        </div>
        <div class="g g-md-5">
          <?php echo $about->thirdcol()->kirbytext() ?>
        </div>
      </div>
    </div>
  </div>

  <?php foreach($about->images() as $image): ?>
    <img src="<?php echo $image->url() ?>" alt="<?php echo $image->alt()->html() ?>">
  <?php endforeach ?>

  <div class="bg-black text-white">
    <div class="l-container u-padd-top-double">
      <div class="g-row u-sm-padd-top-double max-width">
        <div class="g g-sm-10">
          <section class="l-section">
            <h4>English</h4>
            <div class="indent">
              <?php echo $about->descriptioneng()->kirbytext() ?>
            </div>
          </section>
          <section class="l-section">
            <h4>Deutsch</h4>
            <div class="indent">
              <?php echo $about->descriptiondeu()->kirbytext() ?>
            </div>
          </section>
          <section class="l-section">
            <h4>Italiano</h4>
            <div class="indent">
              <?php echo $about->descriptionita()->kirbytext() ?>
            </div>
          </section>
        </div>
      </div>
      <div class="g-row max-width u-padd-top-double u-padd-btm-double">
        <div class="g g-sm-6 u-sm-padd-top u-sm-padd-rgt">
          <section class="l-section list">
            <?php echo $about->soloshows()->kirbytext() ?>
          </section>
          <section class="l-section list">
            <?php echo $about->awards()->kirbytext() ?>
          </section>
          <section class="l-section list">
            <?php echo $about->collections()->kirbytext() ?>
          </section>
        </div>
        <div class="g g-sm-6 u-sm-padd-top u-sm-padd-lft">
          <section class="l-section list">
            <?php echo $about->groupexhibits()->kirbytext() ?>
          </section>
          <section class="l-section list">
            <?php echo $about->credits()->kirbytext() ?>
          </section>
          <section class="l-section list">
            <?php echo $about->legal()->kirbytext() ?>
          </section>
        </div>
      </div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>