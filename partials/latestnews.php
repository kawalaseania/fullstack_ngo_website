
<?php
$pdo = new Query();
$news = $pdo->select_last_three_news();
while ($row = $news->fetch()) {
?>

<div class="col-md-4 row-equal-height row-equal-height">
   <div class="card rounded-2   border  shadow-lg h-100">
    <div class="card-header text-left">
    <a class="nav-link lead" href="news.php?newsId=<?=$row['id']?>"><h6><?php echo $row['headline'] ?></h6></a>
    </div>
    <div class="card-body p-0">
        <img class=" h-100  img-fluid" src="uploads/<?php echo $row['pic'] ?>" alt="">
    </div>
   </div>
</div>
<?php
}
?>
      

              