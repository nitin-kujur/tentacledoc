                        <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                          </div>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- <p> -->
                            <a href="http://sunoray.com/" class="pull-right"><img src="<?php echo home_url()?>/wp-content/uploads/2016/06/sunoray_logo.png"></a>
                            <!-- </p> -->
                          </div>
                        </div>
                      
                        <!-- <div class="row" id="footer">    
                          <div class="col-sm-6">
                            
                          </div> -->
                          <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><a href="#" class="pull-right">©Copyright 2013</a></p>
                          </div> -->
                        <!-- </div> -->
                      
                      <hr/>
                      
                      <h4 class="text-center">
                      ©Copyright 2013 - 2016. Powered by <a href="http://sunoray.com/" target="ext">Sunoray</a> and <a href="http://www.tentaclecloud.com/" target="ext">Tentacle</a>
                      </h4>
                        
                      <hr/>

                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>

 <div id="goUpbtn" class="w3-card-2" onclick="goUp()"  style="border-radius: 50%;
          border:3px solid #1a1a1a; 
          background-color: teal; 
          color: white; 
          text-align: center; 
          width: 48px; height: 48px; 
          position: fixed; 
          bottom: 10px; right: 10px; 
          font-size: 20px;
          cursor: pointer;"><i id="ficon" class="glyphicon glyphicon-circle-arrow-up" style="font-size:24px;
          
          position: relative;
          top: 50%;
          transform: translateY(-50%);
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);"></i></div>

<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        			<!-- Update Status -->
              </div>
              <div class="modal-body">
                  <!-- <form class="form center-block">
                    <div class="form-group">
                      <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
                    </div>
                  </form> -->
              </div>
              <div class="modal-footer">
                 <!--  <div>
                  <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
                    <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
        		  </div>	 -->
          </div>
      </div>
  </div>
</div>

	
    <script type="text/javascript">
    /* off-canvas sidebar toggle */
    $(document).ready(function(){
      $('[data-toggle=offcanvas]').click(function() {
        $(this).toggleClass('visible-xs text-center');
        $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
        $('.row-offcanvas').toggleClass('active');
        $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
        $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
        $('#btnShow').toggle();
       });
      
    });

     function goUp(){
         	 	jQuery("#ditto").animate({
	                scrollTop: "0"
	              }, 1000);
         	 }

    // $(function(){
    //   var currencies = [
    //     { value: 'Afghan afghani', data: 'AFN' },
    //     { value: 'Albanian lek', data: 'ALL' },
    //     { value: 'Algerian dinar', data: 'DZD' },
    //     { value: 'European euro', data: 'EUR' },
    //     { value: 'Angolan kwanza', data: 'AOA' },
    //     { value: 'East Caribbean dollar', data: 'XCD' },
    //     { value: 'Vietnamese dong', data: 'VND' },
    //     { value: 'Yemeni rial', data: 'YER' },
    //     { value: 'Zambian kwacha', data: 'ZMK' },
    //     { value: 'Zimbabwean dollar', data: 'ZWD' }
    //   ];

    //   $('#autocomplete').autocomplete({
    //     lookup: currencies,
    //     onSelect: function (suggestion) {
    //     // some function here
    //     }
    //   });

    // });

      // setup autocomplete function pulling from currencies[] array
      // $('#autocomplete').autocomplete({
      //   lookup: currencies,
      //   onSelect: function (suggestion) {
      //     var thehtml = '<strong>Currency Name:</strong> ' + suggestion.value + ' <br> <strong>Symbol:</strong> ' + suggestion.data;
      //     $('#outputcontent').html(thehtml);
      //   }
      // });
    
    </script>

    <?php
	$menu_name = 'ByRole';
?>

<script type="text/javascript">
 $(function(){
	var list = <?php create_custom_list( $menu_name )?>;
  // var menuList = JSON.parse(list);
  var menuList = (new Function("return [" + list + "];")());
  console.log(list);
	console.log(menuList);

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

                            $menu_list[] = '{value:"'.$menu_item->title.'",data:"'.$menu_item->url.'"}';


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

                                              $menu_array2[] = '{value:"'.$value.'",data:"'.$subsubmenu->url.'"}';

                                          }
                                      }
                                      if( $bool2 == true && count( $menu_array2 ) > 0 ) {
                                           
                                          $value = preg_replace("/(\+&nbsp;)/", "", $submenu->title);
                                          $value = preg_replace("/(&nbsp;)/", " ",$value);
                                          
                                          $menu_list[] = '{value:"'.$value.'",data:"'.$submenu->url.'"}';

                                          foreach( $menu_array2 as $menu_array2_item ) {
                                          			$menu_list[] = $menu_array2_item;
                                          		}
                                           
                                      } else {
                                          
                                      	$value = preg_replace("/(\+&nbsp;)/", "", $submenu->title);
                                        $value = preg_replace("/(&nbsp;)/", " ",$value);

                                      	$menu_list[] = '{value:"'.$value.'",data:"'.$submenu->url.'"}';
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
                 
                echo ("'".implode( ",", $menu_list)."'");


								 //print("<pre>".print_r($menu_list,true)."</pre>");


            }

            ?>

	</body>
</html>
