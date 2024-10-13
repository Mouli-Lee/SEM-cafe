<head>
<title>SEM Cafe</title>
<link href="img/favi.png" rel="icon">
</head>

<body>
    <!-- Navbar Start -->
    <?php include 'header.php'; ?>
    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
                <h1 class="display-4">Competitive Pricing</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="mb-5" style="text-align:center" ;>Coffee Beans</h1>
                </div>
                <div class="col-lg-6">
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                            <h5 class="menu-price">$20</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>ARABICA</h4>
                            <p class="m-0">Coffea arabica, also known as the Arabica coffee, is a species of flowering plant in the coffee and madder family Rubiaceae. It is believed to be the first species of coffee to have been cultivated and is currently the dominant cultivar, representing about 60% of global production</p>
                            <!-- <button class="button-30" role="button">Add to cart</button> -->
                            <div class="cart-box">
                                <div class="car-box-contain">
                                <input type="text" id="numberInput" value="0" class="text-value">
                                <button class="sign-button" id="plusBtn">+</button>
                                <button class="sign-button" id="minusBtn">-</button>
                                <button class="button-30 sign-button" role="button">🛒Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-2.jpg" alt="">
                            <h5 class="menu-price">$25</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>ROBUSTA</h4>
                            <p class="m-0">Robusta is a species of flowering plant in the family Rubiaceae. Though widely known by the synonym Coffea robusta, the plant is currently scientifically identified as Coffea canephora, which has two main varieties, C. c. robusta and C. c. nganda</p>
                            <div class="cart-box">
                                <div class="car-box-contain">
                                <input type="text" id="numberInput2" value="0" class="text-value">
                                <button class="sign-button" id="plusBtn2">+</button>
                                <button class="sign-button" id="minusBtn2">-</button>
                                <button class="button-30 sign-button" role="button">🛒Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-3.jpg" alt="">
                            <h5 class="menu-price">$9</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Coffee With Milk</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6">

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                            <h5 class="menu-price">$30</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>EXCELSA</h4>
                            <p class="m-0">Discovered in Africa at the turn of the 20th century, excelsa coffee is a unique, resilient, and productive species, despite its minimal presence in the global coffee market. Little information about how much of it is traded, roasted, or brewed is available.</p>
                            <div class="cart-box">
                                <div class="car-box-contain">
                                <input type="text" id="numberInput1" value="0" class="text-value">
                                <button class="sign-button" id="plusBtn1">+</button>
                                <button class="sign-button" id="minusBtn1">-</button>
                                <button class="button-30 sign-button" role="button">🛒Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-2.jpg" alt="">
                            <h5 class="menu-price">$35</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>LIBIRIKA</h4>
                            <p class="m-0">The shape of the liberica beans is unique among other commercial species (arabica, robusta) and varieties (liberica var. dewevrei). It is asymmetric, with one side shorter than the other side, creating characteristic "hook" at the tip. The central furrow is also more jagged.</p>
                            <div class="cart-box">
                                <div class="car-box-contain">
                                <input type="text" id="numberInput3" value="0" class="text-value">
                                <button class="sign-button" id="plusBtn3">+</button>
                                <button class="sign-button" id="minusBtn3">-</button>
                                <button class="button-30 sign-button" role="button">🛒Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-3.jpg" alt="">
                            <h5 class="menu-price">$9</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Coffee With Milk</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
</body>

</html>