<?php 
get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"> Engineering cources </h1>
      <div class="page-banner__intro">
        <p> Click on your branch  </p>
      </div>
    </div>  
  </div>

    <div class="container container--narrow page-section">
    	 <div class="metabox metabox--position-up metabox--with-home-link">
         <p><a class="metabox__blog-home-link" href="<?php echo get_site_url('home'); ?>">
	     <i class="fa fa-home" aria-hidden="true">
	     </i> Back to home</a> <span class="metabox__main"><?php the_title(); ?>
	    </span></p>
    
	</div>
	<ul class="link-list min-list">
	
	<?php
	  while(have_posts()){
		  the_post();?>
		  <li><a href="http://localhost:3000/wordpress/engineerings/computer-science-engineering/"> Computer Science Engineering </a></li>
		  <li><a href="http://localhost:3000/wordpress/engineerings/electronics-communication-engineering/"> Electronics & Communication Engineering </a></li>
		  <li><a href="http://localhost:3000/wordpress/engineerings/electrical-engineering/"> Electrical Engineering </a></li>
		  <li><a href="http://localhost:3000/wordpress/engineerings/mechanical-engineering/"> Mechanical Engineering </a></li>
		  <li><a href="http://localhost:3000/wordpress/engineerings/civil-engineering/"> Civil Engineering  </a></li>
		  <li><a href="http://localhost:3000/wordpress/engineerings/chemical-engineering/"> Chemical Engineering </a></li>
		  <li><a href=""> Material Science Engineering </a></li>

	 <?php }
	echo paginate_links();
	?>


 <!--  <div class="cont"><em><p>Electronics and communication Engineering</p></em>  </div>
 
   <hr class="section-break">-->
  <!--<div class="cards">
   <div  class="card11">
       
	    <li><a href="<?php the_permalink(); ?>"> 1st semester </a></li>
		<li><a href="<?php the_permalink(); ?>"> 3rd semester </a></li>
		<li><a href="<?php the_permalink(); ?>"> 5th semester </a></li>
		<li><a href="<?php the_permalink(); ?>"> 7th semester </a></li>
		
	 
    </div> </div>
	 <div class="cards">
	<div class="card2">
	    <li><a href="<?php the_permalink('2nd-semester'); ?>"> 2nd semester </a></li>
		<li><a href="<?php the_permalink(); ?>"> 4th semester </a></li>
		<li><a href="<?php the_permalink(); ?>"> 6th semester </a></li>
		<li><a href="<?php the_permalink(); ?>"> 8th semester </a></li>
	   </div>
	    </div>-->
		



	</ul>
	<!--<hr class="section-break">
	 <p>Looking for recap of past events?<a href=="<?php echo site_url('/past-events'); ?>">
	 Check out our past archive</a></p>-->

	 </div>
	 

<?php get_footer();

?>