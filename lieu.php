<?php
    $couleur_bulle_classe = "bleu";
    $page = "lieux";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lieux de Vie  • BUT MMI - IUT de Cergy Pontoise</title>

    <link rel="shortcut icon" href="ressources/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/lieuvie.css">
    <link rel="stylesheet" href="ressources/css/footer.css">
    <meta property="og:title" content="Lieux de vie • BUT MMI - IUT de Cergy Pontoise">
    <meta property="og:description" content="Découvrez les lieux de vie du site de Sarcelles de l'IUT de Cergy Pontoise">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo'https://' . $_SERVER['HTTP_HOST'] . '/sae105/ressources/images/favicon.png'?>">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <main class="conteneur-principal">
            <h1 class="titre-page">Lieux de vie</h1>
            <p>
                Entre les cours, l'université et ses IUT proposent de nombreux lieux de convivialité ou d'idéation. Divers et variés, ils permettent aux étudiants, de toute formation, de découvrir de nouveaux horizons et surtout de rencontrer les étudiants d'autres BUT.
            </p>
            <ul>
                <li class="lieux">
                    <figure class="conteneur-lieu">
                        <img src="https://placehold.co/522x435.png" alt="">
                    </figure>
                    <article>
                        <h2 class="titre-page titre-lieu">Bibliothèque universitaire</h2>
                        <p class="description">La bibliothèque universitaire est un atout indispensable à votre réussite. Elle met à votre disposition des collections (livres, revues, ressources numériques accessibles sur place et à distance) ainsi que des postes informatiques et des espaces de travail.</p>
                    </article>
                </li>
                <li class="lieux">
                    <figure class="conteneur-lieu">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1705500015141!6m8!1m7!1sbTMaGK3_kfk7CgcLyq3L2Q!2m2!1d48.97663855526719!2d2.377984228265956!3f342.78804472125904!4f-2.52484409345341!5f0.7820865974627469" width="522" height="435" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </figure>
                    <article>
                        <h2 class="titre-page titre-lieu">Se restaurer</h2>
                        <p class="description">Les restaurants du CROUS vous permettent de déjeuner pour un tarif social, fixé au plus à 3,30€. Pour bénéficier de ce tarif, il vous suffit de présenter votre carte d’étudiant multiservices. 
                        <span class="gras">Si vous êtes étudiant boursier, vous bénéficiez automatiquement lors de votre passage en caisse du tarif à 1€ pour un repas complet.</span>
                        </p>
                    </article>
                </li>
                <li class="lieux">
                    <figure class="conteneur-lieu">
                        <img src="https://placehold.co/522x435.png" alt="">
                    </figure>
                    <article>
                        <h2 class="titre-page titre-lieu">Réseau des fablabs de CY Cergy Paris Université</h2>
                        <p class="description">Intégré au Centre d’appui aux enseignements, le réseau des fablabs de CY Cergy Paris Université comprend le fablabs LabBoite de Cergy (Grand centre) et le Faclab de Gennevilliers (site de l’université). Ce réseau permet d’expérimenter, tester et échanger dans des lieux collaboratifs, accueillants, et ouverts à toutes et tous.</p>
                    </article>
                </li>
            </ul>
        </main>
        <?php require_once('./ressources/includes/footer.php'); ?>

    </section>
</body>
</html>