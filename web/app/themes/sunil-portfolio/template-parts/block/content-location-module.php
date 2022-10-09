
<?php 
/**
 * Block Name:  Location module
 *
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'left-right-image-accordion-module-' . $block['id']; 
$enable_disable_module = get_field('enable_disable_module');
if ($enable_disable_module == 'enable') :  
    $heading = get_field('heading'); ?>
<section id="<?php print $id; ?>" class="section club-branches">
    <div class="container">
        <?php if(!empty($heading)): ?>
        <h2 class="club-branches__title heading-sm"><?php echo $heading; ?></h2>
        <?php endif; ?>
        <div class="club-branches__body">
            <div class="club-branches__row">
            <?php while(have_rows('location_list')): the_row(); 
                $state = get_sub_field('state');  
                $branch_name = get_sub_field('branch_name');  
                $address = get_sub_field('address');  
                $number = get_sub_field('number'); ?>
                <div class="club-branches__col">
                    <div class="club-branches__card">
                        <h3 class="club-branches__card-title"><?php echo $state; ?></h3>
                        <p><strong><?php echo $branch_name; ?></strong><br />
                        <?php echo $address; ?>
                        <?php if(!empty($number)): ?>
                        <a href="tel:<?php echo $number; ?>"><?php echo $number; ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php endif;