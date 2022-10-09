<?php 
/**
 * Block Name:  Left right image accordion module
 *
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'left-right-image-accordion-module-' . $block['id']; 
$enable_disable_module = get_field('enable_disable_module');
if ($enable_disable_module == 'enable') :  
    $module_heading = get_field('module_heading'); 
    $image_alignment = get_field('image_alignment');
    $background_theme = get_field('background_theme'); ?>

<section  id="<?php print $id; ?>" class="section ngen-diff <?php if($image_alignment ): ?>ngen-diff--alt<?php endif; ?><?php if($background_theme ): ?> bg-cream <?php endif; ?>">
    <div class="container">
        <?php if(!empty($module_heading)): ?>
        <div class="ngen-diff__header text-center">
            <h2 class="ngen-diff__title heading mb-0"><?php echo $module_heading; ?></h2>
        </div>
        <?php endif; ?>
        <div class="ngen-diff__item">
            <div class="ngen-diff__item-row">
                <?php if(have_rows('image_slider')): ?>
                <div class="ngen-diff__slider-wrap">
                    <div class="ngen-diff__slider">
                    <?php while(have_rows('image_slider')): the_row(); 
                                $image = get_sub_field('image');
                        if(!empty($image)): ?>
                        <div class="item">
                            <div class="ngen-diff__media">
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="ngen-diff__content">
                    <div class="ngen-diff__text">
                        <?php $accordion_heading = get_field('accordion_heading'); 
                        if(!empty($accordion_heading)): ?>
                        <h3 class="ngen-diff__subtitle heading-sm"><?php echo $accordion_heading; ?></h3>
                        <?php endif; 
                         if( have_rows('accordion') ):  
                            $count = 0; ?>
                        <div class="accordion">
                        <?php 
                            while ( have_rows('accordion') ) : the_row(); 
                                $item_heading = get_sub_field('item_heading');
                                $item_blurb = get_sub_field('item_blurb'); ?>
                            <div class="accordion__item <?php if (!$count) {?> active <?php } ?>">
                                <div class="accordion__item-header">
                                    <h3 class="accordion__item-title"><?php echo $item_heading; ?></h3>
                                </div>
                                <div class="accordion__item-body">
                                    <div class="accordion__item-text">
                                        <p><?php echo $item_blurb; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                $count++;
                            endwhile;
                        ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
