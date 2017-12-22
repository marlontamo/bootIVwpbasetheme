<?php 
/** 
 * this file is where we create the default theme main layout 
 * 
 * @package bootIV-wp-theme 
 * @author Marlon tamo
 */ 
?>


<div class="row text-white">
	<div class="col bg-primary"><h1>left</h1></div>
	<div class="col bg-warning"><h1>right</h1></div>
</div><div class="clearfix">&nbsp</div>
<div class="row bg-danger text-white"><h1 class="text-center">row</h1></div>
<div class="container bg-success">
<div class="col-md-1"><div class="row"><div class="col-md-6 bg-primary">boot</div> 
<div class="col-md-6 bg-danger text-white">
test

</div></div>			
<h1>container</h1><button id="create-button" >test</button></div>	

<div id="stage" class="row"></div>
<script type="text/javascript">
	jQuery(document).ready(function($){
		      $('#create-button').on('click', function(){
      	      $('#stage').append('<div class="col-md-1 bg-danger">added</div>');
      });

	});
</script>
