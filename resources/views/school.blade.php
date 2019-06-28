<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
    <!DOCTYPE html>
    <html>
    <head>
    <title>Great Places to School</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu -->
    <link href="css/component.css" rel="stylesheet" type="text/css"  />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- //menu -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- //fonts -->
 
</head>
    <body class="cbp-spmenu-push">
         <!--top-header-->
            <!--bottom-->
             
    <!-- banner -->
    <div class="w3layouts-banner">
        <div class="container">
            <div class="wthree-header">
                <div class="w3l-logo">
                    <h1><a href="index.html">Great Places to School</a></h1>
                </div> 
                <div class="agileinfo-tleft">
                    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                                    <h3>Menu</h3>
                                    <a href="index.html" class="active">Home</a>
                                    <a href="about.html">About us</a>
                                    <a href="gallery.html">Gallery</a>
                                    <a href="icons.html">Icons</a>
                                    <a href="contact.html">Contact</a>
                                </nav>
                                <div class="main buttonset">	
                                        <!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
                                        <button id="showRightPush"><img src="images/menu.png" alt=""/></button>
                                        <!--<span class="menu"></span>-->
                                </div>
                                <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                                <script src="js/classie.js"></script>
                                <script>
                                    var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
                                    showRightPush = document.getElementById( 'showRightPush' ),
                                    body = document.body;
    
                                    showRightPush.onclick = function() {
                                        classie.toggle( this, 'active' );
                                        classie.toggle( body, 'cbp-spmenu-push-toleft' );
                                        classie.toggle( menuRight, 'cbp-spmenu-open' );
                                        disableOther( 'showRightPush' );
                                    };
    
                                    function disableOther( button ) {
                                        if( button !== 'showRightPush' ) {
                                            classie.toggle( showRightPush, 'disabled' );
                                        }
                                    }
                                </script>
                                <!-- /script-for-menu -->
                </div>
                <div class="clearfix"></div>			
            </div>
            <div class="w3l_banner_info">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="wthree_banner_info_grid">
                                        <h3>Pellentesque turpis .</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nibh at ligula pharetra, eu semper dui tristique. Phasellus mi sapien.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="wthree_banner_info_grid">
                                        <h3>Tempor vitae placerat.</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nibh at ligula pharetra, eu semper dui tristique. Phasellus mi sapien.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="wthree_banner_info_grid">
                                        <h3>Vitae placerat eu.</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nibh at ligula pharetra, eu semper dui tristique. Phasellus mi sapien.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                            <!-- flexSlider -->
                                <script defer src="js/jquery.flexslider.js"></script>
                                <script type="text/javascript">
                                $(window).load(function(){
                                  $('.flexslider').flexslider({
                                    animation: "slide",
                                    start: function(slider){
                                      $('body').removeClass('loading');
                                    }
                                  });
                                });
                              </script>
                            <!-- //flexSlider -->
                            
                </div>	
                    <div class="w3l-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <div class="clearfix"></div>
                                </ul>
                            </div>		
    
        </div>
    </div>
    <!-- //banner -->
    <!-- who -->
    <div class="agileinfo-who">
        <div class="container">
            <div class="col-md-6 agileinfo-who-left">
                <h2>WHO ARE WE</h2>
            </div>
            <div class="col-md-6 agileinfo-who-right">
               <p>The Global Peace Foundation, Trends and Insights for Africa (TiFA), the Kenya Private Schools Association (KPSA) and the Standard Group launched the initiative to identify, rate and recognise secondary schools in Kenya with innovative learning environment.</p>
                <div class="agileinfo-news-button">
                    
                    <a href="{{url('/home')}}" class="hvr-shutter-in-horizontal" data-target="#myModal">Get your School nominated</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //who -->
    <!-- services -->
    <div class="w3-agileits-services">
            <div class="container">
                    <div class="w3-agileits-services-top">
                            <h3>WHY US</h3>
                            <p>Nulla egestas sapien at lobortis mattis. Pellentesque nec quam ligula. Duis hendrerit libero vitae odio tincidunt venenatis. </p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 col-sm-4 w3-agileits-services-grid">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                        <h4>Standard Chunk</h4>
                        <p>Nulla egestas sapien at lobortis mattis. Pellentesque nec quam ligula. Duis hendrerit libero vitae odio tincidunt venenatis. </p>
                    </div>
                    <div class="col-md-4 col-sm-4 w3-agileits-services-grid">
                
                        <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                        <h4>Nullam Ultrices</h4>
                        <p>Nulla egestas sapien at lobortis mattis. Pellentesque nec quam ligula. Duis hendrerit libero vitae odio tincidunt venenatis. </p>
                    </div>
                    <div class="col-md-4 col-sm-4 w3-agileits-services-grid">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                        <h4>Donec vitae</h4>
                        <p>Nulla egestas sapien at lobortis mattis. Pellentesque nec quam ligula. Duis hendrerit libero vitae odio tincidunt venenatis.</p>
                    </div>
                    
                    
                    <div class="clearfix"></div>
                </div>
           </div>
    <!-- //services -->
    
    <div class="agileinfo_footer_bottom">
                <div class="container">
                    <div class="col-md-3 agileinfo_footer_bottom_grid">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque 
                            id arcu neque, at convallis est felis.</p>
                        
                    </div>
                    <div class="col-md-3 agileinfo_footer_bottom_grid">
                        <h3>Our links</h3>
                        <div class="w3-agile-foot">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-md-3 agileinfo_footer_bottom_grid">
                        <h3>Latest Tweets</h3>
                        <ul class="twi agileits_twitter">
                            <li><i class="fa fa-twitter" aria-hidden="true"></i>Praesent imperdiet diam sagittis, egestas augue id <a href="#" class="mail">
                            @http:example.com</a> <span>ABOUT 15 MINS</span></li>
                            <li><i class="fa fa-twitter" aria-hidden="true"></i>Mauris tristique, dolor vel iaculis vestibulum<a href="#" class="mail">
                            @http:example.com</a> <span>ABOUT 2 HOURS AGO</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 agileinfo_footer_bottom_grid">
                        <h3>Flickr Feed</h3>
                        <div class="flickr-grids">
                            <div class="flickr-grid agileits_w3layouts_flickr">
                                <a href="#"><img src="images/5.jpg" alt=" " class="img-responsive"></a>
                            </div>
                            <div class="flickr-grid  agileits_w3layouts_flickr">
                                <a href="#"><img src="images/6.jpg" alt=" " class="img-responsive"></a>
                            </div>
                            <div class="flickr-grid  agileits_w3layouts_flickr">
                                <a href="#"><img src="images/7.jpg" alt=" " class="img-responsive"></a>
                            </div>
                            <div class="clearfix"> </div>
                            
                            <div class="flickr-grid  agileits_w3layouts_flickr">
                                <a href="#"><img src="images/8.jpg" alt=" " class="img-responsive"></a>
                            </div>
                            <div class="flickr-grid  agileits_w3layouts_flickr">
                                <a href="#"><img src="images/9.jpg" alt=" " class="img-responsive"></a>
                            </div>
                            <div class="flickr-grid  agileits_w3layouts_flickr">
                                <a href="#"><img src="images/10.jpg" alt=" " class="img-responsive"></a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
    <!-- copy-right -->
    <div class="w3ls-copy-right">
        <div class="container">
                <p> &copy; 2016 Elucidation . All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
        </div>
    </div>
    <!-- //copy-right -->
    <!-- modal -->
    <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header"> 
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                                    <h4 class="modal-title">Elucidation</h4>
                                </div> 
                                <div class="modal-body">
                                    <div class="agileits-w3layouts-info">
                                        <img src="images/10.jpg" class="img-responsive" alt="" />
                                        <p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //modal -->  
    
    <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    
    
    </body>
    </html>