<?php
/**
 * @package WordPress
 * @subpackage Agrilife_Theme
 */
 
  $options = get_option('AgrilifeOptions');
 
  GLOBAL $options;

  $isresearch 	= (is_array($options) ? $options['isResearch'] 	: true);
  $isextension	= (is_array($options) ? $options['isExtension'] : true);
  $iscollege 	= (is_array($options) ? $options['isCollege'] 	: true);
  $istvmdl	 	= (is_array($options) ? $options['isTvmdl'] 	: true);
  $titleimg		= (is_array($options) ? $options['titleImg'] 	: '');
  $footerhtml	= (is_array($options) ? $options['footerHtml'] 	: '');
  
  $extensiononly = ($isextension && !$isresearch && !$iscollege && !$istvmdl ? true : false);
  $researchonly = ($isresearch && !$isextension && !$iscollege && !$istvmdl ? true : false);
  $collegeonly = ($iscollege && !$isextension && !$isresearch && !$istvmdl ? true : false);
  $tvmdlonly = ($istvmdl && !$isextension && !$isresearch && !$iscollege ? true : false);
  
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="Robots" content="index,follow" />
<<<<<<< HEAD
=======
<meta name="viewport" content="width=device-width; initial-scale=1.0;">
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( $options['feedBurner'] <> "" ) { echo $options['feedBurner']; } else { echo get_bloginfo_rss('rss2_url'); } ?>" />

<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="<?php echo THEME_TEMPLATEURL;?>/css/main.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo THEME_TEMPLATEURL;?>/css/structure.css?5" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo THEME_TEMPLATEURL;?>/css/sitestyle-agrilife.css" media="screen" />
<?php
if($extensiononly) {
    echo '<link rel="stylesheet" type="text/css" href="'.THEME_TEMPLATEURL.'/css/extension.css" media="screen" />';
} elseif ($researchonly) {
	echo '<link rel="stylesheet" type="text/css" href="'.THEME_TEMPLATEURL.'/css/research.css" media="screen" />';
} elseif ($collegeonly) {
	echo '<link rel="stylesheet" type="text/css" href="'.THEME_TEMPLATEURL.'/css/college.css" media="screen" />';
} elseif ($tvmdlonly) {
} else {
	echo '<link rel="stylesheet" type="text/css" href="'.THEME_TEMPLATEURL.'/css/secondary.css" media="screen" />';
    echo '<link rel="stylesheet" type="text/css" href="'.THEME_TEMPLATEURL.'/css/multi.css" media="screen" />';
}
?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>?4" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo THEME_TEMPLATEURL;?>/css/print.css" media="print" />


<link rel="shortcut icon" href="<?php echo THEME_TEMPLATEURL;?>/favicon.ico" type="image/ico" />
=======
<?php
if($extensiononly) {
    echo '<link rel="stylesheet" type="text/css" href="' ,bloginfo( 'template_url' ), '/css/extension.css" media="screen" />';
} elseif ($researchonly) {
	echo '<link rel="stylesheet" type="text/css" href="' ,bloginfo( 'template_url' ), '/css/research.css" media="screen" />';
} elseif ($collegeonly) {
	echo '<link rel="stylesheet" type="text/css" href="' ,bloginfo( 'template_url' ), '/css/college.css" media="screen" />';
} elseif ($tvmdlonly) {
} else {
	echo '<link rel="stylesheet" type="text/css" href="' ,bloginfo( 'template_url' ), '/css/secondary.css" media="screen" />';
    echo '<link rel="stylesheet" type="text/css" href="' ,bloginfo( 'template_url' ), '/css/multi.css" media="screen" />';
}
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/print.css" media="print" />

<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/ico" />
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981

