<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<div class="slideshow-container">
    <div class="slides" id="slides">
        <div class="slide">
            <br>
            <div class="textHolder">
                <span id="txt1">
                <h2>Contexte</h2>
                <p>BL Optim est un solveur pour les problèmes de planification et d'ordonnancement sous contraintes. Il est utilisé dans divers domaines pour optimiser les tâches et minimiser les coûts.
                Son objectif est de générer des solutions optimales en respectant des contraintes spécifiques, comme les délais ou les capacités.</p>
                </span>
                <img src="assets\images\exemple_bl_optim.png" alt="Exemple de problème avec contraintes" style="height:50vh;">
                <p>Un des défis majeurs est la gestion des nombreux paramètres influençant la qualité des solutions obtenues. Adapter ces paramètres est crucial pour optimiser les performances du solveur.</p>
            </div>
        </div>
        <div class="slide">
            <br>
            <div class="textHolder">
                <h2>Exemple de solutions</h2>
                <p>BL Optim fournit des solutions adaptées aux contraintes spécifiques des problèmes soumis.
                Les paramètres utilisés influencent directement la qualité des résultats et nécessitent une configuration précise.
                Mon travail consistait à rendre ces paramètres adaptatifs afin d'améliorer la pertinence des solutions proposées.
                Chaque problème à résoudre peut avoir des exigences différentes, nécessitant une approche flexible et dynamique.
                En automatisant ce processus, on réduit les interventions humaines et on améliore la réactivité du solveur.
                Cette optimisation permet aux entreprises d'utiliser BL Optim de manière plus efficace et plus intuitive.</p>
                <img src="assets\images\bloptim.png" alt="Exemple de solution" style="height:50vh;">
                <br>
            </div>
        </div>
        <div class="slide">
            <br>
            <div class="textHolder">
                <h2>Ma contribution</h2>
                <p>J'étais chargé de la totalité de ce projet, de la préparation des données à l'intergration du model au solveur actuel.
                Tout d'abord, j'ai généré des nouvelles instances de problèmes à partir de cas réels, ceci permet d'enrichir l'ensemble d'entrainement.
                Puis, ces données ont été soumises à divers test, où le solveur tente de les résoudre avec differents paramètres. Ceci permet d'étudier la particuliarité de chaque problème, ainsi que l'influence des paramètres.
                J'ai ensuite entraîné un modèle en Python, après avoir essayé plusieurs modèles, la meilleurs était une combination entre des réseaux de neurones et des méthodes de clustering.
                Ce modèle a été conçu pour analyser les problèmes soumis et ajuster automatiquement les paramètres.
                Une fois entraîné, j'ai intégré ce modèle dans le code Java de BL Optim afin qu'il puisse être utilisé en production.
                Cette intégration a permis d'améliorer la flexibilité et l'efficacité du solveur sans intervention manuelle.</p>
                <img src="assets\images\bl-internship-steps.png" alt="étapes suivis" style="height:50vh;">
            </div>
        </div>
        <div class="slide">
            <br>
            <div class="textHolder">
                <h2>Résultats</h2>
                <p>Grâce à cette approche, le solveur a amélioré ses performances de manière significative.
                Après l'intégration du modèle, BL Optim produit des solutions optimales dans 86% des cas.
                Dans les 14% restants, les résultats obtenus restent très proches de ceux générés précédemment.
                Nous avons comparé l'ancien et le nouveau solveur sur un cas réel, en analysant l'optimisation des tournées de techniciens.
                Les techniciens doivent accomplir leurs tâches sans dépasser un temps de travail de 40 heures par semaine.
                Avec l'ancien solveur, la moyenne des heures supplémentaires par semaine était de 2h24.
                Grâce au nouveau modèle, cette moyenne est descendue à 1h56, soit une réduction notable.
                En comparaison, la meilleure solution trouvée, obtenue par une recherche quasi-exhaustive coûteuse, permettrait d'atteindre 1h44 minutes de travail supplémentaires.</p>
                <br>
                <canvas id="chartResultats" style="max-height:50vh; max-width: 70vw;"></canvas>
                <br>
            </div>
        </div>
    </div>
    <div class="controls">
        <button class="button" id="stopButton" onclick="stopSpeech()">🔊</button>
        <button class="button" onclick="prevSlide()">&#8592;</button>
        <button class="button" onclick="nextSlide()">&#8594;</button>
    </div>
</div>