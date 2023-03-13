<?php
    $title = $_POST['txtTitle'];
    $name = $_POST['txtName'];  
    $category_id = $_POST['category_id']; 
    $author_id = $_POST['author_id'];   
    $summary = $_POST['summary'];  
    $content = $_POST['content']; 
    $date =$_POST['date']; 
    $img = $_FILES['image'];
    $file_name = basename($img['name']);
    $folder = '../images/songs/';
    $path_file = $folder . $file_name;
    //die($path_file);
    move_uploaded_file($img['tmp_name'], $path_file);

    //$id =$_POST['id'] ;
    //die($id);
    $article = [
        'title'         => $title,
        'name'          => $name,
        'category_id'   => $category_id,
        'author_id'     => $author_id,
        'summary'       => $summary,
        'content'       => $content,
        'date'          => $date,
        'img'           => $file_name,
        
    ]; 
    //echo json_encode($article);
    require('../includes/connect.php');
    $sql = "insert into baiviet(tieude,ten_bhat,ma_tloai,ma_tgia,tomtat,noidung,ngayviet,hinhanh) 
    values (:title, :name, :category_id, :author_id, :summary, :content, :date, :img)";

    require('../includes/function.php');
    try {                                             // Start try block to run SQL
        pdo($conn,$sql, $article);
        header('location:article.php');
    } catch (PDOException $e) {  
        echo $e->getMessage();
    }
?>