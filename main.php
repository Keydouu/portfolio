<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'home';
  include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Youness Chetouan</title>
    <link rel="stylesheet" href="./style_main.css">
    <link rel="stylesheet" href="./mediaqueries.css">
</head>
<body>
    <?php
        $allowed_pages = array("Home", "GetToKnowMe", "Experience", "Contact");
        
        if (in_array($page, $allowed_pages)) {
            include "$page.php";
        } else {
            echo "Page not found!";
        }
    ?>
    <footer>
      <!--nav>
        <div class="nav-links-container">
          <ul class="nav-linka&&&zaas">
            <?php
            ?>
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav-->
      <p>Explore 🌍, Create ✨, Achieve 💻</p>
    </footer>
    <script src="data.js"></script>
    <script src="script.js"></script>
<!--a-->
</body>
</html>
