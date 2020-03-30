<?php include('config.php') ?>
<?php include('includes/registration_login.php') ?>
<?php include('includes/head_section.php'); ?>

<title>
    LOGIN
</title>

</head>

<body>
    <?php include('includes/navbar.php'); ?>

    <div class="content container">
        <div class="row">
            <div class="col">
                <h2 class="reg-form-title">
                    LOGIN | ALL ABOUT MOTO'S
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                
                <form class="text-center p-5" action="login.php" method="POST">

                    <input type="text" class="form-control mb-4" placeholder="Username" name="username" required>

                    <input type="password" class="form-control" placeholder="Password" name="password" required>

                    <button class="btn btn-dark my-4 btn-block" type="submit" name="login_btn" >Sign in</button>

                </form>
            </div>
        </div>
        <?php if (isset($_SESSION["login"]) && !empty($_SESSION["login"])) { ?>
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="alert alert-danger text-center">
                        <?php 
                            $msg = $_SESSION["login"];
                            echo $msg ;
                            unset($_SESSION['login']);
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <?php include('includes/footer.php') ?>
</body>
</html>