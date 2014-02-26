<style>
<?php $i = 1; $count = 0; if (have_posts()) : ?>        
<?php while (have_posts()) : the_post(); ?>
    dl.slidedeck dd.slide_<?php echo $i ?> {background: url("<?php echo the_feature_thumb($post->ID, 'intermediate', false); ?>") center center no-repeat;}
<?php $count++; $i++; if ($count >= 5) {break;} ?>
<?php endwhile; ?>
<?php endif; ?>
</style>
    
        
<?php rewind_posts(); if (have_posts()) : $count = 0;  ?>
<div id="slidedeck_frame">
    <dl class="slidedeck">
    <?php while (have_posts()) : the_post(); ?>
	<dt><a href="<?php the_permalink(); ?>"><?php
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
	?></a></dt>
	<dd>
	<div class="caption">
	<h3><?php the_title() ?></h3>
	<?php the_excerpt() ?>
	</div>
	</dd>
	<?php $count++; if ($count >= 5) {break;} ?>
        <?php endwhile; ?>
    </dl>
</div>
<?php endif; ?>

<script type="text/javascript">
        /**
         * Script for handling goTo's (numbered navigation) and next/prev navigation
         */ 
        var SlideDeckAssistant = {
            innerSlideCount: 0,
            /** prevSlide, nextSlide and goToSlide are all custom functions to control progress of the SlideDeck */
            prevSlide: function(theIndex){
                SlideDeckAssistant.goToSlide(theIndex - 1);
            },
            nextSlide: function(theIndex){
                SlideDeckAssistant.goToSlide(theIndex + 1);
            },
            goToSlide: function(theIndex){        
                $('ul.slidedeckNav li.num').removeClass('active');
                $('ul.slidedeckNav li.num:eq('+ theIndex +')').addClass('active');
                myDeck.goTo(theIndex+1);
                if((theIndex + 1) == SlideDeckAssistant.innerSlideCount){
                    // disable the next button
                    $('ul.slidedeckNav .next').addClass('disabled');
                    $('ul.slidedeckNav .prev').removeClass('disabled');
                }else if((theIndex + 1) == 1){
                    // disable the previous button
                    $('ul.slidedeckNav .next').removeClass('disabled');
                    $('ul.slidedeckNav .prev').addClass('disabled');
                }else{
                    // enable both next/previous buttons
                    $('ul.slidedeckNav .next, ul.slidedeckNav .prev').removeClass('disabled');
                }
            },
            init: function(){
                SlideDeckAssistant.innerSlideCount = $('#slidedeck_frame dl.slidedeck dd').length;
                /** Store number of slides in SlideDeck */
                $('#slidedeck_frame').append('<ul class="slidedeckNav"><\/ul>');
                // create navigation element
                $('ul.slidedeckNav').prepend('<li class="prev"><a href="#prev">&laquo;<\/a><\/li>');
                // add previous button
                for (i=0 ; i < SlideDeckAssistant.innerSlideCount ; i++ ) {
                    $('ul.slidedeckNav').append('<li class="num"><a href="goto#' + (i+1) + '">' + (i+1) + '<\/a><\/li>');
                }
                // add numbered navigation buttons for each slide
                $('ul.slidedeckNav').append('<li class="next"><a href="#next">&raquo;<\/a><\/li>');
                // add next button
                $('ul.slidedeckNav li.num:first').addClass('active');
                $('ul.slidedeckNav li.num.prev').addClass('disabled');
                $('ul.slidedeckNav li.num a').click(function(e){
                    e.preventDefault();
                    var theIndex = $('ul.slidedeckNav li.num a').index($(this));
                    SlideDeckAssistant.goToSlide(theIndex);
                    return false;
                });
                // assign click function to numbered navigation buttons
                $('ul.slidedeckNav li.prev a').click(function(e){
                    e.preventDefault();
                    if($(this).parent('li').hasClass('disabled')){
                        return false;
                    }else{
                        var theIndex = $('ul.slidedeckNav li').index($('ul.slidedeckNav li.active')) - 1;
                        SlideDeckAssistant.prevSlide(theIndex);
                    }
                    return false;
                });
                
                // assign click function to previous button
                $('ul.slidedeckNav li.next a').click(function(e){
                    e.preventDefault();
                    if($(this).parent('li').hasClass('disabled')){
                        return false;
                    }
                    else{
                        var theIndex = $('ul.slidedeckNav li').index($('ul.slidedeckNav li.active')) - 1;
                        SlideDeckAssistant.nextSlide(theIndex);
                    }
                    return false;
                });
                // assign click function to next button
        }
        };
        
        $(document).ready(function(){
            SlideDeckAssistant.init();
        });
            
        /** Initiate the SlideDeck */
        var myDeck = $('#slidedeck_frame dl.slidedeck').slidedeck({
            hideSpines: true,
            autoPlay: true,
            cycle: true,
            index: false,            
            transition: 'linear',
            /**
             * The complete function is executed after each slide animation.
             * here we are using it to upate the navigation dots.
             */
            complete: function(deck){
                $('#slidedeck_frame .slidedeckNav li').removeClass('active');
                $('#slidedeck_frame .slidedeckNav li.num:eq('+ ( deck.current - 1 ) +')').addClass('active');
                /** Update current slide indicator after each slide animation completes */
            }
        })
                        
        </script>