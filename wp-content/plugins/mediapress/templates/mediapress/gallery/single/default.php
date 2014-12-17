<?php
/**
 * @package mediapress
 * @subpackage mpp-base
 * 
 * Lists all the media inside a gallery
 *	
 * Fallback single Gallery View
 */
?>
<?php if( mpp_have_media() ): ?>

    <?php if( mpp_user_can_list_media( mpp_get_current_gallery_id() ) ):?>

		<?php $type = mpp_get_gallery_type(); ?>
		<div class='mpp-g mpp-item-list mpp-media-list mpp-<?php echo $type;?>-list mpp-single-gallery-media-list mpp-single-gallery-<?php echo $type;?>-list'>
			
			<?php mpp_get_template_part( 'gallery/media/loop', $type );?>
			
		</div>

        <?php mpp_media_pagination(); ?>
		<?php mpp_locate_template( array('gallery/activity/gallery-activity.php'), true ); ?>

    <?php else:?>

            <div class="mpp-notice mpp-gallery-prohibited">

                <p><?php printf( __( 'The privacy policy does not allow you to view this.', 'mediapress' ) ); ?></p>
                
            </div>

    <?php endif;?>
        
<?php else:?>

    <div class="mpp-notice mpp-no-gallery-notice">
        <p> <?php _ex( 'Nothing to see here!', 'No Gallery Message', 'mediapress' ); ?> 
    </div>

<?php endif;?>