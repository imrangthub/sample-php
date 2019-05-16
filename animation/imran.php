<html>
	<head>
		<style type="text/css">
			.box
			{
			height: 50px;
			width: 50px;
			background-color: #ECECEC;
			border: 5px solid #000;
			border-bottom: 5px solid #FDFDFD;
			border-radius: 100px;
			margin: 9px auto;

			-webkit-animation: load 1s infinite linear;
			-moz-animation: load 1s infinite linear;
			-ms-animation: load 1s infinite linear;
			-o-animation: load 1s infinite linear;
			animation: load 1s infinite linear;
			}

			@-ms-keyframes load {
			from { -ms-transform:rotate(0deg);}
			to {-ms-transform:rotate( 360deg);}
			}
			@-moz-keyframes load {
			from { -moz-transform:rotate(0deg);}
			to {-moz-transform:rotate( 360deg);}
			}
			@-webkit-keyframes load {
			from { -webkit-transform:rotate(0deg);}
			to {-webkit-transform:rotate(360deg);}
			}
			@keyframes load {
			from { transform:rotate(0deg);}
			to { transform:rotate( 360deg);}
			}
			.box1
			{
			height: 80px;
			width: 80px;
			background-color: #ECECEC;
			border: 5px solid #000;
			border-right: 5px solid #FDFDFD;
			border-radius: 200px;
			-webkit-animation: load1 8s infinite linear;
			-moz-animation: load1 8s infinite linear;
			-ms-animation: load1 8s infinite linear;
			-o-animation: load1 8s infinite linear;
			animation: load1 8s infinite linear;
			}

			@-ms-keyframes load1 {
			from { -ms-transform:rotate(360deg);}
			to {-ms-transform:rotate( 0deg);}
			}
			@-moz-keyframes load1 {
			from { -moz-transform:rotate(360deg);}
			to {-moz-transform:rotate(0deg);}
			}
			@-webkit-keyframes load1 {
			from { -webkit-transform:rotate(360deg);}
			to {-webkit-transform:rotate(0deg);}
			}
			@keyframes load1 {
			from { transform:rotate(360deg);}
			to { transform:rotate(0deg);}
			}
		</style>
	</head>
	<body>
		<div class="box1" id="box1">
			<div class="box">
			</div>
		</div>
		<div id="div2" style="visibility: hidden">Reveal Div 2 after 5 seconds</div>


		 <script>

		function showIt2() {
		  document.getElementById("box1").style.display = "none";
		  document.getElementById("div2").style.visibility = "visible";

		}
		setTimeout(showIt2, 5000);

		 </script>
	</body>
</html>