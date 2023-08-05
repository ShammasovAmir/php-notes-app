<?php

$config               = require("./config.php");
$db                   = new Database($config['database']);
$heading              = "My Note";
$currentUserId        = 1;


//TODO: fix sql injection possibility
$note = $db->query("SELECT * FROM notes WHERE id = {$_GET['id']}")
    ->findOrFail();

authorize($note['user_id'] === $currentUserId);


require "./views/note.view.php";