<!-- head-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	
	<div id="agrilife-header">
		<div id="agrilife-header-box">
			<div id="agrilife"><a href="http://agrilife.org"><em>Agri</em>LIFE<span>org</span></a></div>
			<ul id="skip-links">
				<li><a href="#sitenav" accesskey="n">Skip to navigation [n]</a></li>
				<li><a href="#main_content" accesskey="c">Skip to content [c]</a></li>
				<li><a href="#agrilife-footer" accesskey="f">Skip to footer [f]</a></li>
			</ul>
			<ul id="agrilife-agency-tabs">
            	<?php if ($isresearch) : ?>
				<li class="research first">
					<a href="http://agriliferesearch.tamu.edu">AgriLIFE Research</a>
					<?php if(!$researchonly) : ?>
					<span></span>
					<ul>
						<li><a href="http://agriliferesearch.tamu.edu/units">Units</a></li>
						<li><a href="http://agriliferesearch.tamu.edu/inforesources">Resources</a></li>
						<li><a href="http://agriliferesearch.tamu.edu/communications">Communications</a></li>
						<li><a href="http://agriliferesearch.tamu.edu/employees">Employees</a></li>
						<li><a href="http://agriliferesearch.tamu.edu/about">About</a></li>
						<li><a href="http://agriliferesearch.tamu.edu/careers">Careers</a></li>
					</ul>
					<?php endif; ?>
				</li>
                <?php endif; ?>
                <?php if ($isextension) : ?>
				<li class="extension">
					<a href="http://agrilifeextension.tamu.edu">AgriLIFE Extension Service</a>
					<?php if(!$extensiononly) : ?>
					<span></span>
					<ul>
						<li><a href="http://agrilifeextension.tamu.edu/programs">Programs</a></li>
						<li><a href="http://agrilifeextension.tamu.edu/volunteer">Volunteer</a></li>
						<li><a href="http://agrilifeextension.tamu.edu/communications">Communications</a></li>
						<li><a href="http://agrilifeextension.tamu.edu/employees">Employees</a></li>
						<li><a href="http://agrilifeextension.tamu.edu/about">About</a></li>
						<li><a href="http://agrilifeextension.tamu.edu/careers">Careers</a></li>
					</ul>
					<?php endif; ?>
				</li>
                <?php endif; ?>
                <?php if ($collegeonly) : ?>
           
				<li class="texasam">
					<a href="http://aglifesciences.tamu.edu">College of Agriculture and Life Sciences</a>
				</li>
				<?php elseif ($iscollege): ?>
				<li class="teaching">
					<a href="http://aglifesciences.tamu.edu">College of Agriculture and Life Sciences</a>
					<span></span>
					<ul>
						<li><a href="http://aglifesciences.tamu.edu/about">About</a></li>
						<li><a href="http://aglifesciences.tamu.edu/academics">Academics</a></li>
						<li><a href="http://aglifesciences.tamu.edu/contact">Contact</a></li>
						<li><a href="http://aglifesciences.tamu.edu/careers">Careers</a></li>
						<li><a href="http://aglifesciences.tamu.edu/future">Future Students</a></li>
						<li><a href="http://aglifesciences.tamu.edu/students">Current Students</a></li>
						<li><a href="http://aglifesciences.tamu.edu/former">Former Students</a></li>
					</ul>
				</li>
                <?php endif; ?>
                
                <?php if ($istvmdl) : ?>
				<li class="service">
<<<<<<< HEAD
					<a class="tvmdl" href="http://tvmdl.tamu.edu">Texas Veterinary Medical Diagnostic Laboratory</a>
