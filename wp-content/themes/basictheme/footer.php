<?php
/**
 * The template for displaying the footer
 */
?>

	</div><!-- #content -->


<div class="custom-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('footer-1');
                ?>
            </div>
            <div class="col-md-7">
                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('footer-2');
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
            <p>© Tools&Dies 2019    /    Algemene Voorwaarden     /    Privacy Policy </p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
