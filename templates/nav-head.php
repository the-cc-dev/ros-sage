<a id="brandLink" class="" href="<?= esc_url(home_url('/')); ?>">
    <img id="brandImg" class="" src="<?php the_field('header_logo',"option"); ?>" alt="<?php bloginfo('name');  ?>" title="<?php bloginfo('name');  ?>" >
</a><!-- /#brandLink -->

<a id="callLink" class="" href="callto://+1<?php the_field('phone_number','option'); ?>">
    <span id="callIcon" class="fa fa-phone"></span>
</a><!-- /#callLink -->

<a id="mailLink" class="" href="mailto:paul@regionalofficesolutions.com?Subject=Hello">
    <span id="mailIcon" class="fa fa-envelope"></span>
</a><!-- /#mailLink -->   

<button id="mobileToggle" class="" type="button" data-toggle="collapse" data-target="#navBody" aria-expanded="false" aria-controls="navBody">
    <i id="toggleIcon" class="fa fa-bars"></i>
</button><!-- /#mobileToggle -->