=======
					<a class="tvmdl" href="http://tvmdlweb.tamu.edu">Texas Veterinary Medical Diagnostic Laboratory</a>
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
					<a class="tfs" href="http://texasforestservice.tamu.edu">Texas Forest Service</a>
					<span></span>
					<ul>
						<li><a href="http://tvmdl.tamu.edu/about/">About TVMDL</a></li>
						<li><a href="http://tvmdl.tamu.edu/services_offered/">TVMDL Services</a></li>
						<li><a href="http://tvmdl.tamu.edu/news_updates/">TVMDL News</a></li>
						<li><a href="http://texasforestservice.tamu.edu/main/article.aspx?id=1712">About Texas Forest Service</a></li>
						<li><a href="http://texasforestservice.tamu.edu/main/default.aspx?dept=news">Texas Forest Service News</a></li>
					</ul>
				</li>
                <?php endif; ?>
			</ul>
			<div id="agrilife-search">
				<a href="http://agrilife.tamu.edu/search-window/?KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600" title="Search" class="thickbox search"><span>Search</span></a>
			</div>
			
		
			<?php /************** Redo this with CSS **********/ ?>
			<?php if($collegeonly) : ?>			
			<ul id="agrilife-agencies">
				<li class="teaching">/<a href="http://coals.tamu.edu" class="active">Teaching</a></li>
				<li class="research">/<a href="http://agriliferesearch.tamu.edu">Research</a></li>
				<li class="extension">/<a href="http://agrilifeextension.tamu.edu">Extension</a></li>
				<li class="service">/<a href="http://agrilife.tamu.edu">Service</a></li>
			</ul>
			<?php endif; ?>
			<?php if($extensiononly) : ?>			
			<ul id="agrilife-agencies">
				<li class="teaching">/<a href="http://coals.tamu.edu">Teaching</a></li>
				<li class="research">/<a href="http://agriliferesearch.tamu.edu" >Research</a></li>
				<li class="extension">/<a href="http://agrilifeextension.tamu.edu"  class="active" >Extension</a></li>
				<li class="service">/<a href="http://agrilife.tamu.edu">Service</a></li>
			</ul>
			<?php endif; ?>
			<?php if($researchonly) : ?>			
			<ul id="agrilife-agencies">
				<li class="teaching">/<a href="http://coals.tamu.edu">Teaching</a></li>
				<li class="research">/<a href="http://agriliferesearch.tamu.edu" class="active">Research</a></li>
				<li class="extension">/<a href="http://agrilifeextension.tamu.edu">Extension</a></li>
				<li class="service">/<a href="http://agrilife.tamu.edu">Service</a></li>
			</ul>
			<?php endif; ?>
			<?php if($tvmdlonly) : ?>			
			<ul id="agrilife-agencies">
				<li class="teaching">/<a href="http://coals.tamu.edu">Teaching</a></li>
				<li class="research">/<a href="http://agriliferesearch.tamu.edu">Research</a></li>
				<li class="extension">/<a href="http://agrilifeextension.tamu.edu">Extension</a></li>
				<li class="service">/<a href="http://agrilife.tamu.edu" class="active">Service</a></li>
			</ul>
			<?php endif; ?>
			<?php /************** END - Redo this with CSS **********/ ?>

			
			<div class="clear"></div>
		</div>
	</div>
	
	<div id="agrilife-header-nav">
		<div id="agrilife-header-nav-box">
				
				<?php if($collegeonly) : ?>
					
<ul>
				 <li class="thickbox"><a class="thickbox" href="http://agrilife.tamu.edu/collegedepts-window/?KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600" title="College of Agriculture and Life Sciences Departments"><span>Departments</span></a></li>
				 <li class="thickbox"><a class="thickbox" href="http://agrilife.tamu.edu/collegesocial-window/?KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600" title="College of Agriculture and Life Sciences Social Media"><img src="<?php bloginfo('template_directory');?>/images/facebook.gif" alt="Social" width="12" height="12" /> <span>Social</span></a></li>
				 <li><a class="sub" href="http://aglifesciences.tamu.edu/about/"><span>About</span></a>
				   <div class="sub">
				     <ul>
<<<<<<< HEAD
					   <li><a href="http://aglifesciences.tamu.edu/about-the-college/welcome-from-the-dean/">Welcome From The Dean</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/about/administration/">Administration</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/about/accomplishments/accomplishments-awards/">Achievements</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/about-the-college/college-fact-sheet/">College Fact Sheet</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/academics/institutes-centers/">Institutes &amp; Centers</a></li>
				       <!--<li><a href="http://agroadmaps.tamu.edu/">Academic Master Plan</a></li>-->
				       <li><a href="http://aglifesciences.tamu.edu/about-the-college/strategic-plan-2010-2015/">Strategic Planning</a></li>
=======
					   <li><a href="http://aglifesciences.tamu.edu/about/welcome/">Welcome From The Dean</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/about/administration/">Administration</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/about/accomplishments/awards.php">Achievements</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/about/facts/about-collegefacts.php">College Fact Sheet</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/academics/institutes-centers/">Institutes &amp; Centers</a></li>
				       <li><a href="http://agroadmaps.tamu.edu/">Academic Master Plan</a></li>
				       <li><a href="http://provost.tamu.edu/strategic-planning-2010">Strategic Planning</a></li>
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
				       <li><a href="http://aglifesciences.tamu.edu/contact/">Contacts</a></li>
				     </ul>
				   </div>
				 </li>
				 <li><a class="sub" href="http://aglifesciences.tamu.edu/news/"><span>News &amp; Events</span></a>
				   <div class="sub">
				     <ul>
				       <li><a href="http://aglifesciences.tamu.edu/newsletter/">Dean's eNewsletter</a></li>
