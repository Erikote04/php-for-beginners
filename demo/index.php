<?php

require "Database.php";
require "functions.php";
// require "router.php";


$config = require("config.php");
$db = new Database($config['database']);

/*
    $_GET is a super global variable (assoc array) that contains info about the url.
    Since the url is accessible for the client and that bad people exists, someone could be tempted to inject (in this case) SQL queries that could mess up our DB (e.g. example.com/?id=1;drop table users;).
    We'll get the results of searching the id = 1, but after that our "users" table will be deleted, and we don't want that.
    We'll try to find a solution in this commit.
*/

// DON'T DO
/* 
    $id = $_GET['id']; 
    $query = "select * from posts where id = {$id}"; 

    NEVER ever ever ever inline user inputs into SQL queries
*/

// DO

$id = $_GET['id'];
$query = "select * from posts where id = ?"; 
//       "select * from posts where id = :id"; is also a solution

$posts = $db->query($query, [$id])->fetch();
//                          [':id' => $id]

dd($posts);