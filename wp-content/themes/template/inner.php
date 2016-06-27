

<nav class="w3-sidenav w3-light-grey w3-card-4 w3-animate-left" style="width: 180px; display: block;">
  <header class="w3-container w3-dark-grey">
  <h5 class="w3-left w3-section"><a href="javascript:void(0)" onclick="w3_close()" class="w3-large w3-closenav w3-hover-none w3-hover-text-white" title="close sidenav">Menu&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right w3-right" style="font-size:24px"></i></a></h5>
  </header>


  <div class="panel-group w3-dark-grey" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="w3-hover-none " data-toggle="collapse" data-parent="#accordion" href="#collapse1">CATEGORY<i class="fa fa-caret-right w3-right" style="font-size:24px"></i></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in w3-dark-grey">
        <div class="panel-body w3-padding-0">
           <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 1</a>
           <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 2</a>
           <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 3</a>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="w3-hover-none " data-toggle="collapse" data-parent="#accordion" href="#collapse2">OCASSION<i class="fa fa-caret-right w3-right" style="font-size:24px"></i></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse w3-dark-grey">
        <div class="panel-body w3-padding-0">
           <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 1</a>
		       <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 2</a>
	         <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 3</a>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="w3-hover-none " data-toggle="collapse" data-parent="#accordion" href="#collapse3">SIZE<i class="fa fa-caret-right w3-right" style="font-size:24px"></i></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse w3-dark-grey">
        <div class="panel-body w3-padding-0">
           <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 1</a>
		       <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 2</a>
	         <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 3</a>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="w3-hover-none " data-toggle="collapse" data-parent="#accordion" href="#collapse4">COLOUR<i class="fa fa-caret-right w3-right" style="font-size:24px"></i></a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse w3-dark-grey">
        <div class="panel-body w3-padding-0">
           <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 1</a>
		       <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 2</a>
	         <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 3</a>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="w3-hover-none " data-toggle="collapse" data-parent="#accordion" href="#collapse5">PRICE<i class="fa fa-caret-right w3-right" style="font-size:24px"></i></a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse w3-dark-grey">
        <div class="panel-body w3-padding-0">
           <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 1</a>
		       <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 2</a>
	         <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 3</a>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="w3-hover-none " data-toggle="collapse" data-parent="#accordion" href="#collapse6">DESIGNERS<i class="fa fa-caret-right w3-right" style="font-size:24px"></i></a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse w3-dark-grey">
        <div class="panel-body w3-padding-0">
           <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 1</a>
		       <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 2</a>
	         <a class="w3-text-black w3-padding-8" href="javascript:void(0)">Link 3</a>
        </div>
      </div>
    </div>
  </div> 

</nav>

<div id="main" style="margin-left: 180px; transition: all 0.4s ease 0s;">

<div class="w3-container w3-margin-left">
  <!-- <span title="open sidenav" style="position: fixed; top: 5px; display: none;" class="w3-opennav w3-xlarge" onclick="w3_open()">☰</span> -->
  <span title="open sidenav" style="display: none;" class="w3-opennav w3-xlarge w3-gray" onclick="w3_open()"><span class="glyphicon glyphicon-chevron-right"></span></span>
  <h3 class="h3" style="position:;top:36px;">Page content..</h3>
  <div class="" style="height:500px">
      
  </div>
</div>

</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "180px";
  document.getElementsByClassName("w3-sidenav")[0].style.width = "180px";
  document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
  document.getElementsByClassName("w3-opennav")[0].style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "-180px";
  document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
  document.getElementsByClassName("w3-opennav")[0].style.display = "inline-block";
}
</script>
