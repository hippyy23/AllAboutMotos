<?php 

    error_reporting(0);
    ini_set('display_errors', 0);

?>

<?php include('../config.php'); ?>
<?php include('includes/admin_functions.php'); ?>
<?php include('includes/head_section.php'); ?>
<?php if (in_array($_SESSION['user']['role'], ["Admin", "Author"])) { ?>

<title>Dashboard</title>

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" id="brand" href="dashboard.php">ALL ABOUT MOTO'S | ADMIN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-1">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ACTIVITIES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Add authors</a>
                    <a class="dropdown-item" href="#">Add post</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">

        <?php if (isset($_SESSION['user']['username'])) { ?>

            <li class="nav-item">
                <span style="pointer-events: none;" class="nav-link">Welcome <?php echo $_SESSION['user']['username'] ?> </span>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../logout.php">LOGOUT</a>
            </li>

        <?php } ?>

        </ul>
    </div>
</nav>

    <div class="content container">
            <div class="row">
                <div class="col">
                </div>
            </div>
    </div>

    <?php include('../includes/footer.php') ?>

    </body>
</html>

<?php } else {
        echo '<H1 style="color: red;">ANAUTHORIZED ACCESS!</H1>';
    }?>