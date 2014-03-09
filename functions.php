<?php


#inserts the head tag
#parameter title: the first part of the title
#parameter keywords: additional meta keywords to include
function insert_head($title, $keywords)
{
	echo '
		<head>
	
			<title>'. $title .'</title>
			<meta name="keywords" content="SOBE, cleaning, clean, carpet, business, washington, dc, district, columbia, virginia, maryland, green, pet, safe, family, professional, efficient, add carpet cleaning, house cleaning, maid, '.  $keywords . '">
			
			<meta http-equiv="Content-Language" content="en">
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">		
			<meta name="description" content="SOBE Organic is the leading organic cleaning company in the Washington, DC Metro area.">
			<meta name="author" content="Jorge Sepulveda, jorluiseptor.com">		
			<!-- Mobile viewport optimized: j.mp/bplateviewport -->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<link rel="shortcut icon" href="/favicon.ico">
			<link rel="apple-touch-icon" href="/apple-touch-icon.png">
			
			<!-- CSS: implied media="all" -->
			<link rel="stylesheet" href="css/style.css">
			<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
			<script src="js/libs/modernizr-1.7.min.js"></script>
		
		</head>	
	'; 

}

?>