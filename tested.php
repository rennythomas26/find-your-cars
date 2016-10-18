<?php
include ("connection/conn.php");
include ("connection/phpscripts.php");
?><!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>FYC</title> 
	<meta name="description" content="BlackTie.co - Free Handsome Bootstrap Themes" />	    
	<meta name="keywords" content="themes, bootstrap, free, templates, bootstrap 3, freebie,">
	<meta property="og:title" content="">
<script type="text/javascript" src="tables/media/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="tables/media/css/jquery.dataTables.css"> s
	<script type="text/javascript" src="tables/media/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fancybox/jquery.fancybox-v=2.1.5.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	
	<link rel="prefetch" href="images/zoom.png">
	<script type="text/javascript">
			$(document).ready(function()
		    {
			   $('#tblactionshow').dataTable();
			} );
        </script>
		<script type="text/javascript">
		function chkval()
		{
		window.location.href="http://www.carwale.com";
		}
		</script>
</head>

<body>
  <div class="slide story" id="slide-5" >
	
						
	<div class="header">
					
				<h1 class="font-semibold">FYC</h1>
					<h3 class="font-thin"><span class="font-semibold">Find Your Car</span></h3><br><br>
					
				</div>
	<div class="header-menu">
	
					
					<table width="100%" align="center" class="menubar">
	<tr>
	<td><h3><span class="font-semibold">Search for the best car that suits for you,from the given list</span></h3></a></td>

    


	</tr>
	</table>
				</div>
	
	</div>
	
	
	<!-- === MAIN Background === -->

	
	<div class="slide story" id="slide-5" >
	
	<table border="0"  id="tblactionshow" align="center" width="75%">
    <thead>
      <tr  bgcolor="#F39C12">
        <!--class="style4"-->
        <th width="23%"  bgcolor="#FF9933"><span class="style2" > Body Style </span></th>
        <th width="23%"><span class="style2">Name</span></th>
        <th width="36%"><span class="style2" > Company </span></th>
        <th width="21%" ><span class="style2" >Fuel</span></th>
		 <th width="21%" ><span class="style2" >Price</span></th>
          <th width="21%" ><span class="style2" >More Details</span></th>
         
      </tr>
    </thead>
    <?php	$qry=mysql_query("SELECT * FROM `car_det`");	
	
	while($dtls=mysql_fetch_array($qry))
	{
	$bodystyle=$dtls['bodystyle'];
	$name=$dtls['name'];
	$price=$dtls['price'];	
    $fuel=$dtls['fuel'];
	$company=$dtls['manufact'];

		?>
        
    <tr  bgcolor="#F39C12" >
      <td  bgcolor="#F39C12"><span class="style2" >
        <?=$bodystyle?>
        </span></td>
      <td bgcolor="#F39C12"><span class="style2" >
        <?=$name?>
        </span></td>
      
      <td bgcolor="#F39C12"><span class="style2" >
        <?=$company?>
        </span></td>
        <td bgcolor="#F39C12"><span class="style2" >
        <?=$fuel?>
        </span></td> 
		  <td bgcolor="#F39C12"><span class="style2" >
        <?=$price?>
        </span></td>
		<td bgcolor="#F39C12"><span class="style2" >
       <input name="btn1" type="submit" class="btn btn-primary" id="btn1"   value="To know more" onClick="return chkval();" /> 
        </span></td>
     
    </tr>
    <?php
	}
    
	?>
  </table>           
	</div>
	

</body>

</html>