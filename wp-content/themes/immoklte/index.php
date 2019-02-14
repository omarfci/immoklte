<?php get_header(); ?>
    
<div class="page-title page-title-4 bg-success visible-lg">
    <div class="container">
        <h1 class="text-center"> About Us </h1>
        <ol class="breadcrumb">
            <li class="text-center p-10"><h5 >“What makes my work day interesting is seeing patients of all ages and doing all aspects of dentistry.”</h5></li>

        </ol>
    </div>
</div>




<div class="visible-xs">
<div class="p-50"></div>
</div>

<div id="content" class="subpage">

    <section>
    <div class="container">
        <div class="row">
				<div class="col-md-12">
				    
                <?php
                            if ( have_posts() ) :
                                // Start the Loop.
                                while ( have_posts() ) : the_post();
                ?>
                                <h3><?php the_title(); ?></h3>
                                <small>Posted on <?php the_time('F, j, Y');?>, in <?php the_category(); ?></small>
                                <p><?php the_content(); ?></p>
                <?php
                                endwhile;
                                // Previous/next post navigation.
                                //twentyfourteen_paging_nav();

                            else :
                                // If no content, include the "No posts found" template.
                                get_template_part( 'content', 'none' );

                            endif;
                        ?>
				   
				    
    
                    <div class="visible-xs">                       
                                               
                           
                        <h4>About Us</h4>
                        <h5 class="text-center">“What makes my work day interesting is seeing patients of all ages and doing all aspects of dentistry.”</h5>
                        

					</div>
				</div>


			</div>



		</div>
        
       <div class="col-md-12">
        <div class="col-md-6">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/9Oqtq2xUZr4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/VumV_tEU1dU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
</div>
        
	</section>
    
    
</div>
    


<?php get_footer(); ?>