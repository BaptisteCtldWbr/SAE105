<?php
    $couleur_bulle_classe = "jaune";
    $page="contact";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact  • BUT MMI - IUT de Cergy Pontoise</title>
    <link rel="shortcut icon" href="ressources/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/footer.css">
    <link rel="stylesheet" href="ressources/css/contact.css">
    <meta property="og:title" content="Contact • BUT MMI - IUT de Cergy Pontoise">
    <meta property="og:description" content="Contactez nous via ce site pour avoir plus de renseignements sur la formation">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo'https://' . $_SERVER['HTTP_HOST'] . '/sae105/ressources/images/favicon.png'?>">
</head>

<body>
    <section class="conteneur-1280">
        
        <?php
            $msg_valide = '<p class="message msg-valide">Message envoyé !</p>';
            $msg_erreur = '<p class="message msg-erreur">Votre formulaire possède une erreur !</p>';
            $msg_mail   = '<p class="message msg-erreur">E-mail non valide !</p>';
            if(isset($_POST["envoyer"])){
                if (empty($_POST['prenom']) or empty($_POST['nom']) or empty($_POST['mail']) or empty($_POST['contenu']) or empty($_POST['categorie'])){
                    echo("$msg_erreur");
                }
                else if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
                    echo("$msg_mail");
                }
                else{
                    $prenom = $_POST['prenom'];
                    $nom = $_POST['nom'];
                    $mail = $_POST['mail'];
                    $contenu = $_POST['contenu'];
                    $categorie = $_POST['categorie'];
                    $envoi = "asaf-font@alwaysdata.net";

                    $sujet = "[$categorie] $nom $prenom";
                    $headers = "Reply-To: $mail" . "\r\n" .
                    "FROM: $nom $prenom <$mail>" . "\r\n" .
                    "cc:$mail";

                    mail($envoi, $sujet, $contenu, $headers);
                    echo("$msg_valide");
                }
            }
        ?>
        <?php require_once('./ressources/includes/header.php');?>
        
        <main class="conteneur-principal">
            <h1 class="titre-page">Plus d'infos sur la formation ?<br>Contactez-nous !</h1>
            <p><span class="gras">La formation s'ouvre à tous les bacheliers</span>, pour rappel. Avoir des connaissances en programmation, design ou encore audiovisuel n'est pas obligatoire mais reste un bon atout, car il faut aimer la curiosité dans cette formation pluridisciplinaire. <span class="gras">Il est également possible de faire la formation après une reprise d'études ou une réorientation.<span class="gras"></p>
            <h1 class="titre-page">Nous contacter en ligne</h1>
            <p class="required">Champs obligatoires</p>
            <form action="" method="POST">
                <label for="prenom" class="required">Prénom</label>
                <input type="text" name="prenom" id="prenom" required>
                <label for="nom" class="required">Nom de famille</label>
                <input type="text" name="nom" id="nom" required>
                <label for="mail" class="required">Adresse e-mail</label>
                <input type="email" name="mail" id="mail" required>
                <label for="contenu" class="required">Message</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10" required></textarea>
                <label class="required">Je suis</label>
                <div id="form-radio">
                    <input type="radio" name="categorie" id="NC" value="NC"><label for="NC" class="label-radio"  required>Je ne souhaite pas préciser</label>
                    <input type="radio" name="categorie" id="etudiant" value="etudiant" required><label for="etudiant" class="label-radio">Étudiant / Étudiante</label>
                    <input type="radio" name="categorie" id="parent" value="parent" required><label for="parent" class="label-radio">Parent</label>
                    <input type="radio" name="categorie" id="autre" value="autre" required><label for="autre" class="label-radio">Autre</label>
                </div>
                <div id="form-submit">
                    <input type="submit" name="envoyer" value="ENVOYER">
                    <input type="reset" value="Réinitialiser">
                </div>
            </form>
            <h2 class="titre-page">Nous contacter par courrier</h2>
            <p>IUT de Cergy-Pontoise, <br>
            Département Métiers du Multimédia et de l'Internet (MMI) <br>
            34 Bis Boulevard Henri Bergson <br>
            95200 Sarcelles</p>
        </main>
        <?php require_once('./ressources/includes/footer.php');?>
    </section>

</body>
</html>