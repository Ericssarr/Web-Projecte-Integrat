<?php

$admin = UserData::getById($_SESSION["user_id"]);
$user = UserData::getById($_GET["id"]);
if($admin->is_admin){
	if($user->id!=$admin->id){
		$user->del();
		Core::alert("Eliminat exitosament!");
		Core::redir("./?view=users");
	}else{
	Core::alert("No et pots eliminar a tu mateix");
	Core::redir("./?view=users");
	}
}else{
	Core::alert("Error!");
}
Core::redir("./logout.php");

?>