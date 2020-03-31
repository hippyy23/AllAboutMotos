<?php include('config.php') ?>
<?php include('includes/registration_login.php') ?>

<?php include('includes/head_section.php'); ?>

<title>
    SIGN UP
</title>

</head>

<body>
    <?php include('includes/navbar.php'); ?>

    <div class="content container">
        <div class="row">
            <div class="col">
                <h2 class="reg-form-title">
                    SING UP | ALL ABOUT MOTO'S
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                
                <form class="text-center p-5" action="registration.php" method="POST">
                    
                    <input type="text" class="form-control mb-4" placeholder="First name" name="fname" required>
                        
                    <input type="text" class="form-control mb-4" placeholder="Last name" name="lname" required>

                    <input type="email" class="form-control mb-4" placeholder="E-mail" name="email" required>

                    <input type="text" class="form-control mb-4" placeholder="Username" name="username" required>

                    <input type="password" class="form-control" placeholder="Password" name="password" required>

                    <button class="btn btn-dark my-4 btn-block" type="submit" name="singup_btn" >Sign up</button>

                </form>

            </div>
        </div>
        <?php if (isset($_SESSION["signup"]) && !empty($_SESSION["signup"])) { ?>
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="alert alert-danger text-center">
                        <?php 

                            $msg = $_SESSION["signup"];
                            echo $msg ;
                            unset($_SESSION['signup']);
    
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <?php include('includes/footer.php') ?>
</body>
</html>