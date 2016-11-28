<!DOCTYPE html>
<html>
   <head>
      <!-- Standard Meta -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <!-- Site Properties -->
      <title>Homepage - Semantic</title>
      <link rel="stylesheet" type="text/css" href="../dist/components/reset.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/site.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/container.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/grid.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/header.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/image.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/menu.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/divider.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/dropdown.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/segment.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/button.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/list.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/icon.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/sidebar.css">
      <link rel="stylesheet" type="text/css" href="../dist/components/transition.css">
      <style type="text/css">
         .hidden.menu {
         display: none;
         }
         .ui.vertical.stripe {
         padding: 8em 0em;
         }
         .ui.vertical.stripe h3 {
         font-size: 2em;
         }
         .ui.vertical.stripe .button + h3,
         .ui.vertical.stripe p + h3 {
         margin-top: 3em;
         }
         .ui.vertical.stripe .floated.image {
         clear: both;
         }
         .ui.vertical.stripe p {
         font-size: 1.33em;
         }
         .ui.vertical.stripe .horizontal.divider {
         margin: 3em 0em;
         }
         .quote.stripe.segment {
         padding: 0em;
         }
         .quote.stripe.segment .grid .column {
         padding-top: 5em;
         padding-bottom: 5em;
         }
         .overlay {
         float: left;
         margin: 0em 3em 1em 0em;
         }
         .overlay .menu {
         position: relative;
         left: 0;
         transition: left 0.5s ease;
         }
         .overlay.fixed .menu {
         left: 800px;
         }
         .text.container .left.floated.image {
         margin: 2em 2em 2em -4em;
         }
         .text.container .right.floated.image {
         margin: 2em -4em 2em 2em;
         }
         .ui.footer.segment {
         margin: 5em 0em 0em;
         padding: 5em 0em;
         }
         .secondary.pointing.menu .toc.item {
         display: none;
         }
         @media only screen and (max-width: 700px) {
         .ui.fixed.menu {
         display: none !important;
         }
         .secondary.pointing.menu .item,
         .secondary.pointing.menu .menu {
         display: none;
         }
         .secondary.pointing.menu .toc.item {
         display: block;
         }
         .masthead.segment {
         min-height: 350px;
         }
         .masthead h1.ui.header {
         font-size: 2em;
         margin-top: 1.5em;
         }
         .masthead h2 {
         margin-top: 0.5em;
         font-size: 1.5em;
         }
         }
      </style>
      <script src="../jquery.min.js"></script>
      <script src="../dist/components/transition.js"></script>
      <script src="../dist/components/dropdown.js"></script>
      <script src="../dist/components/visibility.js"></script>
      <script>
         $(document)
           .ready(function() {
         
             // fix menu when passed
             // fix menu when passed
		      $('.masthead')
		        .visibility({
		          once: false,
		          onBottomPassed: function() {
		            $('.fixed.menu').transition('fade in');
		          },
		          onBottomPassedReverse: function() {
		            $('.fixed.menu').transition('fade out');
		          }
		        })
		      ;

             $('.overlay').visibility({
               type: 'fixed',
               offset: 80
             });
         
             // lazy load images
             $('.image').visibility({
               type: 'image',
               transition: 'vertical flip in',
               duration: 500
             });
         
             // show dropdown on hover
             $('.ui.menu  .ui.dropdown').dropdown({
               on: 'hover'
             });
         
             // create sidebar and attach to menu open
             $('.ui.sidebar')
               .sidebar('attach events', '.toc.item')
             ;
         
           })
         ;
      </script>
   </head>
   <body>
      <!-- Following Menu -->
      <div class="ui large top fixed hidden menu">
         <div class="ui container">
            <a class="item">Home</a>
            <a class="active item" href="/news">News</a>
                     <div class="ui dropdown item">
          Product
       	  <i class="dropdown icon"></i>
          <div class="menu">
           <a class="item" href="/product">Skincare</a>
           <div class="item">Automotive</div>
           <div class="item">Home</div>
           </div>
        </div>
            <a class="item" href="/about">About</a>
            <a class="item" href="/contact">Contact</a>
            <div class="right menu">
               <div class="item">
                  <a class="ui button">Log in</a>
               </div>
               <div class="item">
                  <a class="ui primary button">Sign Up</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Sidebar Menu -->
      <div class="ui vertical inverted sidebar menu">
         <a class="item">Home</a>
         <a class="active item" href="/news">News</a>
         <div class="ui dropdown item">
          Product
       	  <i class="dropdown icon"></i>
          <div class="menu">
           <a class="item" href="/product">Skincare</a>
           <div class="item">Automotive</div>
           <div class="item">Home</div>
           </div>
        </div>
         <a class="item" href="/about">About</a>
         <a class="item" href="/contact">Contact</a>
         <a class="item">Login</a>
         <a class="item">Signup</a>
      </div>
      <!-- Page Contents -->
      <div class="pusher">
         <div class="ui container masthead">
            <div class="ui large secondary pointing menu">
               <a class="toc item">
               <i class="sidebar icon"></i>
               </a>
               <a class="item">Home</a>
               <a class="active item" href="/news">News</a>
               <div class="ui dropdown item">
                  Product
               	  <i class="dropdown icon"></i>
                  <div class="menu">
	               <a class="item" href="/product">Skincare</a>
	               <div class="item">Automotive</div>
	               <div class="item">Home</div>
	               </div>
	            </div>
               <a class="item" href="/about">
                  About
               </a>
               <a class="item" href="/contact">Contact</a>
               <div class="right item">
                  <a class="ui basic button">Log in</a>
                  <a class="ui basic button">Sign Up</a>
               </div>
            </div>
         </div>
         <h2 class="ui center aligned icon header">
            <i class="circular cloud icon"></i>
            News
         </h2>
         <div class="ui text container">
            <p>Here’s the thing about skincare: just when you think you have every product category covered, something new is guaranteed to come along and squeeze its way into your daily rotation. Most recently, we’d just finished figuring out how to tackle exfoliation from head to toe when a certain scrub appeared out of the blue and immediately won our hearts.</p>
            <p>The exfoliant in question is the Tatcha Smoothing Black Sugar Body Gommage, and there’s definitely nothing else like it in your shower right now. First of all, it’s blue — we’re talking an intense shade of navy reminiscent of the ocean. The rich hue comes courtesy of indigo extract, a plant that helps calm irritation, reduce inflammation, and strengthen the skin’s barrier. To boost its benefits, Tatcha pairs this ingredient with other skincare superstars like camellia oil and black sugar from Okinawa. The former contains a generous dose of essential fatty acids and antioxidants to moisturize your skin, while the latter forms the powerful base of the scrub.</p>
            <p>“Okinawa black sugar has been beloved for centuries in Japan because it’s so rich in potassium, iron, calcium, and other essential minerals — and it’s delicious,” explains Tatcha founder Vicky Tsai. We can confirm that this smells really yummy, but the real magic is in how the sugar granules have been hand-processed for a gentle finish, so that the scrub can be used on pretty much any skin type. It’s especially ideal if you have super sensitive or dry skin. “Sugar scrubs are less harsh, as compared to salt, and are very hydrating,” says Dr. Elizabeth Tanzi, director of Capital Laser & Skin Care and assistant clinical professor of dermatology at the George Washington University Medical Center. “They’re best used once or twice a week.”</p>
            <div class="overlay">
               <div class="ui labeled icon vertical menu">
                  <a class="item"><i class="twitter icon"></i> Tweet</a>
                  <a class="item"><i class="facebook icon"></i> Share</a>
                  <a class="item"><i class="mail icon"></i> E-mail</a>
               </div>
            </div>
            <p>Even if you wouldn’t classify your skin as particularly sensitive or dry, you might still consider grabbing a sugar scrub this summer. “I love these because you can scrub them on, and then leave on the skin as a glycolic for an extra peel,” says Joanna Vargas, celebrity facialist and founder of Joanna Vargas Salon and Skincare Collection. Other benefits of incorporating a product like this into your summer routine? “Body scrubs increase collagen production, make the skin smooth, and maintain elasticity,” she says.</p>
            <p>We should also point out that Tatcha’s body scrub isn’t exactly a scrub; it’s actually a gommage. “A gommage is a beautiful combination of an exfoliant and an oil,” explains Vicky, “Celebrity esthetician Yolanda Mata told me how she would combine our Pure One Step Camellia Cleansing Oil and Polished Rice Enzyme Powder into a gommage and use it in the shower, particularly on her neck. We came up with a full-body version that gently sloughs away the skin to promote cell turnover, while at the same time hydrating and nourishing with the botanical oil.” In other words, you’re getting an additional layer of skin benefits.</p>
            <p>As for how to best use this summer wonder? It’s as straightforward as this: apply, scrub, rinse. The giant tub also comes with a tiny, golden spoon, which is helpful for portioning out the precious contents. In the shower, we’ve been known to sneakily scoop with our fingers before applying all over the body, but we do like the mini utensil for out-of-shower purposes. “I keep it by my sink and apply a bit on my hands at night,” says Vicky. “You can also use this as a lip scrub or on your feet for an at-home pedicure.” Color us obsessed.</p>
         </div>
         <div class="ui inverted vertical footer segment">
            <div class="ui container">
               <div class="ui stackable inverted divided equal height stackable grid">
                  <div class="three wide column">
                     <h4 class="ui inverted header">About</h4>
                     <div class="ui inverted link list">
                        <a href="#" class="item">Sitemap</a>
                        <a href="#" class="item">Contact Us</a>
                        <a href="#" class="item">Religious Ceremonies</a>
                        <a href="#" class="item">Gazebo Plans</a>
                     </div>
                  </div>
                  <div class="three wide column">
                     <h4 class="ui inverted header">Services</h4>
                     <div class="ui inverted link list">
                        <a href="#" class="item">Banana Pre-Order</a>
                        <a href="#" class="item">DNA FAQ</a>
                        <a href="#" class="item">How To Access</a>
                        <a href="#" class="item">Favorite X-Men</a>
                     </div>
                  </div>
                  <div class="seven wide column">
                     <h4 class="ui inverted header">Footer Header</h4>
                     <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>