<?php 
/**
 * Block Name:  membership module
 *
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'left-right-image-accordion-module-' . $block['id']; 
$enable_disable_module = get_field('enable_disable_module');
if ($enable_disable_module == 'enable') :  
    $module_heading = get_field('module_heading');
    $heading_1 = get_field('heading_1');
    $heading_2 = get_field('heading_2');
    $heading_3 = get_field('heading_3');
    $logo_1 = get_field('logo_1');
    $logo_2 = get_field('logo_2');
    $logo_3 = get_field('logo_3');?>
<section id="<?php print $id; ?>" class="section memb dis-md">
    <div class="container">
        <div class="memb__table-wrap">
            <div class="memb__table">
                <div class="memb__header">
                    <div class="memb__row row">
                        <?php if(!empty($module_heading)): ?>
                        <div class="memb__col--title col-lg-6">
                            <h2 class="memb__title heading-sm"><?php echo $module_heading; ?></h2>
                        </div>
                        <?php endif; ?>  
                        <div class="memb__col--cat col-lg-6">
                            <div class="memb__cat">
                                <div class="memb__cat-row row">
                                    <div class="memb__cat-col--fitness col-lg-6">
                                        <?php if(!empty($logo_1)): ?>
                                        <img src="<?php echo $logo_1['url'] ?>" alt="<?php echo $logo_1['title'] ?>" class="memb__cat-icon">
                                        <?php endif; ?>
                                        <?php if(!empty($heading_1)): ?>
                                        <h4 class="memb__cat-title"><?php echo $heading_1; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                    <div class="memb__cat-col--premium col-lg-6">
                                        <?php if(!empty($logo_2)): ?>
                                        <img src="<?php echo $logo_2['url'] ?>" alt="<?php echo $logo_2['title'] ?>" class="memb__cat-icon">
                                        <?php endif; ?>
                                        <?php if(!empty($heading_2)): ?>
                                        <h4 class="memb__cat-title"><?php echo $heading_2; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="memb__body">
                <?php 
                    while ( have_rows('membership_content') ) : the_row(); 
                        $heading = get_sub_field('heading');
                        $fitness_bullet = get_sub_field('fitness');
                        $premium_bullet = get_sub_field('premium');
                         ?>
                    <div class="memb__body-item">
                        <div class="memb__row row">
                            <div class="memb__col--title col-lg-6">
                                <h5 class="memb__subtitle"><?php echo $heading; ?></h5>
                            </div>
                            <div class="memb__col--cat col-lg-6">
                                <div class="memb__cat">
                                    <div class="memb__cat-row row">
                                    <?php if( $fitness_bullet == 'level_1') { ?>
                                        <div class="memb__cat-col--fitness col-lg-6">
                                            <span class="memb__opt memb__opt-yes"></span>
                                        </div>
                                    <?php } elseif( $fitness_bullet == 'level_2') {  ?>  
                                        <div class="memb__cat-col--premium col-lg-6">
                                            <span class="memb__opt memb__opt-yes--v2"></span>
                                        </div>
                                    <?php } elseif( $fitness_bullet == 'level_3') {  ?>      
                                        <div class="memb__cat-col--premium col-lg-6">
                                            <span class="memb__opt memb__opt-no"></span>
                                        </div>
                                    <?php } elseif( $fitness_bullet == 'level_4') {  ?>  
                                        <div class="memb__cat-col--fitness col-lg-6">
                                            <span class="memb__opt memb__opt-no"></span>
                                        </div>
                                    <?php } elseif( $fitness_bullet == 'level_5') {  ?>  
                                        <div class="memb__cat-col--premium col-lg-6">
                                            <span class="memb__opt memb__opt-yes"></span>
                                        </div>
                                    <?php } ?>  

                                    <?php if( $premium_bullet == 'level_1') { ?>
                                        <div class="memb__cat-col--fitness col-lg-6">
                                            <span class="memb__opt memb__opt-yes"></span>
                                        </div>
                                    <?php } elseif( $premium_bullet == 'level_2') {  ?>  
                                        <div class="memb__cat-col--premium col-lg-6">
                                            <span class="memb__opt memb__opt-yes--v2"></span>
                                        </div>
                                    <?php } elseif( $premium_bullet == 'level_3') {  ?>      
                                        <div class="memb__cat-col--premium col-lg-6">
                                            <span class="memb__opt memb__opt-no"></span>
                                        </div>
                                    <?php } elseif( $premium_bullet == 'level_4') {  ?>  
                                        <div class="memb__cat-col--fitness col-lg-6">
                                            <span class="memb__opt memb__opt-no"></span>
                                        </div>
                                    <?php } elseif( $premium_bullet == 'level_5') {  ?>  
                                        <div class="memb__cat-col--premium col-lg-6">
                                            <span class="memb__opt memb__opt-yes"></span>
                                        </div>
                                    <?php } ?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>                         
                    <div class="memb__body-item memb__body-item--footer">
                        <div class="memb__row row">
                            <div class="memb__col--cat col-lg-6">
                                <div class="memb__cat">
                                    <div class="memb__cat-row row">
                                      <?php   
                                        $link_1 = get_field('link_1');
                                        $link_2 = get_field('link_2'); ?>
                                        <?php if($link_1): ?>
                                        <div class="memb__cat-col--fitness col-lg-6">
                                            <a href="<?php echo $link_1['url'] ?>" class="btn btn-dark"><?php echo $link_1['title'] ?></a>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($link_2): ?>
                                        <div class="memb__cat-col--premium col-lg-6">
                                            <a href="<?php echo $link_2['url'] ?>" class="btn btn-dark"><?php echo $link_2['title'] ?></a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="memb__table memb__table--club">
                <div class="memb__header">
                    <div class="memb__row row">
                        <div class="memb__col--cat col-12">
                            <div class="memb__cat">
                                <?php if(!empty($logo_2)): ?>
                                <img src="<?php echo $logo_2['url'] ?>" alt="<?php echo $logo_2['title'] ?>" class="memb__cat-icon">
                                <?php endif; ?>
                                <?php if(!empty($heading_2)): ?>
                                <h4 class="memb__cat-title"><?php echo $heading_2; ?></h4>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="memb__body">
                    <div class="memb__cont">
                        <?php   
                        $premium_membership_image = get_field('premium_membership_image');
                        $premium_membership_blurb = get_field('premium_membership_blurb'); ?> 
                        <?php if(!empty($premium_membership_image)): ?>
                        <div class="memb__cont-heroimg">
                            <img src="<?php echo $premium_membership_image['url'] ?>" alt="">
                        </div>
                        <?php endif; ?>
                        <?php echo $premium_membership_blurb; ?>
                        <?php $link_3 = get_field('link_3'); ?>
                        <?php if($link_3): ?>
                        <a href="<?php echo $link_3['url'] ?>" class="btn btn-light"><?php echo $link_3['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php  if( have_rows('member_accordion') ):  
$count = 0; ?>
<section class="section memb-sm app-md">
    <div class="container">
        <div class="memb-sm">
            <div class="memb-sm__header text-center">
                <h2 class="memb-sm__title heading"><?php echo $module_heading; ?></h2>
            </div>
            <div class="accordion">
            <?php 
                while ( have_rows('member_accordion') ) : the_row(); 
                    $icon = get_sub_field('icon');
                    $heading = get_sub_field('heading'); 
                    $blurb = get_sub_field('blurb'); 
                    $link = get_sub_field('link'); 
                    $theme = get_sub_field('theme'); 
                    ?>
                <div class="accordion__item <?php if($theme):?> theme-dark <?php endif; if (!$count) {?> active <?php } ?>">
                    <div class="accordion__item-header">
                        <h3 class="accordion__item-title">
                        <?php if($icon): ?>
                            <span class="icon"><img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['title'] ?>"></span>
                            <?php endif; ?>
                            <?php echo $heading; ?>
                        </h3>
                    </div>
                    <div class="accordion__item-body">
                        <div class="accordion__item-text">
                            <div class="accordion__item-cont">
                            <?php echo $blurb; ?>
                            <?php if($link): ?>
                            <div class="text-center">
                                <a href="<?php echo $link['url'] ?>" class="btn btn-dark"><?php echo $link['title'] ?></a>
                            </div>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    $count++;
                endwhile;
                ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
<?php endif;
