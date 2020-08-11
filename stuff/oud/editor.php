<?
if ($_POST['naam']=="Sec7Ret?"){

if ($_POST['nieuw']!=""){
	file_put_contents('styles.css', $_POST['nieuw']);
}
$oud=file_get_contents('styles.css');
}
?>
<html>
<head>
<title>online editor</title>
</head>
<body>
<form method='post' action="http://www.becquerel.nl/aj/editor.php" id="usrform">
wachtwoord<input type="password" name="naam" value="<? echo $_POST['naam'] ?>">
<br><? /*
url<input type="text" name="url" value="<? echo $_POST['url'] ?>">
<br>*/ ?>
<input type="submit">
</form>
<textarea rows='100' style='width: 100%;'  name="nieuw" form="usrform"><? echo $oud; ?>