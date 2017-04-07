<?php
    include('db.php');

    $date = date('Y-m-d');
    $title = addslashes($_POST['title']);
    $content = addslashes($_POST['content']);
    if(isset($_POST['add'])){
        $sql = "INSERT INTO note(title,content,dt) VALUES('$title','$content','$date')";
        $conn->query($sql);
    }else if($_GET['delete']==1){
        $id = $_GET['id'];
        $sql="DELETE FROM note WHERE id='".$_GET['id']."'";
        $conn->query($sql);
    }else if(isset($_POST['edit'])){
        $idUp = $_POST['idUp'];
        $title = addslashes($_POST['title']);
        $content = addslashes($_POST['content']);
        $sql = "UPDATE note SET title='$title',content='$content' WHERE id=$idUp";
        $conn->query($sql);
    }
?>

<html>
    <head>
        <title>MyNotes</title>
    </head>
    <body>
    <script language="JavaScript">
        document.location = "index.php";
    </script>
    </body>
</html>