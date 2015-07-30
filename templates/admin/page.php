<?php 
wp_enqueue_style('thickbox'); // call to media files in wp
wp_enqueue_script('thickbox');
wp_enqueue_script( 'media-upload');
 ?><div class="wrap" style="padding:2% 4%;">

   <h2>Bonobo Slider <a href="http://unscene.us/" style="font-size:80%; font-weight:normal;">by Mr. Unscene</a></h2>
   <h3>Settings Page / <a href="http://unscene.us/bonoboslider">FAQ</a></h3>
   <h4>Check the Options Below.</h4>
 
   <form method="POST" action="options.php" id="bvs">
				    <?php settings_fields( 'bvsStart' ); ?>
				    <!-- Wordpress documentation is wrong and suggests do_settings (which is for older versions below 2.7) -->
				    <?php do_settings_sections( 'bvsStart' ); ?>
      	<ul class="actions">
            <li class="node"><span>Podcast <i class="icon-arrowleft"></i></span>
            <div class="message">
				    <table class="form-table">
				        <tr valign="top">
				        <th scope="row">Include Google Hosted jQuery (1.6)?</th>
				        <td><input type="radio" name="bvsjQuery" value="1" <?php if ( get_option('bvsjQuery' ) == '1' ){ echo 'checked';}?> /> Yes <br />
				        	<input type="radio" name="bvsjQuery" value="2" <?php if ( get_option('bvsjQuery' ) == '2' ){ echo 'checked';}?> /> No <br />
				        </td>
				        </tr>
				       </table>
            </div></li>
            <li class="node"><span>Help <i class="icon-arrowleft"></i></span>
            <div class="message">
				    Need help, contact <a href="http://unscene.us/contact">abe</a>
            </div></li>
        </ul>
		<?php submit_button(); ?>
</form>

   <a href="http://unscene.us" target="_blank" style="display:inline-block; padding: 15px 40px; margin:0 10px; border-radius: 4px;color:#fff; background:#333; font-weight:700; text-decoration:none">Hire a Developer</a>
   <a href="http://unscene.us/thanks" target="_blank" style="display:inline-block; padding: 15px 40px; margin:0 10px; border-radius: 4px;color:#000; background:#00ecbd; font-weight:700; text-decoration:none">Donate with PayPal<i class="icon-paypal" style="margin-left:10px;"></i></a>
</div>
<script src="/wp-content/plugins/bonoboslider/js/script.js"></script>