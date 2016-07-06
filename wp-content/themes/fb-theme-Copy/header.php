<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes( 'html' ); ?>>
	<head>
		<title><?php bloginfo('name')?></title>
    <meta name="author" content="NITIN KUJUR">

		<!-- jQuery library -->
		<script src="<?php echo home_url()?>/wp-content/themes/fb-theme-Copy/js/jquery-1.11.2.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php echo home_url()?>/wp-content/themes/fb-theme-Copy/js/jquery.highlight-5.closure.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="<?php echo home_url()?>/wp-content/themes/fb-theme-Copy/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo home_url()?>/wp-content/themes/fb-theme-Copy/css/w3.css">
    <link rel="stylesheet" href="<?php echo home_url()?>/wp-content/themes/fb-theme-Copy/css/w3-theme-teal.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.apple.com/wss/fonts/?family=Myriad+Set+Pro&amp;weights=200,400&amp;v=1" type="text/css" media="all"> 

    <script>
       $.fn.extend({
               animateCss: function (animationName) { 
               var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
               $(this).addClass('animated ' + animationName).one(animationEnd, function() {
               $(this).removeClass('animated ' + animationName);
              });
            }
          });

      $(function() {
        $('a[hrefs="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            point = Number(target.offset().top)-65;
            if (target.length) {
              $('html, body').animate({
                scrollTop: point
              }, 600);
              // $(window).scrollBy(0,100);
              // alert(Number(target.offset().top));
              return false;
            }
          }
        });
      });

    </script>
		
		<?php wp_head();?>

    <style type="text/css">
      html, body{
        margin:0px !important;
        padding: 0px !important;
        font-family:  "Myriad Set Pro","Helvetica Neue","Helvetica","Arial","Verdana","sans-serif";
      }
      .w3-sidenav a {padding:8px;font-weight:bold;}
      /*.context :not(p), .context :not(img), .context :not(div), .context :not(h2) {
        background: #f1c40f;
        padding: 0;
      }*/
      .highlight { background-color: yellow; }
      hr{
        margin: 20px 0px;
        border: 1px solid lightgrey;
      }
      a:hover{
        background: rgb(204,204,204) !important;
        color:teal;
        /*box-shadow: 0px 0px 5px 0.5px gray;*/
         transform:scale(1.05,1.05) ;/*translateY(50px);*/
         transition:transform 0.5s;
         transition-delay: 0s;
         transform-origin: 50% 50%;

         -webkit-transform:scale(1.05,1.05);/* translateY(50px);*/
         -webkit-transition:-webkit-transform 0.5s;
         -webkit-transition-delay: 0s;
         -webkit-transform-origin: 50% 50%;
      }

      a:focus{
        color:teal;
      }

      .sunoraylogo img:hover, .logo:hover{
        transform:scale(1.2,1.2) ;/*translateY(50px);*/
         transition:transform 0.2s;
         transition-delay: 0s;
         transform-origin: 50% 50%;

         -webkit-transform:scale(1.2,1.2);/* translateY(50px);*/
         -webkit-transition:-webkit-transform 0.2s;
         -webkit-transition-delay: 0s;
         -webkit-transform-origin: 50% 50%;
      }

      .row div img{
        box-shadow: 0px 0px 5px 0.5px gray;
      }

      #searchBtn{
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        outline: none;
        box-shadow: none;
        border: transparent;
      }

      #autocomplete{
        outline: none;
        box-shadow: none;
        border: transparent;
      }

      .autocomplete-suggestions{
        transform:scale(1.19,1) translateX(13px);
        -webkit-transform:scale(1.19,1) -webkit-translateX(13px);
      }

      #mySidenav{
        width: 250px;
      }

      @media only screen and (orientation: portrait){
        #mySidenav{
          width: 60%;
        }
      }

     /* @media only screen and (min-width: 1304px) {
        #mySidenav{
          width: 20%;
        }
      }*/

      /*#mySidenav p, input, button{
          font-size: 10px !important;
        }

         #mySidenav h3{
          font-size: 25px !important;
         }

        input, button {
          width:auto !important;
        }

        input, button{
          height: auto !important;
        }

        #goUpbtn{
          
        }*/
      }

      /*@media only screen and (max-width: 1024px) {
        #mySidenav{
          width: 30%;
        }
      }

      @media only screen and (max-width: 768px) {
        #mySidenav{
          width: 40%;
        }
      }

      @media only screen and (max-width: 480px) {
        #mySidenav{
          width: 80%;
        }*/

        /*#mySidenav p, input, button{
          font-size: 35px !important;
        }

         #mySidenav h3{
          font-size: 48px !important;
         }

        input {
          width:600px !important;
        }

        input, button{
          height: 64px !important;
        }

        #goUpbtn{
          font-size: 45px !important;
          width: 60px !important;
          height: 60px !important;
        }*/
      }

      
    </style>

	</head>
	<body class="w3-light-grey">

