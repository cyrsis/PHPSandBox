<?php

require_once 'classes/Database.php';
$db = new Database('localhost', 'root', '', 'website');
$db->query("SELECT `articles`.`title`, `articles`.`id` FROM `articles`");

if ($db->numRows() == 0) {
    echo 'No articles';
} else {
    foreach ($db->rows() as $article) {
        echo $article['id'] . ' - ' . $article['title'] . '<br>';
    }
    echo '<p>' . $db->numRows() . ' articles</p>';
}
?>