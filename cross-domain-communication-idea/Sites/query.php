<!DOCTYPE html>
<html>
   <head>
      <!-- Standard Meta -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <!-- Site Properties -->
      <title>MengxuanCai_User</title>
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
      <link rel="stylesheet" type="text/css" href="../../dist/components/form.css">
      <style type="text/css">
         .hidden.menu {
         display: none;
         }
         .masthead.segment {
         min-height: 700px;
         padding: 1em 0em;
         }
         .masthead .ui.menu .ui.button {
         margin-left: 0.5em;
         }
         .masthead h1.ui.header {
         margin-top: 3em;
         margin-bottom: 0em;
         font-size: 4em;
         font-weight: normal;
         }
         .masthead h2 {
         font-size: 1.7em;
         font-weight: normal;
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
            <a class="item" href="../">Home</a>
            <a class="item" href="/news">News</a>
            <div class="ui dropdown item">
               Product
               <i class="dropdown icon"></i>
               <div class="menu">
                  <a class="item" href="/product/skincare">Skincare</a>
                  <a class="item" href="/product/makeUp">MakeUp</a>
                  <a class="item" href="/product/tools">Tools</a>
               </div>
            </div>
            <a class="item" href="/about">About</a>
            <a class="item" href="/contact">Contact</a>
            <a class="item" href="../>User</a>
            <div class="right menu">
               <div class="item">
                  <a class="ui button" href ="../../secureSection">Login</a>
               </div>
               <div class="item">
                  <a class="ui primary button" href ="../../secureSection">SignUp</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Sidebar Menu -->
      <div class="ui vertical inverted sidebar menu">
         <a class="item" href="../">Home</a>
         <a class="item" href="/news">News</a>
         <div class="ui dropdown item">
            Product
            <i class="dropdown icon"></i>
            <div class="menu">
               <a class="item" href="/product/skincare">Skincare</a>
               <a class="item" href="/product/makeUp">MakeUp</a>
               <a class="item" href="/product/tools">Tools</a>
            </div>
         </div>
         <a class="item" href="/about">About</a>
         <a class="item" href="/contact">Contact</a>
         <a class="item">User</a>
         <a class="item" href ="../secureSection">Login</a>
         <a class="item" href ="../secureSection">Signup</a>
      </div>
      <!-- Page Contents -->
      <div class="pusher">
         <div class="ui container">
            <div class="ui large secondary pointing menu">
               <a class="toc item">
               <i class="sidebar icon"></i>
               </a>
               <a class="item" href="../">Home</a>
               <a class="item" href="/news">News</a>
               <div class="ui dropdown item">
                  Product
                  <i class="dropdown icon"></i>
                  <div class="menu">
                     <a class="item" href="/product/skincare">Skincare</a>
                     <a class="item" href="/product/makeUp">MakeUp</a>
                     <a class="item" href="/product/tools">Tools</a>
                  </div>
               </div>
               <a class="item" href="/about">About</a>
               <a class="item" href="/contact">Contact</a>
               <a class="item"href="../">User</a>
               <div class="right item">
                  <a class="ui basic button" href ="../secureSection">Login</a>
                  <a class="ui basic button" href ="../secureSection">SignUp</a>
               </div>
            </div>
         </div>
         <div class="ui doubling stackable grid container">
            <div class="sixteen wide column">
               <div class="ui vertical masthead segment">
                  <div class="ui text container">
                     <div class="ui segment">
                        <div class="ui stackable column grid">
                           <?php
                              extract($_POST);
                              //build seletc query
                              echo "\n";
                              $query = "SELECT ".$select." FROM users";
                              //connect to mysql
                              if(!($database = mysql_connect('localhost', 'ritacccc', 'Cmxcmx1211=='))) {
                                 die("could not connect to database");
                              }
                              //open products database
                              if(!mysql_select_db("ritacccc_mc", $database)) {
                                 die("could not open users database");
                              }
                              
                              $querySql = "SELECT UserName,FirstName,LastName,Email,HomeAddress,HomePhone,CellPhone FROM users WHERE ".$select." = '".$catagory."'";
                              $result = mysql_query($querySql);
                              if (!$result) {
                                  echo 'Could not run query: ' . mysql_error();
                                  exit;
                              }
                              $row = mysql_fetch_row($result);
                              
                              echo "<table class=\"ui violet 
                              table\">";
                                echo "<thead>";
                                  echo "<tr>";
                                    echo "<th>UserName</th>";
                                    echo "<th>FirstName</th>";
                                    echo "<th>LastName</th>";
                                    echo "<th>Email</th>";
                                    echo "<th>HomeAddress</th>";
                                    echo "<th>HomePhone</th>";
                                    echo "<th>CellPhone</th>";
                                  echo "</tr>";
                                echo "</thead>";
                                  echo "<tbody>";
                                     echo "<tr>";
                                       echo "<td>$row[0]</td>";
                                       echo "<td>$row[1]</td>";
                                       echo "<td>$row[2]</td>";
                                       echo "<td>$row[3]</td>";
                                       echo "<td>$row[4]</td>";
                                       echo "<td>$row[5]</td>";
                                       echo "<td>$row[6]</td>";
                                    echo "</tr>";
                                 echo "</tbody>";
                              echo "</table>";
                              mysql_close($database);  
                              // the email value
                           ?>
                        </div>
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