<?php

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<br>";


echo "HTTP_HOST:" . $_SERVER[HTTP_HOST];
echo "<br>";

echo "SERVER_NAME: " . $_SERVER[SERVER_NAME];
echo "<br>";

echo "SERVER_SOFTWARE: " . $_SERVER[SERVER_SOFTWARE];
echo "<br>";

echo "HTTP_USER_AGENT: " . $_SERVER[HTTP_USER_AGENT];
echo "<br>";

echo "REMOTE_ADDR: " . $_SERVER[REMOTE_ADDR];
echo "<br>";

?>