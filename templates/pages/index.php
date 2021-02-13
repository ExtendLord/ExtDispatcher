<!DOCTYPE html>
<html lang="en">
	<head>
		<?php	require_once(__DIR__."/../essentials/head.php");	?>
		<script src="static/fontawesome.js"></script>
		<style>
			*{
				outline: none;
				color: white;
				transition: all 0.1s ease-in-out;
			}
			html{
				height:100%;
				width:100%;
			}
			body{
				margin:0;
				background: linear-gradient(45deg, rgba(73,155,234,1) 0%, rgba(32,124,229,1) 100%);
				background-color: rgb(255, 255, 255);
				height:100%;
				width:100%;
			}
			header{
				height: 90px;

			}
			.flex_row{
				flex-direction: row;
			}
			.flex_column{
				flex-direction: column;
			}
			.flex_row > *{
				height: 100%;
				display: inline-block;
				align-items: center;
				align-content: center;
				justify-content: center;
				text-align: center;
				flex: 1;
			}
			.flex_column > *{
				width: 100%;
				display: block;
				align-items: center;
				align-content: center;
				justify-content: center;
				text-align: center;
				flex: 1;
			}
			.flex{
				display: flex;
				align-items: center;
				align-content: center;
				justify-content: center;
				text-align: center;
			}
			#inside_header{
				text-align:center;
				font-size: 42px;
				letter-spacing: 1px;
				font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			}
			#login{
				position: relative;
				float:right;
				margin-top: 30px;
				margin-right: 30px;
				background-color: rgb(80 90 218);
				box-shadow: 1px 1px 3px 0.5px black;
				border: 0;
				border-radius: 5px;
				padding: 10px 50px;
				font-size: 18px;
				font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
				letter-spacing: 2px;
				text-decoration: none;
			}
			#login:hover{
				filter: brightness(110%);
			}
			#login:active{
				filter: brightness(120%);
			}
			footer{
				padding:20px 0;
				text-align: center;
				width: 100%;
				box-shadow: -2px 2px 5px 3px black;
				position: fixed;
				bottom: 0;
				font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			}
			main{
				height: calc(100vh - 160px);
			}
			#select_type{
				padding: 16px 16px 16px 50px;
				border: 0;
				border-radius: 10px;
				width: 280px;
				background-color: rgb(80 90 218);
				box-shadow: 1px 1px 3px 0.5px black;
				letter-spacing: 1px;
				font-size:24px;
				font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
			}
			#call_button{
				background-color: rgb(33, 181, 78);
			}
			#hangup_button{
				background-color: rgb(191, 43, 88);
			}
			#hangup_button > svg{
				display: inline-block;
				transform: rotate(-135deg);
			}
			.round_button{
				padding: 23px;
				border-radius: 100px;
				border: 0;
				letter-spacing: 1px;
				font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
			}
			.responsive_icon{
				font-size: 30px;
			}
			.round_button:hover{
				filter: brightness(110%);
			}
			.round_button:active{
				filter: brightness(120%);
				transform: translateY(-10px);
			}
			#mute_button{
				background-color: rgba(255,255,255,0);
				opacity: 0.4;
				font-size:17px;
				padding: 10px;
				border: 0;
				letter-spacing: 1px;
				font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
			}
			.align_flex_end{
				align-items:flex-end;
			}
			#police_logo > img{
				width: 39%;
				min-width: 100px;
				max-width: 150px;
			}
			@media screen and (max-width: 600px) {
				#login{
					padding: 10px 30px;
				}
				.round_button{
					padding: 23px;
				}
				#login_icon{
					display: none;
				}
			}
			@media screen and (max-width: 495px) {
				#inside_header{
					font-size: xx-large;
				}
				#select_type{
					font-size: 18px;
					padding: 16px 16px 16px 50px;
					width: 234px;
				}
				.responsive_icon{
					font-size: 27px;
				}
				.round_button{
					padding: 22px;
				}
				footer{
					font-size: 15px;
				}
			}
			@media screen and (max-width: 410px) {
				footer{
					font-size: 13px;
					padding:22px 0;
				}
				.responsive_icon{
					font-size: 24px;
				}
				.round_button{
					padding: 19px;
				}
				#login{
					padding: 15px;
				}
				#login_icon{
					display: unset;
				}
				#login_text{
					display: none;
				}
				.responsive_icon{
					font-size: 25px;
				}
				.round_button{
					padding: 21px;
				}
			}

			@media screen and (max-width: 340px) {
				#inside_header{
					font-size: 24px;
				}
				#select_type{
					font-size: 16px;
					padding: 14px 14px 14px 40px;
					width: 191.5px;
				}
				footer{
					font-size: 11px;
				}
				#login{
					padding: 10px;
				}
				#login_icon{
					display: unset;
				}
				#login_text{
					display: none;
				}
				.responsive_icon{
					font-size: 20px;
				}
				.round_button{
					padding: 18px;
				}
			}
		</style>
	</head>
	<body>
		<header>
			<a href="login" id="login">
				<span id="login_icon"><i class="fas fa-sign-in-alt"></i></span>
				<span id="login_text">Login</span>
			</a>
		</header>
		<main class="flex flex_column">
			<div class="flex flex_column">
				<div class="flex" id="inside_header" class="flex">Emergency Services</div>
				<div class="flex" style="display:none;" id="police_logo"><img width="150" src="static/policeman.svg"></div> <!--display=''-->
			</div>
			<div class="flex" id="middle_block"> <!--align_flex_end-->
				<div style="flex:1;" class="flex">
					<select name="type" id="select_type">
						<option value="police">Police</option>
						<option value="ambulance">Ambulance</option>
						<option value="fire">Fire Service</option>
					</select>
				</div>
				<div class="flex" style="display:none;"> <!--display=''-->
					<button id="mute_button"><i class="fas fa-microphone-slash responsive_icon"></i><br>mute</button>
				</div>
			</div>
			<div class="flex">
				<button id="call_button" class="round_button"><i class="fas fa-phone responsive_icon"></i></button>
			</div>
		</main>
		<footer><?php	require_once(__DIR__."/../essentials/footer.php");	?></footer>
		<script>
			function in_call(){
				document.querySelector("#inside_header").classList.add("align_flex_end");
				document.querySelector("#middle_block").classList.add("align_flex_end");
				document.querySelector("#select_type").parentElement.style.display = "none";
				document.querySelector("#police_logo").style.display = "";
				document.querySelector("#mute_button").parentElement.style.display = "";
				document.querySelector("#call_button").id = "hangup_button";
				document.body.style.background = "linear-gradient(45deg, rgba(234,155,73,1) 0%, rgba(32,124,229,1) 100%)";
			}

			function not_in_call(){
				document.querySelector("#inside_header").classList.remove("align_flex_end");
				document.querySelector("#middle_block").classList.remove("align_flex_end");
				document.querySelector("#select_type").parentElement.style.display = "";
				document.querySelector("#police_logo").style.display = "none";
				document.querySelector("#mute_button").parentElement.style.display = "none";
				document.querySelector("#hangup_button").id = "call_button";
				document.body.style.background = "linear-gradient(45deg, rgba(73,155,234,1) 0%, rgba(32,124,229,1) 100%)";
			}
		</script>
	</body>
</html>