<?php
error_reporting(E_ALL);
$ch = curl_init("https://cyber-hub.pw/proxy.php?get=1");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);
$proxygrab = curl_exec($ch);
curl_close($ch);
echo '<div class="col-md-10"><div class="content-box-header">
		  					<div class="panel-title">Güncell Proxy List (http)</div>
			  			</div>
			  			<div class="content-box-large box-with-header">';
echo '<textarea name="proxyler" cols=100 rows=30>'.$proxygrab.'</textarea>'
?>
