<?php 
get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"> Engineering cources </h1>
      <div class="page-banner__intro">
        <p> Click on your branch for E-books   </p>
      </div>
    </div>  
  </div>

    <div class="container container--narrow page-section">
	<ul class="link-list min-list">
	
	<?php
	  while(have_posts()){
		  the_post();?>
		  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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