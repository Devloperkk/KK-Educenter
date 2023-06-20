<?php

$hostName = "aws.connect.psdb.cloud";
$dbUser = "4wtdpv3mf0ll0tc3vpqt";
$dbPassword = "pscale_pw_MlNFfTFUHLCFoQpaoUZFB5TwMcz50JDYtrHuGfwoxGI";
$dbName = "kk-educenter";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>