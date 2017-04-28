<?php

$name = 'Alex James Carret';
echo substr($name, 0, 4);
echo '<hr>';
$body = 'Hello, this is long string and will be displayed if length is < 20';
$body = (strlen($body) > 20) ? substr($body, 0, 20) . '...' : $body;
echo $body;
echo '<hr>';
$username = 'AlexJamesCarret';
$username_is = strtolower($username);

$input = 'AlexJamescarret';

if (strtolower($input) == $username_is) {
    echo 'Ok!';
}
?>
