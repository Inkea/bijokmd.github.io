<?php 
    $mysqli= false;
    function connectDB(){
    	global $mysqli;
    	$mysqli = new mysqli("localhos", "root","","bijokdb");
    	$mysqli->query("SET NAMES 'UTF-8'");
    }

    function closeDB(){
    	global $mysqli;
    	$mysqli->closeDB();
    }
?>