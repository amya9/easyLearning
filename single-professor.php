
<?php  
     get_header();
 
 while(have_posts()){
	  the_post();
	  pageBanner();
	  ?>
	  

  
     <div class="container container--narrow page-section">
	   
	 
	   <div class="generic-content">
	    <?php the_content(); ?>
		
		</div>
		<?php 
		
		$relatedPrograms = get_field('related_programs');
		if($relatedPrograms){
			echo '<hr class="section-break">';
		echo '<h2 class="headline headline--medium"> Subject(s) Taught</h2>';
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
