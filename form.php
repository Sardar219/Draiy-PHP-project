<?php
require __DIR__ . '/inc/function.inc.php';
require __DIR__ . '/inc/dbcon.inc.php';
$title=$_POST['title'] ?? null;
$date=$_POST['date'] ?? null;
$message=nl2br($_POST['message'] ?? null);
$image_name=$_FILES['image_name']["name"] ?? null;
var_dump($_FILES);
if(!empty($_FILES) && !empty($_FILES["image_name"])){
  if($_FILES["image_name"]["error"] === 0 && $_FILES["image_name"]["size"] !== 0){
    move_uploaded_file($_FILES['image_name']['tmp_name'],__DIR__."/images/".time().".jpg");
  }
}
var_dump($image_name);
if(!empty($_POST)){
  $stem=$pdo->prepare('INSERT INTO `entires` (`id`, `title`, `message`, `date`, `image_name`) VALUES (NULL, :title, :message, :date,:image_name );');
  $stem->bindValue("title",$title);
  $stem->bindValue("message",$message);
  $stem->bindValue("date",$date);
  $stem->bindValue("image_name",$image_name);
  if(!empty($title) && !empty($date) && !empty($message) && !empty($image_name)){
    $stem->execute();
  }
}
?>
<?php include __DIR__ . '/inc/header.inc.php'; ?>
    <main>
      <div class="container">
        <h1 class="main-header">New Entry</h1>
        <form action="form.php" method="POST" enctype="multipart/form-data">
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
