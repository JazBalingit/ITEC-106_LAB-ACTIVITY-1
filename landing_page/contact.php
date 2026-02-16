<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .form-control::placeholder {
            color: #4e4d4d !important;
            opacity: 1;
        }
    </style>
</head>

<body style="background-color: #000000; padding-top: 40px;">
    <!-- ========== HEADER =========== -->
    <nav class="navbar fixed-top navbar-expand-lg border-bottom border-warning border-3" data-bs-theme="dark"
        style="font-family:Georgia, 'Times New Roman', Times, serif; background-color: #000000;">
        <div class="container-fluid mx-2">
            <div class="d-flex align-items-center">
                <img class="bg-transparent" src="../img/mamba-logo.png" style="width: 40px; height: 45px;"
                    alt="Mamba Logo">
                <a class="navbar-brand text-warning text-uppercase ms-2" style="letter-spacing: 4px;" href="#">Mamba</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mr-2" style="letter-spacing: 2px;" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-tertiary me-3" aria-current="page" href="../landing_page/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-tertiary me-3" href="../landing_page/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning me-3" href="#!">Contact</a>
                    </li>
                    <a class="btn btn-outline-warning ms-3 me-3" href="login.php">Log In</a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ========== END OF HEADER =========== -->

    <!-- ======== START OF CONTENT ========= -->
    <!-- ======== CONTENT 1ST PART -->
    <div class="text-center">
        <div class="text-uppercase text-warning mt-5" style="letter-spacing: 3px; 
            font-family:Verdana, Geneva, Tahoma, sans-serif;">
            get in touch
        </div>
        <div class="text-uppercase text-white display-3 display-md-4 mt-2" style="letter-spacing: 3px; 
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
            Contact <span class="text-warning"> us </span>
        </div>
        <div class="text-secondary mt-2" style="letter-spacing: 3px; 
            font-family:Arial, Helvetica, sans-serif; font-size: 13px;">
            Have questions? We'd love to hear from you.
        </div>
    </div>
    <!-- ======== END OF 1ST PART -->
    <!-- ======== CONTENT 2ND PART -->
    <div class="row mb-5">
        <!-- location google ma[] -->
        <div class="col-md-6">
            <div class="text-warning text-center mt-5 mb-2 text-uppercase fs-3 fs-md-4"
                style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; letter-spacing: 4px;">
                location
            </div>
            <div class="container py-3 px-3 border-1 border-secondary d-flex justify-content-center">
                <iframe class="rounded-4"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.9046164367924!2d121.06212397412565!3d14.316972886136464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d771a8ee1419%3A0x8ba33fccb95a7b40!2sCavite%20State%20University%20-%20Carmona!5e0!3m2!1sen!2sph!4v1770951179715!5m2!1sen!2sph"
                    width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- contact us form -->
        <div class="col-md-6">
            <div class="text-warning text-center mt-5 mb-4 text-uppercase fs-3 fs-md-4"
                style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; letter-spacing: 4px;">
                Form
            </div>
            <div class="mx-auto" style="max-width: 450px; font-family: 'Times New Roman', Times, serif;">
                <div class="mb-3">
                    <label class="text-secondary mb-2">Email Address</label>
                    <input type="email" class="form-control bg-black text-light border border-secondary rounded-0 py-2"
                        placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label class="text-secondary mb-2">Name</label>
                    <input type="text" class="form-control bg-black text-light border border-secondary rounded-0"
                        placeholder="Your name">
                </div>
                <div class="mb-3">
                    <label class="text-secondary mb-2">Message</label>
                    <textarea class="form-control bg-black text-light border border-secondary rounded-0" rows="4"
                        placeholder="Write your message..."></textarea>
                </div>
                <!-- button -->
                <div class="d-grid mt-4">
                    <button class="btn btn-warning text-uppercase rounded-0 py-3" style="letter-spacing: 2px;">
                        Send Message
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ======== END OF 2ND PART -->
    <!-- ======== END OF CONTENT ========= -->
    <br>
    <br>
    <!-- ======== START FOOTER =========-->
    <?php include("../includes/footer.php") ?>
    <!-- ======== FOOTER END ========-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>