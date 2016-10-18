<?php
$manufact=$_POST['manufact'];
$bodystyle=$_POST['bodystyle'];
$name=$_POST['name'];
$price=$_POST['price'];
$fuel=$_POST['fuel'];
$transmission=$_POST(['transmission'];
<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>DMS</title> 
	<meta name="description" content="BlackTie.co - Free Handsome Bootstrap Themes" />	    
	<meta name="keywords" content="themes, bootstrap, free, templates, bootstrap 3, freebie,">
	<meta property="og:title" content="">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fancybox/jquery.fancybox-v=2.1.5.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	
	<link rel="prefetch" href="images/zoom.png">
	<style type="text/css">
		.button {
		width: 20%;
		border-radius: 10px;
		background-color:#fff;
		hover:#fff;
		margin-bottom:10px;
		margin-top:10px;
	}
	.login {
	width:100%;
	
	}
		</style>
</head>

<body>
 <div class="slide story" id="slide-5" >
	
						
	<div class="header">
					
				<h1 class="font-semibold">DMS</h1>
					<h3 class="font-thin"><span class="font-semibold">Find Your Car</span></h3><br><br>
					
				</div>
	//<div class="header-menu">
	
					
					//<table width="100%" align="center" class="menubar">
	//<tr>
	//<td><a href="index.php" ><h3><span class="font-semibold">Home</span></h3></a></td>
	//<td><a href="login.php" ><h3><span class="font-semibold">Login</span></h3></a></td>
	//<td><a href="victim_det.php" ><h3><span class="font-semibold">Search for a Victim</span></h3></a></td>
	//<td><a href="user_register.php" ><h3><span class="font-semibold">Registration</span></h3></a></td>

	//</tr>
	//</table>
				//</div><!-- /col-12 -->
	
	//</div>
	
	
	<!-- === MAIN Background === -->

	
	<div class="slide story" id="slide-5" >
	<div class="col-12">
					
					
					<h4 class="font-thin"><span class="font-semibold">Registration</span></h4>
					
					<br>
				</div><!-- /col-12 -->
	<form method="POST" action="next.php" >
	
<table width="50%" border="0" align="center">
 <tr>
    <td width="5%" height="41">&nbsp;</td>
    <td width="25%">&nbsp;</td>
    <td width="20%" align="left"><span class="style2">
      <label>Body Style</label>
    </span></td>
    <td width="50%" align="left"> <select name="bodystyle" id="bodystyle" style="width:200" >
				    <option value="">--Select--</option>
					 <option value="s">SUV</option>
                     <option value="h">HATCH-BACK</option>
                     <option value="se">SEDAN</option>
                     <option value="m">MINI-VAN</option>
                     <option value="c">COUPE</option>
                     <option value="p">PICK-UP</option>
                     <option value="co">CONVERTIBLE</option>
                     <option value="w">WAGON</option>
					 
					 
				   
				    </select></td>
  </tr>
  <tr>
    <td width="5%" height="41">&nbsp;</td>
    <td width="25%">&nbsp;</td>
    <td width="20%" align="left"><span class="style2">
      <label>Price</label>
    </span></td>
    <td width="50%" align="left"><input name="price" type="text" class="new"></td>
  </tr>
  <tr>
    <td height="51">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><span class="style2">
      <label>Name</label>
    </span></td>
    <td align="left"><input name="name" type="text" class="new"></td>
  </tr>
  <tr>
    <td height="52">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><span class="style2">
      <label>Manufacturer</label>
    </span></td>
    <td align="left"><input name="manufact" type="text" class="new"></td>
  </tr>
  <tr>
    <td height="41">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><span class="style2">
      <label>Transmission Type</label>
    </span></td>
    <td align="left"><input name="transmission" type="text" class="new"></td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><span class="style2">
      <label>Fuel Type</label>
    </span></td>
    <td align="left"><input name="fuel" type="text"style="width:200" >
				    <option value="">--Select--</option>
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                    <option value="cng">CNG</option>
                    </td>
  </tr>
  <tr>
   
    <td colspan="4"><input name="btn" type="submit" class="button" id="GO" value="search"></td>
  </tr>
</table>
	
	</form>
	</div>
	

</body>

	<!-- SCRIPTS -->
	<script src="js/html5shiv.js"></script>
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
	<script src="js/script.js"></script>
	
	<!-- fancybox init -->
	<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );
		
		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	
	});
	</script>
</html>