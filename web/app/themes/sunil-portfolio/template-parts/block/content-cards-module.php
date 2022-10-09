<?php 
/**
 * Block Name:  cards module
 *
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'cards-module-' . $block['id']; 
$enable_disable_module = get_field('enable_disable_module');
if ($enable_disable_module == 'enable') :  
    $heading = get_field('heading'); 
    $blurb = get_field('blurb');
     ?>
<section  id="<?php print $id; ?>" class="section more-ngen">
    <div class="container">
    <?php if(!empty($heading) || !empty($blurb)): ?>
        <div class="more-ngen__header">
            <?php if(!empty($heading)): ?>
            <h2 class="more-ngen__title heading-sm"><?php echo $heading; ?></h2>
            <?php endif; ?>
            <?php if(!empty($blurb)): ?>
            <p><?php echo $blurb; ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php if( have_rows('cards') ): ?>  

        <div class="more-ngen__slider">
        <?php 
            while ( have_rows('cards') ) : the_row(); 
                $image = get_sub_field('image');
                $heading = get_sub_field('heading');
                ?>
            <div class="more-ngen__col">
                <div class="more-ngen__card">
                    <?php if(!empty($image)): ?>
                    <div class="more-ngen__card-media">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($heading)): ?>
                    <h3 class="more-ngen__card-title"><?php echo $heading; ?></h3>
                    <?php endif; ?>
                    <?php if( have_rows('list') ): ?>  
                    <ul class="more-ngen__card-list">
                    <?php 
                        while ( have_rows('list') ) : the_row(); 
                            $link_item = get_sub_field('link_item'); 
                        if($link_item):?>
                        <li><a target="<?php echo $link_item['target'] ?>" href="<?php echo $link_item['url'] ?>"><?php echo $link_item['title'] ?></a></li>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    </div>
</section>
<?php endif; 
