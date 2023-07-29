<?php
$title = "Galary";
 include "partials/header.php";
 include "partials/sidebar.php";
 include "partials/nav.php";
 ?>

<div class="container-fluid  pt-4">
    <div class="row">
        <div class="col-12">
            <div class="card border-0">
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
                    <div class="card-body">
                    <?php include "partials/forms/upload_pitcutre_form.php"?>
                    </div>
                    <div class="card-body mt-3 shadow-sm">
                        <h3 class="text-secondary">Picture galary table</h3>
                        <hr class="mb-4">
                    <?php include "partials/tables/pictures_table.php"?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 


if (isset($_POST['save_img'])) {

    $descriptions = $_POST["descriptions"];

    // process the feature image for upload to the server
    if (!$_FILES['featureImg']['size'] == 0 && $_FILES['featureImg']['error'] == 0) {
        $featureimage = $_FILES['featureImg']['tmp_name'];
        $featureimage_name = $_FILES['featureImg']['name'];
        $pic = md5(time()) . $featureimage_name;
        $img_dir = "../uploads/" . $pic;
    } else {
        echo "<script>window.location = 'galary.php?msg=Image Error'</script>";
        exit();
    }

    // upload the image and publish the data
    if (move_uploaded_file($featureimage, $img_dir)) {
        // if there is no error in uploading the feature image proceed  
        $pdo = new query(); // initialize or instanciate 
        // save info in database or table 
        if ($pdo->save_img($descriptions, $pic)) {
            echo "<script>window.location = 'galary.php?msg=Image Uploaded Successfully'</script>";
            exit();
        } else {
            echo "<script>window.location = 'galary.php?msg=Error Occured While processing'</script>";
            exit();
        }
    } else {
        echo "<script>window.location = 'galary.php?msg=Image Error'</script>";
        exit();
    }
}