<?php


$title = "News";
if(isset($_GET['newsId'])){
    include('partials/news_header.php');
}else{
    include "partials/header.php";
}

?>

<body>
    <?php
    include "partials/nav.php";
    if (isset($_GET["newsId"])) {
        ?>
        
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-primary display-5"><?= $data[1] ?></h2>
                <img src="uploads/<?= $data[4] ?>" alt="" class="img-fluid w-100">
                <?= $data[3] ?>
            </div>
        </div>
        </div>

        <?php 
    }else{
        include "partials/load_all_news.php";
    }
?>

 <!-- footer -->
<?php
include "partials/footer.php";
