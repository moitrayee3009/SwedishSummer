<?php
/**
 * The template for displaying the footer
 */
?>

</main>
<footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="<?php echo site_url(''); ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/blog'); ?>">Blog</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/projects'); ?>">Projects</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/about'); ?>">About</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/contact'); ?>">Contact</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/privacy'); ?>">Privacy Policy</a>
                        </li>
                       
                    </ul>
                </p>
            </div>
            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p> “Be yourself; everyone else is already taken.”</p>
            </div>

        </footer>
    


    <?php wp_footer(); ?>
</body>

</html>
        
 