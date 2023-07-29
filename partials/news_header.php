<?php 
include_once('dashboard/classes/queries.php');
$pdo = new Query();

if(isset($_GET['newsId'])){
    $newsId = $_GET["newsId"];
    $pdo = new Query();
    $news = $pdo->load_a_news_on_reading_page($newsId);
    $data = $news->fetch();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$title?>-<?= $data[1] ?></title>
  <meta charset="utf-8">
  <meta name="description" content="<?php echo substr($data[3],0,150) ?>">
<meta name="keywords" content="uwsd, United Women, United Women for Sustainable Development">
<meta name="author" content="United Women for Sustainable Development uwsd">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/styleSheet.css">
 <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</head>