
<!DOCTYPE html>

<html {!! get_language_attributes() !!}>
   <!--<![endif]-->
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />

      <!-- Set the viewport width to device width for mobile -->
      <meta property="og:image" content="../../assets/images/facebook_pic.jpg"/>
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" id="google-fonts-css"  href="http://fonts.googleapis.com/css?family=Roboto%3A400%2C100%2C300%2C500%2C700%2C500italic%2C400italic%2C300italic%2C100italic&#038;ver=4.5.16" type="text/css" media="all" />
      <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/scripts/modernizr.js"></script>

      <link rel="shortcut icon" href="../../assets/images/favicon.ico">
      <link rel="apple-touch-icon" sizes="57x57" href="../../assets/images/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="114x114" href="../../assets/images/apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="72x72" href="../../assets/images/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="144x144" href="../../assets/images/apple-touch-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="60x60" href="../../assets/images/apple-touch-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="120x120" href="../../assets/images/apple-touch-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="76x76" href="../../assets/images/apple-touch-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="152x152" href="../../assets/images/apple-touch-icon-152x152.png">
      <link rel="icon" type="image/png" href="../../assets/images/favicon-196x196.png" sizes="196x196">
      <link rel="icon" type="image/png" href="../../assets/images/favicon-160x160.png" sizes="160x160">
      <link rel="icon" type="image/png" href="../../assets/images/favicon-96x96.png" sizes="96x96">
      <link rel="icon" type="image/png" href="../../assets/images/favicon-16x16.png" sizes="16x16">
      <link rel="icon" type="image/png" href="../../assets/images/favicon-32x32.png" sizes="32x32">
    @php wp_head() @endphp
   </head>
   <body class="<?php body_class(); ?>">
      <a id="nav-toggle"><span></span></a>
      <!--[if lt IE 9 ]> 
      <div id="IE">Your browser is not capable of viewing this web experience. Please upgrade to Chrome, Firefox, or the latest version of Internet Explorer to view this site.</div>
      <![endif]-->
      <section id="site-wrapper">
         <header id="site-header">
            <div class="row">
               <div id="header-content">
                  <section id="header-phone" class="header-left"><a class="show-for-large-up" href="tel:12483369600"><span class="show-for-large-up">Call Us: (248) 336-9600</span></a><a class="hide-for-large-up" href="tel:12483369600"><span class="hide-for-large-up">Call Us</span></a></section>
                  <section id="header-appt" class="header-right"><a class="show-for-large-up" href="#" data-reveal-id="modal-appt"><span class="show-for-large-up">Request a showing</span></a><a class="hide-for-large-up" href="#" data-reveal-id="modal-appt"><span class="hide-for-large-up">Tour</span></a></section>
                  <div id="modal-appt" class="reveal-modal" data-reveal>
                     <h2>Contact Lofts On 9</h2>
                        <form action="" method="post">
                             <div class="row">
                              <div class="large-12 columns">
                                 <label>Full Name*<br />
                                 <input type="text" name="fullname" />
                                 </label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="large-8 columns">
                                 <label>Email Address*<br />
                                 <input type="email" name="email" />
                                 </label>
                              </div>
                              <div class="large-4 columns">
                                 <label>Phone Number*<br />
                                 <span class="phone"><input type="tel" name="phone" /></span>
                                 </label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="large-12 columns">
                                 <label>
                                    Which Unit Are You Interested In? <br />
                                       <select name="selectunit">
                                          <option value="">---</option>
                                          <option value="Tribeca Grand I">Tribeca Grand I</option>
                                          <option value="Tribeca Grand II">Tribeca Grand II</option>
                                          <option value="Tribeca">Tribeca</option>
                                          <option value="Tribeca Jr">Tribeca Jr</option>
                                          <option value="Soho Grand I">Soho Grand I</option>
                                          <option value="Soho Grand II">Soho Grand II</option>
                                          <option value="Soho">Soho</option>
                                          <option value="Soho Jr">Soho Jr</option>
                                       </select>
                                 </label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="large-12 columns">
                                 <label>Are you renting or buying?*<br />
                                 <span class="interested">
                                 <span class="first">
                                 <input type="checkbox" name="interested[]" value="I am renting" />
                                 <span>I am renting</span>
                                 </span>
                                 <span class="last">
                                 <input type="checkbox" name="interested[]" value="I am buying" />
                                 <span>I am buying</span>
                                 </span>
                                 </span>
                                 </label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="large-12 columns">
                                 <label>Looking For<br />
                                 <span class="lookingfor">
                                 <span class="first">
                                 <input type="checkbox" name="lookingfor[]" value="Studio" />
                                 <span>Studio</span>
                                 </span>
                                 <input type="checkbox" name="lookingfor[]" value="1 Bedroom" />
                                 <span>1 Bedroom</span>
                                 </span>
                                 <span class="last">
                                 <input type="checkbox" name="lookingfor[]" value="2 Bedroom" />
                                 <span class="wpcf7-list-item-label">2 Bedroom</span>
                                 </span>
                                 </label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="large-12 columns">
                                 <label>Questions?
                                 <span class="questions">
                                 <textarea name="questions" cols="40" rows="10" placeholder="What questions do you have?"></textarea>
                                 </span>
                                 </label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="large-12 columns">
                                 <input type="submit" value="Send" />
                              </div>
                           </div>
                           
                        </form>
                     </div>
                     <a class="close-reveal-modal">&#215;</a>
                  </div>
               </div>
            </div>
         </header>
