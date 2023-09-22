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
    <title>Mentions légales - PHANG Willy</title>
    <link rel="shortcut icon" href="<?php echo $get_perma_link;?>uploads/icon_phang_willy.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/mentions-legales.css">
    <script src="<?php echo $get_fa_font?>"></script>
    <script src="<?php echo $get_perma_link;?>js/main.js" defer></script>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>

    <div class="title">
        <h1 class="h1-title">Mentions Légales</h1>
    </div>

    <div class="content">

        <div class="content__ml">
            <div class="part">
                <h2 class="h2-title">Apprenti</h2>
                <p class="text">PHANG Willy <br> BTS SIO SLAM 2020 - 2022</p>
            </div>
            <div class="part">
                <h2 class="h2-title">ADRESSE</h2>
                <p class="text">40 rue Auguste Poullain <br> 93200 <br> Saint-Denis <br> FRANCE </p>
            </div>
            <div class="part">
                <h2 class="h2-title">DIRECTEUR DE LA PUBLICATION</h2>
                <p class="text">PHANG Willy</p>
            </div>
            <div class="part">
                <h2 class="h2-title">Hébergement</h2>
                <p class="text"> <a href="https://www.hostinger.com" target="blank" class="link__to"> Hostinger </a> <br> 61 Lordou Virinos Street <br> 6023 <br> Larcana <br> Cyprus </p>
            </div>
            <div class="part">
                <h2 class="h2-title">CONTACT</h2>
                <p class="text">Téléphone : <a href="tel:+33698259462"  target="blank" class="link__to">+33 6 98 25 94 62</a> </p>
                <p class="text">Email : <a href="mailto:pro.phang.willy@gmail.com"  target="blank" class="link__to">pro.phang.willy@gmail.com</a></p>
                <p class="text">Email : <a href="mailto:contact@phangwilly.com"  target="blank" class="link__to">contact@phangwilly.com</a></p>
                <p class="text">Page de contact : <a href="<?php echo $get_perma_link;?>contact.php" class="link__to">ici</a> </p>
            </div>
        </div>
        

    </div>
    
    <?php
        include_once 'footer.php';
    ?>
</body>
</html>