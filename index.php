<?php
$heading = "HomePage";
function dd($value){
    echo "<pre>";
    var_dump($value);
    die();
}

// dd($_SERVER);
include('views/index.view.php');