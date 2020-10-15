<?php
use Yii;

function debug($arr){
	echo '<pre>' . print_r($arr, true) . '</pre>';
}

function dbconnect(){
	$base = $_SESSION['db'];
	if($base==1){
		$q = 'portal';
	}
	if($base==2){
		$q= 'portal_2';
	}
	return $q;
}