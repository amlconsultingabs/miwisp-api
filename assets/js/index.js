/*
 * AML Consulting C.A.
 * Department: AML Consulting Software Labs  
 * Division: Web
 * 
 * Created: 05/08/2016
 * Last modify: 05/08/2016
 * Edition: 1.0.0
 * 
 * Filename: index.js
 * 
 * Comments: Functions for activate API
 * 
 */
var working=!1;$(".login").on("submit",function(a){a.preventDefault();var b=$(this);$state=b.find("button > .state"),b.addClass("loading"),$state.html("Cargando...");var c=$("#form").serialize(),d=$.ajax({url:"http://localhost/system/check/activate_api",cache:!1,data:c,type:"post"});d.done(function(a){"error"==a.token?($(".spinner").hide(),b.addClass("error"),$state.html("Usuario/Contraseña invalido"),setTimeout(function(){$state.html("Activar"),$(".spinner").show(),b.removeClass("error loading"),working=!1},4e3)):($.get("api/write/"+a.token),b.addClass("ok"),$state.html("Plataforma activada"),setTimeout(function(){location.reload()},4e3))}),d.fail(function(a,c){$(".spinner").hide(),b.addClass("error"),$state.html("Error, intente mas tarde"),setTimeout(function(){$(".spinner").show(),$state.html("Activar"),b.removeClass("error loading"),working=!1},4e3)})});