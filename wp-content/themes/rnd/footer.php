<footer class="footer">
    <div class="container">
        <?php 
            if(is_active_sidebar( 'sidebar-footer' ) ):
                dynamic_sidebar('sidebar-footer');
            endif;
        ?>
        <p class="footer__copyright">© 2021 SHYNH PREMIUM.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>