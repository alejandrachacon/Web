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
       
      <header align="right">
            <div class="title">
             <img src="<?php echo $this->baseurl ?>/img/title.jpg" alt="ByLesassier" width="370px" height="70px" id = "title-img" style="left:60%" >
             <br>
              <img src="<?php echo $this->baseurl ?>/img/subtitle.jpg" alt="Manisfestation through visuals" width="500px" height="40px" id = "subtitle-img" style="left:60%" >
             <br>
              <!-- 
                <h4> "All & none of what you need" </h4>
              -->
            </div>
         </header>
       <main>

           <div class="linea">
                
                <div class="btn" id="portfolio">
                     <img src="<?php echo $this->baseurl ?>/img/portfolio.jpg" alt="portfolio" width="320px" height="200px" class="rotate" id = "portfolio-img" >
                        
                </div>
                <div class="btn" id="secret" >

                    <img src="<?php echo $this->baseurl ?>/img/secret.jpg" alt="secret" width="20px" height="20px" id = "secret-img" style="display: block;" >
                                        
                </div>

            </div>
            <div class="linea">
                    <div class="btn" id="collabs">

                    <img src="<?php echo $this->baseurl ?>/img/profilez.jpg" alt="collabs" width="320px" height="150px" id = "collabs-img">
                       
                        
                    </div>

                    <div class="btn" id="movements">

                    <img src="<?php echo $this->baseurl ?>/img/movement.jpg" alt="movements" width="320px" height="200px" id = "movements-img">
                        
                        
                    </div>

                    <div class="btn" id="contact">
                        <a href="https://www.instagram.com/bylesassier/">
                            <img src="<?php echo $this->baseurl ?>/img/contact.jpg" alt="contact" width="110px" height="110px" id = "contact-img">
                        </a>
                        
                    </div>
            </div>
            <div class="linea">
                    <div class="btn" id="vintage">

                    <img src="<?php echo $this->baseurl ?>/img/vintage.jpg" alt="vintage" width="320px" height="150px" id = "vintage-img">
                        
                        
                    </div>
                    <div class="btn" id="press">

                    <img src="<?php echo $this->baseurl ?>/img/press.jpg" alt="press" width="320px" height="150px" id = "press-img">
                        
                        
                    </div>
                    <div class="btn" id="one-off">

                    <img src="<?php echo $this->baseurl ?>/img/1-offs.jpg" alt="1-offs" width="320px" height="150px" id = "one-off-img">
                        
                        
                    </div>
                    <div class="btn" id="about">

                        
                    <img src="<?php echo $this->baseurl ?>/img/about.jpg" alt="about" width="100px" height="50px" id = "about-img" >
                        
                    </div>
            </div>
            <div class="linea">
                <div class="btn" id="shop">
                    <a href="https://www.bit.ly/freevenezuelatee">
                        <img src="<?php echo $this->baseurl ?>/img/shop.jpg" alt="shop" width="320px" height="150px" id = "shop-img" >
                    </a>
                </div>
                <div class="btn" id="blog">
                
                        <img src="<?php echo $this->baseurl ?>/img/blog.jpg" alt="Blog" width="150px" height="50px" id = "blog-img" >
                    
                </div>
                <div class="btn" id="head">
                    
                    <img src="<?php echo $this->baseurl ?>/img/head.jpg" alt="Head" width="320px" height="150px" id = "head-img" >
                    
                </div>
               


            </div>
            
       </main>
       <footer>
            <small>&copy; Copyright 2018, ByLesassier Corporation</small>
       </footer>

       

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
