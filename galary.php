<?php
$title = "Gallery";
include "partials/header.php";
include "partials/nav.php";


$limit = 6;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$start = ($page -  1) * $limit;

$pdo = new Query();
$data = $pdo->load_all_images($start, $limit);

$totalProducts = new Query();
$totalProducts = $totalProducts->count_images();
$pages = ceil($totalProducts / $limit);

?>
<div class="row">
    <?php
    while ($row = $data->fetch()) {
        $pic = $row['pic'];
    ?>
        <div class="col-md-4 ">
            <div class="card-body rounded  shadow-sm bg-white mt-2 ">
                <div class="row align-items-center col-equal-height ">
                    <div class="col-12 p-4">
                        <div class="card">
                            <h5 class="text-secondary"><?= $row['descriptions'] ?></h5>
                            <div onclick='showImage("<?=$pic?>")' class=" card-body rounded shadow-sm" style='min-height: 300px; cursor:pointer;  background-image:url(uploads/<?= $row["pic"] ?>); background-repeat:no-repeat; background-size:cover'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<div class="row mt-4">
    <div class="col-md-8 offset-md-2">
    <nav aria-label="Page navigation example shadow-lg">
        <ul class="pagination">

            <?php
            if ($page > 1) {
            ?>
                <li class="page-item ">
                    <a class="page-link" href="galary.php?page=<?php echo $page - 1 ?>" aria-label="Previous">
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
                    <a class="page-link" href="galary.php?page=<?php echo $page + 1 ?>" aria-label="Next">
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


<!-- Modal -->
<div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
    <div class="modal-dialog model-lg">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img id="showImg" src="uploads/0c3a7f95632903655026758b3b03b97bIMG-20220510-WA0000.jpg" class="img-fluid w-100" alt="Loading Image">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    let x = document.getElementById('showImg');
    function showImage(imgSrc) {        
        var myModal = new bootstrap.Modal(document.getElementById('enroll'), {
            keyboard: false
        });
        myModal.toggle();
        x.src = 'uploads/'+imgSrc;
        
    }
</script>
<?php
include "partials/footer.php";
