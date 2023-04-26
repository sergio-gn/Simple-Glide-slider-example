<?php if( have_rows('testimonials','option') ): ?>
<div class="slider__track glide__track" data-glide-el="track">
    <ul class="slider__slides glide__slides">
        <?php while( have_rows('testimonials','option') ): the_row();
            $image = get_sub_field('image');
            ?>
            <li class="slider__frame glide__slide <?php echo get_row_index(); ?>">
                <div class="d-flex justify-space-between">
                    <div class="d-flex">
                        <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                        <p><?php the_sub_field('name'); ?></p>
                    </div>
                </div>
                <div>
                    <p><?php the_sub_field('caption'); ?></p>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
</div>
<?php endif; ?>