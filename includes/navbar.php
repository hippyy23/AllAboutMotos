<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="brand" href="index.php">ALL ABOUT MOTO'S</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-1">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

            <?php if (isset($_SESSION['user']['username'])) { ?>

                <li class="nav-item">
                    <span style="pointer-events: none;" class="nav-link">Welcome <?php echo $_SESSION['user']['username'] ?> </span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">LOGOUT</a>
                </li>

            <?php } else { ?>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">LOGIN</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="registration.php">SIGN UP</a>
                </li>

            <?php } ?>

            </ul>
        </div>
    </nav>