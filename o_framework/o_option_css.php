<style type="text/css">
body {
<?php 
if ( function_exists( 'ot_get_option' ) ) {
	$bg_img = ot_get_option('bg_img_body', '', false, true); 
	if ( ! empty( $bg_img  ) ) {
		if ( ! empty($bg_img['background-color']) ) {
		echo 'background-color:' . $bg_img['background-color'] . ';';
		} 
		if ( ! empty($bg_img['background-image']) ) {
		echo 'background-image:url(' . $bg_img['background-image'] . ');';		
		}
		if ( ! empty($bg_img['background-repeat']) ) {
		echo 'background-repeat:' . $bg_img['background-repeat'] . ';';		
		}
		if ( ! empty($bg_img['background-attachment']) ) {
		echo 'background-attachment:' . $bg_img['background-attachment'] . ';';		
		}
		
	}
}
?>

}

</style>