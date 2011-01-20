<?php
/**
 * @package WordPress
 * @subpackage Agrilife
 */
get_header();
?>
		<div id="content">
			<div id="sidecontent">
		    <?php if ( function_exists( "yoast_breadcrumb" ) ) yoast_breadcrumb('', ''); ?>
				<div id="main_content">            
					<div id="404-page">
					  <h2>Something's Missing</h2>
					  <div class="storycontent">
					    
					    <img src="<?php bloginfo('template_directory'); ?>/images/404.jpg" alt="404" />
					    <p>Sorry, we seem to have misplaced something.</p>
					    <ul>
					    	<li>You can <label for="s"><?php _e('search'); ?></label> for what you are looking for;
					        <form id="search404" method="get" action="<?php bloginfo('home'); ?>">
					       
					            <input type="text" name="s" id="s" maxlength="256" onfocus="this.value=''; this.onfocus=null;" value="Search The Site" />
					            <input type="button" value="Search" alt="Search" name="search" />
					        
					        </form>
					        </li>
					        <li>Or go to the <a href="<?php bloginfo('home'); ?>">Home page</a>.</li>
					    </ul>
					  </div>
					</div>
				</div><!-- #main_content -->
			</div><!-- #sidecontent -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>	
		</div><!-- #content -->
	</div><!-- #main-box -->
	<div id="main-box-bottom"></div>
</div><!-- #main -->

<?php get_footer(); ?>
