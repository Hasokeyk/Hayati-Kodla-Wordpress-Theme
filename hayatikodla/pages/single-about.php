<?php 
    /*
        Template Name: Hakkımda
    */
    
    get_header();
?>
<section class="duz-sayfa orta-kisim hakkimda">
    <div class="container">
        <div class="rows">
            
            <div class="hakkimda-icerik">
                <?php 
                    $hakkimda = get_field('benim_hakkimda',get_the_ID());
                ?>
                <div class="col-lg-12">
                    <div class="profil-resmi">
                        <img src="<?php echo $hakkimda['profil_resmi']['url']?>" alt="<?php echo $hakkimda['ad_soyad'];?>" />
                    </div>
                    <h1 class="adsoyad">
                        <?php echo $hakkimda['ad_soyad'];?>
                    </h1>
                    <div class="unvan">
                        <?php echo $hakkimda['unvan'];?>
                    </div>
                </div>
                <div class="col-lg-12 hakkimda-aciklama">
                    <?php echo $hakkimda['hakkimda_yazisi'];?>
                </div>
            </div>
            
            <div class="bildiklerim">
                <?php 
                    $bildiklerim = get_field('bildiklerim',get_the_ID());
                    $i =0;
                    foreach($bildiklerim as $b){
                ?>
                <div class="bildiklerim-grup">
                    
                    <h<?php echo $i<4?'2':'3'?> class="grup-adi">
                        <?php echo $b['grup_basligi']?>
                    </h<?php echo $i<4?'2':'3'?>>
                    <div class="grup-maddeleri">
                        <div class="row">
                            <?php 
                                foreach($b['grup_maddeleri'] as $g){
                            ?>
                            <div class="madde col-lg-2 col-md-4 col-sm-6">
                                <?php 
                                    if(!empty($g['link'])){
                                        echo '<a href="'.$g['link'].'" target="_blank">';
                                    }
                                ?>
                                <div class="madde-gorsel">
                                    <img src="<?php echo $g['gorsel']['url']?>" alt="<?php echo $hakkimda['ad_soyad'];?> - <?php echo $g['madde']?> için <?php echo $g['tecrube']?> yıllık tecrübeye sahip" />
                                    <?php 
                                        if(!empty($g['tecrube'])){
                                    ?>
                                    <div class="madde-tecrube" data-text="Yıl Tecrübe">
                                        <?php echo $g['tecrube']?>
                                    </div>
                                    <?php
                                        }else if($g['link']){
                                    ?>
                                    <div class="madde-tecrube" data-text="Siteyi Aç">
                                        <i class="fas fa-link"></i>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="madde-baslik">
                                    <?php echo $g['madde']?>
                                </div>
                                <?php
                                    if(!empty($g['link'])){
                                        echo '</a>';
                                    }
                                ?>
                            </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                    
                </div>
                <?php 
                        $i++;
                    }
                ?>
                
            </div>
        </div>
    </div>
</section>
<?php 
    get_footer();
?>