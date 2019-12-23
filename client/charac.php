<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../helper/bootstrap_common.php"; ?>
</head>
<style>
    .title-block {
        text-align: center;
        color: darkgreen;
        margin: 20px;
    }

    .grid {
        /* border: 1px solid; */
        margin-bottom: 15px;
        text-align: center;
    }

    .grid-small {
        max-width: 43.75rem;
        margin: 0 auto;
        padding-left: 10px;
        padding-right: 10px;
    }

    body>div.container>div:nth-child(1)>div>div>div>div>div>div>div {
        padding: 5px 20px;
    }

    .row {

        margin-left: 10px;
        margin-right: 10px;
    }

    .foodlist {
        text-align: center;
        max-width: 61.25rem;
        margin: 0 auto;
    }

    /* body > div.container > div.foodlist > div > div:nth-child(2) > div > div > p{
        margin-bottom: 40px;
    }
    
    body > div.container > div.foodlist > div > div:nth-child(4) > div > div{
        margin-bottom: -14px;
    } */
    .card {
        height: 550px;
        margin-bottom: 10px;
    }

    .card-img-top {
        height: 290px;
    }

    .card-text {
        height: 90px;
    }

    /* body > div.container > footer > div > div > div.col-md-4.col-lg-2.mx-auto.my-md-4.my-0.mt-4.mb-1 > ul > li > p > a{
        color: white;
   } */
    /* body > div.container > div > div.foodlist > div > div > div > div{
       color: black;
   } */
    /* body > div.container > div > div.sm-container > div > div > div > div > div > div{
       color: black;
   } */
</style>
<?php include "../asset/css/navstyle.php"; ?>
<?php include "../asset/css/footerstyle.php"; ?>
<?php include "../setting/constant.php"; ?>
<?php include "../helper/header_common.php"; ?>
<?php $Detect = LEI; ?>

<body>


    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../asset/img/kfc.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../asset/img/deli.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../asset/img/ahmeng.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</body>
<?php include "../helper/footer_common.php"; ?>
<?php include "../helper/script.php"; ?>

</html>