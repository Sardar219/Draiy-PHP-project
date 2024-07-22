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
        <h1 class="main-header">New Entry</h1>
        <form action="form.html" method="post">
          <div class="form-group">
            <label for="title" class="form-group-label">Title:</label>
            <input
              type="text"
              id="title"
              name="title"
              class="form-group-input"
            />
          </div>
          <div class="form-group">
            <label for="date" class="form-group-label">Date:</label>
            <input type="date" id="date" name="date" class="form-group-input" />
          </div>
          <div class="form-group">
            <label for="message" class="form-group-label">Message:</label>
            <textarea
              name="message"
              id="message"
              class="form-group-input"
              rows="6"
            ></textarea>
          </div>
          <div class="form-submit">
            <button type="submit" class="btn">
              <span class="fab fa-telegram button_icon"></span>save
            </button>
          </div>
        </form>
      </div>
    </main>
<?php
require __DIR__ . '/inc/footer.inc.php';
?>
