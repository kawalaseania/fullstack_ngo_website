<?php
$title = "Publish News";
include "partials/header.php";
include "partials/sidebar.php";
include "partials/nav.php";
?>

<div class="container-fluid  pt-4">
    <div class="row">
        <div class="col-12">
            <div class="card border-0" class="border: none !important">
                <div class="card-body">
                    <?php
                    if (isset($_GET["msg"])) {
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> <?= $_GET["msg"]; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                    }
                    ?>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">News Table</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">New Post</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <?php include "partials/tables/news_table.php" ?>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <?php include "partials/forms/latest_news_form.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['publish_news'])) {

    $headline = $_POST["headline"];
    $happeningDate = $_POST["happeningDate"];
    $newsBody = $_POST["newsBody"];

    // process the feature image for upload to the server
    if (!$_FILES['featureImg']['size'] == 0 && $_FILES['featureImg']['error'] == 0) {
        $featureimage = $_FILES['featureImg']['tmp_name'];
        $featureimage_name = $_FILES['featureImg']['name'];
        $pic = md5(time()) . $featureimage_name;
        $img_dir = "../uploads/" . $pic;
    } else {
        echo "<script>window.location = 'publish_latest_news.php?msg=Image Error'</script>";
        exit();
    }

    // upload the image and publish the data
    if (move_uploaded_file($featureimage, $img_dir)) {
        // if there is no error in uploading the feature image proceed  
        $pdo = new query(); // initialize or instanciate 
        // save info in database or table 
        if ($pdo->save_news($headline, $happeningDate, $newsBody, $pic)) {
            echo "<script>window.location = 'publish_latest_news.php?msg=News uploaded successfully'</script>";
            exit();
        } else {
            echo "<script>window.location = 'publish_latest_news.php?msg=Error occured while publishing news'</script>";
            exit();
        }
    } else {
        echo "<script>window.location = 'publish_latest_news.php?msg=Image Error'</script>";
        exit();
    }
}
