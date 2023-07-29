<?php 
$pdo = new Query();
$total_articles = $pdo->count_from_a_table('news');
$total_galary = $pdo->count_from_a_table('galary');
$total_events = $pdo->count_from_a_table('events');

?>

<div class="container-fluid  ">
<div class="row mb-4">
    <div class="col-md-4 border-right mt-3">
        <div class="row align-items-center mx-2 rounded shadow-sm alert-info" style="border-left: 7px solid green">
            <div class="col-4 text-center p-2 ">
                <h1 class="display-5 mb-0 text-success">   <i class="bi bi-pencil-fill"></i> </h1>
            </div>
            <div class="col-8">
            <h3 class="mt-0 text-secondary mb-0">Articles</h3>
                <small class="lead mt-0"><?=$total_articles?></small>
            </div>
        </div>
    </div>

    <div class="col-md-4 mt-3">
        <div class="row rounded mx-2 shadow-sm alert-info" style="border-left: 7px solid red">
            <div class="col-4 text-center p-2 ">
                <h1 class="display-5 mb-0 text-danger">   <i class="bi bi-people-fill"></i> </h1>
            </div>
            <div class="col-8">
            <h3 class="mt-0 text-secondary">Pictures</h3>
                <small class="lead"><?=$total_galary?></small>
            </div>
        </div>
    </div>

    <div class="col-md-4 border-right mt-3">
        <div class="row rounded mx-2 shadow-sm alert-info" style="border-left: 7px solid #0dcaf0">
            <div class="col-4 text-center p-2 ">
                <h1 class="display-5 text-info mb-0">   <i class="bi bi-calendar2-event"></i> </h1>
            </div>
            <div class="col-8">
            <h3 class="mt-0 mb-0 text-secondary">Events</h3>
                <small class="lead mt-0"><?=$total_events?></small>
            </div>
        </div>
    </div>

</div>
</div>