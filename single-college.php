
<?php  
     get_header();
 
 while(have_posts()){
	  the_post();

   pageBanner();
	  ?>
	  
 
  
     <div class="container container--narrow page-section">
	    <div class="metabox metabox--position-up metabox--with-home-link">
         <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('college'); ?>">
	     <i class="fa fa-home" aria-hidden="true">
	     </i> All colleges</a> <span class="metabox__main"><?php the_title(); ?>
	    </span></p>
    
	</div>
	 
	   <div class="generic-content">
	   	 <hr class="section-break">
        <div class="about">
        <strong class="exam">ABOUT <em style=color:red;> <?php the_title(); ?></em> </strong>
        </div>
       <br><br><br><br>

	    <?php the_content(); ?>
		
 

<hr class="section-break">
        <div class="about">
        <strong class="exam"><em style=color:red;> <?php the_title(); ?></em>  YEAR OF ESTABLISHMENT</strong>
        </div>
       <br><br>
             <?php echo get_field('establistment_year'); ?>
		
		 <hr class="section-break">

           <div class="about">
           <strong class="exam">HOW TO REACH TO  <em style=color:red;><?php the_title(); ?></em>  </strong>
           </div>
           <br><br><br><br>
              
      <?php 
        $mapLocation = get_field('map_location');
      ?>

      <div class="acf-map">
          <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
            <h3><?php the_title(); ?></h3>
            <?php echo $mapLocation['address']; ?>
          </div>
      </div>

             <hr class="section-break">

             <div class="about">
             <strong class="exam"><em style=color:red;><?php the_title(); ?></em>  RANKING</strong>
             </div>
             <br><br><br><br>
          
              <?php echo get_field('college_ranking'); ?>


              <hr class="section-break">

              <div class="about">
           <strong class="exam"><em style=color:red;><?php the_title(); ?></em>  MODE OF ADMISSION</strong>
           </div>
          <br><br><br><br>
                           
                            <?php echo get_field('admission_mode'); ?>
                    <!--insert table for important dates -->

		   <hr class="section-break">
		  <!--  <div class="about">
           <strong class="exam"><em style=color:red;><?php the_title(); ?></em>  EXAM FEE</strong>
           </div>
            <br><br><br><br>

               <?php echo get_field('exam_fee'); ?>
                insert table for exam fee -->

               <hr class="section-break">
               <div class="about">
           <strong class="exam"><em style=color:red;><?php the_title(); ?></em>  NUMBER OF SEATS(course offered)</strong>
           </div>  <br><br><br><br>
          

             <?php echo get_field('course_offered'); ?>
             
                <!-- insert table for exam pattern -->

                <hr class="section-break">




		
		</div>

     

		<?php 
		
		$relatedPrograms = get_field('related_programs');
		if($relatedPrograms){
			echo '<hr class="section-break">';
		echo '<h2 class="headline headline--medium"> Related Program(s)</h2>';
		echo '<ul class="link-list min-list">';
		foreach ($relatedPrograms as $program){ ?>
			<li><a href="<?php the_permalink($program); ?>">
			<?php  echo get_the_title($program);?></a></li>
			
		<?php }
		echo '</ul>';
			
		}
		
		?>
	  </div>
	  
	  <?php }
	  
	  get_footer();
	  
      ?>
