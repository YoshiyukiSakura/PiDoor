<?php
//excute this every minute
$condition = true;
$count = 0;
while ($condition) {
        $count++;
	$serverIP = "http://115.159.119.52/***/index.php/welcome/lockStatus";
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $serverIP);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($curl);
	curl_close($curl);
	if ($output=="1") {
		shell_exec("sudo python /root/SAKS-SDK/openlock.py");
	}
  if ($count == 55){
          break;
  }
	sleep(1);
}
echo "done";
?>
