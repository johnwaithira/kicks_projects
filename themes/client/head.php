<?php

define("BASE", "http://127.0.0.1/kicksfootware/");

require_once dirname(dirname(__DIR__))."/vendor/autoload.php";
function base()
{
    echo BASE;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kicks Nairobi | Dealers in footwares and lastest sneakers</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="http://127.0.0.1/shoetailor/ke/css/style.css">
    <link rel="stylesheet" href="http://127.0.0.1/shoetailor/ke/css/awesome/all.css">
    <link rel="stylesheet" href="http://127.0.0.1/shoetailor/ke/css/awesome/fontawesome.min.css">
    <script src="<?php base();?>ke/js/app.js"></script>
</head>