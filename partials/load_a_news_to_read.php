    <?php
        $newsId = $_GET["newsId"];
        $pdo = new Query();
        $news = $pdo->load_a_news_on_reading_page($newsId);
        $data = $news->fetch();
    ?>
   
    