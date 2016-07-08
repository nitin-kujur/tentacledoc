<?php 
  global $role;
  get_header(); 
?>
              

  <?php
  
    switch ($role) {

    case "Admin":
        echo '<div id="Adm" class="w3-highlight w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:block; ">';
            $menu_name = 'Admin';
            show_post( $menu_name , '1');
        echo '</div>';
        break;

    case "Manager":
        echo '<div id="Mgr" class="w3-highlight w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:block; ">';
            $menu_name = 'Manager';
            show_post( $menu_name , '2');
        echo '</div>';
        break;

    case "TeleCaller":
        echo '<div id="Telc" class="w3-highlight w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:block; ">';
            $menu_name = 'TeleCaller';
            show_post( $menu_name , '3');
        echo '</div>';
        break;

    default:
        echo '<div id="Adm" class="w3-highlight w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:block; ">';
                  $menu_name = 'Admin';
                  show_post( $menu_name , '1');
        echo '</div>';

        echo '<div id="Mgr" class="w3-highlight w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:none;">';
                    $menu_name = 'Manager';
                    show_post( $menu_name , '2');
        echo '</div>';

        echo '<div id="Telc" class="w3-highlight w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:none;">';
                    $menu_name = 'TeleCaller';
                    show_post( $menu_name , '3');
        echo '</div>';
}
  
  ?>

 
                         
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
  	$('.highlight').css('background-color','transparent');
  	$('#highlight-plugin').removeHighlight();
  	var searchTerm = $input.val();
  	$('.w3-highlight').highlight(searchTerm);
  });

  $input.bind("change keyup input", function() {
  	if($input.val().length == 0){
  		$('.highlight').css('background-color','transparent');
  		$('#highlight-plugin').removeHighlight();
  	}
  	
  });

});


// -------------------------
// $(".collapse").on("shown.bs.collapse", arrowdown);
// $(".collapse").on("hidden.bs.collapse", arrowup);

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

<?php 

  global $role;
  get_footer(); 

  ?>
