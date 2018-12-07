<?php
$url="https://banking.nonghyup.com/servlet/IPEF0012R.frag";
$referer="https://banking.nonghyup.com/servlet/IPEF0011I.view";
$array = parse_url($url); 
$url_scheme = $array['scheme']; 
$url_server = $array['host']; 
$url_path = $array['path']; 
$url_query= $array['query']; 
$url_port = (empty($array['port'])) ? 80 : $array['port']; 

$fp = fsockopen($url_server, $url_port); 

if (empty($fp)) { 

  echo "error-http소켓접속에 실패하였습니다."; 
  exit; 
} 

fputs($fp, "GET " . $url_path . "?" . $url_query . " HTTP/1.0\n"); 
fputs($fp, "Accept: */*\n"); 
fputs($fp, "Content-Type: application/x-www-form-urlencoded\n"); 
fputs($fp, "Host: $url_server:$url_port\n"); 
fputs($fp, "Referer: $referer\n"); 
fputs($fp, "Cache-control: private\n"); 
fputs($fp, "Pragma: no-cache\n"); 
fputs($fp, "Connection: close\n\n"); 

$text = ''; 
while (!feof($fp)){ 

  $text .= fgets($fp, 1024); 
} 

fclose($fp); 

echo $text; 

?> 
