<?php
$pdo = new Query();
$events = $pdo->select_three_event();
while ($row = $events->fetch()) {
?>
  <!-- event item -->
    <div class="row">
      <div class="col-4 text-center">
        <h3 class="text-secondary mb-0"><?=$row["day"]?></h3>
        <h1 class="mt-0 text-danger"><?=strtoupper($row["month"])?></h1>
        <div class="red_line bg-danger"></div>
      </div>
      <div class="col-8">
        <h5 class="text-primary"><?=$row["subjects"]?></h5>
        <small>
          <p class="text-primary mb-0"> <i class="bi bi-geo-alt"></i> <?=$row["locations"]?></p>
          <p class="text-danger mt-0"><i class="bi bi-alarm"></i> <?=$row["hour"]?></p>
        </small>
      </div>
    </div>
<?php
}
?>