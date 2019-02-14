<?php get_header(); ?>
    
<div class="visible-xs">
<div class="p-50"></div>
</div>

<div class="page-title page-title-4 bg-success">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<ol class="breadcrumb">
				<li><a href="index.php">HOME</a></li>
				<li class="active"><?php the_title();?></li>
			</ol>
		</div>
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
                                ?>                             
                               <p>No content found!.</p>
                               <?php
                            endif;
                        ?>
				   
				    
    
                    <div class="visible-xs">                       
                                               
                           
                        <h4>About Us</h4>
                        <h5 class="text-center">“What makes my work day interesting is seeing patients of all ages and doing all aspects of dentistry.”</h5>
                        

					</div>
				</div>
			</div>
		</div>        
	</section>  
    
</div>   


<?php get_footer(); ?>