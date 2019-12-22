<!DOCTYPE html>
<html lang="en">
<head> 
	<?php include "../helper/bootstrap_common.php";?>
 </head>
 <style>
    .background{
        background-color: lightgray;

    }
    .title-block{
        text-align: center;
        color: darkgreen;
        margin: 20px;
    }
    .grid{
        
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
       height: 100px;
   }
 </style>
 <?php include "../asset/css/navstyle.php";?>
 
 <body class="background">
    <?php include "../setting/constant.php";?>   
    <?php $Detect = LEI ;?>
    <div><?php include "../helper/header_common.php";?></div>

<div class="container">
    <!--Dinning-->
    <div class="section-title-space">
        <div class="sm-container">
            <div class="grid">
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
    
    <!--Food At the Zoo Entrance-->
    <div class="section-title-space">
        <div class="sm-container">
            <div class="grid">
            <h2 class="title-block">Food at the Zoo Entrance</h2>
            </div>
        </div>
    </div>  
    
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
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo1">More Detail</button>
                            <div id="demo1" class="collapse">
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
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo2">More Detail</button>
                            <div id="demo2" class="collapse">
                            <i class="far fa-clock" aria-hidden="true"></i>&nbsp; 8.00am to 7.00pm daily
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
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo3">More Detail</button>
                            <div id="demo3" class="collapse">
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
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo4">More Detail</button>
                            <div id="demo4" class="collapse">
                            <i class="far fa-clock">10.30.am to 7.00pm daily</i>
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
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo5">More Detail</button>
                            <div id="demo5" class="collapse">
                            <i class="far fa-clock">10.30am to 7.00pm daily</i>
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
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo6">More Detail</button>
                            <div id="demo6" class="collapse">
                            <i class="far fa-clock">10.30am to 7.00pm daily</i>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php include "../helper/footer_common.php";?>
    <?php include "../helper/script.php";?>
</body>
</html>