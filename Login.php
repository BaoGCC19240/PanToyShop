
<link rel="stylesheet" href="css/bootstrap.css">
<div id="top">
<?php
if(isset($_POST['btnLogin'])){
    $us =$_POST['txtUsername'];
    $pa=$_POST['txtPass'];

    $err="";
    if($us==""){
        $err.="Enter Username, please<br/>";
    }
    else if($pa==""){
        $err.="Enter Password, please<br/>";
    }

   if($err != ""){
        echo $err;
   }
    else{
        include_once("connection.php");
        $us=mysqli_real_escape_string($conn,$us);
        $pass=md5("$pa");
        $sq="Select Username, Password, state from customer where Username='$us' and Password='$pass'";
        $res= mysqli_query($conn,$sq) or die(mysqli_error($conn));
        $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
        if(mysqli_num_rows($res)==1)
        {
            $_SESSION["us"]=$us;
            $_SESSION["admin"]=$row['state'];
            echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
        }
        else
        {
            echo "Username or password is incorrect, please login again";
        }
    }
}

?>

<form id="form1" name="form1" method="POST">

<div class="container">	
<h2>Login</h2>
<div class="col-sm-10">
  <label for="exampleFormControlInput1" class="form-label">Username(*)</label>
  <input type="text" name="txtUsername" id="txtUsername" class="form-control" id="exampleFormControlInput1" placeholder="Username">
</div>
<div class="col-sm-10">
  <label for="exampleFormControlTextarea1" class="form-label">Password(*)</label>
  <input type="password" name="txtPass" id="txtPass" class="form-control" id="exampleFormControlInput1" placeholder="Password">
</div>
<div class="form-group"> 
        <div class="col-sm-10">
        	<input type="submit" name="btnLogin"  class="btn btn-primary bre" id="btnLogin" value="Login"/>
            <input type="button" name="btnCancel"  class="btn btn-primary bre" id="btnCancel" value="Cancel" onclick="window.location='index.php'" />
		</div>  
	</div>
</div>

</form>
</div>


   