<?php require_once('config.php') ?>
<?php require_once('includes/functions.php') ?>

<!-- head_section -->
<?php include('includes/head_section.php') ?>


<!-- Get all cards from db -->
<?php $cards = getCards(); ?>

        <title>Home Page</title>
    </head>
<body>

    <!-- navbar -->
    <?php include('includes/navbar.php') ?>

    <div class="content container">

        <?php 
            $numOfCols = 4;
            $rowCount = 0;

            foreach ($cards as $card) {
                if($rowCount % $numOfCols == 0) {
                ?> <div class="row"> <?php 
                }
                $rowCount++; ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?php echo './static/img/' . $card['img']; ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $card['title'] ?>
                                </h4>
                                <a href="single_post.php?card-id=<?php echo $card['id']; ?>" class="btn">Read more...</a>
                            </div>
                        </div>
                    </div>
                <?php 
                    if($rowCount % $numOfCols == 0){
                        ?> </div> <?php
                    } 
            }
            ?>
    </div>

    <!-- footer -->
    <?php include('includes/footer.php') ?>

    </body>
</html>