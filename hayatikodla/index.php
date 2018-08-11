<?php
    
    /*
        Template Name: Ana Sayfa
    */

    get_header();
?>

<!--MANŞET-->
<?php
    $mansetler = get_posts([
        'post_type' => 'post',
        'posts_per_page' => 5,
    ]);
    if($mansetler != null){
?>
<div class="mansetler">
    <?php 
        $i = 0;
        foreach($mansetler as $m){
            $haricTut[] = $m->ID;
    ?>
    <div class="manset <?php echo $i==0?'buyuk':''?>">
        <a href="<?php echo get_permalink($m->ID);?>">
        <?php
            if( has_post_thumbnail($m->ID) ) {
                echo get_the_post_thumbnail($m->ID , 'full' , array('alt' => get_the_title($m->ID) ));
            } else {
        ?>
            <img src="<?php the_field( "onecikgorsel", "options"); ?>" title="<?php the_title(); ?>" />
        <?php 
            } 
        ?>
        
        <div class="manset-bilgi">
            
            <div class="manset-baslik">
                <?php echo get_the_title($m->ID)?>
            </div>
            <div class="manset-tarih">
                <?php echo get_the_date('j F Y',$m->ID);?>
            </div>
            
        </div>
        </a>
    </div>
    <?php
            $i++;
        }
    ?>
</div>
<?php 
    }
?>
<!--MANŞET-->

<!-- KATEGORI LISTESI -->
<section class="kategori-listesi">
    <div class="container">
        
        <h2 class="baslik">Popüler Kategoriler</h2>
    
        <div class="kategoriler">
            <?php 
                $cat = get_categories(['hide_empty' => 0,'exclude' => [22]]);
                foreach($cat as $c){
                    $gorsel = get_field('gorsel','category_'.$c->term_id);
            ?> 
            <!--KATEGORI-->
            <div class="kategori">
                <a href="<?php echo get_category_link($c->term_id)?>">
                    <div class="kategori-gorsel">
                        <?php 
                            if(isset($gorsel['url'])){
                        ?>
                        <img data-piio="<?php echo $gorsel['url']?>" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8+f9vPQAJZAN2rlRQVAAAAABJRU5ErkJggg==" alt="<?php echo $c->name?>" />
                        <?php
                            }else{
                        ?>
                        <img data-piio="/wp-content/uploads/2018/06/hayati-kodla-default.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8+f9vPQAJZAN2rlRQVAAAAABJRU5ErkJggg==" alt="<?php echo $c->name?>" />
                        <?php
                            }
                        ?>
                    </div>
                    <div class="kategori-adi">
                        <h3 class="baslik"><?php echo $c->name?></h3>
                    </div>
                </a>
            </div>
            <!--KATEGORI-->
            <?php 
                }
            ?>
        </div>
    </div>
</section>
<!-- KATEGORI LISTESI -->

<?php 
    $projeler = get_posts([
        'category' => [22]
    ]);
    
    if($projeler != null){
?>
<!-- PROJELER -->
<section class="proje-listesi">
    <div class="container">
        <h2 class="baslik">Girişimlerimiz</h2>
        <div class="projeler">
            <?php 
                foreach($projeler as $p){
            ?> 
            <!-- PROJE -->
            <div class="proje">
                <a href="<?php echo get_permalink($p->ID)?>">
                <?php 
                    if ( has_post_thumbnail($p->ID)){
                        echo get_the_post_thumbnail( $p->ID, 'thumbnail' ,['alt' => $p->post_title]);
                    }
                ?>
                </a>
            </div>
            <!-- PROJE -->
            <?php 
                }
            ?>
        </div>
    </div>
</section>
<!-- PROJELER -->
<?php 
    }
?>
<?php 
    get_footer();
?>