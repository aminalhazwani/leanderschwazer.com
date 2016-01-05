<?php snippet('head') ?>
  
  <div class="splash"></div>

  <header class="header header-secondary u-padd-top-quarter u-padd-btm-quarter" style="color: <?php echo $page->headercolor() ?>">
    <div class="l-container">
      <a class="project_home" href="/"><?php echo $site->title() ?></a>
      <?php 
        $title = preg_replace('#[ -]+#', '-', $page->title()->html());
        $title = strtolower($title);
      ?>
      <?php $_SERVER['HTTP_REFERER']; ?>
      <?php if($_SERVER['HTTP_REFERER'] == 'http://localhost:9000/' ): ?>
        <a class="project_close" href="<?php echo $site->url() ?>#<?php echo $title ?>">Close</a>
      <?php else: ?>
        <a class="project_close" href="<?php echo $site->url() ?>">Close</a>
      <?php endif ?>
      <p class="project_count u-push-btm-none"></p>
    </div>
  </header>

  <div class="royalSlider rsDefault slider" <?php if($page->bkcolor() != ''): ?>style="background-color: <?php echo $page->bkcolor() ?>"<?php endif ?>>
    <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <?php if($image->video() == '1'): ?>
        <figure class="project_figure" <?php if($image->slidebgcolor() != ''): ?>style="background-color: <?php echo $image->slidebgcolor() ?>"<?php endif ?>>
          <video id="project_video" class="project_image-enclosed" poster="<?php echo $image->url() ?>" onended="end()">
            <source src="<?php echo $page->url() ?>/<?php echo $image->name() ?>.mp4" type="video/mp4">
          </video>
          <button class="button" type="button" style="position: absolute; z-index: 1"></button>
        </figure>
      <?php else: ?>
        <?php if($image->cover() != '1'): ?>
          <?php if($image->measure() == 'enclosed'): ?>
            <figure class="project_figure" <?php if($image->slidebgcolor() != ''): ?>style="background-color: <?php echo $image->slidebgcolor() ?>"<?php endif ?>>
              <?php if($image->extension() == 'gif'): ?>
                <img class="project_image-enclosed" src="<?php echo $image->url() ?>">
              <?php else: ?>
                <img class="project_image-enclosed"
                      src="<?php echo thumb($image, array('width' => 1200), false) ?>" 
                      srcset="<?php echo thumb($image, array('width' => 600), false) ?> 600w,
                              <?php echo thumb($image, array('width' => 800), false) ?> 800w,
                              <?php echo thumb($image, array('width' => 1200), false) ?> 1200w,
                              <?php echo thumb($image, array('width' => 1600), false) ?> 1600w,
                              <?php echo thumb($image, array('width' => 2560), false) ?> 2560w"
                      sizes="100vw"
                >
              <?php endif ?>
              <?php if($image->overtext() != ''): ?>
                <figcaption class="project_caption" <?php if($image->overtextcolor() != ''): ?>style="color:<?php echo $image->overtextcolor() ?>"<?php endif ?>>
                  <?php echo $image->overtext()->kirbytext() ?>
                </figcaption>
              <?php endif ?>
            </figure>
          <?php endif ?>
          <?php if($image->measure() == 'full'): ?>
            <figure class="project_figure">
              <img class="project_image-full" src="../assets/images/1px.png" style="background-image:url('<?php echo $image->url() ?>')">
              <?php if($image->overtext() != ''): ?>
                <figcaption class="project_caption" style="color:<?php echo $image->overtextcolor() ?>">
                  <?php echo $image->overtext()->kirbytext() ?>
                </figcaption>
              <?php endif ?>
            </figure>
          <?php endif ?>
        <?php endif ?>
      <?php endif ?>
    <?php endforeach ?>
  </div>

  <?php echo js('assets/js/vendor/vendors.min.js') ?>
  <?php echo js('assets/js/project.min.js') ?>
  <?php $_SERVER['HTTP_REFERER']; ?>
    
      <script type="text/javascript">
        $( document ).ready(function() {
          var si = jQuery('.royalSlider').data('royalSlider');
          var prevSlide = (si.currSlideId === si.numSlides-1) ? si.currSlideId : undefined;
          si.ev.on('rsBeforeAnimStart', function(e) {
              console.log(prevSlide, si.currSlideId);
              if(prevSlide === si.currSlideId){
                <?php if($_SERVER['HTTP_REFERER'] == 'http://localhost:9000/' ): ?>
                  return window.location.href = 'http:<?php echo $site->url() ?>#<?php echo $title ?>';
                <?php else: ?>
                  return window.location.href = 'http:<?php echo $site->url() ?>';
                <?php endif ?>
              }
              prevSlide = si.currSlideId;
          });
        });
      </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-54435071-1', 'auto');
      ga('send', 'pageview');
    </script>
    
  </body>
</html>
