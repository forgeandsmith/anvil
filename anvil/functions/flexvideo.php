<?php 
	/*	FLEXVIDEO.PHP

		Automatically add Flex-video around iframe videos
		
	*/
// 
function forge_embed_filter( $output, $data, $url ) {
 
	$return = '<div class="flex-video">'.$output.'</div>';
	return $return;
 
}
add_filter('oembed_dataparse', 'forge_embed_filter', 90, 3 );

?>