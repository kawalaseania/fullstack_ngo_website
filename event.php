<?php
$title = "Home";
include "partials/header.php";
include "partials/nav.php";
?>

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card  mb-5">
            <div class="card-header bg-white">
                <h1 class="text-primary"><i class="bi bi-calendar-event"></i> Our up coming events</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php 
                        if($pdo->count_upcoming_events() >0){
                            $events = $pdo->select_un_occured_events();

                            while($rows = $events->fetch()){

                                $date=date_create($rows['date_of_event']);
                                $year = date_format($date,"Y")."<br>";
                                $month = date_format($date,"M")."<br>";
                                $day = date_format($date,"d");

                                ?>
                                <div class="card mt-4 border shadow-sm">
                                    <div class="card-heeader">
                                        <div class="row align-items-center">
                                        <div class="col-md-4 text-center bg-primary text-warning  border-right">
                                            <div class="row m-3 py-2" style="border:1px dotted white">
                                                <div class="col col-md-12">
                                                     <h5 class="mb-0"><?=$day?></h5>
                                                </div>
                                                <div class="col col-md-12">
                                                    <h1 class="mt-0 mb-0"><?=$month?></h1>
                                                </div>
                                                <div class="col col-md-12">
                                                    <h5 class="mt-0 mb-0"><?=$year?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 border-start">
                                            <h3 class="mb-0 "><?=$rows['subjects']?></h3>
                                            <p class="lead mt-0"><i class="bi bi-geo-alt-fill"></i>Happening @ <?=$rows['locations']?></p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card-body mb-3   shadow-lg">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <h4><i class=" text-primary bi bi-newspaper"></i> Event Deatils</h4>
                                            <?=$rows['descriptions']?>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <?php 
                            }
                            
                        }else{
                           ?>
                           <div class="alert alert-danger text-center" role="alert">
                            <h3 class="text-danger">
                               <span class="display-3 text-warning">
                               <i class="bi bi-exclamation-triangle-fill"></i>
                               </span> <br>Oops! There is no event up at this moment</h3>
                            <a href="index.php" class="btn btn-danger">Exit Here</a>
                            </div>
                           <?php 
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
include "partials/footer.php";
