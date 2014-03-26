<?php


#inserts the head tag
#parameter title: the first part of the title
#parameter keywords: additional meta keywords to include
function insert_head($title, $keywords, $description)
{
	echo '
		<head>
	
			<title>'. $title .'</title>
			<meta name="keywords" content="SOBE, cleaning, clean, carpet, business, washington, dc, district, 
			columbia, virginia, maryland, organic, home,
			pet, safe, family, professional, efficient, carpet , house, maid, '.  $keywords . '">
			
			<meta http-equiv="Content-Language" content="en">
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">		
			<meta name="description" content="' . $description . '">
			<meta name="author" content="Jorge Sepulveda, jorluiseptor.com">		
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<a href="https://plus.google.com/103966360317515172512" rel="publisher" />	
			<link rel="shortcut icon" href="/favicon.ico">
			<link rel="apple-touch-icon" href="/apple-touch-icon.png">
			
			<!-- CSS: implied media="all" -->
			<link rel="stylesheet" href="css/style.css">
			<script src="js/libs/modernizr-1.7.min.js"></script>
		
		</head>	
	'; 

}

?>