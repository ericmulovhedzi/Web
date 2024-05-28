<? 
$_FP = fopen("../logs/app_downlds_log.dat",a);
fwrite($_FP,date("Y-m-d g:i A")." : ".$_SERVER['PHP_SELF']." : ".$_SERVER['REMOTE_ADDR']." : ".$_SERVER['REMOTE_HOST']."\n");
fclose($_FP);
?>