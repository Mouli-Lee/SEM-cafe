<body>
<div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4 footer-div">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street,Anna nagar,Chennai</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 9361240361</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i><a href="mailto:semcafe@gmail.com">semcafe@gmail.com</a></p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>Follow us in social media for more information</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/mouli_lee/?utm_source=qr&igsh=ZGhubG05YmZ0ZHQ0"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p>8.00 AM - 10.00 PM</p>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="">AGARSEN COLLEGE</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by "MOULI Tech Company"</p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        // Fetch the content of the reservation form HTML file
        fetch('reservation-form.html')
            .then(response => response.text()) // Convert the response to text
            .then(html => {
                // Insert the HTML content into the 'reservationForm' div
                document.getElementById('reservationForm').innerHTML = html;
            })
            .catch(error => console.error('Error fetching content:', error));

            // Add to cart ARABICA
        const numberInput = document.getElementById('numberInput');
        const plusBtn = document.getElementById('plusBtn');
        const minusBtn = document.getElementById('minusBtn');

        plusBtn.addEventListener('click', () => {
            let currentValue = parseInt(numberInput.value);
            numberInput.value = currentValue + 1;
        });

        minusBtn.addEventListener('click', () => {
            let currentValue = parseInt(numberInput.value);
            numberInput.value = currentValue - 1 >= 0 ? currentValue - 1 : 0;
        });
        // Add to cart EXCELSA
        const numberInput1 = document.getElementById('numberInput1');
        const plusBtn1 = document.getElementById('plusBtn1');
        const minusBtn1 = document.getElementById('minusBtn1');

        plusBtn1.addEventListener('click', () => {
            let currentValue1 = parseInt(numberInput1.value);
            numberInput1.value = currentValue1 + 1;
        });

        minusBtn1.addEventListener('click', () => {
            let currentValue1 = parseInt(numberInput1.value);
            numberInput1.value = currentValue1 - 1 >= 0 ? currentValue1 - 1 : 0;
        });
        // Add to cart ROBUSTA
        const numberInput2 = document.getElementById('numberInput2');
        const plusBtn2 = document.getElementById('plusBtn2');
        const minusBtn2 = document.getElementById('minusBtn2');

        plusBtn2.addEventListener('click', () => {
            let currentValue2 = parseInt(numberInput2.value);
            numberInput2.value = currentValue2 + 1;
        });

        minusBtn2.addEventListener('click', () => {
            let currentValue2 = parseInt(numberInput2.value);
            numberInput2.value = currentValue2 - 1 >= 0 ? currentValue2 - 1 : 0;
        });
        // Add to cart LIBIRIKA
        const numberInput3 = document.getElementById('numberInput3');
        const plusBtn3 = document.getElementById('plusBtn3');
        const minusBtn3 = document.getElementById('minusBtn3');

        plusBtn3.addEventListener('click', () => {
            let currentValue3 = parseInt(numberInput3.value);
            numberInput3.value = currentValue3 + 1;
        });

        minusBtn3.addEventListener('click', () => {
            let currentValue3 = parseInt(numberInput3.value);
            numberInput3.value = currentValue3 - 1 >= 0 ? currentValue3 - 1 : 0;
        });
    </script>
</body>