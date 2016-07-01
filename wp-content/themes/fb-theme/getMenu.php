<?php
	$menu_name = 'ByRole';
?>

<script type="text/javascript">
 $(function(){
	var list = "["+<?php create_custom_list( $menu_name )?>+"]";
  var menuList = JSON.parse(list);
	console.log(list);
   $('#autocomplete').autocomplete({
        lookup: menuList,
        onSelect: function (suggestion) {
          $('#searchBtn').setAttribute('onclick',' ajaxGetdoc("'+suggestion.data+'")');
        }
      });
 });
</script>

<?php 

            function create_custom_list( $theme_location ) {
                if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
                    $menu = get_term( $locations[$theme_location], 'nav_menu' );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
             				
                    // $menu_list = [];

                    foreach( $menu_items as $menu_item ) {
                        if( $menu_item->menu_item_parent == 0 ) {
                             
                            $parent = $menu_item->ID;

                            $value = preg_replace("/[+]/", ".", $menu_item->title);
                            $value1 = preg_replace("/(&nbsp;)/", ".",$value);

                            $menu_list[] = '{"value":"'.$menu_item->title.'","data":'.$menu_item->url.'"}';


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

                                              $value = preg_replace("/(\+&nbsp;)/", "", $subsubmenu->title);
                                              $value = preg_replace("/(&nbsp;)/", " ",$value);

                                              $menu_array2[] = '{"value":"'.$value.'","data":'.$subsubmenu->url.'"}';

                                          }
                                      }
                                      if( $bool2 == true && count( $menu_array2 ) > 0 ) {
                                           
                                          $value = preg_replace("/(\+&nbsp;)/", "", $submenu->title);
                                          $value = preg_replace("/(&nbsp;)/", " ",$value);
                                          
                                          $menu_list[] = '{"value":"'.$value.'","data":'.$submenu->url.'"}';

                                          foreach( $menu_array2 as $menu_array2_item ) {
                                          			$menu_list[] = $menu_array2_item;
                                          		}
                                           
                                      } else {
                                          
                                      	$value = preg_replace("/(\+&nbsp;)/", "", $submenu->title);
                                        $value = preg_replace("/(&nbsp;)/", " ",$value);

                                      	$menu_list[] = '{"value":"'.$value.'","data":'.$submenu->url.'"}';
                                      }
                                    // ----------------------------------------------

                                }
                            }
                            
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
                 
                echo implode( ",", $menu_list);


								 //print("<pre>".print_r($menu_list,true)."</pre>");


            }

            ?>