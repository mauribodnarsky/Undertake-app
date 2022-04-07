<?php

class Utils{
	
	public static function isAdmin(){
		if(!isset($_SESSION['identity'])){
			header("Location:".base_url."bar/landing");
		}else{
			return true;
		}
	}
	
}
