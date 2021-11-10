<?php
include_once("connection.php");
session_start();
$id=!empty($_GET["id"])? $_GET['id']:0;
$action=!empty($_GET["action"])? $_GET['action']:'add';
$sql = "SELECT * From product where pro_id = '$id'";
var_dump($id);
var_dump($action);
var_dump($sql);
$res = pg_query($conn,$sql);
var_dump($res);
$_SESSION['page']=!empty($_GET['page'])?$_GET['page']:'index';
var_dump($_SESSION['page']);
/*if($action=='add')
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
        echo '<meta http-equiv="refresh" content="0;URL=index.php?page=cart"/>';
        exit();
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
    echo '<meta http-equiv="refresh" content="0;URL=index.php?page=cart"/>';
    exit();
}
else
{
    unset($_SESSION['cart'][$id]);
    echo '<meta http-equiv="refresh" content="0;URL=index.php?page=cart"/>';
    exit();
}

        if($_SESSION['page']=="index"){
            echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
        }
        if($_SESSION['page']=="cart"){
            echo '<meta http-equiv="refresh" content="0;URL=index.php?page=cart"/>';
        }
        */



?>
