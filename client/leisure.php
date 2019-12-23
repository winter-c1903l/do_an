<!DOCTYPE html>
<html lang="en">
<head> 
	<?php include "../helper/bootstrap_common.php";?>
 </head>
 <style>
    
    .title-block{
        text-align: center;
        color: darkgreen;
        margin: 20px;
    }
    .grid{
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
    body > div.container > div:nth-child(1) > div > div > div > div > div > div > div {
    padding: 5px 20px;
    }
    .row{
        
        margin-left: 10px;
        margin-right: 10px;
    }
    .foodlist{
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
   .card{
       height: 550px;
       margin-bottom: 10px;
   }
   .card-img-top{
       height:290px;
   }
   .card-text{
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
<?php include "../asset/css/navstyle.php";?>
<?php include "../asset/css/footerstyle.php";?>
<?php include "../setting/constant.php";?>   
<?php include "../helper/header_common.php";?>
<?php $Detect = LEI ;?>
<body>
    

<div class="container">
    <!--Dinning-->
    <div class="section-title-space">
        <div class="sm-container">
            <div class="grid"><img src="../asset/img/dinner.jpg" alt="">
                <h2 class="title-block">Dinning</h2>
                <div class="richtext parbase section">
                    <div class="sm-container">
                        <div class="rich-text">
                            <div class="grid-small">
                                <div class="one-column-only-text">
                                    <div style="text-align: center;">Whether you're looking for meat or vegetarian options, or craving something sweet or savoury, you'll be spoilt for choice when it comes to dining at Singapore Zoo.</div>
                                    <div style="text-align: center;">&nbsp;</div>
                                    <div style="text-align: center;">Rest assured that our food and ingredients do not contain pork or lard, and our seafood comes from sustainable sources.<br></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
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
                                        <div> <p>Child *ages 6 to 12 will be free</p></div>
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
    <!--Food At the Zoo Entrance-->
    <div class="section-title-space">
        <div class="sm-container">
            <div class="grid">
                <h2 class="title-block">Food at the Zoo Entrance</h2>
                <div class="foodlist">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="card" style="width:450px">
                                <img class="card-img-top" src="../asset/img/kfc.jpg" alt="Card image" style="width:100%"></img>
                                <div class="card-body">
                                    <h4 class="card-title">KFC</h4>
                                    <p class="card-text">
                                    Everyone loves Colonel Sanders’ secret herbs and spices crispy chicken! 
                                    Complement your finger-lickin’ 
                                    good treat with the signature KFC whipped potato or other delectable choices!</p>
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo2">More Detail</button>
                                    <div id="demo2" class="collapse">
                                        <i class="far fa-clock">10.00am to 6.30pm (Mon-Fri)</i>
                                        <i class="far fa-clock">9.00am to 7.00pm (Sat, Sun, public holidays)</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="card" style="width:450px">
                                <img class="card-img-top" src="../asset/img/coffee.jpg" alt="Card image" style="width:100%"></img>
                                <div class="card-body">
                                    <h4 class="card-title">Inuka Cofe'</h4>
                                    <p class="card-text">
                                    You can’t go wrong with Singapore’s all-time favourite dishes. 
                                    Indulge in some hearty kaya toast, soft-boiled eggs and chendol – perfect for any time of the day!</p>
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo3">More Detail</button>
                                    <div id="demo3" class="collapse">
                                        <i class="far fa-clock">8.00am to 7.00pm Daily</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="card" style="width:450px">
                                <img class="card-img-top" src="../asset/img/ahmeng.jpg" alt="Card image" style="width:100%"></img>
                                <div class="card-body">
                                    <h4 class="card-title">Ah Meng Kitchen</h4>
                                    <p class="card-text">
                                    Fancy something local? Ah Meng Kitchen serves up a range of authentic Singaporean favourites such as nasi lemak, 
                                    fried bee hoon and laksa.</p>
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo4">More Detail</button>
                                    <div id="demo4" class="collapse">
                                        <i class="far fa-clock">9.00am to 7.00pm (Mon-Fri)</i>
                                        <i class="far fa-clock">8.30am to 7.00pm (Sat, Sun, public holidays)</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="card" style="width:450px">
                                <img class="card-img-top" src="../asset/img/ben.jpg" alt="Card image" style="width:100%"></img>
                                <div class="card-body">
                                    <h4 class="card-title">Ben & Jerry's</h4>
                                    <p class="card-text">
                                    Cure your ice cream cravings with our diverse mix of experimental ice cream flavours with chunks and swirls.</p>
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo5">More Detail</button>
                                    <div id="demo5" class="collapse">
                                        <i class="far fa-clock">10.30.am to 7.00pm Daily</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="card" style="width:450px">
                                <img class="card-img-top" src="../asset/img/chawang.jpg" alt="Card image" style="width:100%"></img>
                                <div class="card-body">
                                    <h4 class="card-title">Chawang Bistro</h4>
                                    <p class="card-text">
                                    Looking for something different? Tantalise your taste buds with 
                                    Chawang Bistro’s selection of gourmet hot dogs, pastas, cakes, tarts and more!</p>
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo6">More Detail</button>
                                    <div id="demo6" class="collapse">
                                        <i class="far fa-clock">10.30am to 7.00pm Daily</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="card" style="width:450px">
                                <img class="card-img-top" src="../asset/img/deli.jpg" alt="Card image" style="width:100%"></img>
                                <div class="card-body">
                                    <h4 class="card-title">The Wild Deli</h4>
                                    <p class="card-text">
                                    Be spoilt for choice with a fine selection of gourmet sandwiches and pizzas at The Wild Deli, 
                                    best enjoyed with a side of coffee!</p>
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo7">More Detail</button>
                                    <div id="demo7" class="collapse">
                                        <i class="far fa-clock">10.30am to 7.00pm Daily</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Dining in the Zoo-->
    <div class="section-title-space">
        <div class="sm-container">
            <div class="grid">
                <h2 class="title-block">Dining in the Zoo</h2>
                <div class="foodlist">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="card" style="width:450px">
                                <img class="card-img-top" src="../asset/img/ahmeng2.jpg" alt="Card image" style="width:100%"></img>
                                <div class="card-body">
                                    <h4 class="card-title">Ah Meng Restaurant</h4>
                                    <p class="card-text">
                                    With a casual atmosphere and a variety of food to choose from, Ah Meng Restaurant is the perfect food stop. 
                                    Enjoy local and western delights such as chicken rice, fish & chips, briyani and more!</p>
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo8">More Detail</button>
                                    <div id="demo8" class="collapse">
                                        <i class="far fa-clock">10.30am to 4.30pm Daily</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="card" style="width:450px">
                                <img class="card-img-top" src="../asset/img/ahmeng3.jpg" alt="Card image" style="width:100%"></img>
                                <div class="card-body">
                                    <h4 class="card-title">Ahmeng Bistro</h4>
                                    <p class="card-text">
                                    Aside from its fine selection of gourmet sandwiches, pastries and desserts, 
                                    Ah Meng Bistro brews a health specialty tea, which promotes overall wellness. 
                                    Come in for a light treat!</p>
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo3">More Detail</button>
                                    <div id="demo3" class="collapse">
                                        <i class="far fa-clock">10.30am to 5.00pm Daily</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Gifts & Souvenirs-->
    <div class="section-title-space">
                <div class="sm-container">
                    <div class="grid">
                        <h2 class="title-block ">Gifts & Souvenirs</h2>
                        <div class="around-zoo-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrapp-carousel-img">
                                        <img class="lazyload image-loaded" src="../asset/img/gift.jpg" alt="Jungle breakfast with wildlife"></img>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wrapp-content">
                                        <h3 class="title-block-small">Gift Shops</h3>
                                        <div class="desc rich-text">
                                            <div class="wrapper-read">
                                            <span class="content">
                                                <p>From an assortment of plush toys to an array of nature-inspired mementos, discover unique finds to bring home and remind you of your visit with us!</p>
                                                
                                            </span>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo10">More Detail</button>
                                        <div id="demo10" class="collapse">
                                            <p><b>Locations</b></p>
                                                <p><b>Zoo entrance (Main Outlet)</b><br></p>
                                                <p>9.00am to 7.00pm Weekdays</p>
                                                <p>8.30am to 7.00pm Weekends and public holidays</p>
                                                <p><b>Shaw Amphitheatre</b></p>
                                                <p>10.00am to 5.30pm Daily</p>
                                                <p><b>Rainforest Kidzworld</b></p>
                                                <p>9.00am to 6.00pm Daily</p>
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
<?php include "../helper/footer_common.php";?>
<?php include "../helper/script.php";?> 
</html>