<?php

echo foo_close(); // #principal

$reader = foo_link("pdf","http://foocoop.mx/tst/SITAC12.pdf");

echo foo_div("reader", "large-6 columns", $reader);

echo foo_close(); // #contenedor

?>


<!-- Footer -->
<footer id="footer" class="row">
<?php 
	$logos = foo_img( themeDir()."/img/logos.png");
	$logos = foo_div("logos","",$logos);		
	echo $logos;
?>
</footer>
<!-- End Footer -->

<?php wp_footer(); ?>

</body>

<script type="text/javascript">

jQuery(document).ready(function($) {
   var link = $('#reader a').html();
   $('#reader a').gdocsViewer();
   /* $('reader').PDFDoc( { source : '/home/furenku/chamba/web/proyectos/SITAC/SITAC12.pdf' } ); */
});


//var $j = jQuery.noConflict();


</script>

</html>
