<?php
function home (){
session_start();
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	verificar();
	if(isset($_COOKIE['perfil'])){
	verificarperfil();
	dashboard();
	}
	else{
	if(isset($_GET['browse'])){
	browse();
	}
	elseif(isset($_GET['createprofile'])){
		createprofile();
	}
	elseif(isset($_GET['editprofile'])){
		editprofile();
	}
	elseif(isset($_GET['editandoprofile'])){
		editandoprofile();
	}
	else{
	browse();
	}
	}
}
else{
if(isset($_GET['login'])){
	login();
}
elseif(isset($_GET['register'])){
	register();
}
else{
home_index();
}
}
}
?>