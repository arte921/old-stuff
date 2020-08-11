<?
file_put_contents("androidlog/log_android.txt",date("Y-m-d H:i:s")." android start ".$_GET['timer'].' '.$_GET['data'].chr(13).chr(10),FILE_APPEND);

header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

if ($_GET['data'] != ''){
	
		file_put_contents('android.txt', date('d M H:i').' '.$_GET['data'].chr(13).chr(10).file_get_contents('android.txt'));	
	if ($_GET['data'] == 'reset_the_full_chat'){
		file_put_contents('android.txt', '');
	}
}
file_put_contents("androidlog/log_android.txt",date("Y-m-d H:i:s")." android exit ".$_GET['timer'].' '.$_GET['data'].chr(13).chr(10),FILE_APPEND);
echo file_get_contents('android.txt');
?>