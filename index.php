<?php
require __DIR__ . '/inc/function.inc.php';
require __DIR__ . '/inc/dbcon.inc.php';

date_default_timezone_set("Asia/Kabul");

$prePage=4;
$page=(int)($_GET['page'] ?? 1);
if($page<1) $page=1;
$offset=($page-1)*$prePage;


$stemcount=$pdo->prepare('SELECT COUNT(*) AS `count` FROM `entires`');
$stemcount->execute();
$count=$stemcount->fetch(PDO::FETCH_ASSOC)['count'];
$numpage=ceil($count/$prePage);

$stem=$pdo->prepare('SELECT * FROM `entires` ORDER BY `date` DESC , `id` DESC LIMIT :prepage OFFSET :offset');
$stem->bindValue("prepage",$prePage,PDO::PARAM_INT);
$stem->bindValue("offset",$offset,PDO::PARAM_INT);
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
            <img class="card_image" src="images/<?= $result['image_name'] ?>" alt="" />
          </div>
          <div class="card_desc-container">
            <?php 
              $dateExplode=explode("-",$result['date']);
              var_dump(date("Y-m-d"));
            ?>
            <div class="card_desc-time"><?= e($result['date'])?></div>
            <h2 class="card_heading"><?= e($result['title']) ?></h2>
            <p class="card_paragraph"><?= nl2br(e($result['message'])) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
        <?php if($numpage > 1): ?>
        <ul class="pagination">
          <?php if($page>1): ?>
          <li class="pagination_li">
            <a href="/?page=<?= $page-1 ?>" class="pagination-link">◀</a>
          </li>
          <?php endif; ?>
          <?php for($i = 1; $i <= $numpage; $i++):?>
            <li class="pagination_li">
              <a href="/?page=<?= e($i)?>" class="pagination-link <?php if($page==$i):?>pagination_link-active<?php endif ?>"><?= e($i)?></a>
            </li>
          <?php endfor ?>
          <?php if($page<$numpage):?>
          <li class="pagination_li">
            <a href="/?page=<?= $page+1 ?>" class="pagination-link">▶</a>
          </li>
          <?php endif; ?>
        </ul>
        <?php endif; ?>
      </div>
    </main>
<?php
$start=microtime(true);
var_dump(time());
var_dump(microtime(true));
$end=microtime(true);
var_dump($end-$start);
date_default_timezone_set("Asia/Kabul");
var_dump(date("Y-m-d H:i:s a"));
require __DIR__ . '/inc/footer.inc.php';
?>