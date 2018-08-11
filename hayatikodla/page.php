<?php
    
    /*
        Template Name: Sayfa
    */

    get_header();
?>
<section class="orta-kisim duz-sayfa">
    <div class="container">
        
        <?php 
            while ( have_posts() ) :
				the_post();
        ?>
        <div class="page-title">
            <h1><?=get_the_title();?></h1>
        </div>
        
        <div class="sayfa-icerik">
            
        </div>
        <?php
            endwhile; // End of the loop.
		?>
    </div>
</section>
<?php 
    get_footer();
?>