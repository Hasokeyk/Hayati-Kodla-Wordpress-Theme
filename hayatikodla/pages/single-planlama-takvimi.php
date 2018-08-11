<?php 
    /*
        Template Name: Planlama Takvimi
    */
    
    get_header();
?>
<?php 
    $tarihler = get_field('planlama_takvimi');
    arsort($tarihler);
    print_r($tarihler);
?>
<?php 
    get_footer();
?>