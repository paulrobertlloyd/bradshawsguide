<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'title' => $title
  ]);

  if(count($results)) {
    pattern('common/section/results', [
      'title' => $results->pagination()->items().' pages found',
      'results' => $results
    ]);

    pattern('common/pagination', [
      'pagination' => $results->pagination()
    ]);
  } else {
    pattern('common/section/results', [
      'title' => 'No matches found'
    ]);
  }
?>
</section>

<? snippet('foot') ?>
