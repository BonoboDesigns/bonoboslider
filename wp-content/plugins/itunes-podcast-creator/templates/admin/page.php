<?php 
wp_enqueue_style('thickbox'); // call to media files in wp
wp_enqueue_script('thickbox');
wp_enqueue_script( 'media-upload');
 ?><div class="wrap" style="padding:2% 4%;">

   <h3>iTunes Podcast Creator <a href="http://unscene.us/" style="font-size:80%; font-weight:normal;">by Mr. Unscene</a></h3>
   <h4>A lot of new features for awesome site with easy customization..</h4>
 
   <form method="POST" action="options.php" id="iTunes">
				    <?php settings_fields( 'iTunesFeedStart' ); ?>
				    <!-- Wordpress documentation is wrong and suggests do_settings (which is for older versions below 2.7) -->
				    <?php do_settings_sections( 'iTunesFeedStart' ); ?>
      	<ul class="actions">
            <li class="node"><span>Podcast <i class="icon-arrowleft"></i></span>
            <div class="message">
				    <table class="form-table">
				        <tr valign="top">
				        <th scope="row">Activate iTunes Feed Sync</th>
				        <td><input type="radio" name="iTunesFeedSync" value="1" <?php if ( get_option('iTunesFeedSync' ) == '1' ){ echo 'checked';}?> /> Yes <br />
				        	<input type="radio" name="iTunesFeedSync" value="2" <?php if ( get_option('iTunesFeedSync' ) == '2' ){ echo 'checked';}?> /> No <br />
				        </td>
				        </tr>
				        <tr valign="top">
				        <th scope="row">Podcast Details</th>
				        <td><div id="iTunesPodcastImage_thumb" class="wpss-file">
    <?php if(get_option('iTunesPodcastImage') !='' ){ ?>
       <img src="<?php echo get_option('iTunesPodcastImage'); ?>"  width="100%"/><?php } else {    echo $defaultImage; } ?>
</div> 
<input id="iTunesPodcastImage" type="text" size="36" style="direction:rtl; width:100%;" name="iTunesPodcastImage" value="<?php echo get_option('iTunesPodcastImage'); ?>" class="wpss_text wpss-file" />
				        <td><input id="iTunesPodcastImage_button" type="button" value="Upload Image" class="wpss-filebtn" /></td></td>
				        </tr>
				        <tr valign="top">
				        <th scope="row">Podcast Details</th>
				        <td>Name: <input type="text" name="iTunesAuthorName" value="<?php echo get_option('iTunesAuthorName'); ?>" /></td>
				        <td>Email: <input type="text" name="iTunesAuthorEmail" value="<?php echo get_option('iTunesAuthorEmail'); ?>" /></td>
				        </tr>
				        <tr valign="top">
				        	<th scope="row">Podcast Summary</th>
							<td>Podcast Summary: <input type="text" name="iTunesPodcastSummary" value="<?php echo get_option('iTunesPodcastSummary'); ?>" style="width:100%; height:auto;"/></td>
						</tr>
						<tr valign="top">
				        	<th scope="row">Explicit?</th>
							<td><input type="radio" name="iTunesExplicit" value="1" <?php if ( get_option('iTunesExplicit' ) == '1' ){ echo 'checked';}?> /> Yes<br />
								<input type="radio" name="iTunesExplicit" value="2" <?php if ( get_option('iTunesExplicit' ) == '2' ){ echo 'checked';}?> /> Clean <br /></td>
						</tr>
						<tr valign="top">
				        	<th scope="row">Category:</th>
							<td><input type="checkbox" class="main" name="Arts" value="Arts" <?php if ( get_option('iTunesCategories' ) == 'Arts' ) : echo ' checked="checked"' ; endif ?> > Arts
