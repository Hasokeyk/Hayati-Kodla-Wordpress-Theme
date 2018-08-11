<?php
    
    /*
        Template Name: Sayfa
    */

    get_header();
?>
<section class="orta-kisim duz-sayfa">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <?php 
                while ( have_posts() ) :
                    the_post();
            ?>
            
            <?php 
                if ( has_post_thumbnail(get_the_ID())){
            ?>
            <div class="yazi-gorsel">
                <?php 
                    echo get_the_post_thumbnail( get_the_ID(), 'full' ,['alt' => get_the_title()]);
                ?>
            </div>
            <?php                            
                }else{
            ?>
            <div class="yazi-gorsel">
                <img src="/wp-content/uploads/2018/06/hayati-kodla-default.jpg" alt="<?php echo get_the_title()?>" />
            </div>
            <?php
                }
            ?>
            
            <div class="page-title">
                <h1><?php echo get_the_title();?></h1>
            </div>
            
            <div class="sayfa-icerik">
                <?php echo the_content();?>
            </div>
            <?php
                endwhile; // End of the loop.
            ?>
            </div>
            
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php 
    get_footer();
?>