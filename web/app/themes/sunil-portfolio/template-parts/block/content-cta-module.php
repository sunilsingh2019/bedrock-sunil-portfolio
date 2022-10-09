
<?php 
/**
 * Block Name:  CTA module
 *
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'cta-module-' . $block['id']; 
$enable_disable_module = get_field('enable_disable_module');
if ($enable_disable_module == 'enable') : 
$heading = get_field('heading');
$blurb = get_field('blurb');
$link = get_field('link'); 
$theme = get_field('theme'); ?>

<section id="<?php print $id; ?>" class="section reg-cta <?php if($theme ): ?>bg-cream color-black<?php endif; ?>">
    <div class="container">
        <div class="reg-cta__inner">
            <?php if(!empty($heading)): ?>
            <h2 class="reg-cta__title heading"><?php echo $heading; ?></h2>
            <?php endif; ?>
            <?php if(!empty($blurb)): ?>
            <div class="reg-cta__content">
                <p><?php echo $blurb; ?></p>
            </div>
            <?php endif; ?>
            <?php if($link): ?>
            <a target="<?php echo $link['target'] ?>" href="<?php echo $link['url'] ?>" class="reg-cta__link btn"><?php echo $link['title'] ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif;