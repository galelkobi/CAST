<?php
session_start();
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}

	function login(){
		extract($_POST);
			$qry = $this->db->query("SELECT *,concat(lname,', ',fname) as name FROM $table where email = '".$email."' and password = '".md5($password)."' ");
		if($qry->num_rows > 0){
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'password' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
					$_SESSION['state'] = "Sign Out";
					$_SESSION['typee'] = $_POST['type'];
			}
				if($_SESSION['typee']=='actor'){
				return 1;}
				else{
				return 2;
				}
		}else{
			return 3;
		}
	}
	function logout(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		$_SESSION['state'] = "Sign In";
		header("location:login.php");
		
	}

	function save_user(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id','cpass')) && !is_numeric($k)){
				if($k =='password')
					$v = md5($v);
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		$id = $_SESSION['login_id'];
		$check = $this->db->query("SELECT * FROM users where email ='$email' ".(!empty($id) ? " and id != {$id} " : ''))->num_rows;
		if($check > 0){
			return 2;
			exit;
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users SET $data");
		}else{
			$save = $this->db->query("UPDATE users SET $data where id = $id");
		}
		$user_id = $this->db->insert_id;
		
		foreach($_FILES['photos']['name'] as $i => $value){
			$image_name = $_FILES['photos']['tmp_name'][$i];
			$folder = $_SERVER['DOCUMENT_ROOT']."/images/";
			$image_path = $folder.$_FILES['photos']['name'][$i];
			move_uploaded_file($image_name,$image_path);
			$savephoto = $this->db->query("INSERT INTO users_photo SET id_user = '$user_id', photo = '".$_FILES['photos']['name'][$i]."'");
		}


		if($save){
			return 1;
		}
		return $image_path;
	}
	function save_user_director(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id','cpass')) && !is_numeric($k)){
				if($k =='password')
					$v = md5($v);
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		$check = $this->db->query("SELECT * FROM users_director where email ='$email' ".(!empty($id) ? " and id != {$id} " : ''))->num_rows;
		if($check > 0){
			return 2;
			exit;
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users_director SET $data");
		}else{
			$save = $this->db->query("UPDATE users_director SET $data where id = $id");
		}
		$user_id = $this->db->insert_id;
		
		foreach($_FILES['photos']['name'] as $i => $value){
			$image_name = $_FILES['photos']['tmp_name'][$i];
			$folder = $_SERVER['DOCUMENT_ROOT']."/images/";
			$image_path = $folder.$_FILES['photos']['name'][$i];
			move_uploaded_file($image_name,$image_path);
			$savephoto = $this->db->query("INSERT INTO users_director_photo SET id_user = '$user_id', photo = '".$_FILES['photos']['name'][$i]."'");
		}


		if($save){
			return 1;
		}
		return $data;
	}
	function add_chart(){
		extract($_POST);

		$check = $this->db->query("SELECT * FROM cart where user_id ='$id_user' and id='".$_SESSION['login_id']."'")->num_rows;
		if($check > 0){
			return 2;
			exit;
		}
		$save = $this->db->query("INSERT INTO cart SET date = SYSDATE(),user_id ='$id_user', id='".$_SESSION['login_id']."'");
		if($save){
			return 1;
		}
		return "march pas";
	}
	function update_user(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id','cpass')) && !is_numeric($k)){
				if($k =='password')
					$v = md5($v);
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		$id = $_SESSION['login_id'];
		$check = $this->db->query("SELECT * FROM users where email ='$email' ".(!empty($id) ? " and id = {$id} " : ''))->num_rows;
		if($check = 0){
			return 2;
			exit;
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users SET $data");
			$user_id = $this->db->insert_id;
		}else{
			$save = $this->db->query("UPDATE users SET $data where id = $id");
			$user_id = $id;
		}
		
		
		foreach($_FILES['photos']['name'] as $i => $value){
			$image_name = $_FILES['photos']['tmp_name'][$i];
			$folder = $_SERVER['DOCUMENT_ROOT']."/images/";
			$image_path = $folder.$_FILES['photos']['name'][$i];
			move_uploaded_file($image_name,$image_path);
			if(!empty($image_name)){
			$savephoto = $this->db->query("INSERT INTO users_photo SET id_user = '$user_id', photo = '".$_FILES['photos']['name'][$i]."'");}
		}


		if($save){
			return 1;
		}
		return $data;
	}
	function update_user_director(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id','cpass')) && !is_numeric($k)){
				if($k =='password')
					$v = md5($v);
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		$id = $_SESSION['login_id'];
		$check = $this->db->query("SELECT * FROM users_director where email ='$email' ".(!empty($id) ? " and id = {$id} " : ''))->num_rows;
		if($check = 0){
			return 2;
			exit;
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users_director SET $data");
			$user_id = $this->db->insert_id;
		}else{
			$save = $this->db->query("UPDATE users_director SET $data where id = $id");
			$user_id = $id;
		}
		
		
		foreach($_FILES['photos']['name'] as $i => $value){
			$image_name = $_FILES['photos']['tmp_name'][$i];
			$folder = $_SERVER['DOCUMENT_ROOT']."/images/";
			$image_path = $folder.$_FILES['photos']['name'][$i];
			move_uploaded_file($image_name,$image_path);
			if(!empty($image_name)){
			$savephoto = $this->db->query("INSERT INTO users_director_photo SET id_user = '$user_id', photo = '".$_FILES['photos']['name'][$i]."'");}
		}


		if($save){
			return 1;
		}
		return $data;
	}
	function delete_user(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM users where id = ".$id);
		if($delete)
			return 1;
	}
	function delete_photo(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM users_photo where id = ".$id_photo);
		if($delete){
			return 1;}
	}
	function delete_photo_director(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM users_director_photo where id = ".$id_photo);
		if($delete){
			return 1;}
	}
	
	function remove_chart(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM cart WHERE user_id ='$id_user' and id='".$_SESSION['login_id']."'");
		if($delete)
			return 1;
	}
	
	function save_page_img(){
		extract($_POST);
		if($_FILES['img']['tmp_name'] != ''){
				$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
				$move = move_uploaded_file($_FILES['img']['tmp_name'],'images/'. $fname);
				if($move){
					$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
					$hostName = $_SERVER['HTTP_HOST'];
						$path =explode('/',$_SERVER['PHP_SELF']);
						$currentPath = '/'.$path[1]; 
   						 // $pathInfo = pathinfo($currentPath); 

					return json_encode(array('link'=>$protocol.'://'.$hostName.$currentPath.'/admin/assets/uploads/'.$fname));

				}
		}
	}

}