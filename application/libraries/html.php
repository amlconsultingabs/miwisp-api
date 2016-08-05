<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Html {

        public function GetLogin()
        {
			$login = '
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>miWISP</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/css/normalize.css">
<style>
/* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
body {
font-family: "Open Sans", sans-serif;
height: 100vh;
background: #24C6DC; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #24C6DC , #514A9D); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #24C6DC , #514A9D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        
}

@keyframes spinner {
0% {
transform: rotateZ(0deg);
}
100% {
transform: rotateZ(359deg);
}
}
* {
box-sizing: border-box;
}
.wrapper {
display: flex;
align-items: center;
flex-direction: column;
justify-content: center;
width: 100%;
min-height: 100%;
padding: 20px;
}

.login {
border-radius: 2px 2px 5px 5px;
padding: 10px 20px 20px 20px;
width: 90%;
max-width: 320px;
background: #ffffff;
position: relative;
padding-bottom: 80px;
box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading button {
max-height: 100%;
padding-top: 50px;
}
.login.loading button .spinner {
opacity: 1;
top: 40%;
}
.login.ok button {
background-color: #8bc34a;
}
.login.ok button .spinner {
border-radius: 0;
border-top-color: transparent;
border-right-color: transparent;
height: 20px;
animation: none;
transform: rotateZ(-45deg);
}
.login.error button {
background-color: #ff7373;
}
.login.error button .spinner {
border-radius: 0;
border-top-color: transparent;
border-right-color: transparent;
height: 20px;
animation: none;
transform: rotateZ(-45deg);
}
.login input {
display: block;
padding: 15px 10px;
margin-bottom: 10px;
width: 100%;
border: 1px solid #ddd;
transition: border-width 0.2s ease;
border-radius: 2px;
color: #ccc;
}
.login input + i.fa {
color: #fff;
font-size: 1em;
position: absolute;
margin-top: -47px;
opacity: 0;
left: 0;
transition: all 0.1s ease-in;
}
.login input:focus {
outline: none;
color: #444;
border-color: #2196F3;
border-left-width: 35px;
}
.login input:focus + i.fa {
opacity: 1;
left: 30px;
transition: all 0.25s ease-out;
}
.login a {
font-size: 0.8em;
color: #2196F3;
text-decoration: none;
}
.login .title {
color: #444;
font-size: 1.2em;
font-weight: bold;
margin: 10px 0 30px 0;
border-bottom: 1px solid #eee;
padding-bottom: 20px;
}
.login button {
width: 100%;
height: 100%;
padding: 10px 10px;
background: #2196F3;
color: #fff;
display: block;
border: none;
margin-top: 20px;
position: absolute;
left: 0;
bottom: 0;
max-height: 60px;
border: 0px solid rgba(0, 0, 0, 0.1);
border-radius: 0 0 2px 2px;
transform: rotateZ(0deg);
transition: all 0.1s ease-out;
border-bottom-width: 7px;
}
.login button .spinner {
display: block;
width: 40px;
height: 40px;
position: absolute;
border: 4px solid #ffffff;
border-top-color: rgba(255, 255, 255, 0.3);
border-radius: 100%;
left: 50%;
top: 0;
opacity: 0;
margin-left: -20px;
margin-top: -20px;
animation: spinner 0.6s infinite linear;
transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) button:hover {
box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) button:focus {
border-bottom-width: 4px;
}
footer {
display: block;
padding-top: 50px;
text-align: center;
color: #ddd;
font-weight: normal;
text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
font-size: 0.8em;
}
footer a, footer a:link {
color: #fff;
text-decoration: none;
}
</style>
<script src="./assets/js/prefixfree.min.js"></script>
</head>
<body>
<div class="wrapper">
<form id="form" class="login">
<div style="text-align:center;"><img src="./assets/img/logo.png" /></div>
<p class="title"></p>
<p style="text-align:center;">Acceda con sus credenciales de propietario de la licencia para activar la plataforma</p>
<input name="email" required type="email" placeholder="Email" autofocus/>
<i class="fa fa-user"></i>
<input name="pass" required type="password" placeholder="Contraseña" />
<i class="fa fa-key"></i>
<button>
<i class="spinner"></i>
<span class="state">Activar</span>
</button>
</form>
<footer>
<p>¿Necesita ayuda? soporte@miwisp.net</p>
<a href="http://miwisp.net/">miwisp.net</a>
</footer>
</p>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="./assets/js/index.js"></script>
</body>
</html>
';
			return $login;
        }
		
		public function openSystem($token){
			$open = '
			<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {					
					var request   = $.ajax({
				  	url:          "http://localhost/system/check/api/'.$token.'",
				        cache:        false,
				        type:         "GET"
				    });
				    request.done(function(output){
				      if(output.domain == "error"){
				    	  alert("fallo");
				      } else {
						  $("#iframe").attr("src", output.domain);
				      }
				    });
				    request.fail(function(jqXHR, textStatus){
				    	alert("fallo");
				    });
					return false;
			});
			</script>
			<iframe id="iframe" src="#" style="position:fixed; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;"> Tu navegador no soporta esta tecnologia </iframe>';
			return $open;
		}
}