<?php
    require 'function.php';
?>

<footer class="footer">
    <div class="footer__layout">
        <div class="site__nav">
            <div class="link">
                <a href="<?php echo $get_perma_link;?>plan-du-site.php" class="link__to">Plan du Site</a>
            </div>
        </div>
        <div class="site__nav">
            <div class="link">
                <a href="<?php echo $get_perma_link;?>mentions-legales.php" class="link__to">Mentions Légales</a>
            </div>
        </div>
        <div class="site__nav">
            <div class="link">
                <a href="<?php echo $get_perma_link;?>contact.php" class="link__to">Contact</a>
            </div>
        </div>        
    </div>

    <div class="footer__layout_2"> 

        <div class="date">
            PHANG Willy © <?php echo date("Y");?>
        </div>
    </div>
</footer>