<<<<<<< HEAD
				       <li><a href="http://aglifesciences.tamu.edu/news-and-events/">News &amp; Calendar</a></li>
=======
				       <li><a href="http://aglifesciences.tamu.edu/news/news_secondpage.php">News &amp; Calendar</a></li>
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
				       <li><a href="http://agrilifenews.tamu.edu/">AgriLife News</a></li>
				       <li><a href="http://tamunews.tamu.edu/">University News</a></li>
				     </ul>
				   </div>
				 </li>
				 <li><a class="sub" href="http://aglifesciences.tamu.edu/future/"><span>Future Students</span></a>
				   <div class="sub">
				     <ul>
				       <li><a href="http://aglifesciences.tamu.edu/careers/by_major/">Undergraduate Degrees</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/academics/grad/grad_table/">Graduate Degrees</a></li>
				       <li><a href="http://admissions.tamu.edu/transfer/">Transfer Guide</a></li>
<<<<<<< HEAD
				       <li><a href="http://admissions.tamu.edu/international/gettingin/waysAdmitted/freshmen.aspx">Internationals</a></li>
				       <li><a href="http://distance.tamu.edu/">Distance Education</a></li>
=======
				       <li><a href="http://admissions.tamu.edu/freshmen/intnl.aspx">Internationals</a></li>
				       <li><a href="http://dist-ed.tamu.edu/">Distance Education</a></li>
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
				       <li><a href="http://aglifesciences.tamu.edu/future/undergrad/">Admissions</a></li>
					   <li><a href="http://aglifesciences.tamu.edu/future/financialaid/">Financial Aid</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/future/undergrad/tours/">Visit Us!</a></li>
				     </ul>
				
				   </div>
				 </li>
				 <li><a class="sub" href="http://aglifesciences.tamu.edu/people/" title="People"><span>People</span></a>
				   <div class="sub">
				     <ul>
<<<<<<< HEAD
				       <li><a href="http://aglifesciences.tamu.edu/people/former/">Former Students</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/people/students/">Current Students</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/people/facultystaff/">Faculty &amp; Staff</a></li>
=======
				       <li><a href="http://aglifesciences.tamu.edu/former/">Former Students</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/students/">Current Students</a></li>
				       <li><a href="http://aglifesciences.tamu.edu/facultystaff/">Faculty &amp; Staff</a></li>
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
				       <li><a href="http://jobsforaggies.tamu.edu/">Jobs for Aggies</a></li>
				     </ul>
				   </div>
				 </li>
				 <li><a class="sub" href="http://aglifesciences.tamu.edu/giving/" title="Giving"><span>Giving</span></a>
				   <div class="sub">
				     <ul>
					   <li><a href="http://aglifesciences.tamu.edu/giving/">It&rsquo;s Time To Give</a></li>
				       <li><a href="http://coadc.tamu.edu/">College Development</a></li>
<<<<<<< HEAD
				     </ul>
				   </div>
				 </li>
				 <li class="ask-admissions"><a href="http://aglifesciences.tamu.edu/ask/" onclick="parent.location='http://aglifesciences.tamu.edu/ask/'" title="Ask Admissions">Ask Admissions</a></li>
				</ul>
				
=======
				       <li><a href="http://aglifesciences.tamu.edu/library/files/2009%20COALS_Registry%20of%20Scholarships.pdf">Scholarship Registry</a></li>
				     </ul>
				   </div>
				 </li>
				</ul>
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
  			
				
				<?php elseif($extensiononly) : ?>
<ul>
  <li class="thickbox"><a class="thickbox" href="http://agrilife.tamu.edu/locations-window/?KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600#counties" title="Locations"><span>Locations</span></a></li>
  <li class="thickbox"><a class="thickbox" href="http://agrilife.tamu.edu/extensionsocial-window/?KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600" title="Topics"><img alt="Social" height="12" src="<?php echo THEME_TEMPLATEURL;?>/images/facebook.gif" width="12" /> <span>Social</span></a></li>
  <li><a class="sub" href="http://agrilifeextension.tamu.edu/programs/index.php" title=""><span>Programs</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://agrilifeextension.tamu.edu/programs/index.php" title="">Programs Overview</a></li>
<<<<<<< HEAD
        <li><a href="http://agrilifeextension.tamu.edu/programs/continuinged/index.php" title="">Certification and Continuing Education</a></li>
