<section class="c-section c-section--stations">
  <h1 class="c-section__title"><?= $title ?></h1>
  <?
    pattern('section/index', [
      'search' => $stations
    ]);
  ?>
</section>
