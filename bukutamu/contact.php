
<!DOCTYPE HTML>
<html>
<head>
<title>buku tamu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
	.tamu{
		
	};
</style>
<script src="js/jquery.min.js"></script> 
<!-- start top_js_button -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<link href="css/owl.carousel.css" rel="stylesheet">
	<script src="js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
</head>
<body>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
<div class="main">
	 	 <div class="contact">				
					
				  <div class="contact-form">
			 	  	 	<h2>Contact Us</h2>
			 	 	    <form method="post" action="">
					    	<!-- <div>
						    	<span><label>Name</label></span>
						    	<span><input name="Name" type="text" class="textbox"></span>
						    </div> -->
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="Email" type="email" class="textbox"></span>
						    </div>
						    <!-- <div>
						     	<span><label>Website</label></span>
						    	<span><input name="Web" type="text" class="textbox"></span>
						    </div> -->
						    <div>
						    	<span><label>Message</label></span>
						    	<span><textarea name="Msg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="" value="Submit us" name="input"></span>
						  </div>
					    </form>
				    </div>
				    <br><br>
  				<div class="clear"></div>		
			  </div>
		</div>
</div>
</div>	
</body>
</html>