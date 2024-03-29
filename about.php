<?php
    $couleur_bulle_classe = "turquoise";
    $page = "about";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos • BUT MMI - IUT de Cergy Pontoise</title>

    <link rel="shortcut icon" href="ressources/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/footer.css">
    <link rel="stylesheet" href="ressources/css/about.css">
    <meta property="og:title" content="A propos • BUT MMI - IUT de Cergy Pontoise">
    <meta property="og:description" content="Découvrez le BUT MMI en profondeur, avec un échantillon du programme.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo'https://' . $_SERVER['HTTP_HOST'] . '/sae105/ressources/images/favicon.png'?>">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <main class="conteneur-principal">
            <div class="bloc-vert">
                <a href="#presentation">Présentation</a>
                <a href="#sae">SAÉ</a>
                <a href="#exemple">Exemples de SAÉ</a>
            </div>
            <div id="presentation">
                <p>Le BUT métiers du multimédia et de l'internet (MMI) remplace le DUT MMI à partir de la rentrée 2021, auparavant appelé DUT SRC (services et réseaux de communication) jusqu'en mai 2013, qui était lancé à la rentrée universitaire 1994 par les IUT de Vélizy, Marne-la-Vallée, Saint-Raphaël et Verdun. Ce BUT offre une alternative aux anciens diplômes Bac+3, tels que la licence professionnelle en activités et techniques de communication et la licence professionnelle en systèmes informatiques et logiciels.</p> 
                <p>Lorsque cette formation était proposée sous la forme d'un Diplôme Universitaire Technologique (DUT), elle se déroulait sur deux années (1 800 heures). En théorie, elle est accessible à tous les bacheliers, quelle que soit leur série. En moyenne, il y a de 30 à 35 heures de cours par semaine. Cette formation se divise en trois grands pôles, auxquels il faut ajouter le projet tutoré (300 heures) et les stages (420 heures). Les trois grands axes sont les suivants :</p> 
                <ul>
                    <li>La culture contemporaine et langues étrangères (500 heures)</li>
                    <li>La culture scientifique et technique (700 heures)</li>
                    <li>La culture communicationnelle (600 heures)</li>
                </ul>
                <img src="ressources/images/IMG_7106.png" alt="">
                <p>A CY Cergy Paris Université, il est donné la possibilité aux étudiants de passer un semestre au Québec à l'Université du Québec à Chicoutimi (UQAC) dans une formation dont le contenu est proche de celui proposé à l'IUT. Il est également possible d'effectuer ce semestre après avoir été diplômé. <span class="gras">Attention : les cours sont dispensés en langue française.</span></p>
            </div>
            <div id="sae">
                <h2 class="titre-page">Situation d'Apprentissage et d'Évaluation</h2>
                <p>Dans l’optique de préparer au mieux les étudiants à leur future vie professionnelle, les étudiants sont regroupés en agences de communication de 3 à 7 personnes dans des projets appelés "SAÉ" ou Situation d'Apprentissage et d'Évaluation. Ces agences ont pour but d’encourager le travail d’équipe dans un cadre reprenant l'environnement du travail en entreprise.</p>
                <p>La situation d'apprentissage et d'évaluation ou simplement SAÉ est la situation didactique que privilégie, au Québec, le Ministère de l'Éducation, Enseignement supérieur et Recherche (MEESR) par le biais du Programme de formation de l'école québécoise (PFEQ). Une SAÉ se définit comme un ensemble constitué d’une ou plusieurs tâches à réaliser par l’élève en vue d’atteindre le but fixé. Elle permet : à l’élève, de développer et d’exercer une ou plusieurs compétences disciplinaires et transversales; à l’enseignant, d’assurer le suivi du développement des compétences dans une perspective d’aide à l’apprentissage. Elle est donc centrée sur l'élève et préconise une approche constructiviste ou socioconstructiviste à l'école.</p>
                <p>Les SAÉ sont une nouveauté des diplômes BUT, <span class="gras">elles visent à remplacer les Devoirs Sur Table et les notes à terme</span>, en proposant une approche plus "ingénieure" de la scolarité avec des étudiants qui apprennent à résoudre des problèmes et non plus apprendre par cœur leurs cours.</p>
            </div>
                <h2 class="titre-page" id="exemple">Exemples de projets réalisés en SAÉ</h2>
                <div class ="ex_sae">
                    <article>
                        <img src="ressources/images/IMG_6897.png" alt="">
                        <h3 class="titre_sae gras">Auditer une communication numérique • SAÉ 101</h3>
                        <p>Réaliser l'évaluation d'un site web à partir de critères données</p>
                    </article>
                    <article>
                        <img src="ressources/images/IMG_6897.png" alt="">
                        <h3 class="titre_sae gras">Concevoir une recommandation de communication numérique • SAÉ 102</h3>
                        <p>Réaliser un recommandation de stratégie de communication</p>
                    </article>
                    <article>
                        <img src="ressources/images/IMG_6897.png" alt="">
                        <h3 class="titre_sae gras">Produire les éléments d’une communication visuelle • SAÉ 103</h3>
                        <p>Apprendre les bases de la production graphique à l'aide de logiciel de mise en page</p>
                    </article>
                    <article>
                        <img src="ressources/images/IMG_6897.png" alt="">
                        <h3 class="titre_sae gras">Produire un contenu audio et vidéo • SAÉ 104</h3>
                        <p>Réalisation d'un tutoriel de 2 minutes sur une notion d'audiovisuel</p>
                    </article>
                    <article>
                        <img src="ressources/images/IMG_6897.png" alt="">
                        <h3 class="titre_sae gras">Produire un site Web • SAÉ 105</h3>
                        <p>Apprendre les bases de la programmation d'un site avec des solutions d'hébergement de base</p>
                    </article>
                    <article>
                        <img src="ressources/images/IMG_6897.png" alt="">
                        <h3 class="titre_sae gras">Gérer un projet de communication numérique • SAÉ 106</h3>
                        <p>Apprendre les bases de la gestion d'un projet, de son commencement à sa mise en place</p>
                    </article>
                </div>
        </main>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>
</html>