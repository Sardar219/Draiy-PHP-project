<?php
require __DIR__ . '/inc/function.inc.php';
require __DIR__ . '/inc/dbcon.inc.php';
?>
<?php include __DIR__ . '/inc/header.inc.php'; ?>
    <main>
      <div class="container">
        <h1 class="main-header">Entries</h1>
        <div class="card">
          <div class="card_image-container">
            <img class="card_image" src="images/b1.jpg" alt="" />
          </div>
          <div class="card_desc-container">
            <div class="card_desc-time">Week 1</div>
            <h2 class="card_heading">PHP is amazing</h2>
            <p class="card_paragraph">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam,
              optio recusandae reprehenderit, eaque similique commodi, aperiam
              asperiores culpa odit.
            </p>
          </div>
        </div>
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