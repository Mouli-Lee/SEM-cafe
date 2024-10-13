<head>
<title>SEM Cafe</title>
<link href="img/favi.png" rel="icon">
</head>

<body>
    <!-- Navbar Start -->
    <?php include 'header.php'; ?>

    <!-- Reservation Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">30% OFF</h1>
                                <h1 class="text-white">For Online Reservation</h1>
                            </div>
                            <p class="text-white">Book your reservation through our website and enjoy a special discount! Receive 30% off your order when you reserve your table online.</p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>30% Offer exclusive in our website</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>All you need is love and a cup of coffee</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Keep calm and drink coffee</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <?php include 'reservation-form.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->


    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
</body>

</html>