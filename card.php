<?php
require('./connection.php');


$card_details = $mysqli->query('SELECT * FROM `card_details` where `id`=' . $_GET['id'] . ' ');
$result = $card_details->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Image</title>
    <link rel="stylesheet" href="./dist/css/card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid p-0 w-100">
        <!-- heder start -->
        <div class=" header row-mt-10 w-100 h-3" style="background:<?= (isset($result->header_color)) ?  $result->header_color :  '#2d247d'?>"></div>
        <!-- heder end -->
        <!-- Main Detile for the employ-->
        <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <div class="card1 p-0 mb-5 rounded" style="background-color:<?= (isset($result->color)) ?  $result->color :  '#2d247d'   ?>">
                <img class="pimg " src="./uploads/<?= $result->profile_pic ?>" alt="Card image cap">
                <img class="bgimg "  src="./uploads/<?= $result->background_img ?>" alt="Card image cap">
                <div class="card-header p-2  border-bottom-0">
                    <h2 class=" title " style="color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>" ><?= $result->first_name ?> <?= $result->last_name ?></h2>
                    <p class="title1 card-text text-warning-p" style="color:<?= (isset($result->heading_p_tag)) ?  $result->heading_p_tag :  '#2d247d'   ?>">Assistant Manager | Corporate Communications</p>
                </div>
                <hr class="p-0 m-0">
                <div class="card-body">
                    <div class="c-text">
                        <h5 class="card-title" style="color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"><?= $result->division ?></h5>
                        <p class="card-text text-warning-p" style="color:<?= (isset($result->heading_p_tag)) ?  $result->heading_p_tag :  '#2d247d'   ?>">Division</p>
                        <hr>
                    </div>
                    <div class="icon p-1 m-0"><i class="fa fa-mobile" aria-hidden="true" style="font-size:60px ; color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"></i></div>
                    <div class="c-text">
                        <h5 class="card-title" style="color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"><?= $result->mobile_number ?></h5>
                        <p class="card-text text-warning-p" style="color:<?= (isset($result->heading_p_tag)) ?  $result->heading_p_tag :  '#2d247d'   ?>">Mobile</p>
                        <hr>
                    </div>
                    <div class="icon" ><i class="fa fa-phone" aria-hidden="true" style="font-size:42px ; color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"></i></div>
                    <div class="c-text">
                        <h5 class="card-title" style="color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"><?= $result->phone_number ?></h5>
                        <p class="card-text text-warning=p" style="color:<?= (isset($result->heading_p_tag)) ?  $result->heading_p_tag :  '#2d247d'   ?>">Phone</p>
                        <hr>
                    </div>
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true" style="font-size:36px ; color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"></i></div>
                    <div class="c-text">
                        <h5 class="card-title" style="color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"><?= $result->email ?></h5>
                        <p class="card-text text-warning-p" style="color:<?= (isset($result->heading_p_tag)) ?  $result->heading_p_tag :  '#2d247d'   ?>">Email</p>
                        <hr>
                    </div>
                    <div class="icon"><i class="fa fa-globe" aria-hidden="true" style="font-size:39px ; color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"></i></div>
                    <div class="c-text">
                        <h5 class="card-title" style="color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"><?= $result->website_link ?></h5>
                        <p class="card-text text-warning-p" style="color:<?= (isset($result->heading_p_tag)) ?  $result->heading_p_tag :  '#2d247d'   ?>">Website</p>
                        <hr>
                    </div>
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true" style="font-size:44px ; color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"></i></div>
                    <div class="c-text">
                        <h5 class="card-title" style="color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"><?= $result->address ?></h5>
                        <p class="card-text text-warning-p" style="color:<?= (isset($result->heading_p_tag)) ?  $result->heading_p_tag :  '#2d247d'   ?>">Street Address</p>
                        <hr>
                    </div>
                    <div class="icon"><i class="fa fa-linkedin-square" aria-hidden="true" style="font-size:39px ; color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"></i></div>
                    <div class="c-text">
                        <h5 class="card-title" style="color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"><?= $result->linkden_link ?></h5>
                        <p class="card-text text-warning-p" style="color:<?= (isset($result->heading_p_tag)) ?  $result->heading_p_tag :  '#2d247d'   ?>">Linkedln</p>
                        <hr>
                    </div>
                    <div class="icon"><i class="fa fa-youtube-play" aria-hidden="true" style="font-size:36px ; color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"></i></div>
                    <div class="c-text">
                        <h5 class="card-title" style="color:<?= (isset($result->text_color)) ?  $result->text_color :  '#2d247d'   ?>"><?= $result->youtube_link ?></h5>
                        <p class="card-text text-warning-p" style="color:<?= (isset($result->heading_p_tag)) ?  $result->heading_p_tag :  '#2d247d'   ?>">YouTube</p>
                    </div>
                </div>
            </div>
        </form>
        <!-- end of the employ Detile -->
        <!-- footer Start -->
        <div class="footer text-center text-muted pb-4 ">
            <p >Powered by <a class="text-muted" href="#">Brand Soul Int.,</a> All rights reserved.</p>
            <a class="text-muted" href="#"> Terms & Conditions</a>
        </div>
        <!-- footer End -->
    </div>


</body>

</html>