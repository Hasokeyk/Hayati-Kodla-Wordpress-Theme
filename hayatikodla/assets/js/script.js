jQuery(function($){
	
    var gunaydincanimAPI = '//app.hayatikodla.com/gunaydin-canim/';
   
	//HEADER MENÜ
	$('.mobil-menu').on('click',function(){
		$('.ust-menu').fadeToggle();
		$(this).toggleClass('active');
	});
	//HEADER MENÜ
    
    //SEKMEDEN ÇIKINCA
	var message = "Geri Gelmeni Bekliyoruz. Hayatı Kodla";
	var original;

	$(window).focus(function() {
	if(original) {
	  document.title = original;
	}
	}).blur(function() {
	var title = $('title').text();
	if(title != message) {
	  original = title;
	}
	document.title = message;
	});
	//SEKMEDEN ÇIKINCA
    
    //HAYATIKODLA TABS
    $('.hayatikodla-tabsContent .tabContent').hide();
    $('.hayatikodla-tabsContent .tabContent:eq(0)').show();
    $('.hayatikodla-tabs .tab').on('click',function(){
        
        var tabIndex = $(this).index();
        
        $('.hayatikodla-tabsContent .tabContent').hide();
        $('.hayatikodla-tabsContent .tabContent:eq('+tabIndex+')').show();
        
        $('.hayatikodla-tabs .tab').removeClass('active');
        $(this).addClass('active');
    });
    //HAYATIKODLA TABS
    
    //GÜNAYDIN CANIM KODU ONAYLA
    $('.whatsapp-onay-frm .kodyolla-btn').on('click',function(){
        
        var adsoyad = $('#adsoyad').val();
        var tel = $('#tel').val();
        var hata = true;
        
        //BOŞLUK KONTROLÜ
		$('.whatsapp-onay-frm input[type="text"]').each(function(i,e){
			
			if($(e).val() == ''){
				var onceki = $(e).attr('placeholder');
				setTimeout(function(){
					$(e).attr('placeholder','Boş Bıraktınız').css({'border':'solid 1px #ae0000'});
					$(e).addClass("error");
					//err.play();
				},250*i);
				
				setTimeout(function(){
					$(e).attr('placeholder',onceki).css({'border':'1px solid #29234a'});
					$(e).removeClass("error");
				},3000);
				
				hata = true;
			}else{
				$(e).attr('placeholder','Boş Bıraktınız').css({'border':'1px solid green'});
			}
			
		});
		//BOŞLUK KONTROLÜ
        
        //TELEFON 0 İLE Mİ BAŞLIYOR
        if(tel.startsWith('0')){
            hata = false;
        }else{
            hata = true;
            $('#tel').val('').attr('placeholder','Telefon Numaranız 0 ile başlamalıdır');
        }
        //TELEFON 0 İLE Mİ BAŞLIYOR
        
        if(hata == false){
        
            $('.whatsapp-onay-frm .resuls .alert').removeClass('alert-danger').addClass('alert-info text-center').text('Kod Yollanıyor. Whatsapp\'ınızı Kontrol Edin...');
            
            $.post(gunaydincanimAPI,{'action':'kodyolla',adsoyad,tel},function(e){
                
                $('.whatsapp-onay-frm .resuls .alert').addClass('alert-'+e.status+' text-center').text(e.text);
                
                if(e.id != null){
                    
                    var uyeid = e.id;
                    
                    var sor = setInterval(function(){
                        
                        $.post(gunaydincanimAPI,{'action':'kodkontrol',uyeid},function(e){
                            
                            if(e.status == 'success'){
                                $('.whatsapp-onay-frm').slideUp();
                                $('.kod-onay-frm').slideDown();
                                clearInterval(sor);
                                
                                //KOD ONAYLA
                                $('.kod-onay-frm .kodonayla-btn').on('click',function(){
                                    
                                    var kod = $('#kod').val();
                                    $.post(gunaydincanimAPI,{'action':'koddogrula',uyeid,kod},function(e){
                                        
                                        if(e.status == 'success'){
                                            $('.kod-onay-frm-container').remove();
                                        }
                                        
                                        $('.kod-onay-frm .resuls .alert').addClass('alert-'+e.status+' text-center').text(e.text);
                                        
                                    },"json");
                                    
                                    return false;
                                });
                                //KOD ONAYLA
                                
                            }
                            
                        },"json");
                        
                    },1000);
                    
                }
                
            },"json");
        
        }else{
            $('.whatsapp-onay-frm  .resuls .alert').addClass('alert-danger text-center').text('Lütfen Tüm Alanları Doldurun');
        }
        return false;
    });
    //GÜNAYDIN CANIM KODU ONAYLA
    
    
    
});