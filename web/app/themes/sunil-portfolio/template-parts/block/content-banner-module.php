<?php 
/**
 * Block Name:  Left right image accordion module
 *
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'banner-module-' . $block['id']; 
$enable_disable_module = get_field('enable_disable_module');
if ($enable_disable_module == 'enable') :  
    $background_image = get_field('background_image'); 
      if(!empty($background_image)): ?>
        <section id="<?php print $id; ?>" class="section homebg">
            <div class="homebg__media">
                <img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['title'] ?>" class="img-parallax" data-speed=".75">
            </div>
        </section>
    <?php endif; ?>
<?php endif;