<nav class="w3-sidenav w3-collapse w3-dark-grey- w3-animate-left w3-card-2" style="z-index:3;width:; background:rgb(39,39,39); color:white;" id="mySidenav">
  <!-- <a href="#" class="w3-border-bottom w3-large"><img src="W3.CSSteal_files/w3schools.png" style="width:80%;"></a>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-text-teal w3-hide-large w3-closenav w3-large">Close <i class="fa fa-remove"></i></a> -->
  <div id="searchfield1" style="">
      <form class="navbar-form navbar-right1 text-center" style="" onsubmit="event.preventDefault(); enter();" method="post">
          <div class="input-group input-group-sm" style="width:210px;">
            <input class="form-control fontAwesome biginput" placeholder="&#xF002; Search" name="currency" id="autocomplete" type="text" style="outline: none !important;">
            <div class="input-group-btn">
              <button id="searchBtn" class="btn btn-default w3-left" type="submit" name="perform"><i class="glyphicon glyphicon-search"></i></button>
              <a id="psudoBtn" href="" hrefs="#" style="display:none;"></a>
            </div>
          </div>
      </form>
    </div>
  <div class="w3-hide-largee tab">
    <a href="javascript:void(0)" id="a" title="Admin" onclick="w3_show_nav('admin', 'Adm')" class="w3-center w3-left w3-theme w3-hover-white w3-padding-16 w3-large" style="width:33.33%">A</a>
    <a href="javascript:void(0)" id="m" title="Manager" onclick="w3_show_nav('manager', 'Mgr')" class="w3-center w3-left w3-theme w3-hover-white w3-padding-16 w3-large" style="width:33.33%">M</a>
    <a href="javascript:void(0)" id="t" title="TeleCaller" onclick="w3_show_nav('telecaller', 'Telc')" class="w3-center w3-left w3-theme w3-hover-white w3-padding-16 w3-large" style="width:33.33%">T</a>
  </div>
  <div class="w3-clear"></div>
    <a href="javascript:void(0);" onclick="w3_close();" class="w3-right1 w3-hover-none w3-xlarge w3-padding1 w3-hide-large w3-hover-text-teal w3-closebtn" title="close menu"><i class="fa fa-times-circle w3-margin"></i></a>
  
  <div style="display: block;" id="admin" class="myMenu w3-animate-opacity w3-padding-top">
  <div class="w3-container">
    <p class="w3-animate-left w3-large">Admin</p>
  </div>
     <div class="" id="accordion">
         <?php 
            
            $menu_name = 'Admin';
            create_custom_menus( $menu_name , '1');
            ?>
     </div>
  </div>
  <div id="manager" class="myMenu w3-padding-top w3-animate-opacity" style="display: none;">
  <div class="w3-container">
    <p class="w3-animate-left w3-large">Manager</p>
  </div>
    <div class="" id="accordion1">
         <?php 
            
            $menu_name = 'Manager';
            create_custom_menus( $menu_name , '2');
            ?>
    </div>
  </div>
  <div id="telecaller" class="myMenu w3-padding-top w3-animate-opacity" style="display: none;">
  <div class="w3-container">
    <p class="w3-animate-left w3-large">TeleCaller</p>
  </div>
    <div class="" id="accordion2">
         <?php 
            
            $menu_name = 'TeleCaller';
            create_custom_menus( $menu_name , '3');
            ?>
    </div>
  </div>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-top w3-container w3-padding-8 w3-theme w3-large">
  <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <div id="myIntro" class="w3-hide">
    <a href="http://sunoray.com" target="ext" class="navbar-brand logo w3-margin-0 w3-margin-left w3-margin-right w3-hover-white w3-animate-zoom"><img class="img-responsive" src="<?php echo home_url()?>/wp-content/uploads/2016/06/te-favicon.png" width="20px"></a>
    <span class="w3-animate-left">Tentacle Documentation</span>
    
  </div>
