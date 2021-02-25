<?php

$whitelisted = array('ip1', 'ip2', 'etc');

$ip = $_SERVER['REMOTE_ADDR'];

if (in_array ($ip, $whitelisted)) {
echo("success");
} else {
    echo("error");
}
?>
