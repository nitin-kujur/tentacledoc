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

 <div id="goUpbtn" class="w3-card-2" onclick="goUp()"  style=""><i id="ficon" class="glyphicon glyphicon-circle-arrow-up"></i></div>

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
         	 	jQuery("html").animate({
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
	</body>
</html>
