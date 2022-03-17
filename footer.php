<footer class="site__footer">
    <!-- Première rangée de colonne -->
    <div class="site__footer__colonne">

        <section class="footer__article">
            <?php get_sidebar('footer_colonne_1'); ?>
        </section>

        <section class="footer__adresse">
            <?php get_sidebar('footer_colonne_2'); ?>
        </section>

        <section class="footer__liens">
            <?php get_sidebar('footer_colonne_3'); ?>
        </section>
    </div>


    <!-- Section de plusieurs lignes -->
    <div class="site__footer__ligne">
        <section class="footer__description">
            <section class="footer__nav"> </section>

            <!-- Ajout de liens des réseaux sociaux -->
            <section class="footer__sociaux">
                <?php get_sidebar('footer_ligne_1'); ?>
            </section>

            <section class="copyright"> </section>

            <section class="footer__auteur">
                <p> ©copyright tous droits réservés à Ngoc Quynh Pham </p>
            </section>

            <section class="footer__adresse_college">
                <p> Adresse: 3800 Sherbrooke St E, Montreal, Quebec H1X 2A2 </p>
            </section>

            <section class="footer__menu">
            <?php
            $icone = '<svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838l-2.727 1.17 1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zm5.99 7.176A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path></svg>';
             wp_nav_menu(array(
                    "menu"=>"simple",
                    "container"=>"nav",
                    "container_class"=>"footer__menu__nav",
                    "menu_class"=>"footer__menu__nav__ul",
                    "link_before"=>$icone)); ?>
                    
                    <div class="footer__recherche">
            </section>

            <section class="footer__recherche">
                <?php get_search_form(); ?>
            </section>
        </section>
    </div>
</footer>

</body>
<?php wp_footer(); ?>
</html>