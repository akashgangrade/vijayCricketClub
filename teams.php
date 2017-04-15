<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : SquareAway 
Description: A four-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130804

-->

<?php
include("function.php");
include("sqlQueries.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vijay Cricket Club</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Open+Sans:400,300,600,700,800" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="logo" class="container">
	<h1><a href="#" class="icon icon-spinner"><span>Vijay Cricket Club</span></a></h1>
</div>
<div id="header">
	<div id="menu" class="container">
		<ul>
			<li><a href="index.php" accesskey="1" title="">Home</a></li>
			<li><a href="AboutUs.php" accesskey="1" title="">About Us</a></li>
			<li class="current_page_item"><a href="#" accesskey="2" title="">Teams</a></li>
			<li><a href="gallary.php" accesskey="3" title="">Gallary</a></li>
			<li><a href="results.php" accesskey="4" title="">Match Results</a></li>
			<li><a href="contact.php" accesskey="5" title="">Contact Us</a></li>
		</ul>
	</div>
</div>
<div id="page-wrapper">
	<div id="banner" class="container"><!--<a href="#"><img src="images/CricketBall.jpg" width="1200" height="300" alt="" /></a>-->
		<div id="menu" class="container">
		<ul>
			<li class="current_page_item"><a href="#" accesskey="2" title="">Senior</a></li>
			<li class="current_page_item"><a href="gallary.php" accesskey="3" title="">Under 23</a></li>
			<li class="current_page_item"><a href="gallary.php" accesskey="3" title="">Under 19</a></li>
			<li class="current_page_item"><a href="gallary.php" accesskey="3" title="">Under 17</a></li>
			</ul>
		</div>
<table border=".5" width="400" align="center">
	<tr>
		<th>S.No</th>
	
		<th>Team</th>
	
		<th>Player Type</th>
		<th>Player Group</th>
	</tr>
	<?php 
	require_once("functions.php");

	$functions = new functions();
	$retval = $functions->dbQuery();
	 		
			if(mysqli_num_rows($retval) > 0) {
				?>
				<?php
  		  while ($row = mysqli_fetch_array($retval)) {
       ?>
      
      
        	
        	 <tr>
       	

       	
            <td><a href=""><?php echo $row['Serialnumber']; ?><a/></td> 
            <td><?php echo $row['PlayerName']; ?></td> 
            <td><?php echo $row['PlayerType']; ?></td> 
            <td><?php echo $row['AgeGroup'];?></td>
            
        </tr>

      <?php  
    }
}
	?>
	 
			
</table>
</div>
	<br>
	<br><br><br><br><br><br><br><br><br>
<div id="footer-wrapper">
	<div id="footer" class="container">
		<div id="fbox1">
			<h2>Maecenas luctus</h2>
			<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum.</p>
			<a href="#" class="button icon icon-arrow-right">Learn More</a> </div>
		<div id="fbox2">
			<h2>Integer gravida</h2>
			<p>Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris.</p>
			<a href="#" class="button icon icon-arrow-right">Learn More</a> </div>
		<div id="fbox3">
			<h2>Praesent scelerisque</h2>
			<p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper eleifend.</p>
			<a href="#" class="button icon icon-arrow-right">Learn More</a> </div>
		<div id="fbox4">
			<h2>Etiam rhoncus volutpat</h2>
			<p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper eleifend.</p>
			<a href="#" class="button icon icon-arrow-right">Learn More</a> </div>
	</div>
</div>
<div id="copyright">
	<p>Copyright (c) 2013 Sitename.com. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
</div>
</body>
</html>
