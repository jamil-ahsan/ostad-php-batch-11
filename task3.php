<?php
session_start();

    $_SESSION['name'] = $name;
    $_SESSION['budget'] = $budget;


    echo "Welcome, {$_SESSION['name']}! Your budget is {$_SESSION['budget']}";

?>