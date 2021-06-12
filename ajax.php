 <?php
  //require 'js/php.js';
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'save_user_director'){
	$save = $crud->save_user_director();
	if($save)
		echo $save;
}
if($action == 'update_user'){
	$save = $crud->update_user();
	if($save)
		echo $save;
}
if($action == 'update_user_director'){
	$save = $crud->update_user_director();
	if($save)
		echo $save;
}
if($action == 'save_page_img'){
	$save = $crud->save_page_img();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == 'delete_photo'){
	$save = $crud->delete_photo();
	if($save)
		echo $save;
}
if($action == 'delete_photo_director'){
	$save = $crud->delete_photo_director();
	if($save)
		echo $save;
}
if($action == 'add_chart'){
	$save = $crud->add_chart();
	if($save)
		echo $save;
}
if($action == 'remove_chart'){
	$save = $crud->remove_chart();
	if($save)
		echo $save;
}
ob_end_flush();
?>
