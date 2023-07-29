<?php
$title = "Dashboard";
include "partials/header.php";
include "partials/sidebar.php";
include "partials/nav.php";
include "classes/queries.php";

?>

<div class="container  pt-4">
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body ">
                    <?php include "partials/summary.php" ?>
                    <div class="alert shadow-sm alert-success text-center rounded">
                        <h3>Take Action</h3>
                        <p class="">
                            Welcome Admin Dashboard of UWSD's Website.  Please be aware that any action taken here 
                            Directly takes effect on the website. Henceforth, Beware and cognizant of every buttons you click.
                        </p>
                        <button class="btn-outline-primary rounded-pill shadow-sm btn-lg btn " data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            Open Menu
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>