<?php require_once('config.php') ?>
<?php require_once('includes/functions.php') ?>

<?php 
    if(isset($_GET['card-id'])) {
        $card = getCard($_GET['card-id']);
    }
?>
<!-- head_section -->
<?php include('includes/head_section.php'); ?>

<title>
    <?php echo $card['title'] ?>
</title>
</head>
<body>
    <?php include('includes/navbar.php'); ?>

    <div class="content container">
        <div class="row">
            <div class="col">
                <h2 class="s-card-title">
                    <?php echo $card['title'] ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="./static/img/<?php echo $card['img'] ?>" alt="" class="card-img">
            </div>
            <div class="col-8">
                <p class="card-content">
                    <?php echo $card['content'] ?>
                </p>
            </div>         
        </div>
    </div>

    <!-- footer -->
    <?php include('includes/footer.php') ?>

</body>