<?php 
    /*
        Template Name: Videolar
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
                <?php 
                    $videolar = get_field('videolar');
                    $videolar = array_reverse($videolar);
                    if($videolar != null){
                ?>
                <div class="videolar">
                <?php
                        foreach($videolar as $v){
                ?>
                <div class="video">
                    <a href="<?php echo $v['video_linki']?>" title="<?php echo $v['video_basligi']?>">
                        <img src="<?php echo $v['video_gorsel']['url']?>" alt="<?php echo $v['video_basligi']?>" />
                    </a>
                </div>
                <?php 
                        }
                ?>
                </div>
                <?php
                    }else{
                ?>
                İçerik Yok
                <?php 
                    }
                ?>
        </div>
        <?php
            endwhile; // End of the loop.
		?>
    </div>
</section>
<?php 
    get_footer();
?>