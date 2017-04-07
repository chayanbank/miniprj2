<!DOCTYPE html>
<?php
include("db.php");
    $id = $_GET['id'];
?>
<html>
<head>
<meta charset="utf8">
<title>Edit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div id="page_editNote" data-role="page">
        <div data-role="header">
            <a href="index.php" data-role="button" data-icon="carat-l">Back</a>
            <h2>Edit</h2>
            <a id="btn_deleteNote" name="delete" href="del.php?id=<?php echo $id."&delete=1"; ?>" onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')" data-role="button" data-icon="delete">Delete</a>
        </div>
        <div class="ui-content">
        <?php 
            $query = "SELECT * FROM note WHERE id=$id"; 
            mysqli_query("SET NAMES utf8");
            $result = $conn->query($query); 
        ?>
            <form action="del.php" method="post">
            <?php while($row = $result->fetch_array()) { ?> 
            <input type="text" id="tf_title_edit" name="title" value="<?php echo $row['title']; ?>">
            <textarea id="tf_content_edit" name="content"><?php echo $row['content']; ?></textarea>
            <input type="hidden" name="idUp" value=<?php echo $row['id']; ?>>
            <?php } ?>
            <input type="submit" id="btn_editNote" name="edit" value="Edit">
            </form>
            <script>
             $('#btn_editNote').on('click', function(event){
            var valid = true,
            errorMessage = "";

            if($('#tf_title_edit').val() == ''){
                errorMessage = "Please enter title. \n";
                valid = false;
            }
            if($('#tf_content_edit').val() == ''){
                errorMessage += "Please enter content. \n";
                valid = false;
            }
            if(!valid && errorMessage.length > 0){
                alert(errorMessage);
                event.preventDefault();
            }
        });
    </script>
        </div>
        <div data-role="footer" data-position="fixed">
            <h1>นายชยันต์ สุรัตน์เรืองชัย 58160253</h1>
        </div>
    </div>
</body>
</html>