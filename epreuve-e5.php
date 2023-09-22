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
    <title>Épreuve E5 - PHANG Willy</title>
    <link rel="shortcut icon" href="<?php echo $get_perma_link;?>uploads/icon_phang_willy.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/epreuve-e5.css">
    <script src="<?php echo $get_fa_font?>"></script>
    <script src="<?php echo $get_perma_link;?>js/main.js" defer></script>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>

    <div class="title">
        <h1 class="h1-title">Épreuve e5</h1>
    </div>

    <div class="content">
        

        <div class="work__list_content">
            
            <div class="work__content" id="portail-belletable">
                <div class="project__part_left">
                    <h3 class="h3 project__name">Portail BelleTable</h3>
                    <p class="date">13 dec 2020</span>  <br>12 avril 2022 </p>
                    <p class="technology">HTML, CSS, PHP, JS, SQL</p>
                    <a href="<?php echo $get_perma_link;?>uploads/Cahier_Des_Charges_Portail_BelleTable.pdf" class="link__to link__to_cahier_des_charges" target="_blank"> 
                        <span class="cahier_des_charges_text">Cahier des charges</span> 
                    </a>
                </div>
                <div class="project__part_right">
                    <a href="https://www.phangwilly.com/PortailBelleTable/" class="link__to link__to_project" target="blank">
                        <img src="<?php echo $get_perma_link;?>uploads/portail_belletable.png" alt="logo" class="logo__project">
                    </a>
                </div>
            </div>

            <div class="work__content" id="badge-acces-bt">
                <div class="project__part_left">
                    <h3 class="h3 project__name">Badge d'Accès BT</h3>
                    <p class="date">22 fev 2022 <br> 12 avril 2022</p>
                    <p class="technology">C# Form, SQL, QRCoder, HTML, CSS</p>
                    <a href="<?php echo $get_perma_link;?>uploads/Cahier_Des_Charges_Gestion_Badges_BelleTable.pdf" class="link__to link__to_cahier_des_charges" target="_blank">
                        <span class="cahier_des_charges_text">Cahier des charges</span>
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
        include_once 'footer.php';
    ?>
</body>
</html>