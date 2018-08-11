<?php 
    /*
        Template Name: Günaydın Canım
    */
    
    get_header();
?>
<section class="orta-kisim duz-sayfa">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 text-center">
                <h1 class="page-title"><?=get_the_title();?> [BETA]</h1>
                <p>
                    Sizlerin mutluluğunu düşünerek hazırladığımız bu projemizde whatsapp'tan her sabah sizlere mutlu bir "Günaydın" yazan tatlış bir yapay zeka botu hazırladık
                </p>
                <br />
                
                <div class="gunaydin-canim">
                    
                    <div class="hayatikodla-tabs">
                        <div class="tab active">KAYIT OL</div>
                        <div class="tab">ÜYELİKTEN ÇIK</div>
                    </div>
                    
                    <div class="hayatikodla-tabsContent">
                        
                        <div class="tabContent">
                            
                            <form action="" method="post" class="whatsapp-onay-frm">
                                
                                <div class="form-group">
                                    <label for="adsoyad">Ad Soyad</label>
                                    <input type="text" name="adsoyad" class="form-control" id="adsoyad" placeholder="ÖRN: Hasan Yüksektepe" minlength="5" required>
                                </div>
                                <div class="form-group">
                                    <label for="tel">Whatsapp Kullandığın Telefonun</label>
                                    <input type="text" name="tel" class="form-control" id="tel" placeholder="ÖRN: 05xx xxx xx xx" minlength="11" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="kodyolla-btn" class="btn btn-primary">ONAYLA 🤪</button>
                                </div>
                                <div class="resuls">
                                    <div class="alert"></div>
                                </div>
                            </form>
                            
                            <form class="kod-onay-frm" style="display:none;">
                                
                                <div class="kod-onay-frm-container">
                                    <div class="form-group">
                                        <label for="kod">Whatsapp'dan Gelen Kodunuz</label>
                                        <input type="text" name="kod" class="form-control" id="kod" placeholder="ÖRN: XXXXXX"required>
                                        <button type="submit" class="kodonayla-btn" class="btn btn-primary">ONAYLA 🤪</button>
                                    </div>
                                </div>
                                <div class="resuls">
                                    <div class="alert"></div>
                                </div>
                                
                            </form>
                            
                        </div>
                        <div class="tabContent">
                            <form action="" method="post" class="whatsapp-onay-frm">
                                
                                <div class="form-group">
                                    <label for="tel">Whatsapp Kullandığın Telefonun</label>
                                    <input type="text" name="tel" class="form-control" id="tel" placeholder="ÖRN: 05xx xxx xx xx" minlength="11" required>
                                    <small class="form-text text-muted">Telefonu Onaylamadan Kayıt Edemiyoruz. Lütfen Numaranızı Yazınız</small>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="kodyolla-btn" class="btn btn-primary">ÜYELİKTEN ÇIK 😒</button>
                                </div>
                                <div class="resuls">
                                    <div class="alert"></div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<?php 
    get_footer();
?>