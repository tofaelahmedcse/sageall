{{--
  Template Name: Lofts Template
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
 <aside class="bg-body" style="background: url('<?php echo get_template_directory_uri();?>/assets/images/Livingroom2.jpg') center center no-repeat">
  <div class="gradientblk"></div>
  <div id="container-h1" class="row">
    <h1><?php the_title(); ?></h1>
  </div>
</aside>
<div class="row">
<div id="body-main">
    <!-- Main Content -->
<div id="body-content" role="main">
<article id="page-9" class="post-9 page type-page status-publish has-post-thumbnail hentry">
<section class="article-ui">
  <aside class="sideleft" style="background: url(<?php the_field('penthouses_content_left_image');?>) center center no-repeat;"></aside>
    <aside><h2><?php the_field('penthouses_content_title');?></h2>
    <?php the_field('penthouses_content_text');?>
    <div class="page-highlight">
    <p><strong>Key Features:</strong></p>
    <ul>
    <?php 
    $key_features = get_field('key_features');
        foreach($key_features as $key_feature) :
    ?>
        <li><?php echo $key_feature['key_feature_item'];?></li>
    <?php endforeach; ?>
    </ul>
    </div>
</aside>
<aside class="sideright" style="background: url(<?php the_field('penthouses_content_right_image');?>) center center no-repeat;"></aside>
</section>
<h2>Single Story Lofts</h2>
<ul id="list-property">
<?php 
    $property_items = get_field('property_items');
    $i = 1;
    foreach($property_items as $property_item) :
?>

    <li class="<?php if($i == 1){echo 'property-row0';} elseif($i == 2){echo 'property-row1';} elseif($i == 3){echo 'property-row0';} elseif($i == 4){echo 'property-row1';}?>">
    <aside class="img-property" style="background: url('<?php echo $property_item['image'];?>') center center no-repeat"></aside>                
    <section class="container-specs" data-equalizer-watch>
    <h3><?php echo $property_item['title'];?></h3>
    <ul class="property-specs">
     <?php 
        $items = $property_item['items'];
        foreach($items as $item) :
    ?>
      <li><span><?php echo $item['item_title'];?>:</span> <?php echo $item['item_value'];?></li>

      <?php endforeach; ?>
    </ul>
    <a href<?php echo $property_item['button_one_link'];?> data-reveal-id="modal-appt" class="cta"><span class="show-for-large-up"><?php echo $property_item['button_one_text'];?></span><span class="hide-for-large-up">Inquire</span></a><br/>
    <a href="<?php echo $property_item['button_two_link'];?>" class="smore" title="Available Units at Lofts on 9"><?php echo $property_item['button_two_text'];?></a>
    </section>
    </li>

<?php $i++; endforeach; ?>

</ul>
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
<!-- End Sidebar -->        
</article>
</div>
    <!-- End Main Content -->
</div>
</div>
@endsection