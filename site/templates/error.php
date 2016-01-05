<?php snippet('head') ?>

  <div class="splash"></div>

  <?php foreach($page->images() as $image): ?>
    <div class="page-error" style="background-image:url('<?php echo $image->url() ?>')"></div>
  <?php endforeach ?>

  <script type="text/javascript">
    $('body').keyup(function (e){
      window.location.href = '<?php echo $site->url() ?>';
    });
    $('body').on('click', function (e){
      window.location.href = '<?php echo $site->url() ?>';
    });
  </script>
  </body>
</html>