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
<!-- <div  class="w-p-100 hide" id="viewOnMap">
    <div class=" m-a w-p-100" style="top:50px;position: fixed; z-index: 900; " id="viewOnMapdiv">
        <div class="col-10 m-a">
            <div class="m-10">
                <div class=" b-white p-20 box-shadow">
                    <div class="" style="width: 100%;">
                        <div class="c-pointer " style="display: flex; float:right;" id="close">
                           <p class="bg_update p-0-12 b-r-100 f-s-30 f-w-900" >&times;</p>
                        </div>
                        <div class="map_display">
                            <img src="http://127.0.0.1/shoetailor/kicks_files/svgs/adopters-bg.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="blur">