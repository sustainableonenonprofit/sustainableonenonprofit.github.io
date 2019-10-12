<!DOCTYPE html>
<html>
  <head>
    <title>Sustainable One Header</title>
    <meta charset = "UTF-8" />
    <meta name="description" content="Sustainable One is">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="header_styles_reg.css">
    <link href="https://fonts.googleapis.com/css?family=Assistant|Merriweather&display=swap" rel="stylesheet">
    <script src="header_reg_script.js"></script>
  <body>
      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
          <a href="about.php">About</a>
          <a href="learn.php">Learn</a>
          <a href="store.php">Store</a>
          <a href="blog.php">Blog</a>
          <a href="contact.php">Contact</a>
        </div>
      </div>

      <header>
          <a href="index.php"><img src="assets/logo_alpha.png" alt="logo"></a>
            <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="learn.php">Learn</a></li>
              <li><a href="store.php">Store</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
            <p><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></p>
      </header>
</body>
</html>