=======
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
        <li><a href="http://agrilifeextension.tamu.edu/programs/index/index.php" title="">Program Index</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agrilifeextension.tamu.edu/events/index.php" title=""><span>Resources</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://agrilifeextension.tamu.edu/extresources/index.php" title="">Resources Overview</a></li>
        <li><a href="http://extension.org/ask">Ask an Expert</a></li>
        <li><a href="http://agrilifebookstore.org">AgriLife Bookstore</a></li>
        <li><a href="http://youtube.com/agrilifevideo">AgriLife YouTube Videos</a></li>
        <li><a href="http://flickr.com/photos/agrilife">AgriLife Flickr Photos</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agrilifeextension.tamu.edu/programs/index.php" title=""><span>Services</span></a>
    <div class="sub">
      <ul>
<<<<<<< HEAD
=======
        <li><a href="http://agrilifeextension.tamu.edu/programs/continuinged/index.php" title="">Certification and Continuing Education</a></li>
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
        <li><a href="http://cnrit.tamu.edu/ganlab/GANlab_webpage.htm">Grazingland Animal Nutrition Laboratory</a></li>
        <li><a href="http://soiltesting.tamu.edu">Soil, Water, and Forage Testing Laboratory</a></li>
        <li><a href="http://plantclinic.tamu.edu">Texas Plant Disease Diagnostic Laboratory</a></li>
        <li><a href="http://ws.tamu.edu">Wildlife Services</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agrilifeextension.tamu.edu/events/index.php" title=""><span>Events</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://agrilifeextension.tamu.edu/events/index.php" title="">Events Overview</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agrilifeextension.tamu.edu/contact/index.php" title=""><span>Contacts</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://county-tx.tamu.edu/">County Offices</a></li>
        <li><a href="http://agdirectory.tamu.edu/">Employee Directory</a></li>
        <li><a href="http://agrilifeextension.tamu.edu/contact/index.php" title="">FAQs</a></li>
        <li><a href="http://agnews.tamu.edu/contact/">Media Relations</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agrilifeextension.tamu.edu/about/index.php" title=""><span>About</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://agrilifeextension.tamu.edu/about/index.php" title="">Mission/Overview</a></li>
        <li><a href="http://agrilifeextension.tamu.edu/about/leadership/index.php" title="">Administrative Leadership</a></li>
        <li><a href="http://agrilifeextension.tamu.edu/about/strategyimpact/index.php" title="">Strategic Plan &amp; Impacts</a></li>
        <li><a class="sub" href="http://agrilifeextension.tamu.edu/careers/index.php" title="">Careers</a></li>
        <li><a href="http://tamus.edu">Texas A&amp;M System</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agrilifeextension.tamu.edu/volunteer/index.php" title=""><span>Volunteer</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://agrilifeextension.tamu.edu/volunteer/index.php" title="">Be an Extension Volunteer</a></li>
        <li><a href="http://agrilifeextension.tamu.edu/volunteer/community/index.php" title="">Community Involvement</a></li>
        <li><a href="http://agrilifeextension.tamu.edu/volunteer/programs/index.php" title="">Volunteer Programs</a></li>
        <li><a href="http://agrilifeextension.tamu.edu/volunteer/partner/index.php" title="">Partner with Extension</a></li>
      </ul>
    </div>
  </li>
</ul>			
			<?php elseif($researchonly) : ?>
<<<<<<< HEAD
			
