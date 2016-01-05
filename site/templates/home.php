<?php snippet('head') ?>

	<div class="splash"></div>
	<?php snippet('navigation') ?>

	<main>
		<?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
      <?php 
        $title = preg_replace('#[ -]+#', '-', $project->title()->html());
        $title = strtolower($title);
      ?>
			<article id="<?php echo $title ?>">
				<div class="bg-white border-red u-ta-center u-padd-huge">
					<div class="l-container">
						<h2 class="h1 fit"><a class="project_title" href="<?php echo $project->url() ?>"><?php echo $project->titl()->kirbytext() ?></a></h2>
						<h5 class="u-push-btm-none u-fs-sm-small"><?php echo html($project->client()) ?></h5>
					</div>
				</div>
				<?php foreach($project->images() as $image): ?>
					<?php if($image->cover() == '1'): ?>
						<a href="<?php echo $project->url() ?>">
              <?php if($image->extension() == 'gif'): ?>
                <img class="lazyload" src="<?php echo $image->url() ?>">
              <?php else: ?>
                <img class="lazyload" 
                  src="<?php echo thumb($image, array('width' => 1500), false) ?>" 
                  srcset="<?php echo thumb($image, array('width' => 600), false) ?> 600w,
                          <?php echo thumb($image, array('width' => 800), false) ?> 800w,
                          <?php echo thumb($image, array('width' => 1200), false) ?> 1200w,
                          <?php echo thumb($image, array('width' => 1600), false) ?> 1600w,
                          <?php echo thumb($image, array('width' => 2560), false) ?> 2560w"
                  sizes="100vw"
                >
              <?php endif ?>
						</a>
					<?php endif ?>
				<?php endforeach ?>
			</article>
		<?php endforeach ?>
	</main>

<?php snippet('footer') ?>