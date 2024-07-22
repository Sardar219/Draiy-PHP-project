<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diary Project</title>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="fontawasome/css/all.css" />
  </head>
  <body>
    <nav>
      <a href="index.php" class="nav-brand">
        <span class="fab fa-42-group logo"></span>
        sardar
      </a>
      <a href="form.php" class="button">
        <span class="fa fa-add"></span>
        New Enter
      </a>
    </nav>
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
    <footer class="footer">
      <div class="container">
        <h3 class="footer_heading">PHP diary project</h3>
        <p class="footer_desc">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum
          veniam quos fugit laboriosam aperiam deserunt consectetur dicta quas,
          adipisci earum!
        </p>
      </div>
    </footer>
  </body>
</html>
