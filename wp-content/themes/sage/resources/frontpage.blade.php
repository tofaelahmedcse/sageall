{{--
  Template Name: Home Template
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
 <!--<div id="wrapper-banner">-->
 <div id="featured-banner" class="hide-for-small">
    <button class="toggle-sfx active"></button>
    <div id="banner1" class="banner">
       <video loop autoplay id="bgvid" class="video-js" preload="auto">
          <source src="<?php the_field('video_mp4'); ?>" type="video/mp4">
          <source src="<?php the_field('video_webm'); ?>" type="video/webm">
          <source src="<?php the_field('video_ogg'); ?>" type="video/ogg">
       </video>
       <span class="gradient"></span>
       <span class="logo-bg"></span>
    </div>
 </div>
 <div id="featured-banner" class="show-for-small home">
    <div class="banner">
       <aside class="bg-body" style="background: url('<?php the_field('background_image'); ?>') center center no-repeat"></aside>
       <span class="gradient"></span>
       <span class="logo-bg"></span>
    </div>
 </div>
@endsection