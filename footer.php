<!-- Footer-->
  <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4"><?php echo get_option("configs_list_footer_column_1_title"); ?></h4>
                        <p class="lead mb-0">
                        <?php echo get_option("configs_list_footer_column_1_description"); ?>
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4"><?php echo get_option("configs_list_footer_column_2_title"); ?></h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_option("configs_list_facebook_link"); ?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_option("configs_list_twitter_link"); ?>"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_option("configs_list_linkedin_link"); ?>"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4"><?php echo get_option("configs_list_footer_column_3_title"); ?></h4>
                        <p class="lead mb-0">
                        <?php echo get_option("configs_list_footer_column_3_description"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small><?php echo get_option("configs_list_copyright_text"); ?> <?php echo date("Y"); ?></small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>        
       <?php wp_footer(); ?>
    </body>
</html>
