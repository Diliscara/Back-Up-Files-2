<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="css/Navigation.css"></link>
	<link rel="stylesheet" href="css/Navigation.css"></link>
<style>
body {
	background-color: black;
}
div {
	width: 100px;
	height: 100px;
	background-color: purple;
	position: relative;
	animation-name: example;
	animation-duration: 5s;
	animation-iteration-count: infinite;
	animation: mymove 5s infinite;
	
}

#div1 {animation: mymove 5s inifinite; animation-timing-function: ease-out;}
#div2 {animation: example 5s infinite; animation-iteration-count: infinite;}
@keyframes mymove { from {left: 0px;} to {left:300px;} }
@keyframes example {
	0%  {background-color:purple; left:0px; top:0px;}
	25% {background-color:white; left:200px; top:0px;}
	50% {background-color:purple; left:200px; top:200px;}
	75% {background-color:white; left:0px; top:200px;}
	100% {background-color:purple; left:0px; top:0px;}
}

div:hover {
	animation-play-state: paused;
}
</style>
<body>
	<center>
<div id="div2"></div><div id="div2"></div><div id="div2"></div>
<div id="div1">
	<img src="css/ball.png" height="100px" width="100px"></img>
</div>
	</center>
	<ul>
		<li><a href="https://Diliscara.github.io" target=" blank">Github</a></li>
	</ul>
</body>
</html>
