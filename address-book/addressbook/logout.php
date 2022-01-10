<?php

session_start();
unset($_SESSION["useremail"]);
session_destroy();

//redirect page to index.php
header('location:index.php');
?>