			<footer>
                <div class="container">
                    <div class="top-footer">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="subscribe-form">
                                    <span>Get in touch with us</span>
                                    <form method="get" class="subscribeForm">
                                        <input id="subscribe" type="text" />
                                        <input type="submit" id="submitButton" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="social-bottom">
                                    <span>Follow us:</span>
                                    <ul>
                                        <li><a href="https://www.facebook.com/pages/True-Love-Cafe/130325596999182" class="fa fa-facebook"></a></li>
                                        <li><a href="https://twitter.com/TheTrueLoveCafe" class="fa fa-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-footer">
                        <div class="row">
                           
                               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1'))  : ?>
                               <?php endif; ?>
                           
                        </div>
                    </div>
                    
                </div>
            </footer>

    
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.0.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.gmap3.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
    </body>
</html>