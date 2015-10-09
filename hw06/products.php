<!DOCTYPE HTML>
<?php
  // Your $titles array goes here
require_once "./arrays_project_titles.php";
?>
<html>
<head>
<title>Sweets Complete | Products</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name ="description" content ="Sweets Complete">
<meta name="keywords" content="">
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="shortcut icon" href="images/favicon.ico?v=2" type="image/x-icon" />
</head>

<body>
<div id="wrapper">
	<div id="maincontent">
		
	<div id="header">
		<div id="logo" class="left">
			<a href="index.php"><img src="images/logo.png" alt="SweetsComplete.Com"/></a>
		</div>
		<div class="right marT10">
			<b>
			<a href="#" >Login</a> |<a href="#" >Our Members</a> |<a href="#" >Shopping Cart</a>
			</b>
			<br />
			Welcome Guest		</div>
		<ul class="topmenu">
		<li><a href="#">Home</a></li>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Specials</a></li>
		<li><a href="#">Contact Us</a></li>
		</ul>
		<br>
		<div class="banner"><p></p></div>
		<br class="clear"/>
	</div> <!-- header -->
		
	<div class="content">

<div id="leftnav">
	<div class="search">

		<form name="search" method="get" action="#" id="search">
			<input type="text" value="keywords" name="keyword" class="s0" />
			<br />
			<select name="title" class="s2">
            <!-- BEGIN: Hardcoded list -->
						
            <!-- END: Hardcoded list -->
            <!-- BEGIN: Dynamic list from PHP Array -->
            <?php
            /*
            // For Extra Credit, sort the array before displaying.*/
			sort($titles, SORT_STRING);
			
			// Method #1:  Simply enter 3 or more <option> tags using values from the $titles array.
			
			
			// Method #2:  Follow the video instructions to use a "foreach" loop to display ALL values in the array.
            foreach ($titles as $value) {   
            	printf('<option>%s</option>', $value);
            }
            
            ?>
            <!-- END: Dynamic list from PHP Array -->
            </select>
			<br />
			<input type="submit" name="search" value="Search Products" class="button marT5" />
			<input type="hidden" name="page" value="search" />
		</form>
		<br /><br />
		
		<h3>About Us</h3><br/>
		<p class="width180">Lorem ipsum dolor sit amet consectetuer. Lorem ipsum dolor sit amet consectetuer, Lorem ipsum dolor sit amet consectetuer
	  Lorem ipsum dolor sit amet consectetuer. Lorem ipsum dolor sit amet consectetuer. Lorem ipsum dolor sit amet consectetuer.  <a href="#">Read More >> </a></p>
	</div>
</div><!-- leftnav -->


<div id="rightnav">

	<div class="product-list">
		<h2>Our Products</h2>
		<a class="pages" href="#">&lt;prev</a>
		&nbsp;|&nbsp;
		<a class="pages" href="#">next&gt;</a>
			<ul>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/167_2835774.scale_20.JPG" alt=" Ambrosia Salad" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Ambrosia Salad</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/167_2835774.scale_20.JPG" alt=" Apple Pie a la Mode" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Apple Pie a la Mode</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/430_3151480.scale_20.JPG" alt=" Apple Turnover" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Apple Turnover</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/430_3150132.scale_20.JPG" alt=" Baked Alaska" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Baked Alaska</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/700_3473780.scale_20.JPG" alt=" Baklava" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Baklava</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/430_3151480.scale_20.JPG" alt=" Banana Bread" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Banana Bread</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/430_3150132.scale_20.JPG" alt=" Banana Pudding" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Banana Pudding</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/167_2835774.scale_20.JPG" alt=" Banana Split" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Banana Split</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
				<li>
					<div class="image">
						<a href="detail.html">
						<img src="images/167_2835774.scale_20.JPG" alt=" Black Forest Cake" width="190" height="130"/>
						</a>
					</div>
					<div class="detail">
						<p class="name"><a href="detail.html"> Black Forest Cake</a></p>
						<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>
					</div>
				</li>
		</ul>
	</div><!-- product-list -->
	
	
</div><!-- rightnav -->

<br class="clear-all"/>
</div><!-- content -->
	
	</div><!-- maincontent -->

	<div id="footer">
		<div class="footer">
			Copyright &copy; 2012 sweetscomplete.com. All rights reserved. <br/>
		<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Specials</a> | <a href="#">Contact Us</a> 		<br />
			<span class="contact">Tel: +44-1234567890&nbsp;
			Fax: +44-1234567891&nbsp;
			Email:sales@sweetscomplete.com</span>
		</div>
	div><!-- footer -->
	
</div><!-- wrapper -->

</body>
</html>

