<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes( 'html' ); ?>>
	<head>
		<title><?php bloginfo('name')?></title>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

		
		<?php wp_head();?>
	</head>
		<body>
		<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
          
            <!-- sidebar -->
            <div class="column col-sm-3 col-xs-1 sidebar-offcanvas" id="sidebar">
              
                <ul class="nav">
                <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
              </ul>
               
                <ul class="nav hidden-xs" id="lg-menu">

                    <div class="panel-group" id="accordion">
            
                    </div>

					

            <?php 
            
            $menu_name = 'ByFeature';
            clean_custom_menus( $menu_name );

            

            function clean_custom_menus( $theme_location ) {
                if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
                    $menu = get_term( $locations[$theme_location], 'nav_menu' );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
             
                    foreach( $menu_items as $menu_item ) {
                        if( $menu_item->menu_item_parent == 0 ) {
                             
                            $parent = $menu_item->ID;

                            // $menu_list .= '<li>';
                            $menu_list .= '<li><a data-toggle="collapse" data-parent="#accordion" href="#'.preg_replace("/[^a-zA-Z]/", "", $menu_item->title).'">' . $menu_item->title . '</a></li>' ."\n";
                            $menu_list .= '<div class="panel-collapse collapse" id="'.preg_replace("/[^a-zA-Z]/", "", $menu_item->title).'"><div class="panel-body"><ul class="nav">'."\n";

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
                                              $menu_array2[] = '<li><a href="' . $subsubmenu->url . '">' . $subsubmenu->title . '</a></li>' ."\n";
                                          }
                                      }
                                      if( $bool2 == true && count( $menu_array2 ) > 0 ) {
                                           
                                          
                                          $menu_list .= '<li><a data-toggle="collapse" data-parent="#accordion" href="#'.preg_replace("/[^a-zA-Z]/", "", $submenu->title).'">' . $submenu->title . '</a></li>'."\n";
                                           
                                          $menu_list .= '<div class="panel-collapse collapse" id="'.preg_replace("/[^a-zA-Z]/", "", $submenu->title).'"><div class="panel-body"><ul class="nav">' ."\n";
                                          $menu_list .= implode( "\n", $menu_array2 );
                                          $menu_list .= '</ul></div></div>' ."\n";
                                           
                                      } else {
                                           
                                          // $menu_list .= '<li>' ."\n";
                                          $menu_list .= '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
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
                <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    <li>
                      <a href="http://www.bootply.com"><i class="glyphicon glyphicon-heart-empty"></i> Bootply</a>
                    </li>
                </ul>
              
                <!-- tiny only nav-->
              <ul class="nav visible-xs" id="xs-menu">
                    <li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                    <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
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
                      <a href="/" class="navbar-brand logo">b</a>
                    </div>
                    <nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
                      </li>
                      <li>
                        <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                      </li>
                      <li>
                        <a href="#"><span class="badge">badge</span></a>
                      </li>
                    </ul>
                    <!-- <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                        </ul>
                      </li>
                    </ul> -->
                    </nav>
                </div>
                <!-- /top nav -->
