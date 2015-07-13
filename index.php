<?php get_header(); ?>
            <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
               <?php $sticky = get_option('sticky_posts'); 
  $args = array (
  'cat' => 13,
  'posts_per_page' => 3,
  'post_in' => $sticky
  );
  
  $postQuery = get_posts($args);
  
  foreach($postQuery as $post) : setup_postdata($post);
  if ( has_post_thumbnail($post->ID) )
  {
      $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'home-slider');
  }
  
  ?>
      <li>
                        <div class="slider-caption">
                            <h1><?php the_title(); ?></h1>
                            <?php the_excerpt(); ?>
                            <a href="http://deltadigital.ca/wptheme/breakfast/">Our Menu</a>
                        </div>
                      <img src="<?php echo $image[0]; ?>" alt="" />
                    </li>
   <?php endforeach; ?>
                  
                  </ul>
                </div>
            </div>


            <div id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Welcome to True Love Cafe!</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <?php query_posts('cat=3'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <?php global $post; $tag_namez = wp_get_post_tags( $post->ID, array( 'fields' => 'names' ) ); 
   
     if ( has_post_thumbnail($post->ID) )
     {
      $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'home-slider');
     }
   
   ?>
                        
    <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="<?php echo $tag_namez[0]; ?>"></i>
                                </div>
                                <h4><?php the_title(); ?></h4>
                                <?php the_content(); ?>
                            </div>
                        </div>
    
    
<?php endwhile; endif; ?>
                        
                        
                        
                    </div><!--end of row fa fa-->
                </div>
            </div>





            <div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Some of Our Favourites</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <?php query_posts('cat=12'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <?php global $post; 
   
   $tag_namez = wp_get_post_tags( $post->ID, array( 'fields' => 'names' ) ); 
    ?>

    <?php 
     if ( has_post_thumbnail($post->ID) )
     {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'home-slider');
     }
    ?>
                        
 <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="<?php echo $image[0]; ?>" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <span><?php if(!empty($tag_namez)) echo $tag_namez[0]; ?></span>
                                    </div>
                                    <div class="content-hide">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
<?php endwhile; endif; ?>
                      </div>
                        
                </div>
            </div>


            <div id="testimonails">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>What Customers Say</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonails-slider">
                              <ul class="slides">
      <?php query_posts('cat=21'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <li>
                                    <div class="testimonails-content">
                                        <?php the_content(); ?>
                                        <h6><?php the_title(); ?></h6>
                                    </div>
                                </li>
   <?php endwhile; endif; ?>                             
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 <?php get_footer(); ?>