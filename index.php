<?php
//require_once("config/db.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Bloger</title>
</head>
<style type="text/css">
::-webkit-scrollbar {
    width: 1%;
	height:1%;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 .5% rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: rgba(255,0,0,0.8); 
    -webkit-box-shadow: inset 0 0 .5% rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: rgba(255,0,0,0.4); 
}
body{
	background: url('sombrero.jpg');
	background-position:center;
}
#main_body{
	float: left;
	color: white;
	width: 100%;
	height: 100%;
}
#header{
	font-family:"Comic Sans MS", cursive;
	text-align:center;
	background: #FFFFFF;
	opacity: 0.6;
	height:10%;
	width:98%;
	color: #000000;
	margin: 1%;
}
#menu_side{
	float: left;
	background: white;
	opacity: 0.6;
	color: black;
	margin: 0px 0px 0px 1%;
	height: 86%;
	width: 24%;
}
#menu_inner_side{
	margin:4%;
	overflow-y: auto;
}
#content_block{
	float: right;
	overflow-y: auto;
	background: white;
	opacity: 0.6;
	color: black;
	margin: 0px 1%;
	height: 86%;
	width: 73%;
}
#content_innerblock{
	margin:0px 1.5%;
	height: 100%;
	overflow-y: auto;
}
</style>

<script language="javascript" type="text/javascript">
var rad;
var hed;
var men;
var cont;
function initliz()
{
	rad=15;
	hed=36;
	men=14;
	cont=14;
}
function resize()
{
	initliz();
	var w=window.innerWidth/1024;
	var h=window.innerHeight/600;
	var f=(w<h) ? w : h;
	rad*=f;
	var style="#header{";
	style+="border-radius:"+rad+"px;";
	style+="font-size:"+hed*f+"px;";
	style+="}";
	style+="#menu_side{";
	style+="border-radius:"+rad+"px;";
	style+="font-size:"+men*f+"px;";
	style+="}";
	style+="#content_block{";
	style+="border-radius:"+rad+"px;";
	style+="font-size:"+cont*f+"px;";
	style+="}";
document.getElementById("changed_style").innerText=style;
}
window.addEventListener("load",resize,false);
window.addEventListener("resize",resize,false);

</script>
</head>
<body>
<style type="text/css" id="changed_style">
test content
</style>
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

