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

<body style="background-color: #000000;">
    <!-- ========== HEADER =========== -->
    <nav class="navbar fixed-top navbar-expand-lg border-bottom border-warning border-3" data-bs-theme="dark"
        style="font-family:Georgia, 'Times New Roman', Times, serif; background-color: #000000;">
        <div class="container-fluid mx-2">
            <div class="d-flex align-items-center">
                <img class="bg-transparent" src="../img/mamba-logo.png" style="width: 40px; height: 25px;"
                    alt="Mamba Logo">
                <a class="navbar-brand text-warning text-uppercase ms-2" style="letter-spacing: 4px;" href="#">Mamba</a>
            </div>
        </div>
    </nav>
    <!-- ========== END OF HEADER =========== -->

    <!-- ============= LOG IN CONTAINER =============== -->
        <div class="container mt-4">
            <!-- image -->
            <div class="border-1 border-warning d-flex justify-content-center">
                <img class="bg-transparent mt-5" src="../img/mamba-logo.png" style="width: 100px; height: 80px;"
                    alt="Mamba Logo">
            </div>
            <!-- text -->
            <div class="text-uppercase text-white fs-2 display-md-1 text-center"
                style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; letter-spacing: 4px;">
                welcome back
            </div>
            <div class="text-center text-secondary mt-1">
                Sign in into your Mamba account.
            </div>

            <div class="mx-auto mt-4" style="max-width: 780px; font-family: 'Times New Roman', Times, serif;">

                <form class="needs-validation" novalidate>

                <!-- row 1 last name, first name, middle name -->
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <label class="text-secondary mb-2">Last Name</label>
                        <input type="text"
                            class="form-control bg-black text-light border border-secondary rounded-0 py-2"
                            placeholder="Last Name" style="height: 45px;" required>
                        <div class="invalid-feedback">Please enter your last name.</div>
                    </div>
                    <div class="col-md-4">
                        <label class="text-secondary mb-2">First Name</label>
                        <input type="text"
                            class="form-control bg-black text-light border border-secondary rounded-0 py-2"
                            placeholder="First Name" style="height: 45px;" required>
                        <div class="invalid-feedback">Please enter your first name.</div>
                    </div>
                    <div class="col-md-4">
                        <label class="text-secondary mb-2">Middle Name</label>
                        <input type="text"
                            class="form-control bg-black text-light border border-secondary rounded-0 py-2"
                            placeholder="Middle Name" style="height: 45px;">
                    </div>
                </div>

                <!-- row 2 email and gender -->
                <div class="row g-3 mb-3">
                    <div class="col-md-8">
                        <label class="text-secondary mb-2">Email Address</label>
                        <input type="email"
                            class="form-control bg-black text-light border border-secondary rounded-0 py-2"
                            placeholder="name@example.com" style="height: 45px;" required>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>
                    <div class="col-md-4">
                        <label class="text-secondary mb-2">Gender</label>
                        <select class="form-select bg-black text-secondary border border-secondary rounded-0"
                            style="height: 45px;" required>
                            <option value="" disabled selected>Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                            <option value="prefer_not">Prefer not to say</option>
                        </select>
                        <div class="invalid-feedback">Please select a gender.</div>
                    </div>
                </div>

                <!-- row 3 password and confirm password -->
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="text-secondary mb-2">Password</label>
                        <input type="password" id="password"
                            class="form-control bg-black text-light border border-secondary rounded-0 py-2"
                            placeholder="Password" style="height: 45px;" required>
                        <div class="invalid-feedback">Please enter a password.</div>
                    </div>
                    <div class="col-md-6">
                        <label class="text-secondary mb-2">Confirm Password</label>
                        <input type="password" id="confirmPassword"
                            class="form-control bg-black text-light border border-secondary rounded-0 py-2"
                            placeholder="Confirm Password" style="height: 45px;" required>
                        <div class="invalid-feedback" id="confirmFeedback">Please confirm your password.</div>
                    </div>
                </div>
                <!-- row 4 profile picture -->
                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <label class="text-secondary mb-2">Profile Picture <span
                                class="text-secondary small">(Optional)</span></label>
                        <input type="file" accept="image/*"
                            class="form-control bg-black text-secondary border border-secondary rounded-0 py-2">
                    </div>
                </div>

                <!-- button -->
                <div class="d-grid mt-2">
                    <button type="submit" class="btn btn-warning text-uppercase rounded-0 py-3" style="letter-spacing: 2px;">
                        Sign Up
                    </button>
                </div>

                <!-- log in link -->
                <div class="text-center mt-4 pb-5">
                    <span class="text-secondary">Already have an account? </span>
                    <a href="#" class="text-warning text-decoration-none fw-bold">Log In</a>
                </div>

                </form>

            </div>
        </div>
    <!-- ============= END LOG IN CONTAINER =============== -->

    <!-- ============= FOOTER =============== -->
     <?php include("../includes/footer.php") ?>
    <!-- ============= END FOOTER =============== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script>
        (() => {
            'use strict'

            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>