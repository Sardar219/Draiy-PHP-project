<?php
require __DIR__ . '/inc/function.inc.php';
require __DIR__ . '/inc/dbcon.inc.php';
$stem=$pdo->prepare('SELECT * FROM `entires`');
$stem->execute();
$results=$stem->fetchAll();
?>
<?php include __DIR__ . '/inc/header.inc.php'; ?>
    <main>
      <div class="container">
        <h1 class="main-header">Entries</h1>
        <?php foreach ($results as $result):?>
        <div class="card">
          <div class="card_image-container">
            <img class="card_image" src="images/<?= e($result['image_name']) ?>" alt="" />
          </div>
          <div class="card_desc-container">
            <div class="card_desc-time"><?= e($result['date'])?></div>
            <h2 class="card_heading"><?= e($result['title']) ?></h2>
            <p class="card_paragraph"><?= nl2br(e($result['message'])) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
        <ul class="pagination">
          <li class="pagination_li">
            <a href="#" class="pagination-link">◀</a>
          </li>
          <li class="pagination_li">
            <a href="#" class="pagination-link pagination_link-active">1</a>
          </li>
          <li class="pagination_li">
            <a href="#" class="pagination-link">2</a>
          </li>
          <li class="pagination_li">
            <a href="#" class="pagination-link">3</a>
          </li>
          <li class="pagination_li">
            <a href="#" class="pagination-link">▶</a>
          </li>
        </ul>
      </div>
    </main>
<?php
require __DIR__ . '/inc/footer.inc.php';
?>