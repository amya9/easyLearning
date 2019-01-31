
<?php  
     get_header();
 
 while(have_posts()){
	  the_post();
      pageBanner();	
  
	  ?>
	  
 
  
     <div class="container container--narrow page-section">
	    <div class="metabox metabox--position-up metabox--with-home-link">
         <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('exam'); ?>">
	     <i class="fa fa-home" aria-hidden="true">
	     </i> All Exams</a> <span class="metabox__main"><?php the_title(); ?>
	    </span></p>
    
	</div>
	 
	   <div class="generic-content">
        <hr class="section-break">
        <div class="about">
        <strong class="exam">ABOUT <em style=color:red;> <?php the_title(); ?></em>  EXAM</strong>
        </div>
       <br><br><br><br>

	    <?php the_content(); ?>
		
		 <hr class="section-break">

           <div class="about">
           <strong class="exam"><em style=color:red;><?php the_title(); ?></em>  ELIGIBILITY CRITERIA</strong>
           </div>
           <br><br><br><br>
           <?php echo get_field('eligiblity_criteria'); ?>

             <hr class="section-break">

             <div class="about">
             <strong class="exam"><em style=color:red;><?php the_title(); ?></em>  APPLICATION DETAILS</strong>
             </div>
             <br><br><br><br>
          
              <?php echo get_field('apply_process'); ?>


              <hr class="section-break">

              <div class="about">
           <strong class="exam"><em style=color:red;><?php the_title(); ?></em>  IMPORTENT DATES</strong>
           </div>
          <br><br><br><br>
                           
                            <?php echo get_field('important_date'); ?>
                    <!--insert table for important dates -->

		   <hr class="section-break">
		    <div class="about">
           <strong class="exam"><em style=color:red;><?php the_title(); ?></em>  EXAM FEE</strong>
           </div>
            <br><br><br><br>

               <?php echo get_field('exam_fee'); ?>
               <!-- insert table for exam fee -->

               <hr class="section-break">
               <div class="about">
           <strong class="exam"><em style=color:red;><?php the_title(); ?></em>  EXAM PATTERN</strong>
           </div>  <br><br><br><br>
          

             <?php echo get_field('exam_type'); ?>
             
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
