<?php
//membuat konstanta dengan fungsi define()
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'rahasia');
define('DB_NAME', 'belajar');
//membuat konstanta dengan kata kunci const
const API_KEY="1234";

echo "Server : ".DB_SERVER."<br/>";
echo "User : ".DB_USER."<br/>";
echo "Password : ".DB_PASS."<br/>";
echo "Name : ".DB_NAME."<br/><br/>";
echo "API KEY : ".API_KEY;
?>