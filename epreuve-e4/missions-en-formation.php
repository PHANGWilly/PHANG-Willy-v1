    <?php
        require_once '../function.php';
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="description" content="Bievenue sur le Portfolio de PHANG Willy, apprenti Développeur">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Missions en formation - PHANG Willy</title>
    <link rel="shortcut icon" href="<?php echo $get_perma_link;?>uploads/icon_phang_willy.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/missions-en-formation.css">
    <script src="<?php echo $get_fa_font?>"></script>
    <script src="<?php echo $get_perma_link;?>js/main.js" defer></script>
</head>
<body>
    <?php
        include_once '../header.php';
    ?>

    <div class="title">
        <h1 class="h1-title">Missions en formation</h1>
    </div>

    <div class="content">


        <div class="work__list_content">
            
            <div class="work__content load" id="portail-belletable">
                <div class="project__part_left">
                    <h3 class="h3 project__name">Portail BelleTable</h3>
                    <p class="date">13 dec 2020</span>  <br>12 avril 2022 </p>
                    <p class="technology">HTML, CSS, PHP, JS, SQL</p>
                    <a href="<?php echo $get_perma_link;?>uploads/Cahier_Des_Charges_Portail_BelleTable.pdf" class="link__to link__to_fiche_mission" target="blank"> 
                        <span class="fiche_mission_text">Fiche Mission</span> 
                    </a>
                </div>
                <div class="project__part_right">
                    <a href="https://www.phangwilly.com/PortailBelleTable/" class="link__to link__to_project" target="blank">
                        <img src="<?php echo $get_perma_link;?>uploads/portail_belletable.png" alt="logo" class="logo__project">
                    </a>
                </div>
            </div>

            <div class="work__content load" id="jeu-du-morpion">
                <div class="project__part_left">
                    <h3 class="h3 project__name">Jeu du Morpion</h3>
                    <p class="date">19 jan 2021 <br> 09 fev 2021</p>
                    <p class="technology">C# Console</p>
                    <a href="<?php echo $get_perma_link;?>uploads/fiche_mission_jeu_du_morpion.pdf" class="link__to link__to_fiche_mission" target="blank">
                        <span class="fiche_mission_text">Fiche Mission</span>
                    </a>
                </div>
                <div class="project__part_right">
                    <a href="<?php echo $get_perma_link;?>uploads/fiche_mission_jeu_du_morpion.pdf" class="link__to link__to_project" target="blank">
                        <img src="<?php echo $get_perma_link;?>uploads/jeu_du_morpion.png" alt="logo" class="logo__project" >
                    </a>
                </div>
            </div>

            <div class="work__content load" id="calculatrice">
                <div class="project__part_left">
                    <h3 class="h3 project__name">Calculatrice</h3>
                    <p class="date">04 mai 2021 <br> 25 mai 2021</p>
                    <p class="technology">C# Form</p>
                    <a href="<?php echo $get_perma_link;?>uploads/fiche_mission_calculatrice.pdf" class="link__to link__to_fiche_mission" target="blank">
                        <span class="fiche_mission_text">Fiche Mission</span>
                    </a>
                </div>
                <div class="project__part_right load">
                    <a href="<?php echo $get_perma_link;?>uploads/fiche_mission_calculatrice.pdf" class="link__to link__to_project" target="blank">
                        <img src="<?php echo $get_perma_link;?>uploads/calculatrice.png" alt="logo" class="logo__project">
                    </a>
                </div>
            </div>

            <div class="work__content load" id="jeu-du-pendu">
                <div class="project__part_left">
                    <h3 class="h3 project__name">Jeu du Pendu</h3>
                    <p class="date">19 oct 2021 <br> 02 nov 2021</p>
                    <p class="technology">HTML, CSS, JS</p>
                    <a href="<?php echo $get_perma_link;?>uploads/fiche_mission_jeu_du_pendu.pdf" class="link__to link__to_fiche_mission" target="_blank">
                        <span class="fiche_mission_text">Fiche Mission</span>
                    </a>
                </div>
                <div class="project__part_right">
                    <a href="<?php echo $get_perma_link;?>jeux/pendu/" class="link__to link__to_project" target="blank">
                        <img src="<?php echo $get_perma_link;?>uploads/jeu-du-pendu.png" alt="logo" class="logo__project">
                    </a>
                </div>
            </div>

            <div class="work__content load" id="chat-utilisateur">
                <div class="project__part_left">
                    <h3 class="h3 project__name">Chat Utilisateur</h3>
                    <p class="date">04 jan 2022 <br> 25 jan 2022</p>
                    <p class="technology">HTML, CSS, PHP, JS, SQL</p>
                    <a href="<?php echo $get_perma_link;?>uploads/fiche_mission_chat_utilisateur.pdf" class="link__to link__to_fiche_mission" target="blank">
                        <span class="fiche_mission_text">Fiche Mission</span>
                    </a>
                </div>
                <div class="project__part_right">
                    <a href="<?php echo $get_perma_link;?>uploads/fiche_mission_chat_utilisateur.pdf" class="link__to link__to_project" target="blank">
                        <img src="<?php echo $get_perma_link;?>uploads/chat_utilisateur.png" alt="logo" class="logo__project">
                    </a>
                </div>
            </div>

            <div class="work__content load" id="badge-acces-salons">
                <div class="project__part_left">
                    <h3 class="h3 project__name">Badge d'Accès BT</h3>
                    <p class="date">22 fev 2022 <br> 12 avril 2022</p>
                    <p class="technology">C# Form, SQL, QRCoder, HTML, CSS</p>
                    <a href="" class="link__to link__to_fiche_mission" target="blank">
                        <span class="fiche_mission_text">Fiche Mission</span>
                    </a>
                </div>
                <div class="project__part_right">
                    <a href="https://github.com/PHANGWilly/Gestion_Badges_Visiteurs_BelleTable" class="link__to link__to_project" target="_blank">
                        <img src="<?php echo $get_perma_link;?>uploads/Badge_Acces_BelleTable.png" alt="logo" class="logo__project">
                    </a>
                </div>
            </div>

        </div>



    </div>
    
    <?php
        include_once '../footer.php';
    ?>
</body>
</html>