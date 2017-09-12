<?php
    defined('_JEXEC') or die('Restricted access');
?>
<!doctype html>
<html class="no-js"
      xmlns="http://www.w3.org/1999/xhtml" 
      xml:lang="<?php echo $this->language; ?>" 
      lang="<?php echo $this->language; ?>" >
    <head>

        <jdoc:include type="head" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!--here i'm adding to the folder in joomla the .css
        system.css
        general.css
        and the ones downloaded from the initializer for me, to decorate the html5 and for making the site responsive
        normalize.min.css
        main.css
         -->
        <link rel="stylesheet" href="/<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" href="/<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

        <!--Keep in mind that this is the way in PHP to access the root of the folders i think $this is the jdoc document element joomla uses to manage and render everything  -->

        <link rel="stylesheet" href="/<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.min.css" type="text/css" />
        <link rel="stylesheet" href="/<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css" type="text/css" />


        <!-- I haven't proved this yet so i should do the TUTORIAL later on -->
        <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo $this->baseurl ?>/favicon.ico" type="image/x-icon">

        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js">
        </script>
    </head>
    <body>
       
       <div class="principal">

       <header align="right">
           
            <div id="title">

                <h1>By Lesassier</h1>
                <h3> Manisfestation through visuals.</h3>
                <h4> "All & none of what you need" </h4>
                
            </div>

         </header>

       <div class="content">

            <div class="btn" id="portfolio">

                
                
            </div>
            <div class="btn" id="secret">

                
                
            </div>
            <div class="btn" id="collabs">

               
                
            </div>
            <div class="btn" id="movements">

                
                
            </div>
            <div class="btn" id="contact">

                
                
            </div>
            <div class="btn" id="vintage">

                
                
            </div>
            <div class="btn" id="press">

                
                
            </div>
            <div class="btn" id="one-off">

                
                
            </div>
            <div class="btn" id="about">

                
                
            </div>
            <div class="btn" id="shop">

                

            </div>
            <div class="btn" id="blog">

                
                
            </div>
            <div class="btn" id="head">

                
                
            </div>
           


       </div>
           

       </div>
       <div class="footer">
           
       </div>

       

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>

        <script>window.jQuery || document.write('<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')
        </script>

        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js">
        
        </script>


        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-102076892-1','auto');ga('send','pageview');
        </script>
    </body>
</html>