<ul>
  <li class="thickbox"><a href="http://agrilife.tamu.edu/topics-window/?KeepThis=true&#38;TB_iframe=true&#38;height=400&#38;width=600" title="Topics" class="thickbox"><span>Topics</span></a></li>
  <li class="thickbox"><a href="http://agrilife.tamu.edu/locations-window/?KeepThis=true&#38;TB_iframe=true&#38;height=400&#38;width=600" title="Locations" class="thickbox"><span>Locations</span></a></li>
  <li><a class="sub" href="http://agriliferesearch.tamu.edu/units/" title=""><span>Units</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://agriliferesearch.tamu.edu/units/campus/" title="">On Campus Departments</a></li>
        <li><a href="http://agriliferesearch.tamu.edu/units/centers/" title="">State Wide Centers</a></li>
        <li><a href="http://agriliferesearch.tamu.edu/units/institutes/" title="">Institutes</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agriliferesearch.tamu.edu/inforesources/" title=""><span>Resources</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://tfss.tamu.edu">Texas Foundation Seed Service</a></li>
        <li><a href="http://agriliferesearch.tamu.edu/tard/" title="">Texas Agricultural Research Database</a></li>
        <li><a href="http://agriliferesearch.tamu.edu/about/commodity/" title="">Commodity Associations</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agriliferesearch.tamu.edu/communications/" title=""><span>Communications</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://agnews.tamu.edu">AgriLife News</a></li>
        <li><a href="http://agrilifebookstore.org">AgriLife Bookstore</a></li>
        <li><a href="http://agrilifevents.tamu.edu/">Conference Services</a></li>
        <li><a href="http://agrilife.tamu.edu/lifescapes">Lifescapes Magazine</a></li>
        <li><a href="http://www.flickr.com/photos/agrilife/collections/">AgriLife Photos on Flickr</a></li>
        <li><a href="http://youtube.com/agrilifevideo">AgriLife Videos on YouTube</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agriliferesearch.tamu.edu/corporaterelations/" title=""><span>Corporate Relations</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://agriliferesearch.tamu.edu/corporaterelations/" title="">Corporate Relations Office</a></li>
        <li><a href="http://otc.tamu.edu">Office of Technology Commercialization</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agriliferesearch.tamu.edu/about/" title=""><span>About</span></a>
    <div class="sub">
      <ul>
        <li><a href="http://agriliferesearch.tamu.edu/about/" title="">Overview of Research</a></li>
        <li><a href="http://agriliferesearch.tamu.edu/about/leadership/" title="">Administrative Leadership</a></li>
        <li><a href="http://agriliferesearch.tamu.edu/about/research_impacts/" title="">Research Impacts</a></li>
        <li><a href="http://agriliferesearch.tamu.edu/about/strategicplan/" title="">Strategic Plan</a></li>
        <li><a href="http://agriliferesearch.tamu.edu/about/exceptional_items/" title="">State Exceptional Items</a></li>
        <li><a href="http://agofr.tamu.edu/accomplishments.htm">Federal Accomplishments &amp; Initiatives</a></li>
        <li><a href="http://agrilife-extadmin.tamu.edu/report/ReportListResearch.htm">State Required Reports</a></li>
        <li><a href="http://tamus.edu">Texas A&amp;M System</a></li>
      </ul>
    </div>
  </li>
  <li><a class="sub" href="http://agriliferesearch.tamu.edu/careers/" title=""><span>Careers</span></a>
    <div class="sub">
      <ul>
        <li><a href="https://greatjobs.tamu.edu">Job Postings</a></li>
        <li><a href="http://agrilifeas.tamu.edu/hr/about-us/">Prospective Employee Information</a></li>
        <li><a href="http://agrilifeas.tamu.edu/hr/">AgriLife Human Resources</a></li>
      </ul>
    </div>
  </li>
</ul>

