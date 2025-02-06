<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<div class="slideshow-container">
    <div class="slides" id="slides">
        <div class="slide">
            <h2>Contexte</h2>
            <p>BL Optim est un solveur pour les problèmes de planification et d'ordonnancement sous contraintes. Il est utilisé dans divers domaines pour optimiser les tâches et minimiser les coûts.</br>
            Son objectif est de générer des solutions optimales en respectant des contraintes spécifiques, comme les délais ou les capacités.</br>
            Les entreprises font face à des défis complexes nécessitant une planification efficace, et BL Optim offre une approche algorithmique avancée.</br>
            Ce solveur utilise des techniques d'optimisation avancées pour générer des résultats précis et adaptés aux besoins des utilisateurs.</br>
            Il peut être appliqué à divers secteurs, y compris la logistique, la production et les services.</br>
            Le but est d'améliorer l'efficacité opérationnelle en automatisant les décisions complexes.</br>
            Un des défis majeurs est la gestion des nombreux paramètres influençant la qualité des solutions obtenues.</p>
            <img src="assets\images\exemple_bl_optim.png" alt="Exemple de problème avec contraintes" style="height:50vh;">
            <p>Les problèmes ont de nombreux paramètres qui influencent fortement la qualité des solutions. Adapter ces paramètres est crucial pour optimiser les performances du solveur.</p>
        </div>
        <div class="slide">
            <h2>Exemple de solutions</h2>
            <p>BL Optim fournit des solutions adaptées aux contraintes spécifiques des problèmes soumis.</br>
            Les paramètres utilisés influencent directement la qualité des résultats et nécessitent une configuration précise.</br>
            Mon travail consistait à rendre ces paramètres adaptatifs afin d'améliorer la pertinence des solutions proposées.</br>
            Chaque problème à résoudre peut avoir des exigences différentes, nécessitant une approche flexible et dynamique.</br>
            Une adaptation efficace des paramètres permet d'obtenir des résultats plus proches de l'optimum attendu.</br>
            En automatisant ce processus, on réduit les interventions humaines et on améliore la réactivité du solveur.</br>
            Cette optimisation permet aux entreprises d'utiliser BL Optim de manière plus efficace et plus intuitive.</br>
            L'objectif final est de fournir une meilleure qualité de solutions en fonction de chaque situation spécifique.</p>
            <img src="assets\images\bloptim.png" alt="Exemple de problème avec contraintes" style="height:50vh;">
        </div>
        <div class="slide">
            <h2>Ma contribution</h2>
            <p>Mon travail a consisté à améliorer le solveur en intégrant un modèle capable d'adapter dynamiquement les paramètres.</br>
            Tout d'abord, j'ai généré un ensemble de données d'entraînement à partir de cas réels et simulés.</br>
            Puis, ces données ont été soumises à divers tests de qualité afin de garantir leur pertinence.</br>
            J'ai ensuite entraîné un modèle en Python, combinant des réseaux de neurones et des méthodes de clustering.</br>
            Ce modèle a été conçu pour analyser les problèmes soumis et ajuster automatiquement les paramètres.</br>
            Une fois entraîné, j'ai intégré ce modèle dans le code Java de BL Optim afin qu'il puisse être utilisé en production.</br>
            Cette intégration a permis d'améliorer la flexibilité et l'efficacité du solveur sans intervention manuelle.</br>
            Le modèle final utilisé est un mélange de réseau de neurones et de méthodes de clustering, permettant une meilleure gestion des solutions.</p>
        </div>
        <div class="slide">
            <h2>Résultats</h2>
            <p>Grâce à cette approche, le solveur a amélioré ses performances de manière significative.</br>
            Après l'intégration du modèle, BL Optim produit des solutions optimales dans 86% des cas.</br>
            Dans les 14% restants, les résultats obtenus restent très proches de ceux générés précédemment.</br>
            Nous avons comparé l'ancien et le nouveau solveur sur un cas réel, en analysant l'optimisation des tournées de techniciens.</br>
            Les techniciens doivent accomplir leurs tâches sans dépasser un temps de travail de 40 heures par semaine.</br>
            Avec l'ancien solveur, la moyenne des heures supplémentaires par semaine était de 2h24.</br>
            Grâce au nouveau modèle, cette moyenne est descendue à 1h56, soit une réduction notable.</br>
            En comparaison, la meilleure solution trouvée, obtenue par une recherche quasi-exhaustive coûteuse, permettrait d'atteindre 1h44 minutes de travail supplémentaires.</p>
            <canvas id="chartResultats" style="max-height:50vh; max-width: 40vw;"></canvas>
        </div>
    </div>
    <div class="controls">
        <button class="button" onclick="prevSlide()">&#8592;</button>
        <button class="button" onclick="nextSlide()">&#8594;</button>
    </div>
</div>