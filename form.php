<?php
require __DIR__ . '/inc/function.inc.php';
require __DIR__ . '/inc/dbcon.inc.php';
$title=$_POST['title'];
$date=$_POST['date'];
$message=$_POST['message'];
$image_name=$_POST['image_name'];
if(!empty($_POST)){
  $stem=$pdo->prepare('INSERT INTO `entires` (`id`, `title`, `message`, `date`, `image_name`) VALUES (NULL, :title, :message, :date,:image_name );');
  $stem->bindValue("title",$title);
  $stem->bindValue("message",$message);
  $stem->bindValue("date",$date);
  $stem->bindValue("image_name",$image_name);
  $stem->execute();
}
?>
<?php include __DIR__ . '/inc/header.inc.php'; ?>
    <main>
      <div class="container">
        <h1 class="main-header">New Entry</h1>
        <form action="form.php" method="post">
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
          <div class="form-group">
              <input type="file" name="image_name" id="image" class="image_name">
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
