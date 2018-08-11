<?php 
    get_header();
?>
<!-- ANASAYFA SLIDER -->
<section class="anasayfa-slider">
    
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5">
                <h1 class="baslik"><?php echo single_cat_title()?></h1>
                <div class="alt-baslik"><?php echo category_description()?></div>
            </div>
            <div class="col-lg-7">
                
                <div class="yazilar">
                    
                    <?php 
                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post(); 
                    ?>
                    <!--YAZİ-->
                    <div class="yazi">
                        <a href="<?php echo get_permalink();?>">
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
                           
                            <div class="yazi-baslik">
                               <?php the_title(); ?>
                            </div>
                            <div class="yazi-kisa-aciklama">
                                <?php echo wp_trim_words(get_the_content(get_the_ID()),10); ?>
                            </div>
                        </a>
                    </div>
                    <!--YAZİ-->
                    <?php 
                            }
                        }
                    ?>
                    
                </div>
                
            </div>
            
        </div>
    </div>
    
</section>
<!-- ANASAYFA SLIDER -->
<?php 
    get_footer();
?>