<?php


require_once dirname(dirname(__DIR__))."/vendor/autoload.php";
use Dotenv\Dotenv;
$env = Dotenv::createImmutable(dirname(dirname(__DIR__)));
$env->load();


define("BASE", $_ENV['APP_URI']);

function base(){echo BASE;}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kicks Nairobi | Dealers in footwares and lastest sneakers</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="<?php base()?>ke/css/offline/style.css">
    <link rel="stylesheet" href="<?php base()?>ke/css/offline/awesome/all.css">
    <link rel="stylesheet" href="<?php base()?>ke/css/offline/awesome/fontawesome.min.css">
</head>
<div class="blur">