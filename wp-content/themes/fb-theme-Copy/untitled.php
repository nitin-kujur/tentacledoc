<?php 
						
            // $menu_name = 'ByFeature';
            // clean_custom_menu( $menu_name );

            // <li><a data-toggle="collapse" data-parent="#accordion" href="#stories">+ Stories</a></li>
            //           <div id="stories" class="panel-collapse collapse in">
            //     <div class="panel-body">
            //       <li><a data-toggle="collapse" data-parent="#accordion" href="#id1">-&nbsp;id1</a></li>
            //        <div id="id1" class="panel-collapse collapse">
            //           <div class="panel-body">
            //           <li><a href="#id2">-id2</a></li>
            //           </div>
            //          </div>
            //     </div>
            //   </div>

            // function clean_custom_menu( $theme_location ) {
            //     if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
            //         $menu = get_term( $locations[$theme_location], 'nav_menu' );
            //         $menu_items = wp_get_nav_menu_items($menu->term_id);
             
            //         foreach( $menu_items as $menu_item ) {
            //             if( $menu_item->menu_item_parent == 0 ) {
                             
            //                 $parent = $menu_item->ID;
                             
            //                 $menu_array = array();
            //                 foreach( $menu_items as $submenu ) {
            //                     if( $submenu->menu_item_parent == $parent ) {
            //                         $bool = true;
            //                         //$menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";


            //                         // ----------------------------------------------
            //                           $child = $submenu->ID;
                             
            //                           $menu_array2 = array();
            //                           foreach( $menu_items as $subsubmenu ) {
            //                               if( $subsubmenu->menu_item_parent == $child ) {
            //                                   $bool2 = true;
            //                                   $menu_array2[] = '<li><a href="' . $subsubmenu->url . '">' . $subsubmenu->title . '</a></li>' ."\n";
            //                               }
            //                           }
            //                           if( $bool2 == true && count( $menu_array2 ) > 0 ) {
                                           
            //                               $menu_list .= '<li>' ."\n";
            //                               $menu_list .= '<a href="#">' . $submenu->title . '</a>' ."\n";
                                           
            //                               //$menu_list .= '<ul>' ."\n";
            //                               $menu_list .= implode( "\n", $menu_array2 );
            //                               //$menu_list .= '</ul>' ."\n";
                                           
            //                           } else {
                                           
            //                               $menu_list .= '<li>' ."\n";
            //                               $menu_list .= '<a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
            //                           }
            //                         // ----------------------------------------------

            //                     }
            //                 }
            //                 if( $bool == true && count( $menu_array ) > 0 ) {
                                 
            //                     $menu_list .= '<li>' ."\n";
            //                     $menu_list .= '<a href="#">' . $menu_item->title . '</a>' ."\n";
                                 
            //                     //$menu_list .= '<ul>' ."\n";
            //                     $menu_list .= implode( "\n", $menu_array );
            //                     //$menu_list .= '</ul>' ."\n";
                                 
            //                 } else {
                                 
            //                     $menu_list .= '<li>' ."\n";
            //                     $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>' ."\n";
            //                 }
                             
            //             }
                         
            //         }
                      
            //     } else {
            //         $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
            //     }
                 
            //     echo $menu_list;
            // }

            ?> 