<div style="height: 10vh;"></div>
<div>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Meee')" id="defaultOpen">Who I am</button>
        <?php
            $tabs_ids = ['Diplomes', 'Experience', 'Technologies', 'Aspirations', 'Loisirs'];
            $tabs_titles = ['Diplomes', 'Experience', 'Technologies', 'Aspirations Professionnelles', 'Loisirs'];
            for ($x = 0; $x < sizeof($tabs_ids); $x++) {
                $id = $tabs_ids[$x];
                $title = $tabs_titles[$x];
                echo "<button class=\"tablinks\" onclick=\"openCity(event, '$id')\">$title</button>";
            }
        ?>
    </div>
    <div id="Meee" class="tabcontent">
        <h3>Youness Chetouan</h3>
        <p>Développeur Full Stack passionné, spécialisé en <strong>Java, Spring Boot</strong> et <strong>Angular</strong>, avec une solide expérience en développement de solutions performantes, sécurisées et évolutives.</p>
        <p>Expert aux problèmes d'<strong>optimisation sous contraintes</strong>, conception d’architectures robustes et développement backend.</p>
        <p>Curieux, adaptable et toujours prêt à relever de nouveaux défis technologiques.</p>
    </div>

    <div id="Diplomes" class="tabcontent">
        <h3>Diplômes & Compétences Acquises</h3>

        <h4>🎓 Master en Intelligence Artificielle - Université d’Artois (2024)</h4>
        <ul>
            <li>Approfondissement des concepts fondamentaux de l’intelligence artificielle.</li>
            <li>Expérience en machine learning : classification, détection d’objets dans les images.</li>
            <li>Spécialisation en programmation par contraintes pour la résolution de problèmes complexes.</li>
            <li>Optimisation et planification appliquées aux systèmes industriels et logistiques.</li>
            <li>Stage de recherche sur l’ajustement automatique des méta-heuristiques pour la planification.</li>
        </ul>

        <h4>🎓 Diplôme d’Ingénieur - ENSA Tétouan (2023)</h4>
        <ul>
            <li>Formation en conception et développement logiciel et web.</li>
            <li>Maîtrise des architectures logicielles et des bases de données relationnelles et NoSQL.</li>
            <li>Spécialisation en développement Full Stack avec <strong>Java / Spring Boot</strong> et <strong>Angular</strong>.</li>
            <li>Expérience avec d’autres technologies : <strong>PHP / Laravel, Python, C++</strong>.</li>
            <li>Bonne maîtrise des pratiques en ingénierie logicielle : modélisation UML, gestion Agile, tests unitaires.</li>
        </ul>

        <p>🎖 <strong>Certifications :</strong> <em>DevOps AWS</em> & <em>Analyste en IA (IBM)</em>.</p>
    </div>

    <div id="Experience" class="tabcontent">
        <h3>Expérience Professionnelle</h3>

        <h4>🔹 Stage @ Berger Levrault (2024 - 6 mois)</h4>
        <p>Optimisation d’un solveur de planification en utilisant des techniques d’IA et des heuristiques avancées.</p>

        <h4>🔹 Stage @ Eurafrique Information (2023 - 6 mois)</h4>
        <p>Développement d’une plateforme de <strong>signature électronique sécurisée</strong> conforme aux normes européenne de cryptographie et de confidentialité.</p>

        <h4>🔹 Stage @ NTT DATA (2022 - 6 mois)</h4>
        <p>Conception et implémentation d’une plateforme de gestion des candidats pour le recrutement, avec intégration de workflows automatisés.</p>

        <p>📌 Plus de détails disponibles dans l’onglet <a href='?page=Experience'><strong style="color:teal;">Expériences</strong></a>.</p>
    </div>

    <div id="Technologies" class="tabcontent">
        <h3>Technologies & Outils</h3>
        <table class="hidden-border-table">
            <tr>
                <td>🌌<strong>Langages :</strong></td>
                <td>Java</td>
                <td>Kotlin</td>
                <td>Python</td>
                <td>C/C++</td>
                <td>TypeScript</td>
                <td>JavaScript</td>
            </tr>
            <tr>
                <td>✨<strong>Bases de données :</strong></td>
                <td>MySQL</td>
                <td>PostgreSQL</td>
                <td>MongoDB</td>
            </tr>
            <tr>
                <td>💫<strong>Frameworks :</strong></td>
                <td>Spring Boot</td>
                <td>Angular</td>
                <td>Hibernate</td>
                <td>Kafka</td>
            </tr>
            <tr>
                <td>🌠<strong>DevOps :</strong></td>
                <td>Docker</td>
                <td>AWS</td>
                <td>Git</td>
                <td>CI/CD</td>
            </tr>
            <tr>
                <td>🌟<strong>Modélisation :</strong></td>
                <td>UML</td>
                <td>BPMN</td>
                <td>Merise</td>
            </tr>
        </table>
        </br>
    </div>

    <div id="Aspirations" class="tabcontent">
        <h3>Aspirations Professionnelles</h3>
        <ul>
            <li>Évoluer en tant que développeur Full Stack avec une expertise approfondie en backend.</li>
            <li>Maîtriser les architectures distribuées et les microservices.</li>
            <li>Contribuer à des projets innovants alliant performance, scalabilité et sécurité.</li>
            <li>À terme, viser un rôle d’<strong>architecte logiciel</strong> et encadrer des équipes de développement.</li>
        </ul>
    </div>

    <div id="Loisirs" class="tabcontent">
        <h3>Loisirs</h3>
        <ul>
            <li>🏀 <strong>Basketball :</strong> Dynamisme, esprit d’équipe et compétition.</li>
            <li>♟ <strong>Échecs :</strong> Stratégie, réflexion analytique et patience.</li>
        </ul>
    </div>


    <!--div class="about-details-container">

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
            </div-->
</div>