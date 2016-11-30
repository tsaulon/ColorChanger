<!DOCTYPE html>
<html lang='en-us'>
<head>
	<title>Color Changer</title>
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,200,300,400,600,700,900" rel="stylesheet">
	<!--Animation.css-->
	<link rel='stylesheet' href='css/animationCSS/animate.css'>
	<!--Twitter Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--jQuery-->
	<script src='jquery/jquery-3.1.1.js'></script>
	<style>
		#wrapper{
			margin: 0;
			padding: 0;
			font-family: 'Lato';
			height: 100vh;
			width: 100%;
			background-color: rgba(128,128,128,1);
			
			transition: background-color 1ms;
		}
		#colorCode{
			margin-top: 30vh;
		}
		#colorCode h1{
			font-size: 1000%;
			font-weight: 700;
		}
		#meters{
			margin-top: 20vh;
		}
		#meters h2{
			margin-bottom: 8vh;
		}
		#red, #green, #blue, #alpha{
			visibility: hidden;
			opacity: 1;
			transition: visibility 800ms;
		}
		.colorWhite{
			color: white;
		}
	</style>
	<script>
	
	var rgbaString = 'rgba(128, 128, 73, 1)';
	
	function createChange(){
		var R = document.getElementById('R').value;
		document.getElementById('rString').innerHTML = R;
		var G = document.getElementById('G').value;
		document.getElementById('gString').innerHTML = G;
		var B = document.getElementById('B').value;
		document.getElementById('bString').innerHTML = B;
		var A = document.getElementById('A').value;
		document.getElementById('aString').innerHTML = A;
		
	
		rgbaString = 'rgba(' + R + ', ' + G + ', ' + B + ', ' + A + ') ';
		document.getElementById('wrapper').style.backgroundColor = rgbaString;
	}
	
	$(document).ready(function(){		
		$('#meters').hover(
			function(){
				$('#red, #green, #blue, #alpha').css('visibility', 'visible');
				$('#red, #green, #blue, #alpha').css('opacity', '1');
				$('#red, #green, #blue, #alpha').addClass('animated fadeInUp');
			},
			function(){
				$('#red, #green, #blue, #alpha').css('opacity', '0');
				$('#red, #green, #blue, #alpha').css('visibility', 'hidden');
				$('#red, #green, #blue, #alpha').removeClass('animated fadeInUp');
			}
		);

	});
	</script>
</head>
<body>
<div id='wrapper' class='well'>
	<div id='colorCode' class='col-lg-12 text-center'>
		<h1 id='rgbaString' class='colorWhite row'>
			rgba(<span id='rString'>128</span>, 
			<span id='gString'>128</span>, 
			<span id='bString'>128</span>, 
			<span id='aString'>1</span>);
		</h1>
	</div>
	<div id='meters' class='col-lg-10 col-lg-offset-1 text-center row'>
		<h2 class='colorWhite'>RGBA Meter</h2>
		<div class='col-lg-3'>
			<input id='R' type='range' name='R' min='0' max='255' value='127.5' oninput='createChange();'>
			<h3 id='red' class='colorWhite'>Red</h3>
		</div>
		<div class='col-lg-3'>
			<input id='G' type='range' name='G' min='0' max='255' value='127.5' oninput='createChange();'>
			<h3 id='green' class='colorWhite'>Green</h3>
		</div>
		<div class='col-lg-3'>
			<input id='B' type='range' name='B' min='0' max='255' value='127.5' oninput='createChange();'>
			<h3 id='blue' class='colorWhite'>Blue</h3>
		</div>
		<div class='col-lg-3'>
			<input id='A' type='range' name='A' min='0' max='1' value='1' step='0.1' oninput='createChange();'>
			<h3 id='alpha' class='colorWhite'>Alpha</h3>
		</div>
	</div>
</div>
</body>
</html>