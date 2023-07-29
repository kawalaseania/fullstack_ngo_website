<?php 

if(isset($_GET["id"]) && isset($_GET["table"])){
    $tableName = $_GET["table"];
    $id = $_GET["id"];

    include("classes/queries.php");
    $pdo = new Query();
   
    $data = $pdo->select_one_from_any_table($tableName, $id)->fetch();
    // delete the image function 
    function clear_image($tableName, $data){
        if($tableName != "events"){
            unlink('../uploads/'.$data['pic']);
        }
    }
    

    clear_image($tableName, $data);

   

    if($pdo->delete_record($tableName, $id)){
        if($_GET['page']){
            $page = $_GET['page'];
            header("Location: $page?msg=A record has been deleted from the database successfully");
        }
        else
        {
            header("Location: index.php?msg=A record has been deleted from the database successfully");
        }
    }

}