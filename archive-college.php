<?php 
get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"> Find your college </h1>
      <div class="page-banner__intro">
        <p> Search here! </p>
         
      </div>
    </div>  
    
  </div>

  <div class="generic-content">
      <form class="search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
        <label class="headline headline--medium" for="s">Perform a New Search:</label>
        <div class="search-form-row">
          <input placeholder="Search colleges" class="s" id="s" type="search" name="s">
          <input class="search-submit" type="submit" value="Search">
        </div>
      </form>
    </div>

    <div class="container container--narrow page-section">
	<ul class="link-list min-list">
	
	<?php
	  while(have_posts()){
		  the_post();
  $mapLocation = get_field('map_location');
		  ?>
		 
		 <!-- <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>-->

   
  
 <div class="card1">
 
  	<!--	<div class="card1-img">
  		<a href="#"> <?php  the_post_thumbnail('collegeCard'); ?> </a>
  		</div>
    -->
  		<div  class="card1-info">
        <div>
          
        </div>

          <div style="width: 400px; ">

  			<div class="card1-text-large" ><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
  			</div>
  			<div class="card1-text-normal">
  				<div class="card1-details">
  					Approved by :<?php echo get_field('approved_by');?>
  				</div>
  				<div class="card1-details marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>" >
  					<h3><a href="<?php the_permalink(); ?>"> Location</a></h3><br>
           <?php echo $mapLocation['address']; ?>
  				
  				</div>
  				  					 
	    <div class="metabox  metabox--with-home-link">
         <p>
         	<span class="metabox__main">All India Rank:<?php echo get_field('college_rank'); ?>
	    </span><a class="metabox__blog-home-link" href="<?php the_permalink(); ?>">
	     <i class="fa fa-home" aria-hidden="true">
	     </i> Details</a> </p>
    

</div>
    
  				</div>
        </div>
  			</div>
  		</div>
  	
  


     

	 <?php }
	?> 
	</ul>
</div>
	<!--<hr class="section-break">
	 <p>Looking for recap of past events?<a href=="<?php echo site_url('/past-events'); ?>">
	 Check out our past archive</a></p>
	 </div>
	 -->

<?php get_footer();

?>