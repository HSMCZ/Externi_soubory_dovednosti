<?php 
  setcookie('username', $_POST['jmeno'], time()-3600, '/');
  setcookie('password', md5($_POST['heslo']), time()-3600, '/');
?>

<html>
<head>
<meta http-equiv='refresh' content="0;url=index.php">

</head>
<body>
P�esm�rov�v�n�...
</body>
</html>