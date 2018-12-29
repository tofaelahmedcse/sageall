<?php $__env->startSection('content'); ?>
<div class="overlay overlay-menu">
    <section id="mainnav" class="break">
       <nav>
           <?php if(has_nav_menu('overlay_menu')): ?>
            <?php echo wp_nav_menu(['theme_location' => 'overlay_menu', 'menu_id' => 'menu-main-menu', 'container' => '']); ?>

           <?php endif; ?> 
       </nav>
       <a href="<?php echo e(home_url('/')); ?>" title="Back to Home" id="home"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo-loftson9.png"/></a>
    </section>
 </div>
 <!--<div id="wrapper-banner">-->
 <div id="featured-banner" class="hide-for-small">
    <button class="toggle-sfx active"></button>
    <div id="banner1" class="banner">
       <video loop autoplay id="bgvid" class="video-js" preload="auto">
          <source src="http://loftson9.com/wp-content/themes/lofts9/video/lofts_9.mp4" type="video/mp4">
          <source src="http://loftson9.com/wp-content/themes/lofts9/video/lofts_9.webm" type="video/webm">
          <source src="http://loftson9.com/wp-content/themes/lofts9/video/lofts_9.ogv" type="video/ogg">
       </video>
       <span class="gradient"></span>
       <span class="logo-bg"></span>
    </div>
 </div>
 <div id="featured-banner" class="show-for-small">
    <div class="banner">
       <aside class="bg-body" style="background: url('wp-content/uploads/2014/07/Exterior_L9-2.jpg') center center no-repeat"></aside>
       <span class="gradient"></span>
       <span class="logo-bg"></span>
    </div>
 </div>
 <!-- Footer -->
 <div class="push"></div>
</section>
<!-- Site wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>