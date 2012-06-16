<div class="signature">
<?php
	$page = get_page_by_title( 'Signature' );

	if( $page){
		echo apply_filters('the_content', $page->post_content);
	}
	else{
?>

<img src="<?php bloginfo('template_directory'); ?>/images/signature-fedmich.png" width="190" height="56" alt="Kind Regards, Fedmich" title="Kind Regards, Fedmich" />
<?php
	}
?>
</div>