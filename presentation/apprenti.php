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
    <title>Présentation de l'apprenti - PHANG Willy</title>
    <link rel="shortcut icon" href="<?php echo $get_perma_link;?>uploads/icon_phang_willy.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $get_perma_link;?>css/presentation-apprenti.css">
    <script src="<?php echo $get_fa_font?>"></script>
    <script src="<?php echo $get_perma_link;?>js/main.js" defer></script>
</head>
<body>
    <?php
        include_once '../header.php';
    ?>

    <div class="title">
        <h1 class="h1-title">présentation de l'apprenti</h1>
    </div>

    <div class="content">
        <section class="informations">
            <h3 class="h3-title">Qui-Suis-Je ?</h3>
            <div class="container">
                <div class="parts f-part">
                    <img src="<?php echo $get_perma_link;?>uploads/photo-phang-willy.png" alt="photo phang willy">
                </div>
                <div class="parts s-part">
                    <h2 class="h2-title">PHANG Willy</h2>
                    <p class="text">20 ans <br> Saint-Denis 93</p>
                    <p class="text">BTS SIO Alternance- SLAM <br> CFA Campus Montsouris 75 <br> Entreprise : Logistib</p>
                    <a href="<?php echo $get_perma_link;?>uploads/CV_Phang_Willy.pdf" target="_blank" class="link__to"><span class="fa-solid fa-file"></span>Voir mon CV</a>
                </div>
            </div>
        </section>
        <section class="parcours" id="parcours">
            <h3 class="h3-title">Mon Parcours</h3>
            <div class="container">
                <div class="content">
                    <input type="radio" name="slider" checked id="bts">
                    <input type="radio" name="slider" id="baccalaureat">
                    <div class="list">
                        <label for="bts" class="bts">
                        <span class="list__title">BTS</span>
                    </label>
                    <label for="baccalaureat" class="baccalaureat">
                        <span class="list__title">Baccalauréat</span>
                    </label>
                    </label>
                    <div class="slider"></div>
                </div>
                <div class="text-content">
                    <div class="bts text">
                        <div class="content__title">2020 - 2022 BTS SIO SLAM Alternance</div>
                        <div class="content__description">
                            <a href="https://www.campusmontsouris.fr" target="blank" class="link__to">
                                <img src="<?php echo $get_perma_link;?>uploads/logo-campus-montsouris.png" alt="logo campusmontsouris">
                            </a>
                            <div class="details">
                                <span class="details__title">CFA : </span> Campus Montsouris 75014
                            </div>
                            <div class="details">
                                <span class="details__title">Entreprise : </span> Logistib 93600
                            </div>
                        </div>
                    </div>
                    <div class="baccalaureat text">
                        <div class="content__title">2016 - 2020 Baccalauréat STI2D ITEC</div>
                        <div class="content__description">
                            <a href="https://www.lasallesaintdenis.com" target="blank" class="link__to">
                                <img src="<?php echo $get_perma_link;?>uploads/logo-lasalle.png" alt="logo la salle saint-denis">
                            </a>
                            <div class="details">
                                <span class="details__title">Lycée : </span> La Salle Saint-Denis 93200 
                            </div>
                            <div class="details">
                                <span class="details__title">Mention : </span> Assez-Bien</div>
                        </div>
                    </div>            
                    </div>
                </div>
            </div>
        </section>
        <section class="competences">
            <h3 class="h3-title">Compétences</h3>
            <h3 class="h3-sub-title">Coeur de métier</h3>
            <div class="competence">
                <h4 class="h4-title">Web - Front End</h4>
                <div class="web__frontend grid__template">
                    <div class="langage">
                        <div class="langage__title">HTML</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-html.png" alt="logo html" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">CSS</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-css.png" alt="logo css" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">JavaScript</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-javascript.png" alt="logo javascript" class="langage__img">
                    </div>
                </div>
            </div>
            
            <div class="competence">
                <h4 class="h4-title">Web - Back End</h4>
                <div class="web__backend grid__template">
                    <div class="langage">
                        <div class="langage__title">PHP</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-php.png" alt="logo php" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">MySQL</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-mysql.png" alt="logo Mysql" class="langage__img">
                    </div>
                </div>
            </div>


            <div class="competence">
                <h4 class="h4-title">Web - CMS</h4>
                <div class="web__cms grid__template">
                    <div class="langage">
                        <div class="langage__title">Shopify / Liquid</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-shopify-liquid.png" alt="logo Shopify Liquid" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">WordPress / Woo</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-wordpress-woo.png" alt="logo WordPress" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">Prestashop</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-prestashop.png" alt="logo Prestashop" class="langage__img">
                    </div>
                </div>
            </div>
            
            <div class="competence">
                <h4 class="h4-title">Web - FrameWorks</h4>
                <div class="web__framework grid__template">
                    <div class="langage">
                        <div class="langage__title">Bootstrap</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-bootstrap.png" alt="logo Bootstrap" class="langage__img">
                    </div>
                </div>
            </div>

            <div class="competence">
                <h4 class="h4-title">Programmation</h4>
                <div class="programmation grid__template">
                    <div class="langage">
                        <div class="langage__title">C</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-c.png" alt="logo C" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">C# Console</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-cs.png" alt="logo C# console" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">C# Form</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-cs-form.png" alt="logo C#" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">Java</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-java.png" alt="logo Java" class="langage__img">
                    </div>
                </div>
            </div>

            <h3 class="h3-sub-title">Compétences Tiers</h3>
            <div class="competence">
                <h4 class="h4-title">Réseaux Sociaux</h4>
                <div class="reseaux_sociaux grid__template">
                    <div class="langage">
                        <div class="langage__title">Facebook</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-facebook.png" alt="Logo Facebook" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">Instagram</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-instagram.png" alt="Logo Instagram" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">Youtube</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-youtube.png" alt="Logo Youtube" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">TikTok</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-tiktok.png" alt="Logo Tiktok" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">LinkedIn</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-linkedin.png" alt="Logo LinkedIn" class="langage__img">
                    </div>
                </div>
            </div>


            <div class="competence">
                <h4 class="h4-title">Bureautique</h4>
                <div class="bureautique grid__template">
                    <div class="langage">
                        <div class="langage__title">Suite Office 365</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-suite-office.png" alt="Logo Office 365" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">Google WorkSpace</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-google-workspace.png" alt="Logo Google WorkSpace" class="langage__img">
                    </div>
                </div>
            </div>

            <div class="competence">
                <h4 class="h4-title">Montage Photo/Vidéo</h4>
                <div class="montage__pv grid__template">
                    <div class="langage">
                        <div class="langage__title">Vegas Pro</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-vegas-pro.png" alt="Logo Vegas Pro" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">Filmora</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-filmora.png" alt="Logo Filmora" class="langage__img">
                    </div>
                    <div class="langage">
                        <div class="langage__title">Canva</div>
                        <img src="<?php echo $get_perma_link;?>uploads/logo-canva.png" alt="Logo Canva" class="langage__img">
                    </div>
                </div>
            </div>

        </section>

    </div>
    
    <?php
        include_once '../footer.php';
    ?>
</body>
</html>

