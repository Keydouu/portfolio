<div style="height: 10vh;"></div>
<section> 
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Meee')" id="defaultOpen">Who I am</button>
            <?php 
                $tabs_ids = ['Diplomes', 'Experience', 'Technologies', 'Inspirations', 'Loisirs'];
                $tabs_titles = ['Diplomes', 'Experience', 'Technologies', 'Inspirations Professionnelles', 'Loisirs'];
                for ($x = 0; $x < sizeof($tabs_ids); $x++) {
                    $id = $tabs_ids[$x];
                    $title = $tabs_titles[$x];
                    echo "<button class=\"tablinks\" onclick=\"openCity(event, '$id')\">$title</button>";
                }
            ?>
        </div>
        <div id="Meee" class="tabcontent">
            <h3>Youness</h3>
            <p>The very best.</p>
        </div>

        <div id="Diplomes" class="tabcontent">
            <h3>Master</h3>
            <p>Another one.</p> 
        </div>

        <div id="Experience" class="tabcontent">
            <h3>Stage</h3>
            <p>& stage & stage.</p>
        </div>
        <div id="Technologies" class="tabcontent about-containers">
            <div class="details-container" style="width: 48%;">
                <h2 class="experience-sub-title">Frontend Development</h2>
                <div class="article-container" id="frontend-experience">
                    <!-- JavaScript will populate this section -->
                </div>
            </div>

            <!-- Backend Development -->
            <div class="details-container" style="width: 48%;">
                <h2 class="experience-sub-title">Backend Development</h2>
                <div class="article-container" id="backend-experience">
                    <!-- JavaScript will populate this section -->
                </div>
            </div>
        </div>
        <div id="Inspirations" class="tabcontent">
            <h3>I have a dream.</h3>
            <p>to become rich.</p>
        </div>
        <div id="Loisirs" class="tabcontent">
            <h3>Yahooo</h3>
            <p>Basketball chess bocchi</p>
        </div>
    <!--h1 class="title">Introduction</h1>
    <div class="section-container">
        <div class="section__pic-container">
            <img src="assets/images/map.png" alt="internships_map" class="about-pic" style="height: 100%;">
        </div>
        <div class="about-details-container">

            <div class="about-containers">
                <div class="details-container">
                    <!--img src="./assets/experience.png" alt="Experience icon" class="icon"aaaaaa>
                    <h3>Stages</h3>
                    <table class="invisible-table">
                        <tr>
                            <td>2024</td>
                            <td>| 6 mois</td>
                            <td style="text-align: left;">| Berger-Levrault</td>
                        </tr>
                        <tr>
                            <td>2023</td>
                            <td>| 6 mois</td>
                            <td>| Eurafrique Information</td>
                        </tr>
                        <tr>
                            <td>2022</td>
                            <td>| 6 mois</td>
                            <td style="text-align: left;">| NTT DATA</td>
                        </tr>
                    </table>
                </div>

                <div class="details-container">
                    <!--img src="./assets/education.png" alt="Education icon" class="icon">
                    <h3>Education</h3>
                    <table class="invisible-table">
                        <tr>
                            <td>2024</td>
                            <td>Master</td>
                            <td>Intelligence Artificielle</td>
                            <td style="text-align: left;">Université d'Artois</td>
                        </tr>
                        <tr>
                            <td>2023</td>
                            <td>Master</td>
                            <td style="text-align: left;">Development</td>
                            <td style="text-align: left;">ENSA</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="text-container">
                <p>
                    Hello, I'm <b>Youness</b>, a passionate and dedicated Web Developer.
                </p>
                <p>Développeur passionné avec une expérience en création d'applications web et desktop.
                    <br>Spécialisé en backend avec Java et Spring Boot, je conçois des solutions performantes, sécurisées et évolutives.
                </p>
            </div>
        </div>
    </div-->
</section>