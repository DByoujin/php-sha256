<?php
$password = "123456";
$sha256 = hash("sha256", $password);
echo "암호화 전 내용 : ".$password."<br>";
echo "암호화 후 내용 : ".$sha256."<br>";
?>