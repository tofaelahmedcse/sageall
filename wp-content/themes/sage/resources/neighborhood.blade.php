{{--
  Template Name: Neighborhood Template
--}}
@extends('layouts.app')

@section('content')
<div class="overlay overlay-menu">
<section id="mainnav" class="break">
<nav>
    @if (has_nav_menu('overlay_menu'))
            {!! wp_nav_menu(['theme_location' => 'overlay_menu', 'menu_id' => 'menu-main-menu', 'container' => '']) !!}
    @endif 
</nav>
<a href="{{ home_url('/') }}" title="Back to Home" id="home"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo-loftson9.png"/></a>
</section>
</div>
 <aside class="bg-body" style="background: url('<?php echo get_template_directory_uri();?>/assets/images/neighbor.jpg') center center no-repeat">
  <div class="gradientblk"></div>
  <div id="container-h1" class="row">
    <!-- <a href="index.html" title="Back to Home" class="logo"><img src="wp-content/themes/lofts9/images/logo-loftson9.png"/></a> -->
    <h1><?php the_title(); ?></h1>
  </div>
</aside>
<div class="row">
	<div id="body-main">
    <!-- Main Content -->
    <div id="body-content" role="main">
<article id="page-16" class="post-16 page type-page status-publish has-post-thumbnail hentry">
<section class="article-ui page">
<aside>
<?php 
   $content_sections =get_field('content_section');
    foreach ($content_sections as $content_section) :
?>
    <h2><?php echo $content_section['content_title']; ?></h2>
    <?php echo $content_section['content_text']; ?>

<?php endforeach; ?>

<p><a class="cta" title="Contact Lofts on 9" href="contact.html">Contact us today!</a></p>
</aside>
  <?php 
   $images_sections =get_field('images_section');
    $i = 1;
    foreach ($images_sections as $images_section) :
?>
  
	  <aside class="<?php if($i == 1){echo 'sideleft';} elseif($i == 2){echo 'sideright';}?>" style="background: url(<?php echo $images_section['image']; ?>) center center no-repeat;"></aside>
	  
<?php $i++; endforeach; ?>	
</section>
<!-- Sidebar -->
<aside id="sidebar">
<div id="price-promo" data-equalizer>
  <aside class="sideright" style="background: url(<?php the_field('penthouses_bottom_background_image');?>) center center no-repeat;" data-equalizer-watch></aside>
  <aside class="sideleft" data-equalizer-watch><span class="logo"><img src="<?php the_field('penthouses_bottom_logo_image');?>" width="160"/></span>
    <h3 style="margin: 3.5rem 0 2rem;"><span><?php the_field('penthouses_bottom_content');?></span><span class="ph"><?php the_field('penthouses_bottom_content');?></span></h3>
    <a href="<?php the_field('penthouses_bottom_button_one_link');?>" class="cta" title="Click here to contact us."><?php the_field('penthouses_bottom_button_one_text');?></a><a href="<?php the_field('penthouses_bottom_button_two_link');?>" class="cta app" title="Click here to download application form." target="_blank"><?php the_field('penthouses_bottom_button_two_text');?></a>
  </aside>
</div>
</aside>
<!-- End Sidebar --></article>						
    </div>
    <!-- End Main Content -->
	</div>
</div>
@endsection