=======
			<ul>
				<li class="thickbox"><a href="http://agrilife.tamu.edu/topics-window/?KeepThis=true&#38;TB_iframe=true&#38;height=400&#38;width=600" title="Topics" class="thickbox"><span>Topics</span></a></li>
				<li class="thickbox"><a href="http://agrilife.tamu.edu/locations-window/?KeepThis=true&#38;TB_iframe=true&#38;height=400&#38;width=600" title="Locations" class="thickbox"><span>Locations</span></a></li>
			<li><a class="sub" href="http://agriliferesearch.tamu.edu/units/index.php" title=""><span>Units</span></a> <div class="sub"><ul><li><a href="http://agriliferesearch.tamu.edu/units/campus/index.php" title="">On Campus Departments</a></li><li><a href="http://agriliferesearch.tamu.edu/units/centers/index.php" title="">State Wide Centers</a></li><li><a href="http://agriliferesearch.tamu.edu/units/institutes/index_institutes.php" title="">Institutes</a></li></ul></div></li><li><a class="sub" href="http://agriliferesearch.tamu.edu/inforesources/index.php" title=""><span>Resources</span></a> <div class="sub"><ul><li><a href="http://tfss.tamu.edu">Texas Foundation Seed Service</a></li><li><a href="http://agriliferesearch.tamu.edu/tard/index.php" title="">Texas Agricultural Research Database</a></li><li><a href="http://agriliferesearch.tamu.edu/about/commodity/index_commodity_associations.php" title="">Commodity Associations</a></li></ul></div></li><li><a class="sub" href="http://agriliferesearch.tamu.edu/communications/index.php" title=""><span>Communications</span></a> <div class="sub"><ul><li><a href="http://agnews.tamu.edu">AgriLife News</a></li><li><a href="http://agrilifebookstore.org">AgriLife Bookstore</a></li><li><a href="http://agrilifevents.tamu.edu/">Conference Services</a></li><li><a href="http://agrilife.tamu.edu/lifescapes">Lifescapes Magazine</a></li><li><a href="http://www.flickr.com/photos/agrilife/collections/">AgriLife Photos on Flickr</a></li><li><a href="http://youtube.com/agrilifevideo">AgriLife Videos on YouTube</a></li></ul></div></li><li><a class="sub" href="http://agriliferesearch.tamu.edu/corporaterelations/index.php" title=""><span>Corporate Relations</span></a> <div class="sub"><ul><li><a href="http://agriliferesearch.tamu.edu/corporaterelations/index.php" title="">Corporate Relations Office</a></li><li><a href="http://otc.tamu.edu">Office of Technology Commercialization</a></li></ul></div></li><li><a class="sub" href="http://agriliferesearch.tamu.edu/about/index.php" title=""><span>About</span></a> <div class="sub"><ul><li><a href="http://agriliferesearch.tamu.edu/about/index.php" title="">Overview of Research</a></li><li><a href="http://agriliferesearch.tamu.edu/about/leadership/index.php" title="">Administrative Leadership</a></li><li><a href="http://agriliferesearch.tamu.edu/about/research_impacts/index.php" title="">Research Impacts</a></li><li><a href="http://agriliferesearch.tamu.edu/about/science_roadmap/index_science_roadmap.php" title="">Science Roadmap</a></li><li><a href="http://agriliferesearch.tamu.edu/about/exceptional_items/index.php" title="">State Exceptional Items</a></li><li><a href="http://agofr.tamu.edu/accomplishments.htm">Federal Accomplishments &amp; Initiatives</a></li><li><a href="http://agrilife-extadmin.tamu.edu/report/ReportListResearch.htm">State Required Reports</a></li><li><a href="http://tamus.edu">Texas A&amp;M System</a></li></ul></div></li><li><a class="sub" href="http://agriliferesearch.tamu.edu/careers/index.php" title=""><span>Careers</span></a> <div class="sub"><ul><li><a href="https://greatjobs.tamu.edu">Job Postings</a></li><li><a href="http://agtraining.tamu.edu/emptutor.htm">Application Tutorials</a></li><li><a href="http://aghr.tamu.edu/potemp.htm">Prospective Employee Information</a></li><li><a href="http://aghr.tamu.edu/employmentfaq.htm">Frequently Asked Questions</a></li><li><a href="http://aghr.tamu.edu">AgriLife Human Resources</a></li></ul></div></li></ul>
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
			
			<?php else : ?>			

			<ul>
				<li class="thickbox"><a href="http://agrilife.tamu.edu/topics-window/?KeepThis=true&#38;TB_iframe=true&#38;height=400&#38;width=600" title="Topics" class="thickbox"><span>Topics</span></a></li>
				<li class="thickbox"><a href="http://agrilife.tamu.edu/locations-window/?KeepThis=true&#38;TB_iframe=true&#38;height=400&#38;width=600" title="Locations" class="thickbox"><span>Locations</span></a></li>	
			</ul>
			
			<?php endif; ?>	

			<div class="clear"></div>
		</div>	
	</div>
	<div id="main">
		<div id="main-box" class="main-corners">
			<div id="site-header">
	
				<?php if ($titleimg=='') { ?>
<<<<<<< HEAD
                  <h1 class="header-title"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
=======
                  <h1 class="cf header-title"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
                <?php } elseif (preg_match('#^http:\/\/(.*)\.(gif|png|jpg)$#i', $titleimg)) { ?>
                  <h1><a href="<?php bloginfo('url'); ?>/"><img src="<?php echo $titleimg; ?>" alt="<?php bloginfo('name'); ?>"/></a></h1>
                <?php } else { 
                	echo $titleimg;  
                 } ?>
                
                
			</div>
			<!-- end header -->
		
			
            
            