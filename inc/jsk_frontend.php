<?php

class JSkeletonMain {
	
    public function JSkeletonInit(){
		
        wp_enqueue_style("jsk_animation_style",JSK_CSS."JSkeleton.css","",JSK_VERSION);
        
		function JSK_edit_img( $content ) {

			$pattern = '/(<img([^>]*)>)/i';
			$replacement = '<div class="myphoto">$1</div>';
			$content = preg_replace( $pattern, $replacement, $content );
			$addAttr = str_replace('<img','<img onload="this.parentNode.classList.remove(\'myphoto\');"', $content);
		 
			return $addAttr;
		 }
		 
		add_filter( 'the_content', 'JSK_edit_img' );
    }
}
if(!is_admin()){
	$JSkeletonMain = new JSkeletonMain();
	$JSkeletonMain->JSkeletonInit();
}
