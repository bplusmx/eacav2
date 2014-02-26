<div class="div-wrap" id="features">
    <!-- destacados -->
    <?php if (have_posts()) : ?>        
    <div id="destacados" class="destacados jcarousel-features">
        <ul>
        <?php $count = 0; while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_feature_thumb($post->ID); ?></a></li>
            <?php $count++; if ($count >= 5) {break;} ?>
        <?php endwhile; ?>
        </ul>
                
        <div id="features-nav">
        <?php $count = 0; rewind_posts(); while (have_posts()) : the_post(); $class = ($count < 1 ? ' current' : ''); ?>                       
            <div rel="<?php echo ($count+1) ?>" id="features-nav<?php echo ($count+1) ?>" class="features-nav-item <?php echo $class ?>">           
            <h3><a href="<?php the_permalink(); ?>">
            <?php
            if ($count == 0) {
                the_title();
            } else {
                $altTitle = get_post_meta($post->ID, 'Titulo_Alterno', true);
                $altTitle = trim($altTitle);
                    
                if (!empty($altTitle)) {
                    echo $altTitle;
                } else {
                    the_title();
                }
            }
            ?></a></h3>         
            <?php the_excerpt() ?>
            </div>
            <?php $count++; if ($count >= 5) {break;} ?>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
</div>