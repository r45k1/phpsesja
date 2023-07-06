<?php
/** * Zabezpieczenie kodu hasłem przy użyci Session */

session_start();

if(isset($_POST['submit_pass']) && $_POST['pass'])
{
 $pass=$_POST['pass'];
 if($pass=="1212")
 {
  $_SESSION['password']=$pass;
 }
 else
 {
  $error="Złe hasło";
 }
}

if(isset($_POST['page_logout']))
{
 unset($_SESSION['password']);
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrapper">

<?php
if($_SESSION['password']=="1212")
{
 ?>
 <h1>Panel Aktywności fizycznych</h1>
	<p><div style=""><img src="img/add.png"><b>Dodaj tekst<b></div><div style=""><img src="img/add.png"><b>Dodaj tekst<b></div></p>
 <form method="post" action="" id="logout_form">
  <input type="submit" name="page_logout" value="Wyloguj się">
 </form>
 <?php
}
else
{
 ?>
 <form method="post" action="" id="login_form">
  <h1>BLOKADA</h1>
  <input type="password" name="pass" placeholder="">
  <input type="submit" name="submit_pass" value="Zaloguj">
  <p><font style="color:red;"><?php echo $error;?></font></p>
 </form>
 <?php	
}
?>

</div>
</body>
</html>