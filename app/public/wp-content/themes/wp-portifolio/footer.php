<footer>
    <nav>
        <ul id= "social-icons">
            <li>
                linkedin
            </li>
            <li>
                telegram
            </li>
            <li>
                github
            </li>
        </ul>
    </nav>
    <?php wp_nav_menu(
        array(
            'theme_location' => 'footer_menu', /* mostra o local que deve ser exibido o footer_menu ao ser selecionado no painel */
        )
    );?>
</footer>
<?php wp_footer(); ?>

</body>
</html>