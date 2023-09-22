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
    <title>PortFolio - PHANG Willy</title>
    <link rel="shortcut icon" href="<?php echo $get_perma_link;?>uploads/icon_phang_willy.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/index.css">
    <script src="<?php echo $get_fa_font?>"></script>
    <script src="<?php echo $get_perma_link;?>js/main.js" defer></script>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>

    <div class="title">
        <h1 class="h1-title">ACCUEIL</h1>
    </div>

    <div class="content">

        <div class="bienvenue">

            <div class="image">
                <img src="<?php echo $get_perma_link;?>uploads/image_bienvenue.png" alt="bienvenue" class="image__bienvenue">
            </div>

        </div>

    </div>
    
    <?php
        include_once 'footer.php';
    ?>
</body>
</html>