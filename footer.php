<?php
/**
 * @package WordPress
 * @subpackage Agrilife
 */
  $options = get_option('AgrilifeOptions');
  $isresearch 	= (is_array($options) ? $options['isResearch'] 	: true);
  $isextension	= (is_array($options) ? $options['isExtension'] : true);
  $iscollege 	= (is_array($options) ? $options['isCollege'] 	: true);
  $istvmdl	 	= (is_array($options) ? $options['isTvmdl'] 	: true);
  
  $collegeonly = ($iscollege && !$isextension && !$isresearch && !$istvmdl ? true : false);
  $footerhtml	= (is_array($options) ? $options['footerHtml'] 	: '');  
?>
<!-- begin footer -->
	<div id="agrilife-footer">
		<div id="agrilife-footer-box">
        	
        	<!-- 
        	
        	<?php
        	/*
        	$url = get_option('fileupload_url'); //get_option( 'siteurl' );
        	$path = $current_blog->path;
        	echo '1) https://'.DOMAIN_CURRENT_SITE.'/'.$path." END\n\n";
        	echo '2)'.$url;
			*/
			function unmapped_admin_link($link) {
				return str_replace('http','https', $link);
			}

			
			if ( defined( 'DOMAIN_MAPPING' ) ) {
				echo 'Mapped!';
				//echo "REQUEST_URI: ".$_SERVER[ 'REQUEST_URI' ];
				//add_filter( 'pre_option_siteurl', array(&$this, 'domain_mapping_siteurl') );
				//add_filter( 'pre_option_home', array(&$this, 'domain_mapping_home') );
				//add_filter( 'site_url', array(&$this, 'swap_mapped_url'), 10, 3);
				//add_filter('edit_post_link', 'unmapped_admin_link', 10, 2);


			} else {
				echo "No Mapping";
				//edit_post_link('You are Logged in: Edit this entry.', '', '');
			}
			
			
			        	?>
			        	-->
        	<?php edit_post_link('You are Logged in: Edit this entry.', '', ''); ?>
        	
        	<div id="tamus">
        	<?php if($collegeonly) : ?>
				<a href="http://www.tamu.edu"><img src="<?php echo THEME_TEMPLATEURL;?>/images/tamu-logo.gif" alt="Texas A&amp;M University" /></a>
        	<?php else: ?>
				<a href="http://www.tamus.edu"><img src="<?php echo THEME_TEMPLATEURL;?>/images/tamus-logo.gif" alt="Texas A&amp;M System" /></a>
			<?php endif; ?>
			</div>
			<div id="agrilife-site-info">		
            <div>
            	<?php echo $footerhtml;	?>
            </div>
  			&copy;  <script type="text/javascript">
						var d = new Date();
						document.write(d.getFullYear());
					</script> All rights reserved
				<ul>
					<li class="row-start"><a href="http://agrilife.tamu.edu/compact/">Compact with Texans</a></li>
					<li><a href="http://agrilife.tamu.edu/privacy/">Privacy and Security</a></li>
					<li><a href="http://itaccessibility.tamu.edu/">Accessibility Policy</a></li>
					<li><a href="http://www.dir.state.tx.us/standards/link_policy.htm">State Link Policy</a></li>
					<li><a href="http://www.tsl.state.tx.us/trail">Statewide Search</a></li>
					<li class="row-start"><a href="http://aghr.tamu.edu/education-civil-rights.htm">Equal Opportunity for Educational Programs Statement</a></li>
					<li><a href="http://www.tamus.edu/veterans/">Veterans Benefits</a></li>
					<li><a href="http://fcs.tamu.edu/families/military_families/">Military Families</a></li>
					<li class="row-start"><a href="https://secure.ethicspoint.com/domain/en/report_custom.asp?clientid=19681">Risk, Fraud &amp; Misconduct Hotline</a></li>
					<li><a href="http://www.texashomelandsecurity.com/">Texas Homeland Security</a></li>
					<li><a href="http://agrilife.tamu.edu/orpi/">Open Records/Public Information</a></li>
					<li class="row-start wp-footer"><a href="http://akismet.com/">Protected by Akismet</a></li>
					<li class="wp-footer"><a href="http://wordpress.com/">WordPress</a></li>
				</ul>
			</div><!-- #agrilife-site-info -->
		</div><!-- #agrilife-footer-box -->
	</div><!-- #agrilife-footer -->
<?php wp_footer(); ?>

<?php if ($options['googleAnalytics'] <> ''){ ?>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("<?php echo $options['googleAnalytics'];?>");
	pageTracker._trackPageview();
	} catch(err) {}</script>
<?php } ?>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-12777638-1");
	pageTracker._trackPageview();
	} catch(err) {}</script>
</body>
</html>