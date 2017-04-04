<!DOCTYPE html>
<?php
include("db.php");
    $id = $_GET['id'];
    
    if (isset($_POST['edit'])) {
        $idUp = $_POST['idUp'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        if ($title != '' && $content != '') {
            $sql = "UPDATE note SET title='$title',content='$content' WHERE id=$idUp";
            $conn->query($sql);
            echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
        }else{
            
        }
    }
?>
<html>
<head>
<meta charset="utf-8">
<title>Edit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div id="page_editNote" data-role="page">
        <div data-role="header">
            <a data-rel="back" data-role="button" data-icon="carat-l">Back</a>
            <h2>Edit</h2>
            <a id="btn_deleteNote" name="delete" href="del.php?submit=DEL&id=<?php echo $id; ?>" onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')" data-role="button" data-icon="delete">Delete</a>
        </div>
        <div class="ui-content">
        <?php 
            $query = "SELECT * FROM note WHERE id=$id"; 
            mysqli_query("SET NAMES utf8");
            $result = $conn->query($query); 
        ?>
            <form action="Edit.php" method="post">
            <?php while($row = $result->fetch_array()) { ?> 
            <input type="text" id="tf_title_edit" name="title" value="<?php echo $row['title']; ?>">
            <textarea id="tf_content_edit" name="content"><?php echo $row['content']; ?></textarea>
            <input type="hidden" name="idUp" value="<?php echo $row['id']; ?>">
            <?php } ?>
            <input type="submit" id="btn_editNote" name="edit" data-role="button" value="Edit">
            </form>
        </div>
    </div>
</body>
</html>