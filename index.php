<?php
require_once("config/db.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Bloger</title>
</head>
<style>
::-webkit-scrollbar {
    width: 12px;
	height:12px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: rgba(255,0,0,0.8); 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: rgba(255,0,0,0.4); 
}
body{
	background: url('Pacific-Ocean-large.jpg');
	background-position:center;
	background-repeat: no-repeat;
}
#main_body{
	float:left;
	margin-left:-8px;
	margin-top:-8px;
	color: #FFFFFF;
	min-height:210px
	max-height:1986px;
	max-width:3132px;
	min-width:300px;
}
#header{
	font-family:"Comic Sans MS", cursive;
	text-align:center;
	background: #FFFFFF;
	opacity: 0.6;
	border-radius: 15px;
	color: #000000;
	margin: 15px;
}
#menu_side{
	float:left;
	background: #FFFFFF;
	opacity: 0.6;
	border-radius: 15px;
	color: #000000;
	margin:0px 0px 0px 15px;
	min-height:100px;
}
#content_block{
	float:right;
	overflow-y: auto;
	background: #FFFFFF;
	opacity: 0.6;
	border-radius: 15px;
	color: #000000;
	margin:0px 15px;
	min-height:100px;
}
#content_innerblock{
	margin:0px 10px;
	overflow-y: auto;
}
#menu_inner_side{
	margin:10px;
	overflow-y: auto;
}
</style>
<script language="javascript">
function load_page()
{
	var width=window.innerWidth;
	var height=window.innerHeight;
	var fac=width/1024;
	var vh=15*fac;
	if(width<=4000 && width>=300)
	{
		document.getElementById("main_body").style.width=width;
		document.getElementById("menu_side").style.width=width*0.3-fac;
		document.getElementById("content_block").style.width=width*0.7-30;
		document.getElementById("content_block").style.fontSize=14*fac;
		document.getElementById("menu_side").style.fontSize=14*fac;
		document.getElementById("header").style.fontSize=36*fac;
	}
	if(height<=2100 && height>=210)
	{
		var tw=((36*fac)/6)*10;
		document.getElementById("main_body").style.height=height;
		document.getElementById("header").style.height=tw;
		document.getElementById("menu_side").style.height=height-tw-(vh*3);
		document.getElementById("content_block").style.height=height-tw-(vh*3);
		document.getElementById("content_innerblock").style.height=height-tw-(vh*3);
	}
}
3032
1986
</script>
<body onLoad="load_page()" onResize="load_page()">
<div id="main_body">
<div id="header">
The Blob Engine
</div>
<div id="menu_side"><div id="menu_inner_side">some menu</div></div>
<div id="content_block">
<div id="content_innerblock">
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	  <p>big page</p>
	</div>
</div>
</div>
</body>
</html>