<?php
session_start();
$id= isset($_GET['id'] ? $_GET['id'] : "";
if(isset($_SESSION['cart'])){
	if(isset($_SESSION['cart'][$id]))
	{
		$_SESSION['cart'][$id]['qty'] +=1;
	}
	else{
		$_SESSION['cart'][$id]['qty'] =1;
	}
	echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
}
else{
	$_SESSION['cart'][$id]['qty'] =1;
	echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
}

?>