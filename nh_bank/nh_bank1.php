<?php
include $_SERVER['DOCUMENT_ROOT']."/parser/simple_html_dom.php";
$url ="https://banking.nonghyup.com/servlet/IPEF0012R.frag";
$html=file_get_html($url);
echo $html;
echo type($html);
?>
