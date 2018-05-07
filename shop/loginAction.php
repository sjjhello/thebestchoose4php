<?php
	require_once '../include.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($password){
		if($username){
			$sql = "select * from bs_user where username='{$username}' and password='{$password}'";
			$res = checkUser($sql);    
    		if($res){
        		$_SESSION['userName']=$res['username'];
        		$_SESSION['userId'] = $res['id'];
        		alertMes("登陆成功", "index.php");
    		}
		}
	}