<?php $headers = array("Home", "Get To Know Me", "Experience", "Contact"); ?>
<nav id="desktop-nav" style="position: fixed; top: 0; width: 100%; z-index: 1000; background-color: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); height: 10vh; ">
      <!--div class="logo">Youness Chetouan</div-->
    <div>
    <ul class="nav-links">
        <?php
            foreach ($headers as $x) {
                $y = str_replace(" ", "", $x);
                echo "<li><a href='?page=$y'>$x</a></li>";
            }
        ?>
    </ul>
    </div>
</nav>
<nav id="hamburger-nav">
    <div class="logo">Youness Chetouan</div>
    <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu-links">
            <?php
                foreach ($headers as $x) {
                    $y = str_replace(" ", "", $x);
                    echo "<li><a href='?page=$y' onclick='toggleMenu()'>$x</a></li>";
                }
            ?>
        </div>
    </div>
</nav>