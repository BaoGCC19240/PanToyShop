<?php
include_once('connection.php');
session_start();
$id=!empty($_GET["id"])?(int) $_GET['id']:0;
$action=!empty($_GET["action"])? $_GET['action']:'add';
$sql = "SELECT * From product where Pro_ID = '$id'";
$res = mysqli_query($conn, $sql) or die ("Product is not found !!!");
$_SESSION['page']=!empty($_GET['page'])?$_GET['page']:'index';
if($action=='add')
{
   if(isset($_SESSION['cart'][$id]))
        {
            $qty = $_SESSION['cart'][$id]+1;
        }
        else
        {
            $qty=1;
        }
        $_SESSION['cart'][$id]= $qty;
        //echo '<meta http-equiv="refresh" content="0;URL=index.php?page=cart"/>';
        //exit();
}
elseif($action=='update')
{
    if($_SESSION['cart'][$id]>0)
    {
        $qty = $_SESSION['cart'][$id]-1;
    }
    else
    {
        unset($_SESSION['cart'][$id]);
    }
    $_SESSION['cart'][$id]= $qty;
    //echo '<meta http-equiv="refresh" content="0;URL=index.php?page=cart"/>';
    //exit();
}
else
{
    unset($_SESSION['cart'][$id]);
    //echo '<meta http-equiv="refresh" content="0;URL=index.php?page=cart"/>';
    //exit();
}

        if($_SESSION['page']=="index"){
            echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
        }
        if($_SESSION['page']=="cart"){
            echo '<meta http-equiv="refresh" content="0;URL=index.php?page=cart"/>';
        }




?>
