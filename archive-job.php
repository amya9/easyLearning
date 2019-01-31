<?php 
get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"> Job's </h1>
      <div class="page-banner__intro">
        <p> Select your job area </p>
      </div>
    </div>  
  </div>

    <div class="container container--narrow page-section">
  <ul class="link-list min-list">
  <?php
    while(have_posts()){
      the_post();

      ?>
   
    

 
  <a href="#">
     <div class="job-card">
      
      <div  class="job-info">
       
        <div class="card1-text-large job-name" ><a class="an" href="<?php the_permalink();  ?>"> <?php the_title(); ?></a>
        </div>
        
         
      
       
      </div>
  </div>
  
</a>

   <?php }
  echo paginate_links();
  ?>
  </ul>
</div>
  

<?php get_footer();

?>