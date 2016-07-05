<?php get_header();?>
              

 <div id="Adm" class="w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:block; ">
    <?php 
            
            $menu_name = 'ByFeature';
            show_post( $menu_name , '3');
            ?>                         
 </div>

 <div id="Mgr" class="w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:none;">
    <?php 
            
            $menu_name = 'ByRole';
            show_post( $menu_name , '3');
            ?>                          
 </div>

 <div id="Telc" class="w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:none;">
    <?php 
            
            $menu_name = 'ByFeature';
            show_post( $menu_name , '3');
            ?>                          
 </div>
                         
 <script type="text/javascript">
function enter(){
  //getElementById('searchBtn').click();
  return false;
}

$(function() {
  var $context = $(".context");
  var $form = $("form");
  var $button = $form.find("button[name='perform']");
  var $input = $form.find("input[name='currency']");

  $button.on("click", function() {
  	// $('#highlight-plugin').removeHighlight();
  	//$input.val('');
  	$('.highlight').css('background-color','transparent');
  	$('#highlight-plugin').removeHighlight();
  	var searchTerm = $input.val();
  	$('p').highlight(searchTerm);
  });

  $input.bind("change keyup input", function() {
  	if($input.val().length == 0){
  		$('.highlight').css('background-color','transparent');
  		$('#highlight-plugin').removeHighlight();
  	}
  	// var searchTerm = $input.val();
  	// $('p').highlight(searchTerm);
  });

});


// -------------------------
$(".collapse").on("shown.bs.collapse", arrowdown);
$(".collapse").on("hidden.bs.collapse", arrowup);

function arrowdown(){
anchor = $(this).prev('a');
anchor.css('background-color','rgb(39,39,39)');
span = anchor.find('span');
span.html('<i class="fa fa-angle-up w3-xlarge"></i>');
}

function arrowup(){
anchor = $(this).prev('a');
anchor.css('background-color','#616161');
span = anchor.find('span');
span.html('<i class="fa fa-angle-down w3-xlarge"></i>');
}
 </script>                    

<?php get_footer();?>
