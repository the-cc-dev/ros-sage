<footer id="rosFooter" class="">
    <div id="footContent" class="">
        
        <div id="footSidebar" class="footer-section">
            <?php dynamic_sidebar('footersb'); ?>
        </div>
        
        <div id="footLogo" class="footer-section">
            <?php get_template_part('templates/biz','footer-logo'); ?>
        </div>
        
        <div id="footInfo" class="footer-section">  
            <?php get_template_part('templates/biz','footer-info'); ?>
        </div>
        
        <div id="footMap" class="footer-section">
            <?php get_template_part('templates/biz','footer-gmap'); ?>
        </div>
        
        <div id="footHours" class="footer-section">
            <?php get_template_part('templates/biz','footer-hours'); ?>
        </div>
        
        <div id="footCopy" class="footer-section">
            <?php get_template_part('templates/biz','footer-copy'); ?>
        </div>
        
    </div>
</footer>
