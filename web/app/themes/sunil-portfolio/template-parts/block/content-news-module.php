
<?php 
/**
 * Block Name:  news module
 *
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'news-module-' . $block['id']; 
$heading = get_field('heading'); 
$select_post = get_field('select_post');
?>
<section id="<?php print $id; ?>" class="section innews">
    <div class="container">
        <?php if(!empty($heading)): ?>
        <div class="innews__header">
            <h2 class="innews__title heading-sm"><?php echo $heading; ?></h2>
        </div>
        <?php endif; ?>
        <div class="innews__body">
            <div class="innews__row row">
            <?php if($select_post){ 
                 foreach( $select_post as $post ): setup_postdata($post); 
                    $title = get_the_title( $post->ID );
                    $excerpt = get_the_excerpt( $post->ID );
                    $permalink = get_the_permalink( $post->ID );
                    $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '', true); 
                    $featurd_image = get_field('featured_image',  $post->ID );
                    $iframe = get_field('embed_video', $post->ID);
                    if ( $iframe ) {
                       // Load value.
                            // Use preg_match to find iframe src.
                            preg_match('/src="(.+?)"/', $iframe, $matches);
                            $src = $matches[1];

                            // Add extra parameters to src and replace HTML.
                            $params = array(
                                'controls'  => 1,
                                'hd'        => 1,
                                'autohide'  => 1
                            );
                            $new_src = add_query_arg($params, $src);
                            $iframe = str_replace($src, $new_src, $iframe);

                            // Add extra attributes to iframe HTML.
                            $attributes = 'frameborder="0"';
                            $iframe = str_replace('></iframe width="359" height="200">', ' ' . $attributes . '></iframe>', $iframe);

                            // Display customized HTML.
                            
                        
                    
                        
                    }
                ?>
                <div class="innews__col col-lg-4">
                    <a href="<?php echo $permalink; ?>" class="innews__card">
                        <h5 class="innews__card-title"><?php echo $title; ?></h5>
                        <?php if(!empty($featurd_image)){ ?>
                        <div class="innews__card-media">
                            <img src="<?php echo $featurd_image['url'] ?>" alt="<?php echo $featurd_image['title'] ?>">
                        </div>
                        <?php } else{ ?>
                          
                          <div class="innews__card-media">
                            <?php if($iframe) : ?>
                            <div class="innews__card-media">
                                   <?php echo $iframe; ?>
                            </div>
                           <?php endif; ?>
                        </div>
                        <?php } ?>
                        <p><?php echo $excerpt; ?></p>
                    </a>
                </div>
               <?php endforeach; ?>
               
                <?php } else { ?>
              <?php
                $args =  array(

                    'post_type'         => 'post',

                    'posts_per_page'    => 3,
                    
                    'order'             => 'DESC',

                  );
              
                  $loop = new WP_Query($args );
                  while ( $loop->have_posts() ) : $loop->the_post(); 
                  $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '', true); 
                  $post_id = get_the_ID();
                  $iframe = get_field('embed_video', $post_id);
                  $featurd_image = get_field('featured_image', $post_id);
                  if ( $iframe ) {
                     // Load value.
                         

                          // Use preg_match to find iframe src.
                          preg_match('/src="(.+?)"/', $iframe, $matches);
                          $src = $matches[1];

                          // Add extra parameters to src and replace HTML.
                          $params = array(
                              'controls'  => 1,
                              'hd'        => 1,
                              'autohide'  => 1
                          );
                          $new_src = add_query_arg($params, $src);
                          $iframe = str_replace($src, $new_src, $iframe);

                          // Add extra attributes to iframe HTML.
                          $attributes = 'frameborder="0"';
                          $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                          // Display customized HTML.                          
                  }
                  ?>
                <div class="innews__col col-lg-4">
                    <a href="<?php the_permalink(); ?>" class="innews__card">
                        <h5 class="innews__card-title"><?php the_title(); ?></h5>
                        <?php if($featurd_image){ ?>
                        <div class="innews__card-media">
                        <img src="<?php echo $featurd_image['url'] ?>" alt="<?php echo $featurd_image['title'] ?>">
                        </div>
                        <?php } else { ?>
                            <?php if($iframe) : ?>
                            <div class="innews__card-media">
                                   <?php echo $iframe; ?>
                            </div>
                           <?php endif; ?>
                        <?php } ?>
                        <p><?php the_excerpt(); ?></p>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); 
                }?>
            </div>
        </div>
    </div>
</section>