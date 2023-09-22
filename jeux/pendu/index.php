    <?php
        $get_perma_link = "/PortFolio/";
        $get_fa_font = "https://kit.fontawesome.com/564f9d1433.js";

    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="description" content="Bievenue sur le Portfolio de PHANG Willy, apprenti Développeur">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Jeu du Pendu - PHANG Willy</title>
    <link rel="shortcut icon" href="<?php echo $get_perma_link;?>uploads/icon_phang_willy.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>jeux/pendu/style.css">
    <script src="<?php echo $get_fa_font?>"></script>
    <script src="<?php echo $get_perma_link;?>js/main.js" defer></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="header">
        <h1>Jeu du Pendu</h1>
        <h4>par PHANG Willy SIO2 SLAM</h4>
        <p>
            Trouvez le mot caché au risque de tuer le pendu.<br>
            Choisissez une par une vos lettres ! <br>
        </p>
    </div>
    <div class="image">
        <img name="pendu" class="pendu" src="images/pendu_0.jpg">
    </div>
    <!--mot à trouver-->
    <div class="mot-a-trouver">
        mot à trouver : 
        
        <!--En fonction de la taille du mot les cases s'ajusteront-->
        <table id="mot">
            <tr>
                <script language="javascript">
                    for(var i=0; i<tailleMot; i++) document.write("<td> <p id=\""+i+"\">"+motSecret.charAt(i)+"</p></td>");
                </script>
            </tr>
        </table>
        
        <script language="javascript">
            for(var i=0; i<tailleMot; i++) tableauMot[i]=document.getElementById(i);
        </script>
    
    </div>
    <!--Clavier du pendu-->
    <div class="clavier-pendu">
        <table id="clavier">
            <tbody>
                <!--Premiere ligne-->
                <tr> 
                    <td onclick="propose(this);">A</td>
                    <td onclick="propose(this);">B</td>
                    <td onclick="propose(this);">C</td>
                    <td onclick="propose(this);">D</td>
                    <td onclick="propose(this);">E</td>
                    <td onclick="propose(this);">F</td>
                    <td onclick="propose(this);">G</td>
                    <td onclick="propose(this);">H</td>
                    <td onclick="propose(this);">I</td>
                    <td onclick="propose(this);">J</td>
                </tr>
                <!--Deuxieme ligne-->
                <tr>
                    <td onclick="propose(this);">K</td>
                    <td onclick="propose(this);">L</td>
                    <td onclick="propose(this);">M</td>
                    <td onclick="propose(this);">N</td>
                    <td onclick="propose(this);">O</td>
                    <td onclick="propose(this);">P</td>
                    <td onclick="propose(this);">Q</td>
                    <td onclick="propose(this);">R</td>
                    <td onclick="propose(this);">S</td>
                    <td onclick="propose(this);">T</td>
                </tr>
                <!--Troisième ligne-->
                <tr>
                    <td class="invisible"></td>
                    <td class="invisible"></td>
                    <td onclick="propose(this);">U</td>
                    <td onclick="propose(this);">V</td>
                    <td onclick="propose(this);">W</td>
                    <td onclick="propose(this);">X</td>
                    <td onclick="propose(this);">Y</td>
                    <td onclick="propose(this);">Z</td>
                    <td class="invisible"></td>
                    <td class="invisible"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--Changement de mot-->
    <div class="refresh"> 
        <a href="">
            Changer de mot
        </a>
    </div>
    
    <div class="link">
        <a href="<?php echo $get_perma_link;?>" class="link__to">Accueil</a>
    </div>
</body>
</html>