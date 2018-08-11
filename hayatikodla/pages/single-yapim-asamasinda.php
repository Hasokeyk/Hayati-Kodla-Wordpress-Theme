<?php 
    /*
        Template Name: Yapım Aşamasında
    */
    
    get_header();
?>
<section class="orta-kisim duz-sayfa videolar">
    <div class="container">
        
        <?php
            while ( have_posts() ) :
				the_post();
        ?>
        <div class="page-title">
            <h1 class="baslik"><?php echo get_the_title();?></h1>
        </div>
        
        <div class="sayfa-icerik">
                YAPIM AŞAMASINDA
        </div>
        <?php
            endwhile; // End of the loop.
		?>
    </div>
</section>
<?php 
    get_footer();
?>