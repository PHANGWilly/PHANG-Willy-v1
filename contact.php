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
    <title>Contact - PHANG Willy</title>
    <link rel="shortcut icon" href="<?php echo $get_perma_link;?>uploads/icon_phang_willy.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/contact.css">
    <script src="<?php echo $get_fa_font?>"></script>
    <script src="<?php echo $get_perma_link;?>js/main.js" defer></script>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>

    <div class="title">
        <h1 class="h1-title">Contact</h1>
    </div>

    <div class="content">
        <?php
            if(isset($_POST["Envoyer"])){
                extract($_POST);

                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = $email;
                $to = "contact@phangwilly.com";
                $message = "Nom :" . "\r\n" . $nom . "\r\n \r\n" . "Prenom :" . "\r\n" . $prenom . "\r\n \r\n" . "Email :" . "\r\n" . $email . "\r\n \r\n" . "Sujet : " . "\r\n" . $sujet . "\r\n \r\n" . "Message" . "\r\n" . $message ;
                $headers = "[CONTACT] " . $sujet;
                mail($to, $headers, $message);

                echo "<div class='modal' id='modal' style='display:block;'> <div class='modal__content'> <span class='fa-solid fa-xmark close'></span><header class='modal__header'>MERCI DE M'AVOIR CONTACTÉ </header><div class='modal__description'>Je vous contacterai dans les plus brefs délais !</div><div class='modal__signature'>PHANG Willy</div></div></div>";

            }
        ?>

        <div class="content__contact">

            <div class="reseaux">

                <div class="linkedin"> <a href="https://www.linkedin.com/in/phang-willy/" class="link__to" target="blank"> <span class="fa-brands fa-linkedin"></span><span class="text">LinkedIn</span></a></div>
                <div class="email"> <a href="mailto:pro.phang.willy@gmail.com" class="link__to" target="blank"> <span class="fa-solid fa-envelope"></span><span class="text">pro.phang.willy@gmail.com</span></a></div>
                <div class="telephone"> <a href="tel:+33698259462" class="link__to" target="blank"> <span class="fa-solid fa-phone"></span><span class="text">+33 6 98 25 94 62</span></a></div>

            </div>

            <form action="" class="form__to_contact" method="post">
                <input type="text" name="nom" id="nom" placeholder="Last Name / Nom : " required>
                <input type="text" name="prenom" id="prenom" placeholder="First Name / Prénom : " required>
                <input type="email" name="email" id="email" placeholder="Email : " required>
                <input type="text" name="sujet" id="sujet" placeholder="Subject / Sujet : " required>
                <textarea name="message" id="message" placeholder="Message : " required></textarea>
                <input type="submit" value="Send / Envoyer" name="Envoyer">
            </form> 

        </div>

    </div>
    
    <?php
        include_once 'footer.php';
    ?>


<script>
    var modal = document.getElementById("modal");
    const btnClose = document.querySelector(".close");

    btnClose.onclick = function(){
        modal.style.display="none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>

