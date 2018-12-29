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
 <aside class="bg-body" style="background: url('wp-content/uploads/neighbor.jpg') center center no-repeat">
  <div class="gradientblk"></div>
  <div id="container-h1" class="row">
    <!-- <a href="index.html" title="Back to Home" class="logo"><img src="wp-content/themes/lofts9/images/logo-loftson9.png"/></a> -->
    <h1>Neighborhood</h1>
  </div>
</aside>
<div class="row">
	<div id="body-main">
    <!-- Main Content -->
    <div id="body-content" role="main">
<article id="page-16" class="post-16 page type-page status-publish has-post-thumbnail hentry">
		<section class="article-ui page">
	  <aside><h2>Luxury Living in Ferndale</h2>
<p>Located in Ferndale’s growing Business District, Lofts on 9 is just moments away from both the diverse city center and its charming neighborhoods. Dine at Ferndale’s best restaurants, including TORINO, the 2014 Detroit Free Press Restaurant of the Year and 2015 HOUR Detroit Restaurant of the Year.</p>
<p>A quick walk from the building will take you to Ferndale City Hall, the Ferndale Police Station, Ferndale Public Schools, Woodward Avenue and the busy Nine Mile strip, a delightful collection of boutiques, eateries and bars. Less than 20 minutes from Michigan’s cities of Detroit, Birmingham and Royal Oak, Lofts on 9 provides the perfect residence for both young professionals and families alike.</p>
<h2>Ferndale to Anywhere</h2>
<p>Detroit&#8217;s major highways are in very close proximity to Ferndale&#8217;s Lofts on 9. In just a few minutes by car you can get on I-75 to head North and South. Looking for another direction? Hop on 696 to head East or West. In a quick drive, visit the Detroit Institute of Arts and see a show at Detroit’s Fox Theatre, or maybe grab a quick bite at Detroit’s famed Lafayette Coney Island and catch a Detroit Tigers game. Treat yourself to lunch and a relaxing spa day in Birmingham. From Lofts on 9, it&#8217;s all available to you in just minutes.</p>
<p>As a resident at Lofts on 9, you can experience all of this and more – whenever you choose. Your next home is waiting for you.</p>
<p><a class="cta" title="Contact Lofts on 9" href="contact.html">Contact us today!</a></p>
</aside>
	  <aside class="sideleft" style="background: url(wp-content/uploads/IMG_0050-1024x682.jpg) center center no-repeat;"></aside>
		<aside class="sideright" style="background: url(wp-content/uploads/IMG_0052-1024x682.jpg) center center no-repeat;"></aside>
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