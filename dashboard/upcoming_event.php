<?php
$title = "Events";
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
                        if(isset($_GET["msg"]))
                        {
                            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> <?=$_GET["msg"];?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php 
                        }
                    ?>
                         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Events Table</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">New Event</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <?php include "partials/tables/events_table.php" ?>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <?php include "partials/forms/upcoming_event_form.php"?>
                        </div>
                    </div>
                </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

if(isset($_POST['publish'])){

    $subject = $_POST["subject"];
   $date_of_event = $_POST['eventDate'];
    $location = $_POST["location"];
    $description = $_POST["description"];

    function validate_data($data){
        if(empty($data)){
            echo "<script>window.location = 'upcoming_event.php?msg=A field was empty please fill out all fields'</script>";
            exit();
        }
    }

    validate_data($subject);
    validate_data($date_of_event);
    validate_data($location);
    validate_data($description);


    $pdo = new Query();
    if($pdo->save_event($subject, $date_of_event, $location, $description)){
        echo "<script>window.location = 'upcoming_event.php?msg=Your an event have been published to the website'</script>";
    }else{
        echo "<script>window.location = 'upcoming_event.php?msg=A fatal error occured while trying to publish an event'</script>";
    }
    
    
}