<?php get_header();?>
              

              <div class="padding">
                    <div class="full col-md-9 col-sm-9 col-xs-11">
                      
                      <!-- content -->                      
                      <div class="row">
                          
                         <!-- main col left --> 
                         <div id="ditto" name="frame1" class="col-md-12 col-sm-12 col-xs-12 fade in">
                           
                              <!-- <div class="panel panel-default">
                                <div class="panel-heading"><h4>What Is Bootstrap?</h4></div>
                               	<div class="panel-body">
                                	Bootstrap is front end frameworkto build custom web applications that are fast, responsive &amp; intuitive. It consist of CSS and HTML for typography, forms, buttons, tables, grids, and navigation along with custom-built jQuery plug-ins and support for responsive layouts. With dozens of reusable components for navigation, pagination, labels, alerts etc..                          
                                </div>
                              </div> -->
                             

                           		
                           
                         </div>
                         
                      <script type="text/javascript">
                         // function copyData(){
                         //   old = $("#form-iframe").html(); alert(old);
                         //   $("#ditto").html(old);
                         // }

                         // function catch(s) { return document.getElementById(s) }

                         //  setInterval(function() {
                         //    if(window._oldHTML != catch('form-iframe').innerHTML) {
                         //      window._oldHTML = catch('form-iframe').innerHTML;
                         //      contentChanged.call(catch('form-iframe'));
                         //    }
                         //  }, 100);

                         //  contentChanged = function() {
                         //    alert(this.innerHTML);
                         //    catch('ditto').innerHTML = this.innerHTML;
                         //  }
                         // $('#form-iframe').load(function(){
                         //    iframe = document.getElementById('form-iframe');
                         //    iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
                         //    setInterval(function() {
                         //    text = iframeDocument.getElementById('#mainframe').src;
                         //    //alert(text);
                         //    console.log(text+","+iframe+","+iframeDocument);
                         //  },1000);
                         // });
                          
                          $(document).ready(function(){
                              ajaxGetdoc('http://localhost/tentacle_doc/about/');
                          });

                          function ajaxGetdoc(url){
                             var xhttp = new XMLHttpRequest();
                              xhttp.onreadystatechange = function() {
                                if (xhttp.readyState == 4 && xhttp.status == 200) {
                                  docText = xhttp.responseText;
                                  document.getElementById("ditto").innerHTML = docText;
                                  console.log(docText);
                                }
                              };
                              xhttp.open("GET", url, true);
                              xhttp.send();
                          }
                          
                          function showHint(str) {
                              if (str.length == 0) {
                                  document.getElementById("txtHint").innerHTML = "";
                                  return;
                              } else {
                                  var xmlhttp = new XMLHttpRequest();
                                  xmlhttp.onreadystatechange = function() {
                                      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                          document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                      }
                                  };
                                  xmlhttp.open("GET", "http://localhost/tentacle_doc/wp-content/themes/fb-theme/gethint.php?q=" + str, true);
                                  xmlhttp.send();
                              }
                          }
                         
                       </script>  

                      </div><!--/row-->

<?php get_footer();?>