<input type="checkbox" name="Design" value="Design" <?php if ( get_option('iTunesCategories' ) == 'Design' ) : echo ' checked="checked"' ; endif ?> > Design
<input type="checkbox" name="FashionBeauty" value="FashionBeauty" <?php if ( get_option('iTunesCategories' ) == 'FashionBeauty' ) : echo ' checked="checked"' ; endif ?> > Fashion &amp; Beauty
<input type="checkbox" name="Food" value="Food" <?php if ( get_option('iTunesCategories' ) == 'Food' ) : echo ' checked="checked"' ; endif ?> > Food
<input type="checkbox" name="Literature" value="Literature" <?php if ( get_option('iTunesCategories' ) == 'Literature' ) : echo ' checked="checked"' ; endif ?> > Literature
<input type="checkbox" name="Performing Arts" value="Performing Arts" <?php if ( get_option('iTunesCategories' ) == 'Performing Arts' ) : echo ' checked="checked"' ; endif ?> > Performing Arts
<input type="checkbox" name="Visual Arts" value="Visual Arts" <?php if ( get_option('iTunesCategories' ) == 'Visual Arts' ) : echo ' checked="checked"' ; endif ?> > Visual Arts
<input type="checkbox" class="main" name="Business" value="Business" <?php if ( get_option('iTunesCategories' ) == 'Business' ) : echo ' checked="checked"' ; endif ?> > Business
<input type="checkbox" name="Business News" value="Business News" <?php if ( get_option('iTunesCategories' ) == 'Business News' ) : echo ' checked="checked"' ; endif ?> > Business News
<input type="checkbox" name="Careers" value="Careers" <?php if ( get_option('iTunesCategories' ) == 'Careers' ) : echo ' checked="checked"' ; endif ?> > Careers
<input type="checkbox" name="Investing" value="Investing" <?php if ( get_option('iTunesCategories' ) == 'Investing' ) : echo ' checked="checked"' ; endif ?> > Investing
<input type="checkbox" name="ManagementMarketing" value="ManagementMarketing" <?php if ( get_option('iTunesCategories' ) == 'ManagementMarketing' ) : echo ' checked="checked"' ; endif ?> > Management &amp; Marketing
<input type="checkbox" name="Shopping" value="Shopping" <?php if ( get_option('iTunesCategories' ) == 'Shopping' ) : echo ' checked="checked"' ; endif ?> > Shopping
<input type="checkbox" class="main" name="Comedy" value="Comedy" <?php if ( get_option('iTunesCategories' ) == 'Comedy' ) : echo ' checked="checked"' ; endif ?> > Comedy
<input type="checkbox" class="main" name="Education" value="Education" <?php if ( get_option('iTunesCategories' ) == 'Education' ) : echo ' checked="checked"' ; endif ?> > Education
<input type="checkbox" name="Education" value="Education" <?php if ( get_option('iTunesCategories' ) == 'Education' ) : echo ' checked="checked"' ; endif ?> > Education
<input type="checkbox" name="Education Technology" value="Education Technology" <?php if ( get_option('iTunesCategories' ) == 'Education Technology' ) : echo ' checked="checked"' ; endif ?> > Education Technology
<input type="checkbox" name="Higher Education" value="Higher Education" <?php if ( get_option('iTunesCategories' ) == 'Higher Education' ) : echo ' checked="checked"' ; endif ?> > Higher Education
<input type="checkbox" name="K-12" value="K-12" <?php if ( get_option('iTunesCategories' ) == 'K-12' ) : echo ' checked="checked"' ; endif ?> > K-12
<input type="checkbox" name="Language Courses" value="Language Courses" <?php if ( get_option('iTunesCategories' ) == 'Language Courses' ) : echo ' checked="checked"' ; endif ?> > Language Courses
<input type="checkbox" name="Training" value="Training" <?php if ( get_option('iTunesCategories' ) == 'Training' ) : echo ' checked="checked"' ; endif ?> > Training
<input type="checkbox" class="main" name="GamesHobbies" value="GamesHobbies" <?php if ( get_option('iTunesCategories' ) == 'GamesHobbies' ) : echo ' checked="checked"' ; endif ?> > Games &amp; Hobbies
<input type="checkbox" name="Automotive" value="Automotive" <?php if ( get_option('iTunesCategories' ) == 'Automotive' ) : echo ' checked="checked"' ; endif ?> > Automotive
<input type="checkbox" name="Aviation" value="Aviation" <?php if ( get_option('iTunesCategories' ) == 'Aviation' ) : echo ' checked="checked"' ; endif ?> > Aviation
<input type="checkbox" name="Hobbies" value="Hobbies" <?php if ( get_option('iTunesCategories' ) == 'Hobbies' ) : echo ' checked="checked"' ; endif ?> > Hobbies
<input type="checkbox" name="Other Games" value="Other Games" <?php if ( get_option('iTunesCategories' ) == 'Other Games' ) : echo ' checked="checked"' ; endif ?> > Other Games
<input type="checkbox" name="Video Games" value="Video Games" <?php if ( get_option('iTunesCategories' ) == 'Video Games' ) : echo ' checked="checked"' ; endif ?> > Video Games
<input type="checkbox" class="main" name="GovernmentOrganizations" value="GovernmentOrganizations" <?php if ( get_option('iTunesCategories' ) == 'GovernmentOrganizations' ) : echo ' checked="checked"' ; endif ?> > Government &amp; Organizations
<input type="checkbox" name="Local" value="Local" <?php if ( get_option('iTunesCategories' ) == 'Local' ) : echo ' checked="checked"' ; endif ?> > Local
<input type="checkbox" name="National" value="National" <?php if ( get_option('iTunesCategories' ) == 'National' ) : echo ' checked="checked"' ; endif ?> > National
<input type="checkbox" name="Non-Profit" value="Non-Profit" <?php if ( get_option('iTunesCategories' ) == 'Non-Profit' ) : echo ' checked="checked"' ; endif ?> > Non-Profit
<input type="checkbox" name="Regional" value="Regional" <?php if ( get_option('iTunesCategories' ) == 'Regional' ) : echo ' checked="checked"' ; endif ?> > Regional
<input type="checkbox" class="main" name="Health" value="Health" <?php if ( get_option('iTunesCategories' ) == 'Health' ) : echo ' checked="checked"' ; endif ?> > Health
<input type="checkbox" name="Alternative Health" value="Alternative Health" <?php if ( get_option('iTunesCategories' ) == 'Alternative Health' ) : echo ' checked="checked"' ; endif ?> > Alternative Health
<input type="checkbox" name="FitnessNutrition" value="FitnessNutrition" <?php if ( get_option('iTunesCategories' ) == 'FitnessNutrition' ) : echo ' checked="checked"' ; endif ?> > Fitness &amp; Nutrition
<input type="checkbox" name="Self-Help" value="Self-Help" <?php if ( get_option('iTunesCategories' ) == 'Self-Help' ) : echo ' checked="checked"' ; endif ?> > Self-Help
<input type="checkbox" name="Sexuality" value="Sexuality" <?php if ( get_option('iTunesCategories' ) == 'Sexuality' ) : echo ' checked="checked"' ; endif ?> > Sexuality
<input type="checkbox" class="main" name="KidsFamily" value="KidsFamily" <?php if ( get_option('iTunesCategories' ) == 'KidsFamily' ) : echo ' checked="checked"' ; endif ?> > Kids &amp; Family
<input type="checkbox" class="main" name="Music" value="Music" <?php if ( get_option('iTunesCategories' ) == 'Music' ) : echo ' checked="checked"' ; endif ?> > Music
<input type="checkbox" class="main" name="NewsPolitics" value="NewsPolitics" <?php if ( get_option('iTunesCategories' ) == 'NewsPolitics' ) : echo ' checked="checked"' ; endif ?> > News &amp; Politics
<input type="checkbox" class="main" name="ReligionSpirituality" value="ReligionSpirituality" <?php if ( get_option('iTunesCategories' ) == 'ReligionSpirituality' ) : echo ' checked="checked"' ; endif ?> > Religion &amp; Spirituality
<input type="checkbox" name="Buddhism" value="Buddhism" <?php if ( get_option('iTunesCategories' ) == 'Buddhism' ) : echo ' checked="checked"' ; endif ?> > Buddhism
<input type="checkbox" name="Christianity" value="Christianity" <?php if ( get_option('iTunesCategories' ) == 'Christianity' ) : echo ' checked="checked"' ; endif ?> > Christianity
<input type="checkbox" name="Hinduism" value="Hinduism" <?php if ( get_option('iTunesCategories' ) == 'Hinduism' ) : echo ' checked="checked"' ; endif ?> > Hinduism
<input type="checkbox" name="Islam" value="Islam" <?php if ( get_option('iTunesCategories' ) == 'Islam' ) : echo ' checked="checked"' ; endif ?> > Islam
<input type="checkbox" name="Judaism" value="Judaism" <?php if ( get_option('iTunesCategories' ) == 'Judaism' ) : echo ' checked="checked"' ; endif ?> > Judaism
<input type="checkbox" name="Other" value="Other" <?php if ( get_option('iTunesCategories' ) == 'Other' ) : echo ' checked="checked"' ; endif ?> > Other
<input type="checkbox" name="Spirituality" value="Spirituality" <?php if ( get_option('iTunesCategories' ) == 'Spirituality' ) : echo ' checked="checked"' ; endif ?> > Spirituality
<input type="checkbox" class="main" name="ScienceMedicine" value="ScienceMedicine" <?php if ( get_option('iTunesCategories' ) == 'ScienceMedicine' ) : echo ' checked="checked"' ; endif ?> > Science &amp; Medicine
<input type="checkbox" name="Medicine" value="Medicine" <?php if ( get_option('iTunesCategories' ) == 'Medicine' ) : echo ' checked="checked"' ; endif ?> > Medicine
<input type="checkbox" name="Natural Sciences" value="Natural Sciences" <?php if ( get_option('iTunesCategories' ) == 'Natural Sciences' ) : echo ' checked="checked"' ; endif ?> > Natural Sciences
<input type="checkbox" name="Social Sciences" value="Social Sciences" <?php if ( get_option('iTunesCategories' ) == 'Social Sciences' ) : echo ' checked="checked"' ; endif ?> > Social Sciences
<input type="checkbox" class="main" name="SocietyCulture" value="SocietyCulture" <?php if ( get_option('iTunesCategories' ) == 'SocietyCulture' ) : echo ' checked="checked"' ; endif ?> > Society &amp; Culture
<input type="checkbox" name="History" value="History" <?php if ( get_option('iTunesCategories' ) == 'History' ) : echo ' checked="checked"' ; endif ?> > History
<input type="checkbox" name="Personal Journals" value="Personal Journals" <?php if ( get_option('iTunesCategories' ) == 'Personal Journals' ) : echo ' checked="checked"' ; endif ?> > Personal Journals
<input type="checkbox" name="Philosophy" value="Philosophy" <?php if ( get_option('iTunesCategories' ) == 'Philosophy' ) : echo ' checked="checked"' ; endif ?> > Philosophy
<input type="checkbox" name="PlacesTravel" value="PlacesTravel" <?php if ( get_option('iTunesCategories' ) == 'PlacesTravel' ) : echo ' checked="checked"' ; endif ?> > Places &amp; Travel
<input type="checkbox" class="main" name="SportsRecreation" value="SportsRecreation" <?php if ( get_option('iTunesCategories' ) == 'SportsRecreation' ) : echo ' checked="checked"' ; endif ?> > Sports &amp; Recreation
<input type="checkbox" name="Amateur" value="Amateur" <?php if ( get_option('iTunesCategories' ) == 'Amateur' ) : echo ' checked="checked"' ; endif ?> > Amateur
<input type="checkbox" name="CollegeHigh School" value="CollegeHigh School" <?php if ( get_option('iTunesCategories' ) == 'CollegeHigh School' ) : echo ' checked="checked"' ; endif ?> > College &amp; High School
<input type="checkbox" name="Outdoor" value="Outdoor" <?php if ( get_option('iTunesCategories' ) == 'Outdoor' ) : echo ' checked="checked"' ; endif ?> > Outdoor
<input type="checkbox" name="Professional" value="Professional" <?php if ( get_option('iTunesCategories' ) == 'Professional' ) : echo ' checked="checked"' ; endif ?> > Professional
<input type="checkbox" class="main" name="Technology" value="Technology" <?php if ( get_option('iTunesCategories' ) == 'Technology' ) : echo ' checked="checked"' ; endif ?> > Technology
<input type="checkbox" name="Gadgets" value="Gadgets" <?php if ( get_option('iTunesCategories' ) == 'Gadgets' ) : echo ' checked="checked"' ; endif ?> > Gadgets
<input type="checkbox" name="Tech News" value="Tech News" <?php if ( get_option('iTunesCategories' ) == 'Tech News' ) : echo ' checked="checked"' ; endif ?> > Tech News
<input type="checkbox" name="Podcasting" value="Podcasting" <?php if ( get_option('iTunesCategories' ) == 'Podcasting' ) : echo ' checked="checked"' ; endif ?> > Podcasting
<input type="checkbox" class="main" name="oftware How-To" value="Software How-To" <?php if ( get_option('iTunesCategories' ) == 'Software How-To' ) : echo ' checked="checked"' ; endif ?> > Software How-To
<input type="checkbox" name="TVFilm" value="TVFilm" <?php if ( get_option('iTunesCategories' ) == 'TVFilm' ) : echo ' checked="checked"' ; endif ?> > TV &amp; Film
</td>
						</tr>
				       </table>
            </div></li>
            <li class="node"><span>Podcast <i class="icon-arrowleft"></i></span>
            <div class="message">
				    <table class="form-table">
				        <tr valign="top">
				        <th scope="row">Activate iTunes Feed Sync</th>
				        <td><input type="radio" name="UnsceneMusicPlayer" value="1" <?php if ( get_option('UnsceneMusicPlayer' ) == '1' ){ echo 'checked';}?> /> Yes <br />
				        	<input type="radio" name="UnsceneMusicPlayer" value="2" <?php if ( get_option('UnsceneMusicPlayer' ) == '2' ){ echo 'checked';}?> /> No <br />
				        </td>
				        </tr>
				    </table>
            </div></li>
        </ul>
		<?php submit_button(); ?>
</form>
<!-- 
   <a href="http://unscene.us" target="_blank" style="display:inline-block; padding: 15px 40px; margin:0 10px; border-radius: 4px;color:#fff; background:#333; font-weight:700; text-decoration:none">Hire a Developer</a>
   <a href="http://unscene.us" target="_blank" style="display:inline-block; padding: 15px 40px; margin:0 10px; border-radius: 4px;color:#000; background:#00ecbd; font-weight:700; text-decoration:none">Donate with PayPal<i class="icon-paypal" style="margin-left:10px;"></i></a>
   <div><form action="http://groups.google.com/group/drsuzybonoboville/boxsubscribe">
      Email:
      <input type="text" name="email">
      <input type="submit" name="sub" value="Subscript">
</form></div> -->
</div>