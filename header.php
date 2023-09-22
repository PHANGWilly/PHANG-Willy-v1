<?php
    require 'function.php';
?>
<header class="header">
    <div class="header__layout anim__height">
        <div class="site__nav">
            <div class="link">
                <a href="<?php echo $get_perma_link;?>" class="link__to ">
                    <img src="<?php echo $get_perma_link;?>uploads/logo_phang_willy.svg" alt="logo" class="link__to_logo">
                </a>
            </div>
        </div>
        <div class="site__nav">
            <div class="dropdown"  data-dropdown>
                <button class="dropdown__link" data-dropdown-button>Présentation <span class="fa-solid fa-angle-down anim__rotate"></span></button>
                <div class="dropdown__menu">
                    <div class="link">
                        <a href="<?php echo $get_perma_link;?>presentation/apprenti.php" class="link__to">Apprenti</a>
                    </div>
                    <div class="link">
                        <a href="<?php echo $get_perma_link;?>presentation/entreprise.php" class="link__to">Entreprise</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="site__nav">
            <div class="dropdown"  data-dropdown>
                <button class="dropdown__link" data-dropdown-button>Épreuve E4 <span class="fa-solid fa-angle-down anim__rotate"></span></button>
                <div class="dropdown__menu">
                    <div class="link">
                        <a href="<?php echo $get_perma_link;?>epreuve-e4/parcours-de-professionnalisation.php" class="link__to">Parcours de Professionnalisation</a>
                    </div>
                    <div class="link">
                        <a href="<?php echo $get_perma_link;?>epreuve-e4/missions-en-formation.php" class="link__to">Missions en Formation</a>
                    </div>
                    <div class="link">
                        <a href="<?php echo $get_perma_link;?>epreuve-e4/missions-en-entreprise.php" class="link__to">Missions en Entreprise</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="site__nav">
            <div class="link">
                <a href="<?php echo $get_perma_link;?>epreuve-e5.php" class="link__to">Épreuve E5</a>
            </div>
        </div>
        <div class="site__nav">
            <div class="link">
                <a href="<?php echo $get_perma_link;?>veille.php" class="link__to">Veille</a>
            </div>
        </div>
    </div>

    <div class="button__mobile">
        <button class="button__menu">
            <span class="menu__button fa-solid fa-bars"></span>
        </button>
    </div>

</header>

