<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'Home';
  include "nav.php";
  if (is_dir($page)) {
    $files = scandir($page);

    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $ext = pathinfo($file, PATHINFO_EXTENSION);

            // Categorize files based on extension
            if ($ext === 'css') {
                $css_files[] = "$page/$file";
            } elseif ($ext === 'php' || $ext === 'html') {
                $html_php_files[] = "$page/$file";
            } elseif ($ext === 'js') {
                $js_files[] = "$page/$file";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Youness Chetouan</title>
    <link rel="stylesheet" href="./style_main.css">
    <link rel="stylesheet" href="./mediaqueries.css">
    <?php if (!empty($css_files)): ?>
        <?php foreach ($css_files as $css): ?>
            <link rel="stylesheet" href="<?= htmlspecialchars($css) ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body style="background-image: url('assets/images/steins-gate-2.png');  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;">
    <?php if (!empty($html_php_files)): ?>
        <?php foreach ($html_php_files as $file): ?>
            <?php include $file; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if (!empty($js_files)): ?>
        <?php foreach ($js_files as $js): ?>
            <script src="<?= htmlspecialchars($js) ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    <!--footer>
      <!--nav>aaa
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
      </nav>
      <p>Explore 🌍, Create ✨, Achieve 💻</p>
    </footer-->
    <script src="script.js"></script>
<!--a-->
</body>
</html>
