<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes( 'html' ); ?>>
	<head>
		<title><?php bloginfo('name')?></title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo home_url()?>/wp-content/themes/fb-theme-Copy/css/w3-theme-teal.css">
    <link rel="stylesheet" href="https://www.apple.com/wss/fonts/?family=Myriad+Set+Pro&amp;weights=200,400&amp;v=1" type="text/css" media="all"> 

		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/7.0.0/mark.js"></script> -->
    <script src="<?php echo home_url()?>/wp-content/themes/fb-theme-Copy/js/jquery.highlight-5.closure.js"></script>

    <script>
      $(function() {
        $('a[hrefs="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            point = Number(target.offset().top)-70;
            if (target.length) {
              $('html, body').animate({
                scrollTop: point
              }, 1000);
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
      .w3-sidenav a {padding:16px;font-weight:bold}
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
         transform:scale(1.05,1.05) ;/*translateY(50px);*/
         transition:transform 0.5s;
         transition-delay: 0s;
         transform-origin: 50% 50%;

         -webkit-transform:scale(1.05,1.05);/* translateY(50px);*/
         -webkit-transition:-webkit-transform 0.5s;
         -webkit-transition-delay: 0s;
         -webkit-transform-origin: 50% 50%;
      }

      .sunoraylogo img:hover, .logo{
        transform:scale(1.3,1.3) ;/*translateY(50px);*/
         transition:transform 0.2s;
         transition-delay: 0s;
         transform-origin: 50% 50%;

         -webkit-transform:scale(1.05,1.05);/* translateY(50px);*/
         -webkit-transition:-webkit-transform 0.2s;
         -webkit-transition-delay: 0s;
         -webkit-transform-origin: 50% 50%;
      }
    </style>

	</head>
	<body class="w3-light-grey">

<nav class="w3-sidenav w3-collapse w3-dark-grey w3-animate-left w3-card-2" style="z-index:3;width:250px;" id="mySidenav">
  <!-- <a href="#" class="w3-border-bottom w3-large"><img src="W3.CSSteal_files/w3schools.png" style="width:80%;"></a>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-text-teal w3-hide-large w3-closenav w3-large">Close <i class="fa fa-remove"></i></a> -->
  <div id="searchfield1" style="">
      <form class="navbar-form navbar-right1 text-center" style="">
          <div class="input-group input-group-sm" style="width:210px;">
            <input class="form-control fontAwesome biginput" placeholder="&#xF002; Search" name="keyword" id="keyword" type="text" style="outline: none !important;">
            <div class="input-group-btn">
              <button class="btn btn-default w3-left" type="button" name="perform"><i class="glyphicon glyphicon-search"></i></button>
            </div>
            <!-- -------------------- -->
              <div class="w3-hide">
                    <div class="form-group">
                      <label for="accuracy">Accuracy:</label>
                      <select class="form-control input-sm" name="accuracy" id="accuracy">
                        <option value="exactly">exactly</option>
                        <option value="partially" selected>partially</option>
                        <option value="complementary">complementary</option>
                       </select>
                    </div>
                     <div class="form-group">
                      <label for="element" class="noTransform">Element</label>
                      <input type="text" class="form-control input-sm" value="mark" name="element" id="element">
                    </div>
                    <div class="form-group">
                      <label for="className" class="noTransform">Class name</label>
                      <input type="text" class="form-control input-sm" value="highlight" name="className" id="className">
                    </div>
                    <div class="form-group">
                      <label for="diacritics" class="noTransform"><input type="checkbox" value="true" name="diacritics" id="diacritics" checked> diacritics</label>
                    </div>
                    <div class="form-group">
                      <label for="separateWordSearch" class="noTransform"><input type="checkbox" value="true" name="separateWordSearch" id="separateWordSearch" checked> separate word search</label>
                    </div>
              </div>
            <!-- -------------------- -->
          </div>
      </form>
    </div>
  <div class="w3-hide-largee tab">
    <a href="javascript:void(0)" id="a" onclick="w3_show_nav('admin', 'Adm')" class="w3-center w3-left w3-theme w3-hover-white w3-padding-16 w3-large" style="width:33.33%">A</a>
    <a href="javascript:void(0)" id="m" onclick="w3_show_nav('manager', 'Mgr')" class="w3-center w3-left w3-theme w3-hover-white w3-padding-16 w3-large" style="width:33.33%">M</a>
    <a href="javascript:void(0)" id="t" onclick="w3_show_nav('telecaller', 'Telc')" class="w3-center w3-left w3-theme w3-hover-white w3-padding-16 w3-large" style="width:33.33%">T</a>
  </div>
  <div class="w3-clear"></div>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hide-large" title="close menu">&times;</a>
  <div style="display: block;" id="admin" class="myMenu">
  <div class="w3-container w3-padding-top">
    <h3>Admin</h3>
  </div>
     <div class="" id="accordion">
         <?php 
            
            $menu_name = 'ByFeature';
            create_custom_menus( $menu_name , '1');
            ?>
     </div>
  </div>
  <div id="manager" class="myMenu w3-padding-top" style="display: none;">
  <div class="w3-container">
    <h3>Manager</h3>
  </div>
    <div class="" id="accordion1">
         <?php 
            
            $menu_name = 'ByRole';
            create_custom_menus( $menu_name , '2');
            ?>
    </div>
  </div>
  <div id="telecaller" class="myMenu w3-padding-top" style="display: none;">
  <div class="w3-container">
    <h3>TeleCaller</h3>
  </div>
    <div class="" id="accordion2">
         <?php 
            
            $menu_name = 'ByFeature';
            create_custom_menus( $menu_name , '4');
            ?>
    </div>
  </div>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-top w3-container w3-padding-16 w3-theme w3-large">
  <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <div id="myIntro" class="w3-hide">
    <a href="/" class="navbar-brand logo w3-margin-0 w3-margin-right w3-hover-white"><img src="<?php echo home_url()?>/wp-content/uploads/2016/06/te-favicon.png" width="20px"></a>
    <span>Tentacle Documentation</span>
    
  </div>
</div>

<header class="w3-container w3-theme w3-padding-64" style="padding-left:32px">
  <span class="w3-xxxlarge w3-padding-16">Tentacle</span>
    
</header>

 


<?php 

            function create_custom_menus( $theme_location , $code) {
                if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
                    $menu = get_term( $locations[$theme_location], 'nav_menu' );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
             
                    foreach( $menu_items as $menu_item ) {
                        if( $menu_item->menu_item_parent == 0 ) {
                             
                            $parent = $menu_item->ID;

                            // $menu_list .= '<li>';
                            $menu_list .= '<a class="active" data-toggle="collapse" data-parent="#accordion" href="#'.preg_replace("/[^a-zA-Z]/", "", $menu_item->title).$code.'">' . $menu_item->title .'<span class="w3-margin-right w3-right"><i class="fa fa-angle-down"></i></span>' .'</a>' ."\n";
                            $menu_list .= '<div class="panel-collapse collapse w3-grey" id="'.preg_replace("/[^a-zA-Z]/", "", $menu_item->title).$code.'"><div class="panel-body w3-padding-0">'."\n";

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
                            $menu_list .= '</div></div>' ."\n"; 
                            if( $bool == true && count( $menu_array ) > 0 ) {
                                 
                               
                                 
                            } else {
                                 
                                
                            }
                             
                        }
                         
                    }
                      
                } else {
                    $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
                }
                 
                echo $menu_list;
                if($code=='3')
                print("<pre>".print_r($menu_items,true)."</pre>");
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
                            echo "<h2 class='w3-text-teal w3-xxlarge' id='".$menu_item->ID."'>".$menu_item->title."</h2>";
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
                                          echo "<h2 id='".$submenu->ID."'>".$submenu->title."</h2>";
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