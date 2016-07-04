<?php get_header();?>
              

 <div id="Adm" class="w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:block; ">
    <?php 
            
            $menu_name = 'ByFeature';
            show_post( $menu_name , '3');
            ?>                         
 </div>

 <div id="Mgr" class="w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:none;">
                             
 </div>

 <div id="Telc" class="w3-container w3-animate-left container w3-padding-24 context" style="padding-left:; width:94%; display:none;">
                             
 </div>
                         
 <script type="text/javascript">
//  	$(function() {
//   var $context = $(".context");
//   var $form = $("form");
//   var $button = $form.find("button[name='perform']");
//   var $input = $form.find("input[name='keyword']");

//   $button.on("click.perform", function() {
//   	$context.unmark();
//   	$input.val('');
//   });

//   $input.on("onkeyup.keyword", function() {

//     // Determine search term
//     var searchTerm = $input.val();

//     // Determine options
//     var options = {};
//     var values = $form.serializeArray();
//     /* Because serializeArray() ignores unset checkboxes */
//     values = values.concat(
//       $form.find("input[type='checkbox']:not(:checked)").map(
//         function() {
//           return {
//             "name": this.name,
//             "value": "false"
//           }
//         }).get()
//     );
//     $.each(values, function(i, opt){
//       var key = opt.name;
//       var val = opt.value;
//       if(key === "keyword" || !val){
//         return;
//       }
//       if(val === "false"){
//         val = false;
//       } else if(val === "true"){
//         val = true;
//       }
//       options[key] = val;
//     });

//     // Remove old highlights and highlight
//     // new search term afterwards
//     $context.unmark();
//     $context.mark(searchTerm, options);

//   });
//   $button.trigger("click.perform");
// });

$(function() {
  var $context = $(".context");
  var $form = $("form");
  var $button = $form.find("button[name='perform']");
  var $input = $form.find("input[name='keyword']");

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
span.html('<i class="fa fa-angle-up"></i>');
}

function arrowup(){
anchor = $(this).prev('a');
anchor.css('background-color','#616161');
span = anchor.find('span');
span.html('<i class="fa fa-angle-down"></i>');
}
 </script>                    

<?php get_footer();?>
