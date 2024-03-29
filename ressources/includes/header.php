<nav class="navigation-principale" id="ancre">
    <ul>
        <li><a href="index.php" class="<?php if($page=="index"){ echo"active";}?>">ACCUEIL</a></li>
        <li><a href="about.php" class="<?php if($page=="about"){ echo"active";}?>">A PROPOS</a></li>
        <li><a href="lieu.php" class="<?php if($page=="lieux"){ echo"active";}?>">LIEUX DE VIE</a></li>
        <li><a href="SLM.php" class="<?php if($page=="medias"){ echo"active";}?>">SUR LES MÉDIAS</a></li>
        <li><a href="activite.php" class="<?php if($page=="activite"){ echo"active";}?>">ACTIVITÉS</a></li>
        <li><a href="contact.php" class="<?php if($page=="contact"){ echo"active";}?>">CONTACT</a></li>
    </ul>
</nav>

<header class="bulle">
    <article class="titre">
        <h1 class="txt-grand">
            <span>Bachelor</span>
            <span>Universitaire de</span>
            <span>Technologie</span>
        </h1>
        <h2 class="txt-petit">
            <span>Métiers du Multimédia et de</span>
            <span>l'Internet</span>
        </h2>
    </article>

    <article class="bulle-icone <?php echo $couleur_bulle_classe; ?>"></article>
    <article class="bulle-icone-bordure <?php echo $couleur_bulle_classe; ?>"></article>
</header>