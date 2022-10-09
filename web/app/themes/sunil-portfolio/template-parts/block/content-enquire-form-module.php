<?php 
/**
 * Block Name:  enquiry form module
 *
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'enquiry-form-module-' . $block['id']; 
$enable_disable_module = get_field('enable_disable_module');
if ($enable_disable_module == 'enable') :  
    $heading = get_field('heading'); 
    $shortcode = get_field('shortcode'); 
    $blurb = get_field('blurb'); ?>
<section id="<?php print $id; ?>" class="section found-cta">
    <div class="container">
        <div class="found-cta__row row">
            <div class="found-cta__col col-lg-4">
            <?php if(!empty($heading)): ?>
                <h2 class="found-cta__title heading"><?php echo $heading; ?></h2>
                <?php endif; ?>
                <?php if(!empty($blurb)): ?>
                <p><?php echo $blurb; ?></p>
                <?php endif; ?>
            </div>
            <?php if(!empty($shortcode)): ?>
            <div class="found-cta__col col-lg-8">
                <?php echo $shortcode; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif;