<?php 
/**
 * Block Name:  enquiry form module
 *
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'book-now-module-' . $block['id']; 
$enable_disable_module = get_field('enable_disable_module');
if ($enable_disable_module == 'enable') :  
    $heading = get_field('heading'); 
    $text = get_field('text'); 
    $links = get_field('links'); 
    $background_image = get_field('background_image'); 
    $blurb = get_field('blurb'); ?>
<section id="<?php print $id; ?>" class="section whatson">
    <div class="container">
        <div class="whatson__cont">
            <?php if(!empty($background_image)): ?>
            <div class="whatson__bg dis-md"><img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['title'] ?>"></div>
            <?php endif; ?>
            <div class="whatson__text">
                <?php if(!empty($heading)): ?>
                <h2 class="whatson__title heading-sm"><?php echo $heading; ?></h2>
                <?php endif; ?>
                <?php if(!empty($background_image)): ?>
                <div class="whatson__bg app-md"><img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['title'] ?>"></div>
                <?php endif; ?>
                <?php if(!empty($text)): ?>
                <p><span><?php echo $text; ?></span></p>
                <?php endif; ?>
                <?php if(!empty($blurb)): ?>
                <p><?php echo $blurb; ?></p>
                <?php endif; ?>
                <?php if($links): ?>
                <a href="<?php echo $links['url'] ?>" class="btn btn-black"><?php echo $links['title'] ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif;