<?
file_put_contents("androidlog/log_android.txt",date("Y-m-d H:i:s")." androidcheck start ".$_GET['timer'].chr(13).chr(10),FILE_APPEND);
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

$old = file_get_contents('android.txt');
while($old == file_get_contents('android.txt')){
	sleep(1);
}
echo file_get_contents('android.txt');
file_put_contents("androidlog/log_android.txt",date("Y-m-d H:i:s")." androidcheck stopt ".$_GET['timer'].chr(13).chr(10),FILE_APPEND);
?>