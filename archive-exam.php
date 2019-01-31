<?php 
get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"> All Exams </h1>
      <div class="page-banner__intro">
        <p> Search for Exams details </p>
      </div>
    </div>  
  </div>

    <div class="container container--narrow page-section">
	<ul class="link-list min-list">
	<?php
	  while(have_posts()){
		  the_post();

		  ?>
		  
  
     <div class="card1">
  	
  		<div  class="card1-info">
        <div  style="width:400px; ">
  			<div class="card1-text-large" id="card1-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
  			</div>
  			
  				<div class="card1-details">
  				 <h3> Conducted by:  <?php echo get_field('conducted_by'); ?> </h3>
  				</div>
  				
  				  					 
	    <div class="metabox  metabox--with-home-link">
         <p>
         	<span class="metabox__main">Exam Date:<?php echo get_field('exam_date'); ?>
	    </span><a class="metabox__blog-home-link" href="<?php the_permalink(); ?>">
	     <i class="fa fa-home" aria-hidden="true">
	     </i> Details</a> </p>
    

</div>
    
  			
  			</div>
      </div>
 	</div>
  
</a>

	 <?php }
	echo paginate_links();
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