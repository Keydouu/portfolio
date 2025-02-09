<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<div class="slideshow-container">
    <div class="slides" id="slides">
        <div class="slide">
            <br>
            <div class="textHolder">
                <h2>Contexte</h2>
                <p>Le projet vise à développer une plateforme numérique dédiée à la gestion efficace des processus de recrutement. Il permet aux entreprises de centraliser et d'automatiser plusieurs tâches liées à l'embauche de nouveaux talents, évitant ainsi l'utilisation d'outils non adaptés comme les feuilles Excel.</p>
                <p><strong>Les objectifs principaux du projet sont :</strong></p>
                <ul>
                    <li><strong>Gestion des candidats</strong> : Enregistrement, mise à jour et suivi des informations des candidats.</li>
                    <li><strong>Accès aux données</strong> : Consultation rapide et sécurisée des informations des candidats.</li>
                    <li><strong>Tri et filtrage</strong> : Mise en place de filtres avancés pour classer et rechercher efficacement les profils.</li>
                    <li><strong>Organisation et planification des entretiens</strong> : Gestion des entretiens via un calendrier interactif avec rappels automatiques.</li>
                    <li><strong>Notation des candidats</strong> : Évaluation des performances des candidats avec un système de scoring basé sur divers aspects de l'entretien.</li>
                    <li><strong>Suivi complet du processus de recrutement</strong> : Visualisation de l’évolution de chaque candidat à travers les différentes étapes.</li>
                    <li><strong>Communication interne automatisée</strong> : Sans passer par des e-mails manuels.</li>
                    <li><strong>Amélioration de l'organisation</strong> : Une solution bien structurée et performante, évitant l'utilisation d'Excel pour gérer le recrutement.</li>
                </ul>
            </div>
        </div>
        <div class="slide">
            <br>
            <div class="textHolder">
                <h2>Réalisation</h2>
                <h3><strong>Technologies utilisées :</strong></h3>
                <ul>
                    <li><strong>Backend</strong> : Développement en Java Spring Boot pour la gestion des données et des opérations métier.</li>
                    <li><strong>Frontend</strong> : Application construite avec Angular 12 pour une expérience utilisateur dynamique et interactive.</li>
                    <li><strong>Base de données</strong> : MySQL pour le stockage et la gestion des informations.</li>
                    <li><strong>Documentation API</strong> : Utilisation de Swagger pour documenter les endpoints et faciliter l’intégration.</li>
                    <li><strong>Versionnement</strong> : Gestion du code avec Git pour assurer la collaboration et le suivi des évolutions du projet.</li>
                </ul>
                
                <h3><strong>Équipe et contribution :</strong></h3>
                <ul>
                    <li>Une équipe de cinq personnes composée de trois développeurs et deux testeurs.</li>
                    <li>Mon role était le dévelopement full-stack, mais la majorité des tâches réalisées étaient du côté Angular.</li>
                </ul>
            </div>
        </div>
        <div class="slide">
            <br>
            <div class="textHolder">
                <h2>Résultats</h2>
                <video width="1152" height="720" controls>
                    <source src="assets\videos\ntt_demo.mp4" type="video/mp4">
                    Erreur : le navigateur ne supporte pas la video. 
                </video>
            </div>
        </div>
    </div>
    <div class="controls">
        <button class="button" id="ttsButton" onclick="toggleSpeech()">🔊</button>
        <button class="button" onclick="prevSlide()">&#8592;</button>
        <button class="button" onclick="nextSlide()">&#8594;</button>
    </div>
</div>