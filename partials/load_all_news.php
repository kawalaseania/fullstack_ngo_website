<?php


$limit = 6;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$start = ($page -  1) * $limit;

$pdo = new Query();
$data = $pdo->load_news_with_limit($start, $limit);

$totalNews  = $pdo->count_news();
$pages = ceil($totalNews / $limit);

?>
<div class="row">
   
   <div class="col-md-8 offset-md-2 border rounded-0 bg-light shadow-lg pt-5">
   <h1 class="text-primary text-center">UWSD-Liberia Latest News</h1>
   <?php
    while ($row = $data->fetch()) {
        $pic = $row['pic'];
    ?>
         <div class="card-body border mb-3 bg-light shadow-lg " style="border-radius:15px">
            <div class="row">
                <div class="col-md-6 rounded">
                    <img src="uploads/<?= $row["pic"] ?>" class="img-fluid rounded img-responsive" alt="">
                </div>
                <div class="col-md-6">
                <h5 class="text-capitalize"><?= $row["1"] ?></h5>
                <p class="lead"><?= substr($row["3"],0,200) ?></p><br>
                <a href="news.php?newsId=<?=$row['id']?>" class="btn btn-outline-primary rounded-pill px-4 btn-sm">Read More</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
   </div>
</div>

<div class="row mt-4">
  <div class="row-md-8 offset-md-2">
  <nav aria-label="Page navigation example shadow-lg">
        <ul class="pagination">

            <?php
            if ($page > 1) {
            ?>
                <li class="page-item ">
                    <a class="page-link" href="news.php?page=<?php echo $page - 1 ?>" aria-label="Previous">
                        Previous <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php
            }

            ?>
            <?php
            if ($page < $pages) {
            ?>

                <li class="page-item">
                    <a class="page-link" href="news.php?page=<?php echo $page + 1 ?>" aria-label="Next">
                        Next <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>

            <?php
            }

            ?>
            <li class="page-item disabled bg-dark text-white">
                <a class="page-link disabled" href="#>" aria-label="Next">
                    <i>You are on <?php echo $page . "/" . $pages; ?></i>
                </a>
            </li>
        </ul>
    </nav>
  </div>
</div>
