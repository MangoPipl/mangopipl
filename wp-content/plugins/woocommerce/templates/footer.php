<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit - 20
			 */
			do_action( 'storefront_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
	<script type="text/javascript">

(function(){
console.log("function running...");
var url = window.location.href;
if(jQuery( document ).width() > 768 && (url.split('?').length<=1 || url.indexOf('page_id=438') >-1 ))
{	
if(url.indexOf('page_id=438') >-1)
{
jQuery(".site-content > .col-full > .content-area").css('width','100%');
jQuery(".site-content").css('margin-top','-60px');
jQuery(".site-content > .col-full").css('width','100%').css('max-width','none');
jQuery(".entry-header").css('margin-left','25px').css('margin-right','25px');
jQuery(".widget-area").css('display','none');
jQuery(".entry-content").css('margin-left','25px').css('margin-right','25px');
}
else{
jQuery(".site-content > .col-full > .content-area").css('width','100%');
jQuery(".site-content").css('margin-top','-65px').css('margin-left','1px').css('margin-right','1px');
jQuery(".site-content > .col-full").css('width','100%').css('max-width','none');
jQuery(".entry-header").css('margin-left','25px').css('margin-right','25px');
jQuery(".widget-area").css('display','none');
}
}
})();

</script>

</body>
</html>
