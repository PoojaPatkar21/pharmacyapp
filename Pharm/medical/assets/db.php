<?php 
    $con = @mysqli_connect('localhost','root','','store');
//for user informationa making available for all pages

    $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    $user = $array->fetch_assoc();

	$base_path = "http://localhost/Pharm\medical\store.sql";
?>