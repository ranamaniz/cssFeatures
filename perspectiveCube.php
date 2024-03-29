<!DOCTYPE html>
<html>
<head>
	<title>3D Cube</title>
	<style type="text/css">
		.w1{
			perspective: 1000px;
		}

		.cube{
			font-size: 4em;
			width: 2em;
			margin: 1.5em auto;
			transform-style: preserve-3d;
			/*transform: rotateX(-40deg) rotateY(32deg);*/
			animation: cubeMove 5s linear infinite alternate;
		}

		.side{
			position: absolute;
			width: 2em;
			height: 2em;

			background: rgba(255,123,101,0.6);
			

			border: 1px solid rgba(0,0,0,.5);

			color: white; 
			text-align: center;
			line-height: 2em;
		}

		.front{ transform: translateZ(1em); }
		.top{ transform: rotateX( 90deg)  translateZ(1em); }
		.right{ transform: rotateY( 90deg)  translateZ(1em); }
		.left{ transform: rotateY(-90deg)  translateZ(1em); }
		.bottom{ transform: rotateX(-90deg)  translateZ(1em); }
		.back{ transform: rotateY(-180deg) translateZ(1em); }

		@keyframes cubeMove{
			0%{
				transform: rotateX(180deg) rotateY(0deg); 
			}
			10%{
				transform: rotateX(0deg) rotateY(180deg);
			}
		}

	</style>
</head>
<body>
	<div class="wrapper w1">
		<div class="cube">
			<div class="side front">1</div>
			<div class="side back">6</div>
			<div class="side right">4</div>
			<div class="side left">3</div>
			<div class="side top">5</div>
			<div class="side bottom">2</div>
		</div>
	</div>

</body>
</html>