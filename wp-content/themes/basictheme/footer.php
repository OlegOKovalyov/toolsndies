<?php
/**
 * The template for displaying the footer
 */
?>

	</div><!-- #content -->


    <div class="custom-footer">
        <div class="container">
            <div class="row">
                <div class="footer_logo_soc col-lg-6">
                    <?php
                    if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('footer-1');
                    ?>
                </div>
                <div class="footer_menu_contacts col-lg-6">
                    <?php
                    if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('footer-3');
                    ?>
                </div>
            </div>
        </div>
        <?php
        if ( function_exists('dynamic_sidebar') )
            dynamic_sidebar('footer-widget');
        ?>
    </div>

	<footer id="colophon" class="site-footer">
		<div class="site-info text-center">
            <p>© Tools&Dies 2019<span class="gap">/</span>
                <span class="under_line">
                        <a href="">Algemene Voorwaarden</a>
                </span><span class="gap">/</span>
                <span class="under_line">
                        <a href="">Privacy Polisy</a>
                </span></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $('.menu-btn').on('click', function (e) {
        e.preventDefault();
        $(".menu-btn").toggleClass("menu-active");
        $(".menu-wrap").toggleClass("menu-active");
    })
</script>


</body>
</html>
