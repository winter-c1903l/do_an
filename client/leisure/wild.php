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
        
        <!--Wild Dining-->
        <div class="section-title-space">
            <div class="sm-container">
                <div class="grid">
                    <h2 class="title-block ">Wild Dining</h2>
                    <div class="around-zoo-item ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="wrapp-carousel-img">
                                    <img class="lazyload image-loaded" src="../asset/img/wild.jpg" alt="Jungle breakfast with wildlife"></img>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wrapp-content">
                                    <h3 class="title-block-small">Jungle Breakfast with Wildlife</h3>
                                    <div class="desc rich-text">
                                        <div class="wrapper-read">
                                            <p>Ever wondered what it would be like to have breakfast with orangutans? Find out through our award-winning and first-of-its-kind dining experience. This also gives a rare, unforgettable photo opportunity with not just one but an entire family of orangutans!</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p>Child *ages 6 to 12 will be free</p>
                                    </div>
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo1">More Detail</button>
                                    <div id="demo1" class="collapse">
                                        <i class="far fa-clock">9.00am to 10.30am Daily</i>
                                        <i class="far fa-clock">Animal appearance is from 9.30am to 10.00am.</i>
                                        <i class="far fa-clock">Last seating for the buffet is at 10.00am.</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
<?php include "../helper/footer_common.php"; ?>
<?php include "../helper/script.php"; ?>

</html>