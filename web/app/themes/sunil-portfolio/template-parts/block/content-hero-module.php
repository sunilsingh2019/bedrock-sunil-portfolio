<?php 
/**
 * Block Name:  hero module
 *
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'hero-module-' . $block['id']; 
$enable_disable_module = get_field('enable_disable_module');
if ($enable_disable_module == 'enable') :  
if(have_rows('hero_slider')): ?>

<section id="<?php print $id; ?>" class="section homebanner">
    <div class="homebanner__slider">
    <?php while(have_rows('hero_slider')): the_row(); 
        $image = get_sub_field('image');  
        $heading = get_sub_field('heading');  
        $sub_heading = get_sub_field('sub_heading');  
        $blurb = get_sub_field('blurb'); ?>
        <div class="item">
            <div class="homebanner__card">
                <div class="container">
                    <div class="homebanner__card-row">
                        <?php if(!empty($image)): ?>
                        <div class="homebanner__card-media theme-bt theme-bt--rt">
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($heading) || !empty($sub_heading) || !empty($blurb)) :?>
                        <div class="homebanner__card-content">
                            <div class="homebanner__card-text">
                                <?php if(!empty($heading)): ?>
                                <h2 class="homebanner__card-title heading"><?php echo $heading; ?></h2>
                                <?php endif; ?>
                                <?php if(!empty($sub_heading)): ?>
                                <p><span><?php echo $sub_heading; ?></span></p>
                                <?php endif; ?>
                                <?php if(!empty($blurb)): ?>
                                <p><?php echo $blurb; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php endif;  
endif;