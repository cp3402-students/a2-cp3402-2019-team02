<?php

class Meow_Gallery_Custom_Links_Admin { // extends MeowApps_Admin

	public $core;

	public function __construct( $prefix, $mainfile, $domain ) {
		//parent::__construct( $prefix, $mainfile, $domain );
		if ( is_admin() ) {
			add_filter( 'attachment_fields_to_edit', array( $this, 'attachment_fields_to_edit' ), 10, 2 );
			add_filter( 'attachment_fields_to_save', array( $this, 'apply_filter_attachment_fields_to_save' ), 10 , 2 );
		}
	}

	function attachment_fields_to_edit( $fields, $post ) {
		$fields['gallery_link_url'] = array(
			'label' => __( 'Link URL', 'gallery-custom-links' ),
			'input' => 'text',
			'value' => get_post_meta( $post->ID, '_gallery_link_url', true )
		);
		$target_value = get_post_meta( $post->ID, '_gallery_link_target', true );
		$fields['gallery_link_target'] = array(
			'label' => __( 'Link Target', 'gallery-custom-links' ),
			'input' => 'html',
			'html'  => '
				<select class="widefat" name="attachments[' . $post->ID . '][gallery_link_target]" id="attachments[' . $post->ID . '][gallery_link_target]">
					<option value="_self"' . ( $target_value == '_self' ? ' selected="selected"' : '' ) . '>' .
						__( 'Same page', 'gallery-custom-links' ) .
					'</option>
					<option value="_blank"' . ( $target_value == '_blank' ? ' selected="selected"' : '' ) . '>' .
						__( 'New page', 'gallery-custom-links' ) .
					'</option>
				</select>'
			);
		$rel_value = get_post_meta( $post->ID, '_gallery_link_rel', true );
		$fields['gallery_link_rel'] = array(
			'label' => __( 'Link Rel', 'gallery-custom-links' ),
			'input' => 'html',
			'html'  => '
				<select class="widefat" name="attachments[' . $post->ID . '][gallery_link_rel]" id="attachments[' . $post->ID . '][gallery_link_rel]">
					<option value=""' . ( $rel_value == '' ? ' selected="selected"' : '' ) . '>' .
						__( 'None', 'gallery-custom-links' ) .
					'</option>
					<option value="nofollow"' . ( $rel_value == 'nofollow' ? ' selected="selected"' : '' ) . '>' .
						__( 'No Follow', 'gallery-custom-links' ) .
					'</option>
				</select>'
			);
		return $fields;
	}

	function apply_filter_attachment_fields_to_save( $post, $attachment ) {
		if ( isset( $attachment['gallery_link_url'] ) )
			update_post_meta( $post['ID'], '_gallery_link_url', $attachment['gallery_link_url'] );
		if ( isset( $attachment['gallery_link_target'] ) )
			update_post_meta( $post['ID'], '_gallery_link_target', $attachment['gallery_link_target'] );
		if ( isset( $attachment['gallery_link_rel'] ) )
			update_post_meta( $post['ID'], '_gallery_link_rel', $attachment['gallery_link_rel'] );
		return $post;
	}

}

?>