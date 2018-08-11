<footer class="alt-kisim">

    <div class="container">
        <div class="row">
            
            <div class="col-lg-3">
                <div class="logo">
                    <img src="https://www.hayatikodla.com/wp-content/uploads/2018/04/hayatikodla-logo-mini.png" alt="Hayatı Kodla" />
                    <p>
                        Girişim ve Yazılım Blogu
                    </p>
                    <p>Tema V1.0.5.3</p>
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="menu">
                    <div class="baslik">Sayfalar</div>
                    <?php wp_nav_menu( ['theme_location' => 'altmenu1', 'container' => false]); ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="menu">
                    <div class="baslik">Yazılar</div>
                    <?php wp_nav_menu( ['theme_location' => 'altmenu2', 'container' => false]); ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="menu">
                    <div class="baslik">Sosyal Medya</div>
                    <?php wp_nav_menu( ['theme_location' => 'altmenu3', 'container' => false]); ?>
                </div>
            </div>
            
        </div>
    </div>

</footer>

<?php echo wp_footer();?>

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter13174198 = new Ya.Metrika({ id:13174198, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/13174198" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

<script type="application/javascript"> var piioData = { appKey: 'watveq', encodeSrc: false, domain: 'https://hayatikodla.com' } </script>
<script src="//js.piio.co/watveq/piio.min.js"></script>

</body>
</html>