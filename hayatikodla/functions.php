<?php 
    
    //YAZI BİÇİMİ DESTEĞİ
    add_theme_support('page-formats');
    add_theme_support('post-formats');
    //YAZI BİÇİMİ DESTEĞİ
    
    //SEARCHBOX
    function hayatikodla_search_form( $form ) { 
        $form = '<section class="search">
            <form role="search" method="get" class="searchform" id="search-form" action="' . home_url( '/' ) . '" >
                <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="'.__('Neyi Merak Ediyorsanız...','hayatikodla').'" />
                <input type="submit" id="searchsubmit" value="'. esc_attr__('Ara', 'hayatikodla') .'" />
            </form>
        </section>';
        return $form;
    }
    add_filter( 'get_search_form', 'hayatikodla_search_form' );
    //SEARCHBOX
    
    //SIDEBAR DESTEĞİ
    function hayatikodla_widgets_init() {
        register_sidebar( array(
            'name'          => 'Blog Sidebar',
            'id'            => 'blog_sidebar',
            'before_widget' => '<div class="widget-box">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="widget-baslik">',
            'after_title'   => '</div>',
        ) );
    }
    add_action( 'widgets_init', 'hayatikodla_widgets_init' );
    //SIDEBAR DESTEĞİ
    
    //YAZILARA ÖNE ÇIKAN GÖRSEL EKLE
	add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'page-thumbnails' ); 
	add_theme_support( 'product-thumbnails' ); 
	//YAZILARA ÖNE ÇIKAN GÖRSEL EKLE
    
    //CSS EKLE
    function hayatikodla_css() {
        wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css',[],null,false );
        wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.min.css',[],null,false );
        wp_enqueue_style( 'fontawesome-style', get_template_directory_uri().'/assets/css/fontawesome-all.min.css',[],null,false );
        wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css',[],time(),false );
    }
    add_action( 'wp_enqueue_scripts', 'hayatikodla_css' );
    //CSS EKLE
    
    //JS EKLE
    function hayatikodla_js() {
        wp_enqueue_script( 'jquery-script', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',[],null,true );
        wp_enqueue_script( 'bootstrap-script', get_template_directory_uri().'/assets/js/bootstrap.min.js',[],null,true );
        wp_enqueue_script( 'owl-carousel-script', get_template_directory_uri().'/assets/js/owl.carousel.min.js',[],null,true );
        wp_enqueue_script( 'SmoothScroll-script', get_template_directory_uri().'/assets/js/SmoothScroll.min.js',[],null,true );
        //wp_enqueue_script( 'trackhistory-script', get_template_directory_uri().'/assets/js/trackhistory.js',[],null,true );
        wp_enqueue_script( 'main-script', get_template_directory_uri().'/assets/js/script.js',[],time(),true );
    }
    add_action( 'wp_enqueue_scripts', 'hayatikodla_js' );
    //JS EKLE 
    
    //LOGO DESTEĞİ
    function hayatikodl_logo_setup() {
        $defaults = array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'hayatikodl_logo_setup' );
    //LOGO DESTEĞİ
    
    //NAV MENÜ OLUŞTURMA
	function hayatikodla_menus() {
		$locations = array(
			'ustmenu' => __( 'Üst Menü', 'hayatikodla' ),
			'altmenu1' => __( 'Alt Menü 1', 'hayatikodla' ),
			'altmenu2' => __( 'Alt Menü 2', 'hayatikodla' ),
			'altmenu3' => __( 'Alt Menü 3', 'hayatikodla' ),
		);
		register_nav_menus( $locations );
	}
	add_action( 'init', 'hayatikodla_menus' );
	//NAV MENÜ OLUŞTURMA
    
    //POST GÜVENLİĞİ
    function postGuvenlik(){
        $degerler = [];
        foreach($_POST as $p => $d){
            if(is_string($_POST[$p]) === true){
                $degerler[$p] = trim(strip_tags($d));
            }
        }
        return $degerler;
    }
    //POST GÜVENLİĞİ
    
    //POST KONTROL
    function postKontrol($zorunlu){
        $kontrol = 0;
        foreach($zorunlu as $parametre){
            if(isset($_POST[$parametre]) and !empty($_POST[$parametre])){
                $kontrol++;
            }else{
                return $parametre;
                break;
            }
        }
        if(count($zorunlu)==$kontrol){
            return true;
        }else{
            return false;
        }
    }
    //POST KONTROL