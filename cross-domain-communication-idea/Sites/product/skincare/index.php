<!DOCTYPE html>
<html>
   <head>
      <!-- Standard Meta -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <!-- Site Properties -->
      <title>Homepage - Semantic</title>
      <link rel="stylesheet" type="text/css" href="../../dist/components/reset.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/site.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/container.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/grid.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/header.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/image.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/menu.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/divider.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/dropdown.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/segment.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/button.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/list.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/card.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/icon.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/sidebar.css">
      <link rel="stylesheet" type="text/css" href="../../dist/components/transition.css">
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
         .ui.secondary.pointing.menu .active.item {
          border:none;
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
      <script src="../../jquery.min.js"></script>
      <script src="../../dist/components/transition.js"></script>
      <script src="../../dist/components/dropdown.js"></script>
      <script src="../../dist/components/visibility.js"></script>
      <script>
         $(document)
           .ready(function() {
         
             // fix menu when passed
             $('.main.menu').visibility({
               type: 'fixed'
             });
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
            <a class="item" href="/news">News</a>
            <div class="ui dropdown item">
               Product
               <i class="dropdown icon"></i>
               <div class="menu">
                  <a class="item active selected" href="/product">Skincare</a>
                  <div class="item">MakeUP</div>
                  <div class="item">Tools</div>
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
         <a class="item" href="/news">News</a>
         <div class="ui dropdown item">
            Product
            <i class="dropdown icon"></i>
            <div class="menu">
               <a class="item active selected" href="/product">Skincare</a>
               <div class="item">MakeUP</div>
               <div class="item">Tools</div>
            </div>
         </div>
         <a class="item" href="/about">About</a>
         <a class="item" href="/contact">Contact</a>
         <a class="item">Login</a>
         <a class="item">Signup</a>
      </div>
      <!-- Page Contents -->
      <div class="pusher">
        <div class="ui container">
           <div class="ui large secondary pointing menu">
              <a class="toc item">
              <i class="sidebar icon"></i>
              </a>
              <a class="item">Home</a>
              <a class="item" href="/news">News</a>
              <div class="ui dropdown item">
                 Product
                 <i class="dropdown icon"></i>
                 <div class="menu">
                    <a class="item active selected" href="/product">Skincare</a>
                    <div class="item">MakeUP</div>
                    <div class="item">Tools</div>
                 </div>
              </div>
              <a class="item" href="/about">About</a>
              <a class="item" href="/contact">Contact</a>
              <div class="right item">
                 <a class="ui basic button">Log in</a>
                 <a class="ui basic button">Sign Up</a>
              </div>
           </div>
        </div>
        <div class="ui doubling stackable grid container">
           <div class="sixteen wide column">
              <div class="ui basic segment">
                 <h1 class="ui header">Skincare</h1>
              </div>
           </div>
           <div class="three wide column">
              <div class="ui secondary vertical menu">
                 <div class="item">
                    <div class="header">Products</div>
                    <div class="menu">
                       <a class="item">Enterprise</a>
                       <a class="item">Consumer</a>
                    </div>
                 </div>
                 <div class="item">
                    <div class="header">CMS Solutions</div>
                    <div class="menu">
                       <a class="item">Rails</a>
                       <a class="item">Python</a>
                       <a class="item">PHP</a>
                    </div>
                 </div>
                 <div class="item">
                    <div class="header">Hosting</div>
                    <div class="menu">
                       <a class="item">Shared</a>
                       <a class="item">Dedicated</a>
                    </div>
                 </div>
                 <div class="item">
                    <div class="header">Support</div>
                    <div class="menu">
                       <a class="item">E-mail Support</a>
                       <a class="item">FAQs</a>
                    </div>
                 </div>
              </div>
           </div>
           <div class="thirteen wide column">
              <div class="ui cards">
                 <?php $f = file('productlist.txt'); 
                    foreach ($f as $line) {
                     $arr = explode("/", $line); ?>
                 <div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                    <div class="image">
                       <img src="<?php echo $arr[2]; ?>">
                    </div>
                    <div class="content">
                       <div class="header">$<?php echo $arr[1]; ?></div>
                       <div class="description">
                          <?php echo $arr[0]; ?>
                       </div>
                    </div>
                    <div class="ui two bottom attached buttons">
                       <div class="ui button">
                          <i class="add icon"></i>
                          Mark
                       </div>
                       <div class="ui primary button">
                          <i class="play icon"></i>
                          Buy
                       </div>
                    </div>
                 </div>
                 <?php } ?>
              </div>
              <div class="sixteen wide column">
                 <div class="ui center aligned basic segment">
                    <div class="ui pagination menu">
                       <a class="active item">
                       1
                       </a>
                       <a class="item">
                       2
                       </a>
                       <a class="item">
                       3
                       </a>
                       <div class="disabled item">
                          ...
                       </div>
                       <a class="item">
                       10
                       </a>
                       <a class="item">
                       11
                       </a>
                       <a class="item">
                       12
                       </a>
                    </div>
                 </div>
              </div>
           </div>
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