</div>

<header class="w3-container w3-theme w3-padding-48" style="padding-left:32px">
  <a href="http://sunoray.com" target="ext" class="w3-margin-0 w3-hover-none w3-padding w3-margin-right w3-margin-left w3-hover-white w3-hover-shadow w3-white w3-round w3-animate-opacity" style="display:block;"><img src="<?php echo home_url()?>/wp-content/uploads/2016/07/Tentacle.png" width="200px">
  <span class="w3-xxlarge w3-animate-left w3-text-teal w3-right" style="display:inline-block; margin-top:5px;">Tentacle Documentation</span></a>
    
</header>

 


<?php 

            function create_custom_menus( $theme_location , $code) {
                if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
                    $menu = get_term( $locations[$theme_location], 'nav_menu' );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
             
                    foreach( $menu_items as $menu_item ) {
                        if( $menu_item->menu_item_parent == 0 ) {
                             
                            $parent = $menu_item->ID;

                             $menu_list .= '<a hrefs="#" href="#'.$code.$menu_item->ID.'" ><p>' . $menu_item->title . '</p></a>' ."\n";
                            // $menu_list .= '<a data-toggle="collapse" data-parent="#accordion" href="#'.preg_replace("/[^a-zA-Z]/", "", $menu_item->title).$code.'"><h3 class="w3-large">' . $menu_item->title .'<span class="w3-margin-right w3-right"><i class="fa fa-angle-down w3-xlarge"></i></span></h3>' .'</a>' ."\n";
                            // $menu_list .= '<div class="panel-collapse collapse w3-grey" id="'.preg_replace("/[^a-zA-Z]/", "", $menu_item->title).$code.'"><div class="panel-body w3-padding-0">'."\n";

                            $menu_array = array();
                            foreach( $menu_items as $submenu ) {
                                if( $submenu->menu_item_parent == $parent ) {
                                    $bool = true;

                                    // ----------------------------------------------
                                      $child = $submenu->ID;
                                      $menu_array2 = array();
                                      foreach( $menu_items as $subsubmenu ) {
                                          if( $subsubmenu->menu_item_parent == $child ) {
                                              $bool2 = true;
                                              $menu_array2[] = '<a hrefs="#" href="#'.$subsubmenu->ID.'" >' . $subsubmenu->title . '</a>' ."\n";
                                          }
                                      }
                                      if( $bool2 == true && count( $menu_array2 ) > 0 ) {
                                           
                                          
                                          $menu_list .= '<a data-toggle="collapse" data-parent="#accordion" href="#'.preg_replace("/[^a-zA-Z]/", "", $submenu->title).$code.'">' . $submenu->title . '</a>'."\n";
                                           
                                          $menu_list .= '<div class="panel-collapse collapse" id="'.preg_replace("/[^a-zA-Z]/", "", $submenu->title).$code.'"><div class="panel-body w3-padding-0">' ."\n";
                                          $menu_list .= implode( "\n", $menu_array2 );
                                          $menu_list .= '</div></div>' ."\n";
                                           
                                      } else {
                                           
                                          $menu_list .= '<a hrefs="#" href="#'.$submenu->ID.'" >' . $submenu->title . '</a>' ."\n";
                                      }
                                    // ----------------------------------------------

                                }
                            }
                            //$menu_list .= '</div></div>' ."\n"; 
                            if( $bool == true && count( $menu_array ) > 0 ) {
                                 
                               
                                 
                            } else {
                                 
                                
                            }
                             
                        }
                         
                    }
                      
                } else {
                    $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
                }
                 
                echo $menu_list;
                // if($code=='3')
                // print("<pre>".print_r($menu_items,true)."</pre>");
            }

            ?>
		

            <?php

                function show_post( $theme_location , $code) {
                if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
                    $menu = get_term( $locations[$theme_location], 'nav_menu' );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
             
                    foreach( $menu_items as $menu_item ) {
                        if( $menu_item->menu_item_parent == 0 ) {
                             
                            $parent = $menu_item->ID;

                            // $menu_list .= '<a data-toggle="collapse" data-parent="#accordion" href="#'.preg_replace("/[^a-zA-Z]/", "", $menu_item->title).$code.'">' . $menu_item->title . '</a>' ."\n";
                            // $menu_list .= '<div class="panel-collapse collapse w3-grey" id="'.preg_replace("/[^a-zA-Z]/", "", $menu_item->title).$code.'"><div class="panel-body w3-padding-0">'."\n";
                            echo "<h2 class='w3-text-teal w3-xxlarge' id='".$code.$menu_item->ID."'>".$menu_item->title."</h2>";
                            $id = $menu_item->object_id;
                            $post = get_post($id);
                            $output = apply_filters( 'the_content', $post->post_content );
                            if(!empty($output))
                            echo '<div class="w3-leftbar w3-section w3-padding-large w3-large w3-border-teal w3-margin-left" style="width:100%;margin:20px 0;">'.$output.'</div>';
                            echo "<hr>";
                            wp_reset_query();

                            $menu_array = array();
                            foreach( $menu_items as $submenu ) {
                                if( $submenu->menu_item_parent == $parent ) {
                                    $bool = true;
                                    wp_reset_query();
                                    // ----------------------------------------------
                                      $child = $submenu->ID;
                                      $menu_array2 = array();
                                      foreach( $menu_items as $subsubmenu ) {
                                          if( $subsubmenu->menu_item_parent == $child ) {
                                              $bool2 = true;
                                              // $menu_array2[] = '<a href="javascript:void(0);" >' . $subsubmenu->title . '</a>' ."\n";
                                              wp_reset_query();
                                          }
                                      }
                                      if( $bool2 == true && count( $menu_array2 ) > 0 ) {
                                           
                                          
                                          // $menu_list .= '<a data-toggle="collapse" data-parent="#accordion" href="#'.preg_replace("/[^a-zA-Z]/", "", $submenu->title).$code.'">' . $submenu->title . '</a>'."\n";
                                           
                                          // $menu_list .= '<div class="panel-collapse collapse" id="'.preg_replace("/[^a-zA-Z]/", "", $submenu->title).$code.'"><div class="panel-body w3-padding-0">' ."\n";
                                          // $menu_list .= implode( "\n", $menu_array2 );
                                          // $menu_list .= '</div></div>' ."\n";
                                           
                                      } else {
                                           
                                          // $menu_list .= '<a href="javascript:void(0);" >' . $submenu->title . '</a>' ."\n";
                                          echo "<h2 id='".$code.$submenu->ID."'>".$submenu->title."</h2>";
                                          $id = $submenu->object_id;
                                          $post = get_post($id);
                                          $output = apply_filters( 'the_content', $post->post_content );
                                          if(!empty($output))
                                          echo '<div class="w3-leftbar w3-section w3-padding-large w3-large w3-border-teal w3-margin-left" style="width:100%;margin:20px 0;">'.$output.'</div>';
                                          echo "<hr>";
                                          wp_reset_query();
                                      }
                                    // ----------------------------------------------

                                }
                            }
                            // $menu_list .= '</div></div>' ."\n"; 
                            if( $bool == true && count( $menu_array ) > 0 ) {
                                 
                               
                                 
                            } else {
                                 
                                
                            }
                             
                        }
                         
                    }
                      
                } else {
                    // $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
                }
                 
                // echo $menu_list;
                // if($code=='3')
                // print("<pre>".print_r($menu_items,true)."</pre>");
            }

            ?>