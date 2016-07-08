<?php 

    $role = $GLOBALS["role"];

?>


                       <div id="goUpbtn" class="w3-card-4 w3-hover-shadow" onclick="goUp()"  style="border-radius: 50%;
          border:3px solid #1a1a1a; 
          background-color: teal; 
          color: white !important; 
          text-align: center; 
          width: 48px; height: 48px; 
          position: fixed; 
          bottom: 10px; right: 10px; 
          font-size: 20px;
          cursor: pointer;"><i id="ficon" class="glyphicon glyphicon-circle-arrow-up" style="font-size:24px;
          color:white !important;
          position: relative;
          top: 50%;
          transform: translateY(-50%);
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);"></i></div>

<footer class="w3-container w3-theme w3-padding-32" style="padding-left:32px">
  <h4 class="text-center">
  <a href="http://sunoray.com/" class="text-center w3-hover-none sunoraylogo"><img src="<?php echo home_url()?>/wp-content/uploads/2016/06/sunoray_logo.png"></a>
</h4><br/>
  <h4 class="text-center">
  ©Copyright 2013 - 2016. Powered by <a class="w3-hover-none w3-hover-text-black" href="http://sunoray.com/" target="ext">Sunoray</a> and <a class="w3-hover-none w3-hover-text-black" href="http://www.tentaclecloud.com/" target="ext">Tentacle</a>
  </h4>
</footer>
     
</div>

<script>
// Open and close the sidenav on medium and small screens
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
function w3_show_nav(name1, name2) {
    document.getElementById("admin").style.display = "none";
    document.getElementById("manager").style.display = "none";
    document.getElementById("telecaller").style.display = "none";
    document.getElementById(name1).style.display = "block";

    document.getElementById("Adm").style.display = "none";
    document.getElementById("Mgr").style.display = "none";
    document.getElementById("Telc").style.display = "none";
    document.getElementById(name2).style.display = "block";
    
    // w3_open();
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 140 || document.documentElement.scrollTop > 140) {
        document.getElementById("myTop").classList.add("w3-card-4");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4");
    }
}

// Accordions
function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
    }
}

function goUp(){
            $('#goUpbtn').animateCss('bounceIn');
            jQuery("html, body").animate({
                  scrollTop: "0"
                }, 1000);
           }

</script>
     

 <!-- </body></html> -->
	
   

<?php

  switch ($role) {

    case "Admin":
        $menu_name = 'Admin'; $code = '1';
        break;

    case "Manager":
        $menu_name = 'Manager'; $code = '2';
        break;

    case "TeleCaller":
        $menu_name = 'TeleCaller'; $code = '3';
        break;

    default:
        $menu_name = 'Admin'; $code = '1';
}
	
?>

<script type="text/javascript">
 $(function(){
	var list = <?php create_custom_list( $menu_name, $code )?>;
  //var menuList = JSON.parse('['+list+']');
  var menuList = (new Function("return [" + list + "];")());
  // console.log(list);
	// console.log(menuList);

   $('#autocomplete').autocomplete({
        lookup: menuList,
        onSelect: function (suggestion) {
           btn = document.getElementById('psudoBtn');
           btn.setAttribute('href', '#'+suggestion.data); 
           btn.click();
           
        }
      });
 });
</script>

<?php 

            function create_custom_list( $theme_location, $code ) {
                if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
                    $menu = get_term( $locations[$theme_location], 'nav_menu' );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
             				
                    // $menu_list = [];

                    foreach( $menu_items as $menu_item ) {
                        if( $menu_item->menu_item_parent == 0 ) {
                             
                            $parent = $menu_item->ID;

                            $value = preg_replace("/[+]/", ".", $menu_item->title);
                            $value1 = preg_replace("/(&nbsp;)/", ".",$value);

                            $menu_list[] = '{value:"'.$menu_item->title.'",data:"'.$code.$menu_item->ID.'"}';


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

                                              $menu_array2[] = '{value:"'.$value.'",data:"'.$code.$subsubmenu->ID.'"}';

                                          }
                                      }
                                      if( $bool2 == true && count( $menu_array2 ) > 0 ) {
                                           
                                          $value = preg_replace("/(\+&nbsp;)/", "", $submenu->title);
                                          $value = preg_replace("/(&nbsp;)/", " ",$value);
                                          
                                          $menu_list[] = '{value:"'.$value.'",data:"'.$code.$submenu->ID.'"}';

                                          foreach( $menu_array2 as $menu_array2_item ) {
                                          			$menu_list[] = $menu_array2_item;
                                          		}
                                           
                                      } else {
                                          
                                      	$value = preg_replace("/(\+&nbsp;)/", "", $submenu->title);
                                        $value = preg_replace("/(&nbsp;)/", " ",$value);

                                      	$menu_list[] = '{value:"'.$value.'",data:"'.$code.$submenu->ID.'"}';
                                      }
                                    // ----------------------------------------------

                                }
                            }
                            
                            if( $bool == true && count( $menu_array ) > 0 ) {
                                 
                               
                                 
                            } else {
                                 
                                
                            }
                             
                        }
                         
                    }
                      
                } else {
                    $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
                }
                 
                echo ("'".implode( ",", $menu_list)."'");


								 //print("<pre>".print_r($menu_list,true)."</pre>");


            }

            ?>

	</body>
</html>
