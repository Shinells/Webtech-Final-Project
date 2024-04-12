<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-image: url("../assets/carImage.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="nav-logo">CarRevamping</a>

            <ul class="nav-items">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                    <a href="#" class="nav-link">Booking</a>
                    <a href="#" class="nav-link">Services</a>
                    <a href="#" class="nav-link">Payment</a>
                </li>
            </ul>
            <button class="button" id="form-open" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        </nav>
    </header>


    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../action/login_action.php" id="loginForm" method="post">
                        <h2>LOGIN</h2>
                        <div class="input-box">
                            <input type="email" id="email" placeholder="Enter your email" name="email" required>
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="input-box">
                            <input type="password" id="password" placeholder="Enter your password" name="password" required>
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <button name="loginButton" class="btn" type="submit">Login</button>
                        <div class="login-signup">
                            Don't have an account? <a href="#" id="signup" data-bs-toggle="modal" data-bs-target="#registerModal">SignUp</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content signup">
                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../action/register_action.php" method="post" id="">
                        <h2>SIGN UP</h2>
                        <div class="input-box">
                            <i class="bi bi-person-fill"></i>
                            <input type="text" name="fName" id="fName" placeholder="First Name" required>
                        </div>
                        <div class="input-box">
                            <i class="bi bi-person-fill"></i>
                            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                        </div>
                        <div class="input-box">
                            <i class="bi bi-telephone"></i>
                            <input type="tel" name="phonenumber" id="phonenumber" placeholder="Phone Number" required>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" placeholder="Enter your email" required>
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="input-box">
                            <input type="password" placeholder="Create password" name="password" required>
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <div class="input-box">
                            <input type="password" placeholder="Confirm password" name="confirmPassword" required>
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <button type="submit" name="signupButton" class="btn">SignUp</button>
                        <div class="login-signup">
                            Already have an account? <a href="#" id="login" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <sript src="../js/script.js"></sript>
    <script src="../js/login.js"></script>

</body>

</html>