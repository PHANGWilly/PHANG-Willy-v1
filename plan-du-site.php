<?php
        require_once 'function.php';
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="description" content="Bievenue sur le Portfolio de PHANG Willy, apprenti Développeur">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Plan Du Site - PHANG Willy</title>
    <link rel="shortcut icon" href="<?php echo $get_perma_link;?>uploads/icon_phang_willy.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/plan-du-site.css">
    <script src="<?php echo $get_fa_font?>"></script>
    <script src="<?php echo $get_perma_link;?>js/main.js" defer></script>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>

    <div class="title">
        <h1 class="h1-title">Plan du Site</h1>
    </div>

    <div class="content">

        <div class="content__siteplan">
            
            <ul class="main__nav"><span class="main__nav_title">Présentation</span>
                <li class="list__nav">
                    <a href="<?php echo $get_perma_link;?>presentation/apprenti.php" class="link__to">Apprenti</a>
                </li>
                <li class="list__nav">
                    <a href="<?php echo $get_perma_link;?>presentation/entreprise.php" class="link__to">Entreprise</a>
                </li>
            </ul>

            <ul class="main__nav"><span class="main__nav_title">Épreuve E4</span>
                <li class="list__nav">
                    <a href="<?php echo $get_perma_link;?>epreuve-e4/parcours-de-professionnalisation.php" class="link__to">Parcours de Professionnalisation</a>
                </li>
                <li class="list__nav">
                    <a href="<?php echo $get_perma_link;?>epreuve-e4/missions-en-formation.php" class="link__to">Missions en formation</a>
                </li>
                <li class="list__nav">
                    <a href="<?php echo $get_perma_link;?>epreuve-e4/missions-en-entreprise.php" class="link__to">Missions en entreprise</a>
                </li>
            </ul>

            <ul class="main__nav"><span class="main__nav_title">Épreuve E5</span>
                <li class="list__nav">
                    <a href="<?php echo $get_perma_link;?>epreuve-e5.php#portail-belletable" class="link__to">Portail BelleTable</a>
                </li>
                <li class="list__nav">
                    <a href="<?php echo $get_perma_link;?>epreuve-e5.php#badge-acces-bt" class="link__to">Badge d'Accès BelleTable</a>
                </li>
            </ul>

            <ul class="main__nav"><span class="main__nav_title">Veille</span>
                <li class="list__nav">
                    <a href="<?php echo $get_perma_link;?>veille.php#e-commerce" class="link__to">E-commerce</a>
                </li>
            </ul>

            <ul class="main__nav"><span class="main__nav_title"><a href="<?php echo $get_perma_link;?>plan-du-site.php" class="link__to">Plan du Site</a></span>
            </ul>

            <ul class="main__nav"><span class="main__nav_title"><a href="<?php echo $get_perma_link;?>mentions-legales.php" class="link__to">Mentions Légales</a></span>
            </ul>

            <ul class="main__nav"><span class="main__nav_title"><a href="<?php echo $get_perma_link;?>contact.php" class="link__to">Contact</a></span>
            </ul>

        </div>

    </div>
    
    <?php
        include_once 'footer.php';
    ?>
</body>
</html>