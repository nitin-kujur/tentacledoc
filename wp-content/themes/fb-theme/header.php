<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes( 'html' ); ?>>
	<head>
		<title><?php bloginfo('name')?></title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<?php wp_head();?>

    <style type="text/css">
      html, body{
        margin:0px !important;
        padding: 0px !important;
      }
    </style>

	</head>
		<body>
		<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
            <!-- sidebar -->
            <div class="column col-md-3 col-sm-3 col-xs-1 sidebar-offcanvas" id="sidebar">
              
              	<ul class="nav">
          			   <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
            	  </ul>
               
                <ul class="nav nav-tabs w3-padding-0">
                  <li class="active col-md-6 text-center w3-padding-0"><a class="w3-hover-none" data-toggle="tab" href="#ByFeature">By Features</a></li>
                  <li class="col-md-6 text-center w3-padding-0"><a class="w3-hover-none" data-toggle="tab" href="#ByRole">By Roles</a></li>
                </ul>

                <div class="tab-content">
                    
                <div id="ByFeature" class="tab-pane fade in active"> 
                <ul class="nav hidden-xs" id="lg-menu">
                    

                    <div class="panel-group" id="accordion">
				    
				            </div> 

                    <!-- <li><a href="#stories"> Stories</a></li>
                    <li><a href="#"> Saved</a></li>
                    <li><a href="#"> Refresh</a></li> -->

					

            <?php 
            
            $menu_name = 'ByFeature';
            create_custom_menus( $menu_name , '1');
            ?>

            <?php 

            function create_custom_menus( $theme_location , $code) {
                if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
                    $menu = get_term( $locations[$theme_location], 'nav_menu' );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
             
                    foreach( $menu_items as $menu_item ) {
                        if( $menu_item->menu_item_parent == 0 ) {
                             
                            $parent = $menu_item->ID;

                            // $menu_list .= '<li>';
                            $menu_list .= '<li><a data-toggle="collapse" data-parent="#accordion" onclick="ajaxGetdoc('."'". $menu_item->url."'".')"'.' href="#'.preg_replace("/[^a-zA-Z]/", "", $menu_item->title).$code.'">' . $menu_item->title . '</a></li>' ."\n";
                            $menu_list .= '<div class="panel-collapse collapse" id="'.preg_replace("/[^a-zA-Z]/", "", $menu_item->title).$code.'"><div class="panel-body"><ul class="nav">'."\n";

                            $menu_array = array();
                            foreach( $menu_items as $submenu ) {
                                if( $submenu->menu_item_parent == $parent ) {
                                    $bool = true;
                                    //$menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";

                                    // ----------------------------------------------
                                      $child = $submenu->ID;
                                      $menu_array2 = array();
                                      foreach( $menu_items as $subsubmenu ) {
                                          if( $subsubmenu->menu_item_parent == $child ) {
                                              $bool2 = true;
                                              $menu_array2[] = '<li><a href="javascript:void(0);" onclick="ajaxGetdoc('."'". $subsubmenu->url ."'". ')">' . $subsubmenu->title . '</a></li>' ."\n";
                                          }
                                      }
                                      if( $bool2 == true && count( $menu_array2 ) > 0 ) {
                                           
                                          
                                          $menu_list .= '<li><a data-toggle="collapse" data-parent="#accordion" onclick="ajaxGetdoc('."'". $submenu->url ."'".')"'.' href="#'.preg_replace("/[^a-zA-Z]/", "", $submenu->title).$code.'">' . $submenu->title . '</a></li>'."\n";
                                           
                                          $menu_list .= '<div class="panel-collapse collapse" id="'.preg_replace("/[^a-zA-Z]/", "", $submenu->title).$code.'"><div class="panel-body"><ul class="nav">' ."\n";
                                          $menu_list .= implode( "\n", $menu_array2 );
                                          $menu_list .= '</ul></div></div>' ."\n";
                                           
                                      } else {
                                           
                                          // $menu_list .= '<li>' ."\n";
                                          $menu_list .= '<li><a href="javascript:void(0);" onclick="ajaxGetdoc('."'" . $submenu->url ."'" . ')">' . $submenu->title . '</a></li>' ."\n";
                                      }
                                    // ----------------------------------------------

                                }
                            }
                            $menu_list .= '</ul></div></div>' ."\n"; 
                            if( $bool == true && count( $menu_array ) > 0 ) {
                                 
                                // $menu_list .= '<li>';
                                // $menu_list .= '<a href="#">' . $menu_item->title . '</a>' ."\n";
                                
                                //$menu_list .= '<ul>' ."\n";
                                //$menu_list .= implode( "\n", $menu_array );
                                //$menu_list .= '</ul>' ."\n";
                                 
                            } else {
                                 
                                // $menu_list .= '<li>';
                                // $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>' ."\n";
                            }
                             
                        }
                         
                    }
                      
                } else {
                    $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
                }
                 
                echo $menu_list;
            }

            ?>


                </ul>
                </div>

                <div id="ByRole" class="tab-pane fade"> 
                <ul class="nav hidden-xs" id="lg-menu">
                    

                    <div class="panel-group" id="accordion">
            
                    </div> 

                      <?php 
                      
                      $menu_name = 'ByRole';
                      create_custom_menus( $menu_name , '2');
                      ?>

                </ul>
                </div>

                </div>
                <!-- tab-content -->


                <!-- <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    <li>
                      <a href="http://www.bootply.com"><i class="glyphicon glyphicon-heart-empty"></i></a>
                    </li>
                </ul> -->
              
              	<!-- tiny only nav-->
                <ul class="nav visible-xs" id="xs-menu">
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                    <!-- <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
                  	<li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li> -->
                </ul>
              
            </div>
            <!-- /sidebar -->
          
            <!-- main right col -->
            <div class="column col-sm-9 col-xs-11" id="main">
                
                <!-- top nav -->
              	<div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                				<span class="icon-bar"></span>
                				<span class="icon-bar"></span>
                      </button>
                      <a href="/" class="navbar-brand logo"><img src="http://localhost/tentacle_doc/wp-content/uploads/2016/06/te-favicon.png" width="20px"></a>
                      <ul class="nav navbar-nav">
                        <li>
                        <h2 style="margin:6px; padding:0px; margin-left:15px;">Tentacle</h2>
                        </li>
                      </ul>
                  	</div>
                  	<nav class="collapse navbar-collapse text-center" role="navigation">
                    <div id="searchfield">
                    <form class="navbar-form navbar-right" style="margin-right:3px;">
                        <div class="input-group input-group-sm" style="max-width:480px;">
                          <input class="form-control fontAwesome biginput" placeholder="&#xF002; Search" name="currency" id="autocomplete" type="text" onkeyup="showHint(this.value)" style="outline: none !important;">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>
                    </div>
                    <!-- <ul class="nav navbar-nav">
                      <li>
                        <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
                      </li>
                      <li>
                        <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                      </li>
                      <li>
                        <a href="#"><span class="badge">badge</span></a>
                      </li>
                    </ul> -->
                  	</nav>
                </div>
                <!-- /top nav -->
